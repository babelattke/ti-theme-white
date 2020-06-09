<div class="menu-items row">
    <?php if (count($menuItems)) { ?>
        <?php foreach ($menuItems as $menuItem) { ?>
            <div class="col-12 col-md-6">
                <?= partial('@item', ['menuItem' => $menuItem]); ?>
            </div>            
        <?php } ?>
    <?php }
    else { ?>
        <p><?= lang('igniter.local::default.text_empty'); ?></p>
    <?php } ?>
</div>
