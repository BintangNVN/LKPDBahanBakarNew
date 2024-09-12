<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Bahan Bakar</title>
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('https://pertaminaretail.com/wp-content/uploads/2023/02/HUT-PTPR.jpeg');
            background-size: cover;
        }
        /* .container {
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */
        form {
            text-align: center;  
        }
        h3 {
            color: #333;
        }
        .output {
            width: 400px;
            height: 300px;
            margin-top: 8%;
            background-color: #f0f8ff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 5px 7px 2px 7px blue;
            text-align: center;
            
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            transition: 2s;

        }
        button a{
            color: white;
        }
        button:hover {
            background-color: darkblue;
            transition: 2s;
        }
        h3{
            color: blue;
        }
        @media print{
            .hilang{
                display: none;
            }
        }
    </style>
</head>
<body>
    <center>
    <div class="output">
        <?php
        class Bensin {
            protected $jenis;
            protected $jumlah;
            protected $harga;
            protected $ppn;

            public function __construct($jenis, $jumlah, $harga) {
                $this->jenis = $jenis;
                $this->jumlah = $jumlah;
                $this->harga = $harga;
                $this->ppn = 0.1; // PPN 10%
            }

            public function getJenis() {
                return $this->jenis;
            }

            public function getJumlah() {
                return $this->jumlah;
            }

            public function getHarga() {
                return $this->harga;
            }
        }

        class Beli extends Bensin {
            public function hargaDasar() {
                return $this->harga * $this->jumlah;
            }

            public function hitungPajak() {
                return $this->harga * $this->ppn * $this->jumlah;
            }

            public function hitungTotal() {
                return $this->hargaDasar() + $this->hitungPajak(); // Total ditambah PPN
            }

            public function buktiBayar() {
                echo "<h3>BUKTI TRANSAKSI PEMBELIAN</h3>";
                echo "Jenis Bahan Bakar: " . htmlspecialchars($this->getJenis()) . "<br>";
                echo "Jumlah Liter: " . htmlspecialchars($this->getJumlah()) ." L" . "<br>";
                echo "Harga per Liter: Rp. " . number_format($this->getHarga(), 0, ',', '.') . "<br>";
                echo "Harga Dasar: Rp. " . number_format($this->hargaDasar(), 0, ',', '.') . "<br>";
                echo "PPN (10%): Rp. " . number_format($this->hitungPajak(), 0, ',', '.') . "<br>";
                echo "<strong>Total Harga: Rp. " . number_format($this->hitungTotal(), 0, ',', '.') . "</strong><br>";
            }
        }

        // Harga bensin berdasarkan jenis
        $hargaBensin = [
            "Pertalite" => 10000,
            "Pertamax" => 12900,
            "Pertamax Turbo" => 14990,
            "Solar" => 6900,
            "Diesel" => 8590,
        ];

        // Mendapatkan input dari form
        $jenis = $_POST["jenis"] ?? '';
        $jumlah = $_POST["jumlah"] ?? 0;

        if ($jenis && array_key_exists($jenis, $hargaBensin)) {
            $harga = $hargaBensin[$jenis];
            $beli = new Beli($jenis, $jumlah, $harga);
            $beli->buktiBayar();
        } else {
            echo "<p>Jenis bahan bakar tidak valid atau jumlah liter tidak valid.</p>";
        }
        ?>
        <div class="hilang">
        <button>
            <a href="index.php">Kembali</a>
        </button>
        <button onclick="window.print()">Print</button>
        </div>
    </div>

    </div>

    </center>
</body>
</html>
