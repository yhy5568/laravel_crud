@extends('boards.layout')

@section('content')

여기에 게시판을 만들거야

<a href="/boards/create">글쓰기</a>
<a href="{{ route('boards.create') }}">글쓰기</a>

@endsection