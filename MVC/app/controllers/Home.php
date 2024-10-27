<?php 

class Home {
    public function __construct()
    {
        $url = $this->parseURL();

        if ( file_exists('../app/controllers/' . $url[0] . '.php') ) {
            
        }
    }
}
?>