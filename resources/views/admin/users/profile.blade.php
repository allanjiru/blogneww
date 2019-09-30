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
    <div class="col-md-1"></div>
    <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Edit Profile</h4>
                  @if ($errors->any())
                    <ul class="list-group">
                      @foreach ($errors->all() as $error)
                      <li style="color: red;">{{ $error }}</li>
                      @endforeach
                    </ul>
                  @endif
                  <form action="{{ route('user.profile.update') }}"  class="forms-sample" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">New Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Upload new avatar</label>
                      <input type="file" class="dropify" name="avatar" />
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Facebook profile</label>
                      <input type="text" class="form-control" name="facebook" value="{{ $user->profile->facebook }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Youtube Profile</label>
                      <input type="text" class="form-control" name="youtube" value="{{ $user->profile->youtube }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">About you</label>
                      <textarea id="summernoteExample" name="content">
                        {{ $user->profile->about }}
                    </textarea>
                    </div>




                    <button type="submit" class="btn btn-primary">Update profile</button>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-3"></div>
  </div>


@endsection