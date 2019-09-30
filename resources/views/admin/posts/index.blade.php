@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-center">Posts</h2>
                  
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Edit
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      @if($posts->count() > 0)
                      @foreach($posts as $post)
                      <tbody>
                        <tr>
                          <td>
                            <img height="80px" src="{{URL::asset($post->featured_image)}}">
                          </td>
                          <td>
                            {{$post->title}}
                          </td>
                          <td>
                            <a href="{{ route('posts.edit', ['id' => $post->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                          </td>
                          <td>
                            <form action="{{ route('posts.destroy', ['id' => $post->id ]) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                      @else
                        <tr>
                          <td colspan="5" class="text-center"> 
                            No Posts
                          </td>
                        </tr>
                      @endif
                    </table>
                    <br>
                    <div >
                      {{ $posts->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
	</div>



@endsection