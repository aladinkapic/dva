<div class="single_image">
    <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="image" src="images/i_1.png">
            </div>
            <div class="swiper-slide">
                <img class="image" src="images/i_1.png">
            </div>
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
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    </script>

</div>