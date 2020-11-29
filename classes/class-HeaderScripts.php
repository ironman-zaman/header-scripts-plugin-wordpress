<?php
class HeaderScripts{

    function addHeaderScripts(){
        add_action("admin_menu", array($this,'addAdminPages'));
        add_action('admin_init',array($this,'registerCustomFields'));
    }
    
    function addAdminPages(){
            add_menu_page("Header Scripts", "Header Scripts", "manage_options", "head-scripts", array($this,'headScriptsIndex'), "dashicons-media-code", 110);
    }

    function headScriptsIndex(){
        require_once plugin_dir_path(__DIR__) . 'templates/admin.php';
    }

    function registerCustomFields()
    {   
        //register settings
        register_setting("head_scripts_option_group", "head_scripts_field", array($this,'headScriptsOptionGroupCallback'));
        //add settings section
        add_settings_section("head_scripts_section", "", array($this,'headScriptsSectionCallback'), 'head-scripts');
      
        //add setings field
        add_settings_field("head_scripts_field", "Add code between head tags", array($this,'headScriptsFieldCallback'), "head-scripts", "head_scripts_section", array(
            'label_for' => 'head_scripts_field',
            'class' => 'example-class'
        ));
    }

    function headScriptsOptionGroupCallback($input){
        return $input;
    }
    function headScriptsSectionCallback(){
       // echo "Check this section";
    }

    function headScriptsFieldCallback(){
        $value = esc_attr(get_option('head_scripts_field'));
        echo '<textarea rows="10" cols="150" class="header-scripts" name="head_scripts_field"  palceholder="Put the header code here">'. $value .'</textarea>';
    }


}