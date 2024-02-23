@extends('base')@section('main')
<div class="row">
<div class="col-sm-12">
@if(session()->get('success'))
 <div class="alert alert-success">
 {{ session()->get('success') }}
 </div>
@endif
<h1 class="display-3">Actualités</h1>
<div>
<a style="margin: 19px;" href="{{ route('actualites.create')}}" class="btn btn-primary">Nouvelle
Actualité</a>
<a style="margin: 19px;" href="./" class="btn btn-primary">Retour Site</a>
</div>
<div>
<table class="table table-striped">
<thead>
<tr>
<td>ID</td>
<td>Titre</td>
<td>Description</td>
<td colspan = 2>Actions</td>
</tr>
</thead>
<tbody>
@foreach($actualites as $actualite)
<tr>
<td>{{$actualite->id}}</td>
<td>{{$actualite->titre}}</td>
<td>{{$actualite->description}}</td>
<td><a href="{{ route('actualites.edit',$actualite->id)}}" class="btn btn-primary">Editer</a>
</td>
<td>
<form action="{{ route('actualites.destroy', $actualite->id)}}" method="post">
@csrf
@method('DELETE')
<button class="btn btn-danger" onclick="return confirm('Etes vous sûr de supprimer cette
actualité?')" type="submit">Supprimer</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<div>
</div>
@endsection
