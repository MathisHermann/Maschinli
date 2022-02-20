<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaintenanceItem extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'id';

    /**
     * Get the machine the MaintenanceItem belongs to
     * @return BelongsTo
     */
    public function machine() : BelongsTo
    {
        return $this->belongsTo(Machine::class);
    }

    /**
     * Get the MaintenanceSteps that belong to the MaintenanceItem
     * @return HasMany
     */
    public function maintenanceSteps() : HasMany
    {
        return $this->hasMany(MaintenanceStep::class);
    }

}
