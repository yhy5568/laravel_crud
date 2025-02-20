@extends('boards.layout')

@section('content')

여기에 게시판을 만들거야

<a href="/boards/create">글쓰기</a>
<a href="{{ route('boards.create') }}">글쓰기</a>


<table border='1'>
    <tr>
        <th>No</th>
        <th>제목</th>
        <th>작성일</th>
        <th>관리</th>
    </tr>

    @foreach($lists as $ls)
    <tr>
        <td>{{ $ls->id }}</td>
        <td>{{ $ls->subject }}</td>
        <td>{{ $ls->created_at }}</td>
        <td>보기, 수정, 삭제</td>
    </tr>
    @endforeach
</table>

@endsection