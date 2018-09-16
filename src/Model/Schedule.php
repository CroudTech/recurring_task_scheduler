<?php
namespace CroudTech\RecurringTaskScheduler\Model;

use Carbon\Carbon;
use CroudTech\RecurringTaskScheduler\Contracts\ScheduleableContract;
use CroudTech\RecurringTaskScheduler\Contracts\ScheduleParserContract;
use CroudTech\RecurringTaskScheduler\Model\ScheduleEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany as HasManyRelationshipQuery;
use Illuminate\Database\Eloquent\Relations\MorphTo as MorphToRelationshipQuery;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $table = 'ctrts_schedules';

    protected $fillable = [
        'active',
        'timezone',
        'type',
        'range_start',
        'range_end',
        'time_of_day',
        'interval',
        'period',
        'modifier',
        'day_number',
        'week_number',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
        'sun',
        'jan',
        'feb',
        'mar',
        'apr',
        'may',
        'jun',
        'jul',
        'aug',
        'sep',
        'oct',
        'nov',
        'dec',
        'scheduleable_id',
        'scheduleable_type',
        'occurrence',
        'entity_id',
        'entity_callback_url',
        'entity_callback_params',
    ];

    protected $attributes = [
        'timezone' => 'Europe/London',
    ];

    protected $casts = [
        'triggered_at' => 'datetime',
        'day_number' => 'string',
        'modifier' => 'string',
    ];

    /**
     * Polymorphic relationship to ScheduleableContract object
     *
     * @return MorphToRelationshipQuery
     */
    public function scheduleable() : MorphToRelationshipQuery
    {
        return $this->morphTo();
    }

    /**
     * Schedule events relationship
     *
     * @return HasManyRelationshipQuery
     */
    public function scheduleEvents() : HasManyRelationshipQuery
    {
        return $this->hasMany(ScheduleEvent::class);
    }

    /**
     * Future schedule events relationship
     *
     * @return HasManyRelationshipQuery
     */
    public function futureScheduleEvents() : HasManyRelationshipQuery
    {
        return $this->hasMany(ScheduleEvent::class)->where('date', '>', Carbon::now());
    }
}
