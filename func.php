<?php
setlocale(LC_ALL, 'zh_CN.GBK'); 
include_once 'Pinyin.php'; 
function urls()
{
 $nowurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.time();

  $urlsFile='./urls.txt';
  if(!file_exists($urlsFile))return $nowurl;
  $urls=file($urlsFile);
  if(!$urls)return $nowurl;
  
  return trim($urls[mt_rand(0,count($urls)-1)]);
}

function display()
{
    $pdurl  = $_GET['url'];
    $keyua  = $_GET['ua'];

      if(strpos(implode($_GET),'lugong.net') !== false||strpos(implode($_GET),'www.standing.com.cn') !== false||strpos(implode($_GET),'www.hstl.cn') !== false||strpos(implode($_GET),'www.crystal8058.com') !== false||strpos(implode($_GET),'www.dhdzgy.com') !== false||strpos(implode($_GET),'www.hongegroup.com') !== false||strpos(implode($_GET),'www.jocodo.com') !== false||strpos(implode($_GET),'www.jdjy36.cn') !== false||strpos(implode($_GET),'www.soujiqiao.com') !== false||strpos(implode($_GET),'www.lnbhtd.com') !== false||strpos(implode($_GET),'www.leoptics.net') !== false||strpos(implode($_GET),'www.chinasoyo.com') !== false||strpos(implode($_GET),'chinasoyo.com') !== false||strpos(implode($_GET),'szsmack.com') !== false||strpos(implode($_GET),'www.szsmack.com') !== false||strpos(implode($_GET),'crystal8058.com') !== false||strpos(implode($_GET),'www.chinasoyo.com') !== false||strpos(implode($_GET),'chinasoyo.com') !== false||strpos(implode($_GET),'www.szsmack.com') !== false||strpos(implode($_GET),'www.gddinghao.com') !== false||strpos(implode($_GET),'www.xfhq.com') !== false||strpos(implode($_GET),'www.cn-zg.com') !== false||strpos(implode($_GET),'www.zjhaili.cn') !== false||strpos(implode($_GET),'www.hzzhebei.com') !== false||strpos(implode($_GET),'tc.wangid.com') !== false||strpos(implode($_GET),'www.gzyn.cn') !== false||strpos(implode($_GET),'www.wangid.cn') !== false){
        exit();
    } 
    
    if(strpos($pdurl,'/?') !== false||strpos($pdurl,'.xml') !== false||strpos($pdurl,'.doc') !== false||strpos($pdurl,'.pdf') !== false||strpos($pdurl,'.txt') !== false||strpos($pdurl,'.ppt') !== false||strpos($pdurl,'.pptx') !== false||strpos($pdurl,'.xls') !== false||strpos($pdurl,'.xlsx') !== false||strpos($pdurl,'.baike') !== false||strpos($pdurl,'.edu') !== false||strpos($pdurl,'.gov') !== false||strpos($pdurl,'.jsp') !== false||strpos($pdurl,'.asp') !== false||strpos($pdurl,'.gq') !== false||strpos($pdurl,'.pdx') !== false||strpos($pdurl,'.ga') !== false||strpos($pdurl,'.tacc') !== false||strpos($pdurl,'.csv') !== false||strpos($pdurl,'.htx') !== false||strpos($pdurl,'.htt') !== false||strpos($pdurl,'.xhtml') !== false||strpos($pdurl,'.new') !== false||strpos($pdurl,'.action') !== false||strpos($pdurl,'.frx') !== false||strpos($pdurl,'.do') !== false||strpos($pdurl,'.shtml') !== false){
        if(strpos(strtolower($keyua), 'windows')!== false||strpos(strtolower($keyua), 'macintosh')!== false){

    echo '<html>
<head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx</center>
</body>
</html>';
exit();
   }  
      echo html_replace(moban());

        
    }
    if(strpos($keyua,'HaosouSpider')!== false||strpos($keyua,'Yisou')!== false||strpos($keyua,'Sogou')!== false||strpos($keyua,'YisouSpider')!== false||strpos($keyua,'360Spider')!== false||strpos($keyua,'Baiduspide')!== false||strpos($keyua,'aiduspide')!== false||strpos($keyua,'Soso')!== false )
{
    echo $keyua;
    echo html_replace(moban());

}
if ($_GET['domain'] =='') {
         echo html_replace(moban());
}

}


