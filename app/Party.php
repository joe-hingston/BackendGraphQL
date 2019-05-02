<?php

namespace App;

class Party extends Record
{
    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
