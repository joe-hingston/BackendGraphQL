<?php

namespace App;

class Rclass extends Config
{
    public function actions()
    {
        return $this->hasMany(WorkflowAction::class);
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}