<?php

namespace App\Http\Controllers;

use App\Models\NoteBook;
use App\Http\Requests\StoreNoteBookRequest;
use App\Http\Requests\UpdateNoteBookRequest;
use Auth;

class NoteBookController extends Controller
{

public $user;


    public function __construct(){

        $this->user = Auth::user();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view(view: 'notebook.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

      //  dd(Auth::user());

        return view(view: 'notebook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NoteBook $noteBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NoteBook $noteBook)
    {
        //

        return view(view: 'notebook.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteBookRequest $request, NoteBook $noteBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoteBook $noteBook)
    {
        //
    }
}
