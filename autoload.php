<?php
		spl_autoload_register(function($classe) {
			$diretorioBase = __DIR__."/".str_replace("\\", "/", $classe).".php";
			if(file_exists($diretorioBase)) {
				require_once $diretorioBase;
				return true;
			}else {
				return false;
			}
		});
?>