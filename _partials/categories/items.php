<?php foreach ($categories as $category) { ?>
    <?php
    if (in_array($category->getKey(), $hiddenCategories)) continue;
    if ($hideEmptyCategory AND $category->count_menus < 1) continue;
    $isActive = ($selectedCategory AND $category->permalink_slug == $selectedCategory->permalink_slug);
    $children = $category->children;
    ?>
    <div class="vsm-item">
        <a
            class="vsm-link<?= $isActive ? ' active-item' : ''; ?>"
            href="<?= page_url('local/menus', ['category' => $category->permalink_slug]) ?>"
        >
        <span class="vsm-title"><?= $category->name ?></span>
        </a>
    </div>  
    <?php if (count($children)) { ?>
        <nav class="vsm-list flex-column ml-3 my-1">
        <?= partial('@items', ['categories' => $children]); ?>
        </nav>
    <?php } ?>
<?php } ?>