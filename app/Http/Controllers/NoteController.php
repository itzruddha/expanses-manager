<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $notebooks = $user->notebooks()->paginate(5);

        //$notebooks = Note::all();
        // $total = $this->calculation();

        return view('notes.index', compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $data = [
            'title' => $request->title,
            'type' => $request->type,
            'amount' => $request->amount,
            'date' => now()->toDateString(),
        ];

        $res = $user->notebooks()->create($data);

        if ($res) {
            return redirect()->back()->with('success', 'Notebook created successfully.');
        } else {
            return redirect()->back()->with('error', 'Notebook not created.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        // Implementation for showing a specific note
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {

        //dd($note);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:cr,dr',
            'amount' => 'required|numeric',
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('success', 'Notebook updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Notebook deleted successfully.');
    }

    private function calculation($startdate = null, $enddate = null)
    {

        $user = Auth::user();

        if ($startdate && $enddate) {

            $totalcredit = $user->notebooks->where('type', 'cr')->sum('amount');
            $totaldebit = $user->notebooks->where('type', 'dr')->sum('amount');
            $total = $totalcredit - $totaldebit;

            return $total;
        } else {
            $totalcredit = $user->notebooks->where('type', 'cr')->sum('amount');
            $totaldebit = $user->notebooks->where('type', 'dr')->sum('amount');
            $total = $totalcredit - $totaldebit;

            return $total;
        }

    }
}
