<?php

namespace App;

class Rclass extends Config
{
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function parties()
    {
        return $this->hasMany(Party::class);
    }

    public function actions()
    {
        return $this->hasMany(WorkflowAction::class);
    }
}