<?php
ob_start();
header("Content-Type:text/xml;Charset=utf-8");
$sitemap = $list->showall();
?>
<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach($sitemap as $url){
echo "<url><loc>".host.$url.".html</loc></url>";
}
?>
</urlset>
<?php
ob_end_flush();
?>
