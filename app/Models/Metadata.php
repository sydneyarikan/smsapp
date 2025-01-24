<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Metadata extends Model
{
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
