@extends('layouts.masternew')
@section('judul','Team')
@section('konten')

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: url({{asset('compro/img/1920x1080/09.jpg')}}) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Data Karyawan</h1>
            </div>
        </div>

        <!-- Team -->
        <div class="row g-row-col--0">
            @foreach($karyawan as $key => $value)
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src={{asset('image/foto/'. $value->foto)}} alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h2 class="g-font-size-18--xs g-margin-b-5--xs">{{$value->nama}}</h2>
                            <span class="g-font-size-15--xs g-color--text"><i>{{\App\Models\Jabatan::where('id', $value->jabatan)->value('nama_jabatan')}}</i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Team -->

        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--dark-light">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Get in Touch</h2>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs">
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity">support@keenthemes.com</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                            <p class="g-color--white-opacity">277 Bedford Avenue, Brooklyn</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                            <p class="g-color--white-opacity">+ (1) 001 389 3720</p>
                        </div>
                    </div>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>
                </form>
            </div>
            <img class="s-mockup-v2" src={{asset("compro/img/mockups/pencil-01.png")}} alt="Mockup Image">
        </div>
        <!-- End Feedback Form -->
        <!--========== END PAGE CONTENT ==========-->
@endsection