<?php

namespace App;

class Contract extends Record
{
    public function parties()
    {
        return $this->hasMany(Party::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
