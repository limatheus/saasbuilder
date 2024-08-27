<?php

namespace App\Models\Traits;


use Ramsey\Uuid\Uuid;

trait HasUuid
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });

        static::saving(function ($model) {
            $original_id = $model->getOriginal('id');
            if ($original_id !== $model->id) {
                $model->id = $original_id;
            }
        });
    }
}
