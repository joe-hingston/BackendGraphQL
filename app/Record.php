<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Record extends Model
{
    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::creating(function($record) {
            try {
                $rclass = Rclass::where('class', static::class)->first();
                $record->rclass_id = $rclass->id;
            } catch(ModelNotFoundException $e) {}
        });
    }

    public function rclass()
    {
        return $this->belongsTo(Rclass::class);
    }
}
