@extends('layouts.app')

@section('content')
	
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-center">Tags</h2>
                  
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
                      @if($tags->count() > 0)
                      @foreach($tags as $tag)
                      <tbody>
                        <tr>
                          <td>
                            {{$tag->tag}}
                          </td>
                          <td>
                            <a href="{{ route('tags.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                          </td>
                          <td>
                            <form action="{{ route('tags.destroy', ['id' => $tag->id ]) }}" method="post">
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
                            No Tag
                          </td>
                        </tr>
                      @endif
                    </table>
                    <br>
                    {{ $tags->links() }}
                  </div>
                </div>
              </div>
            </div>
	</div>



@endsection