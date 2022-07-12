<?php

namespace App\Http\Controllers;

use App\Services\ApiServices;
use Illuminate\Http\Request;
 use Barryvdh\Debugbar\Facade as Debugbar;
use Jenssegers\Agent\Agent;
use Cookie;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{

  // TODO 12
    public function masterData()
    {
        $apiservice = new ApiServices();

        $langList = $apiservice->GetLangList();
        $corperateList = $apiservice->GetAllContent(0, 2, 0);
        $instrumentsList = $apiservice->GetInstrumentsForMenu();
        $instrumentsFull = $apiservice->GetAllContent(0, 3, 0);
        $infobankList = $apiservice->GetAllContent(0, 1, 0);
        $staticpageList = $apiservice->GetAllContent(0, 6, 0);
        $platformsList = $apiservice->GetAllContent(0, 4, 0);

        $corperateKey = array_search(16, array_column($corperateList, 'Id'));
        $contactKey = array_search(19, array_column($corperateList, 'Id'));
        $infoBankKey = array_search(20, array_column($infobankList, 'Id'));
        $platformKey = array_search(22, array_column($infobankList, 'Id'));

        $menuCorporate = $corperateList[$corperateKey];
        $menucontact = $corperateList[$contactKey];
        $menuInfobank = $infobankList[$infoBankKey];
        $menuPlatform = $platformsList[$platformKey];
        $agent = new Agent();
        $ip = $this->getIp();




        $data = [
            'langlist' => $langList,
            'corperateList' => $corperateList,
            'instrumentsList' => $instrumentsList,
            'instrumentsFull' => $instrumentsFull,
            'infobankList' => $infobankList,
            'staticpageList' => $staticpageList,
            'platformsList' => $platformsList,
            'menucorporate' => $menuCorporate,
            'menucontact' => $menucontact,
            'menuinfobank' => $menuInfobank,
            'menuplatform' => $menuPlatform,
            'agent' => $agent,
            'ip' => $ip

        ];
        return $data;
    }

    public function checkTr()
    {
        //Get user IP address
        $ip=$_SERVER['REMOTE_ADDR'];
        //Using the API to get information about this IP
        $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
        //Using the geoplugin to get the continent for this IP
            $continent=$details->geoplugin_continentCode;
        //And for the country
            $country=$details->geoplugin_countryCode;
        //If continent is Europe
            if($country==="TR" ){
        return 'Doesnt Support Your Country';
        }
        else
        return null ;
    }


    public function seoTitles($ID)
    {
        $apiservice = new ApiServices();
        $staticpageList = $apiservice->GetAllContent(0, 9, 0);

        $selectedKey = array_search($ID, array_column($staticpageList, 'Id'));
        $selectedContent = $staticpageList[$selectedKey];
        if (isset($selectedContent)) {
            $contentData = [
                'SefContent' => $selectedContent
            ];

            return $contentData;
        } else
            return null;
    }





    public function index(Request $request)
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        try{
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strstr($_SERVER['HTTP_X_REQUESTED_WITH'], "com")) {
         $myfile = fopen("uygulamalar.txt", "a") or die("Unable to open file!");
              $txt = $_SERVER['HTTP_X_REQUESTED_WITH']." - ".$_SERVER['HTTP_USER_AGENT']."\n";
               fwrite($myfile, $txt);
               fclose($myfile);
               }
            } catch (\Exception $e) {

                return  $e;
            }

        //send live data for instruments from js
        //send swap-margin data from from backend
        //send instrument List from beckend
        $apiservice = new ApiServices();

        $data = self::masterData();

        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);

        $swapAllData = $apiservice->GetAllSwapData();
        $topBarData = $apiservice->GetRateBarData();

        $contentData = [
            'instrumentGroups' => $instrumentGroups,
            'swapAllData' => $swapAllData,
            'topBarData' => $topBarData

        ];

        $dataNew = array_merge($data, $contentData);



        return view("pages/index")->with('data', $dataNew);
    }

    public function twigindex(Request $request)
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        return 'asdasd';
    }




    public function landing(Request $request)
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        try{
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strstr($_SERVER['HTTP_X_REQUESTED_WITH'], "com")) {
         $myfile = fopen("uygulamalar.txt", "a") or die("Unable to open file!");
              $txt = $_SERVER['HTTP_X_REQUESTED_WITH']." - ".$_SERVER['HTTP_USER_AGENT']."\n";
               fwrite($myfile, $txt);
               fclose($myfile);
               }
            } catch (\Exception $e) {

                return  $e;
            }

        //send live data for instruments from js
        //send swap-margin data from from backend
        //send instrument List from beckend
        $apiservice = new ApiServices();

        $data = self::masterData();

        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);

        $swapAllData = $apiservice->GetAllSwapData();
        $topBarData = $apiservice->GetRateBarData();

        $promotionList = $apiservice->GetAllContent(0, 7, 0);



        $contentData = [
            'instrumentGroups' => $instrumentGroups,
            'swapAllData' => $swapAllData,
            'topBarData' => $topBarData,
            'promotionList' => $promotionList

        ];

        $dataNew = array_merge($data, $contentData);



        return view("pages/landingv1")->with('data', $dataNew);
    }


    public function landingAr(Request $request)
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        //send live data for instruments from js
        //send swap-margin data from from backend
        //send instrument List from beckend
        $apiservice = new ApiServices();

        $data = self::masterData();

        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);

        $swapAllData = $apiservice->GetAllSwapData();
        $topBarData = $apiservice->GetRateBarData();

        $promotionList = $apiservice->GetAllContent(0, 7, 0);



        $contentData = [
            'instrumentGroups' => $instrumentGroups,
            'swapAllData' => $swapAllData,
            'topBarData' => $topBarData,
            'promotionList' => $promotionList

        ];

        $dataNew = array_merge($data, $contentData);



        return view("landingAr")->with('data', $dataNew);
    }




    public function getContent($sef)
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $apiservice = new ApiServices();
        $data = self::masterData();

        $content = $apiservice->GetContentbySEF(urlencode($sef));
        $contentData = [
            'SefContent' => $content
        ];


        $dataNew = array_merge($data, $contentData);


        if ($content != null) {

            //Makealist of items in same moduleID
            //infobank
            if ($content["ModuleID"] == 1) {

                return view("pages/data-bank")->with('data', $dataNew);
            }
            //corparate
            elseif ($content["ModuleID"] == 2) {
                //if ContactPage
                if ($content["Id"] == 19)
                    return view("pages/contact")->with('data', $dataNew);
                elseif ($content["Id"] == 44)
                    return view("hr")->with('data', $dataNew);
                else
                    return view("pages/about")->with('data', $dataNew);
            }
            //Instruments
            elseif ($content["ModuleID"] == 3) {

                $swapAllData = $apiservice->GetAllSwapData();
                $cid = $content["Id"];
                $filtered = collect($swapAllData)
                    ->filter(function ($event) use ($cid) {
                        return $event['CID'] === $cid;
                    });

                $dataNew = array_merge(
                    $dataNew,
                    [
                        'subData' => $filtered->first()["SwapData"],
                        'CID' => $content["Id"]
                    ]
                );

                //Debugbar::info($dataNew);

                return view("pages/investment")->with('data', $dataNew);
            }
            //platforms
            elseif ($content["ModuleID"] == 4) {

                return view("pages/platform")->with('data', $dataNew);
            } elseif ($content["ModuleID"] == 6) {

                return view("static")->with('data', $dataNew);
            }
            //somethingelse
            else {
                return view("index")->with('data', $data);
            }
        } else {
            //return 404


            return view("index")->with('data', $data);
        }
    }


    public function getPromotions()
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        //Send platform content
        $data = self::masterData();

        $apiservice = new ApiServices();
        $promotionList = $apiservice->GetAllContent(0, 7, 0);

        $contentData = [
            'promotionList' => $promotionList
        ];
        $dataNew = array_merge($data, $contentData, self::seoTitles(33));


        return view("pages/promotions")->with('data', $dataNew);
    }


    public function getAccounts()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);


        $contentData = [
            'instrumentGroups' => $instrumentGroups

        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(38));
        return view("pages/account-type")->with('data', $dataNew);
    }


    public function getHours()
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);


        $contentData = [
            'instrumentGroups' => $instrumentGroups

        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(41));
        return view("pages/trading-hours")->with('data', $dataNew);
    }

    public function getHolidays()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);




        $dataNew = array_merge($data,  self::seoTitles(41));
        return view("pages/holiday")->with('data', $dataNew);
    }



    public function getSpread()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        //get full instrument list with swap-margin data
        //send the list
        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);

        $swapAllData = $apiservice->GetAllSwapData();

        $contentData = [
            'instrumentGroups' => $instrumentGroups,
            'swapAllData' => $swapAllData

        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(39));
        return view("spread")->with('data', $dataNew);
    }


    public function getLiveFeed()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        //get full instrument list with swap-margin data
        //send the list
        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);

        $swapAllData = $apiservice->GetAllSwapData();

        $contentData = [
            'instrumentGroups' => $instrumentGroups,
            'swapAllData' => $swapAllData

        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(42));
        return view("pages/live-flow")->with('data', $dataNew);
    }



    public function getSwap()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        //get full instrument list with swap-margin data
        //send the list
        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);

        $swapAllData = $apiservice->GetAllSwapData();

        $contentData = [
            'instrumentGroups' => $instrumentGroups,
            'swapAllData' => $swapAllData

        ];

        //Debugbar::info($swapAllData);

        $dataNew = array_merge($data, $contentData, self::seoTitles(40));
        return view("pages/processing-features")->with('data', $dataNew);
    }

    public function getInstrumentDetails($symbol)
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        //get full instrument list with swap-margin data
        //send the list
        $apiservice = new ApiServices();

        $data = self::masterData();

        $datas = $apiservice->GetSpreadsymbolData();

        $swapAllData = $apiservice->GetAllSwapData();
        $symbolItem;
        $symbolPrice;
        foreach ($swapAllData as $key => $topitem) {

            $return[$key]['CID'] = $topitem['CID'];
            foreach ($topitem['SwapData'] as $item) {
                if ($item['Symbol'] == $symbol) {
                    $symbolItem = $item;


                    $pariteID = array_search($item['Symbol'], array_column($datas, 'SYMBOL'));
                    $symbolPrice =    $datas[$pariteID];
                }
            }
        }

        $contentData = [
            'item' => $symbolItem,
            'itemPrice' => $symbolPrice,
        ];

        //Debugbar::info($swapAllData);

        $dataNew = array_merge($data, $contentData);
        //return   $dataNew ;
        return view("pages/investment-details")->with('data', $dataNew);
    }



    public function getLogin()
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $data = self::masterData();
        //use evertying from langValue

        $dataNew = array_merge($data, self::seoTitles(34));
        return view("pages/login")->with('data', $dataNew);
    }


    public function getRegister()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $data = self::masterData();
        $apiservice = new ApiServices();
        $staticpageList = $apiservice->GetAllContent(0, 6, 0);
        $agreement1Key = array_search(26, array_column($staticpageList, 'Id'));
        $agreement2Key  = array_search(27, array_column($staticpageList, 'Id'));

        $agreement1 = $staticpageList[$agreement1Key];
        $agreement2 = $staticpageList[$agreement2Key];

        $contentData = [
            'agreement1' => $agreement1,
            'agreement2' => $agreement2
        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(36));


        //use evertying from langValue
        return view("pages/create-account")->with('data', $dataNew);
    }



    public function getCallme()
    {

        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $data = self::masterData();
        $apiservice = new ApiServices();
        $staticpageList = $apiservice->GetAllContent(0, 6, 0);
        $agreement1Key = array_search(26, array_column($staticpageList, 'Id'));
        $agreement2Key  = array_search(27, array_column($staticpageList, 'Id'));

        $agreement1 = $staticpageList[$agreement1Key];
        $agreement2 = $staticpageList[$agreement2Key];

        $contentData = [
            'agreement1' => $agreement1,
            'agreement2' => $agreement2
        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(43));


        //use evertying from langValue
        return view("callme")->with('data', $dataNew);
    }

    public function getRegisterDemo()
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $data = self::masterData();
        $apiservice = new ApiServices();
        $staticpageList = $apiservice->GetAllContent(0, 6, 0);
        $agreement1Key = array_search(26, array_column($staticpageList, 'Id'));
        $agreement2Key  = array_search(27, array_column($staticpageList, 'Id'));

        $agreement1 = $staticpageList[$agreement1Key];
        $agreement2 = $staticpageList[$agreement2Key];

        $contentData = [
            'agreement1' => $agreement1,
            'agreement2' => $agreement2
        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(35));


        //use evertying from langValue
        return view("pages/create-demo-account")->with('data', $dataNew);
    }

    public function getUserTransfer()
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';




        $data = self::masterData();
        $apiservice = new ApiServices();
        $staticpageList = $apiservice->GetAllContent(0, 6, 0);
        $agreement1Key = array_search(26, array_column($staticpageList, 'Id'));
        $agreement2Key  = array_search(27, array_column($staticpageList, 'Id'));

        $agreement1 = $staticpageList[$agreement1Key];
        $agreement2 = $staticpageList[$agreement2Key];

        $contentData = [
            'agreement1' => $agreement1,
            'agreement2' => $agreement2
        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(37));


        //use evertying from langValue
        return view("pages/move-account")->with('data', $dataNew);
    }


    public function mt4()
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';
        $data = self::masterData();
        $dataNew = array_merge($data, self::seoTitles(44));

        return view("mt4")->with('data', $dataNew);
    }

    public function Register(Request $request)
    {
        if(self::checkTr() != null)
        return 'Doesnt Support Your Country';


        $newphone = $request->phone;
        $newphone = str_replace(" ", "", $newphone);
        $newphone = str_replace("-", "", $newphone);
        $newphone = str_replace("_", "", $newphone);
        $newphone = str_replace("+", "", $newphone);
        $newphone = str_replace("+", "", $newphone);
        $newphone = str_replace("(", "", $newphone);
        $newphone = str_replace(")", "", $newphone);
        $newphone = str_replace("*", "", $newphone);
        $newphone = str_replace("/", "", $newphone);
        $newphone = str_replace("'", "", $newphone);
        $newphone = str_replace('"', '', $newphone);


        $newphone = preg_replace("/[^0-9]/", "", $newphone);


        $newname = str_limit($request->name, 21);

        $newname = str_replace("*", "", $newname);
        $newname = str_replace("/", "", $newname);
        $newname = str_replace("'", "", $newname);
        $newname = str_replace('"', '', $newname);
        $newname = str_replace("<", "", $newname);
        $newname = str_replace('>', '', $newname);


        $newemail = str_limit($request->email, 21);
        $newemail = str_replace("*", "", $newemail);
        $newemail = str_replace("/", "", $newemail);
        $newemail = str_replace("'", "", $newemail);
        $newemail = str_replace('"', '', $newemail);
        $newemail = str_replace("<", "", $newemail);
        $newemail = str_replace('>', '', $newemail);




        if (starts_with($newphone, "9005"))
            $newphone = str_replace('9005', '905', $newphone);
        if (starts_with($newphone, "9090"))
            $newphone = str_replace('9090', '90', $newphone);
        if (starts_with($newphone, "05"))
            $newphone = '9'.$newphone ;

        if (starts_with($newphone, "905338") || starts_with($newphone, "905391") || starts_with($newphone, "905488") || starts_with($newphone, "905428") ) {
            return response()->json(0);
        }






        $ref = Cookie::get('ref');
        $callref = Cookie::get('callref');
        $utm = Cookie::get('utm');




        $post = [
            'name' => $newname,
            'phone' => $newphone,
            'email'   => $newemail,
            'formtype' => $request->formtype,
            'kaynak' => $request->kaynak,
            'lang' => $request->lang,
            'owner' => 2,
            'ownerid' => 2

        ];

        if (isset($callref))
            $post['callcenter'] = $callref;
        else
            $post['callcenter'] = 0;


        if (isset($ref))
            $post['ref'] = $ref;

        if (isset($utm))
            $post['utm'] = base64_encode(utf8_decode(urldecode($utm)));


        $agent = new Agent();
        $platform = "Desktop";
        if (!$agent->isDesktop())
            $platform = "Mobile";

        $userAgent = [
            'platform' => $platform,
            'device' => $agent->platform(),
            'browser ' => $agent->browser(),
            'ip ' => $this->getIp(),
        ];

        if (isset($userAgent))
            $post['agent'] = base64_encode(json_encode($userAgent));



        //find ExtensionID
        $extensionParams = [
            'number' => $newphone, //substr($newphone, -10),
            'bayi' => 11
        ];
        $extensionResponse =  json_decode(self::SendPost('https://cpgcall.com/api/getDatabyParams', $extensionParams), 1);
        if ($extensionResponse["status"] == 1) {
            $post['callcenter'] = $extensionResponse["callcenter"];
            $post['datacat'] = $extensionResponse["datacat"];

            if ($extensionResponse["utm"] != '') {

                if (!isset($utm)) {
                    $decodedjson = json_decode($extensionResponse["utm"], 1);
                    $post['utm'] = base64_encode(json_encode($decodedjson));
                } else {
                    $decodedjson = json_decode($extensionResponse["utm"], 1);
                    $webutm =  json_decode($utm, 1);
                    $margedarray = array_merge_recursive($webutm, $decodedjson);

                    $post['utm'] =  base64_encode(json_encode($margedarray));
                }
            }
        }




        $jsonResponse =  json_decode(self::SendPost('https://cp.frxcrm.com/api/register', $post), 1);

        if ($jsonResponse["status"] == 1) {
            $url = "https://www.cpgcall.com/api/datatocustomer";
            $fields = array('number' => $newphone, 'bayi' => 11);
            $ch = curl_init();
            $postvars = '';
            foreach ($fields as $key => $value) {
                $postvars .= $key . "=" . $value . "&";
            }
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);                //0 for a get request
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $v = curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);
        }

        return response()->json($jsonResponse["status"]);
    }


    public function post_SmsRegister(Request $request)
    {
        $newphone = $request->phone;
        $newphone = str_replace(" ", "", $newphone);
        $newphone = str_replace("-", "", $newphone);
        $newphone = str_replace("_", "", $newphone);
        $newphone = str_replace("+", "", $newphone);
        $newphone = str_replace("+", "", $newphone);
        $newphone = str_replace("(", "", $newphone);
        $newphone = str_replace(")", "", $newphone);
        $newphone = str_replace("*", "", $newphone);
        $newphone = str_replace("/", "", $newphone);
        $newphone = str_replace("'", "", $newphone);
        $newphone = str_replace('"', '', $newphone);
        $newphone = preg_replace("/[^0-9]/", "", $newphone);
        $unixCode = time() . '' . rand(1, 100);
        $post = [
            'mtem' => 0,
            'mid' => $unixCode,
            'phone'   => $newphone,
            'ownerid' => 2
        ];
        $jsonResponse =  self::SendPost('https://cp.frxcrm.com/api/registersms', $post);

        if($jsonResponse == 1 )
          return response()->json($unixCode);
        else
          return response()->json($jsonResponse);
    }

    public function post_SmsConfirm(Request $request)
    {
        $code = $request->code;
        $newcode = preg_replace("/[^0-9]/", "", $code);
        $secret = $request->secret;
        $post = [
            'code' => $newcode,
            'mid' => $secret,
            'owner' => 2
        ];
        $jsonResponse =  self::SendPost('https://cp.frxcrm.com/api/registerconfirm', $post);
        return response()->json($jsonResponse);
    }


    public function SendPost($url, $post)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function contactForm(Request $request)
    {
        if ($request->contentType == 3) {

            $utm = Cookie::get('utm');
            $utmEncode =  base64_encode(utf8_decode(urldecode($utm)));
            $source = 'lnd0';

            $newphone = $request->phone;
            $newphone = str_replace(" ", "", $newphone);
            $newphone = str_replace("-", "", $newphone);
            $newphone = str_replace("+", "", $newphone);
            $newphone = str_replace("+", "", $newphone);
            $newphone = str_replace("(", "", $newphone);
            $newphone = str_replace(")", "", $newphone);

            $url = "https://cpgcall.com/api/adddata";
            $ch = curl_init();
            $fields = array('name' => $request->name,  'number' => $newphone, 'email' => $request->email, 'source' => $source, 'utm' => $utmEncode);
            $postvars = '';
            foreach ($fields as $key => $value) {
                $postvars .= $key . "=" . $value . "&";
            }
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $v = curl_exec($ch);
            curl_close($ch);
            $sonucum = $v;
            $jsonRes = json_decode($sonucum);
            // içerik gönderimi son

            $return = false;

            if ($jsonRes->status == 1) {
                $return = true;
            } else {
                $return = false;
            }
            return response()->json($return);
        } else {

            $formdata = "name=" . $request->name .
                "&lastname=" . urlencode($request->lastname) .
                "&phone=" . urlencode($request->phone) .
                "&email=" . urlencode($request->email) .
                "&sub=" . urlencode($request->sub) .
                "&note=" . urlencode($request->note) .
                "&contentType=" . $request->contentType;

            $ch = curl_init('http://wpapi.frxcrm.com/api/contact');
            //$ch = curl_init('http://localhost:61887/api/contact');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $formdata);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

            // execute!
            $response = curl_exec($ch);
            curl_close($ch);

            $jsonResponse = json_decode($response, true);

            $return = true;

            if ($jsonResponse["Data"] == 0)
                $return = false;

            return response()->json($return);
        }
    }


    public function GetRateBar()
    {
        $apiservice = new ApiServices();
        $return = $apiservice->GetRateBarData();

        return response()->json($return);
    }

    public function GetRateSpreadData()
    {
        $apiservice = new ApiServices();
        $return = $apiservice->GetSpreadsymbolData();

        return response()->json($return);
    }

    public function GetSymbolDataOutside()
    {
        $apiservice = new ApiServices();
        $return = $apiservice->GetSymbolDataOutside();


        if (isset($return)) {
            return  response()->json($return['quoteResponse']['result']);
        }

        return response()->json('');
    }

    public function GetSymbolPricesOutside()
    {
        $apiservice = new ApiServices();
        $symbols = $apiservice->GetAllSwapData();
        $datas = $apiservice->GetSpreadsymbolData();

        $return = [];
        $rowcnt = 0;
        foreach ($symbols as $key => $topitem) {

            $return[$key]['CID'] = $topitem['CID'];
            foreach ($topitem['SwapData'] as $item) {

                $pariteID =   array_search($item['Symbol'], array_column($datas, 'SYMBOL'));

                $bid = 0;
                $ask = 0;

                if ($pariteID > 0) {

                    $bid =  $datas[$pariteID]['BID'];
                    $ask =  $datas[$pariteID]['ASK'];
                }

                $return[$key]['SwapData'][$rowcnt]['Value'] = $item['Value'];
                $return[$key]['SwapData'][$rowcnt]['Symbol'] = $item['Symbol'];
                $return[$key]['SwapData'][$rowcnt]['Bid'] = $bid;
                $return[$key]['SwapData'][$rowcnt]['Ask'] = $ask;

                $rowcnt = $rowcnt + 1;
            }
        }
        return response()->json(array_merge($return));
    }



    public function GetSpreadDataGroup($groupId)
    {
        $apiservice = new ApiServices();
        $return = $apiservice->GetSpreadDataGroup($groupId);

        return response()->json($return);
    }

    public function getChristmas()
    {


        $apiservice = new ApiServices();

        $data = self::masterData();
        $instrumentGroups = $apiservice->GetAllContent(0, 3, 0);


        $contentData = [
            'instrumentGroups' => $instrumentGroups

        ];

        $dataNew = array_merge($data, $contentData, self::seoTitles(38));
        return view("christmas")->with('data', $dataNew);
    }

    public function gettest()
    {
        return View::make('test');
    }

    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
    }
}
