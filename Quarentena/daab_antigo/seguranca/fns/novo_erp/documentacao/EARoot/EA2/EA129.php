<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Requisitos</title>
<link href="../../css/ea.css" rel="stylesheet" type="text/css" />
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
	
<img src="EA130.png" usemap="#EA130" border="0" />

<MAP NAME="EA130">
<area shape="rect" coords="368,307,703,351" href="EA133.php" target="_self">
<area shape="rect" coords="366,245,701,289" href="EA132.php" target="_self">
<area shape="rect" coords="366,187,701,231" href="EA141.php" target="_self">
<area shape="rect" coords="10,125,345,169" href="EA135.php" target="_self">
<area shape="rect" coords="366,67,701,111" href="EA139.php" target="_self">
<area shape="rect" coords="366,10,701,54" href="EA138.php" target="_self">
<area shape="rect" coords="10,186,345,230" href="EA136.php" target="_self">
<area shape="rect" coords="366,126,701,170" href="EA140.php" target="_self">
<area shape="rect" coords="10,67,345,111" href="EA134.php" target="_self">
<area shape="rect" coords="10,10,345,54" href="EA131.php" target="_self">
<area shape="rect" coords="810,57,1033,101" href="EA142.php" target="_self">
<area shape="rect" coords="10,245,345,289" href="EA137.php" target="_self">
</MAP>

	<div class="ObjectTitle">Requisitos : Custom diagram</div>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">04/10/2017 13:54:39</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Modified:</td>
			<td width="85%" class="ObjectDetailsValue">22/10/2017 22:47:01</td>
		</tr>
		<tr style="padding-top: 10px;">
			<td width="15%" class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="proj00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td width="85%" class="ObjectDetailsValue">Alexandre Augustus Borges</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td width="85%" class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="adv00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">ID:</td>
			<td width="85%" class="ObjectDetailsValue">{DD0C7A3F-0F21-46e8-9690-725F283852A6}</td>
		</tr>
	</table>
	
</div>
 
</body>
</html>