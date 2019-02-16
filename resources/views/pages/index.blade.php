@extends('layouts.app')

@section('content')

<div class="well col-md-12 nopadding topmargin">
    <div class="container-fluid nopadding toppading">
        <div class="row nopadding ">
            <div class="col-md-3 nopadding"></div>
            <div class="col-md-6 nopadding center">
                    @php
                    foreach ($images as $image)
                    $images = DB::table('images')->select('cover_image')->where('id', 1)->get();
                @endphp
                @foreach($images as $image)
                    <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                @endforeach 
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
                                $images = DB::table('images')->select('cover_image')->where('id', 2)->get();
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
                                $images = DB::table('images')->select('cover_image')->where('id', 3)->get();
                            @endphp
                            @foreach($images as $image)
                                <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            @endforeach 
                        </div>
                        <div class="col-md-4 center ">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('id', 4)->get();
                            @endphp
                            @foreach($images as $image)
                                <img style="width:100%" src="/storage/cover_images/{{$image->cover_image}}" class="img-one">
                            @endforeach 
                        </div>
                        <div class="col-md-4 center ">
                            @php
                                foreach ($images as $image)
                                $images = DB::table('images')->select('cover_image')->where('id', 5)->get();
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
