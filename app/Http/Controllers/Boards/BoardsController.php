<?php

namespace App\Http\Controllers\Boards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Board;

class BoardsController extends Controller
{
    public function index()    {
        $boards = Board::all();
        return view('board.index')->with('boards',$boards);
    }

    public function create()    {
        return view('board.create');
    }

    public function store(Request $request)    {
        //dd( $request->all());
        Board::create( $request->all() );
        return redirect('boards');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
