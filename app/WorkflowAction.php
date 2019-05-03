<?php

namespace App;

class WorkflowAction extends Config
{
    public function rclass()
    {
        return $this->belongsTo(Rclass::class);
    }
}
