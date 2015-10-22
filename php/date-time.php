<?php

/* date(format,timestamp) */

/* Date format */
// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week

/* Time Format */
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

echo date_default_timezone_get() . '<br>';
echo date('d-m-Y H:i:s') . '<br>';
date_default_timezone_set('Asia/Kuala_Lumpur');
echo date_default_timezone_get() . '<br>';
echo date('d-m-Y H:i:s') . '<br>';
echo date('l, d-m-Y H:i:s', strtotime('+2 week')) . '<br>';
// 2015-08-03 09:27:59
echo 'MysQL Date Format: ' . date('Y-m-d H:i:s');