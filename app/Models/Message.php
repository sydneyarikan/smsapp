<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Message extends Model
{
    public function metadata(): HasMany
    {
        return $this->hasMany(Metadata::class);
    }

    public function messageLogs(): HasMany
    {
        return $this->hasMany(MessageLog::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
