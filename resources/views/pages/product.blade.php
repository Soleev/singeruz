@extends('layouts.app')
@section('title', $product->title)
@section('description', $product->description)
@section('content')
    <div class="section">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-12 col-lg-7">
                    <div class="owl-carousel product-carousel owl-dots-overlay-right">
                        @php
                            $imgField = 'img'; // Используем 'img' для первого изображения
                            $imgUrl = $product->$imgField;
                        @endphp
                        @if (!empty($imgUrl))
                            <div data-hash="1">
                                <img src="{{ asset('assets/images/product/' . $imgUrl) }}" alt="Product Image 1">
                            </div>
                        @endif
                        @foreach (range(2, 5) as $index)
                            @php
                                $imgField = 'img' . $index;
                                $imgUrl = $product->$imgField;
                            @endphp
                            @if (!empty($imgUrl))
                                <div data-hash="{{ $index }}">
                                    <img src="{{ asset('assets/images/product/' . $imgUrl) }}"
                                         alt="Product Image {{ $index }}" loading="lazy">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <ul class="product-carousel-thumbnails">
                        @php
                            $imgField = 'img'; // Используем 'img' для первого изображения
                            $imgUrl = $product->$imgField;
                        @endphp
                        @if (!empty($imgUrl))
                            <li>
                                <a href="#1">
                                    <img src="{{ asset('assets/images/product/' . $imgUrl) }}"
                                         alt="Thumbnail 1">
                                </a>
                            </li>
                        @endif
                        @foreach (range(2, 5) as $index)
                            @php
                                $imgField = 'img' . $index;
                                $imgUrl = $product->$imgField;
                            @endphp
                            @if (!empty($imgUrl))
                                <li>
                                    <a href="#{{ $index }}">
                                        <img src="{{ asset('assets/images/product/' . $imgUrl) }}"
                                             alt="Thumbnail {{ $index }}">
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-5">
                    <h3 class="fw-normal m-0">{{ $product->title }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class="mt-4">
                        <p>SKU: {{ $product->id }}</p>
                        <p>
                            Категория:
                            <a href="{{ url('catalog/' . $product->parent) }}">
                                {{ $product->parent_desc }}
                            </a>
                        </p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
@endsection
