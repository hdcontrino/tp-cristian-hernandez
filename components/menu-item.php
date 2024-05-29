<li class="menu-item">
    <div class="menu-item-name <?= $item['active'] ? '' : 'disabled' ?>">
        <a href="<?= $item['active'] ? $item['url'] : '#' ?>">
            <?= $item['name'] ?>
        </a>

        <?php if (isset($item['submenu'])) : ?>
            <span class="menu-item-expand">+</span>
        <?php endif; ?>
    </div>

    <?php if (isset($item['submenu'])) :
        generateMenuElements($item['submenu'], true);
    endif; ?>
</li>