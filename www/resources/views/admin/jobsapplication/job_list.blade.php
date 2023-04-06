@extends('admin.layouts.master')

@section('title')
    Job application list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['li_1' => ['Dashboard' => route('root')]])
        @slot('title')
            Job application list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-start">
                        {!! Form::open(['url' =>route('jobapplication.index'),'id' =>'form-search','class'=>'row row-cols-lg-auto g-3 align-items-center','method' => 'get']) !!}
                        <div class="form-group">
                            {{Form::select('company',$companies,request()->query('company'),['class'=>'form-select company','placeholder'=>"Select company"])}}
                        </div>
                        <div class="form-group">
                            {{Form::select('department',$jobDepartments,request()->query('department'),['class'=>'form-select department','placeholder'=>"Select department"])}}
                        </div>
                        <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>

                        &nbsp;
                        <a href="{{route('jobapplication.index')}}" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a>
                        &nbsp;
                        <button type="submit" name="type" value="export" class="btn btn-success waves-effect waves-light">
                            Export
                        </button>
                        {!! Form::close() !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-bottom')

@endsection

