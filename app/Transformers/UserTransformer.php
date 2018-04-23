<?php

namespace App\Transformers;

use App\Entities\User;
use League\Fractal\TransformerAbstract;

/**
 * Class UserTransformer
 */
class UserTransformer extends TransformerAbstract
{

    /**
     * @param User $model
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'email' => $model->email,
            'created_at' => $model->created_at->toIso8601String(),
            'updated_at' => $model->updated_at->toIso8601String(),
        ];
    }
}
