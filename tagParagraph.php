<?php
	
    require_once 'elementWrapping.php';

    class TagParagraph extends ElementWrapping {

        public function TagParagraph($id=FALSE, $name=FALSE, $cssClass=FALSE) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'p');
        }


    }

