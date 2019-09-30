@extends('layouts.app')

@section('content')


	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Create a new Category</h4>
                	@if ($errors->any())
                		<ul class="list-group">
                			@foreach ($errors->all() as $error)
                			<li style="color: red;">{{ $error }}</li>
                			@endforeach
                		</ul>
                	@endif
                  <form action="{{ route('categories.store') }}"  class="forms-sample" method="post">
                  	@csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-3"></div>
	</div>


@endsection