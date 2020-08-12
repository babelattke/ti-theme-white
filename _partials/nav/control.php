<div
    data-change-order-type-handler="<?= $changeOrderTypeEventHandler; ?>"
>

<?php if ($locationCurrent->hasDelivery() OR $locationCurrent->hasCollection()) { ?>
    <?php
    $deliveryTime = Carbon\Carbon::parse($location->deliverySchedule()->getOpenTime());
    $collectionTime = Carbon\Carbon::parse($location->collectionSchedule()->getOpenTime());
    ?> 

    <div class="middle btn-group btn-group-toggle" data-toggle="buttons"> 
    <?php if ($locationCurrent->hasDelivery()) { ?>       
        <label
            class="btn <?= $location->orderTypeIsDelivery() ? 'active' : ''; ?>">
            <input 
                id="deliverymain"
                type="radio" 
                name="radio2" 
                data-cart-toggle="order-type"
                value="delivery" <?= $location->orderTypeIsDelivery() ? 'checked' : ''; ?>/>
            <div class="delivery box">                
                    <span><?= lang('igniter.local::default.text_delivery'); ?></span> 
                    <h5>
                        <?php if ($location->deliverySchedule()->isOpen()) { ?>
                            <?= sprintf(lang('igniter.cart::default.text_in_minutes'), $locationCurrent->deliveryMinutes()); ?>
                        <?php }
                        else if ($location->deliverySchedule()->isOpening()) { ?>
                            <?= sprintf(lang('igniter.cart::default.text_starts'), $deliveryTime->isoFormat($cartBoxTimeFormat)); ?>
                        <?php }
                        else { ?>
                            <?= lang('igniter.cart::default.text_is_closed'); ?>
                        <?php } ?>
                    </h5>                                                
            </div>
        </label>
    <?php } ?>
    <?php if ($locationCurrent->hasCollection()) { ?>
        <label
            class="btn <?= ($location->orderType() == 'collection') ? 'active' : ''; ?>">
            <input 
                id="pickupmain"
                type="radio" 
                name="radio2"
                data-cart-toggle="order-type"
                value="collection" <?= ($location->orderType() == 'collection') ? 'checked' : ''; ?>/>
            <div class="pick-up box">
                <span><?= lang('igniter.local::default.text_collection'); ?></span>
                <h5>
                    <?php if ($location->collectionSchedule()->isOpen()) { ?>
                        <?= sprintf(lang('igniter.cart::default.text_in_minutes'), $locationCurrent->collectionMinutes()); ?>
                    <?php }
                    else if ($location->collectionSchedule()->isOpening()) { ?>
                        <?= sprintf(lang('igniter.cart::default.text_starts'), $collectionTime->isoFormat($cartBoxTimeFormat)); ?>
                    <?php }
                    else { ?>
                        <?= lang('igniter.cart::default.text_is_closed'); ?>
                    <?php } ?>
                </h5>
            </div>
        </label>
    <?php } ?>
    </div> 
<?php } ?>
</div>

<script>
    
</script>