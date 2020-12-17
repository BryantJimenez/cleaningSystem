<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.visits.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request)
    {
        $categories=[];
        $categories_labels=[];
        $categories_values=[];
        $visits=Visit::get();
        foreach ($visits as $visit) {
            foreach ($visit->news as $new) {
                foreach ($new->categories as $category) {
                    if (array_key_exists($category->slug, $categories)) {
                        $categories[$category->slug]['value']=$categories[$category->slug]['value']+1;
                    } else {
                        $categories[$category->slug]=array('name' => $category->name, 'value' => 1);
                    }
                }
            }
        }

        $num=0;
        usort($categories, function($a, $b) {
            return $a['value'] - $b['value'];
        });
        $categories=array_reverse($categories);

        foreach ($categories as $category) {
            if ($num<5) {
                $categories_labels[$num]=$category['name'];
                $categories_values[$num]=$category['value'];
                $num++;
            }
        }

        $day_one=0; $day_two=0; $day_three=0; $day_four=0; $day_five=0; $day_six=0; $day_seven=0;
        $today=date('D');
        $week_days=[date("D",strtotime($today."- 6 days")), date("D",strtotime($today."- 5 days")), date("D",strtotime($today."- 4 days")), date("D",strtotime($today."- 3 days")), date("D",strtotime($today."- 2 days")), date("D",strtotime($today."- 1 days")), $today];

        $month_one=0; $month_two=0; $month_three=0; $month_four=0; $month_five=0; $month_six=0; $month_seven=0; $month_eight=0; $month_nine=0; $month_ten=0; $month_eleven=0; $month_twentytwo=0;
        $month=date('d-m-Y');
        $month_year=[date("M",strtotime($month."- 11 month")), date("M",strtotime($month."- 10 month")), date("M",strtotime($month."- 9 month")), date("M",strtotime($month."- 8 month")), date("M",strtotime($month."- 7 month")), date("M",strtotime($month."- 6 month")), date("M",strtotime($month."- 5 month")), date("M",strtotime($month."- 4 month")), date("M",strtotime($month."- 3 month")), date("M",strtotime($month."- 2 month")), date("M",strtotime($month."- 1 month")), date("M",strtotime($month))];

        $day7=date('Y-m-d');
        $day6=date('Y-m-d',strtotime($day7."- 1 days"));
        $day5=date('Y-m-d',strtotime($day7."- 2 days"));
        $day4=date('Y-m-d',strtotime($day7."- 3 days"));
        $day3=date('Y-m-d',strtotime($day7."- 4 days"));
        $day2=date('Y-m-d',strtotime($day7."- 5 days"));
        $day1=date('Y-m-d',strtotime($day7."- 6 days"));

        $month12=date('Y-m');
        $month11=date('Y-m',strtotime($month12."- 1 month"));
        $month10=date('Y-m',strtotime($month12."- 2 month"));
        $month9=date('Y-m',strtotime($month12."- 3 month"));
        $month8=date('Y-m',strtotime($month12."- 4 month"));
        $month7=date('Y-m',strtotime($month12."- 5 month"));
        $month6=date('Y-m',strtotime($month12."- 6 month"));
        $month5=date('Y-m',strtotime($month12."- 7 month"));
        $month4=date('Y-m',strtotime($month12."- 8 month"));
        $month3=date('Y-m',strtotime($month12."- 9 month"));
        $month2=date('Y-m',strtotime($month12."- 10 month"));
        $month1=date('Y-m',strtotime($month12."- 11 month"));

        foreach ($visits as $visit) {
            if ($visit->created_at->format('Y-m-d')==$day7) {
                $day_one++;
            } elseif ($visit->created_at->format('Y-m-d')==$day6) {
                $day_two++;
            } elseif ($visit->created_at->format('Y-m-d')==$day5) {
                $day_three++;
            } elseif ($visit->created_at->format('Y-m-d')==$day4) {
                $day_four++;
            } elseif ($visit->created_at->format('Y-m-d')==$day3) {
                $day_five++;
            } elseif ($visit->created_at->format('Y-m-d')==$day2) {
                $day_six++;
            } elseif ($visit->created_at->format('Y-m-d')==$day1) {
                $day_seven++;
            }

            if ($visit->created_at->format('Y-m')==$month12) {
                $month_one++;
            } elseif ($visit->created_at->format('Y-m')==$month11) {
                $month_two++;
            } elseif ($visit->created_at->format('Y-m')==$month10) {
                $month_three++;
            } elseif ($visit->created_at->format('Y-m')==$month9) {
                $month_four++;
            } elseif ($visit->created_at->format('Y-m')==$month8) {
                $month_five++;
            } elseif ($visit->created_at->format('Y-m')==$month7) {
                $month_six++;
            } elseif ($visit->created_at->format('Y-m')==$month6) {
                $month_seven++;
            } elseif ($visit->created_at->format('Y-m')==$month5) {
                $month_eight++;
            } elseif ($visit->created_at->format('Y-m')==$month4) {
                $month_nine++;
            } elseif ($visit->created_at->format('Y-m')==$month3) {
                $month_ten++;
            } elseif ($visit->created_at->format('Y-m')==$month2) {
                $month_eleven++;
            } elseif ($visit->created_at->format('Y-m')==$month1) {
                $month_twentytwo++;
            }
        }

        $week_values=[$day_seven, $day_six, $day_five, $day_four, $day_three, $day_two, $day_one];
        $month_values=[$month_twentytwo, $month_eleven, $month_ten, $month_nine, $month_eight, $month_seven, $month_six, $month_five, $month_four, $month_three, $month_two, $month_one];

        return response()->json(['categories_labels' => $categories_labels, 'categories_values' => $categories_values, 'week_days' => $week_days, 'week_values' => $week_values, 'month_year' => $month_year, 'month_values' => $month_values]);
    }
}
