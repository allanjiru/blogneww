@extends('layouts.app')

@section('tinymce')
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  file_picker_callback: function(callback, value, meta) {
    // Provide file and text for the link dialog
    if (meta.filetype == 'file') {
      callback('mypage.html', {text: 'My text'});
    }

    // Provide image and alt text for the image dialog
    if (meta.filetype == 'image') {
      callback('myimage.jpg', {alt: 'My alt text'});
    }

    // Provide alternative source and posted for the media dialog
    if (meta.filetype == 'media') {
      callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
    }
  }
});
  </script>
@endsection



@section('content')


	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center"><b>Edit Post:</b>{{ $post->title }}</h4>
                	@if ($errors->any())
                		<ul class="list-group">
                			@foreach ($errors->all() as $error)
                			<li style="color: red;">{{ $error }}</li>
                			@endforeach
                		</ul>
                	@endif
                  <form action="{{ route('posts.update',['id' => $post->id]) }}"  class="forms-sample" method="post" enctype="multipart/form-data">
                  	{{ csrf_field() }}
                        {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
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
                	 	<textarea id="summernoteExample" name="content">
                    		{{ $post->content }}
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