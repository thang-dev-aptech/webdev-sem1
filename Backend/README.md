# PHP Backend API Structure

## 📁 Structure
- `app/`: Core, Models, Controllers, Middlewares
- `routes/`: API routing
- `public/`: Entry point
- `storage/`: Logs and Uploads
- `.env`: Environment variables

## ⚙️ Setup

```bash
composer install
cp .env.example .env




backend/
│
├── .git/                        # Thư mục Git chứa dữ liệu của repositor không phải là thư mục để bạn thay đổi trực tiếp
├── .gitignore                   # Chứa danh sách các file và thư mục không cần theo dõi trong Git (ví dụ: file cấu hình cục bộ, thư mục logs, vendor, etc.)
├── .gitattributes               # Thiết lập cách Git xử lý các file đặc biệt (như line endings, merge conflicts, ...)
├── .gitmodules                  # Nếu bạn sử dụng submodules trong Git (thư viện bên ngoài)
│
├── app/                          # Toàn bộ logic ứng dụng
│   ├── Config/                   # Các file cấu hình
│   │   ├── App.php               # APP_NAME, APP_ENV, DEBUG, TIMEZONE, JWT_SECRET...
│   │   ├── Database.php          # DB_HOST, DB_NAME, DB_USER, DB_PASS
│   │   ├── Cors.php              # Cấu hình CORS
│   │   └── Mailer.php            # SMTP cấu hình gửi mail (nếu có)
│   │
│   ├── Core/                     # Thành phần lõi
│   │   ├── Router.php            # Định tuyến (có thể dùng thư viện hoặc custom)
│   │   ├── Request.php           # Đọc input, query, headers
│   │   ├── Response.php          # Trả về JSON / HTTP code
│   │   ├── Database.php          # Kết nối PDO
│   │   ├── BaseController.php    # Lớp cha của tất cả controller
│   │   └── Validator.php         # Validate dữ liệu (email, string, required, ...)
│   │
│   ├── Controllers/              # Điều phối luồng, xử lý logic
│   │   ├── AuthController.php    # Login, Register, Logout
│   │   ├── UserController.php    # CRUD user
│   │   └── ProductController.php # CRUD sản phẩm
│   │
│   ├── Models/                   # Tương tác với database
│   │   ├── BaseModel.php         # Lớp cha: find, all, create, update...
│   │   ├── User.php              # Model user
│   │   ├── Product.php           # Model sản phẩm
│   │   └── Order.php             # Model đơn hàng
│   │
│   ├── Middlewares/             # Chặn/truy cập theo quyền
│   │   ├── AuthMiddleware.php    # Kiểm tra JWT token
│   │   ├── CorsMiddleware.php    # Gắn header CORS
│   │   └── RateLimit.php         # Giới hạn số request
│   │
│   └── Helpers/                 # Các hàm tái sử dụng
│       ├── jwt.php              # Tạo & giải mã JWT
│       ├── response.php         # Trả JSON đơn giản
│       ├── mail.php             # Gửi mail
│       ├── str.php              # Xử lý chuỗi
│       └── array.php            # Xử lý mảng
│
├── routes/                      # Định nghĩa route API
│   ├── api.php                  # Route chung
│   ├── auth.php                 # Route auth (login, register)
│   ├── user.php                 # Route user
│   └── product.php              # Route sản phẩm
│
├── public/                      # Web server trỏ vào đây
│   ├── index.php                # Entry point toàn bộ hệ thống
│   └── .htaccess                # Rewrite toàn bộ về index.php
│
├── storage/                     # Dữ liệu tạm
│   ├── logs/                    # Log hệ thống
│   │   └── app.log
│   └── uploads/                 # File người dùng
│       ├── users/
│       ├── products/
│       └── temp/
│
├── vendor/                      # Composer tải vào đây
│
├── .env                         # Biến môi trường (APP_NAME, DB, JWT_SECRET)
├── composer.json                # Autoload + thư viện cần thiết
├── README.md                    # Tài liệu hướng dẫn sử dụng dự án
└── .gitignore                   # Các file/directory không cần thiết không theo dõi trong Git
