<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="<?php echo (JS_ADMIN_URL); ?>/jquery-1.12.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body { 
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12px; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
a:link{
    color:#e1e2e3; text-decoration:none;
}
a:visited{
    color:#e1e2e3; text-decoration:none;
}
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo (IMG_ADMIN_URL); ?>tb.gif" width="14" height="14" /></div></td>
              <td width="94%" valign="bottom"><span class="STYLE1"> <?php echo ($daohang["title1"]); ?> -> <?php echo ($daohang["title2"]); ?></span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              <a href="<?php echo ($daohang["act_link"]); ?>"><img src="<?php echo (IMG_ADMIN_URL); ?>add.gif" width="10" height="10" /> <?php echo ($daohang["act"]); ?></a>   &nbsp; 
              </span>
              <span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>


<table>
  <tr>
    <td>
    <form action="/index.php/Admin/Product/upd_product/id/15" method="post" enctype="multipart/form-data">
     <input type="hidden" name='id' value='<?php echo ($info["id"]); ?>' />
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
     <tr>
        <td bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">产品名称：</span></div></td>
        <td  bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="text" name="product_name" value="<?php echo ($info["product_name"]); ?>"/>
        </div></td>
      </tr>
      
      <tr>
        <td bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">产品内容：</span></div></td>
        <td  bgcolor="#FFFFFF" class="STYLE19"><div align="left">
            <textarea rows ="5"  colse ="30" id='product_profile' name='product_profile' style='width:650px;height:150px;'><?php echo ($info["product_profile"]); ?></textarea>
        </div></td>
      </tr>

       <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">产品图片：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19">
           <div align="left">
               <input type="file" name="product_b_tx" />
               <img src= '<?php echo (SET_URL); echo (substr($info["product_b_tx "],2)); ?>' height="80" width="80" alt="图片">
           </div>
        </td>
      </tr>
      
      <tr>
        <td  bgcolor="#FFFFFF" class="STYLE6" colspan='100'>
          <div align="center"><input type="submit" id="subzx" value='修改' /></div>
        </td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
 </table>


<script type="text/javascript">
   var ue = UE.getEditor('product_profile',{toolbars: [[
      'fullscreen', 'source', '|', 'undo', 'redo', '|',
      'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
      'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
      'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
      'directionalityltr', 'directionalityrtl', 'indent', '|',
      'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase'
    ]]});
  </script>




</html>