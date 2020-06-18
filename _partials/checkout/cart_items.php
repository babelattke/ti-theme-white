<h5>
    <i class="fas fa-shopping-cart"></i> <?= lang('igniter.cart::default.text_checkout_your_items'); ?> 
</h5>   
<?php if ($cart->count()) { ?>
    <div class="list-group cart-items col ml-1 mb-2 text-center">
        <ul>
            <?php foreach ($cart->content()->reverse() as $cartItem) { ?>
                <li class="checkout-cart-items">                                    
                    <a
                        
                        data-cart-control="load-item"
                        data-row-id="<?= $cartItem->rowId; ?>"
                        data-menu-id="<?= $cartItem->id; ?>"
                    >
                        <span class="name">
                            <?php if ($cartItem->qty > 0) { ?>
                                <span class="quantity">
                                    <span class="quantity-content"><?= $cartItem->qty ?></span>
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

<?php if ($pageIsCheckout) { ?>
    <div id="checkout-totals"  
        class="
            <?= (!$pageIsCheckout ? 'fixed-bottom' : 'mt-3').($pageIsCart ? 'hide' : ' d-block d-sm-none'); ?>
        ">
        <?= partial('@cart_total')?>     
    </div>         
<?php } ?>