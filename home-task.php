<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qais - home tasks</title>

</head>

<body>

    <div class="header">
        <h1>TUGAS RUMAH -/ form /-</h1>
    </div>
    <!-- end header -->
    <form>
        <!-- nama lengkap & password -->
        <div>
            <label for="nm-lengkap">
                Nama Lengkap :
                <input type="text" id="nm-lengkap" name="nama_lengkap" placeholder="nama lengkap">
            </label>
        </div>
        <br />
        <!--  -->

        <!-- jenis kelamin -->
        <div>
            <label>Jenis Kelamin :</label>
            <label for="lelaki">
                <input type="radio" id="lelaki" name="gender" value="LELAKI">
                Laki-laki
            </label>
            <label for="wanita">
                <input type="radio" id="wanita" name="gender" value="WANITA">
                Wanita
            </label>
            <label for="kedua-duanya">
                <input type="radio" id="kedua-duanya" name="gender" value="KEDUA-DUANYA">
                Kedua-duanya
            </label>
        </div>
        <br />
        <!--  -->

        <!-- alamat -->
        <div>
            <label for="_alamat">
                Alamat :
            </label><br>
            <textarea name="description" id="_alamat" cols="57" rows="5" placeholder="Masukkan alamat Anda disini..."></textarea>
        </div>
        <br />
        <!--  -->

        <!-- keahlian -->
        <div>
            <label>Keahlian :</label>
            <label for="php"><input type="checkbox" id="php" name="php" value="on">Php</label>
            <label for="JavaScript"><input type="checkbox" id="JavaScript" name="JavaScript" value="on">JavaScript</label>
            <label for="Java"><input type="checkbox" id="Java" name="Java" value="on">Java</label>
            <label for="C++"><input type="checkbox" id="C++" name="C++" value="on">C++</label>
        </div>
        <br />
        <!--  -->

        <!-- pendidikan -->
        <div>
            <label for="_pendidikan">
                Pendidikan :
            </label>
            <select name="dropdown" id="_pendidikan">
                <option value="pilih" selected>
                    -- Pilih --
                </option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <br />
        <!--  -->

        <!-- email, password, & no. telepon -->
        <div>
            <div>
                <label for="email">Username E-mail :</label>
                <input type="email" id="email" name="emailid" size="40" placeholder="email Anda">
            </div>
            <br />
            <!--  -->
            <div>
                <label for="pass_email">Password E-mail :</label>
                <input type="password" id="pass_email" placeholder="password e-mail" size="40">
            </div>
        </div>
        <br />
        <!--  -->

        <!-- submit & reset -->
        <div>
            <input type="submit" name="kirim-data" value="Kirim">
            <input type="reset" name="reset" value="Reset">
        </div>
        <br />
        <!--  -->
        <!--  -->
    </form>
    <!--  -->
    <!--  -->
</body>

</html>