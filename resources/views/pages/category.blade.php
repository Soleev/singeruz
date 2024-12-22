@extends('layouts.app')
@section('title', 'Продукты категории '. $parent_desc)
@section('description', 'Описание')
@section('content')
    <!-- Products section -->
    <div class="section">
        <div class="container">
            <!-- Sorting -->
            <div class="mb-4">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6">
                        <p>Показано {{ $rowsCount }} продуктов</p>
                    </div>
                    <div class="col-12 col-sm-6 text-sm-end">
                        <select class="custom-select">
                            <option selected>Сортировка по умолчанию</option>
                            <option value="1">Сортировка по новизне</option>
                            <option value="2">Сортировка по рейтингу</option>
                        </select>
                    </div>
                </div><!-- end row -->
            </div>

            <!-- Products -->
            <div class="row g-4 gy-5">
                @foreach ($products as $product)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-box">
                            <div class="product-img">
                                <a href="{{ url('/catalog/'.$product->category->slug.'/' .$product->id) }}">
                                    <img src="{{ asset('assets/images/product/' . $product->img) }}"
                                         alt="{{ $product->title }}">
                                    @if ($product->img2)
                                        <img src="{{ asset('assets/images/product/' . $product->img2) }}"
                                             alt="{{ $product->title }}">
                                    @endif
                                </a>
                                <div class="product-badge-left">
                                    <span class="font-small uppercase font-family-secondary fw-medium">
                                        {{ $product->category->parent ?? 'Категория не найдена' }}
                                    </span>
                                </div>
                                <div class="product-badge-right red">
                                    <span
                                        class="font-small uppercase font-family-secondary fw-medium">{{ $product->parent_desc }}</span>
                                </div>
                            </div>
                            <div class="product-title">
                                <h6 class="fw-medium">
                                    <a href="{{ url('/catalog/'.$product->category->slug.'/' .$product->id) }}">{{ $product->title }}</a>
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
