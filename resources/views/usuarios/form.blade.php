@if($roca->exists)
<form action="{{route('rocas.update',['roca'=>$roca -> id])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

@else

<form action="{{ route('rocas.store')}}" method="POST">
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
<input id="nombre" type="text" name="nombre" value="{{$roca -> nombre}}" class="form-control" >
</div>

<div class="form-group">
    <label for="title">Densidad</label>
    <input id="densidad" type="text" name="densidad" value="{{$roca -> densidad}}" class="form-control" >
</div>

<div class="form-group">
    <label for="title">Compresion</label>
    <input id="compresion" type="text" name="compresion" value="{{$roca -> compresion}}" class="form-control" >
</div>

<div class="form-group">
    <label for="title">Young</label>
    <input id="young" type="text" name="young" value="{{$roca -> young}}" class="form-control" >
</div>

<div class="form-group">
    <label for="mina_id">Mina:</label>
    <select name="mina_id" id="mina_id" class="form-control">
      @foreach($mina as $mina)
       <option value="{{$mina -> id}}">{{$mina -> nombre}}</option>
      @endforeach
    </select>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>  Guardar</button>
    <label for=""></label>
    <a href="../rocas" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>  Atras</a>
</div>
