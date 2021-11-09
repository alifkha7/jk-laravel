<?php 
    class orang {
        private $nama;

        public function kenalkan()
        {
            return "Haloo, aku " . $this->nama;
        }
    }

    $obj_orang = new orang();
    echo $obj_orang->kenalkan();
?>