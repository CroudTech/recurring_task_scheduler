<?php
namespace CroudTech\RecurringTaskScheduler\Library\ScheduleParser\Periodic;

use Carbon\Carbon;
use CroudTech\RecurringTaskScheduler\Contracts\ScheduleParserContract;
use CroudTech\RecurringTaskScheduler\Library\ScheduleParser\Base;

class Years extends Base implements ScheduleParserContract
{
    /**
     * Return generated dates from provided schedule definition
     *
     * @return array
     */
    public function getDates() : array
    {
        if (empty($this->generated)) {
            $interval = $this->getInterval();
            $week_number = $this->definition['week_number'];
            $day_number = $this->getDayNumber();
            $months = $this->getMonthNumbers();
            $current_date = $this->getStartDate();

            $iteration_count = 0;

            while ($current_date->lte($this->getRangeEnd()) && count($this->generated) < 500 && $iteration_count < 1000) {
                $generated_date = $current_date->copy();
                foreach ($months as $month) {
                    $generated_date->month($month);
                    $generated_date->day($day_number);
                    if ($generated_date->between($this->getRangeStart(), $this->getRangeEnd())) {
                        $this->generated[] = $generated_date->copy();
                    }
                }
                $current_date->addYears($interval);
                $iteration_count++;
            }
        }

        $this->generated = $this->filterExceptions($this->generated);
        $this->sortDates();
        $this->fixTimezones();
        return $this->generated;
    }
}
