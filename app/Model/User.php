<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	/**
	 * 与模型关联的数据表
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * 该模型是否被自动维护时间戳
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * 与模型关联的数据字段
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'account',
		'password',
		'token',
		'token_secret',
		'is_action',
		'created_at',
		'updated_at',
		'privileges'
    ];
}