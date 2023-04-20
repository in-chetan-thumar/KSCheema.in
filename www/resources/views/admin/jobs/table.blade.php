<table id="job-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Department title</th>
            <th>Company</th>
            <th>Location</th>
            <th>Department</th>
{{--            <th>Sub title</th>--}}
{{--            <th>Description</th>--}}
            <th>Status</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if (count($tableData) == 0)
            <tr>
                <td colspan="3" class="text-center">
                    <h3>No Data Found</h3>
                </td>
            </tr>
        @else
            @foreach ($tableData as $key => $row)
                <tr>
                    <td>{{ $row->job_department->title ?? '' }}</td>
                    <td>{{ $row->company->company_name ?? '' }}</td>
                    <td>{!! $row->company_location_formatted ?? '' !!}</td>
                    <td>{{ $row->title }}</td>
{{--                    <td>{!! $row->sub_title !!} </td>--}}
{{--                    <td>{!! $row->description !!}</td>--}}
                    <td>
                        @if($row->is_active == 'Y')
                            <span class="badge badge-soft-success">Active</span>
                        @else
                            <span class="badge badge-soft-danger">In active</span>
                        @endif
                    </td>
                    <td>{{ $row->created_at_formatted }}</td>
                    <td>

                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Action <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                @can('job.edit')
                                    <a class="dropdown-item" onclick="showJobEditModal(event)"
                                        href="{{ route('job.edit', $row->id) }}">Edit</a>
                                @endcan

                                @can('job.destroy')
                                    <a class="dropdown-item"
                                        onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                        Delete</a>
                                    <form id="delete-{{ $row->id }}"
                                        action="{{ route('job.destroy', $row->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{ $tableData->links() }}
