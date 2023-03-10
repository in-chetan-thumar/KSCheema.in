<?php

namespace App\Helpers;

use App\Models\Page;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Route;

use function Symfony\Component\String\length;

class CommonHelper
{
    /**Rendom password  generate */
    public function randomPasswordGenerator()
    {
        $digits = array_flip(range('0', '9'));
        $lowercase = array_flip(range('a', 'z'));
        $uppercase = array_flip(range('A', 'Z'));
        $special = array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'));
        $combined = array_merge($digits, $lowercase, $uppercase, $special);

        $password = str_shuffle(array_rand($digits) .
            array_rand($lowercase) .
            array_rand($uppercase) .
            array_rand($special) .
            implode(array_rand($combined, rand(4, 4))));

        //dd(strlen($password),$password);
        return $password;
    }

    /**Rendom string generate */
    public function randomString($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    /**Email masking */
    function maskEmailAddress($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            list($first, $last) = explode('@', $email);
            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first) - 3), $first);
            $last = explode('.', $last);
            $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0']) - 1), $last['0']);
            $hideEmailAddress = $first . '@' . $last_domain . '.' . $last['1'];
            return $hideEmailAddress;
        } else {
            return NULL;
        }
    }

    /**Phone number masking */
    function maskPhoneNumber($phone)
    {
        if (!empty($phone)) {
            return config('constants.COUNTRY_CODE') . substr($phone, 0, 2) . str_repeat("*", strlen($phone) - 4) . substr($phone, -2);
        } else {
            return NULL;
        }
    }

    /** Generate date range */
    function generateDateRange($params)
    {
        $data = [];
        $getMonthsList = CarbonPeriod::create($params['start_date'], '1 month', $params['end_date']);
        foreach ($getMonthsList as $dt) {
            $data[$dt->format("M")] = 0;
        }
        return $data;
    }

    /** Financial Yea number */
    function getFinancialYear($inputDate, $format = "Y")
    {
        $date = date_create($inputDate);
        if (date_format($date, "m") >= 4) {
            //On or After April (FY is current year - next year)
            $financial_year = (date_format($date, $format)) . '-' . (date_format($date, $format) + 1);
        } else {
            //On or Before March (FY is previous year - current year)
            $financial_year = (date_format($date, $format) - 1) . '-' . date_format($date, $format);
        }

        return $financial_year;
    }

    function getSEOMeta(){
        $content = Page::select('id','title','meta_keywords','meta_description')->whereRouteName(Route::currentRouteName())->first();
        SEOTools::setTitle($content->title, false);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);
    }
}
