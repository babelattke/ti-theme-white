<?php foreach ($menuItem->menu_options->sortBy('priority') as $index => $menuOption) { ?>


    <div class="card">
    <div id="heading<?= e($menuOption->option_name); ?>" class="bg-white shadow-sm border-0 px-2">
        <h5>
            <a href="#" data-toggle="collapse" 
            data-target="#collapse<?= e($menuOption->option_name); ?>" aria-expanded="true" 
            aria-controls="collapse<?= e($menuOption->option_name); ?>" 
            class="d-block position-relative text-dark text-uppercase collapsible-link py-2">
                <?= e($menuOption->option_name); ?>
                <?php if ($menuOption->required == 1) { ?>
                    <span
                        class="small ml-2 text-muted"><?= lang('igniter.cart::default.text_required'); ?></span>
                <?php } ?>
            </a>
        </h5>
    </div>
    <div id="collapse<?= e($menuOption->option_name); ?>" aria-labelledby="heading<?= e($menuOption->option_name); ?>" 
        data-parent="#accordionOptions" class="collapse show">
        
        <div class="card-body">
        <div class="menu-option option-name">
        <div class="option option-<?= $menuOption->display_type; ?>">
            <div class="option-details">                
                <?php if ($menuOption->min_selected > 0 OR $menuOption->max_selected > 0) { ?>
                    <p class="mb-0 ml-4"><?= sprintf(lang('igniter.cart::default.text_option_summary'), $menuOption->min_selected, $menuOption->max_selected); ?></p>
                <?php } ?>
            </div>

            <?php if (count($optionValues = $menuOption->menu_option_values)) { ?>
                <input
                    type="hidden"
                    name="menu_options[<?= $index; ?>][menu_option_id]"
                    value="<?= $menuOption->menu_option_id; ?>"
                />
                <div class="option-group">
                    <?= partial('@item_option_'.$menuOption->display_type, [
                        'index' => $index,
                        'cartItem' => $cartItem,
                        'optionValues' => $optionValues->sortBy('priority'),
                    ]); ?>
                </div>
            <?php } ?>
        </div>
    </div>


        </div>
    </div>
    </div>



    
<?php } ?>
