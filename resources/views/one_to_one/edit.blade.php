<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/one-to-one/update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control"
                               value="{{$user->name}}">

                    </div>

                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="text" name="phone" class="form-control"
                               value="{{$user->phone->phone}}">

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