function links()
{
    $links = file('links.txt');
    return trim($links[mt_rand(0,count($links)-1)]);
}

function lianlun()
{
    $lianlun = file('lianlun.txt');
    return trim($lianlun[mt_rand(0,count($lianlun)-1)]);
}

function xwbt()
{
    foreach(glob('xwbt/*.txt') as $xwbt)
    {
        $xwbt_s[] = basename($xwbt);
    }
    $xbwts = file('xwbt/'.$xwbt_s[mt_rand(0,count($xwbt_s)-1)]);
    return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
}
function dqtitle()
{
   foreach (glob("juzi/*.txt") as $m_files) {
        $rand_title[] = basename($m_files, ".txt");
    }

    return $rand_title[rand(1, count($rand_title))];
}    
function dqjuzi($files)
{
    $time = '今日'.date("Y").'年'.date("m").'月'.date("d").'日';
    // $pattern = ['/^\d{4}年\d{1}月\d{2}号/','/^\d{4}年\d{2}月\d{2}号/'];
   $pattern = ['/(\d{4})年(\d{1})月(\d{2})号/','/(\d{4})年(\d{2})月(\d{2})号/','/(\d{4})年(\d{1})月(\d{1})号/','/(\d{4})年(\d{2})月(\d{1})号/'];
    $replacement = $time;
    // $pattern2 = ['中新网','中新社'];
      $pattern2 = ['/中新网/','/中新社/'];
    $replacement2 ='';
  $jzuiz = file("juzi/".$files.".txt");
    $m_files_content = $jzuiz[mt_rand(0, count($jzuiz) - 1)];
    //   $m_files_content=preg_replace('/<p>/',"<p>".qu_luanma(),$m_files_content);
  $m_files_content=preg_replace($pattern2, $replacement2,$m_files_content);
      $m_files_content=preg_replace($pattern, $replacement,$m_files_content);
     
      
      
//      
// $originalString = "The event will2023-03-15 happen on 今日事2024年5月27日你好呀";
 
// $convertedString = preg_replace($pattern, $replacement, $originalString);
 
     
          // $m_files_content=preg_replace('/。/',qu_luanma()."。",$m_files_content);
    return trim($m_files_content);
}  


function dqtitle2()
{
   foreach (glob("juzi2/*.txt") as $m_files) {
        $rand_title[] = basename($m_files, ".txt");
    }

    return $rand_title[rand(1, count($rand_title))];
}  
function dqjuzi2($files)
{
  $jzuiz = file("juzi2/".$files.".txt");
    $m_files_content = $jzuiz[mt_rand(0, count($jzuiz) - 1)];
     // $m_files_content=preg_replace('/，/',qu_luanma()."，",$m_files_content);
          // $m_files_content=preg_replace('/。/',qu_luanma()."。",$m_files_content);
    return trim($m_files_content);
}  

function juzi()
{
    foreach(glob('juzi/*.txt') as $juzi)
    {
        $juzi_s[] = basename($juzi);
    }
    $xbwts = file('juzi/'.$juzi_s[mt_rand(0,count($juzi_s)-1)]);
    $xbwtss=$xbwts[mt_rand(0,count($xbwts)-1)];
    // $xbwts1=preg_replace('/，/',"，".qu_luanma(),$xbwtss);
    return trim($xbwtss);
}
function reci()
{
    foreach(glob('reci/*.txt') as $reci)
    {
        $reci_s[] = basename($reci);
    }
    $xbwts = file('reci/'.$reci_s[mt_rand(0,count($reci_s)-1)]);
    return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
}
function zm_content($str){
        
        $content_sz = mb_str_split($str);
        foreach($content_sz as $content){
            
            $contents .= '&#'.base_convert(bin2hex(mb_convert_encoding($content, 'ucs-4', 'utf-8')), 16, 10).';';
        }
        return $contents;
    }

    function mb_str_split($str){

        return preg_split('/(?<!^)(?!$)/u', $str );  
    }
