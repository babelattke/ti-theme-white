<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#orders" data-toggle="tab">Orders</a></li>
        <li><a href="#address" data-toggle="tab">Address</a></li>
        <li><a href="#settings" data-toggle="tab">Settings</a></li>
    </ul>
    <div class="tab-content">
        <div class="active tab-pane" id="orders">
            <?= component('accountOrders'); ?>
        
        </div>
        <div class="tab-pane" id="address">
            <?= component('accountAddressBook'); ?>
        </div>

        <div class="tab-pane" id="settings">
            <h5 class="font-weight-normal mb-3"><?= lang('igniter.user::default.text_edit_details') ?></h5>
            <?= partial('@settings'); ?>
        </div>
    </div>    
</div>