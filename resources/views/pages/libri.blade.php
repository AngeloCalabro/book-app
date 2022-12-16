@extends('layouts.app')

@section('titolo', 'Lista dei libri')

@section('content')
    <h1>Libri</h1>
    <ul>
        @forelse ($books as $key=>$book)
            <li>{{ $key }} - {{ $book->title }}</li>
        @empty
            <li>No books</li>
        @endforelse
    </ul>

@endsection

