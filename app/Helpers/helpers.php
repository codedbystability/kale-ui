<?php

use PhpParser\Node\Stmt\TryCatch;
use  \App\Services\ApiServices;

function GetLangName()
{

  $returnVal = "";
  try {
    if (app()->getLocale() == 'tr')
      $returnVal = "Türkçe";
    if (app()->getLocale() == 'en')
      $returnVal = "English";
    if (app()->getLocale() == 'de')
      $returnVal = "German";
    if (app()->getLocale() == 'es')
      $returnVal = "Spanish";
    if (app()->getLocale() == 'fr')
      $returnVal = "French";
    if (app()->getLocale() == 'it')
      $returnVal = "Italian";
    if (app()->getLocale() == 'it')
      $returnVal = "Italian";
    if (app()->getLocale() == 'ru')
      $returnVal = "Russian";
  } catch (\Throwable $th) {
    $returnVal = "";
  }
  return $returnVal;
}

function LangValue($key)
{

  $returnVal = "";
  try {
    $apiservice = ApiServices();
    $langValues = $apiservice->GetLangValues();
    $returnVal = $langValues[$key];
  } catch (\Throwable $th) {
    $returnVal = "";
  }
  return $returnVal;
}


function CoInfo($key)
{

  $returnVal = "";
  try {
    $apiservice = new ApiServices();
    $companyValues = $apiservice->GetCompanyInfo();

    $returnVal = $companyValues[$key];
  } catch (\Throwable $th) {
    $returnVal = "";
  }

  return $returnVal;
}

function GetItemsforMenu($mid)
{
  $apiservice = new ApiServices();
  $returnValues = $apiservice->GetAllContent(0, $mid, 0);

  try {

    return $returnValues;
  } catch (\Throwable $th) {
    return null;
  }
}


function GetInstrumentforMegaMenu()
{

  try {
    $apiservice = new ApiServices();
    $returnValues = $apiservice->GetInstrumentsForMenu();


    $langList = $apiservice->GetLangList();
    $corperateList = $apiservice->GetAllContent(0, 2, 0);
    $instrumentsList = $apiservice->GetInstrumentsForMenu();
    $infobankList = $apiservice->GetAllContent(0, 1, 0);
    $staticpageList = $apiservice->GetAllContent(0, 6, 0);

    $corperateKey = array_search(16, array_column($corperateList, 'ID'));
    $contactKey = array_search(19, array_column($corperateList, 'ID'));
    $infoBankKey = array_search(20, array_column($infobankList, 'ID'));

    $menuCorporate = $corperateList[$corperateKey];
    $menucontact = $infobankList[$corperateKey];


    $data = [
      'langlist' => $langList,
      'corperateList' => $corperateList,
      'instrumentsList' => $instrumentsList,
      'infobankList' => $infobankList,
      'staticpageList' => $staticpageList,
      'menuCorporate' => $menuCorporate,
      'menucontact' => $menucontact
    ];


    Debugbar::info($data);

    return $returnValues;
  } catch (\Throwable $th) {
    return null;
  }
}


function GetLangList()
{
  $apiservice = ApiServices();
  $returnValues = $apiservice->GetLangList();

  try {

    return $returnValues;
  } catch (\Throwable $th) {
    return null;
  }
}


function localizeURL($url)
{
  return LaravelLocalization::localizeURL($url);
}

function lastspaceBr($txt)
{

  $subject = $txt;
  $search = ' ';
  $replace = "<br />";

  $pos = strrpos($subject, $search);
  if ($pos !== false) {
    $subject = substr_replace($subject, $replace, $pos, strlen($search));
  }
  return $subject;

}
