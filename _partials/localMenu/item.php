<?php
$mealtime = $menuItem->mealtime;
$special = $menuItem->special;
$mealtimeNotAvailable = ($mealtime AND !$mealtime->isAvailableNow());
$specialActive = ($special AND $special->active());
$menuHasOptions = $menuItem->hasOptions();
$menuPrice = $specialActive ? $special->getMenuPrice($menuItem->menu_price) : $menuItem->menu_price;
?>
<div id="menu<?= $menuItem->menu_id; ?>">
    <div class="menu-item-card">          
        <?php if ($showMenuImages == 1 AND $menuItem->hasMedia('thumb')) { ?>
            <div class="menu-item-img" 
                style="
                    background: url('<?= $menuItem->getThumb() ?>');
                    background-size: 150px;
                    background-position: center center;
                    background-repeat: no-repeat;
                    float : left;
                    position : relative; 
                    width: 45%;	              
                    ">             
            </div>
        <?php } ?> 
        <div class="menu-item-info">
            <div class="menu-item-price">
                <span><?= $menuPrice > 0 ? currency_format($menuPrice) : lang('main::lang.text_free'); ?></span>
            </div>
            <div class="menu-item-qty">
                <span></span>
            </div>
            <h4><?= e($menuItem->menu_name); ?></h4>
            <p class="text-muted"><?= nl2br($menuItem->menu_description); ?></p>
            <div class="pt-3">
            <button
                    class="add-item-cart<?= $mealtimeNotAvailable ? ' disabled' : '' ?>"
                    <?php if (!$mealtimeNotAvailable) { ?>
                        <?php if ($menuHasOptions) { ?>
                            data-cart-control="load-item"
                            data-menu-id="<?= $menuItem->menu_id; ?>"
                            data-quantity="<?= $menuItem->minimum_qty; ?>"
                        <?php } else { ?>
                            data-request="<?= $updateCartItemEventHandler; ?>"
                            data-request-data="menuId: '<?= $menuItem->menu_id; ?>', quantity: '<?= $menuItem->minimum_qty; ?>'"
                            data-replace-loading="fas fa-spinner fa-spin"
                        <?php } ?>
                    <?php } else { ?>
                        title="<?= sprintf(lang('igniter.local::default.text_mealtime'),
                            $mealtime->mealtime_name, $mealtime->start_time, $mealtime->end_time
                        ); ?>"
                    <?php } ?>
                >
                    <i class="fa fa-<?= $mealtimeNotAvailable ? 'clock-o' : 'plus' ?>"></i>
                </button>
            </div>
        </div>
    </div>
</div>
