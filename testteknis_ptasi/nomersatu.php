<?php
    function tgsnosatu($n) {
        if ($n < 0) {
            return "Error: n harus >= 0 (tidak bleh bernilai min)";
        }

        // nilai faktorial
        $faktorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $faktorial *= $i;
        }

        // Pembagian dengan 2^n
        $result = $faktorial / pow(2, $n);

        // Bulatkan ke atas
        return ceil($result);
    }
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Tugas Nomer Satu</title>
    </head>
    <body>
        <h2>Hitung f(n) = (n!) / (2^n)</h2>

        <form method="post">
            <label for="n">Masukkan nilai n:</label>
            <input type="number" name="n" id="n" required>
            <button type="submit">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $n = (int) $_POST['n'];
            $hasil = tgsnosatu($n);
            echo "<p>Hasil f($n) = $hasil</p>";
        }
        ?>
    </body>
</html>
