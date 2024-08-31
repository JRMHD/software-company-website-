<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(9);
        return view('portfolio', compact('projects'));
    }

    public function show(Project $project)
    {
        $recentProjects = Project::latest()->where('id', '!=', $project->id)->take(3)->get();
        return view('portfolio-single', compact('project', 'recentProjects'));
    }


    public function adminIndex()
    {
        $projects = Project::latest()->paginate(9);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'languages' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Project::create($validatedData);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'languages' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $imagePath = $request->file('image')->store('project_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $project->update($validatedData);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
