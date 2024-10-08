<?php
namespace App\Models;

use App\Models\Traits\HasUuid;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasUuid;

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = ['name', 'display_name', 'description', 'color', 'guard_name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string'
    ];
}
