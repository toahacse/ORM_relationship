<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/many-to-many/tag/store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control"
                               placeholder="Enter Tag Name..." required>

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