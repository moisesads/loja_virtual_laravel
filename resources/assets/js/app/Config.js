/*
|--------------------------------------------------------------------------
| Configurações Globais das Bibliotecas
|--------------------------------------------------------------------------
|
*/

config([ 'toastyConfigProvider', function(toastyConfigProvider){

  //alerts do componente toasty
	toastyConfigProvider.setConfig({
		sound: false,
		position: 'top-right'
	});

}]).
