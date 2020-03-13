@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Puntos Monitoreos</h2>
                        <a href="{{ route('puntosmonitoreos.create') }}"><button type="submit" class="btn btn-success float-left"><i class="fa fa-plus"></i> Nuevo</button></a>
                        <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" puntomonitoreo="button" aria-expanded="false">
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
                          <th width="10px">X</th>
                          <th width="10px">Y</th>
                          <th width="10px">Z</th>
                          <th colspan="2">OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($puntomonitoreo as $puntomonitoreos)
                          <tr>
                            <td>{{$puntomonitoreos -> id}}</td>
                            <td>{{$puntomonitoreos -> nombre}}</td>
                            <td>{{$puntomonitoreos -> x}}</td>
                            <td>{{$puntomonitoreos -> y}}</td>
                            <td>{{$puntomonitoreos -> z}}</td>
                            <td width="10px">
                              <a href="{{ route('puntosmonitoreos.edit',['idPuntoMonitoreo' => $puntomonitoreos->id]) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td width="10px">
                              <form method="POST" action="{{ route('puntosmonitoreos.destroy', ['idPuntoMonitoreo' => $puntomonitoreos->id]) }}" >
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $puntomonitoreo->render() !!}
                  </div>
                </div>
              </div>
@endsection
