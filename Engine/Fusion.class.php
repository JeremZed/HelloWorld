<?php 

namespace Engine;

class Fusion
{
    
    protected static $destination = './Public/css/css.global.css';
    protected static $css_files = array();
    
    /**
     * @desc    Lance la fusion de tous les CSS des modules
     */
    public static function run()
    {
        if(file_exists(self::$destination))
            unlink(self::$destination);
        
        self::parcours('./Application');
        self::fusionContent();
    }
    
    /**
     * @desc    permet de parcourir tous les répertoire de l'application à la recherche un d'un dossier "public"
     * @param unknown $rep
     */
    public static function parcours($rep)
    {
        $list = scandir($rep);
        $path = $rep.'/';
        
        unset($list[0], $list[1]);
        
        foreach($list as $element)
        {
            if(is_dir($path.$element))
            {                    
                if($element == 'public')
                {
                    self::parcoursCSS($element, $path);                     
                }                                        
                self::parcours($path.$element);
            }
        }
    }
    
    /**
     * @desc    permet de récupérer tous les fichiers css du dossier public/css
     * @param unknown $rep
     * @param unknown $path
     */
    public static function parcoursCSS($rep, $path)
    {
        $list = scandir($path.'/'.$rep);        
        unset($list[0], $list[1]);
        
        foreach($list as $element)
        {
            if(strtolower($element) == 'css')
            {
                $files = scandir($path.'/'.$rep.'/'.$element);
                unset($files[0], $files[1]);
                
                foreach($files as $name)
                    self::$css_files[] = $path.''.$rep.'/'.$element.'/'.$name;
            }
        }
    }
    
    /**
     * @desc    Concatène le contenu de tous les fichiers css en un seul fichier
     */
    public static function fusionContent()
    {
        foreach(self::$css_files as $file)
        {
            $content = file_get_contents($file);
            
            file_put_contents(self::$destination, $content, FILE_APPEND);
        }
        
        if(count(self::$css_files) == 0)
        {
            file_put_contents(self::$destination, '');
        }
    }
    
    /**
     * @desc    Getter des fichiers css trouvés
     */
    public static function getCssFiles()
    {
        return self::$css_files;
    }
    
    /**
     * @desc    Getter du fichier de destination 
     **/
    public static function getDestination()
    {
        return self::$destination;
    }
    
    /**
     * @desc    setter du fichier de destination
     * */
    public static function setDestination($path)
    {
        self::$destination = $path;
    }
}
