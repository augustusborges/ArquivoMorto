<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>70. Cálculo de Forma de Pagamento</title>
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
<div class="pageHeader"></div>
<div class="PageBody">
	<div id="name_classifier" style="display: none;"></div>
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("70. Cálculo de Forma de Pagamento", " : "))</script>  : Public  &lt;&lt;Functional&gt;&gt; Requirement</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">07/10/2017 06:17:39</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">07/10/2017 06:56:47</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td class="ObjectDetailsValue">Augustus Borges</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr id="proj02" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Phase:</td>
			<td class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr id="proj03" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Status:</td>
			<td class="ObjectDetailsValue">Proposed</td>
		</tr>
		<tr id="proj04" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Complexity:</td>
			<td class="ObjectDetailsValue">Easy</td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Difficulty:</td>
			<td class="ObjectDetailsValue">Medium</td>
		</tr>
		<tr id="proj06" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Priority:</td>
			<td class="ObjectDetailsValue">Medium</td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Multiplicity:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{376EF43D-0226-45c9-9B20-6C52A637B073}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA129.php">Requisitos</a></td>
		</tr>
	</table>
	<div class="ObjectDetailsNotes">&lt;font color=&quot;#ff8080&quot;&gt;10. Se o pedido de venda de um cliente for acima de R$1.500,00 o mesmo poderá ser pago em 28 dias&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#ff8080&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/font&gt;&lt;font color=&quot;#ff8080&quot;&gt;20. Se o pedido de venda de um cliente for acima de R$3.000,00 o mesmo poderá ser parcelado em até 3 vezes. &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#ff8080&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/font&gt;&lt;font color=&quot;#ff8080&quot;&gt;30. Se o pedido do cliente envolver fábrica (Impressão, Selagem ou Empacotamento) e a compra for a primeira do cliente o sistema deverá cobrar um valor de entrada. &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#ff8080&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/font&gt;&lt;font color=&quot;#0f0f0f&quot;&gt;40.&#160; Toda regra de cobrança poderá ser alterada ou anulada em uma instância maior dentro da empresa por gestores que tenham permissão para alteração de regras de pagamento.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0f0f0f&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/font&gt;&lt;font color=&quot;#0f0f0f&quot;&gt;OBS&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0f0f0f&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/font&gt;&lt;font color=&quot;#0f0f0f&quot;&gt;- Tem que se definir onde ficará o cadastramento de valor de entrada e se esse será um percentual sobre o pedido ou um valor fixo.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;</div>

<div class="pageFooter"></div>
 
</body>
</html>