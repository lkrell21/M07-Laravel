@extends('app')

@section('content')
<style>
</style>
<h3>Añadir Jugadores</h3><br>

<form action="{{ route('todos') }}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    @error('Nom')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        
    @enderror
    @error('dorsal')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre Jugador</label><br>
        <input type="text" id="exampleFormControlInput1" placeholder="Añade el nombre" name="Nom">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Dorsal Jugador</label><br>
        <input type="text" id="exampleFormControlInput1" placeholder="exp. 5" name="dorsal">
    </div>
    
        <button type="submit" >Afegeix</button>
  
</form>
@endsection