<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pertanyaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="radio"], .form-group input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Formulir Pertanyaan</h1>
        <form action="/submit" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" min="0" required>
            </div>

            <div class="form-group">
                <label for="jenis-kelamin">Jenis Kelamin:</label>
                <input type="radio" id="pria" name="jenis-kelamin" value="pria">
                <label for="pria">Pria</label>
                <input type="radio" id="wanita" name="jenis-kelamin" value="wanita">
                <label for="wanita">Wanita</label>
            </div>

            <div class="form-group">
                <label for="hobi">Hobi:</label>
                <input type="checkbox" id="membaca" name="hobi" value="membaca">
                <label for="membaca">Membaca</label>
                <input type="checkbox" id="olahraga" name="hobi" value="olahraga">
                <label for="olahraga">Olahraga</label>
                <input type="checkbox" id="bermain" name="hobi" value="bermain">
                <label for="bermain">Bermain</label>
            </div>

            <div class="form-group">
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" a href="/about">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>
