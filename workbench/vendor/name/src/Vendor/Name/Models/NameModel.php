<?php namespace Vendor\Name\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The NameModel class.
 *
 * @package Vendor\Name
 * @author  Dendi Sunandar <dendisunandar@gmail.com>
 */
class NameModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'name';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
