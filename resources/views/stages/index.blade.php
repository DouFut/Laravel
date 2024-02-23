@extends('base')@section('main')
<div class="row">
<div class="col-sm-12">
@if(session()->get('success'))
 <div class="alert alert-success">
 {{ session()->get('success') }}
 </div>
@endif
<h1 class="display-3">Offre de Stage</h1>
<div>
<a style="margin: 19px;" href="{{ route('stages.create')}}" class="btn btn-primary">Nouveau Stage</a>
<a style="margin: 19px;" href="./" class="btn btn-primary">Retour Site</a>
</div>
<div>
<table class="table table-striped">
<thead>
<tr>
<td>ID</td>
<td>Titre</td>
<td>Entreprise</td>
<td>Description</td>

<td colspan = 2>Actions</td>
</tr>
</thead>
<tbody>
@foreach($stages as $stages)
<tr>
<td>{{$stages->id}}</td>
<td>{{$stages->titre}}</td>
<td>{{$stages->entreprise}}</td>
<td>{{$stages->description}}</td>
<td><a href="{{ route('stages.edit',$stages->id)}}" class="btn btn-primary">Editer</a>
</td>
<td>
<form action="{{ route('stages.destroy', $stages->id)}}" method="post">
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