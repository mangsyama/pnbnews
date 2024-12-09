function togglePassword() {
    var passwordField = document.getElementById('Pwd');
    var passwordFieldType = passwordField.getAttribute('type');
    var toggleIcon = document.querySelector('.toggle-password i');
    if (passwordFieldType === 'password') {
        passwordField.setAttribute('type', 'text');
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.setAttribute('type', 'password');
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

function validasilogin() {
    var Username = $('#Username').val();
    var Pwd = $('#Pwd').val();

    if (Username == "") {
        $('#modal-error-message').text("Username masih kosong");
        $('#errorModal').modal('show');
        $('#Username').focus();
        return false;
    }

    if (Pwd == "") {
        $('#modal-error-message').text("Password masih kosong");
        $('#errorModal').modal('show');
        $('#Pwd').focus();
        return false;
    }

    if (Username.length != 5) {
        $('#modal-error-message').text("Username harus terdiri dari 5 karakter");
        $('#errorModal').modal('show');
        $('#Username').focus();
        return false;
    }

    if (Pwd.length != 5) {
        $('#modal-error-message').text("Password harus terdiri dari 5 karakter");
        $('#errorModal').modal('show');
        $('#Pwd').focus();
        return false;
    }

    if (Username === 'admin' && Pwd === 'admin') {
        window.location.href = 'dashboard.php';
        return false; 
    } else {
        $('#modal-error-message').text("Username atau password salah");
        $('#errorModal').modal('show');
        return false;
    }
}
