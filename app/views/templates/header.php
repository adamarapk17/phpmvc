<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> </title>
   
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
</head>
<body>

<section class="navbar">
        <div>
            <nav class="navbar navbar-1 navbar-expand-lg fixed-top shadow" style=" background-image: linear-gradient(to left, #00FFFF, #004E64);">
                <div class="container">
                    <a class="navbar-brand fs-3 text-white fw-bold" href="<?= BASEURL; ?>">
                        <span style="color: #00A5CF;">Tech</span> Mayantara Asia
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="p-2 ">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" aria-current="page"
                                        href="<?= BASEURL; ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="#tentang">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="#kontak">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="#news">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="/Testing/pesan.php">Pesan</a>
                                </li>
                            </ul>


                        </div>
                    </div>
            </nav>
        </div>
    </section>