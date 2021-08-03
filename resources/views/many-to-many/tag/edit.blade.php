<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/many-to-many/tag/update',['id'=>$tag->id])}}" method="post"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control"
                               value="{{$tag->name}}">

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