<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobApplicationRequest;
use App\Mail\JobSubmitMail;
use App\Models\Company;
use App\Models\CompanyLocations;
use App\Models\Contact;
use App\Models\JobApplications;
use App\Models\JobDepartments;
use App\Models\Jobs;
use App\Models\Page;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Agent;

use Session;

class FrontController extends Controller
{
    public function __construct()
    {
        $agent = new Agent();
        $device_type = "web";
        if ($agent->isMobile())
            $device_type = "mobile";
        if ($agent->isTablet())
            $device_type = "tablet";

        //dd($device_type);
        Session::put('device_type', $device_type);
    }

    public function index()
    {
        $this->setSEOMeta();
        // app('common-helper')->getSEOMeta();
        return view('front.index');
    }

    public function about()
    {
        $agent = new Agent();
        $device_type = "web";
        if ($agent->isMobile())
            $device_type = "mobile";
        if ($agent->isTablet())
            $device_type = "tablet";

        //dd($device_type);
        Session::put('device_type', $device_type);
        $this->setSEOMeta();
        // app('common-helper')->getSEOMeta();
        return view('front.about');
    }

    public function ourCompany()
    {
        $this->setSEOMeta();
        return view('front.our_company');
    }

    public function media()
    {
        $this->setSEOMeta();
        return view('front.media');
    }

    public function contact()
    {
        $this->setSEOMeta();
        return view('front.contact');
    }

    public function mercedesBenzCentralStar()
    {
        $this->setSEOMeta();
        return view('front.mercedes_benz_central_star');
    }

    public function ather()
    {
        $this->setSEOMeta();
        return view('front.ather');
    }

    public function careers()
    {
        $this->setSEOMeta();
        return view('front.careers');
    }

    public function viewApplyForm(Request $request)
    {
        try {
            $companies = $jobDepartments = [];
            $params = $request->all();
            if ($request->type == 1) {
                $companiesList = Company::where('is_active', 'Y')->get();
                $jobDepartments = JobDepartments::where('is_active', 'Y')->pluck('title', 'id');
                foreach ($companiesList as $company) {
                    if (!empty($company->parentCompany)) {
                        $companies[$company->parentCompany->company_name][$company['id']] = $company->company_name;
                    }
                }
            }
            $data['error'] = false;
            $data['message'] = "";
            $data['view'] = view('front.apply_job_form', compact('params', 'companies', 'jobDepartments'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = "Error occur.!";
            return response()->json($data);
        }
    }

    public function viewOpenPositions()
    {
        $companies = [];
        $this->setSEOMeta();
        $companiesList = Company::where('is_active', 'Y')->get();
        $jobDepartments = JobDepartments::where('is_active', 'Y')->pluck('title', 'id');
        $jobs = Jobs::where('is_active', 'Y')->get();
        $job_list_view = view('front.job_list', compact('jobs'))->render();
        foreach ($companiesList as $company) {
            if (!empty($company->parentCompany)) {
                $companies[$company->parentCompany->company_name][$company['id']] = $company->company_name;
            }
        }

        return view('front.view_open_positions', compact('companies', 'jobDepartments', 'job_list_view'));
    }

    public function getLocationFormCompany($id)
    {
        $data = [];
        $options = '<option selected="selected" value="">Select location</option>';
        try {
            $locations = CompanyLocations::where('company_id', $id)->groupBy('city')->get();

            foreach ($locations as $location) {
                $options .= '<option value="' . $location->id . '">' . $location->city . '</option>';
            }

            $data['error'] = false;
            $data['message'] = "";
            $data['options'] = $options;
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = "Error occur.!";
            return response()->json($data);
        }
    }

    public function getJobs(Request $request)
    {
        try {

            $jobs = Jobs::where('title', 'LIKE', '%' . $request->query_str . '%')
                ->when(!empty($request->company_id), function ($query) use ($request) {
                    $query->orWhere('company_id', $request->company_id);
                })
                ->when(!empty($request->company_location_id), function ($query) use ($request) {
                    $query->orWhere('company_location_id', $request->company_location_id);
                })->when(!empty($request->company_location_id), function ($query) use ($request) {
                    $query->orWhere('company_location_id', $request->company_location_id);
                })->when(!empty($request->job_department_id), function ($query) use ($request) {
                    $query->orWhere('job_department_id', $request->job_department_id);
                })->get();

            $data['error'] = false;
            $data['message'] = "";
            $data['view'] = view('front.job_list', compact('jobs'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = "Error occur.!";
            return response()->json($data);
        }
    }

    public function storeJobApplication(JobApplicationRequest $request)
    {
        try {

            $params = [];
            $params = $request->validated();
            $params['job_department_id'] = $request->get('job_department_id', 0);
            $params['job_id'] = $request->get('job_id', 0);
            $params['current_location'] = $request->get('current_location', 0);

            if ($request->has('file_name')) {
                $fileDir = config('constants.APPLICATION_DOC_PATH');

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['file_name'] = basename($request->file('file_name')->store($fileDir));
            }

            $job_application = JobApplications::create($params);

            if (!empty($job_application)) {
                $params = [];
                $params['user'] = 'Admin';
                $params['email'] = User::whereHas('roles', function ($query) {
                        $query->where('name', 'Admin');
                    })->first()->email ?? null;

                Mail::send(new JobSubmitMail($params));
                $data['error'] = false;
                $data['message'] = "Job application save successfully.!";
                return response()->json($data);
            }
            $data['error'] = true;
            $data['message'] = "Error occur.!";
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = "Error occur.!";
            return response()->json($data);
        }

    }

    public function carWale()
    {
        $this->setSEOMeta();
        return view('front.car_wale');
    }

    /* public function print($print_page)
    {
        $this->setSEOMeta();
        return view('front.print.'.$print_page);
    } */

    public function print($print_page)
    {
        $this->setSEOMeta();
        return view('front.print', compact('print_page'));
    }

    public function altigreen()
    {
        $this->setSEOMeta();
        return view('front.altigreen');
    }

    public function contactSubmit(Request $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        // dd($request);

        try {
            $params['fname'] = $request->fname;
            $params['lname'] = $request->lname;
            $params['email'] = $request->email;
            $params['phone'] = $request->phone;
            $params['message'] = $request->message;

            $page = Contact::create($params);

            if (!empty($page)) {

                Mail::send(new ContactMail($params));

                $data['error'] = false;
                toastr()->success('contact submitted successfully!');
                DB::commit();
            } else {
                toastr()->error('Oops! Something went wrong!');
            }
            return view('front.thank_you');
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
        // dd($request->all());
    }

    public function setSEOMeta()
    {
        $content = Page::select('id', 'title', 'meta_keywords', 'meta_description')->whereRouteName(Route::currentRouteName())->first();
        SEOTools::setTitle(!empty($content->title) ? $content->title : 'KS Cheema', false);
        SEOTools::setDescription(!empty($content->meta_description) ? $content->meta_description : 'KS Cheema description');
        SEOMeta::addKeyword(!empty($content->meta_keywords) ? $content->meta_keywords : 'KS Cheema keywords');
    }
}
