<?php 

    /**
     * Interface Kullanımı
     * Arayüzler, soyut sınıflara benzer.
     * 
     * Arayüzler sadece sınıfta zorunlu olarak tanımlanması gereken metotları belirtmek için kullanılır.
     * 
     * Özellikleri
     * 
     * Soyut methodlar ve sabitler içerebilir.
     * Sadece public method tanımı yapılabilir.
     * Aynı sınıf sadece birden fazla interface kullanabilir.
     */


    interface A{

        public function a();
        public function b();

    } 

    interface B extends A{

        public function c();
        public function d();
        
    } 
    
    // class C implements A,B{
    class C implements B{
        
        public function a(){

        }

        public function b(){

        }
        
        public function c(){

        }

        public function d(){

        }
    }

?>