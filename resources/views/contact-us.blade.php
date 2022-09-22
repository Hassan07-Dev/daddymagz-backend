@extends('layout.web-app', ['title'=>"Contact us"])


@section('content')
    <div class="page-content bg-white">
        <div class="content-block">
            <!-- About Us -->
            <div class="section-full bg-white content-inner-2 contact-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                                    {{ Session::get('success')     }}
                                </div>
                            @endif

                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                                    {{ Session::get('error')     }}
                                </div>
                            @endif
                            <h1 class="contact-title text-center">Contact Us</h1>
                            <div class="banner-map">
                                <div id="map3" class="m-b30" style="width:100%;height:600px; border-radius:15px;"></div>
                            </div>
                            <div class="max-w700 m-auto">
                                <p class="first-content">A usce sed ligula velit. Aliquam viver ultricies  molestie ultricies. Donec etn turpis consectet aliquam non nisiassa lobortis quis sagittis porttitor. Vivamus tempus vulputate miquis hendrerit. Nunc fringilla scelerisque commodo. Donec quis erat diam. Proin magna sapien, lobortis quis pulvinar vitae, iaculis at diam. Etiam id orci quis mi fermentum feugiat. at diam. Etiam id orci quis mi fermentum feugiat. Viverra ultricies diam molestie ultricies.</p>
                                <div class="dzFormMsg"></div>
                                <form method="post" class="" action="{{ route ('home.contact') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="name" type="text" class="form-control @error('message') is-invalid @enderror" placeholder="Name">
                                            </div>
                                            @error('message')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" >
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <textarea name="message_data" rows="4" class="form-control @error('message_data') is-invalid @enderror" placeholder="Add Your Message"></textarea>
                                            </div>
                                            @error('message_data')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" value="Submit" class="btn radius-xl">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us End -->
        </div>
        <!-- contact area END -->
    </div>
@endsection
