<!DOCTYPE html>
<html lang="id">
<head>
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PerSIB - Persatuan Siswa Interaktif Bandung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-img, .article-img { width: 100%; height: auto; object-fit: cover; }
    /*.hero { background: #0d6efd; color: #fff; padding: 10px 0; text-align: center; }*/
    .hero {
              background: linear-gradient(to right, #0d6efd, #084298);
              color: white;
              padding: 10px 0; text-align: center;
            }
    .navbar {
    background-color: var(--dark);
    position: sticky;
    top: 0px;
    z-index: 1000;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 10px;
    padding: 1rem 0px;
    height: 120px;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
      <img src="assets/img/logo-persib.png" alt="Logo PerSIB" height="100" class="me-2">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#layanan">Program</a></li>
        <li class="nav-item"><a class="nav-link" href="#produk">Kegiatan</a></li>
        <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Hero -->
<section id="beranda" class="hero">
  <div class="container">
    <h1>PerSIB</h1>
    <h4>Persatuan Siswa Interaktif Bandung</h4>
    <p>Wadah kolaborasi, kreativitas, dan pengembangan potensi generasi muda Bandung</p>
  </div>
</section>

<!-- Tentang -->
<section id="tentang" class="py-5">
  <div class="container">
    <h2>Tentang PerSIB</h2>
    <p>
      PerSIB (Persatuan Siswa Interaktif Bandung) merupakan organisasi siswa yang bertujuan
      membangun generasi muda yang aktif, kreatif, inovatif, dan berakhlak melalui kolaborasi
      kegiatan edukatif, sosial, dan digital.
    </p>
  </div>
</section>

<!-- Program -->
<section id="layanan" class="py-5 bg-light">
  <div class="container">
    <h2>Program Utama</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5>Pelatihan Digital</h5>
            <p>Pengembangan skill IT dan teknologi siswa.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5>Leadership Camp</h5>
            <p>Melatih kepemimpinan dan kerja tim.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5>Kegiatan Sosial</h5>
            <p>Aksi nyata kepedulian terhadap masyarakat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5>Komunitas Kreatif</h5>
            <p>Wadah seni, media, dan inovasi siswa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Kegiatan -->
<section id="produk" class="py-5">
  <div class="container">
    <h2>Kegiatan Terbaru</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <img src="assets/img/workshop.png" class="card-img-top product-img">
          <div class="card-body">
            <h5>Workshop Digital</h5>
            <p>Kegiatan edukasi teknologi.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100">
          <img src="assets/img/pelatihan.png" class="card-img-top product-img">
          <div class="card-body">
            <h5>Pelatihan Organisasi</h5>
            <p>Peningkatan softskill siswa.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100">
          <img src="assets/img/sosial.png" class="card-img-top product-img">
          <div class="card-body">
            <h5>Program Sosial</h5>
            <p>Aksi nyata kepedulian siswa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Artikel -->
<section id="artikel" class="py-5 bg-light">
  <div class="container">
    <h2>Artikel</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <img src="assets/img/peran_siswa.png" class="card-img-top article-img">
          <div class="card-body">
            <h5>Peran Siswa di Era Digital</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-5 text-center">
  <div class="container">
    <h2>Kontak PerSIB</h2>
    <p>Bandung, Jawa Barat</p>
    <p>📧 persatuansib@gmail.com</p>
  </div>
</section>

<footer class="bg-primary text-white text-center p-3">
  © 2026 PerSIB – Persatuan Siswa Interaktif Bandung
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
