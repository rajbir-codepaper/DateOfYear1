# DateOfYear

DateOfYear is a PHP class that calculates the difference between a given year and the current year.

## Installation

Use [Composer](https://getcomposer.org/) to install the DateOfYear package.

```bash
composer require your-vendor-name/date-of-year
Usage
php
Copy code
use Dateofyear\DateOfYear;

// Create a new instance of DateOfYear
$dateOfYear = new DateOfYear(1995);

// Get the year difference
$difference = $dateOfYear->getYearDifference();
Testing
DateOfYear includes unit tests using PHPUnit. To run the tests, use the following command:

bash
Copy code
./vendor/bin/phpunit tests/DateOfYearTest.php
Contributing
Contributions are welcome! If you find any issues or want to add new features, please open an issue or submit a pull request.

License
This project is licensed under the MIT License.

