@extends('layouts.masternew')
@section('judul','Home')
@section('konten')
    <!--========== SWIPER SLIDER ==========-->
    <div class="s-swiper js__swiper-one-item">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url({{asset('compro/img/1920x1080/02.jpg')}});">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">A Mobile Experience<br>That Inspires Travel</h1>
                    </div>
                    <a class="js__popup__youtube" href={{asset("https://www.youtube.com/watch?v=lcFYdgZKZxY")}} title="Intro Video">
                        <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                    </a>
                </div>
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url({{asset('compro/img/1920x1080/01.jpg')}});">
                <div class="container g-text-center--xs g-ver-center--xs">
                    <div class="g-margin-b-30--xs">
                        <div class="g-margin-b-30--xs">
                            <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">We Craft Experience<br>That Help Brands<br>Stand Out</h2>
                        </div>
                        <a class="js__popup__youtube" href={{asset("https://www.youtube.com/watch?v=lcFYdgZKZxY")}} title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Swiper Wrapper -->

        <!-- Arrows -->
        <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
        <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
        <!-- End Arrows -->
        
        <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
            <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
            <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
        </a>
    </div>
    <!--========== END SWIPER SLIDER ==========-->
<!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">We Create Beautiful Experiences <br> That Drive Successful Businesses.</h2>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Responsive Layout</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Fully Customizable</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Pixel Perfect</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Endless Possibilities</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Powerful Performance</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Parallax Support</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
        </div>
        <!-- End Features -->

        <!-- Parallax -->
        <div class="js__parallax-window" style="background: url({{asset("compro/img/1920x1080/03.jpg")}}) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">The Fastest Way To Develop</h2>
                </div>
                <a href={{asset("http://keenthemes.com/")}} class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Learn More</a>
            </div>
        </div>
        <!-- End Parallax -->

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Culture</p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Megakit</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs">We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation. The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                        <p class="g-font-size-18--xs">Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src={{asset("compro/img/970x970/03.jpg")}} alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        <!-- Subscribe -->
        <div class="js__parallax-window" style="background: url({{asset("compro/img/1920x1080/07.jpg")}}) 50% 0 no-repeat fixed;">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group" action="{{route('pesan.save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email" required>
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

        <!-- Portfolio Filter -->
        <div class="container g-padding-y-80--xs">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Gallery</h2>
            </div>
        </div>
        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->
        <div class="container g-margin-b-100--xs">
            <div id="js__grid-portfolio-gallery" class="cbp">
                @foreach($gallery as $key => $value)
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src={{asset('image/foto/'.$value->foto)}} alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">{{$value->nama}}</h4>
                            <p class="g-color--white-opacity">{{$value->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
                @endforeach
            </div>
            <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->

        <!-- Testimonials -->
        <div class="js__parallax-window" style="background: url({{asset("compro/img/1920x1080/04.jpg")}}) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        @foreach($testimoni as $key => $value)
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>"{{$value->pesan}}"</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">{{$value->nama}}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->

        <!-- Clients -->
        <div class="g-bg-color--sky-light">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
                <!-- Swiper Clients -->
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="s-clients-v1" src={{asset("compro/img/clients/01-dark.png")}} alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                <img class="s-clients-v1" src={{asset("compro/img/clients/02-dark.png")}} alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                <img class="s-clients-v1" src={{asset("compro/img/clients/03-dark.png")}} alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                <img class="s-clients-v1" src={{asset("compro/img/clients/04-dark.png")}} alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1" src={{asset("compro/img/clients/05-dark.png")}} alt="Clients Logo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- News -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">Latest News</h2>
            </div>
            <div class="row">
                @foreach($blog as $key => $value)
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="{{asset('image/foto/'.$value->foto)}}" alt="img">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href={{asset("http://keenthemes.com/")}}>{{$value->judul_artikel}}</a></h3>
                            <p>{{$value->deskripsi}}</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                @endforeach
            </div>
        </div>
        <!-- End News -->

        <!-- Counter -->
        <div class="js__parallax-window" style="background: url({{asset("compro/img/1920x1080/06.jpg")}}) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">{{$jumlah_karyawan}}</figure>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Karyawan</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">{{$jumlah_jabatan}}</figure>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Jabatan</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">{{$jumlah_testimoni}}</figure>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Testimoni</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">{{$jumlah_pesan}}</figure>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Pesan Masuk</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">{{$jumlah_subscribe}}</figure>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Subscribe</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">{{$jumlah_blog}}</figure>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Blog</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->

        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Feedback</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Kirim Kami Catatan!</h2>
                </div>
                <form class="row justify-content-center" action="{{route('testimoni.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-10 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" name="nama" class="form-control s-form-v2__input g-radius--50" placeholder="* Nama" required>
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" name="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email" required>
                            </div>
                            <div class="g-margin-b-20--xs">
                            <input type="text" name="no_telp" class="form-control s-form-v2__input g-radius--50" placeholder="* Nomor Telepon" required>
                            </div>
                            <div class="g-margin-b-20--xs">
                            <select name="status" class="form-control s-form-v2__input g-radius--50" required>
                                <option value="" selected disabled>* Pilih Status</option>
                                <option value="AKTIF">Aktif</option>
                                <option value="NONAKTIF">Non Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" name="pesan" placeholder="* Pesan" required></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!-- Google Map -->
        <section class="s-google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5264801550848!2d106.89013341406415!3d-6.325747795422074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eda911ab7471%3A0xb6e2ffa1495135d2!2sInti%20Multi%20Solusi%20IMS!5e0!3m2!1sid!2sid!4v1643968923362!5m2!1sid!2sid" width="1280" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->
@endsection