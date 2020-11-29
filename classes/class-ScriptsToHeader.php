<?php
class ScriptsToHeader{
    function addScripts(){
        add_action('wp_head', array($this,'scriptsInHead'));
    }

    function scriptsInHead() {
        $value = get_option('head_scripts_field');
        echo $value;
    }
}