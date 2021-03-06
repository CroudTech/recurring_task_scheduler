<?php
namespace CroudTech\RecurringTaskScheduler\Http\Requests;

class ScheduleParserDefinitionRequest extends Request
{
    /**
     * Define validation rules for the schedule request
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'range.start' => 'required',
            'range.end' => 'required',
            'type' => 'required',
        ];
    }

    /**
     * Authorise the user for this form request
     *
     * @return void
     */
    public function authorize()
    {
        return true;
    }
}