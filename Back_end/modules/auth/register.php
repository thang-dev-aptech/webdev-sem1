<?php
    if(!defined("_CODE")){
        die("Error");
    }

    $data = [
        'pageTitle' => 'Đăng ký tài khoản'
    ];
    layouts('header', $data);
?>

<div class="register-card">
    <h3>Đăng ký tài khoản</h3>
    <form action="<?php echo _WED_HOST?>index.php?module=auth&action=register" method="post">
        <div class="mb-2">
            <label for="fullname" class="form-label">Họ và Tên</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ và tên" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="username" class="form-label">Tên người dùng</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Mật khẩu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="confirm_password" class="form-label">Nhập lại mật khẩu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
            </div>
        </div>
        <button type="submit" class="btn btn-register w-100">Đăng ký</button>
    </form>

    <div class="auth-links">
        <p>Đã có tài khoản? <a href="<?php echo _WED_HOST?>index.php?module=auth&action=login">Đăng nhập</a></p>
    </div>
</div>


<?php
    layouts('footer');
?>