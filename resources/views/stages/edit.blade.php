@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
<h1 class="display-3">Mise à jour d'une actualité</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
<br />
@endif
<form method="post" action="{{ route('stages.update', $stages->id) }}">
@method('PATCH')
@csrf
<div class="form-group">
<label for="titre">Titre :</label>
<input type="text" class="form-control" name="titre" value="{{ $stages->titre }}" />
</div>
<div class="form-group">
<label for="last_name">Entreprise :</label>
<input type="text" class="form-control" name="entreprise" value="{{ $stages->entreprise
}}"/>
</div>
<div class="form-group">
<label for="last_name">Description :</label>
<input type="text" class="form-control" name="description" value="{{ $stages->description
}}"/>
</div>
<button type="submit" class="btn btn-primary">Mise à jour</button>
</form>
</div>
</div>
@endsection