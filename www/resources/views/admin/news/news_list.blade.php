@extends('admin.layouts.master')

@section('title')
    News list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['li_1' => ['Dashboard' => route('root')]])
        @slot('title')
            News list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('news.create')
                            <a href="{{ route('news.create') }}" onclick="showNewsSaveModal(event)" class="btn btn-primary"><i
                                    class="mdi mdi-account-plus"></i>&nbsp;Add News</a>
                        @endcan
                    </div>
                    <div class="float-start">
                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
@endsection


