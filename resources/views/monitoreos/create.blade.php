@extends('layouts.plantilla')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
     @include('monitoreos.form',['monitoreo'=>$monitoreo])

</div>
@endsection