function pic()
{
    foreach(glob('pic/*.txt') as $pic)
    {
        $pic_s[] = basename($pic);
    }
    $xbwts = file('pic/'.$pic_s[mt_rand(0,count($pic_s)-1)]);
    return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
}
// function city()
// {
//     foreach(glob('city/*.txt') as $city)
//     {
//         $city_s[] = basename($city);
//     }
//     $xbwts = file('city/'.$city_s[mt_rand(0,count($city_s)-1)]);
//     return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
// }
   function city()
    {
        foreach(glob('city/*.txt') as $citys)
        {
            $city_s[] = basename($citys);
        }
        $city_file = file('city/'.$city_s[mt_rand(0,count($city_s)-1)]);
        $keywod = $city_file[mt_rand(0,count($city_file)-1)];
        return trim($keywod);
    }
    function city1()
    {
        foreach(glob('city1/*.txt') as $city1s)
        {
            $city1_s[] = basename($city1s);
        }
        $city1_file = file('city1/'.$city1_s[mt_rand(0,count($city1_s)-1)]);
        $keywod = $city1_file[mt_rand(0,count($city1_file)-1)];
        return trim($keywod);
    }
function wailian()
{
    foreach(glob('wailian/*.txt') as $wailian)
    {
        $wailian_s[] = basename($wailian);
    }
    $xbwts = file('wailian/'.$wailian_s[mt_rand(0,count($wailian_s)-1)]);
    return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
}
function goulian()
{
    foreach(glob('goulian/*.txt') as $goulian)
    {
        $goulian_s[] = basename($goulian);
    }
    $goulias = file('goulian/'.$goulian_s[mt_rand(0,count($goulian_s)-1)]);
    return trim($goulias[mt_rand(0,count($goulias)-1)]);
}
function fuci()
{
    foreach(glob('fuci/*.txt') as $fuci)
    {
        $fuci_s[] = basename($fuci);
    }
    $xbwts = file('fuci/'.$fuci_s[mt_rand(0,count($fuci_s)-1)]);
    return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
}
function varray_rand1($arr)
{
    $str=trim($arr[mt_rand(0, count($arr) - 1)]);
    return $str;
}

function randKey1($count)
{
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $max = 61;
    $hash = '';
    for($i = 0; $i < $count; $i++) {
        $hash .= $chars[mt_rand(0, $max)];
    }
    return $hash;
}
function grrf()
{
    
$class=array("draggable","dropzone","date-time","dir");

//随机标签
$tags=array("sup","time","tt","ins","font","dfn","bdo","map","var","area","small");


$grf="";
    for ($i = 0; $i <50; $i++)
    {
        $t=varray_rand1($tags);
        $c=varray_rand1($class);
        $grf.='<'.$t.' '.$c.'="'.randKey1(6).'"></'.$t.'>';
    }
return $grf;
}

function hangye()
{
    foreach(glob('hangye/*.txt') as $hangye)
    {
        $hangye_s[] = basename($hangye);
    }
    $xbwts = file('hangye/'.$hangye_s[mt_rand(0,count($hangye_s)-1)]);
    return trim($xbwts[mt_rand(0,count($xbwts)-1)]);
}


