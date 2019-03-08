<div id="left_menu">
    <?php $menu_counter = 0; ?>

    <!-- ADMINISTRATOR - root -->
    <div class="menu_header">
        <p>ADMINISTRACIJA</p>
    </div>


    <!-- HOMEPAGE -->
    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');" >
        <div class="menu_c_img">
            <i class="fas fa-home"></i>
        </div>
        <p>Naslovna strana</p>
        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats">
        <a href="/administrator_slider">
            <div class="menu_subcategory">
                <p>Glavni slajder</p>
                <div class="menu_line"></div>
            </div>
        </a>
        <a href="/administrator_review">
            <div class="menu_subcategory">
                <p>Recenzije</p>
                <div class="menu_line"></div>
            </div>
        </a>
        <a href="/administrator_partners">
            <div class="menu_subcategory">
                <p>Partneri</p>
                <div class="menu_line"></div>
            </div>
        </a>
    </div>

    <!-- Our projects -->
    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');" >
        <div class="menu_c_img">
            <i class="fas fa-project-diagram"></i>
        </div>
        <p>Naši projekti</p>
        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats">
        <a href="/administrator_categories">
            <div class="menu_subcategory">
                <p>Kategorije projekata</p>
                <div class="menu_line"></div>
            </div>
        </a>
        <a href="/administrator_subcategories">
            <div class="menu_subcategory">
                <p>Podategorije projekata</p>
                <div class="menu_line"></div>
            </div>
        </a>
        <a href="/administrator_projects/create">
            <div class="menu_subcategory">
                <p>Unesite novi projekat</p>
                <div class="menu_line"></div>
            </div>
        </a>
    </div>

    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');" >
        <div class="menu_c_img">
            <i class="fas fa-cog"></i>
        </div>
        <p>O nama</p>
        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats">
        <a href="/administrator_content/0/aboutus">
            <div class="menu_subcategory">
                <p>O nama - page</p>
                <div class="menu_line"></div>
            </div>
        </a>
    </div>

    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');" >
        <div class="menu_c_img">
            <i class="far fa-calendar-alt"></i>
        </div>
        <p>Kalendar</p>
        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats">
        <a href="#">
            <div class="menu_subcategory">
                <p>Historija kroz kalendar</p>
                <div class="menu_line"></div>
            </div>
        </a>
    </div>




    <!-- Centar za podršku -->
    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');">
        <div class="menu_c_img">
            <i class="fas fa-question-circle"></i>
        </div>
        <p>Centar za podršku</p>
        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats">
        <div class="menu_subcategory">
            <p>Poruke</p>
            <div class="menu_line"></div>
        </div>
    </div>

    <!-- Personal data -->
    <div class="menu_header menu_header_2">
        <p>OSOBNI PODACI</p>
    </div>
    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');">
        <div class="menu_c_img">
            <i class="far fa-user"></i>
        </div>
        <p>Aladin Kapić</p>
        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats">
        <a href="#">
            <div class="menu_subcategory">
                <p>Osobni podaci</p>
                <div class="menu_line"></div>
            </div>
        </a>
<!--        <div class="menu_subcategory">-->
<!--            <p>Moja slika</p>-->
<!--            <div class="menu_line"></div>-->
<!--        </div>-->
    </div>

    <!-- my web options -->
    <div class="menu_header menu_header_2">
        <p>MOJ WEB</p>
    </div>
    <div class="menu_category" onclick="get_subcategory('<?php echo $menu_counter++; ?>');">
        <div class="menu_c_img">
            <i class="fas fa-chart-line"></i>
        </div>
        <p>Analitika</p>

        <div class="menu_c_arrow">
            <i class="fas fa-icon fa-angle-down"></i>
        </div>
    </div>
    <div class="menu_all_subcats" >
        <a href="/views_per_month/<?php echo (int)date('m'); ?>/<?php echo date('y'); ?>">
            <div class="menu_subcategory">
                <p>Posjete na stranici</p>
                <div class="menu_line"></div>
            </div>
        </a>
    </div>


    <div class="menu_header menu_header_2">
        <p>SESIJE</p>
    </div>
    <a href="logout.php">
        <div class="menu_category">
            <div class="menu_c_img">
                <i class="fas fa-power-off"></i>
            </div>
            <p>Odjavite se</p>
        </div>
    </a>
</div>