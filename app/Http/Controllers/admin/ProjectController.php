<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\StoreProjectRequest;

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
        $projects = Project::paginate(10);

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
    public function store(StoreProjectRequest $request)
    {
        $data = $request->except('_token');
        $data = $request->validated();

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
    public function update(StoreProjectRequest $request, Project $project)
    {
        $data = $request->except('_token');
        $data = $request->validated();
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

    /* ripristinare elementi dal cestino */
    public function restore(string $id)
    {
        $projects = Project::onlyTrashed()->findOrFail($id);
        $projects->restore();

        return redirect()->route('admin.project.index')->with('message_restore', $projects->nome . " è stato ripristinato con successo!!");
    }

    /* cancellare definitivamente un'elemento */
    public function delete(string $id)
    {
        $projects = Project::onlyTrashed()->findOrFail($id);
        $projects->forceDelete();
        return redirect()->route('admin.project.deleteindex')->with('message_delete', $projects->nome . " è stato cancellato permanentemente con successo!!");
    }
}
