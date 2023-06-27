<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Dateofyear\DateOfYear;

class DateOfYearTest extends TestCase
{

    #[DataProvider('DateOfYearDataset')]
    public function testGetYearDifference($year, $expected)
    {
        // Arrange
        $dateOfYear = new DateOfYear($year);

        // Act
        $result = $dateOfYear->getYearDifference();
    
        // Assert

        $this->assertLessThanOrEqual($expected, $result);
        $this->assertGreaterThanOrEqual($expected - $year, $result);
        $this->assertLessThan($expected, $result);
        $this->assertNotNull($result);
    }
    

    public static function DateOfYearDataset()
    {
        $currentYear = date('Y');
        $year = '1995';
        yield [$year, $currentYear];
    }
}
?>
