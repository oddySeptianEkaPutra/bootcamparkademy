<?php
    
    function deretFibonacci($jumlah) {
        $angkaAwal=0;
        $angkaBerikutnya=1;
        
        $hasil = "$angkaAwal $angkaBerikutnya";
        
        for ($i=0; $i<$jumlah-2; $i++) {

            $output = $angkaBerikutnya + $angkaAwal;

            $hasil = $hasil." $output";
        
            $angkaAwal = $angkaBerikutnya;
            $angkaBerikutnya = $output;
        }

        return $hasil;
    }
    
    echo deretFibonacci(8);
    echo "<br>";    

?>