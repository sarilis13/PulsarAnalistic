@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Minas</h2>
                        <a href="{{ route('minas.create') }}"><button type="submit" class="btn btn-success float-left"><i class="fa fa-plus"></i> Nuevo</button></a>
                        <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" mina="button" aria-expanded="false">
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
                          <th width="20px">NOMBRE</th>
                          <th colspan="2">OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($mina as $minas)
                          <tr>
                            <td>{{$minas -> id}}</td>
                            <td>{{$minas -> nombre}}</td>

                            <td width="10px">
                              <a href="{{ route('minas.edit',['idMina' => $minas->id]) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td width="10px">
                              <form method="POST" action="{{ route('minas.destroy', ['idMina' => $minas->id]) }}" >
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $mina->render() !!}
                  </div>
                </div>
              </div>
@endsection
