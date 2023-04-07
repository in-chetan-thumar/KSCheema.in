<table>
    <thead>
    <tr>
        <th>Company</th>
        <th>Location</th>
        <th>Department</th>
        <th>Applicant detail</th>
        <th>Created at</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tableData as $key => $row)
        <tr>
            <td>{{ $row->company->company_name ?? '' }}</td>
            <td>

                @if(!empty($row->company_location_id))
                    <b>Location type: </b>{{ $row->company_locations->location_type ?? '' }}<br/>
                    <b>Address: </b>      {{ $row->company_locations->address1.", ".$row->company_locations->address2
}}{{$row->company_locations->city.", ".$row->company_locations->state}}
                    <br/>
                    <b>Pincode: </b>{{ $row->company_locations->pincode ?? '' }}<br/>
                    <b>Mobile: </b>{{ $row->company_locations->mobile ?? '' }}<br/>
                @else
                    {{$row->current_location}}
                @endif
            </td>
            <td>{{ $row->job_department->title ?? '' }}</td>
            <td>
                <b>Name: </b>{{ $row->full_name }}<br/>
                <b>Email: </b>{{ $row->email }}<br/>
                <b>Mobile: </b>{{ $row->contact_number }}<br/>
                <b>Total experience: </b>{{ $row->total_experience }}<br/>
            </td>
            <td>{{ $row->created_at_formatted }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

