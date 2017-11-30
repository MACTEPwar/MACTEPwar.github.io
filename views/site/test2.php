<?php

require_once('./dom/simple_html_dom.php');
$xml = simplexml_load_file('http://rss.cnn.com/rss/edition_sport.rss');
$img_c = 1;
foreach ($xml->xpath('//item') as $item)
{
$html = file_get_html($item->guid);
$title = array_shift($html->find('title'))->innertext;
echo '<h3>'.$title.'</h3><br>';
$resourse = $html->find('img.media__image');
if ($resourse[$img_c]!=null) $resourse[$img_c]->width = '40%';
echo $resourse[$img_c].'<br><hr>';
$img_c = 1;
}