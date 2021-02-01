<?php
$arquivo = 'Arquivo_hydra'.'_'.date('d-m-Y').'.zip';
header ("Pragma: no-cache");
header ("Content-type: application/zip");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header("Expires: 0");
?>