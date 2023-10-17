<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas dan Keliling Bangun Datar</title>
</head>
<body>
    <h1>Hitung Luas dan Keliling Bangun Datar</h1>
    <form method="post">
        <label for="shape">Pilih Bentuk Bangun Datar:</label>
        <select name="shape" id="shape">
            <option value="persegi">Persegi</option>
            <option value="persegipanjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <br>

        <label for="param1">Parameter 1:</label>
        <input type="number" name="param1" id="param1">
        <br>

        <label for="param2">Parameter 2:</label>
        <input type="number" name="param2" id="param2">
        <br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    // Implementasi class BangunDatar, Persegi, PersegiPanjang, Segitiga, dan Lingkaran
    class BangunDatar {
        public function hitungLuas() {
            return "Hitung luas bangun datar.";
        }
    
        public function hitungKeliling() {
            return "Hitung keliling bangun datar.";
        }
    }
    
    class Persegi extends BangunDatar {
        public $sisi;
    
        public function __construct($sisi) {
            $this->sisi = $sisi;
        }
    
        public function hitungLuas() {
            return "Luas persegi: " . ($this->sisi * $this->sisi);
        }
    
        public function hitungKeliling() {
            return "Keliling persegi: " . (4 * $this->sisi);
        }
    }
    
    class PersegiPanjang extends BangunDatar {
        public $panjang;
        public $lebar;
    
        public function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
    
        public function hitungLuas() {
            return "Luas persegi panjang: " . ($this->panjang * $this->lebar);
        }
    
        public function hitungKeliling() {
            return "Keliling persegi panjang: " . (2 * ($this->panjang + $this->lebar));
        }
    }
    
    class Segitiga extends BangunDatar {
        public $alas;
        public $tinggi;
    
        public function __construct($alas, $tinggi) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }
    
        public function hitungLuas() {
            return "Luas segitiga: " . (0.5 * $this->alas * $this->tinggi);
        }
    
        public function hitungKeliling() {
            return "Hitung keliling segitiga.";
        }
    }
    
    class Lingkaran extends BangunDatar {
        public $jariJari;
    
        public function __construct($jariJari) {
            $this->jariJari = $jariJari;
        }
    
        public function hitungLuas() {
            return "Luas lingkaran: " . (3.14 * $this->jariJari * $this->jariJari);
        }
    
        public function hitungKeliling() {
            return "Keliling lingkaran: " . (2 * 3.14 * $this->jariJari);
        }
    }
    ?>

</body>
</html>
