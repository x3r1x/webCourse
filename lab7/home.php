<?php
$links = ['home', 'categories', 'about', 'contact'];
$content_links = ['nature', 'photography', 'relaxation', 'vacation', 'travel', 'adventure'];

$featured_posts = [];
$recent_posts = [];

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';
const PORT = '3306';

function createDBConnection(): mysqli {
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE, PORT);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeDBConnection(mysqli $conn): void {
    $conn->close();
}

function getFuturedPosts(&$featured, mysqli $conn): void {
    $sql = "SELECT * FROM post WHERE featured = 1";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $post = [
            'id' => $row['post_id'],
            'tag' => $row['tag'],
            'title' => $row['title'],
            'subscription' => $row['subscription'],
            'author_photo' => $row['author_photo'],
            'author_name' => $row['author_name'],
            'date' => $row['date'],
            'image' => $row['image']
        ];
        $featured[] = $post;
    }
}

function getRecentPosts(&$recent, mysqli $conn): void {
    $sql = "SELECT * FROM post WHERE featured = 0";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $post = [
            'id' => $row['post_id'],
            'image' => $row['image'],
            'title' => $row['title'],
            'subscription' => $row['subscription'],
            'author_photo' => $row['author_photo'],
            'author_name' => $row['author_name'],
            'date' => $row['date']
        ];
        $recent[] = $post;
    }
}


$conn = createDBConnection();
getFuturedPosts($featured_posts, $conn);
getRecentPosts($recent_posts, $conn);
closeDBConnection($conn)
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
                    <?php
                        foreach ($links as $link) {
                            include 'other_links/home/header_links.php';
                        }
                    ?>
                </ul>
            </div>
            <!-- Заголовок -->
            <div class="site_header__content content">
                <h1 class="content__header_text">Let's do it together.</h1>

                <!-- Всё, что под заголовком на фоне картинки -->
                <p class="underheader__text">We travel the world in search of stories. Come along for the ride.</p>
                <a href="/posts" class="underheader__button">View Latest Posts</a>
            </div>
        </header>
        
        <!-- Контент сайта -->
        <section class="site_content">
            <!-- Ссылки, которые сортируют тип контента -->
            <div class="site_content__color_set">
                <nav class="site_content__content_sort content_sort">
                    <?php
                        foreach ($content_links as $link) {
                            include 'other_links/home/content_links.php';
                        }
                    ?>
                </nav>
            </div>

            <!-- Блок "Featured posts" -->
            <section class="site_content__featured_posts featured_posts">
                <h2 class="featured_posts__section_mark">Featured posts</h2>

                <div class="featured_posts__articles articles">
                    <?php
                    foreach ($featured_posts as $featured_post) {
                        include 'post_looks/featured_post_preview.php';
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
                        include 'post_looks/recent_post_preview.php';
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
                    <?php
                        foreach ($links as $link) {
                            include 'other_links/home/footer_links.php';
                        }
                    ?>
                </ul>
            </article>
        </footer>
    </body>
</html>