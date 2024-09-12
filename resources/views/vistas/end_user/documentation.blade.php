<?php
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: utf-8");
    header("Content-disposition: attachment; filename=\"" . asset('documentation.pdf'). "\"");
    readfile(asset('documentation.pdf'));
?>
