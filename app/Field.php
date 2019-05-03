<?php

namespace App;

class Field extends Config
{
    public function rclass()
    {
        return $this->belongsTo(Rclass::class);
    }
}
