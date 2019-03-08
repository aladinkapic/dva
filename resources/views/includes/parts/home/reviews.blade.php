

<div id="reviews">
    <div class="dots_w"><img src="images/dots2.png" alt=""></div>
    <div class="swiper-container swiper1">
        <div class="reviews_header">
            <h2>Od Naših Velikih Klijenata</h2>
        </div>
        <div class="swiper-wrapper">
            @foreach($reviews as $review)
            <div class="swiper-slide">
                <div class="review_image">
                    <img src="uploaded_images/{{$review->image->name}}" alt="">
                </div>
                <div class="review_text">
                    <h4>@php echo $review->name; @endphp <span>/ @php echo $review->title; @endphp</span></h4>
                    <p>
                        @php echo $review->text; @endphp
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
    </div>



    <!-- Swiper JS -->
    <script src="swipe/dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper1', {
            slidesPerView: 2,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 1,
                }
            }
        });
    </script>

    <script>
       // create_dots("reviews");
    </script>
</div>