<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    const CREATED_AT = 'add_time';
    const UPDATED_AT = 'upd_time';
    protected $dateFormat = 'U';
}
