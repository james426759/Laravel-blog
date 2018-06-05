@extends('layouts.app')

@section('content')
    <div align="center">
        標題:{{ $data->title }} <br />
        內容:{{ $data->content }} <br/>
        <a class="btn btn-primary" href="{{ route('post.edit', $data->id) }}">編輯</a>

        <form action="{{ route('post.destroy', $data->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" value="刪除">
        </form>
        <a class="btn btn-primary" href="{{ route('post.index') }}">返回</a>
    <div>
@endsection