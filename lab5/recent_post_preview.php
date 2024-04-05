<article class="post__asi extra_article">
    <img src=<?= $recent_post['image'] ?> alt="" width = '720' height="360" class="extra_article__image">

    <div class="extra_article__text text">
        <h3 class="text__header"><?= $recent_post['title'] ?></h3>
        <p class="text__subscription"><?= $recent_post['subscription'] ?></p>
    </div>

    <div class="extra_article__extra_avatar extra_avatar">
        <div class="extra_avatar__human human">
            <img class="human__image" src=<?= $recent_post['author_photo'] ?> alt="" width="40" height="40">
            <p class="human__subscription"><?= $recent_post['author_name'] ?></p>
            </div>

        <p class="extra_avatar__date"><?= $recent_post['date'] ?></p>
    </div>
</article>