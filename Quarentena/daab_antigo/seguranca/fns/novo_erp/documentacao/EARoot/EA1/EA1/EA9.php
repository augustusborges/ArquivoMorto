<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pedido</title>
<link href="../../../css/ea.css" rel="stylesheet" type="text/css" />
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
	
<img src="EA10.png" usemap="#EA10" border="0" />

<MAP NAME="EA10">
<area shape="rect" coords="516,325,546,355" href="EA22.php" target="_self">
<area shape="rect" coords="836,131,866,161" href="EA23.php" target="_self">
<area shape="rect" coords="627,233,737,293" href="EA17.php" target="_self">
<area shape="rect" coords="630,122,740,182" href="EA15.php" target="_self">
<area shape="rect" coords="439,232,549,292" href="EA30.php" target="_self">
<area shape="rect" coords="69,316,179,376" href="EA16.php" target="_self">
<area shape="rect" coords="194,247,282,303" href="EA24.php" target="_self">
<area shape="rect" coords="802,517,844,559" href="EA26.php" target="_self">
<area shape="rect" coords="646,516,688,558" href="EA28.php" target="_self">
<area shape="rect" coords="508,402,550,444" href="EA27.php" target="_self">
<area shape="rect" coords="435,10,570,85" href="EA7.php" target="_self">
<area shape="rect" coords="604,393,739,468" href="./EA1/EA41.php" target="_self">
<area shape="rect" coords="433,116,568,191" href="EA5.php" target="_self">
<area shape="rect" coords="855,284,885,314" href="EA19.php" target="_self">
<area shape="rect" coords="307,327,417,387" href="EA29.php" target="_self">
<area shape="rect" coords="199,500,334,575" href="EA13.php" target="_self">
<area shape="rect" coords="219,360,249,390" href="EA25.php" target="_self">
</MAP>

	<div class="ObjectTitle">Pedido : Business Process diagram</div>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">03/10/2017 15:43:19</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Modified:</td>
			<td width="85%" class="ObjectDetailsValue">06/10/2017 19:27:42</td>
		</tr>
		<tr style="padding-top: 10px;">
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
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
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="adv00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">ID:</td>
			<td width="85%" class="ObjectDetailsValue">{30A1D460-4567-46a8-ADAB-687777F990BA}</td>
		</tr>
	</table>
	
</div>
 
</body>
</html>