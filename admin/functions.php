<?php

/**
 * @param $directory
 * @param string $crop_size
 * @param int $file_max_size
 * @return string
 */
function altworkUploader($directory, $crop_size = "175", $file_max_size = 10485760){
	global $_FILES, $config, $db;

	if (isset($_FILES["file"]) && is_uploaded_file($_FILES["file"]["tmp_name"]) && $_FILES["file"]["error"] == 0) {
	            
	    $file = $_FILES["file"]["tmp_name"];

	    $file_name = $_FILES['file']['name'];

	    $file_size = $_FILES['file']['size'];

	    $row['file'] = $file_name;

	    $row['size'] = $file_size;

	    $row['success'] = false;

	    $data = getimagesize($_FILES["file"]["tmp_name"]);

	    $image_type = $data[2];

	    if(!in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP))){

	        $row['error'] = "INVALID_IMAGE";

	        $buffer[] = $row;

	        echo json_encode($buffer);

	        die();

	    }

	    $width = $data[0];
	    
	    $height = $data[1];

	    if($width <= $crop_size or $height <= $crop_size ){
	            
	        $row['error'] = "MINIMUM_IMAGE_SIZE";

	        $buffer[] = $row;

	        echo json_encode($buffer);

	        die();

	    }

	    if(($_FILES['file']['size'] >= $file_max_size) || ($_FILES["file"]["size"] == 0)) {

	        $row['error'] = "MAX_FILE_SIZE_EXCEEDED";

	        $buffer[] = $row;

	        echo json_encode($buffer);

	        die();

	    }
	    
	    require_once INCLUDE_DIR . '/class/_class_thumb.php';

		$file_name = time() .  ".jpg";

		$thumb = new thumbnail( $_FILES["file"]["tmp_name"] );

		$thumb->crop($crop_size, $crop_size);
		
		$thumb->jpeg_quality( 90 );

		$thumb->save( ROOT_DIR . "/uploads/" . $directory . "/" . $file_name );

		$cover_url =$cover_url = "/uploads/" . $directory . "/" . $file_name;

	    return $cover_url;
	            
	}else die("File are not uploaded!");

}

/**
 * @param $value
 * @return array|string
 */
function stripslashes_deep($value){

	$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);

	return $value;
}

/**
 * @param int $categoryid
 * @param int $parentid
 * @param bool $nocat
 * @param string $sublevelmarker
 * @param string $returnstring
 * @return string
 */
function CategorySelection($categoryid = 0, $parentid = 0, $nocat = TRUE, $sublevelmarker = '', $returnstring = '') {
	global $cat, $cat_parentid, $member_id, $user_group, $mod;
	
	if( $parentid == 0 ) {
		if( $nocat ) $returnstring .= '<option value="0"></option>';
	} else {
		$sublevelmarker .= '&nbsp;&nbsp;&nbsp;&nbsp;';
	}
	
	if( isset( $cat_parentid ) ) {
		
		$root_category = @array_keys( $cat_parentid, $parentid );
		
		if( is_array( $root_category ) ) {
			
			foreach ( $root_category as $id ) {
				
				$category_name = $cat[$id];
									
					$color = "black";
										
					$returnstring .= "<option style=\"color: {$color}\" value=\"" . $id . '" ';
					
					if( is_array( $categoryid ) ) {
						foreach ( $categoryid as $element ) {
							if( $element == $id ) $returnstring .= 'SELECTED';
						}
					} elseif( $categoryid == $id ) $returnstring .= 'SELECTED';
					
					$returnstring .= '>' . $sublevelmarker . $category_name . '</option>';
				
				$returnstring = CategorySelection( $categoryid, $id, $nocat, $sublevelmarker, $returnstring );
			}
		}
	}
	
	return $returnstring;
}

/**
 * @param $file
 * @param $data
 */
function set_vars($file, $data) {
	
	$filename = ROOT_DIR . '/cache/admin/' . $file . '.php';
	
	$fp = fopen( $filename, 'wb+' );
	fwrite( $fp, serialize( $data ) );
	fclose( $fp );
	
	@chmod( $filename, 0666 );
}

/**
 * @param $file
 * @return bool|mixed
 */
function get_vars($file) {

	$filename = ROOT_DIR . '/cache/admin/' . $file . '.php';
	
	if( ! @filesize( $filename ) ) {
		return false;
	}
	
	return unserialize( file_get_contents( $filename ) );

}

/**
 * @param bool $id
 * @return string
 */
function get_groups($id = false) {
	global $user_group;
	
	$returnstring = "";
	
	foreach ( $user_group as $group ) {
		$returnstring .= '<option value="' . $group['id'] . '" ';
		
		if( is_array( $id ) ) {
			foreach ( $id as $element ) {
				if( $element == $group['id'] ) $returnstring .= 'SELECTED';
			}
		} elseif( $id and $id == $group['id'] ) $returnstring .= 'SELECTED';
		
		$returnstring .= ">" . $group['group_name'] . "</option>\n";
	}
	
	return $returnstring;

}

