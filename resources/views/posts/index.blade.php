@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ route('posts.create') }}">add new post</a>
  <ul>
    @foreach($posts as $post)
        <li>{{ $post->title }} - {{ $post->author }}</li>
    @endforeach
  </ul>
  {!! $posts->links() !!}
</div>
@endsection
