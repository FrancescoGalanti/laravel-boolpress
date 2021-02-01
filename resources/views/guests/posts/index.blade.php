@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog</h1>

    @if($posts->isEmpty())
      <p>No post has been posted.</p>
    @else

    @endif
</div>
@endsection