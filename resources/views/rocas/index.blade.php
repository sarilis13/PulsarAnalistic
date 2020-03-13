@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ROCAS</h2>
                        <a href="{{ route('rocas.create') }}"><button type="submit" class="btn btn-success float-left"><i class="fa fa-plus"></i> Nuevo</button></a>
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
                          <th width="10px">ID</th>
                          <th width="10px">NOMBRE</th>
                          <th width="10px">DENSIDAD</th>
                          <th width="10px">COMPRESION</th>
                          <th width="10px">YOUNG</th>
                          <th colspan="2">OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($roca as $rocas)
                          <tr>
                            <td>{{$rocas -> id}}</td>
                            <td>{{$rocas -> nombre}}</td>
                            <td>{{$rocas -> densidad}}</td>
                            <td>{{$rocas -> compresion}}</td>
                            <td>{{$rocas -> young}}</td>

                            <td width="10px">
                              <a href="{{ route('rocas.edit',['idRoca' => $rocas->id]) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td width="10px">
                              <form method="POST" action="{{ route('rocas.destroy', ['idRoca' => $rocas->id]) }}" >
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $roca->render() !!}
                  </div>
                </div>
              </div>
@endsection
