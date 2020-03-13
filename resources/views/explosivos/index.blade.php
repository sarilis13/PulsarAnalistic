@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>EXPLOSIVOS</h2>
                        <a href="{{ route('explosivos.create') }}"><button type="submit" class="btn btn-success float-left"><i class="fa fa-plus"></i> Nuevo</button></a>
                        <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" explosivo="button" aria-expanded="false">
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
                          <th width="10px">VOD</th>
                          <th width="10px">ENERGIA</th>
                          <th width="10px">PRESION</th>
                          <th colspan="2">OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($explosivo as $explosivos)
                          <tr>
                            <td>{{$explosivos -> id}}</td>
                            <td>{{$explosivos -> nombre}}</td>
                            <td>{{$explosivos -> densidad}}</td>
                            <td>{{$explosivos -> VOD}}</td>
                            <td>{{$explosivos -> energia}}</td>
                            <td>{{$explosivos -> presion}}</td>
                            <td width="10px">
                              <a href="{{ route('explosivos.edit',['idExplosivo' => $explosivos->id]) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td width="10px">
                              <form method="POST" action="{{ route('explosivos.destroy', ['idExplosivo' => $explosivos->id]) }}" >
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $explosivo->render() !!}
                  </div>
                </div>
              </div>
@endsection
