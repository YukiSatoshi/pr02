<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
class EmployeController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$employes = Employe::all();
return view('employe.index', compact('employes'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('employe.create');
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'Nom'=>'required',
'Prénom'=>'required',
'Ville'=> 'required',
'Company' => 'required',
'Salaire' => 'required'
]);
$employe = new Employe();
$employe->Nom= $request->input('Nom');
$employe->Prénom= $request->input('Prénom');
$employe->Ville = $request->input('Ville');
$employe->Company = $request->input('Company');
$employe->Salaire= $request->input('Salaire');
$employe->save();
return redirect('/employe')->with('success', 'Employer Ajouté avec 
succès');
}
/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$employe1 = Employe::find($id);
// $personnage = Personnage::findOrFail($id);
// return view('personnage.show', compact('personnage'));
return view('employe.show',['employe'=>$employe1]); }
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$employe = Employe::findOrFail($id);
return view('employe.edit', compact('employe'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'Nom'=>'required',
'Prénom'=>'required',
'Ville'=> 'required',
'Company' => 'required',
'Salaire' => 'required'
]);
$employe1 = Employe::findOrFail($id);
$employe1->Nom = $request->get('Nom');
$employe1->Prénom = $request->get('Prénom');
$employe1->Ville = $request->get('Ville');
$employe1->Company = $request->get('Company');
$employe1->Salaire = $request->get('Salaire');
$employe1->update();
return redirect('/employe')->with('success', 'Employe Modifié avec 
succès');
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$emp = Employe::findOrFail($id);
$emp->delete();
return redirect('/employe')->with('success', 'Employé a été supprimé 
avec succès');
}
}

