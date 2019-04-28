<?php
function sadcode(){
echo "\n##############################\n";
echo "##  DNS LOOKUP BY VANGANS     ##\n";
echo "##    SADCODE | VANGANS       ##\n";
echo "################################\n";
}
if(!empty($argv[1])){
$url = $argv[1];
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_NOBODY,false);
curl_setopt($ch,CURLOPT_URL,'https://api.hackertarget.com/dnslookup/?q='.$url);
$dns = curl_exec($ch);
curl_close($ch);
sadcode();
$tampil = str_replace("error input invalid - enter IP or Hostname","DNS RECORD TIDAK DITEMUKAN !!!",$dns);
echo "\n========= YOUR RESULT !!!===========\n";
echo "\n".$tampil;
} else {
sadcode();
echo "\nphp index.php (URL)\n";
}
?>
