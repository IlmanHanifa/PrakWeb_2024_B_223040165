<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman About</title>
</head>

<body>
    <h1>About Me</h1>
    <img src="<?= BASEURL; ?>/img/foto kai.jpg" alt="Ilman Hanifa" 
    width="200" class="rounded-circle shadow">
    <p>Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?>
        tahun, saya adalah seorang <?= $data['pekerjaan']; ?></p>
</body>

</html>