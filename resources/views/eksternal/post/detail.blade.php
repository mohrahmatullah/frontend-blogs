@extends('eksternal.includes.default')
@section('title', 'Blog')
@section('content')
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="post-title">{{ $table['title'] }}</h2>
                <p>{{$table['body']}}</p>
                <h5 class="post-title">Category</h5>
                <button type="button" class="btn btn-outline-info btn-sm">{{ $table['category']['title'] }}</button>
                <h5 class="post-title">Tag</h5>
                @foreach($tag as $row)
                    @if(in_array($row['id'], json_decode($table['tag_id'])) )
                    <button type="button" class="btn btn-outline-danger btn-sm">{{$row['title']}}</button>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</article>
@endsection
