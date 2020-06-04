<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('asset_path')){
	function asset_path($nom=''){
		return FCPATH . 'assets/' . str_replace('\\', '/', trim(trim($nom), '/'));
	}
}

if ( ! function_exists('css_url')) {
    function css_url($nom) {
        return base_url() . 'assets/css/' . $nom . '.css';
    }
}
if ( ! function_exists('admin_css')) {
    function admin_css($nom) {
        return base_url() . 'assets/assets/css/' . $nom .'.css';
    }
}
if ( ! function_exists('admin_js')) {
    function admin_js($nom) {
        return base_url() . 'assets/assets/js/' . $nom .'.js';
    }
}
if ( ! function_exists('admin_img_js')) {
    function admin_img_js($nom) {
        return base_url() . 'assets/assets/images/' . $nom;
    }
}
if ( ! function_exists('js_url')) {
    function js_url($nom) {
        return base_url() . 'assets/js/' . $nom . '.js';
    }
}
if ( ! function_exists('img_url')) {
    function img_url($nom) {
        return base_url() . 'assets/images/' . $nom;
    }
}
if ( ! function_exists('document_url')) {
    function document_url($nom) {
        return base_url() . 'assets/documents/' . $nom;
    }
}
if ( ! function_exists('img')) {
    function img($nom, $alt = '') {
        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
    }
}
if ( ! function_exists('json_url')) {
    function json_url($nom) {
        return base_url() . 'index.php/assets/json/' . $nom . '.json';
    }
}
if ( ! function_exists('upload_url')) {
    function upload_url($nom) {
        return base_url() . 'index.php/assets/uploads/' . $nom;
    }
}
if ( ! function_exists('font_url')) {
    function font_url($nom) {
        return base_url() . 'fonts/' . $nom;
    }
}
if ( ! function_exists('permalink'))
{
    /**
     *
     * @param string $str La chaine à permalinker
     * @param array $replace Les chaine à remplqcer
     * @param string $delimiter Le delimiteur
     **/
    function permalink($str, array $replace=array(), $delimiter="-") {
        if(!$replace And is_array($replace)) {
            $str = str_replace((array)$replace, ' ', $str);
        }
        $a = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ї','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','Ā','ā','Ă','ă','Ą','ą','Ć','ć','Ĉ','ĉ','Ċ','ċ','Č','č','Ď','ď','Đ','đ','Ē','ē','Ĕ','ĕ','Ė','ė','Ę','ę','Ě','ě','ё','Ĝ','ĝ','Ğ','ğ','Ġ','ġ','Ģ','ģ','Ĥ','ĥ','Ħ','ħ','Ĩ','ĩ','Ī','ī','Ĭ','ĭ','Į','į','İ','ı','ї','Ĳ','ĳ','Ĵ','ĵ','Ķ','ķ','Ĺ','ĺ','Ļ','ļ','Ľ','ľ','Ŀ','ŀ','Ł','ł','Ń','ń','Ņ','ņ','Ň','ň','ŉ','Ō','ō','Ŏ','ŏ','Ő','ő','Œ','œ','Ŕ','ŕ','Ŗ','ŗ','Ř','ř','Ś','ś','Ŝ','ŝ','Ş','ş','Š','š','Ţ','ţ','Ť','ť','Ŧ','ŧ','Ũ','ũ','Ū','ū','Ŭ','ŭ','Ů','ů','Ű','ű','Ų','ų','Ŵ','ŵ','Ŷ','ŷ','Ÿ','Ź','ź','Ż','ż','Ž','ž','ſ','ƒ','Ơ','ơ','Ư','ư','Ǎ','ǎ','Ǐ','ǐ','Ǒ','ǒ','Ǔ','ǔ','Ǖ','ǖ','Ǘ','ǘ','Ǚ','ǚ','Ǜ','ǜ','ϋ','Ǻ','ǻ','Ǽ','ǽ','Ǿ','ǿ','΄','ό','Α','ϊ','ฺB','Η','Ḩ','ā','ţ','ḯ','ố','ạ','ẖ','ộ','Ḩ','ḩ','H̱');
        $b = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y','A','a','A','a','A','a','C','c','C','c','C','c','C','c','D','d','D','d','E','e','E','e','E','e','E','e','E','e','e','G','g','G','g','G','g','G','g','H','h','H','h','I','i','I','i','I','i','I','i','I','i','i','IJ','ij','J','j','K','k','L','l','L','l','L','l','L','l','l','l','N','n','N','n','N','n','n','O','o','O','o','O','o','OE','oe','R','r','R','r','R','r','S','s','S','s','S','s','S','s','T','t','T','t','T','t','U','u','U','u','U','u','U','u','U','u','U','u','W','w','Y','y','Y','Z','z','Z','z','Z','z','s','f','O','o','U','u','A','a','I','i','O','o','U','u','U','u','U','u','U','u','U','u','u','A','a','AE','ae','O','o','','o','a','i','b','h','h','a','t','i','o','a','h','o','h','h','h');
        $clean = str_replace($a, $b, $str);
        return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', $delimiter, ''), $clean));
    }
}
if ( ! function_exists('excerpt'))
{
    function excerpt($string,$limit=400)
    {
        $ret = substr(strip_tags($string),0,$limit);
        $dash = (strlen($string)>$limit)?"...":"";
        return $ret.$dash;
    }
}
if ( ! function_exists('breadcrumb')) {
    function breadcrumb($data)
    {
        ?>
        <ol class="breadcrumb">
            <?php
            $i = 0;
            foreach ($data as $label => $url) {
                if ($i < count($data) - 1) {
                    ?>
                    <li class="breadcrumb-item"><a href="<?php echo $url ?>"><?php echo $label ?></a></li>
                    <?php
                } else {
                    ?>
                    <li class="breadcrumb-item active"><?php echo $label ?></li>
                    <?php
                }
                $i++;
            }
            ?>
        </ol>
        <?php
    }
}
