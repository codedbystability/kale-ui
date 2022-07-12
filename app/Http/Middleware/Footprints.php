<?php

namespace App\Http\Middleware;

use App\Services\ApiServices;
use Closure;
use Cookie;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\TryCatch;

class Footprints
{


    protected $request;


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->request = $request;
        //$this->checkAlias();

        if (!$this->hasCookie('ref')) {
            $ref = $request->ref;
            if (isset($ref)) {
                $this->setCookie('ref', $ref, (60 * 24 * 15));
            }
        }

        if (!$this->hasCookie('callref')) {
            $callref = $request->callref;
            if (isset($callref)) {
                $this->setCookie('callref', $callref, (60 * 24 * 15));
            }
        }

        if (!$this->hasCookie('utm')) {
            $utm = $this->getUTM();
            if ($utm != "") {
                $this->setCookie('utm', $utm, (60 * 24 * 15));
            }
        }



        return $next($request);
    }


    protected function getUTM()
    {
        $parameters = ['utm_source', 'utm_campaign', 'utm_medium', 'utm_term', 'utm_content', 'utm_site'];
        $utm = [];
        foreach ($parameters as $parameter) {
            if ($this->request->has($parameter)) {
                $utm[$parameter] = $this->request->input($parameter);
            }
        }

        if (!empty($utm))
            return json_encode($utm);
        else
            return "";
    }

    protected function setCookie($key, $contet, $time)
    {
        return Cookie::queue(Cookie::make($key, $contet, $time));
    }

    protected function hasCookie($cookie_name)
    {
        $cookie_exist = Cookie::get($cookie_name);
        return ($cookie_exist) ? true : false;
    }

    protected function checkAlias()
    {


        $apiservice = new ApiServices();


        $url =  $this->request->root();

        try {
            preg_match("/^(https|http|ftp):\/\/(.*?)\//", "$url/", $matches);
            $parts = explode(".", $matches[2]);
            $tld = array_pop($parts);
            $host = array_pop($parts);
            if (strlen($tld) == 2 && strlen($host) <= 3) {
                $tld = "$host.$tld";
                $host = array_pop($parts);
            }

            $domain = strtolower("$host.$tld");

            $domainlist = $apiservice->GetAliasList();
            $filtered = collect($domainlist)
                ->filter(function ($event) use ($domain) {
                    return $event['Name'] == $domain;
                })->first();

            $current = collect($domainlist)
                ->filter(function ($event) use ($domain) {
                    return $event['StatusID'] == 3;
                })->first();

            $redirectURL = "";

            if($domain =='0.1:8000')
            return true;

            if ($filtered == null)
                $redirectURL = "google.com";
            else if ($filtered["Name"] == $current["Name"]) {
                return true;
            } elseif ($filtered["StatusID"] === 1) {
                $redirectURL = $current["Name"];
            } elseif ($filtered["StatusID"] == 2) {
                $redirectURL = "google.com";
            } else if ($filtered["StatusID"] === 0) {
                $redirectURL = "google.com";
            } else {
                $redirectURL = "google.com";
            }
        } catch (\Throwable $th) {
            $redirectURL = "google.com";
        }

       $pathsub = $this->request->getPathInfo();

       if(isset($pathsub))
       $redirectURL =$redirectURL.$pathsub;

        $redirectURL = "https://" . $redirectURL;
        //header("HTTP/1.1 301 Moved Permanently");
        header("Location: $redirectURL", true, 301);
        exit();
        die();


    }
}
