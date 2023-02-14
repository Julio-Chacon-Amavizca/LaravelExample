@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
<h1>En esta pagina podras editar cursos</h1>
<form action=" {{route('cursos.update', $curso)}}" method="POST">

    @csrf
    @method('put')
    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{$curso->name,old('name')}}">
    </label>
    </label>
    @error('name')

    <br>
    <small>*{{$message}}</small>
    <br>

    @enderror
    <br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5">{{$curso->descripcion,old('descripcion')}}</textarea>
    </label>
    @error('descripcion')

    <br>
    <small>*{{$message}}</small>
    <br>

    @enderror
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{$curso->categoria,old('categoria')}}">
    </label>
    @error('categoria')

    <br>
    <small>*{{$message}}</small>
    <br>

    @enderror
    <br>
    <button type="submit"> Actualizar Formulario </button>
</form>
@endsection