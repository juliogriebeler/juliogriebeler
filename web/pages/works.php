<?php
	$textHeader = 'WORKS';
	$textPrincipal = 'Some works i did or helped:';
	if($pgLang=="de"){
		$textHeader = 'ARBEITEN';
		$textPrincipal = 'Hier gibt Einige arbeiten dass Ich entwickelte or hilft als Web-Entwickler:';
	} else if ($pgLang=="pt"){
		$textHeader = 'TRABALHOS';
		$textPrincipal = 'Alguns trabalhos que desenvolvi e/ou auxiliei:';
	}
	$textPrincipal .= '<br>
					<a href="http://www.jomarturismo.com.br" target="_blank">2014 - Jomar Turismo Website</a><br>
					<a href="http://www.esquadriasmunchen.com" target="_blank">2013 - Esquadrias Munchen Website</a><br>
					<a href="http://www.basilicocasagourmet.com.br" target="_blank">2012 - Website Basilico</a><br>
					<a href="http://www.courmayeur.com.br/retrato" target="_blank">2012 - Vinicola Courmayeur Retrato Hotsite</a><br>
					<a href="http://www.vinicolagaribaldi.com.br/sucosdeuva" target="_blank">2012 - Hotsite Vinicola Garibaldi &#8211; Sucos de Uva</a><br>
					<a href="http://www.vinicolagaribaldi.com.br/granjauniao" target="_blank">2012 - Granja Uniao Hotsite</a><br>';
?>