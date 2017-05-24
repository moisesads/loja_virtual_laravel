/*
|--------------------------------------------------------------------------
| SERVICES COM URLS DA API (ABSTRAÇÃO DE MODELS)
|--------------------------------------------------------------------------
|
|   Este arquivo permite reutilizar o service globalmente com a
|   url da api, facilitando da manutênção
|
*/

factory('Produto', ["$resource", function($resource){
   return $resource('url-api/:id', {id:'@id'},
            {update: {method: 'PUT'}});
}]).

factory('Carrinho', ["$resource", function($resource){
   return $resource('url-api/:id', {id:'@id'},
            {update: {method: 'PUT'}});
}]).
