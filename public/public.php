<?php 
    class orang {
        public $nama;
        public $asal;

        function kenalkan(){
            return "Haloo, aku JongKoding dari Jakarta";
        }
    }

    $obj_orang = new orang();
    echo $obj_orang->kenalkan();
?>