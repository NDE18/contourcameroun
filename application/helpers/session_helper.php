<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();


if(!function_exists('session_data'))
{
    function session_data($data = '')
    {
        if(!$data)
        {
            return $_SESSION;
        }
        elseif(is_string($data) OR (is_int($data) And $data>=0))
        {
            return isset($_SESSION[$data])? $_SESSION[$data] : NULL;
        }
        elseif(is_array($data))
        {
            $result = array();
            foreach($data as $value)
            {
                $result[$value] = isset($_SESSION[$data])? $_SESSION[$data] : NULL;
            }
            return $result;
        }
        return NULL;
    }
}

if(!function_exists('set_session_data'))
{
    function set_session_data(array $data = array())
    {
        if(is_array($data))
        {
            foreach($data as $key=>$value)
            {
                $_SESSION[$key] = $value;
            }
        }
    }
}

if(!function_exists('unset_session_data'))
{
    function unset_session_data($data='')
    {
        if(!$data)
        {
            if(isset($_SESSION))
            {
                foreach ($_SESSION as $key => $value)
                {
                    unset($_SESSION[$key]);
                }
                unset($_SESSION);
            }
        }
        if(is_string($data))
        {
            if(isset($_SESSION[$data])) unset($_SESSION[$data]);
        }
        if(is_array($data))
        {
            foreach($data as $value)
            {
                if(isset($_SESSION[$value])) unset($_SESSION[$value]);
            }
            if(isset($_SESSION)) unset($_SESSION);
        }
    }
}

if(!function_exists('session_data_isset'))
{
    function session_data_isset($data = '')
    {
        if(!$data)
        {
            return isset($_SESSION);
        }
        elseif(is_string($data) OR (is_int($data) And $data>=0))
        {
            return isset($_SESSION[$data]);
        }
        elseif(is_array($data))
        {
            $result = $data[0];
            if(count($data) != 1)
            {
                array_shift($data);
            }
            else
            {
                $data = $data[0];
            }

            return (session_data_isset($result) And session_data_isset($data));
        }
        return false;
    }
}

if(!function_exists('set_flash_data'))
{
    function set_flash_data($data)
    {
        $_SESSION['flash'] = $data;
    }
}

if(!function_exists('get_flash_data'))
{
    function get_flash_data()
    {
        if(session_data_isset('flash')) {
            $val = $_SESSION['flash'];
            unset_session_data('flash');
            return $val;
        }
        return null;
    }
}

if(!function_exists('protected_session')){
    /**
     * @param array $uri
     * @param array $validGrade
     */
    function protected_session(array $uri = array('', ''), $validGrade = ADMIN){
        $unconnect = 1;
        $connect = 0;

        if(!session_data('connect')){
            if($uri[$unconnect]){
                if(in_array(strtolower($uri[$unconnect]),array('404_error', '404', 'show_404'))) {
                    show_404();
                }elseif($uri[$unconnect]===true Or in_array(strtolower($uri[$unconnect]),array())) {
                    redirect();
                }
                redirect($uri[$unconnect]);
            }
        }
        else{
            if(is_string($validGrade)) $validGrade = trim(trim(explode('|', $validGrade)), '|');
            elseif (is_numeric($validGrade))$validGrade = array((int)$validGrade);
            else $validGrade = (array)$validGrade;

            if(!in_array(ADMIN, $validGrade))$validGrade[]=ADMIN;

            if($uri[$connect]){
                if($uri[$connect]===true Or in_array(strtolower($uri[$connect]),array())) {
                    redirect();
                }
                redirect($uri[$connect]);
            }elseif(!in_array(session_data('grade'), $validGrade)) {
                concours_error("Désolé! La page demand&eacute;e n'existe pas...");
            }
        }
    }
}

if(!function_exists('role_tostring')){
    function role_tostring ($role){
        $table='role_'.strtolower(session_data('lang'));
        $role_fr = array(VST=>"Visiteur", CDT=>"Candidat", ADMIN=>"Administrateur");
        $role_en = array(VST=>"Visitor", CDT=>"Candidate", ADMIN=>"Administrator");
        return ${$table}[$role];
    }
}

if(!function_exists('concours_error')){
    function concours_error ($error_texte){
        show_error($error_texte,ACCESS_REFUSE,"Erreur lors du traitement de la requ&ecirc;te");
    }
}


if(!function_exists('is_url')){
    function is_url($text=''){
        if($text And is_string($text)){
            $test = array(base_url(), 'http:', 'https:', 'ftp:', 'www');
            foreach ($test as $value) {
                if(strpos($text, $value)===0)
                    return true;
            }
        }
        return false;
    }
}

if(!function_exists('session_protected'))
{
    function session_protected($grade)
    {
        if (session_data_isset('grade') And session_data('grade')==$grade) return true;
        return false;
    }
}

if(!function_exists('is_vowels'))
{
    function is_vowels($texte = '')
    {
        if (in_array(strtoupper(str_split($texte)[0]), str_split('AEIOUY'))) return true;
        return false;
    }
}

if(!function_exists('array_to_str')){
    function array_to_str(array $array = [], $prefix = '', $suffix = '', $separateur = ',', $last_separateur = 'et')
    {
        $string = '';
        $i = 1;
        $nb = count($array);
        if ($nb == $i) {
            $string .= $prefix . array_shift($array) . $suffix;
        } else {
            foreach ($array as $item) {
                if ($i != $nb) {
                    $string .= $prefix . $item . $suffix . (($nb == $i+1)?(' '.trim($last_separateur)):trim($separateur)).' ';
                } else {
                    $string .= $prefix . $item . $suffix;
                }
                $i++;
            }
        }

        return $string;
    }
}

if(!function_exists('array_object_to_str')){
    function array_object_to_str($array_object, $ObjChamp, $prefix = '', $suffix = '', $separateur = ',', $last_separateur = 'et'){
        $string = '';
        $i = 1;
        $nb = count($array_object);
        if($nb == $i){
            $string .= $prefix . array_shift($array_object)->{$ObjChamp} . $suffix;
        }else {
            foreach ($array_object as $item) {
                if ($i != $nb) {
                    $string .= $prefix . $item->{$ObjChamp} . $suffix . (($nb == $i+1)?(' '.trim($last_separateur)):trim($separateur)).' ';
                } else {
                    $string .= $prefix . $item->{$ObjChamp} . $suffix;
                }
                $i++;
            }
        }

        return $string;
    }
}

define('ACCESS_REFUSE', 403);
define('ADMIN', 2);
define('CDT', 1);
define('VST', 0);
define('ACCESS_REFUSE_TEXTE', "D&eacutesol&eacute;! Vous n'avez pas acc&egrave;s &agrave; cette page");

if(!session_data_isset('connect')) set_session_data(array('connect' => false));
if(!session_data_isset('lang')) set_session_data(array('lang'=>'FR'));
if(!session_data_isset('grade')) set_session_data(array('grade'=>VST));
