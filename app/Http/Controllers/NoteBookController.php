<?php

namespace App\Http\Controllers;

use App\Models\NoteBook;
use App\Http\Requests\StoreNoteBookRequest;
use App\Http\Requests\UpdateNoteBookRequest;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Models\User;

class NoteBookController extends Controller
{

public $user;


    public function __construct(User $user){

        $user = Auth::user();

        $this->user = $user;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $user = Auth::user();
        $notebooks = $user->notebooks()->get();

       // dd($notebooks);

        return view(view: 'notebook.index', data: compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        return view(view: 'notebook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteBookRequest $request)
    {
        //
        $user = Auth::user();
        $data =[

            'title' => $request->title,
            'type' =>$request->type,
            'amount' => $request->amount,
            'date' => now()->toDateString(),

        ];

        $res = $user->notebooks()->create($data);

        if($res){

            return redirect()->back()->with('success', 'Notebook created successfully.');
        }else{

            return redirect()->back()->with('error', 'Notebook note created.');
        }
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
