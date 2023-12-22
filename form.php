<!-- form.php -->

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your form processing logic goes here
    // For demonstration purposes, let's just display the success message
    echo "<p style='color: green; font-weight: bold;'>Successfully Submitted!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add any specific styles for the form page */
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFF;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #963696;
            color: #fff;
            padding: 1px;
            text-align: center;
        }

        .logo {
            max-width: 150px;
            max-height: 100px;
        }

        h1, h2 {
             margin: 8px 0;
        }

        h1 {
            margin: 8px 0; /* Adjust margin for h1 */
            font-size: 24px; /* Adjust the font size as needed */
        }

        h2 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h3 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h4 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h5 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h6 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h7 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h8 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        h9 {
            font-size: 1.4em; /* Adjust the font size for the new header */
        }

        nav {
            background-color: #dda0dd;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .menu-item {
            display: inline-block;
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFFF;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #dda0dd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            margin: 30px auto;
            max-width: 1200px;
        }

        h2, h3, h4, h5, h6, h7, h8, h9 {
            margin-bottom: 20px; /* Add some spacing below the title */
            color: #963696;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #963696;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        footer {
            background-color: #963696;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Include common header and navigation menu -->
    <header>
        <img class="logo" src="logo.png" alt="Logo">
        <h1>BORANG PINJAMAN / MEMBAWA KELUAR PERALATAN KOLEJ PENGAJIAN SENI KREATIF (KPSK) UITM</h1>
    </header>

    <nav>
        <a class="menu-item" href="#">Home</a>
        <a class="menu-item" href="#">Form</a>
    </nav>

    <!-- Form content -->
    <form method="post">
    <form>
    <h2>MAKLUMAT PEMOHON</h2>

    <div class="form-group">
        <label for="name">Nama Pemohon:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="ic">No. Kad Pengenalan:</label>
        <input type="text" id="ic" name="ic" required>
    </div>

    <div class="form-group">
        <label for="status">No. Pelajar/Pekerja:</label>
        <input type="text" id="status" name="status" required>
    </div>

    <div class="form-group">
        <label for="program">Kod Program:</label>
        <input type="text" id="program" name="program" required>
    </div>

    <div class="form-group">
        <label for="department">Bahagian:</label>
        <input type="text" id="department" name="department" required>
    </div>

    <div class="form-group">
        <label for="address">Alamat:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="phone">No. Telefon Pejabat/No. H/P:</label>
        <input type="text" id="phone" name="phone" required>
    </div>

    <div class="form-group">
        <label for="email">Emel:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="vehicle">No. Kenderaan:</label>
        <input type="text" id="vehicle" name="vehicle" required>
    </div>

    <div class="form-group">
        <label for="vehicle-type">Jenis:</label>
        <input type="text" id="vehicle-type" name="vehicle-type" required>
    </div>

    <h3>TUJUAN</h3>


    <div class="form-group">
            <label for="pinjaman">PINJAMAN:</label>

            <!-- Radio buttons for pinjaman -->
            <input type="radio" id="pinjaman1" name="pinjaman" value="pinjaman1">
            <label for="pinjaman1">Harian</label>

            <input type="radio" id="pinjaman2" name="pinjaman" value="pinjaman2">
            <label for="pinjaman2">Mingguan</label>

            <input type="radio" id="pinjaman3" name="pinjaman" value="pinjaman3">
            <label for="pinjaman3">Bulanan</label>

            <input type="radio" id="pinjaman4" name="pinjaman" value="pinjaman4">
            <label for="pinjaman4">Semester</label>

    </div>
            <!-- Move the Tujuan Pinjaman label and dropdown below the radio buttons -->
        <div class="form-group">
            <label for="tujuan-pinjaman">Tujuan Pinjaman:</label>

                <!-- Dropdown for choosing the answer -->
                <select id="tujuan-pinjaman-dropdown" name="tujuan-pinjaman-dropdown">
                    <option value="latihan">Latihan</option>
                    <option value="kelas">Kelas</option>
                    <option value="lain-lain">Lain-lain</option>
                </select>
        </div>

                  <!-- Additional fields for Tarikh and Masa Pinjaman/Pemulangan -->
                    <div class="form-group">
                        <label for="tarikh-pinjaman">Tarikh Pinjaman:</label>
                        <input type="date" id="tarikh-pinjaman" name="tarikh-pinjaman">

                        <label for="masa-pinjaman">Masa:</label>
                        <input type="time" id="masa-pinjaman" name="masa-pinjaman">
                    </div>

                    <div class="form-group">
                        <label for="tarikh-pemulangan">Tarikh Pemulangan:</label>
                        <input type="date" id="tarikh-pemulangan" name="tarikh-pemulangan">

                        <label for="masa-pemulangan">Masa:</label>
                        <input type="time" id="masa-pemulangan" name="masa-pemulangan">
                    </div>

            <!-- Another sub form h3 -->
            <div class="form-group">
            <label for="pinjaman2">MEMBAWA KELUAR PERALATAN:</label>

            <!-- Radio buttons for pinjaman -->
            <input type="radio" id="pinjaman1" name="pinjaman" value="pinjaman1">
            <label for="pinjaman1">Urusan Rasmi</label>

            <input type="radio" id="pinjaman2" name="pinjaman" value="pinjaman2">
            <label for="pinjaman2">Servis</label>

            <input type="radio" id="pinjaman3" name="pinjaman" value="pinjaman3">
            <label for="pinjaman3">Lain-lain</label>

    </div>
            <!-- Move the Tujuan Pinjaman label and dropdown below the radio buttons -->
        <div class="form-group">
            <label for="tujuan-pinjaman">Program:</label>

                <!-- Dropdown for choosing the answer -->
                <select id="tujuan-pinjaman-dropdown" name="tujuan-pinjaman-dropdown">
                    <option value="latihan">Nama program</option>
                    <option value="kelas">Servis</option>
                    <option value="lain-lain">Lain-lain</option>
                </select>
        </div>

                  <!-- Additional fields for Tarikh and Masa Pinjaman/Pemulangan -->
                    <div class="form-group">
                        <label for="tarikh-pinjaman">Tarikh Pinjaman:</label>
                        <input type="date" id="tarikh-pinjaman" name="tarikh-pinjaman">

                        <label for="masa-pinjaman">Masa:</label>
                        <input type="time" id="masa-pinjaman" name="masa-pinjaman">
                    </div>

                    <div class="form-group">
                        <label for="tarikh-pemulangan">Tarikh Pemulangan:</label>
                        <input type="date" id="tarikh-pemulangan" name="tarikh-pemulangan">

                        <label for="masa-pemulangan">Masa:</label>
                        <input type="time" id="masa-pemulangan" name="masa-pemulangan">
                    </div>

     <!-- Additional section for Maklumat Peralatan -->
    <h4>MAKLUMAT PERALATAN</h4>

                        <!-- Table for input bil., nama peralatan, jenama/model, no. siri, kuantiti, catatan -->
                        <table>
                            <thead>
                                <tr>
                                    <th>Bil.</th>
                                    <th>Nama Peralatan</th>
                                    <th>Jenama/Model</th>
                                    <th>No. Siri</th>
                                    <th>Kuantiti</th>
                                    <th>Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample row, you can add more rows as needed -->
                                <tr>
                                    <td><input type="text" name="bil[]" /></td>
                                    <td><input type="text" name="nama-peralatan[]" /></td>
                                    <td><input type="text" name="jenama-model[]" /></td>
                                    <td><input type="text" name="no-siri[]" /></td>
                                    <td><input type="number" name="kuantiti[]" /></td>
                                    <td><textarea name="catatan[]"></textarea></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Add a button to dynamically add more rows if needed -->
                        <button type="button" onclick="addRow()">Add Row</button>

    <!-- Additional section for Perakuan Pemohon -->
    <h5>PERAKUAN PEMOHON</h5>

                <div class="form-group">
                    <label for="saya">Saya,</label>
                    <!-- Input field for the name -->
                    <input type="text" id="saya" name="saya" required>
                </div>

                <p> mengaku telah menerima peralatan dalam keadaan baik / sempurna dan akan BERTANGGUNGJAWAB sepenuhnya ke atas peralatan tersebut. Saya BERJANJI akan memulangkan peralatan yang dipinjam mengikut tempoh masa yang telah ditetapkan dan akan menggantikan peralatan dipinjam sekiranya terdapat kerosakan / kehilangan dalam tempoh peminjaman. Jika didapati gagal mematuhi peraturan yang ditetapkan, pihak kolej / Universiti boleh mengambil tindakan mengikut Kaedah Akta 174 ; Akta Institusi-Institusi Pelajaran (Tatatertib) 1976.</p>

                <!-- Tandatangan dan Tarikh -->
                <div class="mb-3">
                    <label for="signature" class="form-label">Tandatangan:</label>
                    <div id="signature-pad" class="signature-pad">
                        <canvas id="signatureCanvas" style="border: 1px solid #000;"></canvas>
                    </div>
                    <button type="button" class="btn btn-danger" onclick="resetSignature()">Reset Signature</button>
                    <input type="hidden" name="signature" id="signatureInput" required>
        </div>


                <div class="form-group">
                    <label for="tarikh">Tarikh:</label>
                    <!-- Input field for Tarikh -->
                    <input type="date" id="tarikh" name="tarikh" required>
                </div>

    <!-- Additional section for Perakuan Pemohon -->
    <h6>PENJAMIN</h6>

                <div class="form-group">
                    <label for="saya">Saya,</label>
                    <!-- Input field for the name -->
                    <input type="text" id="saya" name="saya" required>
                </div>

                <p> Saya selaku PENJAMIN kepada penama berjanji akan BERTANGGUNGJAWAB ke atas peralatan yang dipinjam oleh penama di atas. Sekiranya peralatan yang dipinjam hilang atau rosak, saya sebagai Ibu/bapa/Penjaga kepada penama akan bertangggungjawab menggantikan peralatan tersebut mengikut harga / model sebenar peralatan. Saya akan memastikan penama memulangkan peralatan mengikut tempoh pinjaman yang dibenarkan dan memastikan peralatan yang dipinjam dihantar kepada Pegawai yang bertanggungjawab. Tindakan undang-undang boleh diambil ke atas saya dan penama sekiranya GAGAL membuat pemulangan / penggantian peralatan yang rosak / hilang semasa dalam tempoh peminjaman.</p>

                <!-- Tandatangan dan Tarikh -->
                <div class="mb-3">
                    <label for="signature" class="form-label">Tandatangan:</label>
                    <div id="signature-pad" class="signature-pad">
                        <canvas id="signatureCanvas" style="border: 1px solid #000;"></canvas>
                    </div>
                    <button type="button" class="btn btn-danger" onclick="resetSignature()">Reset Signature</button>
                    <input type="hidden" name="signature" id="signatureInput" required>
        </div>


                <div class="form-group">
                    <label for="tarikh">Tarikh:</label>
                    <!-- Input field for Tarikh -->
                    <input type="date" id="tarikh" name="tarikh" required>
                </div>

                <div class="form-group">
                    <label for="name">Nama Pemohon:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="ic">No. Kad Pengenalan:</label>
                    <input type="text" id="ic" name="ic" required>
                </div>

                <!-- Additional section for SAKSI -->
                    <h7>SAKSI</h7>

                    <div class="form-group">
                        <label for="nama-saksi">Nama:</label>
                        <!-- Input field for Nama -->
                        <input type="text" id="nama-saksi" name="nama-saksi" required>
                    </div>

                    <div class="form-group">
                        <label for="ic-saksi">No. Kad Pengenalan:</label>
                        <!-- Input field for No. Kad Pengenalan -->
                        <input type="text" id="ic-saksi" name="ic-saksi" required>
                    </div>

                    <div class="form-group">
                        <label for="tandatangan-saksi">Tandatangan & Cop Rasmi:</label>
                        <!-- Input field for Tandatangan & Cop Rasmi -->
                        <input type="text" id="tandatangan-saksi" name="tandatangan-saksi" required>
                    </div>

                    <!-- Required message for pinjaman bulanan/semester -->
                    <p>
                        Perlu diisi bagi pinjaman bulanan/semester dan SAKSI mestilah dikalangan PKKPP (Gred 41 keatas).
                    </p>

                         <!-- Section for PENGESAHAN / KELULUSAN (h8) -->
                        <h8>PENGESAHAN / KELULUSAN DARI KOLEJ PENGAJIAN SENI KREATIF</h8>

                        <div class="form-group">
                            <label for="ulasan-pengesahan">Ulasan:</label>
                            <!-- Input field for Ulasan -->
                            <textarea id="ulasan-pengesahan" name="ulasan-pengesahan"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tandatangan-pengesahan">Tandatangan & Cop Rasmi:</label>
                            <!-- Input field for Tandatangan & Cop Rasmi -->
                            <input type="text" id="tandatangan-pengesahan" name="tandatangan-pengesahan" required>
                        </div>

                        <div class="form-group">
                            <label for="tarikh-pengesahan">Tarikh:</label>
                            <!-- Input field for Tarikh -->
                            <input type="date" id="tarikh-pengesahan" name="tarikh-pengesahan" required>
                        </div>

                        <!-- Section for PENGESAHAN / KELULUSAN (h9) -->
                        <h9>PENGESAHAN / KELULUSAN PEGAWAI BERTUGAS</h9>

                        <div class="form-group">
                            <label for="pinjaman2">Status Permohonan:</label>

                            <!-- Radio buttons for pinjaman -->
                            <input type="radio" id="pinjaman1" name="pinjaman" value="pinjaman1">
                            <label for="pinjaman1">LULUS</label>

                            <input type="radio" id="pinjaman2" name="pinjaman" value="pinjaman2">
                            <label for="pinjaman2">TIDAK LULUS</label>
                        </div>

                        <div class="form-group">
                            <label for="ulasan-kelulusan">Ulasan:</label>
                            <!-- Input field for Ulasan -->
                            <textarea id="ulasan-kelulusan" name="ulasan-kelulusan"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tarikh-kelulusan">Tarikh Kelulusan:</label>
                            <!-- Input field for Tarikh -->
                            <input type="date" id="tarikh-kelulusan" name="tarikh-kelulusan" required>
                        </div>

                        <div class="form-group">
                            <label for="tarikh-pemulangan">Tarikh Pemulangan:</label>
                            <!-- Input field for Tarikh -->
                            <input type="date" id="tarikh-pemulangan" name="tarikh-pemulangan" required>
                        </div>

                        <div class="form-group">
                            <label for="tandatangan-kelulusan">Tandatangan & Cop Rasmi:</label>
                            <!-- Input field for Tandatangan & Cop Rasmi -->
                            <input type="text" id="tandatangan-kelulusan" name="tandatangan-kelulusan" required>
                        </div>

                        <div class="form-group">
                            <label for="nama-saksi">Nama:</label>
                            <!-- Input field for Nama -->
                            <input type="text" id="nama-saksi" name="nama-saksi" required>
                        </div>

                        <div class="form-group">
                            <label for="tarikh">Tarikh:</label>
                            <!-- Input field for Tarikh -->
                            <input type="date" id="tarikh" name="tarikh" required>
                        </div>


    <button type="submit">Submit</button>
</form>

    <!-- Include common footer -->
    <footer>
        © <?php echo date('Y'); ?> My Web Application
    </footer>

    <script>
    function addRow() {
        var table = document.querySelector('table tbody');
        var newRow = table.insertRow(table.rows.length);
        var cells = [];

        // Add cells to the new row
        for (var i = 0; i < 6; i++) {
            cells[i] = newRow.insertCell(i);
            if (i === 4) {
                cells[i].innerHTML = '<input type="number" name="kuantiti[]">';
            } else if (i === 5) {
                cells[i].innerHTML = '<textarea name="catatan[]"></textarea>';
            } else {
                cells[i].innerHTML = '<input type="text" name="bil[]">';
            }
        }
    }

    </script>

    <script>
        var signaturePad;
        document.addEventListener('DOMContentLoaded', function ()
        {
            var canvas = document.getElementById('signatureCanvas');
            signaturePad = new SignaturePad(canvas);
            document.querySelector('form').addEventListener('submit', function (event)
            {
                var signatureData = signaturePad.toDataURL();
                document.getElementById('signatureInput').value = signatureData;
            });
        });

        function resetSignature()
        {
            if (signaturePad)
            {
                signaturePad.clear();
                document.getElementById('signatureInput').value = '';
            }
        }
    </script>

    <script>
        function goToNextPage() {
            // Add your logic to navigate to the next page or perform the desired action
            alert("Going to the next page!");
        }
    </script>

</body>
</html>
