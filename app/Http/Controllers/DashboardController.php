<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $book = Books::all();
        return view('pages.admin.dashboard' , ['books' => $book]);
    }
    public function cliant() {
        return view('pages.cliant.cliant');
    }
}
