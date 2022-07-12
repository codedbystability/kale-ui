<?php
namespace App\Services;

use Illuminate\Support\Facades\Cache;
use DebugBar\DebugBar;
use PhpParser\Node\Stmt\TryCatch;

class ApiServices
{
    static $langCode, $apiBaseURL, $cpApiBaseURL;


    function __construct()
    {
        Self::$langCode = app()->getLocale();


        Self::$apiBaseURL = "http://api.kalefxapi.com/api/";
        //Self::$apiBaseURL = "http://localhost:61887/api/";

        Self::$cpApiBaseURL = "https://cp.frxcrm1.com/api/";
    }

    private function GetJsonFromAPI($callURL, $cacheKey)
    {


        $url = $callURL;


      /*
        try {

            $json = json_decode(file_get_contents($url), true);
            if ($json != null) {

                $newJsonString = json_encode($json, JSON_PRETTY_PRINT);

                file_put_contents(base_path('resources/cache/'.$cacheKey.'.json'), $newJsonString);

            }

        } catch (\Throwable $th) {
            //bring json if call dont work
            $jsonString = file_get_contents(base_path('resources/cache/'.$cacheKey.'.json'));
            $json = json_decode($jsonString,true);
        }
        */

       // file_put_contents(base_path('resources/cache/'.$cacheKey.'.json'), $newJsonString);

       $jsonString = file_get_contents(base_path('resources/cache/'.$cacheKey.'.json'));
            $json = json_decode($jsonString,true);

        if ($json != null)
            return $json['Data'];
        else
            return null;
    }

    private function GetJsonFromCPAPI($callURL)
    {
        $url = $callURL;


        $json = json_decode(file_get_contents($url), true);



        if ($json != null)
            return $json;
        else
            return null;
    }

