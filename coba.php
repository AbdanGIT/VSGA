<!DOCTYPE html>
<html>

<head>
    <title>Checkout Umroh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Checkout Umroh</h1>
        <form id="payment-form" action="checkout_process.php" method="post">
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="umroh-package">Paket Umroh:</label>
                <select id="umroh-package" name="umroh-package" required>
                    <option value="package-1">Paket 1</option>
                    <option value="package-2">Paket 2</option>
                    <option value="package-3">Paket 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Jumlah Pembayaran:</label>
                <input type="text" id="amount" name="amount" required>
            </div>
            <input type="submit" value="Bayar Sekarang">
        </form>
    </div>

    <script src="https://cdn.midtrans.com/js/v1/midtrans.min.js" integrity="sha384-Fgq9InhsI17EX9FDYZf9jy9iLARyj+6EegMOSZQo+YURhmP6ijon1rIdFDsUARwj" crossorigin="anonymous"></script>
    <script>
        // Konfigurasi Midtrans
        midtransClient.token(config);

        // Mengirim data ke backend untuk proses pembayaran
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Mengambil data dari form
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var umrohPackage = document.getElementById('umroh-package').value;
            var amount = document.getElementById('amount').value;

            // Memanggil fungsi backend untuk membuat transaksi menggunakan Midtrans
            createTransaction(name, email, phone, umrohPackage, amount);
        });

        // Fungsi untuk membuat transaksi menggunakan Midtrans
        function createTransaction(name, email, phone, umrohPackage, amount) {
            var data = {
                name: name,
                email: email,
                phone: phone,
                umrohPackage: umrohPackage,
                amount: amount
            };

            // Kirim data ke backend untuk pembuatan transaksi
            // Contoh penggunaan AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'create_transaction.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.redirect_url) {
                        window.location.href = response.redirect_url;
                    } else {
                        console.log('Terjadi kesalahan: ' + response.error_message);
                    }
                }
            };
            xhr.send(JSON.stringify(data));
        }
    </script>
</body>

</html>