@extends('layouts.app')

@section('content')
    <div align="center">
        <form action="{{ route('post.update', $data->id) }}" method="POST">
            標題:<input type="text" name="title" value="{{ $data->title }}" /><br />
            內容:<textarea name="content">{{ $data->content }}</textarea><br />
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="submit" value="送出">
        </form>
    </div> 
@endsection