<?php

namespace App;

class Field extends Config
{
    public function action()
    {
        return $this->belongsTo(WorkflowAction::class);
    }
}
