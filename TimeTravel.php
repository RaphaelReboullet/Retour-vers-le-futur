<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 03/11/18
 * Time: 16:55
 */

class TimeTravel
{
    public $start;

    public $end;

    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function getTravelInfo($start, $end)
    {
        return $start->diff($end)->format('Il y a %y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entre les deux dates');
    }

    public function findDate(DateInterval $interval)
    {
        return $this->start->sub($interval)->format('d-m-y');
    }

    public function backToFutureStepByStep(DateInterval $step)
    {
        $result = [];
        $dates = new DatePeriod($this->start, $step, $this->end);
        foreach ($dates as $date) {
            $result[] = $date;
        }
        return $result;
    }
}