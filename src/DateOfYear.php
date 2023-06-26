<?php
namespace Dateofyear;
use InvalidArgumentException;


class DateOfYear
{
    private $year;
    // private $currentYear;

    public function __construct($year)
    {
        $this->year = $year;
        // $this->currentYear = $currentYear;
    }

    public function getYearDifference()
    {
        $currentYear = date('Y');
        $difference = $currentYear - $this->year;

        return $difference;
    
        
    }

    public function assertGreaterValue($year,$currentYear)
    {
        return $year > $currentYear;
    }   
}








?>