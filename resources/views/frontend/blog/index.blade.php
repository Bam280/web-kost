<!DOCTYPE html>
<html lang="en-US">

@include('frontend.partials.head')


<body>
    <!-- Page Loader Start -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner"></div>
    </div>
    <!-- Page Loader End -->

    @include('frontend.partials.navbar')

    @yield('content')
    @include('frontend.blog.partials.modal')

    <section class="aubna-welcome-area">
        <!--Content before waves-->
        <div class="container text-center">
            <div class="align-items-center justify-content-between ">
                <div class="inner-header">
                    <div class="row">
                        <div class="col">
                            <div class="welcome-left">
                                <h1>Veteran Kos</h1>
                                <p>Kosan siap huni di sekitar kampus UPNVJ</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="inner-content">
                    
                 </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="aubna-blog-area section_100">
        <div class="container-md">
            @php
                $posts = \App\Post::all();
            @endphp
            <div class="row p-md-5">
                <div class="col-lg-8">
                    <div class="row row-cols-2 row-cols-lg-2">
                        @foreach ($posts as $p)
                          <div class="card btn" style="width: 18rem;" data-bs-toggle="modal" href="#exampleModalToggle">
                            <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h4 class="card-title">{{ $p->title }}</h4>
                              <div class="row">
                                <div class="col">
                                    <h6><i class="bi bi-cash"></i> Rp.{{ $p->harga }}</h6>
                                </div>
                                <div class="col">
                                    <h6>Kamar : {{ $p->max_kamarT }}</h6>
                                </div>
                              </div>
                              
                              <p class="card-text">{{ $p->alamat_kost }}</p>
                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                            </div>
                          </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-4">
                    <div class="card border-secondary">
                        @foreach ($posts as $p)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <figure class="blog-img">
                                            <a href="#">
                                                <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" alt="blog imag">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->title }}</h5>
                                            <p class="card-text">{{ Str::limit($p->body, 50) }}</p>
                                            <p class="card-text"><small class="text-muted">Last updated
                                                    {{ $p->created_at->format('d-m-Y') }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    {{-- @include('frontend.partials.footer') --}}
    @include('frontend.partials.script')
    @yield('scripts')

</body>

</html>
