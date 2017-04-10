<?php

namespace App\Http\Controllers\Boards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Board;

class BoardsController extends Controller
{
    public function index()    {
        $boards = Board::paginate(4);
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
        $board = Board::findOrFail($id);
        return view('board.show')->with('board',$board);
    }

    public function edit($id)
    {
        $board = Board::findOrFail($id);
        return view('board.edit')->with('board',$board)
                                 ->with('id',$id);
    }

    public function update(Request $request, $id)
    {
        $board = Board::findOrFail($id);
        $board->update($request->all());
        return redirect('boards');
    }

    public function destroy($id)
    {
        Board::destroy($id);
        return redirect('boards');
    }
}
