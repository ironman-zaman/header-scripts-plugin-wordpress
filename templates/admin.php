
<div class="wrap">
<?php settings_errors(); ?>
<h1>Header Scripts</h1>
<form method="post" action="options.php">
        <?php
            settings_fields('head_scripts_option_group');
            do_settings_sections('head-scripts');
            submit_button();
        ?>
    </form>
</div> 