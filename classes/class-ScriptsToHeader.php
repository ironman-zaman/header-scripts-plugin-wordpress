<?php
class ScriptsToHeader{
    function addScripts(){
        add_action('wp_head', array($this,'scriptsInHead'));
    }

    function scriptsInHead() {
        $value = esc_attr(get_option('head_scripts_field'));
        echo html_entity_decode($value);
    }
}