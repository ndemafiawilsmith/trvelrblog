<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}



    {{-- @push('styles')
        <style>
            .editor {
                width: 410px;
                height: 350px;
                overflow: hidden;
                /* Ensures anything overflowing the container is hidden */
                position: relative;
                /* Allows for positioning of child elements like .news-cat */
            }

            .editor img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* Ensures the image fills the container while maintaining aspect ratio */
                display: block;
                /* Removes extra space below the image caused by inline-block behavior */
            }



            .trending {
                width: 315px;
                height: 180px;
                overflow: hidden;
                /* Ensures anything overflowing the container is hidden */
                position: relative;
                /* Allows for positioning of child elements like .news-cat */
            }

            .trending img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* Ensures the image fills the container while maintaining aspect ratio */
                display: block;
                /* Removes extra space below the image caused by inline-block behavior */
            }


            .mainBlog {
                width: 630px;
                height: 460px;
                overflow: hidden;
                /* Ensures anything overflowing the container is hidden */
                position: relative;
                /* Allows for positioning of child elements like .news-cat */
            }

            .mainBlog img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* Ensures the image fills the container while maintaining aspect ratio */
                display: block;
                /* Removes extra space below the image caused by inline-block behavior */
            }
        </style>
    @endpush --}}



    <div class="container">
        <div class="trending-box-two">
            <span>Trending</span>
            <div class="trending-slider-two swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide news-card-one">
                        <div class="news-card-img">
                            <img src="assets/img/news/trending-1.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="news-by-category.html" class="news-cat">Fashion</a>
                            <h3><a href="business-details.html">Fashion Across The Globe: Exploring 15 Trendsetting
                                    Destinations</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 03,
                                        2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide news-card-one">
                        <div class="news-card-img">
                            <img src="assets/img/news/trending-2.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="news-by-category.html" class="news-cat">Business</a>
                            <h3><a href="business-details.html">Female Hawks Win $10,000 Funding Boost</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 25,
                                        2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>13 Min Read</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide news-card-one">
                        <div class="news-card-img">
                            <img src="assets/img/news/trending-3.webp" alt="Image">
                        </div>
                        <div class="news-card-info">
                            <a href="news-by-category.html" class="news-cat">Lifestyle</a>
                            <h3><a href="business-details.html">Goodwin Must Break Clarkson Hold</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Mar 22,
                                        2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>12 Min Read</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trending-btn">
                    <div class="trending-btn-prev"><img src="assets/img/icons/left-short-arrow.svg" alt="Image">
                    </div>
                    <div class="trending-btn-next"><img src="assets/img/icons/right-short-arrow.svg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-aui::button>Hello There Youtube!</x-aui::button>


    <div class="container">
        <div class="row featured-news-three">
            <div class="col-xl-6">
                <div class="news-card-eleven">
                    <div class="news-card-img mainBlog">
                        <img src="{{ Storage::url($mainBlog->featured_image) }}" alt="Image">
                    </div>
                    <div class="news-card-info">
                        <a href="" class="news-cat1" id="newsCat">{{ $mainBlog->tags[0] ?? 'Travel' }}</a>



                        @push('scripts')
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    let tags = @json($mainBlog->tags); // Get the tags array from Laravel
                                    let index = 0;
                                    let tagElement = document.getElementById("newsCat1");

                                    function changeTag() {
                                        if (tags.length > 0) {
                                            tagElement.textContent = tags[index];
                                            index = (index + 1) % tags.length; // Loop back to the first tag
                                        }
                                    }

                                    setInterval(changeTag, 5000); // Change tag every 5 seconds
                                });
                            </script>
                    @endpush
                        <h3><a href="{{ route('blog.detail', ['id' => $mainBlog->id]) }}">{{ $mainBlog->title }}</a>
                        </h3>
                        @php
                            // Decode the JSON content
                            $contentArray = $mainBlog->content;

                            // Get the first text block
                            $firstText = '';
                            if (is_array($contentArray)) {
                                foreach ($contentArray as $block) {
                                    if (isset($block['type']) && $block['type'] === 'text' && !empty($block['text'])) {
                                        $firstText = $block['text'];
                                        break; // Stop after finding the first text block
                                    }
                                }
                            }

                            // Strip HTML tags and limit to 150 characters
                            $firstText = \Illuminate\Support\Str::limit(strip_tags($firstText), 150);
                        @endphp
                        <p>{!! $firstText !!}
                        </p>
                        <ul class="news-metainfo list-style">
                            <li class="author">
                                <span class="author-img">
                                    <img src="https://ui-avatars.com/api?name={{ $mainBlog->author->name }}"
                                        alt="Image">
                                </span>
                                <a href="">{{ $mainBlog->author->name }}</a>
                            </li>
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>{{ $mainBlog->readingTime() }} Min Read</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row">
                    @foreach ($trending as $blog)
                        <div class="col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img trending">
                                    <img src="{{ Storage::url($blog->featured_image) }}" alt="Image">
                                    <a href="business.html" class="news-cat"id="newsCat">{{ $blog->tags[0] ?? 'Travel' }}</a>


                                    @push('scripts')
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                let tags = @json($blog->tags); // Get the tags array from Laravel
                                                let index = 0;
                                                let tagElement = document.getElementById("newsCat");

                                                function changeTag() {
                                                    if (tags.length > 0) {
                                                        tagElement.textContent = tags[index];
                                                        index = (index + 1) % tags.length; // Loop back to the first tag
                                                    }
                                                }

                                                setInterval(changeTag, 5000); // Change tag every 5 seconds
                                            });
                                        </script>
                                    @endpush
                                </div>
                                <div class="news-card-info">
                                    <h3><a
                                            href="{{ route('blog.detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a
                                                href="news-by-date.html">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</a>
                                        </li>
                                        <li><i class="fi fi-rr-clock-three"></i>{{ $blog->readingTime() }} Min Read
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="ad-section-two">
            <p>SPONSORED AD</p>
        </div>
        <div class="promo-wrap">
            <div class="promo-card-two">
                <img src="assets/img/promo-shape-1.webp" alt="Image" class="promo-shape">
                <div class="promo-content">
                    <a href="index.html" class="logo">
                        <img class="logo-light" src="assets/img/logo.png" alt="Image">
                        <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
                    </a>
                    <p>The European languages are members of the same family separ existence is a Baxo. For science,
                        music, sport, etc.</p>
                </div>
                <img src="assets/img/promo-img-2.webp" alt="Image" class="promo-img">
            </div>
        </div>
    </div> --}}

    {{-- <div class="editor-news-three pt-100 pb-75">
        <div class="container">
            <div class="section-title-two mb-40">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h2>Editor's pick</h2>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <a href="business.html" class="link-three">View All News<span><img
                                    src="assets/img/icons/arrow-right.svg" alt="Image"></span></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                            <div class="news-card-img editor">
                                <img src="{{ Storage::url($blog->featured_image) }}" alt="Image">
                                <a href="business.html" class="news-cat">Lifestyle</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="{{ route('blog.detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a>
                                </h3>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a
                                            href="news-by-date.html">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}


    {{-- Newsletter  --}}
    <div class="container">
        <div class="newsletter-box">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h2><img src="assets/img/newsletter-icon.webp" alt="Image" class="newsletter-icon">Join
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


    {{-- Social Media  --}}
    <div class="container">
        <ul class="social-widget-two list-style">
            <li>
                <span><a href="https://www.fb.com" target="_blank"><img src="assets/img/icons/facebook.svg"
                            alt="Image"></a></span>
                <a href="https://www.fb.com" target="_blank" class="social-link">
                    Facebook
                    <p>28 Likes</p>
                </a>
            </li>
            <li>
                <span><a href="https://www.twitter.com" target="_blank"><img src="assets/img/icons/twitter.svg"
                            alt="Image"></a></span>
                <a href="https://www.twitter.com" target="_blank" class="social-link">
                    Twitter
                    <p>289k Follwers</p>
                </a>
            </li>
            <li>
                <span><a href="https://www.instagram.com" target="_blank"><img src="assets/img/icons/instagram.svg"
                            alt="Image"></a></span>
                <a href="https://www.instagram.com" target="_blank" class="social-link">
                    Instagram
                    <p>231K Follwers</p>
                </a>
            </li>
            <li>
                <span><a href="https://www.pinterest.com" target="_blank"><img src="assets/img/icons/pinterest.svg"
                            alt="Image"></a></span>
                <a href="https://www.instagram.com" target="_blank" class="social-link">
                    Pinterest
                    <p>28k Follwers</p>
                </a>
            </li>
            <li>
                <span><a href="https://www.youtube.com" target="_blank"><img src="assets/img/icons/youtube.svg"
                            alt="Image"></a></span>
                <a href="https://www.youtube.com" target="_blank" class="social-link">
                    Youtube
                    <p>19k Subscriber</p>
                </a>
            </li>
            <li>
                <span><a href="https://www.soundcloud.com" target="_blank"><img src="assets/img/icons/soundcloud.svg"
                            alt="Image"></a></span>
                <a href="https://www.soundcloud.com" target="_blank" class="social-link">
                    Soundcloud
                    <p>31k Follwers</p>
                </a>
            </li>
        </ul>
    </div>
    <br>


    {{-- <div class="container ptb-100">
        <div class="popular-news-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide pp-news-card">
                    <img src="assets/img/news/news-86.webp" alt="Image">
                    <div class="pp-news-info">
                        <a href="business.html" class="news-cat">Politics</a>
                        <h3><a href="business-details.html">Empowering the People: The Role of Politics in Society</a>
                        </h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-comment"></i>03</li>
                            <li><i class="fi fi-rr-eye"></i>1.2k Views</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide pp-news-card">
                    <img src="assets/img/news/news-87.webp" alt="Image">
                    <div class="pp-news-info">
                        <a href="business.html" class="news-cat">Technology</a>
                        <h3><a href="business-details.html">Discovering The Logical Treasures Of 15 Regions</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-comment"></i>03</li>
                            <li><i class="fi fi-rr-eye"></i>1.2k Views</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide pp-news-card">
                    <img src="assets/img/news/news-88.webp" alt="Image">
                    <div class="pp-news-info">
                        <a href="business.html" class="news-cat">Sports</a>
                        <h3><a href="business-details.html">The Spirit Of Competition: The Excitement Of Sports</a>
                        </h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-comment"></i>03</li>
                            <li><i class="fi fi-rr-eye"></i>1.2k Views</li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide pp-news-card">
                    <img src="assets/img/news/news-89.webp" alt="Image">
                    <div class="pp-news-info">
                        <a href="business.html" class="news-cat">Politics</a>
                        <h3><a href="business-details.html">Queen Misses Games Due To Health Reasons</a></h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03, 2024</a>
                            </li>
                            <li><i class="fi fi-rr-comment"></i>03</li>
                            <li><i class="fi fi-rr-eye"></i>1.2k Views</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- <div class="selected-news-three pb-100">
        <div class="container">
            <div class="section-title-two mb-40">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>Selected posts</h2>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <ul class="nav nav-tabs news-tablist-three" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_1" type="button"
                                    role="tab">Poilitics<i class="flaticon-arrow-right"></i></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_2"
                                    type="button" role="tab">Sports<i class="flaticon-arrow-right"></i></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3"
                                    type="button" role="tab">Business<i
                                        class="flaticon-arrow-right"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content selected-news-content">
                <div class="tab-pane fade" id="tab_1" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-7.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">The Political Landscape: Navigating Power And
                                            Policy</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-8.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Navigating the Political Sphere: Insights and
                                            Analysis</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-9.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Ex-fifa Officials latini Acquitted Of Fraud
                                            Charges</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-10.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">How Is Technology Changing Treatment Of
                                            Injuries?</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-11.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Meet The Final Three Teams To Qualify For The
                                            2023 World Cup</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-12.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After Injuring Eye
                                            With Prosecco Cork</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-13.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Qatar World Cup: Fans Must Show Negative
                                            Covid-19 Result</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-14.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Politics</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Joe Gibbs Discusses Ty Gibbs Incident At
                                            Martinsville</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="tab_2" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-90.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Fit For The Field: A Guide To Training &
                                            Nutrition For Athletes</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-91.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Queen Misses Games Due To Health Reasons</a>
                                    </h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-92.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Ex-fifa Officials Platini Acquitted Of Fraud
                                            Charges</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-93.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">How Is Technology Changing Treatment Of
                                            Injuries?</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-94.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Meet The Final Three Teams To Qualify For The
                                            2023 World Cup</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-95.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After Injuring Eye
                                            With Prosecco Cork</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 27,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-96.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Qatar World Cup: Fans Must Show Negative
                                            Covid-19 Result</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-97.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Joe Gibbs Discusses Ty Gibbs Incident At
                                            Martinsville</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_3" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-9.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Ex-fifa Officials latini Acquitted Of Fraud
                                            Charges</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-10.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">How Is Technology Changing Treatment Of
                                            Injuries?</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-94.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Meet The Final Three Teams To Qualify For The
                                            2023 World Cup</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-95.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After Injuring
                                            Eye With Prosecco Cork</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-7.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">The Political Landscape: Navigating Power And
                                            Policy</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/politics/politics-8.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Navigating the Political Sphere: Insights and
                                            Analysis</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-96.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Qatar World Cup: Fans Must Show Negative
                                            Covid-19 Result</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="news-card-thirteen">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-97.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Business</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">Joe Gibbs Discusses Ty Gibbs Incident At
                                            Martinsville</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                27, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="business.html" class="btn-three d-block w-100">View All News<i
                    class="flaticon-arrow-right"></i></a>
        </div>
    </div> --}}


    <div class="popular-news-three pb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8">
                    <div class="section-title-two mb-40">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h2>Most Popular</h2>
                            </div>
                            <div class="col-md-5 text-md-end">
                                <a href="business.html" class="link-three">View All News<span><img
                                            src="assets/img/icons/arrow-right.svg" alt="Image"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-news-wrap">
                        @foreach ($otherBlogs as $blog)
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-70.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Lifestyle</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">{{ $blog->title }}</a></h3>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet conse
                                        ctet
                                        fringilla purus leo dignissim congue. Mauris elementum accumsan.</p>
                                    <ul class="news-metainfo list-style">
                                        <li class="author">
                                            <span class="author-img">
                                                <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                            </span>
                                            <a href="author.html">James William</a>
                                        </li>
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                                2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Explore Topics</h3>
                            <ul class="category-widget list-style">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="business.html"><img src="assets/img/icons/arrow-right.svg"
                                                alt="Image">{{ $category->name }}
                                            <span>({{ count($category->posts) }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget-two">
                            <div class="contact-widget">
                                <img src="assets/img/contact-bg.svg" alt="Image" class="contact-shape">
                                <a href="index.html" class="logo">
                                    <img class="logo-light" src="assets/img/logo.png" alt="Image">
                                    <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
                                </a>
                                <p>Dora Explora - Your Journey Begins Here.</p>
                                <ul class="social-profile list-style">
                                    <li><a href="https://www.fb.com" target="_blank"><i
                                                class="flaticon-facebook-1"></i></a></li>
                                    <li><a href="https://www.twitter.com" target="_blank"><i
                                                class="flaticon-twitter-1"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank"><i
                                                class="flaticon-instagram-2"></i></a></li>
                                    <li><a href="https://www.linkedin.com" target="_blank"><i
                                                class="flaticon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Top Authors</h3>
                            <div class="pp-post-wrap-two">
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-thumb-4.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">Bernie Nonummy Pelopai Iatis Eum
                                                Litora</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                    22, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-card-one">
                                    <div class="news-card-img">
                                        <img src="assets/img/news/news-thumb-5.webp" alt="Image">
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
                                        <img src="assets/img/news/news-thumb-6.webp" alt="Image">
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
                                        <img src="assets/img/news/news-thumb-7.webp" alt="Image">
                                    </div>
                                    <div class="news-card-info">
                                        <h3><a href="business-details.html">First Prototype Flight Using Kinetic
                                                Launch System</a></h3>
                                        <ul class="news-metainfo list-style">
                                            <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr
                                                    07, 2024</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="general-news-three pb-75">
        <div class="container">
            <div class="row gx-55 gx-4">
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Celebration</h3>
                            <div class="featured-widget">
                                <div class="featured-slider swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="news-card-one">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-thumb-1.webp" alt="Image">
                                                </div>
                                                <div class="news-card-info">
                                                    <h3><a href="business-details.html">How Youth Viral Diseases May
                                                            The Year 2023</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a
                                                                href="news-by-date.html">Mar 24, 2024</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="news-card-one">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-thumb-2.webp" alt="Image">
                                                </div>
                                                <div class="news-card-info">
                                                    <h3><a href="business-details.html">Nintendo Switch Online’s Next
                                                            Wave of N64 Games</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a
                                                                href="news-by-date.html">Mar 22, 2024</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="news-card-one">
                                                <div class="news-card-img">
                                                    <img src="assets/img/news/news-thumb-3.webp" alt="Image">
                                                </div>
                                                <div class="news-card-info">
                                                    <h3><a href="business-details.html">5 things We Know About GTA
                                                            Definitive Edition</a></h3>
                                                    <ul class="news-metainfo list-style">
                                                        <li><i class="fi fi-rr-calendar-minus"></i><a
                                                                href="news-by-date.html">Mar 14, 2024</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-prev"><i class="flaticon-left-arrow"></i></div>
                                    <div class="featured-next"><i class="flaticon-right-arrow"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget newsletter-widget-two">
                            <h2>Newsletter</h2>
                            <h6>Join 70,000 Subscribers</h6>
                            <form action="#">
                                <input type="email" placeholder="Email Address">
                                <button type="submit">Subscribe<i class="flaticon-right-arrow-1"></i></button>
                            </form>
                            <p>By signing up, you agree to our <a href="privacy-policy.html">Privacy Policy</a></p>
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
                        <div class="sidebar-widget-two">
                            <div class="gallery-widget">
                                <img src="assets/img/logo-3.webp" alt="Image" class="logo">
                                <img src="assets/img/gallery-bg-2.svg" alt="Image" class="gallery-shape">
                                <img src="assets/img/gallery-img.webp" alt="Image" class="gallery-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="section-title-two mb-40">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h2>General News</h2>
                            </div>
                            <div class="col-md-5 text-md-end">
                                <a href="business.html" class="link-three">View All News<span><img
                                            src="assets/img/icons/arrow-right.svg" alt="Image"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="news-card-four">
                                <img src="assets/img/news/news-65.webp" alt="Image">
                                <div class="news-card-info">
                                    <a href="business.html" class="news-cat">Politics</a>
                                    <h3><a href="business-details.html">Empowering The People: The Role Of Politics In
                                            Society</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-66.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Photography</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">The Secret Math Behind Mind Reading Magic
                                            Tricks</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-67.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Sports</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">6 Romantic Places You Want To Visit With Your
                                            Partner</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-68.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Technology</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">The Secret Math Behind Mind Reading Magic
                                            Tricks</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-card-two">
                                <div class="news-card-img">
                                    <img src="assets/img/news/news-69.webp" alt="Image">
                                    <a href="business.html" class="news-cat">Culture</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a href="business-details.html">3 Historical places You Want to Visit with
                                            Your Partner</a></h3>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb
                                                03, 2024</a></li>
                                        <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="video-wrap-three pb-75">
        <div class="container">
            <div class="section-title-two mb-40">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h2>Featured Video</h2>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <a href="featured-video.html" class="link-three">View All Featured Video<span><img
                                    src="assets/img/icons/arrow-right.svg" alt="Image"></span></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gx-5">
                <div class="col-xl-8">
                    <div class="news-card-eleven">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-64.webp" alt="Image">
                            <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <div class="news-card-info">
                            <h3><a href="business-details.html">Apex Legends Season 11 Start Date, Time, & What To
                                    Expect</a></h3>
                            <ul class="news-metainfo list-style">
                                <li class="author">
                                    <span class="author-img">
                                        <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                    </span>
                                    <a href="author.html">James William</a>
                                </li>
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                        2024</a></li>
                                <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-35.webp" alt="Image">
                            <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Travel</a>
                            <h3><a href="business-details.html">World Trending Best 10 Website Travel Tips</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                        2024</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-36.webp" alt="Image">
                            <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Business</a>
                            <h3><a href="business-details.html">How To Find The Right Template For Your Product</a>
                            </h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                        2024</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-37.webp" alt="Image">
                            <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Health</a>
                            <h3><a href="business-details.html">Life Health Continues To Spread Rapidly, Are Many
                                    People</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                        2024</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-card-three">
                        <div class="news-card-img">
                            <img src="assets/img/news/news-3.webp" alt="Image">
                            <a class="play-now" data-fslightbox href="https://www.youtube.com/watch?v=oDDbVC3Hekc">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <div class="news-card-info">
                            <a href="business.html" class="news-cat">Lifestyle</a>
                            <h3><a href="business-details.html">5 Things We Know About Gta Trilogy: Definitive Edition
                                    So Far</a></h3>
                            <ul class="news-metainfo list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 03,
                                        2024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="latest-news-three pb-75">
        <div class="container">
            <div class="section-title-two mb-40">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h2>Latest News</h2>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <a href="business.html" class="link-three">View All News<span><img
                                    src="assets/img/icons/arrow-right.svg" alt="Image"></span></a>
                    </div>
                </div>
            </div>
            <div class="row gx-55 gx-5">
                <div class="col-xl-6">
                    <div class="scrollscreen">
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-9.webp" alt="Image">
                                <a href="business.html" class="news-cat">Lifestyle</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">Good Day To Take A Photo With Your Favorite
                                        Style</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-10.webp" alt="Image">
                                <a href="business.html" class="news-cat">Fashion</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">I Turned My Home Into A Fortress of
                                        Surveillance</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 15,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-11.webp" alt="Image">
                                <a href="business.html" class="news-cat">Science</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">Man Wearing Black Pullover Hoodie To Smoke Light
                                        In</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 17,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>8 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-12.webp" alt="Image">
                                <a href="business.html" class="news-cat">Photography</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">Recovery And Cleanup In Florida After Hurricane
                                        Ian</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 12,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>13 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-13.webp" alt="Image">
                                <a href="business.html" class="news-cat">Business</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">Apex Legends Season 11 Starting From August,
                                        2024</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 07,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-14.webp" alt="Image">
                                <a href="business.html" class="news-cat">Travel</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">Creative Photography Ideas From Smart Devices</a>
                                </h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 05,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>11 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-15.webp" alt="Image">
                                <a href="business.html" class="news-cat">Travel</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">6 Romantic Places You Want To Visit With Your
                                        Partner</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 03,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-16.webp" alt="Image">
                                <a href="business.html" class="news-cat">Fashion</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">7 Steps To Get Professional Facial Results At
                                        Home</a></h3>
                                <p>Lorem ipsum or lipsum as it is sometmes known is dum text used in laying print,
                                    graphic or desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 02,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>10 Min Read</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="latest-news-right">
                        <div class="news-card-two">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-62.webp" alt="Image">
                                <a href="business.html" class="news-cat">Technology</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">Elijah James: Nashville Photographer Shares Unique
                                        Journey</a></h3>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Feb 25,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="assets/img/news/news-63.webp" alt="Image">
                                <a href="business.html" class="news-cat">Sports</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="business-details.html">A Complimentary Day At Mandarine The Oriental
                                        Stadium</a></h3>
                                <p>Lorem ipsum or lipsum as it is known is dum text used in laying print, graphic or
                                    desi…</p>
                                <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="news-by-date.html">Apr 22,
                                            2024</a></li>
                                    <li><i class="fi fi-rr-clock-three"></i>15 Min Read</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pb-50">
        <div class="instagram-wrapper">
            <div class="instagram-slider-two swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-1.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-2.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-3.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-4.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-5.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="instagram-slide" href="https://www.instagram.com" target="_blank">
                            <img src="assets/img/instagram/insta-6.webp" alt="Image">
                            <span>@Baxo on Instagram<i class="flaticon-right-arrow-1"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="instagram-prev"><i class="flaticon-arrow-left"></i></div>
            <div class="instagram-next"><i class="flaticon-arrow-right"></i></div>
        </div>
    </div> --}}
</div>
