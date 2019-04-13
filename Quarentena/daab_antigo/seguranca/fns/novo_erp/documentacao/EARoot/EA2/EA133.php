<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>110. Processo de importação</title>
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
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("110. Processo de importação", " : "))</script>  : Public  &lt;&lt;Functional&gt;&gt; Requirement</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">18/10/2017 15:04:51</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">18/10/2017 15:06:02</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td class="ObjectDetailsValue">augus</td>
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
			<td class="ObjectDetailsValue">{909D7161-CC8F-4b58-9B30-E5D7A6BA87D2}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA129.php">Requisitos</a></td>
		</tr>
	</table>
	<div class="ObjectDetailsNotes">&lt;ul&gt;&lt;li&gt;SISTEMA PERMITIR VARIAS ESTATISTICAS&lt;/li&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/ul&gt;&lt;font color=&quot;#0070c0&quot;&gt;Quais são as estatisticas? Podes descreve-las por gentileza?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;ul&gt;&lt;li&gt;SISTEMA SALVAR OS DOCUMENTOS DE CADA PROCESSO (BS/L, INVOICES, PACKING LIST, LI , CERTIFICADOS, COMPROVANTES DE DEPOSITO ETC EM FORMATOS PDF OU XLS, O QUE FOR POSSIVEL)&lt;/li&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/ul&gt;&lt;font color=&quot;#0070c0&quot;&gt;A forma de coleta da imagem do documento seria por scanner ou camera fotográfica (celular por exemplo)?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;ul&gt;&lt;li&gt;SISTEMA PERMITIR O ENVIO E/OU REENVIO DE DIVERSOS DOCUMENTOS JÁ SALVOS EM CADA PROCESSO POR EMAIL PARA CLIENTES OU DESPACHANTE &lt;/li&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/ul&gt;&lt;font color=&quot;#0070c0&quot;&gt;Neste caso entraria-se numa tela, informaria a PO, o sistema traria os dados do cliente, fornecedor ou despachante, o operador selecionaria as imagens e o sistema enviaria email para o email cadastrado da pessoa selecionada? &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Como vocês enxergam este processo?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;1-RECEBIMENTO PO DO MARCELO&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Aqui eu já ouvi o processo descrito, vou desenhá-lo e apresento a vocês. Se quiserem colocar alguma coisa relevante sintam-se à vontade.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;2-ENVIAR PO AO FORNECEDOR&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Apenas enviar? De que forma, por email mesmo? Tem algum processo entre o recebimento da PO do Marcelo e o envio para o fornecedor?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;3-RECEBIMENTO DA PI DO FORNECEDOR&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;A PI é cadastrada no sistema: quais são os itens da PI? É só digitação ou essa documentação já precisa ser armazenada? Como chega a PI na FNS (Email?) ?&#160; &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;4-APÓS RECEBIMENTO DA PI, NOVA CONFERENCIA COM DADOS DA PO&#160; CONSTANTES NO SISTEMA&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;A proposta é a conferencia de itens? Ela pode ser automatica e somente se houver divergencia cair para analise de um operador?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;5-APÓS CONFERENCIA, DAR OK AO FORNECEDOR&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;De que forma? Como se dá esse processo?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;6-EM CASOS DE PO COM LI, INFORMAR AO FORNECEDOR QUE REFERIDO EMBARQUE ESTARA AUTORIZADO SOMENTE APÓS NOSSO OK (TEMOS DE ESPERAR OK DO INMETRO)&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Como é este processo alternativo, quais os passos, qual a intervenção que temos que fazer no processo. Como o sistema deve agir&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;7-APÓS LI DEFERIDA &#8211; AUTORIZAR EMBARQUE&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Pelo que eu entendi se PO contem LI o ok é dado de qualquer forma ao fornecedor, apenas com a informação de que aguarde liberação para embarque. &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Ou só é dado ok após a emissão da LI?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;8- CASOS COM LI AVISAR EM TODAS AS MENSAGENS QUE O FORNECEDOR NÃO PODE SOB HIPOTESE NENHUMA ALTERAR QUALQUER DADOS DO EMBARQUE (VOLUMES/MERCADORIA/ETC)&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;O que é o etc? precisamos do detalhamento exato&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;9-COMO NA PI É INFORMADO A PREVISAO DE PRONTIDAO DA CARGA, SOLICITAMOS AS COTAÇOES AOS AGENTES DE CARGA.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Esse é um processo manual? Favor detalhar o processo.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;10- ENVIAR AS COTAÇÇOES A DORETORIA PARA APROVAÇAO DO AGENTE ESCOLHIDO&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;As cotações são cadastradas no sistema atreladas à PO. O Operador finaliza o processo de cadastro. A diretoria recebe pendencia de aprovação. A diretoria seleciona cotação escolhida. Operador recebe ok do sistema para cotação. Esse processo seria isso? &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;11- APÓS APROVAÇAO E CONFIRMAÇAO DO AGENTE, FECHAMOS A CARGA COM O AGENTE ESCOLHIDO E SOLICITAMOS O BOOKING&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Esse é um processo manual? Os dados vem para o sistema? De que forma? Favor detalhar o processo.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;12- O AGENTE NOS INFORMA OS DETALHES DO SEU CORRESPONDENTE NO PORTO DE ORIGEM E REPASSAMOS AO NOSSO FORNECEDOR&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Esse é um processo manual? Os dados vem para o sistema? Favor detalhar o processo.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;13-INFORMAMOS AO AGENTE OS DADOS DE NOSSO FORNECEDOR PARA CONTATO E PROCEDIMENTOS PARA O BOOKING&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Esse é um processo manual? O envio é de que forma, poderia ser por troca de arquivo?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Favor detalhar o processo.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;14- O AGENTE CONFIRMA O BOOKING COM TODOS OS DETALHES ETD/ETA/NAVIO E COM ISTO ALIMENTAMOS O SISTEMA&#160; AGRUPANDO A PO&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Apenas para confirmação os itens 11, 12 e 13 acontecem sem intervenção de sistema? Somente aqui os dados são imputados?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;15- PROXIMO DO EMBARQUE SOLICITAMOS DRAFTS DA DOCUMENTAÇAO PARA CONFERENCIA (BL,INVOICE,P.LIST)&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Isso vem por documento? Pode ser por troca de arquivo entre os sistemas?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;/font&gt;16- ENVIAMOS TODOS OS DOCUMENTOS DE EMBARQUE AO DESPACHANTE&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;De que forma?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;17- DAMOS OK AO FORNECEDOR PARA ENVIAR OS DOCTOS OIGINAIS AO BRASIL APÓS OS DEVIDOS PAGAMENTOS DA INVOICE&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;O que acontece com a chegada da documentação no Brasil?&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;18- DIARIAMENTE ATUALIZAMOS O S DADOS NO SISTEMA DOS EMBARQUES (ETD, ETA POIS PODEM VARIAR DURANTE VIAGEM ,M COM ISTO A CADEIA LOGISTICA ESTA ATUALIZADA&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Ok.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Em que momentos o financeiro é sensibilizado? &lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;FINANCEIRO&lt;br /&gt;&lt;/p&gt;&lt;p&gt;INTERESANTE O SISTEMA AVISAR POR EXEMPLO, UNS 05 DIAS ANTES DO ETA DA IMPORTAÇAO, QUE TAL&#160; EMBARQUE TEM XXX DIAS PARA OS DEVIDOS PAGAMENTOS COM DISPARO DE EMAIL&#160; AO FINANCEIRO OU LUZ VERMELHA OU FICAR INTERMITENTE ESTE CAMPO,PARA FACIL VISUALIZAÇAO DOS SETORES. COM ISTO O FINANCEIRO PODE SE PROGRAMAR E EFETUAR OS DEPOSITOS PROGRAMADOS.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Ok.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;IGUALMENTE APÓS O FINANCEIRO EFETUAR OS DEPOSITOS (TUDO DISCRIMINADO NO SISTEMA)COLOCAR POR EXEMPLO,&#160; UM CAMPO ´´IMPORTAÇAO PAGA´´ FICAR CLICADO EM STATUS VERDE COM AS DATAS / ETC&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#0070c0&quot;&gt;Precisamos detalhar bem quais são os dados relevantes&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;</div>

<div class="pageFooter"></div>
 
</body>
</html>