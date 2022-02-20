<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MaintenanceStep extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the MaintenanceItem the Step belongs to
     * @return BelongsTo
     */
     public function maintenanceItem() : BelongsTo
    {
        return $this->belongsTo(MaintenanceItem::class);
    }

}
