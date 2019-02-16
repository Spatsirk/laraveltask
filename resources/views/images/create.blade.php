@extends('layouts.app')

@section('content')

<div class="well col-md-12 nopadding topmargin">
    <div class="container-fluid nopadding toppading">
        <div class="row nopadding ">
            <div class="col-md-3 nopadding"></div>
                <div class="col-md-6 nopadding">
                        <h3>Attēla pievienošana gadījumā, ja ir vajadzība pēc tādas, ja nē, tad rediģēšana.</h3>

                        {!! Form::open(['action' => 'ImageController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{Form::label('location', 'location')}}
                                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'location'])}}
                            </div>
                            <div class="form-group">
                                {{Form::file('cover_image')}}
                            </div>
                            {{Form::submit('Pievienot', ['class' => 'btn btn-success'])}}
                        {!! Form::close() !!}
                </div>
            <div class="col-md-3 nopadding"></div>
        </div>
    </div>
</div>
    



@endsection