@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Categori</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td>text</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->cat_name }}</td>
            <td>{{ $row->text }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
