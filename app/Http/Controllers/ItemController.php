<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    function show() {

        $items = Item::get();

        return view('itemlist', ["items" => $items]);
    }

}
