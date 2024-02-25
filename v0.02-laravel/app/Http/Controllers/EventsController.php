<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {
        $now = strtotime("now");
        $end_date = strtotime("+12 weeks");

        $list_of_weekends = [];
        while (date("Y-m-d", $now) != date("Y-m-d", $end_date)) {
            $day_index = date("w", $now);
            if ($day_index == 0 || $day_index == 6) {
                $list_of_weekends[] = (object)[
                    'monthNr' => intval(date("m", $now)),
                    'monthName' => date("F", $now),
                    'kw' => date("W", $now),
                    'date' => date("d.m.", $now),
                    'weekday' => date('l', $now)
                ];
            }
            $now = strtotime(date("Y-m-d", $now) . "+1 day");
        }
        return view('pages.events', [
            'days' => $list_of_weekends // Event::l($id)
        ]);
    }
}
