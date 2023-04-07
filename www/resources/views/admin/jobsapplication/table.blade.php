<table id="job-data " class="table table-striped table-bordered dt-responsive mt-2"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>Company</th>
        <th width="30%">Location</th>
        <th width="10%">Department</th>
        <th>Applicant detail</th>
        <th>Created at</th>
        <th width="8%">CV file</th>
    </tr>
    </thead>
    <tbody>
    @if (count($tableData) == 0)
        <tr>
            <td colspan="6" class="text-center">
                <h3>No Data Found</h3>
            </td>
        </tr>
    @else
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->company->company_name ?? '' }}</td>
                <td>{!! $row->company_location_formatted ?? '' !!}</td>
                <td>{{ $row->job_department->title ?? '' }}</td>
                <td>
                    <b>Name: </b>{{ $row->full_name }}<br/>
                    <b>Email: </b>{{ $row->email }}<br/>
                    <b>Mobile: </b>{{ $row->contact_number }}<br/>
                    <b>Total experience: </b>{{ $row->total_experience }}<br/>
                </td>
                <td>{{ $row->created_at_formatted }}</td>
                <td>
                    @if(!empty($row->file_name_url))
                        <a href="{{ $row->file_name_url  }}" class="btn btn-secondary" target="_blank"><i
                                class="fa fa-eye"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

{{ $tableData->links() }}
