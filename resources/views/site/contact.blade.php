@extends('site.layouts.app')

@section('content')
    {{-- <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>Contact Me</h1>
                    <div class="breadcrumb breadcrumb-gray">
                        <a class="breadcrumb-item" href="{{ route('homePage') }}">Home</a>
                        <a class="breadcrumb-item" href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow p-3">
                        <div class="card-title border-bottom pb-3">
                        <h6>my contact info: </h6>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Iran</h6>
                            <p>Tehran</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">+98</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">Email</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
               @if (count($errors))
                 <div class="alert alert-danger" role="alert">
                     <ul>
                         @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
                @endif
                <div class="card-title">
                <h4> Send message for me </h4>
                </div>
                    @include('flash::message')
                    <form class="row contact_form" action="{{ route('submitContactMessage') }}" method="post" id="contactForm"
                          novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="6" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn btn-primary border"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                 data-mlat="40.701083" data-mlon="-74.1522848">
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@stop
