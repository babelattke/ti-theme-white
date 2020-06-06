<div class="user-box box-primary">
    <div class="box-body box-profile">
        <span class="profile-user-img img-responsive text-center">
            <i class="fas fa-user user-img"></i>
        </span>
        <h3 class="profile-username text-center">
            <?= ($customer->first_name); ?> <?= ($customer->last_name); ?> 
        </h3>
        <p class="text-center text-muted">
            <i class="fas fa-envelope"></i>
            <?= ($customer->email); ?> 
        </p>               

        <hr>
        <p><i class="fa fa-map-marker text-muted"></i> Address</p>        
            <?php if (!empty($customer->address)) { ?>
                <h5 class="font-weight-normal">
                    <?= lang('igniter.user::default.text_default_address'); ?>
                    <a
                        class="edit-address pull-right"
                        href="<?= site_url('account/address/'.$customer->address->getKey()); ?>"
                    ><?= lang('igniter.user::default.text_edit'); ?></a>
                </h5>
                <address class="text-left text-overflow"><?= format_address($customer->address); ?></address>
            <?php }
            else { ?>
                <p class="text-muted"><?= lang('igniter.user::default.text_no_default_address'); ?></p>
            <?php } ?>
        <hr> 

            <p><i class="fa fa-shopping-basket text-center text-muted"></i> Your Cart</p>
            <?php if ($__SELF__->cartCount()) { ?>
                <p><?= sprintf(lang('igniter.user::default.text_cart_summary'), $__SELF__->cartCount(), $__SELF__->cartTotal()); ?></p>
                <a class="btn btn-info btn-block" href="<?= site_url('checkout/checkout'); ?>">
                    <?= lang('igniter.user::default.text_checkout'); ?>
                </a>
            <?php }
            else { ?>
                <p><?= lang('igniter.user::default.text_no_cart_items'); ?></p>
                <a class="btn btn-info btn-block" href="<?= restaurant_url('local/menus'); ?>">
                    <?= lang('igniter.user::default.text_order'); ?>
                </a>
            <?php } ?>        
    </div>
    <!-- /.box-body -->
</div>