@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>USUARIOS</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" roca="button" aria-expanded="false">
                    <i class="fa fa-wrench"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th class="text-center" width="150px">
                            <a class="create-modal btn btn-success btn-sm" data-toggle="modal" data-target="#modalAddForm">
                                NUEVO<i class="glyphicon glyphicon-plus"></i>
                            </a>
                        </th>
                    </tr>
                        {{ csrf_field() }}
                        <?php $no=1; ?>
                </thead>
                <tbody>
                    @foreach($usuario as $usuarios)
                    <tr class="usuario{{$usuarios -> id}}">
                        <td>{{$no++}}</td>
                        <td>{{$usuarios -> nombres}}</td>
                        <td>{{$usuarios -> apellidos}}</td>
                        <td>{{$usuarios -> correo}}</td>
                        <td>
                            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{ $usuarios->id }}" data-toggle="modal" data-target="#modalViewForm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{ $usuarios->id }}" data-toggle="modal" data-target="#modalEditForm">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{ $usuarios->id }}" data-toggle="modal" data-target="#modalDeleteForm">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                    {!! $usuario->render() !!}
        </div>
    </div>
</div>

<div class="modal fade" id="modalAddForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form class="form-horizontal" role="form">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="nombres">NOMBRES</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="apellidos">APELLIDOS</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="celular">CELULAR</label>
                            <input type="number" class="form-control" id="celular" name="celular"/>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="usuario">USUARIO</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="correo">CORREO</label>
                            <input type="email" class="form-control" id="correo" name="correo" />
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="password">PASSWORD</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mina_id">MINA</label>
                            <select name="mina_id" id="mina_id" class="form-control" required>
                            @foreach($mina as $mina)
                            <option value="{{$mina -> id}}">{{$mina -> nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rol_id">ROL</label>
                            <select name="rol_id" id="rol_id" class="form-control" required>
                            @foreach($rol as $rol)
                            <option value="{{$rol -> id}}">{{$rol -> nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="add" name="button" class="btn-submit btn-success" >GUARDAR</button>
            </div>
        </div>
    </div>
</div>
@endsection
