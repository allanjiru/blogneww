@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-center">Categories</h2>
                  
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Edit
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      @if($categories->count() > 0)
                      @foreach($categories as $category)
                      <tbody>
                        <tr>
                          <td>
                            {{$category->name}}
                          </td>
                          <td>
                            <a href="{{ route('categories.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                          </td>
                          <td>
                            <form action="{{ route('categories.destroy', ['id' => $category->id ]) }}" method="post">
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
                            No Categories
                          </td>
                        </tr>
                      @endif
                    </table>
                    <br>
                    {{ $categories->links() }}
                  </div>
                </div>
              </div>
            </div>
	</div>



@endsection