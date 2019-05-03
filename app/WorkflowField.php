<?php

namespace App;

class WorkflowField extends Config
{
    public function action()
    {
        return $this->belongsTo(WorkflowAction::class);
    }
}
