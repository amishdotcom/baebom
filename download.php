<?php
/**
 * 2018 NiNaCoder
 * @author: NiNaCoder SA <ninacoder2510@gmail.com>
 * © 2018 NiNaCoder https://ninacoder.com
 * International Registered Trademark & Property of NiNaCoder
 */

require_once (__DIR__ . '/includes/init.php');

use Dompdf\Dompdf;

if(isset($_REQUEST['hash'])) $hash = $_REQUEST['hash'];

if(isset($_REQUEST['type'])) $type = $_REQUEST['type'];

$lyrics = $db->super_query('SELECT id, title, artist, lyrics FROM ninacoder_lyrics WHERE hash = "'.$hash.'"');

if( ! $lyrics['id'] ) {

    die( "HTTP/1.0 404 Not Found" );

}

$lyrics = stripslashes_deep($lyrics);

$artisturl = $row['search_by_artist'] = search_url($lyrics['artist']);

$urlprovided = $config['site_url'];

$htmlText = 'Lyrics provided by ' . $urlprovided . '<br /><br />---' . $lyrics['title'] . '---<br />--' . $lyrics['artist'] . '--<br /><br />' . nl2br($lyrics['lyrics']);

if($type == "text") {

	$db->query("UPDATE ninacoder_downloads SET text = text + 1");

    require_once(ROOT_DIR . "/vendor/Jevon/Html2Text.php");

    require_once(ROOT_DIR . "/vendor/Jevon/Html2TextException.php");

    $htmlToText = Html2Text\Html2Text::convert($htmlText);

    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
    header("Content-type: text");
    header('Content-Disposition: attachment; filename="' . $lyrics['title'] . ' - ' . $lyrics['artist'] . ' lyrics.txt"');
    header("Content-Transfer-Encoding: binary");

    echo $htmlToText;

}elseif($type == "pdf") {

	$db->query("UPDATE ninacoder_downloads SET pdf = pdf + 1");

    require_once(ROOT_DIR . '/vendor/smarty/Smarty.class.php');

    $smarty = new Smarty;

    $smarty->assign('lyrics', $lyrics);

    $smarty->assign('urlprovided', $urlprovided);

    $htmlText = $smarty->fetch('pdf.tpl');

    require_once ROOT_DIR . "/vendor/dompdf/autoload.inc.php";
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();

    $dompdf->loadHtml( $htmlText );

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream($lyrics['title'] ." - " . $lyrics['artist'] . " lyrics.pdf");

}elseif ($type == "word"){

	$db->query("UPDATE ninacoder_downloads SET word = word + 1");

    require_once(ROOT_DIR . '/vendor/smarty/Smarty.class.php');

    $smarty = new Smarty;

    $smarty->assign('lyrics', $lyrics);

    $smarty->assign('urlprovided', $urlprovided);

    $htmlText = $smarty->fetch('word.tpl');

    require_once(ROOT_DIR . '/vendor/nina/html2word/class.php');

    $htmltodoc = new html2doc();

    $htmltodoc->createDoc($htmlText, $lyrics['title'] ." - " . $lyrics['artist'] . " lyrics",true);

}

$db->close ();

?>
