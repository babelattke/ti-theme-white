---
title: 'main::lang.account.register.title'
permalink: /register
description: ''
layout: default

'[session]':
    security: guest

'[account]':
    accountPage: account/account
    redirectPage: account/account
    loginPage: account/login
    agreeRegistrationTermsPage: 1

---
<div id="login">        
    <div class="login-container right-panel-active" id="container">
        
        <div class="sign-up-container form-container">
            <?php if ($canRegister) { ?>
            <?= form_open(current_url(),
                [
                    'role' => 'form',
                    'method' => 'POST',
                    'data-request' => 'account::onRegister',
                ]
            ); ?>
            <form>
                <h1>Create Account</h1>                
                <span>or use your email for registration</span>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                </div> -->
                <input
                    type="text"
                    id="first-name"                    
                    value="<?= set_value('first_name'); ?>"
                    name="first_name"
                    placeholder="<?= lang('igniter.user::default.settings.label_first_name'); ?>"
                    autofocus="">
                <?= form_error('first_name', '<span class="text-danger">', '</span>'); ?>
                <input
                    type="text"
                    id="last-name"                    
                    value="<?= set_value('last_name'); ?>"
                    name="last_name"
                    placeholder="<?= lang('igniter.user::default.settings.label_last_name'); ?>">
                <?= form_error('last_name', '<span class="text-danger">', '</span>'); ?>
                <input
                    type="text"
                    id="email"                    
                    value="<?= set_value('email'); ?>"
                    name="email"
                    placeholder="<?= lang('igniter.user::default.settings.label_email'); ?>">
                <?= form_error('email', '<span class="text-danger">', '</span>'); ?>
                <input
                    type="password"
                    id="password"                    
                    value=""
                    name="password"
                    placeholder="<?= lang('igniter.user::default.login.label_password'); ?>">
                <?= form_error('password', '<span class="text-danger">', '</span>'); ?>
                <input type="password"
                       id="password-confirm"                       
                       name="password_confirm"
                       value=""
                       placeholder="<?= lang('igniter.user::default.login.label_password_confirm'); ?>">
                <?= form_error('password_confirm', '<span class="text-danger">', '</span>'); ?>
                <input
                    type="text"
                    id="telephone"                    
                    value="<?= set_value('telephone'); ?>"
                    name="telephone"
                    placeholder="<?= lang('igniter.user::default.settings.label_telephone'); ?>"
                >
                <?= form_error('telephone', '<span class="text-danger">', '</span>'); ?>
                <button type="submit">Sign Up</button> 
            </form>
            <?= form_close(); ?>
            <?php } else { ?>
                <p><?= lang('igniter.user::default.login.alert_registration_disabled') ?></p>
            <?php } ?>
        </div>       

        <div class="form-container sign-in-container">
            <?= form_open(current_url(),
                [
                    'role' => 'form',
                    'method' => 'POST',
                    'data-request' => 'account::onLogin',
                ]
            ); ?>
            <form>
                <h1>Sign in</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                </div> -->
                <span>or use your account</span>
                <input id="login-email" name="email" type="email" placeholder="Email" />
                <input id="login-password" name="password" type="password" placeholder="Password" />
                <a href="<?= site_url('account/reset'); ?>">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
            <?= form_close(); ?>
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome!</h1>
                    <p>Enter your personal details and start ordering with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>   
</div>