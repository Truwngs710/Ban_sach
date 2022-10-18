<?php
/* Smarty version 3.1.33, created on 2022-10-18 20:50:26
  from 'C:\xampp\htdocs\HQbook\views\templates\admin\dang_nhap.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_634ef5720ec005_22179223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f129cce52ede81229c18f0d0b819a775baed8346' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\admin\\dang_nhap.html',
      1 => 1666118716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ef5720ec005_22179223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942907205634ef5720e7576_67904928', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211515616634ef5720e8499_49673025', 'content');
?>

    
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_471148525634ef5720ebab9_70985286', 'script');
?>

  </body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/master.html');
}
/* {block 'title'} */
class Block_942907205634ef5720e7576_67904928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_942907205634ef5720e7576_67904928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Đăng nhập<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_211515616634ef5720e8499_49673025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211515616634ef5720e8499_49673025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <body>
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="offset-3 col-md-4">
                <form class="form-signin" method="POST">
                    <img class="offset-4 col-4" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/icon-user.png" alt="" width="72" height="100">
                    <h1 style="margin-top: 30px" class="h3 mb-3 font-weight-normal">Vui Lòng Đăng Nhập</h1>
                    
                    <input type="text" id="tenDN" name="tenDN" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tenDN']->value;?>
" placeholder="Tên tài khoản" required autofocus>
                   
                    <input type="password" id="matkhau" name="matkhau" value="<?php echo $_smarty_tpl->tpl_vars['matkhau']->value;?>
" class="form-control" placeholder="Mật Khẩu" required>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
                    <?php echo $_smarty_tpl->tpl_vars['err']->value;?>

                </form>   
            </div>
        </div>
    </div>
    <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_471148525634ef5720ebab9_70985286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_471148525634ef5720ebab9_70985286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
