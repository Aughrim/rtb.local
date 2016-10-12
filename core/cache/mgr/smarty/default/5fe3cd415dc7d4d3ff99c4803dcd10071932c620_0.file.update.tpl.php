<?php /* Smarty version 3.1.27, created on 2016-10-12 14:08:17
         compiled from "C:\OpenServer\domains\rtb.local\manager\templates\default\resource\symlink\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2169757fe19a16ad061_62202966%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe3cd415dc7d4d3ff99c4803dcd10071932c620' => 
    array (
      0 => 'C:\\OpenServer\\domains\\rtb.local\\manager\\templates\\default\\resource\\symlink\\update.tpl',
      1 => 1476260136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169757fe19a16ad061_62202966',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57fe19a16de9e7_50523059',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe19a16de9e7_50523059')) {
function content_57fe19a16de9e7_50523059 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2169757fe19a16ad061_62202966';
?>
<div id="modx-panel-symlink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>