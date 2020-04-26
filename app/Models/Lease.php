<?php

namespace App\Models;

use App\Filters\LeaseFilter;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lease extends Model
{
    use SoftDeletes, Filterable, LeaseFilter;

    // Disable timestamps
    public $timestamps = false;

    /**
     * The attributes that can be filterd
     *
     * @var array
     */
    protected static $whiteListFilter = [
        'start_time', 'end_time', 'phone_nr', 'license_plate'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'rentable_id', 'start_time', 'end_time', 'phone_nr', 'license_plate'
    ];

    /**
     * Get the user record associated with this lease.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get the rentable record associated with this lease.
     */
    public function rentable()
    {
        return $this->belongsTo('App\Models\Rentable', 'rentable_id');
    }
}
