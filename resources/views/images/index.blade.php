@extends('layouts.app')

@section('content')

<div class="well col-md-12 nopadding topmargin">
    <div class="container-fluid nopadding toppading">
        <div class="row nopadding ">
            <div class="col-md-3 nopadding"></div>
            <div class="col-md-6 nopadding center">                            
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <!--Indicates slides-->
                        <div class="carousel-indicators">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('location', 1)->get();
                            @endphp
                            @foreach($images as $image)
                                <li data-target="#home_main-slider" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>  
                            @endforeach
                        </div>
                    <!--Beidzas indicates slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--seit ir viss ir pareizi, bet
                                vins izvada 3 vienadas bildes, kas pec šī koda ir pareizi,
                            bet es nevaru izdomāt loģiku, lai būtu nevis vienadas, bet atšķirīgas,
                        respektīvi, karuselī pēc zemākā for cikla ir trīs vienādas bildes, bet vajag
                            lai būtu visas pēc kartas ar location 1-->

                                <!--@for($i=0;$i<count($images);$i++)
                                    @if ($i == 0)
                                        <div class="carousel-item active">                                
                                    @else
                                        <div class="carousel-item">                    
                                    @endif
                                        <img src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            </div>
                                @endfor-->
                            
                                <!--Real carousel-->
                                @php
                                    $a = 0;  
                                @endphp
                                @foreach ($images as $image)
                                    @if ($a == 0)
                                        <div class="carousel-item active">                                
                                    @else
                                        <div class="carousel-item">                    
                                    @endif
                                        <img src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                                        </div>
                                    @php
                                        $a++;    
                                    @endphp
                                @endforeach
                                        

                        </div>
                </div>

                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

            <div class="col-md-3 nopadding"></div>
    </div>

    <div class="container-fluid nopadding toppadding">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur consequat condimentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam odio nibh, interdum ac odio id, tristique tristique orci. Vivamus mollis est vitae lacinia varius. Fusce nibh orci, volutpat non orci at, pharetra fringilla leo. Quisque bibendum turpis velit. Integer bibendum ligula augue, et vulputate sem semper ac. Sed luctus nisl non ex blandit, sit amet faucibus nisi maximus. Vivamus fringilla lorem quis libero molestie dignissim. Phasellus vestibulum luctus turpis. Nam cursus sit amet nibh tempus accumsan. Etiam id lectus aliquam, viverra purus quis, finibus nisl. Praesent cursus eleifend erat non pretium.</p>

                            <p>Suspendisse tortor lacus, viverra sed interdum non, imperdiet in augue. Proin consectetur metus a ligula pharetra eleifend. Pellentesque ac lacus blandit massa porta sagittis in sed neque. Sed quis turpis metus. Aliquam erat volutpat. Suspendisse nec nulla et dui faucibus eleifend nec nec nibh. Aenean id libero faucibus elit vehicula tristique. In at ligula finibus, dictum magna non, efficitur dui. Proin vulputate ex feugiat, ultrices tortor sit amet, congue lacus. Integer consectetur ligula et sapien pretium, vitae luctus nulla viverra. Nunc luctus mollis venenatis.</p>
                        </div>
                        <div class="col-md-4 center nopadding">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('location', 2)->get();
                            @endphp
                            @foreach($images as $image)
                                <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            @endforeach 
                        </div>
                    </div>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container-fluid nopadding toppadding">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 center ">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('location', 3)->get();
                            @endphp
                            @foreach($images as $image)
                                <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            @endforeach 
                        </div>
                        <div class="col-md-4 center ">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('location', 4)->get();
                            @endphp
                            @foreach($images as $image)
                                <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            @endforeach 
                        </div>
                        <div class="col-md-4 center ">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('location', 5)->get();
                            @endphp
                            @foreach($images as $image)
                                <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            @endforeach 
                        </div>
                    </div>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    </div>
</div>






@endsection
