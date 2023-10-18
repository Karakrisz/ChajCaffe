@extends('layouts.app')

@section('content')

<!-- First slider codes -->
<section class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img class="splide__slide__img" src="img/slider/slider.png" alt="chajcafe">
            </li>
            <li class="splide__slide">
                <img class="splide__slide__img" src="img/slider/slider.png" alt="chajcafe">
            </li>
            <li class="splide__slide">
                <img class="splide__slide__img" src="img/slider/slider.png" alt="chajcafe">
            </li>
        </ul>
    </div>
</section>

<section class="events">
    <h1 class="events__h1 text-center">Upcoming events</h1>
    <div class="events__content d-flex">
        @foreach($posts as $post)

        <div class="events__content__box">
            <div class="events__content__box--margin">
                <img class="events__content__box__img" src="{{ Voyager::image($post->image) }}"
                    alt="{{ $post->title }}">
                <div class="events__content__box__text-box">
                    <h2 class="events__content__box__h2">{{ $post->title }}</h2>
                    <p class="events__content__box__p">
                        {{ \Illuminate\Support\Str::limit(strip_tags($post->body), 100) }}
                    </p>
                    <a class="events__content__box__link" href="{{ route('post.show', ['post' => $post]) }}"><img
                            src="img/events.svg" alt="chajcafe"></a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

    <div class="events__link-box text-center">
        <a class="events__link-box__link page-link" href="#">All Events <img class="page-link__img position-relative"
                src="img/link.svg" alt="chajcafe">
        </a>
    </div>
</section>

<section class="about">

    <div class="about__content about__content--margin-b d-flex">

        <div class="about__content__text-box about__content__one-text-box position-relative">
            <div class="about__content__text-box__bg-box position-absolute"></div>
            <div class="about__content__one-text-box__img-box d-flex position-relative">
                <img class="about__content__one-text-box__img-box__img" src="img/about/Layer_1.svg" alt="chajcafe">
                <img class="about__content__one-text-box__img-box__img" src="img/about/Layer_2.svg" alt="chajcafe">
            </div>
            <h2 class="about__content__text-box__h2 position-relative">About us</h2>
            <p class="about__content__text-box__p position-relative">The Chaj gallery was founded the fall of 2019 by
                Rabbi Mendy and
                Tzivia Myers. The name Chaj
                means
                life,
                and that's what we're all about. We are not your grandfather's gallery - we are building a community.
                From art to literature; from prayers to parties; classes to discussions at the Kosher 'Kave El Hasem'
                (Chaj Cafe), we aim to bring just the right dose of Chaj to your life.</p>
        </div>

        <div class="about__content__img-box about__content__one-img-box position-relative">
            <img class="about__content__img-box__img" src="img/about/about.webp" alt="chajcafe">
        </div>

    </div>

    <div class="about__content d-flex">

        <div class="about__content__img-box about__content__two-img-box position-relative">
            <img class="about__content__img-box__img" src="img/about/about2.webp" alt="chajcafe">
        </div>

        <div class="about__content__text-box about__content__two-text-box position-relative">
            <div class="about__content__text-box__bg-box position-absolute"></div>
            <div class="about__content__two-text-box__img-box d-flex position-relative">
                <img class="about__content__two-text-box__img" src="img/about/Layer_1.svg" alt="chajcafe">
                <img class="about__content__two-text-box__img" src="img/about/Layer_2.svg" alt="chajcafe">
            </div>
            <h2 class="about__content__text-box__h2 about__content__two-text-box__h2 position-relative">Chaj Café</h2>
            <p class="about__content__text-box__p about__content__two-text-box__p position-relative">Kosher cafe
                offering Kosher food for body, mind and soul, and cultural programs. And coffee. Lot's of
                coffee.</p>
        </div>

    </div>


</section>

<section class="welcome-shop">
    <h2 class="welcome-shop__h2 text-center">Shop</h2>
    <div class="welcome-shop__content d-flex">
        @foreach($images as $image)
        <div class="welcome-shop__content__box">
            <div class="welcome-shop__content__box--margin">
                <img class="welcome-shop__content__box__img" src="{{ Voyager::image($image->image_path) }}"
                    alt="{{ $image->title }}">
                <div class="welcome-shop__content__box__text-box">
                    <h2 class="welcome-shop__content__box__text-box__h2">{{ $image->title }}</h2>
                    <p class="welcome-shop__content__box__p">
                        {{ \Illuminate\Support\Str::limit(strip_tags($image->description), 100) }}
                    </p>
                    <a class="welcome-shop__content__box__text-box__link"
                        href="{{ route('image.show', ['image' => $image]) }}">
                        <img src="img/shop.svg" alt="chajcafe">
                    </a>
                    <h5 class="welcome-shop__content__box__text-box__h5">{{ $image->price }} Ft</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>


@endsection