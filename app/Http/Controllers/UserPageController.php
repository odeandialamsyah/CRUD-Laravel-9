<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class UserPageController extends Controller
{
    public function index()
    {
        $data = Item::all(); // Ambil semua data
        return view('user.page', compact('data'));
    }
}
