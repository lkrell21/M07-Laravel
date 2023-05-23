@extends('app')
@section('content')
<div class="mx-auto" style="width: 200px;">
  <form name="fbuscar" class="mb-3" action="{{ route ('todos-buscar')}}" method="POST">
  @csrf  
  @if (session('success'))
     <h6 class="alert alert-success">{{session('success')}}</h6>    
  @endif
  @error('nombre')
     <h6 class="alert alert-danger">{{$message}}</h6>    
  @enderror
 
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
  <button type="submit" class="btn btn-primary">Buscar</button>
  </form>  
</div>
@endsection
