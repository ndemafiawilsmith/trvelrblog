<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="sports-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        @foreach ($blogs as $blog)
                        <div class="col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="{{ asset('assets/img/news/news-80.webp') }}" alt="Iamge">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">{{$blog->title}}</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>{{$blog->readingTime()}} Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="page-nav list-style text-center mt-20">
                        <li><a href="business.html"><i class="flaticon-arrow-left"></i></a></li>
                        <li><a class="active" href="business.html">01</a></li>
                        <li><a href="business.html">02</a></li>
                        <li><a href="business.html">03</a></li>
                        <li><a href="business.html"><i class="flaticon-arrow-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget-two">
                            <form action="#" class="search-box-widget">
                                <input type="search" placeholder="Search">
                                <button type="submit">
                                    <i class="fi fi-rr-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Categories</h3>
                            <ul class="category-widget list-style">
                                <li><a href="business.html"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Celebration <span>(6)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Recent Posts</h3>
                            <div class="pp-post-wrap">
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/img/news/news-thumb-4.webp') }}" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Bernie Nonummy Pelopai Iatis Eum Litora</a>
                                        </h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                    22, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/img/news/news-thumb-5.webp') }}" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">How Youth Viral Diseases May The Year
                                                2023</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                    23, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/img/news/news-thumb-6.webp') }}" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To
                                                Smoke</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                    14, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="{{ asset('assets/img/news/news-thumb-7.webp') }}" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">First Prototype Flight Using Kinetic Launch
                                                System</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                    07, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <ul class="tag-list list-style">
                                <li><a href="news-by-tags.html">BUSINESS</a></li>
                                <li><a href="news-by-tags.html">FOOD</a></li>
                                <li><a href="news-by-tags.html">SCIENCE</a></li>
                                <li><a href="news-by-tags.html">LIFESTYLE</a></li>
                                <li><a href="news-by-tags.html">SPORTS</a></li>
                                <li><a href="news-by-tags.html">PHOTO</a></li>
                                <li><a href="news-by-tags.html">TECHNOLOGY</a></li>
                                <li><a href="news-by-tags.html">CONTENT</a></li>
                                <li><a href="news-by-tags.html">FEATURED</a></li>
                                <li><a href="news-by-tags.html">AUDIO</a></li>
                                <li><a href="news-by-tags.html">FASHION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Newsletter  --}}
    <div class="container">
        <div class="newsletter-box">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h2><img src="{{asset('assets/img/newsletter-icon.webp')}}" alt="Image" class="newsletter-icon">Join
                            Our Newsletter & Read The New Posts First</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" placeholder="Email Address">
                            <button type="button" class="btn-one">Subscribe<i
                                    class="flaticon-arrow-right"></i></button>
                        </div>
                        <div class="form-check checkbox">
                            <input class="form-check-input" type="checkbox" id="test_2">
                            <label class="form-check-label" for="test_2">
                                I've read and accept <a href="privacy-policy.html">Privacy Policy</a>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
