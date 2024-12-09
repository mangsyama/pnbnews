<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Login</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/login.js" defer></script>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <img src="logo2.png" alt="Logo">
        <br><br>
        <p><b>Portal Berita Politeknik Negeri Bali</b></p>
    </div>
    <!-- Form Login dan Password -->
    <div class="login-container">
        <p>Silahkan login dengan username dan password yang telah anda miliki.</p>
        <form name="formlogin" id="formlogin" method="POST" onsubmit="return validasilogin()">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="Masukkan Username">
            </div>
            <div class="form-group form-group-password">
                <label>Password</label>
                <input type="password" class="form-control" name="Pwd" id="Pwd" placeholder="Masukkan Password">
                <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <!-- Pop Up Pemberitahuan -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-error-message">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
