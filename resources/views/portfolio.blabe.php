@extends('layouts.main')
@section('content')

<main class="main__content_wrapper inner__page--content">

        <div class="page__heading">
            <h1 class="page__heading--title">MY PORTFOLIO</h1>
            <h2 class="page__heading--subtitle">MY <span>PORTFOLIO</span></h2> 
        </div>

         <!-- Start portfolio section -->
         <section class="portfolio__section section--padding">
            <div class="container">
                <div class="portfolio__section--inner">
                    <div class="button-group filters-button-group mb-50">
                        <button class="filters__button--items button is-checked" data-filter="*">Show All</button>
                        <button class="filters__button--items button" data-filter=".web">Web</button>
                        <button class="filters__button--items button" data-filter=".graphics">Graphics</button>
                        <button class="filters__button--items button" data-filter=".development">Development</button>
                        <button class="filters__button--items button" data-filter=".mobile">Mobile</button>
                    </div>
                    <div class="portfolio__grid mb--n30">
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio1.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item graphics" data-category="graphics">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio2.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item development" data-category="development">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio3.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item mobile" data-category="mobile">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio4.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio5.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item graphics" data-category="graphics">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio6.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item development" data-category="development">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio7.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio8.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="element-item mobile" data-category="mobile">
                            <div class="portfolio__card">
                                <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                    <div class="portfolio__image--card">
                                    <img src="assets/img/other/portfolio9.png" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <h3 class="portfolio__title text-white">Illustration</h3>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End portfolio section -->

    </main>

@endsection

