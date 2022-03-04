<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PermissionUser extends Model
{
    use HasFactory;
    protected $table = 'permission_user';

    public function user(){
        return $this->belongsToMany(User::class);
    }
    
    public function permission(){
        return $this->belongsTo(Permission::class);
    }

}
