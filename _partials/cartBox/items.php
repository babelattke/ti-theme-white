<?php if ($cart->count()) { ?>
    <div class="cart-items">
        <ul>
            <?php foreach ($cart->content()->reverse() as $cartItem) { ?>
                <li>
                    <button
                        type="button"
                        class="cart-btn btn btn-light btn-sm btn-add-item"
                        data-request="<?= $removeCartItemEventHandler; ?>"
                        data-replace-loading="fa fa-spinner fa-spin"
                        data-request-data="rowId: '<?= $cartItem->rowId; ?>', menuId: '<?= $cartItem->id; ?>'"
                    ><i class="fa fa-minus"></i></button>

                    <span class="price pull-right"><?= currency_format($cartItem->subtotal); ?></span>
                    <a
                        class="name-image"
                        data-cart-control="load-item"
                        data-row-id="<?= $cartItem->rowId; ?>"
                        data-menu-id="<?= $cartItem->id; ?>"
                    >
                        <span class="name">
                            <?php if ($cartItem->qty > 0) { ?>
                                <span class="quantity font-weight-bold">
                                    <?= $cartItem->qty.' '.lang('igniter.cart::default.text_times'); ?>
                                </span>
                            <?php } ?>
                            <?= $cartItem->name; ?>
                        </span>
                        <?php if ($cartItem->hasOptions()) { ?>
                            <?= partial('@cart_item_options', [
                                'itemOptions' => $cartItem->options,
                            ]); ?>
                        <?php } ?>
                        <?php if (!empty($cartItem->comment)) { ?>
                            <p class="comment text-muted small">
                                <?= $cartItem->comment; ?>
                            </p>
                        <?php } ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }
else { ?>
    <div class="panel-body"><?= lang('igniter.cart::default.text_no_cart_items'); ?></div>
<?php } ?>
