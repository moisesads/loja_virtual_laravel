const elixir = require('laravel-elixir');

elixir(mix => {

  /*
  | BIBLIOTECAS CSS GLOBIAS
  */
  mix.styles([
    '../../../node_modules/bootstrap/dist/css/bootstrap.css',
    '../../../node_modules/font-awesome/css/font-awesome.css',//ICONES
    '../../../node_modules/angular-toasty/dist/angular-toasty.css',//mensagens
    'app/tema.css',
  ], 'public/css/vendor.css');

  /*
  | BIBLIOTECAS JS GLOBIAS
  */
  mix.scripts([
    '../../../node_modules/jquery/dist/jquery.js',
    '../../../node_modules/bootstrap/dist/js/bootstrap.js',
    '../../../node_modules/angular/angular.js',
    '../../../node_modules/angular/angular-locale_pt-br.js',//TRADUÇÃO
    '../../../node_modules/angular-resource/angular-resource.js',//PARA API CRUD
    '../../../node_modules/angular-utils-pagination/dirPagination.js',//OAGINAÇÃO
    '../../../node_modules/angular-input-masks/releases/angular-input-masks-standalone.js',//MASCARAS
    '../../../node_modules/angular-toasty/dist/angular-toasty.js',//mensagens
  ], 'public/js/vendor.js');

  /*
  | APLICAÇÃO FEITA EM ANGULAR 1.6
  */
  mix.scripts([
    //MODULO
    'app/Module.js',
    //CONFIGURAÇÕES DO PROJETO
    'app/Config.js',
    //SERVICES COM URLS DA API (ABSTRAÇÃO DE MODELS)
    'app/ModelsService.js',

    //CONTROLLERS
    'app/controllers/ProdutoController.js',

    //final dos controllers
    'app/controllers/FinalController.js',//ATENÇÃO: só o ultimo em ";"<><><>
    //COMPONENTES (diretivas)

  ],'public/js/app.js');


  /*
  | PARA ATUALIZAR AS VERÇÕES DO SISTEMA AUTOMATICAMENTE
  */
  mix.version([
    'public/css/vendor.css',
    'public/js/vendor.js',
    'public/js/app.js',
  ]);

  mix.copy('node_modules/bootstrap/dist/fonts', 'public/fonts');
  mix.copy('node_modules/bootstrap/dist/fonts', 'public/build/fonts');
  mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
  mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');


});
