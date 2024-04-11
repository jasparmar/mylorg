<?php

namespace App\Helpers;

/**
 * Display a date in a user-friendly format.
 *
 * @param  string  $date
 * @param  string|null  $format
 * @return string
 */

function displayDate($date, $format = null)
{
    // If the date is null, return an empty string
    if (is_null($date)) {
        return '';
    }
    // Create a Carbon instance from the date string
    $carbonDate = \Carbon\Carbon::parse($date);
    // If a custom format is provided, use it
    if ($format) {
        return $carbonDate->format($format);
    }
    // Otherwise, use a default user-friendly format
    return $carbonDate->format('F j, Y');
}
