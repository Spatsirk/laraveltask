@extends('layouts.app')

@section('content')
<div class="well col-md-12 nopadding topmargin">
        <div class="container-fluid nopadding toppading">
            <div class="row nopadding ">
                <div class="col-md-3 nopadding"></div>
                    <div class="col-md-6 nopadding">
                        <h1>Bildes rediģēšana</h1>

                        {!! Form::open(['action' => ['ImageController@update', $image->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('id', 'id')}}
                            {{Form::text('id', $image->id, ['class' => 'form-control', 'placeholder' => 'id'])}}
                        </div>
                            <div class="form-group">
                                <p>Location: {{Form::label('location', $image->location)}} </p>    
                                {{Form::text('location', $image->location, ['class' => 'form-control', 'placeholder' => 'location'])}}
                            </div>
                            <div class="form-group">
                                {{Form::file('cover_image')}}
                            </div>

                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Pievienot', ['class' => 'btn btn-success'])}}
                            
                        {!! Form::close() !!}

                        {!!Form::open(['action' => ['ImageController@destroy', $image->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Dzēst', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </div>
                <div class="col-md-3 nopadding"></div>
            </div>
        </div>
    </div>
@endsection


