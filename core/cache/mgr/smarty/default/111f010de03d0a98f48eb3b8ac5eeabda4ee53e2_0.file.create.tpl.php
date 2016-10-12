<?php /* Smarty version 3.1.27, created on 2016-10-12 12:33:41
         compiled from "C:\OpenServer\domains\rtb.local\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2699357fe03751eb630_84383618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111f010de03d0a98f48eb3b8ac5eeabda4ee53e2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\rtb.local\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1476260128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2699357fe03751eb630_84383618',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57fe03751ef332_06334128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe03751ef332_06334128')) {
function content_57fe03751ef332_06334128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2699357fe03751eb630_84383618';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>