@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse($articles as $article)
                <div id="content">
                    <div class="title">
                        <a href="{{ $article->path() }}" >
                            <h2>{{$article->title}}</h2>
                        </a>
                        <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                        {{$article->body}}
                    </div>
                </div>
            @empty
                <p>No relevant articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection