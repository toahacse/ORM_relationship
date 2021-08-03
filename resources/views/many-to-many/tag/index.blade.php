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
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->name }}</td>
                <td>
                    <a href="{{ url('/many-to-many/tag/edit', ['id'=>$tag->id]) }}" class="btn btn-success btn-xs edit">
                        Edit
                    </a>
                    <a href="{{ url('/many-to-many/tag/delete', ['id'=>$tag->id]) }}"
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