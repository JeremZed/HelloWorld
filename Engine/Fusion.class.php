<?php 

namespace Engine;

class Fusion
{
    
    protected $destination = './Public/css/css.global.css';
    protected $css_files = array();
    
    /**
     * @desc    Lance la fusion de tous les CSS des modules
     */
    public function run()
    {
        if(file_exists($this->destination))
            unlink($this->destination);
        
        $this->parcours('./Application');
        $this->fusionContent();
    }
    
    /**
     * @desc    permet de parcourir tous les répertoire de l'application à la recherche un d'un dossier "public"
     * @param unknown $rep
     */
    public function parcours($rep)
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
                    $this->parcoursCSS($element, $path);                     
                }                                        
                $this->parcours($path.$element);
            }
        }
    }
    
    /**
     * @desc    permet de récupérer tous les fichiers css du dossier public/css
     * @param unknown $rep
     * @param unknown $path
     */
    public function parcoursCSS($rep, $path)
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
                    $this->css_files[] = $path.''.$rep.'/'.$element.'/'.$name;
            }
        }
    }
    
    /**
     * @desc    Concatène le contenu de tous les fichiers css en un seul fichier
     */
    public function fusionContent()
    {
        foreach($this->css_files as $file)
        {
            $content = file_get_contents($file);
            
            file_put_contents($this->destination, $content, FILE_APPEND);
        }
        
        if(count($this->css_files) == 0)
        {
            file_put_contents($this->destination, '');
        }
    }
    
    /**
     * @desc    Getter des fichiers css trouvés
     */
    public function getCssFiles()
    {
        return $this->css_files;
    }
}
