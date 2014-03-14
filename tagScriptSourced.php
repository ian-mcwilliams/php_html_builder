<?php
	
    require_once 'elementIndexed.php';

    class TagScriptSourced extends ElementIndexed {

        public function TagScriptSourced($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }
        
        public function setSource($source) {
            parent::setAttribute("src", $source);
        }

        public function render($sink) {
            $sink->addToBuffer('<script'.parent::getAttributesAsString().'></script>'."\n");
        }


    }
