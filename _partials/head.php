<?= get_metas(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if (trim($favicon = $this->theme->favicon, '/')) { ?>
    <link href="<?= uploads_url($favicon); ?>" rel="shortcut icon" type="image/ico">
<?php }
else { ?>
    <?= get_favicon(); ?>
<?php } ?>
<title><?= sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name')); ?></title>
<?= get_style_tags(); ?>
<?php if (!empty($this->theme->custom_css)) { ?>
    <?= '<link type="text/css" id="custom-css">'.$this->theme->custom_css.'</link>' ?>
<?php } ?>

<!-- Save the CSRF token to a meta tag -->
<meta name="csrf-token" content="<?=csrf_token()?>">