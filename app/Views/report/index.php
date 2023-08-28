<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>

    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }

        #container {
            width: 80%;
            margin: 0 auto;
        }

        #report {
            border-collapse: collapse;
            width: 100%;
        }

        #report td,
        #report th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #report tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #report tr:hover {
            background-color: #ddd;
        }

        #report th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #DD4814;
            color: white;
        }


        /* ALERT */

        .alert {
            padding: 20px;
            color: white;
            margin-bottom: 10px;
        }

        .success {
            background-color: #5dbf5d;
        }

        .error {
            background-color: #f44336;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>

</head>

<body>

    <div id="container">

 

        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif ?>

        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert error">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif ?>

        <a href="<?= site_url('report/tambah') ?>">Add New report</a>

        <table id="report">
            <tr>
                <th>Hari</th>
                <th>Nama User</th>
                <th>Kegiatan</th>
                <th>Tantangan</th>
                <th>Solusi</th>
                <th>Kegiatan Esok</th>
                <th>Masukan</th>
            </tr>
            <?php foreach ($report as $r) : ?>
                <tr>
                    <td><?= $r->hari; ?></td>
                    <td><?= $r->nama_user; ?></td>
                    <td><?= $r->kegiatan; ?></td>
                    <td><?= $r->tantangan; ?></td>
                    <td><?= $r->solusi; ?></td>
                    <td><?= $r->kegiatan_esok; ?></td>
                    <td><?= $r->masukan; ?></td>
                    <td>
                        <a href="<?= site_url('report/update/' . $r->id) ?>">Update</a> | <a href="<?= site_url('report/delete/' . $r->id) ?>" onclick="return confirm('Do you want to delete this record?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

    </div>

</body>

</html>