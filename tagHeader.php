<?php

    require_once 'elementIndexed.php';

    class TagHeader extends ElementIndexed {
        private $number;

        public function TagHeader($id=FALSE, $name=FALSE, $cssClass=FALSE, $number=1) {
            parent::__construct($id, $name, $cssClass);
            $this->number = $number;
        }
        
        public function setNumber($number) {
            $this->number = $number;
        }
        
        public function getNumber() {
            return $this->number;
        }

        public function render($sink) {
            parent::renderAll($sink, 'h'.$this->number);
        }
        
        
    }