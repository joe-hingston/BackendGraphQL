<?php

namespace App;

class Note extends Record
{
    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
