<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Model\Users;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginUser extends Controller
{
		function login(Request $request)
		{
				$whereData = array("username" => $request->input('username'),"password" => md5($request->input('password')));

				// try
				// {
				// 	$loginUsr = Users::where($whereData)->get();

				// 	if(count($loginUsr))
				// 	{

				// 	}else
				// 	{
				// 		$resp['succes']   = 'false';
				// 		$resp['message']  = "username or password wrong";
				// 		$resp['data']	  = NULL;
				// 	}
				
				// }catch(\Illuminate\Database\Facades\QueryException $e)
				// {
				// 	  $resp['succes']  = 'false';
				// 	  $resp['message'] = $e->getMessage();
				// }
		}



		function coba(Request $request)
		{
			echo "coba";
		}
}