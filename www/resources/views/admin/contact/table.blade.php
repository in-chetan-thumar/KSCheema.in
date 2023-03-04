<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @if (count($tableData) == 0)
            <tr>
                <td colspan="5" class="text-center">
                    <h3>No Data Found</h3>
                </td>
            </tr>
        @else
            @foreach ($tableData as $key => $row)
                <tr>
                    <td>{{ $row->fname }}</td>
                    <td>{{ $row->lname }}</td>
                    <td>{{ $row->email}}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->message }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $tableData->links() }}