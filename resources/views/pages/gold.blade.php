@extends('layouts.app')
@section('title', 'Износостойкая продукция')
@section('description', 'Описание')
@section('content')
    <div class="section">
        <div class="container">
            <!-- Sorting -->
            <div class="mb-4">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6">
                        <p>Показано {{ $goldProductCount }} золотых продуктов</p>
                    </div>
                    <div class="col-12 col-sm-6 text-sm-end">
                        <form method="GET" action="{{ url('/catalog') }}">
                            <select class="custom-select" name="sort" onchange="this.form.submit()">
                                <option value="" disabled {{ request()->sort ? '' : 'selected' }}>Сортировка по умолчанию</option>
                                <option value="1" {{ request()->sort == 1 ? 'selected' : '' }}>Сортировка по новизне</option>
                                <option value="2" {{ request()->sort == 2 ? 'selected' : '' }}>Сортировка по рейтингу</option>
                            </select>
                        </form>
                    </div>
                </div><!-- end row -->
            </div>

            <!-- Products -->
            <div class="row g-4 gy-5">
                @foreach($goldProducts as $product)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-box">
                            <div class="product-img">
                                <a href="{{ url('/catalog/'.$product->category->slug.'/' .$product->id) }}">
                                    <img src="{{ asset('assets/images/product/' . $product->img) }}"
                                         width="640" height="360" loading="lazy" alt="{{ $product->title }}">
                                    @if(!empty($product->img2))
                                        <img src="{{ asset('assets/images/product/' . $product->img2) }}"
                                             width="640" height="360" loading="lazy" alt="{{ $product->title }}">
                                    @endisset
                                </a>
                                <div class="product-badge-left">
                                    <span class="font-small uppercase font-family-secondary fw-medium">
                                        {{ $product->category->parent ?? 'Категория не найдена' }}
                                    </span>
                                </div>
                                <div class="product-badge-right gold">
                                    <span class="font-small uppercase font-family-secondary fw-medium">Золото</span>
                                </div>
                            </div>
                            <div class="product-title">
                                <h6 class="fw-medium">
                                    <a href="{{ url('/catalog/'.$product->category->slug.'/' .$product->id) }}">{{ $product->title }}</a>
                                    </a>
                                </h6>
                                <div class="add-to-wishlist">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
@endsection
