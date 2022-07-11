<?php

namespace App\Http\Controllers;

use App\Models\Entry;

use Illuminate\Http\Request;


class EntryController extends Controller
{
    public function index()
    {
        return view('entries.index', [
            'entries' => Entry::where('parent_id', 0)->get(),
            'allEntries' => Entry::all(),
        ]);
    }
}
