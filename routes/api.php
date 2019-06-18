<?php 


// $router->group(['middleware' => 'auth'], function () use ($router) {
//     $router->get('/', function () {
//         // Uses Auth Middleware
//     });

//     $router->get('user/profile', function () {
//         // Uses Auth Middleware
//     });
// });
$api = $router;
$router->get('/ss', function () use ($router) {
    return $router->app->version();
});


 //$api = $app->make(Dingo\Api\Routing\Router::class);

$router->get('/jak', function(){
	echo "helow";
});




// $api->get('/coba', function(){
// 	$data =["username" => "mahardhika","password"=> md5("sadsadsadada")];
// 		 $token = app('auth')->attempt($data);
// 		 echo "token".$token;
// });


$api->group(['middleware' => 'AuthUser'] ,	function () use ($api){
		 $api->get('/cek_status', function(){
		 	echo "helow";
		 });
});


$api->get('/coba_login',[
	"uses" => "LoginUser@coba",
	"as"	=> "api.coba_data",	
]);