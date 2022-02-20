<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MaintenanceStepDone extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the maintenanceitemdone that owns the maintenance step
     * @return BelongsTo
     */
    public function maintenanceItemDone(): BelongsTo
    {
        return $this->belongsTo(MaintenanceItemDone::class);
    }

}
