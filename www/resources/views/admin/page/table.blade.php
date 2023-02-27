<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Meta Keywords</th>
            <th>Meta Description</th>
            <th>Route Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->title }}</td>
                <td>{{ $row->meta_keywords }}</td>
                <td>{{ $row->meta_description }}</td>
                <td>{{ $row->route_name }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            @can('page.edit')
                                <a class="dropdown-item" onclick="showPageEditModal(event)"
                                    href="{{ route('page.edit', $row->id) }}">Edit</a>
                            @endcan
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
