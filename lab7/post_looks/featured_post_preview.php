<article class="articles__article article" style="background-image: url(<?= $featured_post['image'] ?>);">
    <div class="article__author author">
        <img class="author__photo" src=<?= $featured_post['author_photo'] ?> alt="" width="40" height="40">
        <p class="author__subscription"><?= $featured_post['author_name'] ?></p>
        <p class="author__date"><?= $featured_post['date'] ?></p>
    </div>

    <p class="article__subscription"><?= $featured_post['subscription'] ?></p>
    <a class="article__header" title='<?= $featured_post['title'] ?>' href='/post.php?postId=<?= $featured_post['id'] ?>'>
        <?= $featured_post['title'] ?>
    </a>
    <h4 class="article__adventure_sign <?=  $featured_post['tag'] ? 'article__adventure_sign_visible' : ''?>"><?= $featured_post['tag'] ?></h4>
</article>