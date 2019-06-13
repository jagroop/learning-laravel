@extends('layouts.app')

@section('content')
<div class="container">
  {{ $errors }}
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="author" placeholder="author">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="desc" placeholder="desc" value="{{ old('desc') }}">
    <button type="submit">save</button>
  </form>
</div>
@endsection
