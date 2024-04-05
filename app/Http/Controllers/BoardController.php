<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.index', [
            "title" => "board",
            "workspaces" => Workspace::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.create', [
            "title" => "create"
        ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $workspace_name = new Workspace();
        $workspace_name->workspace_name = $request->workspace_name;
        
        $request->validate([
            'workspace_name' => 'required'
        ]);

        Workspace::create($request->all());

        return redirect('/board')->with('success', "new workspace created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('board.workspace.show', [
        //     "title" => "workspace",
        //     "workspace" => Workspace::find($id)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
