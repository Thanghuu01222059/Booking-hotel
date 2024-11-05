@extends('layouts.frontend')

@section('content')
    <!--==================== HOME ====================-->
    <section>
        <div class="swiper-container">
            <div>
                <!--========== ISLANDS 1 ==========-->
                <section class="islands">
                    <img src="{{ asset('frontend/assets/img/hero.jpg') }}" alt="" class="islands__bg" />
                    <div class="bg__overlay">
                        <div class="islands__container container">
                            <div class="islands__data" style="z-index: 99; position: relative">
                                <h2 class="islands__subtitle">
                                    Khám phá
                                </h2>
                                <h1 class="islands__title">
                                    Thế Giới Tuyệt Đẹp
                                </h1>
                                <p class="islands__description">
                                    Đây là chuyến du hành thời gian hoàn hảo và tận hưởng <br /> vẻ đẹp của thế giới.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!--==================== LOGOS ====================-->
    <section class="logos" style="margin-top: 9rem; padding-bottom: 3rem">
        <div class="logos__container container grid">
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/tripadvisor.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/airbnb.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/booking.png') }}" alt="" />
            </div>
            <div class="logos__img">
                <img src="{{ asset('frontend/assets/img/airasia.png') }}" alt="" />
            </div>
        </div>
    </section>

    <!--==================== POPULAR ====================-->
    <section class="section" id="popular">
        <div class="container">
            <span class="section__subtitle" style="text-align: center">Giá Tốt Nhất</span>
            <h2 class="section__title" style="text-align: center">
                Những Địa Điểm Du Lịch Nổi Tiếng
            </h2>

            <div class="popular__container swiper">
                <div class="swiper-wrapper">
                    @foreach ($travel_packages as $travel_package)
                        <article class="popular__card swiper-slide">
                            <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                                <img src="{{ Storage::url($travel_package->galleries->first()->images) }}" alt=""
                                    class="popular__img" />
                                {{-- @if ($travel_package->galleries->isNotEmpty())
                                    <img src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                                        alt="" class="popular__img" />
                                @else
                                    <p>No gallery available</p>
                                @endif --}}

                                <div class="popular__data">
                                    <h2 class="popular__price">
                                        {{ number_format($travel_package->price, 0, ',', '.') }} VNĐ
                                    </h2>
                                    <h3 class="popular__title">
                                        {{ $travel_package->location }}
                                    </h3>
                                    <p class="popular__description">{{ $travel_package->type }}</p>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
                <div class="swiper-button-next">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="bx bx-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>

    <!--==================== VALUE ====================-->
    <section class="value section" id="value">
        <div class="value__container container grid">
            <div class="value__images">
                <div class="value__orbe"></div>

                <div class="value__img">
                    <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
                </div>
            </div>

            <div class="value__content">
                <div class="value__data">
                    <span class="section__subtitle">Tại Sao Nên Chọn Chúng Tôi</span>
                    <h2 class="section__title">
                        Trải nghiệm mà chúng tôi đảm bảo với bạn
                    </h2>
                    <p class="value__description">
                        Chúng tôi luôn sẵn sàng phục vụ bằng cách cung cấp dịch vụ tốt nhất cho bạn. Chúng tôi có những lựa
                        chọn tốt nhất để đi du lịch vòng quanh thế giới.
                    </p>
                </div>

                <div class="value__accordion">
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-shield-x value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Những nơi tốt nhất trên thế giới
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Chúng tôi cung cấp những nơi tốt nhất trên khắp thế giới và có chất lượng dịch vụ tốt.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-x-square value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Giá cả phải chăng cho bạn
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Chúng tôi cố gắng điều chỉnh ngân sách của bạn phù hợp với điểm đến mà bạn muốn đến.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-bar-chart-square value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Kế hoạch tốt nhất cho thời gian của bạn
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Cung cấp cho bạn thời gian hợp lý.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-check-square value-accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Đảm bảo an ninh
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Chúng tôi đảm bảo rằng các dịch vụ của chúng tôi có mức độ bảo mật tốt
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="blog section" id="blog">
        <div class="blog__container container">
            <span class="section__subtitle" style="text-align: center"> Blog Của Chúng Tôi</span>
            <h2 class="section__title" style="text-align: center">
                The Best Trip For You
            </h2>

            <div class="blog__content grid">
                @foreach ($blogs as $blog)
                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ Storage::url($blog->image) }}" alt="" class="blog__img" />
                            <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                                <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">
                                {{ $blog->title }}
                            </h2>
                            <p class="blog__description">
                                {{ $blog->excerpt }}
                            </p>

                            <div class="blog__footer">
                                <div class="blog__reaction">
                                    {{ date('d M Y', strtotime($blog->created_at)) }}
                                </div>
                                <div class="blog__reaction">
                                    <i class="bx bx-show"></i>
                                    <span>{{ $blog->reads }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
