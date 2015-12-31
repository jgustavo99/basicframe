<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Esse é uma Model utilizando a ORM Eloquent do Laravel.
 * A documentação completa pode ser encontrada em https://laravel.com/docs/master/eloquent.
 */
class User extends Model
{
	protected $table = 'users';
}
