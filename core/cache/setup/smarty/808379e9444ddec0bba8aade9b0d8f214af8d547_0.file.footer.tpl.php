<?php /* Smarty version 3.1.27, created on 2016-10-12 11:27:12
         compiled from "C:\OpenServer\domains\rtb.local\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:858857fdf3e0282627_68283917%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808379e9444ddec0bba8aade9b0d8f214af8d547' => 
    array (
      0 => 'C:\\OpenServer\\domains\\rtb.local\\setup\\templates\\footer.tpl',
      1 => 1476260140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858857fdf3e0282627_68283917',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57fdf3e0295789_65672496',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fdf3e0295789_65672496')) {
function content_57fdf3e0295789_65672496 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/domains/rtb.local/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '858857fdf3e0282627_68283917';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>