
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MetaTrader 5  {{CoInfo('SeosubFix')}}</title>
    <meta name="description" content="" />

  <style>ß
  body {
    margin: 0;           
}
.webterminal {
    display: block;      
    background: #000;
    border: none;         
    height: 100vh;     
    width: 100vw;
}
  </style>
</head>
<body>

<div id="webterminal" class="webterminal" style="width:100%;"></div>
</body>
</html>



 <script type="text/javascript" src="https://trade.mql5.com/trade/widget.js"></script> 
 <script type="text/javascript"> new MetaTraderWebTerminal( "webterminal", { version: 5, servers: ["KaleFX-MetaTrader5"], server: "KaleFX-MetaTrader5", demoAllServers: true, utmCampaign: "", utmSource: "www.kalefx.com", startMode: "create_demo", language: "{{  app()->getLocale() }}", colorScheme: "black_on_white" } ); </script>
