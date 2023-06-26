<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Dateofyear\DateOfYear;
use phpDocumentor\Reflection\PseudoTypes\True_;

class DateOfYearTest extends TestCase
{

    #[DataProvider('DateOfYearDataset')]
    public function testGetYearDifference($year, $expected)
    {
        // Arrange
        $dateOfYear = new DateOfYear($year);
    
        // Act
        $result = $dateOfYear->getYearDifference();
    
        echo $expected." ";
        echo $year." ";
        echo $result." ";


        // Assert
        $this->assertLessThanOrEqual($expected, $result);
        $this->assertGreaterThanOrEqual($expected - $year, $result);
        $this->assertLessThan($expected, $result);
        $dateOfYear->assertGreaterValue($expected, $year);
        $this->assertNotNullValue($result);
    }
    

    public static function DateOfYearDataset()
    {
        $currentYear = date('Y');
        $year = '1995';
        yield [$year,$currentYear];
     
    }

    public function assertNotNullValue($result)
    {
        if ($result!==null) {
            return True;
        }
        else{
            return false;
        }
}
}
