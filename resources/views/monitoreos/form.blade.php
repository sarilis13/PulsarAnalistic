@if($monitoreo->exists)
<form action="{{route('monitoreos.update',['monitoreo'=>$monitoreo -> id])}}" method="POST" id="msform">
        {{csrf_field()}}
        {{method_field('PUT')}}

@else

<form action="{{ route('monitoreos.store')}}" method="POST" id="msform">
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

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>MONITOREO</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                        </ul>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Malla</label>
                                <input id="malla" type="text" name="malla" value="{{$monitoreo -> malla}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Banco</label>
                                <input id="banco" type="text" name="banco" value="{{$monitoreo -> banco}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Nivel</label>
                                <input id="nivel" type="text" name="nivel" value="{{$monitoreo -> nivel}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Fecha</label>
                                <input id="fecha" type="date" name="fecha" value="{{$monitoreo -> fecha}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="puntomonitoreo_id">Punto Monitoreo</label>
                                <select name="puntomonitoreo_id" id="puntomonitoreo_id" class="form-control" required>
                                @foreach($puntomonitoreo as $puntomonitoreo)
                                <option value="{{$puntomonitoreo -> id}}">{{$puntomonitoreo -> nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="explosivo_id">Explosivo</label>
                                <select name="explosivo_id" id="explosivo_id" class="form-control" required>
                                @foreach($explosivo as $explosivo)
                                <option value="{{$explosivo -> id}}">{{$explosivo -> nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="roca_id">Roca</label>
                                <select name="roca_id" id="roca_id" class="form-control" required>
                                @foreach($roca as $roca)
                                <option value="{{$roca -> id}}">{{$roca -> nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="title">Blast X</label>
                                <input id="x" type="text" name="x" value="{{$monitoreo -> x}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="title">Blast Y</label>
                                <input id="y" type="text" name="y" value="{{$monitoreo -> y}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="title">Blast Z</label>
                                <input id="z" type="text" name="z" value="{{$monitoreo -> z}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Carga Operante</label>
                                <input id="carga_maxima" type="text" name="carga_maxima" value="{{$monitoreo -> carga_maxima}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">VPP</label>
                                <input id="VPP" type="text" name="VPP" value="{{$monitoreo -> VPP}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>DISEÑO</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Burden</label>
                                <input id="burden" type="text" name="burden" value="{{$monitoreo -> burden}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Espaciamiento Hole</label>
                                <input id="espaciamiento" type="text" name="espaciamiento" value="{{$monitoreo -> espaciamiento}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Diametro Taladro</label>
                                <input id="diametro" type="text" name="diametro" value="{{$monitoreo -> diametro}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="title">Caras libres</label>
                                <input id="caras_libres" type="text" name="caras_libres" value="{{$monitoreo -> caras_libres}}" class="form-control" required>
                            </div>
                        </div>
                </div>
             </div>
            </div>
           </div>

       <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>TIMING</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="panel-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title">Tiempo filas</label>
                        <input id="tiempo_filas" type="text" name="tiempo_filas" value="{{$monitoreo -> tiempo_filas}}" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">Tiempo Salidas</label>
                        <input id="tiempo_taladros" type="text" name="tiempo_taladros" value="{{$monitoreo -> tiempo_taladros}}" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inicio_id">Tipo Iniciacion</label>
                        <select name="inicio_id" id="inicio_id" class="form-control" required>
                        @foreach($entrada as $entrada)
                        <option value="{{$entrada -> id}}">{{$entrada -> nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="salida_id">Tipo Salida</label>
                        <select name="salida_id" id="salida_id" class="form-control" required>
                        @foreach($salida as $salida)
                        <option value="{{$salida -> id}}">{{$salida -> nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
         </div>
        </div>
       </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>  Guardar</button>
                                <label for=""></label>
                                <a href="../monitoreos" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>  Atras</a>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="usuario_id">Usuario</label>
                                <select name="usuario_id" id="usuario_id" class="form-control" required>
                                @foreach($usuario as $usuario)
                                <option value="{{$usuario -> id}}">{{$usuario -> nombres}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                </div>
             </div>
            </div>
           </div>

