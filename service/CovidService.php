<?php

class CovidService
{
    public static function getSummary()
    {
        return json_decode(static::makeRequest('https://api.covid19api.com/summary'), true);
    }
    private static function makeRequest($url)
    {
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($cURL);
        if (curl_errno($cURL)){
            throw new Exception(curl_error($cURL));
        }
        curl_close($cURL);
        return $response;
    }
}
