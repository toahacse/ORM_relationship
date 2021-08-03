<x-master>

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody id="data_sortable">
        @php($i=1)
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->title }}</td>
                <td>
                    <a href="{{ url('/one-to-many/category/edit', ['id'=>$category->id]) }}" class="btn btn-success btn-xs edit">
                        Edit
                    </a>
                    <a href="{{ url('/one-to-many/category/delete', ['id'=>$category->id]) }}"
                       onclick="return confirm('Are You Sure Delete this!!');"
                       class="btn btn-danger btn-xs">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-master>