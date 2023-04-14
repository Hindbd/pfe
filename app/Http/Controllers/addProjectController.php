<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Project;



class addProjectController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view('project-add',['user'=>$user]);
        
}
public function store(Request $request): RedirectResponse
{
    $request->validate([
        'prjName' => ['required', 'string', 'max:255'],
        'prjDescription' => ['required', 'string', 'max:255'],
        'inputDateDebut'=>['required', 'date'],
        'inputDateFin'=>['required', 'date'],
    ]);

    $user = Project::create([
        'prjName' => $request->nom,
        'prjDescription' => $request->description,
        'inputDateDebut'=>$request->date_debut,
        'inputDateFin'=>$request->date_fin
    ]);



    return redirect('projects');
}
}
