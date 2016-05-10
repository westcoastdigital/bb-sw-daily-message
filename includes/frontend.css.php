p.quote {
    font-family: <?php echo $settings->font['family']; ?>;
    font-weight: <?php echo $settings->font['weight']; ?>;
<?php if($settings->custom_size == 'yes' ) { ?>
    font-size: <?php echo $settings->font_size; ?>px;
<?php } ?>
    color: #<?php echo $settings->font_color; ?>;
}
