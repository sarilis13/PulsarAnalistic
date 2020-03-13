@if($mina->exists)
<form action="{{route('minas.update',['mina'=>$mina -> id])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

@else

<form action="{{ route('minas.store')}}" method="POST">
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
<input id="nombre" type="text" name="nombre" value="{{$mina -> nombre}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Ubicacion</label>
    <input id="ubicacion" type="text" name="ubicacion" value="{{$mina -> ubicacion}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Tipo</label>
    <input id="tipo" type="text" name="tipo" value="{{$mina -> tipo}}" class="form-control" required>
</div>

<div class="form-group">
    <label for=""></label><br>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Guardar</button>
    <label for=""></label>
    <a href="../minas" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>  Atras</a>
</div>