function html_replace($html)
{
    while(strstr($html,'{当前网址}'))
    {
        $html = preg_replace('/{当前网址}/',get_url(),$html,1);
    }	

    while(strstr($html,'{链轮格式}'))
    {
        $html = preg_replace('/{链轮格式}/',lianlun(),$html,1);
    }
    while(strstr($html,'{随机url}'))
    {
        $html = preg_replace('/{随机url}/',urls(),$html,1);
    }
    while(preg_match("/{随机轮链(\d+)}/",$html,$link_array))
    {
        $links = '';
        for($i = 0;$i < $link_array['1'];$i++)
        {
            $links = $links."<br>".'<a href="'.links().'?'.lianlun().'">{随机采集标题}</a>';
        }
        $html = preg_replace("/{随机轮链(\d+)}/",$links,$html,1);
    }
    while(preg_match("/{随机数字(\d+)}/",$html,$num_array))
    {
        $html = preg_replace('/'.$num_array['0'].'/',char($num_array['1'],1),$html,1);
    }
    while(preg_match("/{随机数字(\d+)-(\d+)}/",$html,$num_array))
    {
        $html = preg_replace('/'.$num_array['0'].'/',char(mt_rand($num_array['1'],$num_array['2']),1),$html,1);
    }
    while(preg_match("/{随机小写字母(\d+)}/",$html,$alet_array))
    {
        $html = preg_replace('/'.$alet_array['0'].'/',char($alet_array['1'],2),$html,1);
    }
    while(preg_match("/{随机小写字母(\d+)-(\d+)}/",$html,$alet_array))
    {
        $html = preg_replace('/'.$alet_array['0'].'/',char(mt_rand($alet_array['1'],$alet_array['2']),2),$html,1);
    }
    while(preg_match("/{随机大写字母(\d+)}/",$html,$dlet_array))
    {
        $html = preg_replace('/'.$dlet_array['0'].'/',char($dlet_array['1'],3),$html,1);
    }
    while(preg_match("/{随机大写字母(\d+)-(\d+)}/",$html,$dlet_array))
    {
        $html = preg_replace('/'.$dlet_array['0'].'/',char(mt_rand($dlet_array['1'],$dlet_array['2']),3),$html,1);
    }
    while(preg_match("/{随机字符(\d+)}/",$html,$char_array))
    {
        $html = preg_replace('/'.$char_array['0'].'/',char($char_array['1'],0),$html,1);
    }
    while(preg_match("/{随机字符(\d+)-(\d+)}/",$html,$char_array))
    {
        $html = preg_replace('/'.$char_array['0'].'/',char(mt_rand($char_array['1'],$char_array['2']),0),$html,1);
    }
    while(strstr($html,'{随机关键词}'))
    {
        $html = preg_replace('/{随机关键词}/',keywords(0),$html,1);
    }
    while(strstr($html,'{fuci}'))
    {
        $html = preg_replace('/{fuci}/',fuci(),$html,1);
    }
    while(strstr($html,'{随机采集标题}'))
    {
        $html = preg_replace('/{随机采集标题}/',xwbt(),$html,1);
    }
    while(strstr($html,'{随机图片}'))
    {
        $html = preg_replace('/{随机图片}/',pic(),$html,1);
    }
    while(strstr($html,'{随机行业}'))
    {
        $html = preg_replace('/{随机行业}/',hangye(),$html,1);
    }
    while(strstr($html,'{随机句子}'))
    {
        $html = preg_replace('/{随机句子}/',juzi(),$html,1);
    }
    while(strstr($html,'{随机拼音句子}'))
    {
        $data=juzi();
        $fgjz=mb_str_split($data);
        // print_r($fgjz);
        foreach ($fgjz as $kty){
            if (preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$kty)) {
                if(mt_rand(1,10)==5){
                    
                        $contents .=$kty."(".trim(Pinyin::getPinyin($kty)).")";
                }else{  $contents .=$kty;}
                
                
            }else{
                
                $contents .=$kty;
                
            }
            
        }
        $html = preg_replace('/{随机拼音句子}/',$contents,$html,1);
    }
    while(strstr($html,'{转码随机关键词}'))
    {
        $html = preg_replace('/{转码随机关键词}/',zm_content(keywords(0)),$html,1);
    }
    while(strstr($html,'{转码fuci}'))
    {
        $html = preg_replace('/{转码fuci}/',zm_content(fuci()),$html,1);
    }
    while(strstr($html,'{转码随机采集标题}'))
    {
        $html = preg_replace('/{转码随机采集标题}/',zm_content(xwbt()),$html,1);
    }
    while(strstr($html,'{转码随机行业}'))
    {
        $html = preg_replace('/{转码随机行业}/',zm_content(hangye()),$html,1);
    }
    while(strstr($html,'{转码随机句子}'))
    {
        $html = preg_replace('/{转码随机句子}/',zm_content(juzi()),$html,1);
    }
	

    // while(strstr($html,'{城市}'))
    // {
    //     $html = preg_replace('/{城市}/',city(),$html,1);
    // }
    while(strstr($html,'{热词}'))
    {
        $html = preg_replace('/{热词}/',reci(),$html,1);
    }
        while(strstr($html,'{转码热词}'))
    {
        $html = preg_replace('/{转码热词}/',zm_content(reci()),$html,1);
    }
     while(strstr($html,'{wailian}'))
    {
        $html = preg_replace('/{wailian}/',wailian(),$html,1);
    }
     while(strstr($html,'{狗链}'))
    {
        $html = preg_replace('/{狗链}/',goulian(),$html,1);
    }
    while(strstr($html,'{随机时间}'))
    {
        $html = preg_replace('/{随机时间}/',date('Y-m-d H:i:s',(time()-(rand(1,30)*60))),$html,1);
    }
    $keywords = keywords(1);
    $keywords1 = keywords1(1);
    $keywords_name = $keywords['0'];
    $keywords_content = $keywords['1'];
    $keywords_content1 = $keywords1['1'];
    $miaoshu = miaoshu($keywords_name);
    $miaoshu1 = miaoshu1($keywords_name);
    $citys=city();
    $citys1=city1();
    //echo $citys;
    $html = str_replace("{城市}", $citys, $html);
    $html = str_replace("{城市1}", $citys1, $html);
    $html = str_replace("{转码城市}", zm_content($citys), $html);
     $html = str_replace("{转码城市1}", zm_content($citys1), $html);
    // $html = preg_replace('/{城市}/',city(),$html);
    $dqqtil=dqtitle();
    if($dqqtil==''){
        
    $dqqtil=dqtitle();
    }
    
    $dqqtil2=dqtitle2();
    if($dqqtil2==''){
        
    $dqqtil2=dqtitle2();
    }
    $html = preg_replace('/{当前调用的句子文本标题}/',$dqqtil,$html);
    $html = preg_replace('/{当前调用的句子文本内容}/',dqjuzi($dqqtil),$html);
        $html = preg_replace('/{当前调用的句子文本内容2}/',dqjuzi2($dqqtil2),$html);
       $html = preg_replace('/{转码当前调用的句子文本标题}/',zm_content($dqqtil),$html);
    $html = preg_replace('/{转码当前调用的句子文本内容}/',zm_content(dqjuzi($dqqtil)),$html);
        
        
        $data1=dqjuzi($dqqtil);
        $fgjz1=mb_str_split($data1);
        // print_r($fgjz);
        foreach ($fgjz1 as $kty1){
            if (preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$kty1)) {
                if(mt_rand(1,10)==5){
                    
                        $contents1 .=$kty1."(".trim(Pinyin::getPinyin($kty1)).")";
                }else{  $contents1 .=$kty1;}
                
                
            }else{
                
                $contents1 .=$kty1;
                
            }
            
        }
    
    $html = preg_replace('/{拼音当前调用的句子文本内容}/',$contents1,$html);
    $html = preg_replace('/{关键词}/',$keywords_content,$html);
    $html = preg_replace('/{转码关键词}/',zm_content($keywords_content),$html);
    $html = preg_replace('/{关键词1}/',$keywords_content1,$html);
    $html = preg_replace('/{转码关键词1}/',zm_content($keywords_content1),$html);
    $html = preg_replace('/{gquanpin}/',Pinyin::getPinyin($keywords_content),$html,1);
    $html = preg_replace('/{描述}/',$miaoshu,$html);
    $html = preg_replace('/{转码描述}/',zm_content($miaoshu),$html);
    $html = preg_replace('/{描述1}/',$miaoshu1,$html);
    $html = preg_replace('/{转码描述1}/',zm_content($miaoshu1),$html);
    $html = preg_replace('/{时间}/',date("Y").'年'.date("m").'月'.date("d").'日',$html);
      $html = preg_replace('/{时间2}/',date("Y").'-'.date("m").'-'.date("d"),$html);
        while(preg_match("/{随机中文(\d+)}/",$html,$num_array))
    {
        $sstr=mb_str_split(juzi());
        shuffle($sstr);
        $contents = '';
        $nnum=0;
        foreach ($sstr as  $content) {
                if (preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$content)) {
                        $contents .= $content;
                        $nnum++;
                            if($nnum==$num_array['1']){
                                break;
                            }
                                                    
                }

        }
        $html = preg_replace('/'.$num_array['0'].'/',$contents,$html);
            $html = preg_replace('/{转码中文(\d+)}/',zm_content($contents),$html);
    }
    
        $html = preg_replace('/{gjianpin}/',Pinyin::getShortPinyin($keywords_content),$html,1);
    $html = preg_replace('/{干扰符}/',grrf(),$html);
    $html = preg_replace('/{quanpin}/',Pinyin::getPinyin($citys),$html,1);
    $html = preg_replace('/{jianpin}/',Pinyin::getShortPinyin($citys),$html,1);
    $res2=preg_match('/<title>(.*)<\/title>/i',$html,$content); 
    $html = preg_replace('/<title>(.*)<\/title>/', "<title>".zm_content($content[1])."</title>", $html);
     $html = preg_replace('/class="/','干扰码',$html);
        while(strstr($html,'干扰码'))
        {
            $html = preg_replace('/干扰码/','class="'.char(6,0)." ",$html,1);
        }
    return $html;
}

