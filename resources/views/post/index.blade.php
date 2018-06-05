@extends('layouts.app')

@section('content')
    <div align="center">
        <a href="{{ route('post.create') }}">新增文章</a>
    </div><br />
    <div align="center">
        @foreach ($datas as $key => $data)
            標題:<a href="{{ route('post.show', $data->id) }}">{{ $data->title }}</a> <br />
            姓名:{{ $data->user->name }} <br />
            內容:{{ $data->content }} <br /><hr />
        @endforeach
    </div>
@endsection