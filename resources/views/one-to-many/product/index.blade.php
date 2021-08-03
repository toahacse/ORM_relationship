<x-master>

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Prize</th>
            <th>Image</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody id="data_sortable">
        @php($i=1)
        @foreach($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->prize }}</td>
                <td><img src="{{asset($product->image)}}" height="100px" width="100px"></td>
                <td>
                    <a href="{{ url('/one-to-many/product/edit', ['id'=>$product->id]) }}" class="btn btn-success btn-xs edit">
                        Edit
                    </a>
                    <a href="{{ url('/one-to-many/product/delete', ['id'=>$product->id]) }}"
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