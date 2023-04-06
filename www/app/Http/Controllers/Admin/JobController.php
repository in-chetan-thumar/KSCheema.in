<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\Company;
use App\Models\CompanyLocations;
use App\Models\JobDepartments;
use App\Models\Jobs;
use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('job-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.jobs.job_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $companies = [];
        try {
            $companiesList = Company::where('is_active', 'Y')->get();
            $jobDepartments = JobDepartments::where('is_active', 'Y')->pluck('title', 'id');
            foreach ($companiesList as $company) {
                if (!empty($company->parentCompany)) {
                    $companies[$company->parentCompany->company_name][$company['id']] = $company->company_name;
                }
            }
            $data['error'] = false;
            $data['view'] = view('admin.jobs.offcanvas',compact('companies','jobDepartments'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $params = $request->validated();
            $job = resolve('job-repo')->store($params);
            if (!empty($job)) {

                $data['error'] = false;
                $data['message'] = 'Job save successfully.';
                $data['view'] = resolve('job-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $companies = [];
        try {
            $job = resolve('job-repo')->findByID($id);
            $companiesList = Company::where('is_active', 'Y')->get();
            $locations = CompanyLocations::where('company_id', $job->company_id)->groupBy('city')->pluck('city','id');
            $jobDepartments = JobDepartments::where('is_active', 'Y')->pluck('title', 'id');
            foreach ($companiesList as $company) {
                if (!empty($company->parentCompany)) {
                    $companies[$company->parentCompany->company_name][$company['id']] = $company->company_name;
                }
            }
            $data['error'] = false;
            $data['view'] = view('admin.jobs.offcanvas',compact('companies','jobDepartments','job','locations'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $params = $request->validated();
            $job = resolve('job-repo')->update($params,$id);
            if (!empty($job)) {

                $data['error'] = false;
                $data['message'] = 'Job save successfully.';
                $data['view'] = resolve('job-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }

        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('job.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['path'] =  \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }
        return $params;
    }
}
