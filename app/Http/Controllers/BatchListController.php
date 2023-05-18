<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchListController extends Controller
{

    public function index()
    {
    return view('batches.batchlist');
    }

    public function create()
    {
    return view('batches.batchcreate');
    }
}
