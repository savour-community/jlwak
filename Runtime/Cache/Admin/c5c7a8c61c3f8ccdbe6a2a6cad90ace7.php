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


<style type="text/css">
    .addtype{
        margin-top:5px;
        margin-bottom: 5px;
    }
    .icon:hover{
        cursor: pointer;
        color: #4fb3dd;
    }
    .icon{
        height: 30px;
        line-height: 30px;
        margin-left: 10px;
    }
    .hire_box{
        height: 30px;
        line-height: 30px;
        width: 100%;
        border: solid 1px #fff;
    }
    .hire_box input{
        margin-top: 5px;
    }
    .hire_box div{
        float: left;
    }
    .hire_left{
        width: 400px;
        text-align: right;
    }
    /*.hire-right{
      width: 600px;
    }*/
    .gudingtype{
        margin-top:10px;
        margin-bottom: 10px;
    }
    .hire-submit{
        text-align: center;
    }
    .hire_box_submit{
        margin-top: 10px;
        border: solid 1px #fff;
    }
    .hire_goods_introduce{
        border: solid 1px #fff;
        height: 100px;
    }
    .hire_goods_introduce textarea{
        height: 80px;
        width: 400px;
    }
    .hire_goods_introduce div{
        float: left;
        margin-top: 7px;
    }
    .hire_cat{
        border: solid 1px #fff;
        height: 30px;
        line-height: 30px;
    }
    .hire_cat div{
        float: left;
    }
    .hire_cat select{
        margin-top: 5px;
    }
</style>
<table>
    <tr>
        <td>
            <form action="/index.php/Admin/Solution/insert_record" method="post" enctype="multipart/form-data">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
                    <tr class="hire_box">
                    <td class="hire_left">解决方案名字：</td>
                    <td class="hire-right"><input type="text" name="sol_name" /></td>
                </tr>
                <tr class="hire_box">
                    <td class="hire_left">解决方案简介：</td>
                    <td class="hire-right">
                        <textarea rows ="5"  colse ="30" id='sol_profile' name='sol_profile' style='width:650px;height:150px;'></textarea>
                    </td>
                </tr>
                <tr class="hire_box">
                    <td class="hire_left">解决方案图片：</td>
                    <td class="hire-right"><input type="file" name="sol_b_tx" /></td>
                </tr>
                <tr>
                    <td height="20" bgcolor="#FFFFFF" class="STYLE6" colspan='100'>
                        <div align="center"><input type="submit" value='添加' /></div>
                    </td>
                </tr>
                </table>
            </form>
        </td>
    </tr>
</table>

<script type="text/javascript">
    var ue = UE.getEditor('sol_profile',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertu0rderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|'
        ]]});
</script>



</html>