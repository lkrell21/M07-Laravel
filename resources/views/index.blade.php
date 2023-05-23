@extends('app')

@section('content')
  <div class="mb-3">
    <form action="{{route ('todos') }}" method="POST">
      @csrf 
      @if (session('success'))
        <h5 class="alert alert-succes">{{session('success')}}</h6>
        @endif
      @error('nombre')
      <h6 class="alerrt alert-danger">{{$$message}}</h6>
      @enderror
    <label for="" class="form-label">Name</label>
    <input type="text"
      class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
  </div>
  <div class="mb-3">
  <form action="{{route ('todos') }}" method="POST">
      @csrf
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="" placeholder="name@example.com">
  </div>
  <div class="mb-3">
        <label for="password">Contrasenya:</label>
        <input type="password" id="password" name="contrasenya" required>
        @error('contrasenya')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
      </div>
  <button type="submit" class="btn btn-primary">Submit</button>
@endsection