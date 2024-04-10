<article class="articles__article <?= $featured_post['background_image_modifier'] ?> ">
    <a title='<?= $featured_post['title'] ?>' href='/post?id=<?= $featured_post['id'] ?>'>
        <?= $featured_post['subscription'] ?>
    </a>

    <div class="article__author author">
        <img src=<?= $featured_post['author_photo'] ?> alt="" width="40" height="40">
        <p class="author__subscription"><?= $featured_post['author_name'] ?></p>
        <p class="author__date"><?= $featured_post['date'] ?></p>
    </div>

    <p class="article__subscription"><?= $featured_post['subscription'] ?></p>
    <h3 class="article__header"><?= $featured_post['title'] ?></h3>
    <?= $featured_post['is_adventure'] ?>
</article>