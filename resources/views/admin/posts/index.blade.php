@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Posts</h1>

    @if($posts->isEmpty())
      <p>No post has been posted.</p>
    @else
        there are post.
    @endif
</div>
@endsection
