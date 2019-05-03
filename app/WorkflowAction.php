<?php

namespace App;

class WorkflowAction extends Config
{
    public function rclass()
    {
        return $this->belongsTo(Rclass::class);
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
