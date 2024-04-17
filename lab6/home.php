<?php
$featured_posts = [
    [
        'id' => 1,
        'background_image_modifier' => 'tra',
        'tag' => '',
        'title' => 'The Road Ahead',
        'subscription' => 'The road ahead might be paved - it might not be.',
        'author_photo' => 'static/images/index/a1.png',
        'author_name' => 'Gleb Ryzhov',
        'date' => 'August 31, 2023'
    ],

    [
        'id' => 2,
        'background_image_modifier' => 'fttd',
        'tag' => 'ADVENTURE',
        'title' => 'From Top To Down',
        'subscription' => 'Please visit Chongquing if you have any chance!',
        'author_photo' => 'static/images/index/a2.png',
        'author_name' => 'Yan Jing Yu',
        'date' => 'January 18, 2024'
    ]
];

$recent_posts = [
    [
        'id' => 3,
        'image' => 'static/images/index/p3.png',
        'title' => "Assembler's importancy",
        'subscription' => 'Assembler is a great opportunity to be a straight "A" student!',
        'author_photo' => 'static/images/index/a3.png',
        'author_name' => 'Artem Chepurnoy',
        'date' => '23/12/2023'
    ],

    [
        'id' => 4,
        'image' => 'static/images/index/p4.png',
        'title' => "Why sleeping is important?",
        'subscription' => 'Just sleep and everything is alright!',
        'author_photo' => 'static/images/index/a4.png',
        'author_name' => 'Arseniy Popov',
        'date' => '18/12/2023'
    ],

    [
        'id' => 5,
        'image' => 'static/images/index/p5.png',
        'title' => "Trip to Saint Petersburg",
        'subscription' => "The beauty of Russia's Netherlands can't be described in words!",
        'author_photo' => 'static/images/index/a5.png',
        'author_name' => 'Nikolay Uskov',
        'date' => '13/12/2023'
    ],

    [
        'id' => 6,
        'image' => 'static/images/index/p6.png',
        'title' => "Through the mist",
        'subscription' => 'Travel makes you see what a tiny place you occupy in the world.',
        'author_photo' => 'static/images/index/a3.png',
        'author_name' => 'Artem Chepurnoy',
        'date' => '9/12/2023'
    ],

    [
        'id' => 7,
        'image' => 'static/images/index/p7.png',
        'title' => "Awaken early",
        'subscription' => 'Not thouse who wander are lost.',
        'author_photo' => 'static/images/index/a5.png',
        'author_name' => 'Nikolay Uskov',
        'date' => '7/12/2023'
    ],

    [
        'id' => 8,
        'image' => 'static/images/index/p8.png',
        'title' => "Try it Always",
        'subscription' => 'The world is a book, and those who do not travel read only the page.',
        'author_photo' => 'static/images/index/a5.png',
        'author_name' => 'Nikolay Uskov',
        'date' => '7/12/2023'
    ]
]

?>

<!DOCTYPE html>
    <head>
        <!-- Кодировка -->
        <meta charset="UTF-8">
        <!-- "Ширина" сайта -->
        <meta name="viewsport" content="width=device-width, initial-scale=1.0">
        <!-- Подключение файла "style.css" -->
        <link rel="stylesheet" href="static/style/style.css">
        <!-- Заголовок -->
        <title>Let's do it together!</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>
    </head>

    <body>
        <!-- Верхние кнопки выхода -->
        <header class="site_header">
            <div class="site_header__top top">
                <h3 class="top__escape_text">Escape.</h3>

                <ul class="site_header__escape_menu escape_menu">
                    <li class="escape_menu__item"><a href="https://yandex.com/" class="escape_menu__button">HOME</a></li>
                    <li class="escape_menu__item"><a href="https://www.youtube.com/channel/UCsmY_auGOPTzdwbFFNJmAlA" class="escape_menu__button">CATEGORIES</a></li>
                    <li class="escape_menu__item"><a href="https://ru.wikipedia.org/wiki/HTML" class="escape_menu__button">ABOUT</a></li>
                    <li class="escape_menu__item"><a href="https://vk.com/x3r1x" class="escape_menu__button">CONTACT</a></li>
                </ul>
            </div>
            <!-- Заголовок -->
            <div class="site_header__content content">
                <h1 class="content__header_text">Let's do it together.</h1>

                <!-- Всё, что под заголовком на фоне картинки -->
                <p class="underheader__text">We travel the world in search of stories. Come along for the ride.</p>
                <a href="https://www.youtube.com/watch?v=ruvFi_cqO1Q&list=RDMM623JGFAYZ3w&index=8s" class="underheader__button">View Latest Posts</a>
            </div>
        </header>
        
        <!-- Контент сайта -->
        <section class="site_content">

            <!-- Ссылки, которые сортируют тип контента -->
            <div class="site_content__color_set">
                <nav class="site_content__content_sort content_sort">
                    <a href="https://www.youtube.com/watch?v=-CTlz5PJRZs" class="content_sort__button">Nature</a>
                    <a href="https://www.youtube.com/watch?v=5Q9AqFa4zQM" class="content_sort__button">Photography</a>
                    <a href="https://www.youtube.com/watch?v=jfKfPfyJRdk" class="content_sort__button">Relaxation</a>
                    <a href="https://www.youtube.com/watch?v=p1LchwNFSVE" class="content_sort__button">Vacation</a>
                    <a href="https://vk.com/travelline_ru" class="content_sort__button">Travel</a>
                    <a href="https://www.youtube.com/watch?v=QtXby3twMmI" class="content_sort__button">Adventure</a>
                </nav>
            </div>

            <!-- Блок "Featured posts" -->
            <section class="site_content__featured_posts featured_posts">
                <h2 class="featured_posts__section_mark">Featured posts</h2>

                <div class="featured_posts__articles articles">
                    <?php
                    foreach ($featured_posts as $featured_post) {
                        include 'featured_post_preview.php';
                    }
                    ?>
                </div>
            </section>

            <!-- Блок "Recent" -->
            <section class="site_content__recent recent">
                <h2 class="recent__section_mark">Recent</h2>

                <!-- Статьи -->
                <div class="recent__post post">
                    <?php
                    foreach ($recent_posts as $recent_post) {
                        include 'recent_post_preview.php';
                    }
                    ?>
                </div>
            </section>
        </section>

        <!-- Нижняя часть сайта -->
        <footer class="site_footer">
            <!-- Блок "Stay in touch" -->
            <article class="site_footer__sit sit">
                <h3 class="sit__text">Stay in Touch</h3>

                <div class="sit__console_log console_log">
                    <input id="email" name="console_log" placeholder="Enter your email" class="console_log__console">
                    <button class="console_log__button" onclick="alert()">Submit</button>
                </div>
            </article>

            <!-- Нижние кнопки выхода -->
            <article class="site_footer__exit_buttons exit_buttons">
                <h3 class="exit_buttons__footer_text">Escape.</h3>

                <ul class="exit_buttons__nav_menu nav_menu">
                    <li class="nav_menu__item"><a href="https://yandex.com/" class="nav_menu__footer_button">HOME</a></li>
                    <li class="nav_menu__item"><a href="https://www.youtube.com/channel/UCsmY_auGOPTzdwbFFNJmAlA" class="nav_menu__footer_button">CATEGORIES</a></li>
                    <li class="nav_menu__item"><a href="https://ru.wikipedia.org/wiki/HTML" class="nav_menu__footer_button">ABOUT</a></li> 
                    <li class="nav_menu__item"><a href="https://vk.com/x3r1x" class="nav_menu__footer_button">CONTACT</a></li>
                </ul>
            </article>
        </footer>
    </body>
</html>