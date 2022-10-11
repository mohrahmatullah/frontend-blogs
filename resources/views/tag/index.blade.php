@extends('includes.default')
@section('title', 'Blog | Dashboard')
@section('content')
<div class="content-start transition">
  <div class="container-fluid dashboard">
    <div class="content-header">
      <h1>TAG</h1>
      <p></p>
    </div>
    
    <div class="row">
      
      <div class="col-md-3">
        <div class="card">
          <div class="px-4">
              <a href="{{ route('create-tag') }}" class='btn btn-block btn-xl btn-primary font-bold mt-3'>Create Tag</a>
            </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-body"> 
          <div class="table-responsive"> 
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created</th>
                <th scope="col">View Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($table as $row)
              <tr>
                <th scope="row">{{ $loop->iteration }} </th>
                <td>{{ $row['title'] }}</td>
                <td>{{ date('d M Y', strtotime($row['created_at'])) }}</td>
                <td>
                  <a href="{{route('edit-tag', $row['id'])}}" class="btn btn-primary btn-sm">Edit</button>
                  <a href="{{route('delete-tag', $row['id'])}}" class="btn btn-warning btn-sm">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
            {!! $table->appends(Request::capture()->except('page'))->render('layouts.paginate') !!}
            </div>
          </div>
        </div>
      </div>

     </div>
  </div>
</div>
@endsection