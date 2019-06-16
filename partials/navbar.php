<nav class="navbar">
    <div class="container">
        <span class="navbar-brand">
            <a href="<?php echo home_url(); ?>">Influid</a>
        </span>

        <button class="hamburger" type="button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <?php

        wp_nav_menu([
            'menu_id'        => 'main-menu',
            'menu'           => 'main-menu',
            'theme_location' => 'main-menu',
            'container'      => false,
        ]);

        ?>
    </div>
</nav>
