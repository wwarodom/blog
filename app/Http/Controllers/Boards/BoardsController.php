<?php

namespace App\Http\Controllers\Boards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Board;
use App\Tag;

class BoardsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index(Request $request)    {
        $NUM_PAGE = 3;
        $boards = Board::orderBy('updated_at','desc')->paginate($NUM_PAGE);
        $page = $request->input('page');
        $page = ($page != null)?$page:1;
        return view('board.index')->with('boards',$boards)
                                ->with('page',$page)
                                ->with('NUM_PAGE',$NUM_PAGE);
    }

    public function create()    {
        $tags = Tag::all();
        return view('board.create',compact('tags'));
    }

    public function store(Request $request)    {
        
        Board::create( $request->all() );
        $tags = $request->input('tags');
        $board = Board::all()->last();
        $board->tags()->attach($tags);
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
        $tags = Tag::all();
        return view('board.edit')->with('board',$board)
                                 ->with('id',$id)
                                 ->with('tags',$tags);
    }

    public function update(Request $request, $id)
    {
        $board = Board::findOrFail($id);
        $tags = $request->input('tags');         
        
        if ($tags == null)
             $board->tags()->detach(Tag::all()); 
        else
            $board->tags()->sync($tags);      
        $board->update($request->all());
        return redirect('boards');
    }

    public function destroy($id)
    {
        Board::destroy($id);
        return redirect('boards');
    }
}
