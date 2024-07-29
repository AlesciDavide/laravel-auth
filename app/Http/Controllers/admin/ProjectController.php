<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $newProject = new Project($data);
        $newProject->save();

        return redirect()->route('admin.project.show', ['project' => $newProject->id])->with('message_nuovo_progetto', $newProject->nome . " è stato Creato con successo!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //admin.project.edit
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->except('_token');
        $project->update($data);

        return redirect()->route('admin.project.show', ['project' => $project->id])->with('message_update_progetto', $project->nome . " è stato aggiornato con successo!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('admin.project.index')->with('message_delete', $project->nome . " è stato cancellato con successo!!");
    }

    /* pagina con i progetti nel cestino */

    public function deletedIndex()
    {
        $projects = Project::onlyTrashed()->get();

        return view('admin.project.delete', compact('projects'));
    }
}
