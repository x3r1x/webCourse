<?php
$links = ['home', 'categories', 'about', 'contact'];
$post_id = $_GET['postId'];

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

function post(mysqli $conn, $id): array {
    $sql = "SELECT * FROM post WHERE post_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row == NULL) {
        return NULL;
    }
    $post = [
        'id' => $row['post_id'],
        'title' => $row['title'],
        'subscription' => $row['subscription'],
        'image' => $row['image'],
        'post_text' => $row['post_text']
    ];
    return $post;
}

$conn = createDBConnection();

if (is_numeric($post_id)) {
    $post = post($conn, $post_id);
    if ($post == NULL) {
        include 'home.php';
    }
} else {
    include 'home.php';
}

closeDBConnection($conn);
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewsport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/style/style.css">
        <title><?= $post['title'] ?></title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>   
    </head>

    <body>
        <!-- Верхние кнопки выхода -->
        <header class="tra_header">
            <h3 class="tra_header__text">Escape.</h3>

            <ul class="tra_header__tra_menu tra_menu">
                <?php
                    foreach ($links as $link) {
                        include 'other_links/post/header_links.php';
                    }
                ?>
            </ul>
        </header>

        <!-- Контент сайта -->
        <section class="tra_content">
            <!-- Заголовок -->
            <section class="tra_content__upper_text upper_text">
                <h1 class="upper_text__header"><?= $post['title'] ?></h1>
                <p class="upper_text__underheader"><?= $post['subscription'] ?></p>
            </section>

            <img class="tra_content__image" src=<?= $post['image'] ?> alt="">

            <!-- Текст -->
            <p class="tra_content__information"><?= $post['post_text'] ?></p>
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
                            include 'other_links/post/footer_links.php';
                        }
                    ?>
                </ul>
            </article>
        </footer>
    </body>
</html>