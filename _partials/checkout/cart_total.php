<?php if ($cart->count()) { ?>
    <div class="cart-total">
        <div class="table-responsive">
            <table class="table table-none">
                <tbody>

                <tr>
                    <td>
                    <span class="text-muted">
                        <?= lang('igniter.cart::default.text_sub_total'); ?>:
                   </span>
                    </td>
                    <td class="price text-right">
                        <?= currency_format($cart->subtotal()); ?>
                    </td>
                </tr>
                <!-- Tip -->
                <?php
					function tipamounts($tip_perc, $subtotal){ return (( $tip_perc / 100 ) * $subtotal);}
				?>
                <!-- Tip end -->
                <?php foreach ($cart->conditions() as $id => $condition) { ?>
                    <tr>
                        <td>
                        <span class="text-muted">
                            <?= e($condition->getLabel()); ?>:
                            <?php if ($condition->removeable) { ?>
                                <button
                                    type="button"
                                    class="btn btn-sm"
                                    data-request="<?= $removeConditionEventHandler; ?>"
                                    data-request-data="conditionId: '<?= $id; ?>'"
                                    data-replace-loading="fa fa-spinner fa-spin"
                                ><i class="fa fa-times"></i></button>
                            <?php } ?>
                       </span>
                        </td>
                        <td class="price text-right">
                            <?= is_numeric($result = $condition->getValue())
                                ? currency_format($result)
                                : $result; ?>
                        </td>
                    </tr>
                <?php } ?>
                <!-- Tip Start -->
                <?php if(session()->has('mytip')){ 
						$tip_amount = tipamounts(Request::session()->get('mytip'),$cart->subtotal());
						if((Request::session()->get('mytip')) !=0 ){		
				?>
				<tr>
                    <td>
                    <span class="price text-muted">
                        Counter Tip:
                   </span>
                    </td>
                    <td class="price text-right">
                        <?= currency_format($tip_amount);?>
                    </td>
                </tr>
				<?php }
				}elseif(session()->has('amttip')){
					$amtval = Request::session()->get('amttip');
					$amtval = (float)$amtval;
				?>
				<tr>
                    <td>
                    <span class="text-muted">
                        Counter Tip:
                   </span>
                    </td>
                    <td class="text-right">
					
					
                        <?= currency_format($amtval);?>
                    </td>
                </tr>
				<?php } ?>
                <!-- Tip End -->
                <tr>
                    <td>
                    <span class="text-muted">
                        <?= lang('igniter.cart::default.text_order_total'); ?>:
                   </span>
                    </td>
                    <td class="price text-right">
                        <span id="mainTotal" class="mainTotal">
                    <!-- Tip Condition added -->
                        <?php if(session()->has('mytip')){ 
							$cart_totl = ($cart->total() + $tip_amount); ?>
							<?= currency_format($cart_totl); ?> 
						<?php } 
						 else if(session()->has('amttip')){
							 $cart_totlam = ($cart->total() + $amtval); ?>
							<?= currency_format($cart_totlam); ?>
						<?php } 
						else{ ?>
							<?= currency_format($cart->total()); ?>	
                        <?php } ?>
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>


