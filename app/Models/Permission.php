<?php
namespace App\Models;

use App\Models\Traits\HasUuid;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use HasUuid;
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = ['name', 'display_name', 'description', 'group', 'guard_name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string'
    ];

}
