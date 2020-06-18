<!-- Tips Start -->

<?php $cart_ttl = isset($_SESSION['cart_ttl']) ? $_SESSION['cart_ttl'] : null;?>

<div>
	<h5 class="pb-3">
        <i class="fas fa-hand-holding-usd mx-2 py-2"></i><?= lang('igniter.cart::default.checkout.tip_for_the_counter'); ?>
    </h5>
<div class="row justify-content-center">
		
		<input type="hidden" id="order_tip_pc" name="order_tip_percentage">
		<input type="hidden" id="tip_total_pc" name="tip_percentage">
		<input type="hidden" id="tip_total_amt" name="tip_amount">
		<div class="col text-center">
			<button type="button" class="tip tip_amount_btn btnclick" 
				data-request="cartBox::onUpdateCart" 
				data-request-data="perval: '0', callfor: 'addtip'" 
				id="tip_0" value="0" 
				<?php if(session()->has('mytip') == 0){ echo 'btn-light-border';} ?> >0%
			</button>
		</div>
		<div class="col text-center">
			<button type="button" class="tip tip_amount_btn btnclick 
				<?php if(Request::session()->get('mytip') == 15){ echo 'btn-light-border';} else{echo "";} ?>" 
				data-request="cartBox::onUpdateCart" 
				data-request-data="perval: '15', callfor: 'addtip'" 
				id="tip_15" value="15">15%
			</button>
		</div>
		<div class="col text-center">
			<button type="button" class="tip tip_amount_btn btnclick 
				<?php if(Request::session()->get('mytip') == 18){ echo 'btn-light-border';} else{echo "";} ?>" 
				data-request="cartBox::onUpdateCart" 
				data-request-data="perval: '18', callfor: 'addtip'" 
				id="tip_18" value="18">18%
			</button>
		</div> 
		<div class="col text-center">
			<button type="button" class="tip tip_amount_btn btnclick 
				<?php if(Request::session()->get('mytip') == 20){ echo 'btn-light-border';} else{echo "";} ?>" 
				data-request="cartBox::onUpdateCart" 
				data-request-data="perval: '20', callfor: 'addtip'" 
				id="tip_20" value="20">20%
			</button>
		</div>
		<div class="col text-center">
			<button type="button" class="tip tip_other <?php if(session()->has('amttip')){ echo 'btn-light-border';} else{echo "";} ?>" ><?= lang('igniter.cart::default.checkout.tip_amount_other'); ?></button>
		</div>
		<div class="col card-body">
		<?php if(session()->has('amttip')) { ?>
			<div class="input-group tip_input"> 
				<div class="input-group-prepend">
					<span class="input-group-text">$</span>
				</div>
				
				<input type="text" id="tip_any" class="form-control" placeholder="<?= lang('igniter.cart::default.checkout.tip_amount_placeholder'); ?>" value="<?php echo Request::session()->get('amttip'); ?>">
			
			</div>
		<?php } else{ ?>
			
			<div class="input-group tip_input hide"> 
				<div class="input-group-prepend">
					<span class="input-group-text">$</span>
				</div>
				
				<input type="text" id="tip_any" class="form-control" placeholder="<?= lang('igniter.cart::default.checkout.tip_amount_placeholder'); ?>">
			
			</div>
			<?php } ?>
		</div>
		<button type="hidden" id="tip_amt_btn" data-request="cartBox::onUpdateCart" style="display:none">
	</div>
</div>

<!-- Tips End -->