<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function getLibri(){
        $books = Book::all();
        // dd($books);
        return view('pages.libri', compact('books'));
    }
}
