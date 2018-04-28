<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class ModelApi extends Model
{
  public static function boot()
  {
    parent::boot();
    self::creating(function ($model) {
        $model->uuid = (string) Uuid::generate(4);
    });
  }
}