@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>MONITOREOS</h2>
                        <a href="{{ route('monitoreos.create') }}"><button type="submit" class="btn btn-success float-left"><i class="fa fa-plus"></i> Nuevo</button></a>
                        <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" monitoreo="button" aria-expanded="false">
                        <i class="fa fa-wrench"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th width="10px">PROYECTO</th>
                          <th width="10px">FECHA</th>
                          <th width="10px">BANCO</th>
                          <th width="10px">NIVEL</th>
                          <th colspan="2">OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($monitoreo as $monitoreos)
                          @can('read-monitoreo',$monitoreos)
                        <tr>
                            <td>{{$monitoreos -> malla}}</td>
                            <td>{{$monitoreos -> fecha}}</td>
                            <td>{{$monitoreos -> banco}}</td>
                            <td>{{$monitoreos -> nivel}}</td>
                            <td width="10px">
                              <a href="{{ route('monitoreos.edit',['idMonitoreo' => $monitoreos->id]) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td width="10px">
                              <form method="POST" action="{{ route('monitoreos.destroy', ['idMonitoreo' => $monitoreos->id]) }}" >
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                              </form>
                            </td>
                          </tr>
                          @endcan
                          @endforeach
                        </tbody>
                    </table>
                    {!! $monitoreo->render() !!}
                  </div>
                </div>
              </div>
@endsection
