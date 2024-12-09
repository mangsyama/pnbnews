<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Dashboard</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo2.png" alt="Logo"></a>
            <div class="ms-auto">
                <button class="btn btn-primary admin-btn">
                    <i class="fas fa-user"></i> Admin
                </button>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-3">
        <section id="home">
            <h2 class="mb-4">Dashboard</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Dilihat</h4>
                            <p class="h2" id="userCount">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-info">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Pertanyaan</h4>
                            <p class="h2" id="questionCount">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-success">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Berita</h4>
                            <p class="h2" id="newsCount">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-warning">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Komentar</h4>
                            <p class="h2" id="commentCount">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="menuPilihan" class="mt-5">
            <h2 class="mb-4">Menu Pilihan</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="stat-card menu-card" data-bs-toggle="modal" data-bs-target="#addNewsModal">
                        <div class="icon-container bg-primary">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <h4>Tambah Berita</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="stat-card menu-card" data-bs-toggle="modal" data-bs-target="#editNewsModal">
                        <div class="icon-container bg-success">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h4>Edit Berita</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="stat-card menu-card" data-bs-toggle="modal" data-bs-target="#viewCommentsModal">
                        <div class="icon-container bg-info">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4>Lihat Komentar</h4>
                    </div>
                </div>
            </div>
        </section>
        <br/>
        <section class="container mt-5 py-5 text-center">
            <h2 class="section-tilte">Apakah anda ingin melihat hasilnya ?</h2>
            <br/>
            <div class="button-beranda">
                <a href="./index.php">
                    <button type="button" class="btn btn-primary btn-lg">Halaman Utama</button>
                </a>
            </div>
        </section>
    </div>

    <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewsModalLabel">Tambah Berita Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="addNewsForm">
                                <div class="mb-3">
                                    <label for="newsTitle" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control" id="newsTitle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="newsContent" class="form-label">Isi Berita</label>
                                    <textarea class="form-control" id="newsContent" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="newsImage" class="form-label">Gambar Berita</label>
                                    <input type="file" class="form-control" id="newsImage" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori Berita</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="newsCategory" id="category1" value="Akademik" checked>
                                        <label class="form-check-label" for="category1">Akademik</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="newsCategory" id="category2" value="Non Akademik">
                                        <label class="form-check-label" for="category2">Non - Akademik</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="newsCategory" id="category3" value="Olahraga">
                                        <label class="form-check-label" for="category3">Olahraga</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Berita</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div id="newsPreview">
                                <h4>Preview Berita</h4>
                                <div class="card">
                                    <img id="previewImage" src="https://via.placeholder.com/300x200" class="card-img-top" alt="Preview Image">
                                    <div class="card-body">
                                        <h5 class="card-title" id="previewTitle"></h5>
                                        <p class="card-text" id="previewContent"></p>
                                        <span class="badge bg-primary" id="previewCategory"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editNewsModal" tabindex="-1" aria-labelledby="editNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNewsModalLabel">Edit Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="editNewsForm">
                                <div class="mb-3">
                                    <label for="editNewsSelect" class="form-label">Pilih Berita</label>
                                    <select class="form-select" id="editNewsSelect">
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="editNewsTitle" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control" id="editNewsTitle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editNewsContent" class="form-label">Isi Berita</label>
                                    <textarea class="form-control" id="editNewsContent" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="editNewsImage" class="form-label">Gambar Berita</label>
                                    <input type="file" class="form-control" id="editNewsImage" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori Berita</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="editNewsCategory" id="editCategory1" value="akademik">
                                        <label class="form-check-label" for="editCategory1">
                                            Akademik
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="editNewsCategory" id="editCategory2" value="nonakademik">
                                        <label class="form-check-label" for="editCategory2">
                                            Non - Akademik
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="editNewsCategory" id="editCategory3" value="olahraga">
                                        <label class="form-check-label" for="editCategory3">
                                            Olahraga
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div id="editNewsPreview">
                                <h4>Preview Berita</h4>
                                <div class="card">
                                    <img id="editPreviewImage" src="https://via.placeholder.com/300x200" class="card-img-top" alt="Preview Image">
                                    <div class="card-body">
                                        <h5 class="card-title" id="editPreviewTitle"></h5>
                                        <p class="card-text" id="editPreviewContent"></p>
                                        <span class="badge bg-primary" id="editPreviewCategory"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewCommentsModal" tabindex="-1" aria-labelledby="viewCommentsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewCommentsModalLabel">Lihat Komentar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="commentNewsSelect" class="form-label">Pilih Berita</label>
                        <select class="form-select" id="commentNewsSelect">
                        </select>
                    </div>
                    <div id="commentsList">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="confirmationMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="#" class="btn btn-primary" id="viewHomePageBtn">Lihat Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/dashboard.js"></script>
</body>
</html>