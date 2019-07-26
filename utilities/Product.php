<?php
    class Product 
    {
        private $id;
        private $title;
        private $image;
        private $desc;
        private $price;
//GETS
        public function get_id(){
            return $this->id;
        }
        public function get_title(){
            return $this->title;
        }
        public function get_image(){
            return $this->image;
        }
        public function get_desc(){
            return $this->desc;
        }
        public function get_price(){
            return $this->price;
        }
//SETS    
        public function set_id( $id ){
            $this->id = $id;
        }
        public function set_title( $title ){
            $this->title = $title;
        }
        public function set_image( $image ){
            $this->image = $image;
        }
        public function set_desc( $desc ){
            $this->desc = $desc;
        }
        public function set_price( $price ){
            $this->price = $price;
        }
    }
    
?>