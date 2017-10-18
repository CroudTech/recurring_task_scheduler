<?php
namespace CroudTech\RecurringTaskScheduler\Model;

use Carbon\Carbon;
use CroudTech\RecurringTaskScheduler\Model\Schedule;
use Illuminate\Database\Eloquent\Model;

/**
 * The ScheduleEvent represents a single date generated by a schedule.
 *
 * Datetime values stored in the ScheduleEvent are stored in UTC (Timezone offsets are assumed to have been calculated at generation time)
 * and a copy of the original datetime with it's timezone are stored for reporting and debugging
 *
 */
class ScheduleEvent extends Model
{
    protected $table = 'ctrts_schedule_events';

    protected $fillable = [
        'date',
        'original_date',
        'schedule_id',
        'trigger_success',
        'triggered_at',
        'paused',
    ];

    protected $casts = [
        'modified' => 'boolean',
        'trigger_success' => 'boolean',
        'triggered_at' => 'datetime',
        'schedule_id' => 'int',
        'paused' => 'boolean',
    ];

    protected $attributes = [
        'trigger_success' => null,
    ];

    protected $dates = [
        'created_at',
        'date',
        'deleted_at',
        'original_date',
        'triggered_at',
        'updated_at',
    ];

    /**
     * Schedule relationship
     *
     * @return void
     */
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    /**
     * Trigger the callback on the schedule
     *
     * @return bool
     */
    public function trigger()
    {
        event(new \CroudTech\RecurringTaskScheduler\Events\ScheduleEventTriggerEvent($this));
    }

    /**
     * Scope a query to only include future events
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
     public function scopeFutureEvents($query)
     {
         return $query->where('date', '>', Carbon::now());
     }
}
