<?php 
    class orang {
        var $nama;
        var $asal;
        
        function __construct($namaOrang, $asalOrang)
        {
            echo "Construct otomatis dijalankan...<br>";

            $this->nama = $namaOrang;
            $this->asal = $asalOrang;
        }

        function __destruct()
        {
            echo "<br>Destruct dijalankan terakhir";
        }

        function kenalkan(){
            return "Haloo, aku " . $this->nama . " dari " . $this->asal;
        }
    }

    $obj_orang = new orang("JongKoding", "Jakarta");
    echo $obj_orang->kenalkan();
?>