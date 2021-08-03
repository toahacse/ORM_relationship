<x-master>

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Phone Number</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody id="data_sortable">
        @php($i=1)
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{$user->phone->phone}}</td>
                <td>
                    <a href="{{ url('/one-to-one/edit', ['id'=>$user->id]) }}" class="btn btn-success btn-xs edit">
                        Edit
                    </a>
                    <a href="{{ url('/one-to-one/delete', ['id'=>$user->id]) }}"
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