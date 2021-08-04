<x-master>

    @php
        function tagMach($seleced_tags ,$tag){
            foreach ($seleced_tags as $seleced_tag){
                if($seleced_tag->id == $tag){
                    return true;
                }
            }
            return false;
        }
    @endphp

    <div class="card">
        <div class="card-body">

            <form action="{{url('/many-to-many/blog/update',["id"=>$blog->id])}}" method="post" enctype="multipart/form-data" name="myFrom">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label class="text-capitalize">Tag:</label>
                         <select name="tag[]" id="tag_select" class="form-control" multiple="multiple" >
                             @foreach($tags as $tag)
                                 <option value="{{$tag->id}}" {{tagMach($seleced_tag,$tag->id) ? 'selected': ''}}>{{$tag->name}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">title:</label>
                        <input type="text" name="title" class="form-control" value="{{$blog->title}}">
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">body:</label>
                        <textarea type="text" name="body" class="form-control">{{$blog->body}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">photo:</label>
                        <input type="file" name="photo" class="form-control">
                        <img src="{{asset($blog->photo)}}" height="100px" width="100px">
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