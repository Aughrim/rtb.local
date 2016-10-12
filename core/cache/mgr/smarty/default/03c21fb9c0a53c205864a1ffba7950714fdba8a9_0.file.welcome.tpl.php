<?php /* Smarty version 3.1.27, created on 2016-10-12 11:27:35
         compiled from "C:\OpenServer\domains\rtb.local\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2836057fdf3f7dbe1e7_51794159%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03c21fb9c0a53c205864a1ffba7950714fdba8a9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\rtb.local\\manager\\templates\\default\\welcome.tpl',
      1 => 1476260136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2836057fdf3f7dbe1e7_51794159',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57fdf3f7dc1ef1_93011132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fdf3f7dc1ef1_93011132')) {
function content_57fdf3f7dc1ef1_93011132 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2836057fdf3f7dbe1e7_51794159';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>