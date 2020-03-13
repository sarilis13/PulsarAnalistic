@if($explosivo->exists)
<form action="{{route('explosivos.update',['explosivo'=>$explosivo -> id])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

@else

<form action="{{ route('explosivos.store')}}" method="POST">
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
<input id="nombre" type="text" name="nombre" value="{{$explosivo -> nombre}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Densidad</label>
    <input id="densidad" type="text" name="densidad" value="{{$explosivo -> densidad}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">VOD</label>
    <input id="VOD" type="text" name="VOD" value="{{$explosivo -> VOD}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Energia</label>
    <input id="energia" type="text" name="energia" value="{{$explosivo -> energia}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="title">Presion</label>
    <input id="presion" type="text" name="presion" value="{{$explosivo -> presion}}" class="form-control" required>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>  Guardar</button>
    <label for=""></label>
    <a href="../explosivos" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>  Atras</a>
</div>
