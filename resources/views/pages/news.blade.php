@extends('layouts.app')
@section('title', 'Новости')
@section('description', 'Описание')
@section('content')
    <!-- Hero section -->
    <div class="section-xl bg-image parallax-bg" data-bg-src="/assets/images/newshero.jpg">
        <div class="bg-dark-04">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <h1 class="margin-0">Новости компании</h1>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <!-- Blog Post 1 -->
                    <div>
                        <div class="fancy-box-1 margin-bottom-30" style="position: relative; overflow: hidden;">
                            <a href="#" style="display: block; position: relative;">
                                <!-- Видео -->
                                <video src="/assets/video/IMG_0656.mp4" autoplay muted loop playsinline style="width: 100%; height: auto;"></video>

                                                                <!-- Контент -->
                                <div class="content top-right font-small font-family-secondary uppercase" style="position: absolute; top: 10px; right: 10px; z-index: 3;">
                                    <span>Выставки</span>
                                </div>
                            </a>
                        </div>

                        <p class="font-small font-family-secondary uppercase margin-bottom-10">Сен 19, 2024</p>
                        <h4 class="font-weight-medium"><a href="#">Участие в выставке</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                        <a class="button-text-1 margin-top-30" href="#">Read more</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
@endsection
