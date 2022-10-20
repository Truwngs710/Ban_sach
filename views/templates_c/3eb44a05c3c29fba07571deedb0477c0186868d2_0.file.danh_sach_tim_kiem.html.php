<?php
/* Smarty version 3.1.33, created on 2022-10-20 03:05:37
  from 'C:\xampp\htdocs\HQbook\views\templates\sach\danh_sach_tim_kiem.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63509ee1b5fc65_27766109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb44a05c3c29fba07571deedb0477c0186868d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\sach\\danh_sach_tim_kiem.html',
      1 => 1666118716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63509ee1b5fc65_27766109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60556740263509ee1b508c0_49146624', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18453180063509ee1b512a9_77268136', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.html');
}
/* {block 'title'} */
class Block_60556740263509ee1b508c0_49146624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_60556740263509ee1b508c0_49146624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh Sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18453180063509ee1b512a9_77268136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18453180063509ee1b512a9_77268136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 <div class="d-flex p-3 bg-warning text-white" style="margin: 20px 0px 20px 0px">  
    <div class="p-2 bg-primary"><a class ="text-white" href="http://localhost/HQbook">Trang Chủ</a></div>
    <div class="p-2 bg-success">Tìm kiếm nội dung: <?php echo $_smarty_tpl->tpl_vars['noi_dung']->value;?>
</div>
</div>
 <?php if (empty($_smarty_tpl->tpl_vars['list_sach']->value)) {?>
 Không tìm thấy <?php echo $_smarty_tpl->tpl_vars['noi_dung']->value;?>
, xin vui quay lại
 <?php }?>
 
<div class="container" style="margin-top:20px;">
	<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_sach']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div class="col-3 card" style="margin-top:10px">
				    <img class="card-img-top img-sach" src="<?php echo path;?>
public/img/sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->hinh;?>
" alt="Card image" style="width:100%">
				    <div class="card-body">
				      <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
</h5>
				      <div class="row" style="margin-left: 0px">
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
						</div>
				      <p class="card-text">Giá : <?php echo number_format($_smarty_tpl->tpl_vars['value']->value->don_gia);?>
đ <strike><?php echo number_format($_smarty_tpl->tpl_vars['value']->value->gia_bia);?>
đ</strike></p><b style="color:red"><?php echo (100-round(($_smarty_tpl->tpl_vars['value']->value->don_gia*100)/$_smarty_tpl->tpl_vars['value']->value->gia_bia,2));?>
%</b>

				      	<a href="<?php echo path;?>
chi-tiet-sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" style="margin-left: 15px"class="btn btn-primary stretched-link">Xem chi tiết</a></p>
				      
				    </div>
				</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>


     
<?php
}
}
/* {/block 'content'} */
}
