@if($puntomonitoreo->exists)
<form action="{{route('puntosmonitoreos.update',['puntomonitoreo'=>$puntomonitoreo -> id])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

@else

<form action="{{ route('puntosmonitoreos.store')}}" method="POST">
        {{csrf_field()}}
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="form-group">
<label for="title">Nombre</label>
<input id="nombre" type="text" name="nombre" value="{{$puntomonitoreo -> nombre}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">X</label>
    <input id="x" type="text" name="x" value="{{$puntomonitoreo -> x}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Y</label>
    <input id="y" type="text" name="y" value="{{$puntomonitoreo -> y}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Z</label>
    <input id="z" type="text" name="z" value="{{$puntomonitoreo -> z}}" class="form-control" required>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>  Guardar</button>
    <label for=""></label>
    <a href="../puntosmonitoreos" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>  Atras</a>
</div>
