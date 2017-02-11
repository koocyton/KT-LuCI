<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grouping extends Model
{
    // 使用软删除
    use SoftDeletes;

    /**
     * 此模型的连接名称。
     *
     * @var string
     */
    protected $connection = 'backend';

    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'grouping';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    // protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    /**
     * 与模型关联的数据字段
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'deleted_at',
        'privileges',
    ];

    public function getCreatedAtAttribute($value)
    {
        return date("Y-m-d H:i:s", $value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return date("Y-m-d H:i:s", $value);
    }
}
