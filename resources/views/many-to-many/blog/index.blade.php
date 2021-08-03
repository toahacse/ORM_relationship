<x-master>

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Body</th>
            <th>Tag</th>
            <th>Image</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody id="data_sortable">
        @php($i=1)
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->body }}</td>
                <td>
                    @foreach($blog->tags as $tag)
                        <span class="badge badge-primary" style="font-size: 14px">{{ $tag->name }}</span>
                    @endforeach
                </td>
                <td><img src="{{asset($blog->photo)}}" height="100px" width="100px"></td>
                <td>
                    <a href="{{ url('/many-to-many/blog/edit', ['id'=>$blog->id]) }}" class="btn btn-success btn-xs edit">
                        Edit
                    </a>
                    <a href="{{ url('/many-to-many/blog/delete', ['id'=>$blog->id]) }}"
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