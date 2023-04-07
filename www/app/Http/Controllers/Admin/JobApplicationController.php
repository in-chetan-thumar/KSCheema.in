<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContactExport;
use App\Exports\JobApplicationExport;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobDepartments;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->type == 'export'){
            return Excel::download(new JobApplicationExport($request->all()), 'job_application.xlsx');
        }

        $table = resolve('job-application-repo')->renderHtmlTable($request);
        $companiesList = Company::where('is_active', 'Y')->get();
        $jobDepartments = JobDepartments::where('is_active', 'Y')->pluck('title', 'id');
        foreach ($companiesList as $company) {
            if (!empty($company->parentCompany)) {
                $companies[$company->parentCompany->company_name][$company['id']] = $company->company_name;
            }
        }
        return view('admin.jobsapplication.job_list', compact('table','companies','jobDepartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

        if (request()->routeIs('jobapplication.index') || !isset($previousUrl['query'])) {
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
