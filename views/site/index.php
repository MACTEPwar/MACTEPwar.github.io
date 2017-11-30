<?php

require_once('./dom/simple_html_dom.php');

$this->title = 'My Yii Application';

$html = file_get_html('https://auto.ria.com/legkovie/audi/a6/');

$item = $html->find('div.content-bar.div.ticket-photo.a.photo-185x120');
//echo $news;
//var_dump($news[0]);
for ($i = 0;$i<count($item);$i++)
{
    echo $item[$i];
    echo $item[$i]->href.'<br><hr><br>';
    
}
?>
<div class="site-index">
    
</div>
