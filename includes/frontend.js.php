(function($) {

	$(function() {

        $('.daily-message-<?php echo $id; ?> p').dailyMessages({
            monday: "<?php echo $settings->monday; ?>",
            tuesday: "<?php echo $settings->tuesday; ?>",
            wednesday: "<?php echo $settings->wednesday; ?>",
            thursday: "<?php echo $settings->thursday; ?>",
            friday: "<?php echo $settings->friday; ?>",
            saturday: "<?php echo $settings->saturday; ?>",
            sunday: "<?php echo $settings->sunday; ?>",
        });

	});

})(jQuery);