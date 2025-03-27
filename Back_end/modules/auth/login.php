<?php
    if(!defined("_CODE")){
        die("Error");
    }
    $data = [
        'pageTitle' => 'Đăng nhập tài khoản'
    ];
    layouts('header', $data);
?>

<div class="login-card">
    <h3>Đăng nhập</h3>
    <form action="<?php echo _WED_HOST?>index.php?module=auth&action=login" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Tên người dùng</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
        </div>
        <button type="submit" class="btn btn-login w-100">Đăng nhập</button>
    </form>

    <div class="auth-links">
        <a href="<?php echo _WED_HOST?>index.php?module=auth&action=register">Tạo tài khoản mới</a> |
        <a href="<?php echo _WED_HOST?>index.php?module=auth&action=forgot_password">Quên mật khẩu?</a>
    </div>
</div>


<?php
    layouts('footer');
?>