<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchList extends Controller
{

    public function index()
    {
    return view('batches.batchlist');
    }
}
