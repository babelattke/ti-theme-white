<div class="d-block d-sm-none">
    <button
        class="btn btn-light btn-block px-3 text-left"
        data-toggle="collapse"
        data-target="#collapseCategories<?= $id = uniqid('collapse') ?>"
        aria-expanded="false"
        aria-controls="collapseCategories"
    >
        <i class="fas fa-bars"></i>&nbsp;&nbsp;
        <?= $selectedCategory ? $selectedCategory->name : lang('igniter.local::default.text_categories') ?>
    </button>
</div>
<div id="collapseCategories<?= $id ?>" class="vsm-dropdown collapse d-sm-block">
    <h2 class="h5 vsm-title px-3 d-none d-sm-block"><?= lang('igniter.local::default.text_categories') ?></h2>
    <nav class="vsm-list flex-column">
        
        <?php if ($selectedCategory) { ?>
            <a
                class="vsm-item text-danger"
                href="<?= page_url('local/menus', ['category' => null]) ?>"
            >
                <i class="fas fa-times"></i>&nbsp;&nbsp;<?= lang('igniter.local::default.text_clear'); ?>
            </a>
        <?php } ?>

        <?= partial('categories::items', ['categories' => $categories->toTree()]); ?>
    </nav>
</div>