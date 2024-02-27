@extends('layouts.app')
@section('content')
<h1>afficher détail d'un employé</h1>
<table class="table table-bordered">
    <tr>
        <th>Nom:</th>
        <td>{{ $employe->Nom }}</td>
    </tr>
    <tr>
        <th>Prénom:</th>
        <td>{{ $employe->Prénom }}</td>
    </tr>
    <tr>
        <th>Société:</th>
        <td>{{ $employe->Company }}</td>
    </tr>
    <tr>
        <th>Ville:</th>
        <td>{{ $employe->Ville}}</td>
    </tr>
    <tr>
        <th>Salaire:</th>
        <td> {{ $employe->Salaire }} DH</td>
    </tr>
</table>
<a class="btn btn-info" href="{{ 
url('employe/') }}">Return</a>
@endsection