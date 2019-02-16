@extends('layouts.app')

@section('content')

<div class="well col-md-12 nopadding topmargin">
    <div class="container-fluid nopadding toppading">
        <div class="row nopadding ">
            <div class="col-md-3 nopadding"></div>
                <div class="col-md-6 nopadding">
                    <h1>Bilžu saraksts pēc atrašanās </h1>
                    <div class="container center">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @foreach ($images as $image)
                                <a href="/images/{{$image->id}}/edit" class="">
                                    <img style="max-width:150px;" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                                        <button type="button" class="btn btn-primary ">{{$image->location}}</button>
                                </a>    
                            @endforeach
                        </div>
                        <div class="col-md-2"></div>
                        
                    </div>
                </div>
            <div class="col-md-3 nopadding"></div>
        </div>
    </div>
</div>
    
@endsection