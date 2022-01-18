@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 id="main_title" class="py-4">Holidays</h1>
        <section class="holiday">
            <div class="row">
                @foreach ($holidays as $holiday)
                    <div class="col-4">
                        <div class="card holiday m-4 shadow">
                            <div class="card-img holiday">
                                <img id="card-image" src="{{$holiday->image}}">
                            </div>
                            <div class="card-price holiday">
                                <button class="btn btn-light price shadow-sm">
                                    <p class="mb-0">da 1200 &euro; .pp</p>
                                </button>
                            </div>
                            <div class="card-body holiday">
                                <div class="card-tag text-uppercase ms-2 mt-1">
                                    <p class="mb-0 text-sm">
                                        <i class="fas fa-suitcase"></i> Vacanze
                                    </p>
                                </div>
                               <div class="card-text">
                                   <div id="title" class="text-center">
                                       <p class="mb-0 text-lg"> 
                                           Mamma mia tutti a {{$holiday->city_destination}}
                                       </p>
                                   </div>
                                   <div class="card-info-trip ms-2 mt-3">
                                       <p class="mb-0 text-sm">
                                           {{$holiday->date_departure}}<i class="fa fa-arrow-right"></i>{{$holiday->date_destination}}
                                       </p>
                                   </div>
                                </div>
                            </div>
                            <a href="{{route('home')}}"><i id="card-go" class="fa fa-arrow-right"></i></a>
                            
                        </div>
                    </div>
                @endforeach 
            </div>
            
        </section>
    </div>
    
@endsection
