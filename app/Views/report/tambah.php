<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }

        #container {
            width: 80%;
            margin: 0 auto;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            height: 40px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #DD4814;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #bd3b0d;
        }

    </style>

</head>

<body>

    <div id="container">

        <?= form_open('report/tambah') ?>
            <label for="hari">Hari</label>
            <input type="date" name="hari" id="hari">

            <label for="nama_user">Nama User</label>
            <input type="text" id="nama_user" name="nama_user" placeholder="Isikan Nama user" autocomplete="off">

            <label for="kegiatan">Kegiatan</label>
            <input type="text" id="kegiatan" name="kegiatan" placeholder=" " autocomplete="off">

            <label for="tantangan">Tantangan</label>
            <input type="text" id="tantangan" name="tantangan" placeholder="" autocomplete="off">

            <label for="solusi">Solusi</label>
            <input type="text" id="solusi" name="solusi" placeholder=" " autocomplete="off">

            <label for="kegiatan_esok">Kegiatan Esok</label>
            <input type="text" id="kegiatan_esok" name="kegiatan_esok" placeholder="" autocomplete="off">
        
            <label for="masukan">Masukan</label>
            <input type="text" id="masukan" name="masukan" placeholder="" autocomplete="off">

            <input type="submit" value="Submit">
        <?= form_close() ?>


        <a href="<?= site_url('report/') ?>">Cancel</a>



    </div>

</body>

</html>