@extends('layouts.main')
@section('content')
<h1> ini tampilan blog</h1>

@foreach ($posts as $post)
<h2>
    <a href="/blog/{{ $post['slug'] }}"> {{  $post['title'] }}</a>
</h2>
<h5> By : {{  $post[ 'author'] }}</h5>
 <p>{{  $post['body'] }}</p>
 @endforeach
@endsection