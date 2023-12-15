@extends('layouts.front.index')

@section('content')
<!-- Slider awal -->
    <div class="slider-area">
        <div class="slider-active owl-dot-style owl-carousel">
            <div class="single-slider ptb-240 bg-img"
                style="background-image:url(assets/img/slider/banner1.jpg);">
                <div class="container">
                    <div class="slider-content slider-animated-1">
                        <h1 class="animated">Cari Komponen Terbaik Untuk <span class="theme-color">Komputermu</span></h1>
                        <h1 class="animated">Hanya Di PCXPERT.</h1>
                        <p>Tempat terbaik untuk mencari komponen pc dan merakit pc, serta tempat aksesoris ataupun barang-barang berkaitan dengan komputer lainnya</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Slider akhir -->
    <!-- Product Area mulai -->
    <div class="product-area bg-image-1 pt-100 pb-95">
        <div class="container">
            <div class="featured-product-active hot-flower owl-carousel product-nav">
                <div class="product-wrapper">
                    <div class="product-img">
                        <!-- Produk 1 -->
                        <a href="{{ route('produk-details') }}">
                            <img alt="" src="assets/img/product/product-1.jpg">
                        </a>
                        <span>-20%</span>
                        <div class="product-action">
                            <a class="action-wishlist" href="{{ route('wishlist') }}" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="{{ route('wishlist') }}" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="{{ route('wishlist') }}" data-target="#exampleModal" data-toggle="modal"
                                title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="{{ route('produk-details') }}">Vga Geforce 3090 TI 8GB</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="{{ route('produk-details') }}">+ Masukan Ke Keranjang</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <!-- Produk 2 -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="{{ route('produk-details') }}">
                            <img alt="" height="268" width="268" src="assets/img/product/product-2.jpg">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                                title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Mobo Asrock H410 M.2</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <!-- Produk 3 -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-3.jpg">
                        </a>
                        <span>-50%</span>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                                title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Processor Intel I9-12900K</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <!-- Produk 4 -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-4.jpg">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                                title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">SSD Colorful CN600 128GB M.2 NVMe</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                            </div>
                        </div>
                        <!-- Produk 5 -->
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-5.jpg">
                        </a>
                        <span>-30%</span>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                                title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">PSU ASUS ROG Thor 1200 Watt</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    <!-- Banner Start -->
    <div class="banner-area pt-100 pb-70">
        <div class="container">
            <div class="banner-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner img-zoom mb-30">
                            <a href="#">
                                <img src="assets/img/banner/banner-1.png" alt="">
                            </a>
                            <div class="banner-content">
                                <h4>-50% Sale</h4>
                                <h5>Summer Vacation</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner img-zoom mb-30">
                            <a href="#">
                                <img src="assets/img/banner/banner-2.png" height="363" width="570" alt="">
                            </a>
                            <div class="banner-content">
                                <h4>-20% Sale</h4>
                                <h5>Winter Vacation</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- New Products Start -->
    <div class="product-area gray-bg pt-90 pb-65">
        <div class="container">
            <div class="product-top-bar section-border mb-55">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">Produk Populer</h3>
                </div>
            </div>
            <div class="tab-content jump">
                <div class="tab-pane active">
                    <div class="featured-product-active owl-carousel product-nav">
                        <div class="product-wrapper-single">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="{{ route('produk-details') }}">
                                        <img alt="" src="assets/img/product/product-1.jpg">
                                    </a>
                                    <span>-30%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">Vga Nvidia Geforce 3090 TI 8GB</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" height="268" width="268" src="assets/img/product/product-2.jpg">
                                    </a>
                                    <span>-50%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">Mobo Asrock H410 M.2</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-single">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="assets/img/product/product-3.jpg">
                                    </a>
                                    <span>-60%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">Processor Intel Core I9-12900K M.2</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" height="268" width="268" src="assets/img/product/product-4.jpg">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">SSD Colorful CN600 128GB M.2 NVMe</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-single">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="assets/img/product/product-5.jpg">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">PSU ASUS ROG Thor 1200 Watt</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" height="268" width="268" src="assets/img/product/product-6.jpg">
                                    </a>
                                    <span>-40%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">CPU Cooler DeepCool Castle 240EX RGB</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-single">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="assets/img/product/product-7.jpg">
                                    </a>
                                    <span>-60%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">Gaming Case Geoo Mid Tower PC 3 Sides</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" height="268" width="268" src="assets/img/product/product-8.jpg">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">RAM DDR4 32GB 3800HMz XPG ROG</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-single">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="assets/img/product/product-4.jpg">
                                    </a>
                                    <span>-30%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">SSD Colorful CN600 128GB M.2 NVMe</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img alt="" src="assets/img/product/product-3.jpg">
                                    </a>
                                    <span>-70%</span>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-cart" href="#" title="Add To Cart">
                                            <i class="ion-ios-shuffle-strong"></i>
                                        </a>
                                        <a class="action-compare" href="#" data-target="#exampleModal"
                                            data-toggle="modal" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-left">
                                    <div class="product-hover-style">
                                        <div class="product-title">
                                            <h4>
                                                <a href="product-details.html">Vga Nvidia Geforce 3090 TI 8GB</a>
                                            </h4>
                                        </div>
                                        <div class="cart-hover">
                                            <h4><a href="product-details.html">+ Masukan Ke Keranjang</a></h4>
                                        </div>
                                    </div>
                                    <div class="product-price-wrapper">
                                        <span>$100.00 -</span>
                                        <span class="product-price-old">$120.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Products End -->
    <!-- Testimonial Area Start -->
    <div class="testimonials-area bg-img pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt
                                ut labore</p>
                            <h4>Gregory Perkins</h4>
                            <h5>Customer</h5>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt
                                ut labore</p>
                            <h4>Khabuli Teop</h4>
                            <h5>Marketing</h5>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img alt="" src="assets/img/icon-img/testi.png">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt
                                ut labore </p>
                            <h4>Lotan Jopon</h4>
                            <h5>Admin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- News Area Start -->
    {{-- <div class="blog-area bg-image-1 pt-90 pb-70">
        <div class="container">
            <div class="product-top-bar section-border mb-55">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">Latest News</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30">
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-single-1.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content pt-25">
                            <span class="blog-date">14 Sep</span>
                            <h3><a href="#">Lorem ipsum sit ame co.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius tempor incididunt ut
                                labore et dolore</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30">
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-single-2.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content pt-25">
                            <span class="blog-date">20 Dec</span>
                            <h3><a href="#">Lorem ipsum sit ame co.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius tempor incididunt ut
                                labore et dolore</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30">
                        <div class="blog-thumb">
                            <a href="#"><img src="assets/img/blog/blog-single-3.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content pt-25">
                            <span class="blog-date">18 Aug</span>
                            <h3><a href="#">Lorem ipsum sit ame co.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius tempor incididunt ut
                                labore et dolore</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- News Area End -->
    <!-- Newsletter Araea Start -->
    <div class="newsletter-area bg-image-2 pt-90 pb-100">
        <div class="container">
            <div class="product-top-bar section-border mb-45">
                <div class="section-title-wrap text-center">
                    <h3 class="section-title">DAFTARKAN EMAIL ANDA UNTUK MENDAPATKAN INFO DAN PENAWARAN SPESIAL</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-6 col-md-10 col-md-auto">
                    <div class="footer-newsletter">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email"
                                        placeholder="Your Email Address*" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text"
                                            name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1"
                                            value=""></div>
                                    <div class="submit-button">
                                        <input type="submit" value="Kirim" name="subscribe"
                                            id="mc-embedded-subscribe" class="button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
