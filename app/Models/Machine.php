<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Machine extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the MaintenanceItems that belong to that machine
     * @return HasMany
     */
    public function maintenanceItems() : HasMany
    {
        return $this->hasMany(MaintenanceItem::class);
    }

    /**
     * Get the MainenanceItemsDone that belong to that machine
     * @return HasMany
     */
    public function MaintenanceItemsDone() : HasMany
    {
        return $this->hasMany(MaintenanceItemDone::class);
    }

}
