@extends('eksternal.includes.default')
@section('title', 'Blog')
@section('content')
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach($table as $row)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('post-detail', $row['id'])}}">
                    <h2 class="post-title">{{ $row['title'] }}</h2>
                    <h3 class="post-subtitle">
                        @if(strlen($row['body']) > 140)
                            @php
                                $str = substr($row['body'], 0, 137) . '...';
                            @endphp
                        @else
                            @php
                                $str = $row['body'].'...';
                            @endphp
                        @endif
                        {!! $str !!}
                    </h3>
                </a>
                <p class="post-meta">
                    Posted 
                    on {{ date('d M Y', strtotime($row['created_at'])) }}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach
            
            {!! $table->appends(Request::capture()->except('page'))->render('layouts.paginate') !!}
            <!-- Pager-->
            <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> -->
        </div>
    </div>
</div>
@endsection
