<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Envio Fabrica</title>
<link href="../../../../css/ea.css" rel="stylesheet" type="text/css" />
<script>
function initPage(src) {	
	if(parent==this&&(this.location+"").indexOf('EARoot')!=-1)
		document.location=(this.location+"").substring(0,(this.location+"").indexOf('EARoot'))+"index"+(this.location+"").substring((this.location+"").lastIndexOf('.'))+"?goto="+((this.location+"").substring((this.location+"").indexOf('EARoot')+7,(this.location+"").lastIndexOf('.')).replace(/\//g,':').replace(/EA/g,""));
	else
		parent.initPage(src);
}

function nameClassifier(name, separator)
{
  var str = name;
  var classifierName;
  var node = document.getElementById('name_classifier');
  if(node != null)
  {
    classifierName = node.innerHTML;
  }
  if(classifierName != "")
  {
   str += separator + classifierName;
  }
  
  return str;
}
</script>
</head>
<body onload="initPage(this);" class="Content">
<div class="PageBody">
	
<img src="EA42.png" usemap="#EA42" border="0" />

<MAP NAME="EA42">
<area shape="rect" coords="854,228,989,303" href="EA47.php" target="_self">
<area shape="rect" coords="860,116,995,191" href="EA49.php" target="_self">
<area shape="rect" coords="856,10,991,85" href="EA45.php" target="_self">
<area shape="rect" coords="647,115,689,157" href="EA57.php" target="_self">
<area shape="rect" coords="410,170,545,245" href="EA53.php" target="_self">
<area shape="rect" coords="401,31,536,106" href="EA51.php" target="_self">
<area shape="rect" coords="240,85,282,127" href="EA61.php" target="_self">
<area shape="rect" coords="38,102,68,132" href="EA56.php" target="_self">
</MAP>

	<div class="ObjectTitle">Envio Fabrica : Business Process diagram</div>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">03/10/2017 15:57:03</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Modified:</td>
			<td width="85%" class="ObjectDetailsValue">04/10/2017 09:39:47</td>
		</tr>
		<tr style="padding-top: 10px;">
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="proj00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td width="85%" class="ObjectDetailsValue">Augustus Borges</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td width="85%" class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="adv00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">ID:</td>
			<td width="85%" class="ObjectDetailsValue">{5E54C5A0-C6C7-45a6-B338-A8CFD0859BBF}</td>
		</tr>
	</table>
	
</div>
 
</body>
</html>