<?php
    class Person {
        protected $first = "Daniel";
        private $last = "Nielsen";
        private $age = "29";
        
        public function owner() {
            $a = $this->first;
            return $a;
        }  
    }


    class Pet extends Person {
        public function owner() {
            $a = $this->first;
            return $a;
        }
    }
?>