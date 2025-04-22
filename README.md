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


------------------------------------------------------------fontend-------------------------------------------------------------------------
frontend/                  # Thư mục gốc cho React app
│
├── public/                # Chứa file tĩnh
│   ├── index.html         # File HTML gốc mà React sẽ được tiêm vào thẻ <div id="root"></div>
│   └── ...                # favicon, logo, manifest.json...
│
├── src/                   # Mã nguồn chính
│   │
│   ├── assets/            # Tài nguyên tĩnh (images, styles, fonts...)
│   │   ├── images/        # Hình ảnh
│   │   ├── styles/        # CSS Modules, SCSS files
│   │   └── fonts/         # Fonts
│   │
│   ├── components/        # Các component UI tái sử dụng
│   │   ├── ui/            # Button, Input, Modal, Table, Spinner
│   │   ├── layout/        # Header, Footer, Sidebar, PageLayout
│   │   └── shared/        # Các component dùng chung
│   │
│   ├── contexts/          # Quản lý state toàn cục (AuthContext)
│   │   └── AuthContext.jsx
│   │
│   ├── hooks/             # Custom hooks
│   │   ├── useAuth.js     # Sử dụng AuthContext
│   │   └── useFetch.js    # Hook gọi API
│   │
│   ├── pages/             # Các trang hoàn chỉnh
│   │   ├── HomePage.jsx
│   │   ├── LoginPage.jsx
│   │   └── UserListPage.jsx
│   │
│   ├── services/          # Logic gọi API backend
│   │   ├── apiClient.js   # Cấu hình axios/fetch
│   │   ├── authService.js # Xử lý login, logout
│   │   └── userService.js # Lấy danh sách người dùng
│   │
│   ├── utils/             # Các hàm tiện ích
│   │   └── helpers.js     # Format date, validate email, etc.
│
├── .env                   # Biến môi trường (VITE_API_BASE_URL, VITE_APP_TITLE)
├── .gitignore             # Các file cần bỏ qua, như node_modules, .env
├── package.json           # Quản lý dependencies và scripts
└── vite.config.js         # Cấu hình Vite (build tool)