    private function PostJsonFromCPAPI($callURL, $post,$cacheKey)
    {


        try {
            $ch = curl_init($callURL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            // execute!
            $response = curl_exec($ch);
            curl_close($ch);
            $json = json_decode($response, true);
            if ($json != null) {

                $newJsonString = json_encode($json, JSON_PRETTY_PRINT);
                file_put_contents(base_path('resources/cache/'.$cacheKey.'.json'), $newJsonString);
                return $json;
            }
            else
            {
                $jsonString = file_get_contents(base_path('resources/cache/'.$cacheKey.'.json'));
                $json = json_decode($jsonString,true);
                return $json;

            }


        } catch (\Throwable $th) {

            $jsonString = file_get_contents(base_path('resources/cache/'.$cacheKey.'.json'));
            $json = json_decode($jsonString,true);
            return $json;
        }





    }

    function GetLangValues()
    {
        $callurl = Self::$apiBaseURL . 'getLanguageDetails/' . Self::$langCode;
        $langValues = Cache::remember(Self::$langCode, 24 * 60 * 60 , function () use ($callurl) {
            return Self::GetJsonFromAPI($callurl,Self::$langCode);
        });
        return $langValues;
    }

    function GetLangList()
    {
        $callurl = Self::$apiBaseURL . 'getAllLanguages';
        $returnValues = Cache::remember('languageList', 24 * 60 * 60, function () use ($callurl) {
            return Self::GetJsonFromAPI($callurl,'languageList');
        });
        return $returnValues;
    }

    function GetAllContent($cid = 0, $mid = 0, $tid = 0)
    {
        $callurl = Self::$apiBaseURL . 'getAllContent/' . Self::$langCode . '?cid=' . $cid . '&mid=' . $mid . '&tid=' . $tid;
        $cachekey = 'allContent-' . Self::$langCode . '-' . $cid . '-' . $mid . '-' . $tid;
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }

    function GetContentbySEF($SEF)
    {
        $callurl = Self::$apiBaseURL . 'getContentbySEF/' . Self::$langCode . '/' . $SEF;
        $cachekey ='content-' . Self::$langCode . '-' . $SEF;
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }

    function GetAllCategories($mid)
    {
        $callurl = Self::$apiBaseURL . 'getAllCategories/' . Self::$langCode . '/' . $mid;
        $cachekey = 'cat-' . Self::$langCode . '-' . $mid;
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }

    function GetCompanyInfo()
    {
        $callurl = Self::$apiBaseURL . 'getCompanyInfo/' . Self::$langCode;
        $cachekey='company-' . Self::$langCode ;
        $langValues = Cache::remember('company-' . Self::$langCode, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $langValues;
    }

    function GetInstrumentsForMenu()
    {
        $callurl = Self::$apiBaseURL . 'getInstrumentforMenu/' . Self::$langCode;
        $cachekey = 'InstrumentforMenu-' . Self::$langCode;
        $langValues = Cache::remember($cachekey , 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $langValues;
    }

    function GetAllSwapData()
    {
        $callurl = Self::$apiBaseURL . 'getSwapdataAll/' . Self::$langCode;
        $cachekey = 'swapdata-' . Self::$langCode;
        $returnValues = Cache::remember($cachekey , 24 * 60 * 60, function () use ($callurl,$cachekey ) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }

    function GetSwapDatbyCID($cid)
    {
        $callurl = Self::$apiBaseURL . 'getSwapdataCID/' . Self::$langCode . '/' . $cid;
        $cachekey = 'swapdataCID-' . Self::$langCode . '-' . $cid;
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey ) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }

    function GetRateBarList()
    {
        $callurl = Self::$apiBaseURL . 'getBarSymbols';
        $cachekey= 'barSymbolsList';
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }


    function GetRateSpreadrList()
    {
        $callurl = Self::$apiBaseURL . 'getAllSymbolsSpread';
        $cachekey= 'spreadSymbolsList';
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }


    function GetSpreadDataGroup($groupId)
    {
        $callurl = Self::$apiBaseURL . 'getSpreadGroup/'. $groupId;
        $cachekey= 'spreadDatabygroup'. '-' . $groupId;
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }

    function GetAliasList()
    {
        $callurl = Self::$apiBaseURL . 'GetAliasList';
        $cachekey= 'aliaslist';
        $returnValues = Cache::remember($cachekey, 24 * 60 * 60, function () use ($callurl,$cachekey) {
            return Self::GetJsonFromAPI($callurl,$cachekey);
        });
        return $returnValues;
    }


    function GetRateBarData()
    {
        $parite = Self::GetRateBarList();
        $callurl = "https://cp.frxcrm.com/api/parite";

        $post = [
            'parite' => $parite["parite"].'USDTRY,EURTRY,GBPTRY,TRYJPY,GAUTRY,TSLA,MSFT,AAPL,F40EUR,DJIUSD,DAXEUR,CHFDKK,AUDCAD,AUDJPY,AUDNZD,AUDUSD,BMW,CADCHF,NZDJPY,SAP,CADJPY,CHFDKK,EURCZK'
        ];
        $cachekey= 'barSymbolsData';
        $returnValues = Cache::remember($cachekey, 24 * 30, function () use ($callurl, $post,$cachekey) {
            return Self::PostJsonFromCPAPI($callurl, $post,$cachekey);
        });
        return $returnValues;
    }



    function GetSpreadsymbolData()
    {
        $parite = Self::GetRateSpreadrList();
        $callurl = "https://cp.frxcrm.com/api/parite";
        $parite["parite"]= str_replace("&","",$parite["parite"]);

        $post = [
            'parite' => $parite["parite"]
        ];
        $cachekey= 'spreadSymbolsData';
        $returnValues = Cache::remember($cachekey, 24 * 30, function () use ($callurl, $post,$cachekey) {
            return Self::PostJsonFromCPAPI($callurl, $post,$cachekey);
        });
        return $returnValues;
    }


    function GetSymbolDataOutside()
    {
        $callurl = "https://query1.finance.yahoo.com/v7/finance/quote?fields=regularMarketPrice,regularMarketChangePercent,shortName&symbols=USDTRY=X,EURTRY=X,BTC-USD,GC=F,AMZN,BMW.DE,NQ=F,GBPTRY=X";
      ;

        $post = [
            'parite' => ''
        ];
        $cachekey= 'SymbolsDataOutside';
        $returnValues = Cache::remember($cachekey,30, function () use ($callurl, $post,$cachekey) {
            return Self::PostJsonFromCPAPI($callurl, $post,$cachekey);
        });
        return $returnValues;
    }



}
