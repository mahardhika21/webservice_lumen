<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    /**
     * The table name
    */

    protected $table = "users";

    /**
     * The table primary key used for insert autoincrement 
    */ 
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected  $filelable = [
		'id_user',
		'username',
		'email',
		'password',
		'limit_token',
		'token'
	];

 /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
	protected $hidden = 
	[
		"create_at",
		"create_by",
		"update_at",
		"update_by"
	];
}