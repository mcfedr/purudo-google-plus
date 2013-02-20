<?php
$html = file_get_contents(__DIR__ . '/perudo.html');
$xml = file_get_contents(__DIR__ . '/perudo.xml');
file_put_contents(__DIR__ . '/build/perudo.xml', str_replace('<![CDATA[]]>', "<![CDATA[\n$html\n]]>", $xml));
