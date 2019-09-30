@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Create a new user</h4>
                  @if ($errors->any())
                    <ul class="list-group">
                      @foreach ($errors->all() as $error)
                      <li style="color: red;">{{ $error }}</li>
                      @endforeach
                    </ul>
                  @endif
                  <form action="{{ route('users.store') }}"  class="forms-sample" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Add user</button>
                  </form>
                </div>
              </div>
            </div>
           <div class="col-md-3"></div>
  </div>


@endsection