/**
 * @param $t
 * @param string $to
 * @return string
 */
function convert_unicode($t, $to = 'windows-1251') {
	$to = strtolower( $to );

	if( $to == 'utf-8' ) {
		
		return $t;
	
	} else {
		
		if( function_exists( 'iconv' ) ) $t = iconv( "UTF-8", $to . "//IGNORE", $t );
		else $t = "The library iconv is not supported by your server";
	
	}

	return $t;
}

/**
 * @param $name
 * @param $selected
 * @return string
 */
function makeCheckBox($name, $selected) {

	$selected = $selected ? "checked" : "";

	return "<input class=\"iButton-icons-tab\" type=\"checkbox\" name=\"$name\" value=\"1\" {$selected}>";

}

/**
 * @param $options
 * @param $name
 * @param $selected
 * @return string
 */
function makeDropDown($options, $name, $selected) {
	$output = "<select name=\"$name\" class=\"form-control\">\r\n";
	foreach ( $options as $value => $description ) {
		$output .= "<option value=\"$value\"";
		if( $selected == $value ) {
			$output .= " selected ";
		}
		$output .= ">$description</option>\n";
	}
	$output .= "</select>";
	return $output;
}

/**
 * @param null $str
 * @return null|string|string[]
 */
function getSlug($str = null)
  {
    if( null === $str ) {
      $str = $this->getTitle();
    }
    if( strlen($str) > 32 ) {
      $str = substr($str, 0, 32) . '...';
    }
    $str = preg_replace('/([a-z])([A-Z])/', '$1 $2', $str);
    $str = strtolower($str);
    $str = preg_replace('/[^a-z0-9-]+/i', '-', $str);
    $str = preg_replace('/-+/', '-', $str);
    $str = trim($str, '-');
    if( !$str ) {
      $str = '-';
    }
    return $str;
}

/**
 * @param $text
 * @param $chars_limit
 * @return string
 */
function shorter($text, $chars_limit)
{
    if (strlen($text) > $chars_limit)
    {
        $new_text = substr($text, 0, $chars_limit);
        $new_text = trim($new_text);
        return $new_text . "...";
    }
    else
    {
    return $text;
    }
}

/**
 * @param $string
 * @return mixed
 */
function htmlkarakter($string)
{
  $string = str_replace(array("&lt;", "&gt;", '&amp;', '&#039;', '&quot;','&lt;', '&gt;'), array("<", ">",'&','\'','"','<','>'), htmlspecialchars_decode($string, ENT_NOQUOTES));

    return $string;
 
}

/**
 * @param $string
 * @param int $len
 * @return bool|string
 */
function gen_uuid($string, $len=8)
{
	$hex = md5($string . "vlyrics.co");
	$pack = pack('H*', $hex);
	$uid = base64_encode($pack);
	$uid = preg_replace('/[^a-zA-Z 0-9]+/', "", $uid);
	if ($len<4)
		$len=4;
	if ($len>128)
		$len=128;
	while (strlen($uid)<$len)
		$uid = $uid . gen_uuid(22);
	return substr($uid, 0, $len);
}

/**
 * @param bool $cache_area
 */
function clear_cache($cache_area = false) {
	
	$fdir = opendir( ROOT_DIR . '/cache' );
	
	while ( $file = readdir( $fdir ) ) {
		if( $file != '.' and $file != '..' and $file != '.htaccess' and $file != 'admin' ) {
			
			if( $cache_area ) {
				
				if( strpos( $file, $cache_area ) !== false ) @unlink( ROOT_DIR . '/cache/' . $file );
			
			} else {
				
				@unlink( ROOT_DIR . '/cache/' . $file );
			
			}
		}
	}
}

/**
 * @param $url
 * @return array|bool|mixed|string|void
 */
function clean_url($url) {
	
	if( $url == '' ) return;
	
	$url = str_replace( "http://", "", strtolower( $url ) );
	if( substr( $url, 0, 4 ) == 'www.' ) $url = substr( $url, 4 );
	$url = explode( '/', $url );
	$url = reset( $url );
	$url = explode( ':', $url );
	$url = reset( $url );
	
	return $url;
}

