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



<script type="text/javascript" src='<?php echo (PLUGIN_URL); ?>jquerypage/jquery-page.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_ADMIN_URL); ?>page.css">
<style type="text/css">
  .choose{
    font-size: 14px;
  }
  .choose .choose_top span,.cd-title{
    display:inline-block;
    width: 100px;
    height: 20px;
    line-height: 20px;
    text-align: right;
    vertical-align: middle;
  }
  .choose .choose_top .txt{
    height: 27px;
    width: 250px;
    vertical-align: middle;

  }
  .choose .choose_top .btn{
    height: 31px;
    width: 60px;
    vertical-align: middle;
    border:1px solid #2eccdd;
    background:#2eccdd;
    color: #fff;
    margin-top: 2px;
  }
  .choose .choose_bottom p{
    margin:5px 0;
  }
  .choose .choose_bottom p .cd-sp{
    display: inline-block;
    padding:5px 10px;
    text-align: center;
    cursor: pointer;
    color:black;
  }
  .choose .choose_bottom p .cd-sp a{
     color:black;
  }
  .choose .choose_bottom p .cd-sp:hover{
    background:#00a7eb; 
    border-radius: 5px;
  }
  #classification{
    display: inline-block;
    *display:inline;
    *zoom:1;
    /*padding-top: 8px;*/
  }
  #classification p{
    padding-top: 8px;
    height: 45px;
  }
  .choose form{
    margin-left: 53px;
    margin-top: 10px;
  }
  .choose form input.txt{
    height: 15px;
    padding: 8px 5px;
    width: 200px;
  }
  .choose form input.btn{
    height: 34px;
    width: 68px;
    border:0;
    background-color: #135AB3;
    color:#fff;
    font-size: 15px;
  }
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" id='houzhuiinfo_table'>
  <tr>
    <td width="4%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">客户ID</span></div></td>
    <td width="8%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">阶段时间</span></div></td>
    <td width="8%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">阶段内容</span></div></td>
    <td width="9%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">添加时间</span></div></td>
    <td width="9%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">修改时间</span></div></td>
    <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">基本操作</span></div></td>
  </tr>
  <?php if(is_array($info)): foreach($info as $k=>$v): ?><tr>
    <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo ($v["id"]); ?></span></div></td>
    <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo ($v["period"]); ?></span></div></td>
    <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo ($v["detail"]); ?></span></div></td>
    <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo date('Y-m-d H:i:s',$v['add_time']);?></div></td>
    <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo date('Y-m-d H:i:s',$v['upd_time']);?></div></td>
    <td height="20" bgcolor="#FFFFFF">
      <div align="center" class="STYLE21">
        <a style='color:rgb(59,99,119)'  href=" <?php echo U('del',array('id'=>$v['id']));?>" onclick="if(confirm('确认要删除我么？主人')){return true;}else{return false;}" >删除</a>
        <a style='color:rgb(59,99,119)'  href="<?php echo U('upd_develop',array('id'=>$v['id']));?>">修改</a>
      </div>
    </td>
  </tr><?php endforeach; endif; ?>
</table>





</html>