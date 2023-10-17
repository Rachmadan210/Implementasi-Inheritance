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
    // Implementasi class BangunDatar, Persegi, PersegiPanjang, Segitiga, dan Lingkaran di sini (seperti yang disediakan sebelumnya).
    ?>

</body>
</html>