/**
 * @return string
 */
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	}else{
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

/**
 * @param $alternative_link
 * @param $total
 * @param $per_pages
 * @return string|void
 */
function navigation($alternative_link, $total, $per_pages) {
	global $tpl, $config; 
	$alternative_link = $config['site_url'] . $alternative_link;
	if( $total < $per_pages ) return;
	if( isset( $_GET['p'] ) ) $page = intval( $_GET['p'] );
	if( !$page OR $page < 0 ) $page = 1;
	if( $page > 1 ) {
		$prev = $page - 1;
		$url = str_replace ("{page}", $prev, $alternative_link );
	} else {
		$no_prev = TRUE;
	}
	if( $per_pages ) {
		$enpages_count = @ceil( $total / $per_pages );
		$pages = "";
		if( $enpages_count <= 10 ) {
			for($j = 1; $j <= $enpages_count; $j ++) {
				
				if( $j != $page ) {
						$url = str_replace ("{page}", $j, $alternative_link );
						$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">$j</a></li> ";
				} else {
					$pages .= "<li class=\"active\"><a class=\"page-link\">$j</a></li> ";
				}
			}
		} else {
			$start = 1;
			$end = 10;
			if( $page > 0 ) {
				if( $page > 6 ) {
					$start = $page - 4;
					$end = $start + 8;
					if( $end >= $enpages_count ) {
						$start = $enpages_count - 9;
						$end = $enpages_count - 1;
						$nav_prefix = "";
					} else
						$url = str_replace ("{page}", $enpages_count, $alternative_link );
						$nav_prefix = "<li class=\"page-item\"><a class=\"page-link\">....</a></li>";
						$nav_prefix .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">$enpages_count</a></li>";
				}
			}
			if($page < 7) {
				$url = str_replace ("{page}", $enpages_count, $alternative_link );
				$nav_prefix = "<li class=\"page-item\"><a class=\"page-link\">....</a></li>";
				$nav_prefix .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">$enpages_count</a></li>";
			}
			if($start >= 2) {
					$url = str_replace ("{page}", "1", $alternative_link );

			}
			if($start > 3) {
					$url = str_replace ("{page}", "1", $alternative_link );
					$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">1</a></li>";
					$url = str_replace ("{page}", "2", $alternative_link );
					$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">2</a></li>";
					$url = str_replace ("{page}", "3", $alternative_link );
					$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">3</a></li>";
					$pages .= "<li class=\"page-item\"><a class=\"page-link\">....</a></li>";

			}

			if($start == 3) {
					$url = str_replace ("{page}", "1", $alternative_link );
					$pages = "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">1</a></li>";
					$pages .= "<li class=\"page-item\"><a class=\"page-link\">....</a></li>";

			}

			if($start == 4) {
				$url = str_replace ("{page}", "1", $alternative_link );
				$pages = "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">1</a></li>";
				$url = str_replace ("{page}", "2", $alternative_link );
				$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">2</a></li>";
				$pages .= "<li class=\"page-item\"><a class=\"page-link\">....</a></li>";

			}
			
			for($j = $start; $j <= $end; $j ++) {
				if( $j != $page ) {
						$url = str_replace ("{page}", $j, $alternative_link );
						$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">$j</a></li> ";
				} else {
					$pages .= "<li class=\"active\"><a class=\"page-link\">$j</a></li>";
				}
			}
			if( $page > ($enpages_count - 5) ) {
				$url = str_replace ("{page}", $enpages_count, $alternative_link );
				$nav_prefix = "";
				$url = str_replace ("{page}", $enpages_count, $alternative_link );
				if($page == $enpages_count){
					$pages .= "<li class=\"active\"><a class=\"page-link\">$enpages_count</a></li>";
				}else {
					$pages .= "<li class=\"page-item\"><a class=\"page-link\" href=\"" . $url . "\">$enpages_count</a></li>";
				}
			}
			if( $page != $enpages_count ) {
					$url = str_replace ("{page}", $enpages_count, $alternative_link );
					$pages .= $nav_prefix . "";
			} else
				$pages .= "";

		}
	}
	if( $page < $enpages_count ) {
		$next_page = $page + 1;
		$url = str_replace ("{page}", $next_page, $alternative_link );
	} else {
		$no_next = TRUE;
	}
	return $pages;
}

/**
 * @param $var
 * @return mixed|null|string|string[]
 */
function clear_url_dir($var) {
	if ( is_array($var) ) return "";

	$var = str_replace( ".php", "", $var );
	$var = trim( strip_tags( $var ) );
	$var = str_replace( "\\", "/", $var );
	$var = preg_replace( "/[^a-z0-9\/\_\-]+/mi", "", $var );
	return $var;

}

$domain_cookie = explode (".", clean_url( $_SERVER['HTTP_HOST'] ));
$domain_cookie_count = count($domain_cookie);
$domain_allow_count = -2;

if ( $domain_cookie_count > 2 ) {

	if ( in_array($domain_cookie[$domain_cookie_count-2], array('com', 'net', 'org') )) $domain_allow_count = -3;
	if ( $domain_cookie[$domain_cookie_count-1] == 'ua' ) $domain_allow_count = -3;
	$domain_cookie = array_slice($domain_cookie, $domain_allow_count);
}

$domain_cookie = "." . implode (".", $domain_cookie);

/**
 *
 */
define( 'DOMAIN', $domain_cookie );

/**
 * @param $name
 * @param $value
 * @param $expires
 */
function set_cookie($name, $value, $expires) {
	
	if( $expires ) {
		
		$expires = time() + ($expires * 86400);
	
	} else {
		
		$expires = FALSE;
	
	}
	
	if( PHP_VERSION < 5.2 ) {
		
		setcookie( $name, $value, $expires, "/", DOMAIN . "; HttpOnly" );
	
	} else {
		
		setcookie( $name, $value, $expires, "/", DOMAIN, NULL, TRUE );
	
	}
}

/**
 * @param $type
 * @param $message
 * @param $link
 * @return string
 */
function msg_box($type, $message, $link) {
	$msg = '<div id="msg_box" style="position: fixed;
    top: 50%;
    left: 50%;
    z-index: 1000;
    width: 200px;
    text-align: center;
    margin-left: -100px;
    height: 60px;
    margin-top: -30px;"><div class="alert alert-' . $type .'">' . $message . '</div></div>';
	$msg .= <<<HTML
<script>
$(document).ready(function() {
	setTimeout(function() {
	      $("#msg_box").fadeOut();
	      window.location = '{$config["admin_path"]}?{$link}';
	}, 1000);
	
});
</script>
HTML;

	return $msg;
}

$langtranslit = array(
'а' => 'a', 'б' => 'b', 'в' => 'v',
'г' => 'g', 'д' => 'd', 'е' => 'e',
'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
'и' => 'i', 'й' => 'y', 'к' => 'k',
'л' => 'l', 'м' => 'm', 'н' => 'n',
'о' => 'o', 'п' => 'p', 'р' => 'r',
'с' => 's', 'т' => 't', 'у' => 'u',
'ф' => 'f', 'х' => 'h', 'ц' => 'c',
'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
'ь' => '', 'ы' => 'y', 'ъ' => '',
'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
"ї" => "yi", "є" => "ye",

'А' => 'A', 'Б' => 'B', 'В' => 'V',
'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
'И' => 'I', 'Й' => 'Y', 'К' => 'K',
'Л' => 'L', 'М' => 'M', 'Н' => 'N',
'О' => 'O', 'П' => 'P', 'Р' => 'R',
'С' => 'S', 'Т' => 'T', 'У' => 'U',
'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
"Ї" => "yi", "Є" => "ye",
);

/**
 * @param $str
 * @return null|string|string[]
 */
function convert_vi_to_en($str) {
     $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);    
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
     $str = preg_replace("/(Đ)/", 'D', $str);
     return $str;
  }

