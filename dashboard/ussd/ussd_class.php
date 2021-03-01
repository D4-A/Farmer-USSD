<?php
    namespace AGRIUSSD\dashboard\Ussd;

    abstract class Figure {

        // force class that extend it to implement these methods
        abstract protected function acceuilMenu();
        abstract protected function homeMenu();
        abstract protected function Apropos();
        abstract protected function About();
        abstract protected function ussdAffichage();
        abstract protected function ussdStop();
        abstract protected function changeLangue();
        
    }
