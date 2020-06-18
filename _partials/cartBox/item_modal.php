<div
  class="modal-dialog"
  data-control="cart-item"
  data-min-quantity="<?= $menuItem->minimum_qty; ?>" 
  data-price-amount="<?= $cartItem ? $cartItem->price : $menuItem->getBuyablePrice() ?>"
  data-price-format="<?= currency_format(0); ?>"
>
  
  <form method="POST" data-request="<?= $formHandler; ?>">
    <div class="modal-content">    
    <div class="badge-promo">      
      <span class="badge-promo-content">
        <?= e($menuItem->getBuyableName()); ?>
        <button
          type="button"
          class="close px-2 pull-right"
          data-dismiss="modal"
        ><span aria-hidden="true">&times;</span></button>
      </span>
    </div>
      <?php if ($showCartItemThumb AND $menuItem->hasMedia('thumb')) { ?>
        <div class="modal-top text-center">
          <img class="img-fluid pt-2" src="<?= $menuItem->thumb->getThumb([
            'width' => $cartItemThumbWidth,
            'height' => $cartItemThumbHeight,
          ]); ?>">
        </div>
      <?php } ?>

      <div class="modal-body">    
        <!-- <button
          type="button"
          class="close px-2"
          data-dismiss="modal"
        ><span aria-hidden="true">&times;</span></button> -->
        <!-- <h4>< ?= e($menuItem->getBuyableName()); ?></h4> -->
        <?php if (strlen($menuItem->menu_description)) { ?>
          <p class="text-muted"><?= nl2br($menuItem->menu_description); ?></p>
        <?php } ?>

        <input type="hidden" name="menuId" value="<?= $menuItem->getBuyableIdentifier(); ?>"/>
        <input type="hidden" name="rowId" value="<?= $cartItem ? $cartItem->rowId : null; ?>"/>

        <div
          id="menu-options"
          class="menu-options"
          data-control="item-options"
        >
        <div id="accordionOptions" class="accordion">
          <?= partial('@item_options'); ?>
        </div>
        </div>

        
        <div class="menu-comment">        
          <textarea            
            name="comment"
            class="form-control"            
            rows="2"
            placeholder="<?= lang('igniter.cart::default.label_add_comment'); ?>"
          ><?= $cartItem ? $cartItem->comment : null; ?></textarea>
        </div>
      </div>

      <div class="modal-footer">
        <div class="row no-gutters w-100">
          <div class="col-sm-4 pb-3 pb-sm-0">
            <div class="input-group" data-cart-toggle="quantity">
              <div class="input-group-prepend">
                <button
                  class="btn btn-light btn-minus"
                  data-operator="minus"
                  type="button"
                ><i class="fas fa-minus"></i></button>
              </div>
              <input
                type="number"
                name="quantity"
                class="form-control text-center item-qty"
                value="<?= $cartItem ? $cartItem->qty : $menuItem->minimum_qty; ?>"
              >
              <div class="input-group-append">
                <button
                  class="btn btn-light btn-plus"
                  data-operator="plus"
                  type="button"
                ><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="col-sm-8 pl-sm-2">
            <button type="submit" class="btn btn-add-item btn-block" data-attach-loading>
              <?= $cartItem
                ? lang('igniter.cart::default.button_update')
                : lang('igniter.cart::default.button_add_to_order');
              ?>
              <span id="price" class="pull-right" data-item-subtotal>
                <?= currency_format($cartItem
                  ? $cartItem->subtotal
                  : $menuItem->getBuyablePrice());
                ?>
              </span>
              <!-- <span id="price"></span> -->
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>


<script>
  $(".modal-body").on("click", "input:checkbox", function () {
    var $this = $(this);
    var $total = $("#price");
    var $target = $("label[for='" + $this.attr("id") + "']");
    
    var item_value = +($target.html().split('$').pop().replace(/[^\d\.]/g, '') || 0.00);
    var current_total = +($total.html().replace(/[^\d\.]/g, '') || 0.00);

    if ($this.prop("checked") === true) {
      current_total += item_value;
    } else {
      current_total -= item_value;
    }
    
    $total.html("$" + current_total.toFixed(2));
});
var $last = 0.00;
$(".modal-body").on("click", "input:radio", function () {
    var $this = $(this);
    var $total = $("#price");
    var $target = $("label[for='" + $this.attr("id") + "']");
    var $current = 0.00;
    
    
    
    var item_value = +($target.html().split('$').pop().replace(/[^\d\.]/g, '') || 0.00); 
    var current_total = +($total.html().replace(/[^\d\.]/g, '') || 0.00);

    if (item_value == 0.00){
      current_total -= $last;  
      $last = item_value;
    } else if (item_value != 0 &&  item_value == $last){
    } else if (item_value != 0 && item_value != $last){
      current_total -= $last;     
      current_total += item_value;
      $last = item_value;
    } else {
      console.log("something weird");
    }

    
    $total.html("$" + current_total.toFixed(2));
});
</script>