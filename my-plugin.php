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
  add_menu_page("First Plugin","Plugin Options",4,"my-plugin-options","myPluginMenu");
  add_submenu_page("my-plugin-options", "Option 1", "Orders", 4, "orders","option1");
  add_submenu_page("my-plugin-options", "Option 2", "Reports", 4, "my-plugin-option-2","option2");
  add_submenu_page("my-plugin-options", "Option 3", "Settings", 4, "my-plugin-option-3","option3");
  add_submenu_page("my-plugin-options", "Option 4", "System status", 4, "my-plugin-option-4","option4");
}

function myPluginMenu()
{
 echo "myPluginMenu";
}
function option1()
{
 require_once("views/view-orders.php");
 // echo "Option 1";
}

function option2()
{

}

function option3()
{
}

function option4()
{
 phpinfo();
}
