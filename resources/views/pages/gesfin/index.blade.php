@extends('layout.layout')
@section('content')
    <section class="pcoded-main-container">
        {{-- <div class="pcoded-content">
         
               
        </div> --}}
        <div class="col-xl-12">
            <h2 class="mt-4">Gestion des finances</h2>
            <hr>
            <div class="card-deck">
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('assets/images/slider/compta.jpg')}}"  alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Comptabilité</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('assets/images/slider/img-slide-1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid card-img-top" src="{{asset('assets/images/slider/img-slide-4.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
    </section>


@endsection