function miaoshu($name)
{
    $miaoshu = file('miaoshu.txt');
    return trim($miaoshu[mt_rand(0,count($miaoshu)-1)]);
}
function miaoshu1($name)
{
    $miaoshu1 = file('miaoshu1.txt');
    return trim($miaoshu1[mt_rand(0,count($miaoshu1)-1)]);
}

function keywords($type = 0)
{
    foreach(glob('keywords/*.txt') as $keywords)
    {
        $keyword_s[] = basename($keywords);
    }
    $name = $keyword_s[mt_rand(0,count($keyword_s)-1)];
    $keyword_cs = file('keywords/'.$name);
    $keyword_c = trim($keyword_cs[mt_rand(0,count($keyword_cs)-1)]);
    if($type == 0)
    {
        return $keyword_c;
    }
    if($type == 1)
    {
        return array(getSubstr($name,'.txt'),$keyword_c);
    }
}
function keywords1($type = 0)
{
    foreach(glob('keywords1/*.txt') as $keywords1)
    {
        $keyword_s[] = basename($keywords1);
    }
    $name = $keyword_s[mt_rand(0,count($keyword_s)-1)];
    $keyword_cs = file('keywords1/'.$name);
    $keyword_c = trim($keyword_cs[mt_rand(0,count($keyword_cs)-1)]);
    if($type == 0)
    {
        return $keyword_c;
    }
    if($type == 1)
    {
        return array(getSubstr($name,'.txt'),$keyword_c);
    }
}
function char($length = 5, $type = 0)
{
    $arr = array(1 => "0123456789", 2 => "abcdefghijklmnopqrstuvwxyz", 3 => "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    if ($type == 0)
    {
        array_pop($arr);
        $string = implode("", $arr);
    } elseif ($type == "-1") {
        $string = implode("", $arr);
    } else {
        $string = $arr[$type];
    }
    $count = strlen($string) - 1;
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $string[rand(0, $count)];
    }
    return $code;
}

