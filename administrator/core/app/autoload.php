<?php
// autoload.php
// [created] 26 de Febrero del 2023
// [rebuilded] 26 de Febrero del 2023
// esta funcion elimina el hecho de estar agregando los modelos manualmente
// by Robert

function lb_autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}

spl_autoload_register("lb_autoload");

?>