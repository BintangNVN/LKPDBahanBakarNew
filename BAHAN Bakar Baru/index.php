<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Bahan Bakar</title>
    
    <style>
        body {
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            background-image: url('https://pertaminaretail.com/wp-content/uploads/2023/02/HUT-PTPR.jpeg');
            background-size: cover;
            font-family: 'Arial', sans-serif;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }   
        .container {
            background-color: rgba(0, 0, 255, 0.8); /* Warna biru transparan */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: left;
            color: white;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        label {
            font-size: 16px;
        }
        select, input[type="number"] {
            width: calc(100% - 22px); /* Mengurangi padding */
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; /* Memastikan padding dan border dihitung dalam lebar */
        }
        button {
            width: 20%;
            padding: 10px;
            background-color: #ffcc00;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e6b800;
        }
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Pembelian Bahan Bakar</h2>
        <form id="bensinForm" action="logic.php" method="POST">
            <label for="jenis">Pilih Jenis Bahan Bakar:</label>
            <select name="jenis" id="jenis" required>
                <option hidden value="">Pilih Jenis Bensin</option>
                <option value="Pertalite">Pertalite</option>
                <option value="Pertamax">Pertamax</option>
                <option value="Pertamax Turbo">Pertamax Turbo</option>
                <option value="Solar">Solar</option>
                <option value="Diesel">Diesel</option>
            </select>
            <label for="jumlah">Jumlah Liter:</label>
            <input type="number" id="jumlah" name="jumlah" min="1" step="1" required>
            <button type="submit">Beli</button>
        </form>
    </div>
</body>
</html>
