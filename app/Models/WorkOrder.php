<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkOrder
 *
 * @property $id
 * @property $client_id
 * @property $work_group_id
 * @property $status_id
 * @property $vehicle_id
 * @property $description
 * @property $scheduled_date
 * @property $completed_date
 * @property $notes
 * @property $estimated_cost
 * @property $actual_cost
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Status $status
 * @property Vehicle $vehicle
 * @property WorkGroup $workGroup
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class WorkOrder extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cliente',
        'grupo_de_trabajo',
        'estado',
        'vehículo',
        'description',
        'scheduled_date',
        'completed_date',
        'notes',
        'estimated_cost',
        'actual_cost'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class, 'cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'estado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle()
    {
        return $this->belongsTo(\App\Models\Vehicle::class, 'vehículo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workGroup()
    {
        return $this->belongsTo(\App\Models\WorkGroup::class, 'grupo_de_trabajo', 'id');
    }
    
}
