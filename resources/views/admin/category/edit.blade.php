@extends('layouts.app')

@section('content')

<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Update Category</h4>
                	@if ($errors->any())
                		<ul class="list-group">
                			@foreach ($errors->all() as $error)
                			<li style="color: red;">{{ $error }}</li>
                			@endforeach
                		</ul>
                	@endif
                  <form action="{{ route('categories.update',[ 'id' => $category->id]) }}"  class="forms-sample" method="post">
                  	{{ csrf_field() }}
                        {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-3"></div>
	</div>


@endsection