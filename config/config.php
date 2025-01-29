<?php
$user='everythingcannes';
$pwd='laoincannes';
define('username', $user);
define('password', $pwd);
define('SITE_URL', 'http://localhost:8000/');
define('BASE_URL','https://dev.api.yourrentl.com/?');
define('ALL_LISTINGS_PAGES', BASE_URL . 'method=realestate&username=' . username . '&password=' . password);
define('ALL_LISTINGS', BASE_URL . 'method=rental_listings&username=' . username . '&password=' . password . '');
define('PRICING_AVAILABILITY', BASE_URL . 'method=pricing_and_availability&username=' . username . '&password=' . password . '');
define('PRICING_AVAILABILITY_CALENDAR', BASE_URL . 'method=getpricingandavail&username=' . username . '&password=' . password . '');
define('REGIONS', BASE_URL . 'method=regions&username=' . username . '&password=' . password . '');
define('PROPERTY_DETAILS', BASE_URL . 'method=property_details&username=' . username . '&password=' . password);
define('PROPERTY_DETAILS_LIVE', BASE_URL . 'method=property_details&username=' . username . '&password=' . password);
define('AVAILABILITY', BASE_URL . 'method=getpricingandavail&username=' . username . '&password=' . password.'&');
define('GET_INTENT', BASE_URL . 'method=getplaceholderstripeintent&username=' . username . '&password=' . password);
define('SEARCH_AVAILABILITY', BASE_URL . 'method=availability&username=' . username . '&password=' . password.'&');
define('LIST_BY_REVIEW', BASE_URL . 'method=properties_by_reviews&username=' . username . '&password=' . password . '');
define('BOOKING_INQUIRE', BASE_URL . 'method=book&username=' . username . '&password=' . password);
define('ENQUIRY_DETAILS', BASE_URL . 'method=getbookingfrombid&username='. username .'&password='. password);
define('PROPERTY_TYPES', BASE_URL . 'method=property_types&username='. username .'&password='. password);
define('AMENITIES', BASE_URL . '?method=amenities&username=' . username . '&password=' . password);
define('BOOKNG', BASE_URL . '?method=preapproveonlinebooking');
define('AMENITY_ROOT', '//www.yourbookng.com/images/amenities/');

