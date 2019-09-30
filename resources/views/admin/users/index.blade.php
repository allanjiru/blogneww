@extends('layouts.app')

@section('content')
  
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-center">Users</h2>
                  
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Permissions
                          </th>
                          <th>
                            Deletes
                          </th>
                        </tr>
                      </thead>
                      @if($users->count() > 0)
                      @foreach($users as $user)
                      <tbody>
                        <tr>
                          <td>
                            <img src="{{ asset($user->profile->avatar) }}" width="60px" height="60px" style="border-radius: 50%">
                          </td>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            @if($user->admin)
                                <a href="{{ route('user.not.admin',['$id' => $user->id])}}" class="btn btn-xs btn-warning">Remove admin</a>
                            @else
                                <a href="{{ route('user.admin',['$id' => $user->id])}}" class="btn btn-xs btn-success">Make admin</a>
                            @endif
                          </td>
                          <td>
                            @if(Auth::id() !== $user->id )
                            <form action="{{ route('users.destroy', ['id' => $user->id ]) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-danger">Delete</button>
                            </form>
                            @endif
                          </td>
                        </tr>
                      </tbody>

                      @endforeach
                      @else
                        <tr>
                          <td colspan="5" class="text-center"> 
                            No User
                          </td>
                        </tr>
                      @endif
                    </table>
                  </div>
                </div>
              </div>
            </div>
  </div>



@endsection