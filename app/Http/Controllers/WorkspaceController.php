<?php

namespace App\Http\Controllers;

use App\Models\TableName;
use App\Models\ToDoList;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkspaceController extends Controller
{
    //
    public function show(Workspace $name){
        // $workspace = Workspace::find($name);
        $workspace = $name;

        $tableNames = DB::table('table_names')
        ->join('workspaces', 'table_names.id_workspace', '=', 'workspaces.id')
        ->select('table_names.*')
        ->where('workspaces.id', $workspace->id)
        ->get();

        // $toDos = [];

        // foreach ($tableNames as $table) {
        //     $toDos = DB::table('to_do_lists')
        //     ->join('table_names', 'to_do_lists.id_table_name', '=', 'table_names.id')
        //     ->select('to_do_lists.*')
        //     ->where('table_names.id', $table->id)
        //     ->get();
        // }

        // dd($workspace);
        // dd($tableName);
        // dd($toDos);

        return view('board.workspace.show', [
            "title" => "workspace",
            "tableNames" => $tableNames
            // "toDos" => $toDos
        ]);


    }

    public function showTable(TableName $workspace, $toDoList){

        

        return view('board.workspace.TodoList.show');

    }
}
