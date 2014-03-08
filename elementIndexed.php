<?php

    require_once 'elementHtml.php';

    abstract class ElementIndexed extends ElementHtml {
        protected $attributes = array();
        
        public function ElementIndexed($id=FALSE, $name=FALSE, $class=FALSE) {
            $this->setAttribute('name', $name);
            $this->setAttribute('id', $id);
            $this->setAttribute('class', $class);
        }
		
        public function setAttribute($key, $value) {
            if ($value !== FALSE) {
                if ($key == 'class') {
                    $this->attributes[$key] = array($value);
                } else {
                    $this->attributes[$key] = $value;
                }
            }
	}

        public function addAttributeToClass($value) {
            array_push($this->attributes['class'], $value);
        }

        public function removeAttributeFromClass($valueToRemove) {
            foreach ($this->attributes['class'] as $key => $value) {
                if ($value == $valueToRemove) {
                    $this->attributes['class'][$key] = ''; //TODO: look up how to remove array elements
                    break;
                }
            }
        }
		
        protected function getAttribute($key) {
            return $this->attributes[$key];
        }
        
        public function setName($name) {
            $this->setAttribute('name', $name);
        }
        
        public function setId($id) {
            $this->setAttribute('id', $id);
        }
        
        public function setCssClass($cssClass) {
            $this->setAttribute('cssClass', $cssClass);
        }

        public function getName() {
            return $name;
        }

        public function getId() {
            return $id;
        }

        public function getCssClass() {
            return $class;
        }

        protected function getAttributesAsString() {
            $string = '';
            foreach ($this->attributes as $key => $value) {
                $string .= ' ' . $key . '="';
                if ($key == 'class') {
                    $fullValue = $this->getClassValuesAsString();
                    $string.=$fullValue.'"';
                } else {
                    $string.=$value.'"';
                }
            }
            return $string;
        }

        private function getClassValuesAsString() {
            $string = '';
            foreach ($this->attributes['class'] as $key => $value) {
                if ($value != '') {
                    $string.=$value;
                }
                if ($key != end($this->attributes['class'])) {
                    $string.=' ';
                }
            }
            return $string;
        }
	
    }

