<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static create(array $array)
 */
class Member extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded = [];

    public function roles(): BelongsToMany{
        return $this->belongsToMany(Rol::class, 'users_roles', 'users_id', 'roles_id');
    }
}
