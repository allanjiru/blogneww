@extends('layouts.app')

@section('tinymce')
<script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection

@section('content')


	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Create a new Post</h4>
                	@if ($errors->any())
                		<ul class="list-group">
                			@foreach ($errors->all() as $error)
                			<li style="color: red;">{{ $error }}</li>
                			@endforeach
                		</ul>
                	@endif
                  <form action="{{ route('posts.store') }}"  class="forms-sample" method="post" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Select Category</label>
                        <select class="form-control" id="exampleSelectGender" name="category_id">
						              @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <label for="exampleInputUsername1">Select Tags</label> 
                        @foreach ($tags as $tag)
                      <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-check-input">
                              {{ $tag->tag }}
                            </label>
                      </div>
                        @endforeach
                     <div class="form-group">
                  		<label for="exampleInputUsername1">Upload Image</label>
                  		<input type="file" class="dropify" name="featured_image" />
                	   </div>
                	 <div class="form-group">
                	 	<label for="exampleInputUsername1">Content</label>
                	 	<textarea id="summernoteExample" name="content">
                    		{{ old('content') }}
                 		</textarea>
                	 </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-3"></div>
	</div>


@endsection