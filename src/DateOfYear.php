<?php
namespace Dateofyear;
use InvalidArgumentException;


class DateOfYear
{
    private $year;
   

    public function __construct($year)
    {
        $this->year = $year;
    }

    public function getYearDifference()
    {
        $currentYear = date('Y');
        $difference = $currentYear - $this->year;
    
    if ($this->assertGreaterValue($this->year, $currentYear))
    {
        throw new InvalidArgumentException("Entered year is greater than current year");
    }

    if (!$this->validateYear($this->year))
    {
        throw new InvalidArgumentException("Invalid year entered");
    }

    if (!$this->assertLessValue($this->year, $currentYear))
    {
        throw new InvalidArgumentException("Entered year is not less than current year");
    }

    return $difference;
}

public function validateYear($year)
{
    $currentYear = date('Y');

    return ($year <= $currentYear && $year >= 0);
}

public function assertGreaterValue($year,$currentYear)
{
    return $year > $currentYear;
}
   
public function assertLessValue($year, $currentYear)
{
    return $year < $currentYear;
}
}








?>