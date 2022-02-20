<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaintenanceItemDone extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the maintenance steps done for the maintenance done
     * @return HasMany
     */
    public function maintenanceStepsDone() : HasMany
    {
        return $this->hasMany(MaintenanceStepDone::class);
    }

    /**
     * Get the machine, the item-done belongs to
     * @return BelongsTo
     */
    public function machine() : BelongsTo
    {
        return $this->belongsTo(Machine::class);
    }

}
