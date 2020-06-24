<div class="label mb-3">
    <p><i class="fas fa-check-circle success"></i></p>   
</div>
<?php if ($order->status) { ?>    
    <h3 style="color: <?= $order->status->status_color; ?>;">
    <?= lang('igniter.cart::default.checkout.text_order_no').$order->order_id; ?> <?= $order->status->status_name; ?></h3>
    <p class="lead mt-3 pt-3"><?= lang('igniter.cart::default.checkout.text_success_message'); ?></p>
    <!-- < ?= $order->status->status_comment; ?> -->
<?php } else { ?>
    <h4><?= lang('igniter.cart::default.checkout.text_order_no').$order->order_id; ?></h4>   
    <h3>--</h3>
<?php } ?>
    <span class="h6">    
        <?= $order->order_date->format('j F'); ?>
        <?= lang('igniter.cart::default.checkout.text_success_at'); ?> 
        <?=  $order->order_date->setTimeFromTimeString($order->order_time)->format('h:i'); ?>    
       <!-- < ?= $order->order_date->setTimeFromTimeString($order->order_time)->isoFormat($orderDateTimeFormat); ?> -->
    </span>
<!-- <p class="mb-0">< ?= lang('igniter.cart::default.checkout.text_success_message'); ?></p> -->

<div class="mt-3">
    <?php if (!$hideReorderBtn) { ?>
        <button
            class="btn btn-primary re-order"
            data-request="<?= $__SELF__.'::onReOrder'; ?>"
            data-request-data="orderId: <?= $order->order_id; ?>"
            data-attach-loading
        ><?= lang('igniter.cart::default.orders.button_reorder'); ?></button>
    <?php } ?>
</div>