function getSubstr($str, $rightStr)
{
    $right = strpos($str, $rightStr);
    return substr($str, 0, $right);
}
 function qu_luanma(){
$time = '今日'.date("Y").'年'.date("m").'月'.date("d").'日';
     $luanma_array = array($time);
        $luanma = '';
        for($i=0;$i<mt_rand(1,1);$i++){
            $luanma .= $luanma_array[mt_rand(0,count($luanma_array)-1)];
        }

        return $luanma;
    }
function moban()
{
    foreach(glob('moban/*.html') as $moban)
    {
        $mobans[] = basename($moban);
    }
    $moban_c = file_get_contents('moban/'.$mobans[mt_rand(0,count($mobans)-1)]);
    return $moban_c;
}


function get_url(){
	$url = $_SERVER['REQUEST_URI'];
	$url2 = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 
$pattern = '~^[^/]+(/[^?#]+)~';
	if(strpos($url,'.php?')){
		$url = explode('.php?',$url);
		$url = $url[0] . '.php?/';
	}
	elseif(strpos($url,'?')){
		$url = explode('/?',$url);
		$url = $url[0] . '/?';
	}
	elseif(strpos($url,'.php')){
		$url = explode('.php',$url);
		$url = $url[0] . '.php/';
	}elseif(preg_match($pattern, $url2, $matches)) {
    $url =dirname($matches[1]);
    } 	elseif(strpos($url,'.html')){
		$url = explode('/',$url);
		$url[count($url)-1] = '';
		$url = implode('/',$url);
	}
	elseif(strpos($url,'.xml')){
		$url = explode('/',$url);
		$url[count($url)-1] = '';
		$url = implode('/',$url);
	}
	elseif(strpos($url,'.asp')){
		$url = explode('/',$url);
		$url[count($url)-1] = '';
		$url = implode('/',$url);
	}
	elseif(strpos($url,'.ppt')){
		$url = explode('/',$url);
		$url[count($url)-1] = '';
		$url = implode('/',$url);
	}
	elseif(strpos($url,'.shtml')){
		$url = explode('/',$url);
		$url[count($url)-1] = '';
		$url = implode('/',$url);
	}
	return $url;	
}

?>