<?php 
    class warga {
        protected $kota = "Aku warga kota Jakarta";
    }

    class orang extends warga {
        function kenalkan(){
            return "Haloo, aku JongKoding. " . $this->kota;
        }
    }

    $obj_orang = new orang();
    echo $obj_orang->kenalkan();
?>