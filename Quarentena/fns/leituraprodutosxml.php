<?php
    echo "Alexandre Augustus Borges <br/>";


	echo "Listando Arquivos no diretorio XML <br/>";

    $path = "C:\\xmlRJ";
	$diretorio = dir($path);
 	$lista = "";
	$f=fopen("C:\\xmlRJ\\produtos.csv","a+",0);

	while($arquivo = $diretorio -> read()){
		if(strlen($arquivo)>15){
		
			echo "<br/><br/>";
			echo "Apresentando produtos <br/>";
			echo "<br/><br/>";
			
			$link = $path."\\".$arquivo; 
		    $xml = simplexml_load_file($link);
  

		    foreach ($xml->NFe->infNFe->det as $produtos) {

		    	$lista = $lista.$produtos->prod->cProd.", ";
		    	$lista = $lista.$produtos->prod->xProd.", ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista.$produtos->prod->uCom.", ";
		    	$lista = $lista."Y, ";
		    	$lista = $lista."N, ";
		    	$lista = $lista."Y, ";
		    	$lista = $lista."M, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."7, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."1, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista.$xml->NFe->infNFe->emit->CNPJ.", ";
		    	$lista = $lista.$produtos->prod->uCom.", ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista.$produtos->prod->cProd.", ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista.$produtos->prod->vProd.", ";		    	
		    	$lista = $lista.$produtos->prod->cEAN.", ";		    	
		    	$lista = $lista."NA, ";
		    	$lista = $lista."NA, ";
		    	$lista = $lista."\n";




		    }

	    	//$lista = $lista.$xml->NFe->infNFe->det
  		  	//$lista = $lista.$xml->NFe->infNFe->emit->xNome.", ";
    		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->xLgr.", ";
    		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->nro.", ";
    		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->xBairro.", ";
    		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->xMun.", ";
    		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->CEP.", ";
       		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->xPais.", ";
       		//$lista = $lista.$xml->NFe->infNFe->emit->enderEmit->fone."\n";
		

			fwrite($f,$lista);
      		echo $lista;	


		    //foreach ($xml->NFe->infNFe->det as $key) {
	    	//	echo $key->prod->cEAN."<br/>";
    		//}
		}

		$lista = "";
	}
	
	$diretorio -> close();
	fclose($f);











?>