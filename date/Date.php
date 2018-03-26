<?php
namespace date;

class Date{
    /**
     * Takes Timestamp and Converts it to most readable format
     * @timestamp is TimeStamp to be formatted
     * 
     * Example TimeStamp: '2018-03-26 11:35:37' will changed to
     * 
     * 
     * $options is a nullable array of configurations
     * 'short' => true: Prints date with short month names, default is false
     *  
     * **/
    public static function getFormattedDate($timestamp,$options = null){
        //Split $date into array of two strings (date and time)
        $timestamp_array = \explode(' ',$timestamp);
        //Store date and time into separate variables
        $date = $timestamp_array[0];
        $time = $timestamp_array[1];
        //Split $date into array of Year, Month and Day
        $date_array = \explode('-',$date);
        //Store Year, Month and Day into separate variables
        $year = $date_array[0];
        $month = $date_array[1];
        $day = $date_array[2];
         //Split $time into array of Hour, Minutes and Seconds
        $time_array = \explode(':', $time);
        //Store Hour, Minutes and Seconds into separate variables
        $hour = $time_array[0];
        $minutes = $time_array[1];
        $seconds = $time_array[2];
        


    }
    /**
     *  Return array that stores text names
     * for months indexed by their numeric values
     * ***/
    public static function getMonthNames(){
       
        return [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'Augost',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];
    }

    /**
     *  Return array that stores text short names
     * for months indexed by their numeric values
     * ***/
    public static function getMonthNamesShort()
    {
        //array to store short month names
        $months = [];
        foreach (self::getMonthNames() as $key => $value) {
            $months[$key] = substr($value,0,4);
        }
        return $months;
    }

}
?>