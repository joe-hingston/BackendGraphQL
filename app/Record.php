<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::creating(function($record) {
            $rclass = Rclass::where('class', static::class)->first();

            $record->rclass_id = $rclass->id;
        });
    }

    public function rclass()
    {
        return $this->belongsTo(Rclass::class);
    }
}
