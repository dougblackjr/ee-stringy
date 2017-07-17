<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Stringy Class
 *
 * @package     ExpressionEngine
 * @category    Plugin
 * @author      Glenn Jacibs
 * @copyright   Copyright (c) 2012, Glenn Jacobs
 * @link        http://www.glennjacobs.co.uk/
 */

class Stringy {


    public function __construct()
    {

    }
    

    
    public function nl2br()
    {
        return nl2br(ee()->TMPL->tagdata);
    }

    public function lowercase()
    {
        return strtolower(ee()->TMPL->tagdata);
    }
    
    public function uppercase()
    {
        return strtoupper(ee()->TMPL->tagdata);
    }
    
    public function upperfirst()
    {
        return ucwords(strtolower(ee()->TMPL->tagdata));
    }
    
    public function slug()
    {
        $separator = ee()->TMPL->fetch_param('separator') ? ee()->TMPL->fetch_param('separator') : "-";
        $case = ee()->TMPL->fetch_param('separator') ? ee()->TMPL->fetch_param('case') : "LOWER";
        
        switch (strtoupper($case)) {
        	case "UPPER":
        		$string = strtoupper(ee()->TMPL->tagdata);
        		break;
        		
        	case "NOCHANGE":
        		$string = ee()->TMPL->tagdata;
        		break;
        		
        	default:
        		$string = strtolower(ee()->TMPL->tagdata);
        }
        
        
        return preg_replace('/[^A-Za-z0-9-]+/', $separator, $string);
    }
      
    
    // strip tags
    public function striptags() 
    {
        $allowed_tags = ee()->TMPL->fetch_param('allowed_tags');
        
        if ($allowed_tags)
        {
            return strip_tags(ee()->TMPL->tagdata,$allowed_tags);
        }
        else
        {
            return strip_tags(ee()->TMPL->tagdata);
        }
    }
    
    
    // char limit
    public function limitchars()
    {
        $limit = (int)ee()->TMPL->fetch_param('limit');
        
        return substr(ee()->TMPL->tagdata,0,$limit);
    }
    
    
    // string replace
    public function replace()
    {
        $find = ee()->TMPL->fetch_param('find');
        $replace = ee()->TMPL->fetch_param('replace');
        
        return str_replace($find,$replace,ee()->TMPL->tagdata);
    }
    
    
    // string length
    public function length()
    {       
        return strlen(ee()->TMPL->tagdata);
    }
    
    
    // word count
    public function wordcount()
    {       
        return str_word_count(ee()->TMPL->tagdata);
    }
    
    
    // trim, left trim, right trim
    public function trim()
    {       
        $option = ee()->TMPL->fetch_param('option');
        
        switch ($option)
        {
            case "left":
                return ltrim(ee()->TMPL->tagdata);
                break;
                
            case "right":
                return rtrim(ee()->TMPL->tagdata);
                break;
                
            default:
                return trim(ee()->TMPL->tagdata);
        }
        
    }
    
    
    // wordwrap
    public function wordwrap()
    {
        $width = ee()->TMPL->fetch_param('width') ? ee()->TMPL->fetch_param('width') : 75;
        $break = ee()->TMPL->fetch_param('break') ? ee()->TMPL->fetch_param('break') : "\n";
        $cut = (ee()->TMPL->fetch_param('cut') == "true") ? TRUE : FALSE;
        
        echo $cut;
        
        return wordwrap(ee()->TMPL->tagdata,$width,$break,$cut);
        
    }
    
    
    // shuffle (random)
    public function shuffle()
    {
        return str_shuffle(ee()->TMPL->tagdata);
    }
        
        
    // html entities
    public function htmlentities()
    {
        return htmlentities(ee()->TMPL->tagdata);
    }
    
    
    // html entity decode
    public function htmlentitydecode()
    {
        return html_entity_decode(ee()->TMPL->tagdata);   
    }
    
    
    // strpad
    public function pad()
    {
        $length = ee()->TMPL->fetch_param('length') ? (int)ee()->TMPL->fetch_param('length') : 75;
        $string = ee()->TMPL->fetch_param('string') ? ee()->TMPL->fetch_param('string') : " ";

        switch (ee()->TMPL->fetch_param('type'))
        {
            case "left":
                $type = STR_PAD_LEFT;
                break;
                
            case "both":
                $type = STR_PAD_BOTH;
                break;
                
            default:
                $type = STR_PAD_RIGHT;
                break;
        }
        
        return str_pad(ee()->TMPL->tagdata,$length,$string,$type);   
    }
    
    
    // number format
    public function numberformat()
    {
        $decimals = ee()->TMPL->fetch_param('decimals') ? (int)ee()->TMPL->fetch_param('decimals') : 0;
        $dec_point = ee()->TMPL->fetch_param('dec_point') ? ee()->TMPL->fetch_param('dec_point') : ".";
        $thousands_sep = ee()->TMPL->fetch_param('thousands_sep') ? ee()->TMPL->fetch_param('thousands_sep') : ",";
        
        return number_format((float)ee()->TMPL->tagdata,$decimals,$dec_point,$thousands_sep);   
    }

/* End of file pi.stringy.php */
/* Location: ./system/expressionengine/third_party/stringy/pi.stringy.php */