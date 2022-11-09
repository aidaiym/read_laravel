<?php

namespace App\Http\Controllers;

use App\Models\Post;


class BookController extends Controller
{
    public function index(){
        $book = Post::all();
        return view('book.index', compact('book'));
    }
    public function create(){
      return view('book.create');
    }
    public function store(){
        return view('book.store');
    }
}
