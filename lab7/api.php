<?php
$data = json_decode(file_get_contents("php://input"), true);

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

function saveFile(string $file, string $data): void {
    $myFile = fopen($file, 'w');
    if ($myFile) {
        $result = fwrite($myFile, $data);
        if ($result) {
            echo 'Data has been saved succesfully';
        } else {
            echo 'Troubles with saving data to file';
        }
        fclose($myFile);
    } else {
        echo 'Troubles with opening file';
    }
}

function saveImage(string $imageBase64, string $way): string {
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    saveFile("{$way}.{$imgExtention}", $imageDecoded);
    return "{$way}.{$imgExtention}";
}

function nextId(mysqli $conn): int {
    $sql = "SELECT MAX(post_id) FROM post";
    $result = $conn->query($sql);
    $num = ($result->fetch_assoc())['MAX(post_id)'];
    return $num + 1;
}

function saveToDB(mysqli $conn, string $title, string $subscription, string $author_photo, string $author_name, string $date, string $post_text, string $image, int $featured, string $tag) {
    $sql = "INSERT INTO post (title, subscription, author_photo, author_name, date, post_text, image, featured, tag) VALUES (
        {$title},
        {$subscription},
        {$author_photo},
        {$author_name},
        {$date},
        {$post_text},
        {$image},
        {$featured},
        {$tag}
    )";

}

function saveData(array $data, mysqli $conn): void {
    $ok = true;
    $nextId = nextId($conn);

    $title = $data['title'];
    if (empty($title) || gettype($title) != 'string') {
        echo 'Title is empty';
        $ok = false;
    }

    $subscription = $data['subscription'];
    if (empty($subscription) || gettype($subscription) != 'string') {
        echo 'Subscription is empty';
        $ok = false;
    }

    
    $author_p = "images/index/a{$nextId}";
    if (empty($data['author_photo']) || gettype($data['author_photo']) != 'string') {
        echo 'There is no author avatar';
        $ok = false;
    } else {
        $author_photo = "static/" . saveImage($data['author_photo'], $author_p);
    }
    

    $author_name = $data['author_name'];
    if (empty($author_name) || gettype($author_name) != 'string') {
        echo 'There is no such author';
        $ok = false;
    }

    $date = $data['date'];
    if (empty($date) || gettype($date) != 'string') {
        echo 'Date is not set';
        $ok = false;
    }

    $post_text = $data['post_text'];
    if (empty($post_text) || gettype($post_text) != 'string') {
        echo 'Post text is empty';
        $ok = false;
    }

    $im = "images/index/p{$nextId}";
    if (empty($data['image']) || gettype($data['image']) != 'string') {
        echo 'There is not post image';
        $ok = false;
    } else {
        $image = "static/" . saveImage($data['image'], $im);
    }


    $featured = $data['featured'];
    if (empty($featured) || gettype($featured) != 'int') {
        echo "Don't know is post featured or no";
        $ok = false;
    }

    $tag = $data['tag'];

    if ($ok) {
        echo 'Data has been saved succesfully';
        saveToDB($conn, $title, $subscription, $author_photo, $author_name, $date, $post_text, $image, $featured, $tag);
    } else {
        echo 'Data has not been saved';
    }
}

$conn = createDBConnection();
saveData($data, $conn);
closeDBConnection($conn)
?>