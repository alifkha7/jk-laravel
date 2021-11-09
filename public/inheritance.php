<?php 
    class warga {
        protected $kota = "Aku warga kota Jakarta";
        public function kecamatan()
        {
            return "<br>Aku dari Kecamatan Duren Sawit";
        }
    }

    class orang extends warga {
        function kenalkan(){
            return "Haloo, aku JongKoding. " . $this->kota;
        }
    }

    $obj_orang = new orang();
    echo $obj_orang->kenalkan();
    echo $obj_orang->kecamatan();
?>