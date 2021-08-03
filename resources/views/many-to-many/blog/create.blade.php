<x-master>


    <div class="card">
        <div class="card-body">

            <form action="{{url('/many-to-many/blog/store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label class="text-capitalize">Tag:</label>
                         <select name="tag[]" id="tag_select" class="form-control" required multiple="multiple">
                             @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Product Title..." required>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">body:</label>
                        <textarea type="text" name="body" class="form-control" placeholder="Enter Product Description..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">photo:</label>
                        <input type="file" name="photo" class="form-control" required>
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