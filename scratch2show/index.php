<?php 
   if(!isset($_GET['p'])) $_GET['p']="demo";
   $filename=$_GET['p'].".sb2";
   if(!file_exists("$filename")){
	echo "the project requested does not exists!";
	exit();
   }


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
</head>
<body>

<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript">

var flashvars = {
  project: "<?php echo htmlentities($filename,ENT_QUOTES,"UTF-8")?>",
  autostart: "false"
};

var params = {
  bgcolor: "#FFFFFF",
  allowScriptAccess: "always",
  allowFullScreen: "true",
  wmode:'window',
  menu:'false'
  
};
for (var i in flashvars) {
    if (typeof params.flashvars !== 'undefined') {
        params.flashvars += '&' + i + '=' +flashvars[i];
    } else {
        params.flashvars = i + '=' + flashvars[i];
    }
}
var attributes = {};
var swfFile = 'scratch.swf';

var swfAtt = {
    data: "./" + swfFile,
    width: "100%",
    height: "100%"
};
swfobject.embedSWF("scratch.swf", "flashContent", "100%", "100%", "10.2.0","expressInstall.swf", flashvars, params, attributes);

</script>
<div id="flashContent" width="482px" height="387px">
	Get <a href="http://www.adobe.com/go/getflash">Adobe Flash Player</a>, otherwise this Scratch movie will not play.
</div>
</body>
