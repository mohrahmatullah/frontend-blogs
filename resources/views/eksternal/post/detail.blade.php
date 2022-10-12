@extends('eksternal.includes.default')
@section('title', 'Blog')
@section('content')
<!-- Post Content-->
<article class="mb-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="post-title">{{ $table['title'] }}</h2>
                <p>{{$table['body']}}</p>
                <h5 class="post-title mt-5">Category</h5>
                <a type="button" href="{{route('post-category', $table['category']['id'])}}" class="btn btn-outline-dark btn-sm">{{ $table['category']['title'] }}</a>
                <h5 class="post-title mt-3">Tag</h5>
                @foreach($tag as $row)
                    @if(in_array($row['id'], json_decode($table['tag_id'])) )
                    <button type="button" class="btn btn-outline-dark btn-sm">{{$row['title']}}</button>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</article>
@endsection
