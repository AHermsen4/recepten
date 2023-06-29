<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    //Laat alle recepten zien
    public function index() 
    {
        return view('recepten', [
            'recepten' => Recept::all()
        ]);
    }

    //Laat één recept zien
    public function show(Recept $recept) 
    {
        return view('recept', [
            'recept' => $recept
        ]);
    }

    //Sla form op
    public function store(Request $request)
    {
        // dd($request->all());
        $formInhoud = $request->validate([
            'auteur' => 'required',
            'titel' => 'required',
            'kooktijd' => 'required',
            'body' => 'required'
        ]);
        
        if($request->hasFile('body')) {
            $formInhoud['body'] = $request->file('body')->store('images', 'public');
        }
        Recept::create($formInhoud);
        
        return redirect('/');
    }

    //Laat aanpas form zien
    public function edit(Recept $recept)
    {
        return view('edit', ['recept' => $recept]);
    }

    //Pas form aan
    public function change(Request $request, Recept $recept)
    {
        $formInhoud = $request->validate([
            'auteur' => 'required',
            'titel' => 'required',
            'kooktijd' => 'required',
            'body' => 'required'
        ]);
        
        if($request->hasFile('body')) {
            $formInhoud['body'] = $request->file('body')->store('images', 'public');
        }
        $recept->update($formInhoud);
        
        return redirect('/');
    }

    //Delete form
    public function verwijder(Recept $recept)
    {
        return view('delete', ['recept' => $recept]);
    }

    //Destroy recept
    public function destroy(Recept $recept)
    {
        $recept->delete();
        return redirect('/');
    }

    //Laat create form zien
    public function create()
    {
        return view('create');
    }
}
