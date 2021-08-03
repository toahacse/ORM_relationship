<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/one-to-many/category/update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Category Name:</label>
                        <input type="text" name="title" class="form-control"
                               value="{{$category->title}}">

                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>

</x-master>