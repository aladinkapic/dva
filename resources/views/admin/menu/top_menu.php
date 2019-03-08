<div id="top_menu">
    <!-- logo and MENU parts -->
    <a href="dashboard.php?path=Home&cat=Moj DMD&what=Dashboard&icon=fa-home&desc=Kontrolna tabla aplikacije">
        <div id="menu_logo">
            <img src="/images/logo.png" alt="">
        </div>
    </a>

    <div id="select_menu" title="Opcije MENU-a" onclick="move_left_menu();">
        <i class="fas fa-bars"></i>
    </div>

    <!-- additional options -->
    <div id="additional_options">
        <a target="_blank" href="#">
            <div class="additional_option">
                <p>Uputstvo za korištenje</p>
<!--                <div class="additional_option_icon">-->
<!--                    <i class="fas fa-sort-down"></i>-->
<!--                </div>-->
            </div>
        </a>
    </div>

    <div class="icons">

    </div>
    <div class="notifications_part" id="messages_wrapper">
        <div class="notification_image">
            <div class="notification_img_w"></div>
            <h4>Vaše poruke</h4>
            <p id="updated_number_of_inbox"></p>
        </div>
        <div class="notifications_body" id="inbox_body_updated">

            <!--

            <div class="single_notify">
                <div class="line"></div>
                <div class="white_circle">
                    <div class="color_circle color_circle_blue"></div>
                </div>
                <h5>NASLOV OBAVIJESTI</h5>
                <p>Kratki opis ove obavijesti te njen datum, 21. Januar u <span>12:00 PM</span></p>
            </div>
            <div class="single_notify">
                <div class="line"></div>
                <div class="white_circle">
                    <div class="color_circle color_circle_red"></div>
                </div>
                <h5>NASLOV OBAVIJESTI</h5>
                <p>Kratki opis ove obavijesti te njen datum, 21. Januar u <span>12:00 PM</span></p>
            </div>
            <div class="single_notify">
                <div class="line"></div>
                <div class="white_circle">
                    <div class="color_circle color_circle_green"></div>
                </div>
                <h5>NASLOV OBAVIJESTI</h5>
                <p>Kratki opis ove obavijesti te njen datum, 21. Januar u <span>12:00 PM</span></p>
            </div>

            -->
        </div>
    </div>



    <div class="icons" onclick="open_notifications();">
        <div class="single_icon_w" title="Pregled notifikacija">
            <i class="fas fa-bell"></i>
            <div class="single_icon_v">
                <p id="number_of_notifications">0</p>
            </div>
        </div>
    </div>


    <div class="notifications_part" id="notifications_wrapper">
        <div class="notification_image">

            <div class="notification_img_w"></div>
            <h4>Obavijesti</h4>
            <p id="updated_number_of_not"></p>
        </div>
        <div class="notifications_body" id="notifications_body_updated">

            <!--

            <div class="single_notify">
                <div class="line"></div>
                <div class="white_circle">
                    <div class="color_circle color_circle_blue"></div>
                </div>
                <h5>NASLOV OBAVIJESTI</h5>
                <p>Kratki opis ove obavijesti te njen datum, 21. Januar u <span>12:00 PM</span></p>
            </div>
            <div class="single_notify">
                <div class="line"></div>
                <div class="white_circle">
                    <div class="color_circle color_circle_red"></div>
                </div>
                <h5>NASLOV OBAVIJESTI</h5>
                <p>Kratki opis ove obavijesti te njen datum, 21. Januar u <span>12:00 PM</span></p>
            </div>
            <div class="single_notify">
                <div class="line"></div>
                <div class="white_circle">
                    <div class="color_circle color_circle_green"></div>
                </div>
                <h5>NASLOV OBAVIJESTI</h5>
                <p>Kratki opis ove obavijesti te njen datum, 21. Januar u <span>12:00 PM</span></p>
            </div>

            -->
        </div>
    </div>


    <div class="icons user_part">
        <div id="user_image">
            <img src="" alt="">
        </div>
        <a href="profile.php?path=Osobni%20podaci&cat=Aladin%20Kapić&what=Uredite%20Vaš%20profil&icon=fa-network-wired&desc=Izmijenite%20osobne%20podatke,%20kako%20vaše%20tako%20i%20vaše%20kompanije">
            <p>Aladin Kapić</p>
        </a>

    </div>
</div>
