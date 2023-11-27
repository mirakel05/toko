@extends('frontend/layouts/main')
@section('content')
    <section id="home-section" class="hero">
        @foreach ($hero as $item)
            <div class="home-slider owl-carousel">
                <div class="slider-item js-fullheight">
                    <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                            data-scrollax-parent="true">
                            <img class="one-third order-md-last img-fluid" src="{{ Storage::url($item->photo) }}"
                                alt="">
                            <div class="one-forth d-flex align-items-center ftco-animate"
                                data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">#New Arrival</span>
                                    <div class="horizontal">
                                        <h1 class="mb-4 mt-3">{{ $item->judul }}</h1>
                                        <p class="mb-4">{{ $item->keterangan }}</p>
                                        <p><a href="/shop" class="btn-custom">Discover Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">New Bag's Arrival</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($arrival as $item)
                    <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                        <div class="product d-flex flex-column">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{ Storage::url($item->photo) }}"
                                    alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3">
                                <div class="d-flex">
                                    <div class="cat">
                                        <span>Lifestyle</span>
                                    </div>
                                    <div class="rating">
                                        <p class="text-right mb-0">
                                            <a href="#"><span class="ion-ios-star"></span></a>
                                            <a href="#"><span class="ion-ios-star"></span></a>
                                            <a href="#"><span class="ion-ios-star"></span></a>
                                            <a href="#"><span class="ion-ios-star"></span></a>
                                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <h3><a href="/shop">{{ $item->nama }}</a></h3>
                                <div class="pricing">
                                    <p class="price"><span>{{ $item->harga }}</span></p>
                                </div>
                                <p class="bottom-area d-flex px-3">
                                    <a href="/shop" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                                class="ion-ios-add ml-1"></i></span></a>
                                    <a href="/shop" class="buy-now text-center py-2">Buy now<span><i
                                                class="ion-ios-cart ml-1"></i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-deal bg-primary">
        <div class="container">
            @foreach ($deal as $item)
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ Storage::url($item->photo) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="heading-section heading-section-white">
                            <span class="subheading">Deal of the month</span>
                            <h2 class="mb-3">Deal of the month</h2>
                        </div>
                        <div id="timer" class="d-flex mb-4">
                            <div class="time" id="days"></div>
                            <div class="time pl-4" id="hours"></div>
                            <div class="time pl-4" id="minutes"></div>
                            <div class="time pl-4" id="seconds"></div>
                        </div>
                        <div class="text-deal">
                            <h2><a href="/shop">{{ $item->nama }}</a></h2>
                            <p class="price"><span class="mr-2 price-dc">{{ $item->harga }}</span><span
                                    class="price-sale">{{ $item->harga1 }}</span>
                            </p>
                            <ul class="thumb-deal d-flex mt-4">
                                @foreach ($photo as $item)
                                    <li class="img" style="background-image: url({{ Storage::url($item->photo) }});">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-section ftco-animate mb-5">
                        <h2 class="mb-4">Our satisfied customer says</h2>
                    </div>
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($review as $item)
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="text">
                                        <p class="mb-4 pl-4 line">{{ $item->keterangan }}</p>
                                        <p class="name">{{ $item->nama }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
