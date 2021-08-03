<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/one-to-many/product/update',["id"=>$product->id])}}" method="post" enctype="multipart/form-data" name="editProductForm">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label class="text-capitalize">Category:</label>
                         <select name="category_id" class="form-control" required >
                             @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">title:</label>
                        <input type="text" name="title" class="form-control" value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">description:</label>
                        <textarea type="text" name="description" class="form-control">{{$product->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">prize:</label>
                        <input type="number" name="prize" class="form-control" value="{{$product->prize}}">
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">image:</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{asset($product->image)}}" height="100px" width="100px">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>

    <script>
        document.forms['editProductForm'].elements['category_id'].value='{{$product->category_id}}';
    </script>
</x-master>