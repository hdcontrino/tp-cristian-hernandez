<div class="post-item">
    <div class="post-line"></div>
    <figure>
        <figcaption><?= $post['title'] ?></figcaption>
        <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
    </figure>

    <div class="post-summary">
        <ul class="info-list">
            <?php foreach ($post['info'] as $each) : ?>
                <li><?= $each ?></li>
            <?php endforeach; ?>
        </ul>

        <?php foreach ($post['buttons'] as $button) : ?>
            <div class="button-list">
                <a href="<?= $button['url'] ?>"><?= $button['name'] ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>