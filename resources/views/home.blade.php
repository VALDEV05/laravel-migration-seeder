@extends('layouts.app')


@section('content')
    <h1 class="text-center">Home page</h1>
    <div class="row">
        @foreach ($holidays as $item)
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->departure}} <i class="fa fa-arrow-right"></i> {{$item->destination}}</h5>
                        <p class="card-text"><i class="fas fa-calendar-alt"></i>{{$item->duration}} days</p>
                        <p class="card-text"><i class="fas fa-home"></i>{{$item->accomodation}} </p>
                        <p class="card-text"><i class="fa fa-plane"></i>{{$item->mode_of_transport}} </p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-euro-sign"></i>{{$item->price}} </a>
                    </div>
                </div>
 
            </div>
        @endforeach 
    </div>
    
@endsection
