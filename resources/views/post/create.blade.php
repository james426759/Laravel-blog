@extends('layouts.app')

@section('content')
    <div align="center">
        <form action="{{ route('post.store') }}" method="POST">
            標題:<input type="text" name="title" /><br />
            內容:<textarea name="content"></textarea><br />
            {{ csrf_field() }}
            <input type="submit" value="送出">
        </form>
    </div> 
@endsection