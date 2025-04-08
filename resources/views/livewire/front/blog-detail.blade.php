<div>


    <x-slot name="title">{{ $blog->title }}</x-slot>
    <x-slot name="description">{{ $blog->title }}</x-slot>
    <x-slot name="logo">{{ Storage::url($blog->featured_image) }}</x-slot>



    {{-- The best athlete wants his opponent at his best. --}}
    <div class="breadcrumb-wrap">
        <div class="container">
            <h2 class="breadcrumb-title">Business Article Details</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="index.html">Home</a></li>
                <li><a href="business.html">Business</a></li>
                <li>Business Article Details</li>
            </ul>
        </div>
    </div>



    @push('styles')
        <style>
            .news-img {
                position: relative;
                width: 100%;
                max-width: 1160px;
                /* Set maximum width */
                height: 640px;
                /* Set fixed height */
                overflow: hidden;
                /* Ensure image does not overflow */
            }

            .image-container {
                position: relative;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            .image-container img {
                display: block;
                width: 100%;
                height: auto;
                object-fit: cover;
                /* Maintain aspect ratio and cover container */
            }

            .news-cat {
                position: absolute;
                top: 10px;
                left: 10px;
                background-color: #000;
                color: #fff;
                padding: 5px 10px;
                text-decoration: none;
                font-size: 14px;
                z-index: 1;
            }
        </style>
    @endpush
    <div class="news-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">
                    <article>
                        <div class="news-img">
                            <div class="image-container">
                                <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}"
                                    loading="lazy">
                            </div>
                            <a href="#" class="news-cat" id="newsCat">{{ $blog->tags[0] ?? 'Travel' }}</a>

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
                        <ul class="news-metainfo list-style">
                            <li class="author">
                                <span class="author-img">
                                    <img src="https://ui-avatars.com/api?name={{ $blog->author->name }}"
                                        alt="Author Image">
                                </span>
                                <a href="author.html">{{ $blog->author->name }}</a>
                            </li>
                            <li><i class="fi fi-rr-calendar-minus"></i><a
                                    href="">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</a>
                            </li>
                            <li><i class="fi fi-rr-clock-three"></i>{{ $minutesToRead }} Min Read</li>
                            <li><i class="fi fi-rr-eye"></i>{{ $totalViews }} views</li>
                        </ul>
                        <div class="news-para">
                            <h1>{{ $blog->title }}</h1>
                        </div>
                        @foreach ($blog->content as $content)
                            @if ($content['type'] == 'text')
                                <div class="news-para">
                                    {!! $content['text'] !!}
                                </div>
                            @elseif ($content['type'] == 'image')
                                <div class="news-img">
                                    <img src="{{ Storage::url($content['image']) }}" alt="Blog Image">
                                </div>
                            @elseif ($content['type'] == 'advert')
                                <div class="ad-section">
                                    <p>SPONSORED AD</p>
                                </div>
                                <div class="promo-wrap">
                                    <div class="promo-card-two">
                                        <img src="{{ asset('assets/img/promo-shape-1.webp') }}" alt="Image"
                                            class="promo-shape">
                                        <div class="promo-content">
                                            <a href="index.html" class="logo">
                                                <img class="logo-light" src="{{ asset('assets/img/logo.webp') }}"
                                                    alt="Image">
                                                <img class="logo-dark" src="{{ asset('assets/img/logo-white.webp') }}"
                                                    alt="Image">
                                            </a>
                                            <p>The European languages are members of the same family separ existence is
                                                a Baxo. For
                                                science, music, sport, etc.</p>
                                        </div>
                                        <img src="{{ asset('assets/img/promo-img-2.webp ') }}" alt="Image"
                                            class="promo-img">
                                    </div>
                                </div>
                                {{-- <div class="news-img">
                                    <img src="{{Storage::url($content['advert'])}}" alt="Advertisement Image">
                                </div> --}}
                            @elseif ($content['type'] == 'map')
                                <div class="news-para">
                                    <!-- Handle map display if needed -->
                                    @if (!empty($content['map']))
                                        <!-- Display the embedded map -->
                                        {!! $content['map'] !!}
                                    @endif

                                </div>
                            @elseif ($content['type'] == 'pdf')
                                <div class="news-pdf">
                                    <!-- Handle PDF display if needed -->
                                    <div class="col-xl-6 col-lg-4 col-md-6">
                                        <div class="contact-card">
                                            <span class="contact-icon">
                                                <i class="fas fa-file-alt"></i>
                                            </span>
                                            <div class="contact-info">
                                                <div class="option-item">
                                                    <a href="javascript:void(0);"
                                                        wire:click="setLink('{{ $content['pdf'] }}')"
                                                        class="btn-two">Download
                                                        Pdf</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </article>
                    <div class="post-pagination">
                        <a class="prev-post" href="business-details.html">
                            <span>PREVIOUS</span>
                            <h6>The Future Of Business: Predictions And Trends To Watch</h6>
                        </a>
                        <a class="next-post" href="business-details.html">
                            <span>NEXT</span>
                            <h6>From Start-up To Scale-up: Navigating Growth In Your Business</h6>
                        </a>
                    </div>


                    {{-- Comment  --}}
                    {{-- <h3 class="comment-box-title">3 Comments</h3>
                        <div class="comment-item-wrap">
                            <div class="comment-item">
                                <div class="comment-author-img">
                                    <img src="assets/img/author/author-thumb-1.webp" alt="Image">
                                </div>
                                <div class="comment-author-wrap">
                                    <div class="comment-author-info">
                                        <div class="row align-items-start">
                                            <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                <div class="comment-author-name">
                                                    <h5>Killian Mider</h5>
                                                    <span class="comment-date">Jul 22, 2024 | 7:10 PM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                                <a href="#cmt-form" class="reply-btn">Reply</a>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                                <div class="comment-text">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                        magna aliquyam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item reply">
                                <div class="comment-author-img">
                                    <img src="assets/img/author/author-thumb-2.webp" alt="Image">
                                </div>
                                <div class="comment-author-wrap">
                                    <div class="comment-author-info">
                                        <div class="row align-items-start">
                                            <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                <div class="comment-author-name">
                                                    <h5>Everly Leah </h5>
                                                    <span class="comment-date">Jul 23, 2024 | 7:10 PM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                                <a href="#cmt-form" class="reply-btn">Reply</a>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                                <div class="comment-text">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                        magna aliquyam erat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-author-img">
                                    <img src="assets/img/author/author-thumb-3.webp" alt="Image">
                                </div>
                                <div class="comment-author-wrap">
                                    <div class="comment-author-info">
                                        <div class="row align-items-start">
                                            <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                <div class="comment-author-name">
                                                    <h5>Michel Ohio</h5>
                                                    <span class="comment-date">Jun 14, 2024 | 7:10 PM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                                <a href="#cmt-form" class="reply-btn">Reply</a>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                                <div class="comment-text">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                        magna aliquyam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cmt-form">
                            <div class="mb-30">
                                <h3 class="comment-box-title">Leave A Comment</h3>
                                <p>Your email address will not be published. Required fields are marked.</p>
                            </div>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" required
                                                placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required
                                                placeholder="Email Address*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="messages" id="messages" cols="30" rows="10"
                                                placeholder="Please Enter Your Comment Here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" type="checkbox" id="test_2">
                                            <label class="form-check-label" for="test_2">
                                                Save my info for the next time I commnet.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button class="btn-two">Post A Comment<i
                                                class="flaticon-right-arrow"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}

                    {{-- End Comment  --}}
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
                                            alt="Image">Celebration <span>(6)</span></a></li>
                                <li><a href="business.html"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Culture<span>(3)</span></a></li>
                                <li><a href="business.html"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Fashion<span>(2)</span></a></li>
                                <li><a href="business.html"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Inspiration<span>(8)</span></a></li>
                                <li><a href="business.html"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Lifestyle<span>(6)</span></a></li>
                                <li><a href="business.html"><img src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Politics<span>(2)</span></a></li>
                                <li><a href="business.html"><img
                                            src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                            alt="Image">Trending<span>(4)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Recent Posts</h3>
                            <div class="pp-post-wrap">
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
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-widget-title">Popular Tags</h3>
                            <ul class="tag-list list-style">
                                @foreach ($blog->tags as $tag)
                                    <li><a href="news-by-tags.html">{{ $tag }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade resource-pop" id="newsletter-popup" tabindex="-1" aria-labelledby="newsletter-popup"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="closeModal()">
                    <i class="fi fi-rr-cross"></i>
                </button>
                <div class="modal-body">
                    {{-- <div class="newsletter-bg bg-f"></div> --}}
                    <div class="newsletter-content">
                        <img src="{{ asset('assets/img/newsletter-icon.webp') }}" alt="Image"
                            class="newsletter-icon">
                        <h2>Enter your email to have the PDF sent to you.</h2>
                        <form wire:submit.prevent='download' class="newsletter-form">
                            <input type="email" placeholder="Email Address" wire:model='email'>
                            <button type="submit" class="btn-one">Download<i
                                    class="flaticon-arrow-right"></i></button>
                        </form>
                        <div class="form-check checkbox">
                            <input class="form-check-input" type="checkbox" id="test_20">
                            <label class="form-check-label" for="test_20">
                                I've read and accept <a href="privacy-policy.html">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('open-modal', (event) => {
                    //

                    // Get the modal element using querySelector or getElementsByClassName
                    var modalElement = document.querySelector('.resource-pop');

                    // Create a new Bootstrap modal instance
                    var modal = new bootstrap.Modal(modalElement, {
                        keyboard: false
                    });

                    // Show the modal
                    modal.show();
                });
            });
        </script>


        <script>
            function sub(link) {
                // alert(link);


            }
        </script>


        <script>
            // Get all <div> elements with class 'content'
            const contentDivs = document.querySelectorAll('div.news-para');
            // Get all <div> elements with class 'content'
            // const contentDivs = document.querySelectorAll('div.content');

            // Loop through each <div class='content'>
            contentDivs.forEach(div => {
                // Find <ul> and <ol> elements inside the current <div class='content'>
                const ulElements = div.querySelectorAll('ul');
                const olElements = div.querySelectorAll('ol');

                // Function to style and prepend SVG to each <li> element
                const styleListItems = list => {
                    list.forEach(ul => {
                        ul.classList.add('content-feature-list', 'list-style',
                        'mt-15'); // Add classes to <ul>
                        const listItems = ul.querySelectorAll('li');
                        listItems.forEach(li => {
                            // Create the <span> element
                            const span = document.createElement('span');
                            span.classList.add('d-flex', 'align-items-center',
                            'mr-15'); // Add classes to <span>

                            // Create the SVG element
                            const svg = document.createElementNS("http://www.w3.org/2000/svg",
                                "svg");
                            svg.setAttribute("class", "icon");
                            svg.setAttribute("width", "24");
                            svg.setAttribute("height", "24");
                            svg.setAttribute("viewBox", "0 0 24 24");
                            svg.setAttribute("fill", "none");
                            svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");

                            // Create the <path> element
                            const path = document.createElementNS("http://www.w3.org/2000/svg",
                                "path");
                            path.setAttribute("fill-rule", "evenodd");
                            path.setAttribute("clip-rule", "evenodd");
                            path.setAttribute("d",
                                "M10.75 4C10.75 7.13537 12.9567 9.83761 16.0288 10.4642L19.9559 11.2651C20.3046 11.3363 20.5553 11.6427 20.556 11.9985C20.5567 12.3544 20.3072 12.6618 19.9588 12.7343L16.2209 13.512C13.1471 14.1516 10.9439 16.8604 10.9439 20H9.44394C9.44394 16.8801 11.218 14.1071 13.8966 12.75H3C2.58579 12.75 2.25 12.4142 2.25 12C2.25 11.5858 2.58579 11.25 3 11.25H13.7392C11.0416 9.90807 9.25 7.12986 9.25 4H10.75Z"
                                );
                            path.setAttribute("fill", "#033A35");

                            // Append the path to the SVG
                            svg.appendChild(path);

                            // Append the SVG to the span and prepend the span to the <li>
                            span.appendChild(svg);
                            li.classList.add('mt-15'); // Add margin class to <li>
                            li.insertBefore(span, li
                            .firstChild); // Insert before the first child node of <li>
                        });
                    });
                };

                // Style and prepend SVG to <li> elements in <ul> and <ol>
                styleListItems(ulElements);
                styleListItems(olElements);
            });



            // Function to style a specific blockquote element
            function styleSingleBlockquote(blockquoteElement) {
                // Create and append the <i> element for the quote icon

                // Create and append the <p> element for the quote text
                const quoteText = document.createElement('p');
                quoteText.textContent = '"' + blockquoteElement.textContent.trim() + '"'; // Use existing text content
                blockquoteElement.innerHTML = ''; // Clear existing content
                blockquoteElement.appendChild(quoteText);

                // Create and append the <h6> element for the author attribution
                const authorName = document.createElement('h6');
                authorName.textContent = '~ Anonymous'; // Replace with actual author if known
                blockquoteElement.appendChild(authorName);

                // Add classes to the blockquote
                blockquoteElement.classList.add('wp-block-quote');


                // Create and append the <i> element for the quote icon
                const quoteIcon = document.createElement('i');
                quoteIcon.classList.add('fi', 'fi-rr-quote-right');
                blockquoteElement.insertBefore(quoteIcon, blockquoteElement.firstChild);

                // Style the blockquote
                // blockquoteElement.style.position = 'relative';
                // blockquoteElement.style.fontStyle = 'italic';
                // blockquoteElement.style.paddingLeft = '30px'; // Space for the quote icon
                // blockquoteElement.style.margin = '20px 0';

                // Style the quote icon
                // quoteIcon.style.position = 'absolute';
                // quoteIcon.style.top = '0';
                // quoteIcon.style.left = '0';
                // quoteIcon.style.fontSize = '30px';
                // quoteIcon.style.color = '#333'; // Adjust color as needed

                // Style the author attribution
                // authorName.style.marginTop = '10px';
                // authorName.style.fontSize = '14px';
                // authorName.style.fontWeight = 'normal';
                // authorName.style.color = '#777'; // Adjust color as needed
            }

            // Call the function with the specific blockquote element
            const blockquoteToStyle = document.querySelector('.news-para blockquote'); // Adjust selector as needed
            if (blockquoteToStyle) {
                styleSingleBlockquote(blockquoteToStyle);
            }
        </script>
    @endpush
</div>