/**
 * @param $var
 * @param bool $lower
 * @param bool $punkt
 * @return mixed|null|string|string[]
 */
function seo_text($var, $lower = true, $punkt = true) {
	global $langtranslit;
	
	if ( is_array($var) ) return "";

	$var = convert_vi_to_en($var);

	$var = str_replace(chr(0), '', $var);

	if (!is_array ( $langtranslit ) OR !count( $langtranslit ) ) {
		$var = trim( strip_tags( $var ) );

		if ( $punkt ) $var = preg_replace( "/[^a-z0-9\_\-.]+/mi", "", $var );
		else $var = preg_replace( "/[^a-z0-9\_\-]+/mi", "", $var );

		$var = preg_replace( '#[.]+#i', '.', $var );
		$var = str_ireplace( ".php", ".ppp", $var );

		if ( $lower ) $var = strtolower( $var );

		return $var;

	}
	
	$var = trim( strip_tags( $var ) );
	$var = preg_replace( "/\s+/ms", "-", $var );
	$var = str_replace( "/", "-", $var );

	$var = strtr($var, $langtranslit);
	
	if ( $punkt ) $var = preg_replace( "/[^a-z0-9\_\-.]+/mi", "", $var );
	else $var = preg_replace( "/[^a-z0-9\_\-]+/mi", "", $var );

	$var = preg_replace( '#[\-]+#i', '-', $var );
	$var = preg_replace( '#[.]+#i', '.', $var );

	if ( $lower ) $var = strtolower( $var );

	$var = str_ireplace( ".php", "", $var );
	$var = str_ireplace( ".php", ".ppp", $var );
	
	if( strlen( $var ) > 200 ) {
		
		$var = substr( $var, 0, 200 );
		
		if( ($temp_max = strrpos( $var, '-' )) ) $var = substr( $var, 0, $temp_max );
	
	}
	
	return $var;
}

?>
