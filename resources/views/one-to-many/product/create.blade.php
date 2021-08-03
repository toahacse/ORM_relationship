<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/one-to-many/product/store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label class="text-capitalize">Category:</label>
                         <select name="category_id" class="form-control"required >
                            <option>Select Category</option>
                             @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Product Title..." required>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">description:</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Enter Product Description..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">prize:</label>
                        <input type="number" name="prize" class="form-control" placeholder="Enter Product Prize..." required>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">image:</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>

        </div>
    </div>

</x-master>