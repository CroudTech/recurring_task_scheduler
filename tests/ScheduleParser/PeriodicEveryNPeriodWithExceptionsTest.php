<?php
namespace CroudTech\RecurringTaskScheduler\Tests\ScheduleParser;

use Carbon\Carbon;
use CroudTech\RecurringTaskScheduler\Tests\TestCase;

/**
 * Check scheduler periods:
 *
 * Daily
 *  - Every N days {period, interval}
 *  - Every Workday {period, interval, modifier}
 *  - Every DOW {period, interval}
 * Weekly
 *  - N weeks {period, interval}
 *  - On DOW {period, interval, modifier}
 * Same day each month
 *  - Day N of every N months {period, interval, modifier}
 * Same week each month
 *  – every N months on the (1,2,3,4,last) DOW {period, interval, modifier}
 * Same day each year
 *  – Day Month {period, interval, modifier}
 * Same week each year
 *  – (1,2,3,4,last) DOW or Month {period, interval, modifier}
 *
 * Examples
 */
class PeriodicEveryNPeriodWithExceptionsTest extends TestCase
{
    /**
     * Test daily periodic definition
     *
     * @group DEV
     * @dataProvider testDailyEveryNDaysProvider
     */
    public function testDailyEveryNDays($definition, $expected_dates)
    {

        $parser = new \CroudTech\RecurringTaskScheduler\Library\ScheduleParser\Periodic($definition);
        dd($parser->getDefinition());
        $generated_dates = collect($parser->getDates());

        $this->assertTrue((new Carbon($definition['range'][0], $definition['timezone']))->isSameDay($generated_dates->first()), 'First generated date is not the same day as the first day of the range'); // Check that the first date is equal to the start of the range
        $this->assertTrue($generated_dates->last()->lte(new Carbon($definition['range'][1], $definition['timezone'])), 'Last generated date is not before the last date of the range'); // Check that the last date is not after the end of the range

        foreach ($generated_dates as $generated_date) {
            $day_name = strtolower($generated_date->format('D'));
            $month_name = strtolower($generated_date->format('M'));
            if (isset($definition['days'])) {
                $this->assertTrue(array_key_exists($day_name, $definition['days']), 'Day should not be in generated dates');
                $this->assertTrue($definition['days'][$day_name], 'Day should not be in generated dates');
            }
            if (isset($definition['months'])) {
                $this->assertTrue(array_key_exists($day_name, $definition['months']), 'Month should not be in generated dates');
                $this->assertTrue($definition['months'][$day_name], 'Month should not be in generated dates');
            }
        }

        $this->assertEquals($expected_dates, $generated_dates->map(
            function ($date) {
                return $date->format('c');
            }
        )->toArray());
    }

    /**
     * Test definitions
     *
     * @return array
     */
    public function testDailyEveryNDaysProvider()
    {
        return [
            [
                [
                    'timezone' => 'Europe/London',
                    'range' => [
                        '2017-01-01 00:00:00',
                        '2017-01-30 23:59:59',
                    ],
                    'type' => 'periodic',
                    'period' => 'days',
                    'interval' => 1,
                    'time_of_day' => '09:30:00',
                    'days' => [
                        'mon' => 1,
                    ],
                ],
                [
                    "2017-01-01T09:30:00+00:00",
                    "2017-01-06T09:30:00+00:00",
                    "2017-01-11T09:30:00+00:00",
                    "2017-01-16T09:30:00+00:00",
                    "2017-01-21T09:30:00+00:00",
                    "2017-01-26T09:30:00+00:00",
                ],
            ],
            [
                [
                    'timezone' => 'Europe/London',
                    'range' => [
                        '2017-03-24 00:00:00',
                        '2017-04-24 00:00:00',
                    ],
                    'type' => 'periodic',
                    'period' => 'days',
                    'interval' => 5,
                    'time_of_day' => '09:30:00',
                ],
                [
                    '2017-03-24T09:30:00+00:00',
                    '2017-03-29T09:30:00+01:00',
                    '2017-04-03T09:30:00+01:00',
                    '2017-04-08T09:30:00+01:00',
                    '2017-04-13T09:30:00+01:00',
                    '2017-04-18T09:30:00+01:00',
                    '2017-04-23T09:30:00+01:00',
                ],
            ],
            [
                [
                    'timezone' => 'Europe/Paris',
                    'range' => [
                        '2017-01-01 00:00:00',
                        '2017-01-30 23:59:59',
                    ],
                    'type' => 'periodic',
                    'period' => 'days',
                    'interval' => 5,
                    'time_of_day' => '09:30:00',
                ],
                [
                    '2017-01-01T09:30:00+01:00',
                    '2017-01-06T09:30:00+01:00',
                    '2017-01-11T09:30:00+01:00',
                    '2017-01-16T09:30:00+01:00',
                    '2017-01-21T09:30:00+01:00',
                    '2017-01-26T09:30:00+01:00',
                ],
            ],
            [
                [
                    'timezone' => 'Europe/Paris',
                    'range' => [
                        '2017-03-24 00:00:00',
                        '2017-04-24 00:00:00',
                    ],
                    'type' => 'periodic',
                    'period' => 'days',
                    'interval' => 5,
                    'time_of_day' => '09:30:00',
                ],
                [
                    '2017-03-24T09:30:00+01:00',
                    '2017-03-29T09:30:00+02:00',
                    '2017-04-03T09:30:00+02:00',
                    '2017-04-08T09:30:00+02:00',
                    '2017-04-13T09:30:00+02:00',
                    '2017-04-18T09:30:00+02:00',
                    '2017-04-23T09:30:00+02:00',
                ],
            ],
            [
                [
                    'timezone' => 'Europe/London',
                    'range' => [
                        '2017-01-02 00:00:00',
                        '2017-05-03 00:00:00',
                    ],
                    'type' => 'periodic',
                    'period' => 'months',
                    'interval' => 1,
                    'time_of_day' => '09:30:00',
                ],
                [
                    '2017-01-02T09:30:00+00:00',
                    '2017-02-02T09:30:00+00:00',
                    '2017-03-02T09:30:00+00:00',
                    '2017-04-02T09:30:00+01:00',
                    '2017-05-02T09:30:00+01:00',
                ],
            ],
            [
                [
                    'timezone' => 'Australia/Sydney',
                    'range' => [
                        '2017-01-02 00:00:00',
                        '2017-05-03 00:00:00',
                    ],
                    'type' => 'periodic',
                    'period' => 'months',
                    'interval' => 1,
                    'time_of_day' => '09:30:00',
                ],
                [
                    '2017-01-02T09:30:00+11:00',
                    '2017-02-02T09:30:00+11:00',
                    '2017-03-02T09:30:00+11:00',
                    '2017-04-02T09:30:00+10:00',
                    '2017-05-02T09:30:00+10:00',
                ],
            ],
            [
                [
                    'timezone' => 'Africa/Cairo', // Egypt doesn't use daylight saving
                    'range' => [
                        '2017-01-02 00:00:00',
                        '2017-05-03 00:00:00',
                    ],
                    'type' => 'periodic',
                    'period' => 'months',
                    'interval' => 1,
                    'time_of_day' => '09:30:00',
                ],
                [
                    '2017-01-02T09:30:00+02:00',
                    '2017-02-02T09:30:00+02:00',
                    '2017-03-02T09:30:00+02:00',
                    '2017-04-02T09:30:00+02:00',
                    '2017-05-02T09:30:00+02:00',
                ],
            ],
        ];
    }
}
