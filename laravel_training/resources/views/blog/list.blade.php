{{-- ブログ記事を表示するだけ --}}
{{-- views/layouts.blade.phpを継承 --}}
@extends('layouts')
{{-- @section('任意')キーワードをつけることで継承元のyield内にぶち込める --}}
@section('title', 'ブログ一覧')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>ブログ記事一覧</h2>
        <table class="table table-striped">
            @if (session('err_msg'))
                <p class="text-danger">
                    {{ session('err_msg') }}
                </p>
            @endif
            <tr>
                <th>記事番号</th>
                <th>タイトル</th>
                <th>日付</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>
                <td>{{ $blog->updated_at }}</td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='/blog/edit/{{ $blog->id }}'">編集</button>
                </td>
                <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()">
                    @csrf
                    <td>
                        <button type="submit" class="btn btn-primary" onclick="">削除</button>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection
