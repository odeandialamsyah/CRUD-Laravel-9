<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Item;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $item = Item::all(); // assuming you have an Item model
        return view('welcome', compact('item'));
    }
    public function about(){
        return view('About');
    }
    public function contact(){
        return view('Contact');
    }
}
