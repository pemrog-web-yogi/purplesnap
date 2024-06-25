function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var passwordToggle = document.querySelector(".toggle-password img");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.src =
            "http://www.purplesnap.test/import/asset/image/eye.svg";
    } else {
        passwordInput.type = "password";
        passwordToggle.src =
            "http://www.purplesnap.test/import/asset/image/eye-off.svg";
    }
}

function togglePasswordVisibilityConfirm() {
    var passwordInput = document.getElementById("password_confirmation");
    var passwordToggle = document.querySelector(".toggle-password-confirm img");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.src =
            "http://www.purplesnap.test/import/asset/image/eye.svg";
    } else {
        passwordInput.type = "password";
        passwordToggle.src =
            "http://www.purplesnap.test/import/asset/image/eye-off.svg";
    }
}
