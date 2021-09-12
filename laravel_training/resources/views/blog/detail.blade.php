@extends('layouts')
@section('title', 'ブログ詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{ $blog->title }}</h2>
        <h6>作成日: {{ $blog->created_at }}</h6>
        <h6>更新日: {{ $blog->updated_at }}</h6>
        <span>{{ $blog->content }}</span>
    </div>
</div>
@endsection
