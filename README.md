# holidaycheck
This is a Laravel 4.2 wrapper for PHP parser for HolidayCheck XML api.

## Dependencies

This wrapper uses ``ors/holidaycheck-api:1.0.*`` for parsing data.

## Installation

To install the package you must run ``composer require ors/holidaycheck`` and set service provider and alias in your app.php file.

To include service provider add this line in 'providers' array:

	'Ors\Holidaycheck\HolidaycheckServiceProvider',

And make sure you've added aliases in 'aliases' array:

	'HolidayCheck' => 'Ors\Holidaycheck\Facades\HolidayCheckFacade',

**Publishing migrations and configuration:**

You will need some custom configurations so make sure you have published config files:

	php artisan config:publish ors/holidaycheck


## Basic Usage

Get detailed information about a hotel (using holiday check unique hotel id):

	$hotel = HolidayCheck::hotel(49415);

A list of hotels

	$hotels = HolidayCheck::hotels(array(), '', 10);

A list of hotel ratings:
	
	$ratings = HolidayCheck::hotelRatings(16);

A list of hotel reviews:

	$ratings = HolidayCheck::hotelReviews(16, array(), false, 'entryDate', 10);	
	
A single review (using holiday check unique hotel review id):

	$review = HolidayCheck::hotelReview(2159596);
  