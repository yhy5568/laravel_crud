@extends('boards.layout')

@section('content')

글쓰기 진행

<form action="{{ route('boards.store') }}" method="post">
    @csrf
    <table border="1">
        <tr>
            <th>제목</th>
            <td>
                <input type="text" name="subject" value=""/>
            </td>
        </tr>
        <tr>
            <th>내용</th>
            <td>
                <textarea type="text" name="contents" row="5"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit"> 저장 </button>
            </td>
        </tr>
    </table>
</form>
@endsection