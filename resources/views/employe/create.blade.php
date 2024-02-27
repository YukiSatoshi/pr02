@extends('layouts.app')
@section('content')
<h1>Ajouter un employé</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ url('employe') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="Nom" placeholder="Entrez un Nom" name="Nom">
    </div>
    <div class="form-group mb-3">
        <label for="nom">Prénom :</label>
        <input type="text" class="form-control" id="Prénom" placeholder="Entrez un Prénom" name="Prénom">
    </div>
    <div class="form-group mb-3">
        <label for="company">Company:</label>
        <input type="text" class="form-control" id="Company" placeholder="Company" name="Company">
    </div>
    <div class="form-group mb-3">
        <label for="Salaire">Salaire (DH):</label>
        <input type="number" class="form-control" id="Salaire" placeholder="Salaire" name="Salaire">
    </div>
    <div class="form-group mb-3">
        <label for="detail">Ville:</label>
        <textarea class="form-control" id="Ville" name="Ville" rows="10" placeholder="Adresse"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
</form>
@endsection