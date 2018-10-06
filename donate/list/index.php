<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>一句-捐赠者</title>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
<meta name="theme-color" content="#4499ee">
<style>
*{padding:0;margin:0;font-family:"黑体";-webkit-tap-highlight-color: transparent !important}.row:after{content:"";clear:both;display:block}[class*=box-]{box-sizing:border-box;-moz-box-sizing:border-box;width:50%;float:left}body{background-color:#eee}a{text-decoration:none}a{color:#4499ee}
</style>
</head>
<body>
<div style="position:fixed;right:0;top:0;width:100%;box-shadow:0 1px 15px #666;background-color:#2198f3;color:#fff">
<div style="padding:10px">
		<span style="font-size:20px;font-weight:bold">一句·捐赠者</span>
</span></div>
</div>
<div style="text-align:center;color:#666;padding:60px 0 0 0">
<div style="font-size:13px">
确认收款后会在此显示，收款时间以我确认收款的时间为准
</br><div style="font-size:12px"><span style="color:green">金额 >= ¥10.00 (绿)</span> <span style="color:purple">金额 >= ¥20.00 (紫)</span> <span style="color:red">金额 >= ¥50.00 (红)</span> </div>
</div>
<?php
$data=explode("\n",file_get_contents('data.txt'));
if(count($data)==1){
echo '<div style="color:red"><br/>天啦噜，还没有人呢，快来抢前排吧！</div>';
}
?>
<div style="height:1px;background-color:#999;margin:10px 0 10px  0"></div>

<table style="width:100%">
<tr>
<th>
序号
</th>
<th>
用户
</th>
<th>
金额
</th>
<th>
收款时间
</th>
</tr>

<?php
for($i=count($data)-1;$i>=0;$i--){
$item=explode(' | ',$data[$i]);
echo '<tr';
if($item[1]>=50){
echo ' style="color:red"';
}else if($item[1]>=20){
echo ' style="color:purple"';
}else if($item[1]>=10){
echo ' style="color:green"';
}
echo '><th>'.($i+1).'</th><th>'.$item[0].'</th><th>¥'.$item[1].'</th><th>'.$item[2].'</th><th></tr>';

}
?>

</table>
<div style="height:1px;background-color:#666;margin:10px 0 10px  0"></div>

</div>

<div style="font-size:12px;padding:40px 0 20px 0;text-align:center">
<a href="http://yiju.ml/donate/">一句·捐赠</a> | <a href="http://yiju.ml">YiJu.ml</a><br/><br/>
			Copyright © 2016 - 2018 YiJu. All Rights Reserved
		</div>
</body>
</html>
