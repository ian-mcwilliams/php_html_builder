<?php

    require_once 'elementWrapping.php';

    class TagSelect extends ElementWrapping {
        
        public function TagSelect($id, $name, $cssClass) {
            parent::__construct($id, $name, $cssClass);
        }

        public function render($sink) {
            parent::renderAll($sink, 'select');
        }
    }