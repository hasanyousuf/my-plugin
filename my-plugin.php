<?php
/*
Plugin Name: My personal plugin
Plugin URI: tt.com
Author: Hasan Yousuf
Author URI: cnn.com
Description: description is here
Version: 0.0.1
*/

add_action("admin_menu","addMenu");
function addMenu()
{
  add_menu_page("My Plugin","My Plugin Options",4,"my-plugin-options","myPluginMenu");
  add_submenu_page("my-plugin-options", "Option 1", "Option 1", 4, "my-plugin-option-1","pluginoption1");
}

function myPluginMenu()
{
 echo "myPluginMenu";
}
function pluginoption1()
{
 echo "Option 1";
}
