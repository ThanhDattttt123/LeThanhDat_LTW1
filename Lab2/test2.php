<?php
// Mảng menu (Câu C.1)
$menus = [
    "Trang chủ",
    "Sản phẩm",
    "Thương hiệu",
    "Báo giá",
    "Liên hệ"
];

// Mảng nhiều chiều chứa ít nhất 8 sản phẩm (Câu C.3)
$products = [
    ["name" => "Laptop Gaming Pro 15", "price" => 24500000, "image" => "images/default-product.jpg"],
    ["name" => "Chuột Không Dây Silent", "price" => 450000, "image" => "images/default-product.jpg"],
    ["name" => "Bàn Phím Cơ TKL RGB", "price" => 1350000, "image" => "images/default-product.jpg"],
    ["name" => "Tai Nghe Chống Ồn Studio", "price" => 2890000, "image" => "images/default-product.jpg"],
    ["name" => "Màn Hình IPS 27 inch 165Hz", "price" => 6200000, "image" => "images/default-product.jpg"],
    ["name" => "Webcam Full HD AutoFocus", "price" => 1150000, "image" => "images/default-product.jpg"],
    ["name" => "SSD NVMe 1TB Gen4", "price" => 2150000, "image" => "images/default-product.jpg"],
    ["name" => "Hub USB-C 7-in-1 Nhôm", "price" => 790000, "image" => "images/default-product.jpg"]
];

// Mảng ít nhất 6 thương hiệu nổi bật (Câu C.4)
$brands = [
    ["name" => "TechNova", "badge" => "TN"],
    ["name" => "ApexGear", "badge" => "AG"],
    ["name" => "PixelWave", "badge" => "PW"],
    ["name" => "CorePulse", "badge" => "CP"],
    ["name" => "SoundCraft", "badge" => "SC"],
    ["name" => "VoltEdge", "badge" => "VE"]
];

// Mảng dữ liệu cho Form đăng ký nhận báo giá (Câu C.5)
$categories = [
    "laptop" => "Laptop & PC",
    "accessory" => "Phụ kiện & Chuột phím",
    "monitor" => "Màn hình & Âm thanh",
    "storage" => "Thiết bị lưu trữ & Kết nối"
];

$quoteMethods = [
    "Email",
    "Điện thoại",
    "Zalo"
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng Công nghệ - Lab 2</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .brand-logo {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: #0d6efd;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }
        .hero-banner {
            background: linear-gradient(120deg, #0b2545 0%, #134074 60%, #1d5fa7 100%);
            color: #fff;
            border-radius: 14px;
            padding: 36px 28px;
        }
        .hero-banner img {
            max-height: 220px;
            object-fit: cover;
            border-radius: 10px;
            background: #fff;
        }
        .product-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.12) !important;
        }
        .product-card img {
            height: 170px;
            object-fit: cover;
            background: #e9ecef;
        }
        .brand-box {
            background: #fff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 18px 14px;
            text-align: center;
            transition: all 0.25s ease;
        }
        .brand-box:hover {
            border-color: #0d6efd;
            background: #eef5ff;
            transform: translateY(-4px);
        }
        .brand-circle {
            width: 48px;
            height: 48px;
            line-height: 48px;
            border-radius: 50%;
            margin: 0 auto 10px;
            background: #0d6efd;
            color: #fff;
            font-weight: 700;
        }
        footer {
            background: #0b2545;
            color: #e9ecef;
        }
    </style>
</head>
<body>
    <!-- 1. Thanh Menu (Bootstrap 5 Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#">
                <span class="brand-logo">LT</span>
                <span>LeThanhDat Store</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($menus as $menu) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= htmlspecialchars($menu) ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2. Banner giới thiệu cửa hàng -->
    <section class="container my-4">
        <div class="hero-banner shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-md-8">
                    <h1 class="fw-bold mb-2">Chào mừng đến với LeThanhDat Store</h1>
                    <p class="lead mb-3">
                        Chuyên cung cấp thiết bị công nghệ, phụ kiện chính hãng và giải pháp tối ưu cho học tập, làm việc với mức giá cạnh tranh.
                    </p>
                    <a href="#products" class="btn btn-warning fw-semibold">Khám phá sản phẩm</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="images/default-product.jpg" alt="Banner cửa hàng" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Danh sách sản phẩm (4 cột PC / 2 cột Tablet / 1 cột Mobile) -->
    <section id="products" class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 fw-bold mb-0">Danh sách sản phẩm</h2>
            <span class="badge bg-primary fs-6">Tổng số sản phẩm: <?= count($products) ?></span>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card h-100 shadow-sm product-card">
                        <img src="<?= htmlspecialchars($product["image"]) ?>" class="card-img-top" alt="<?= htmlspecialchars($product["name"]) ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fs-6 fw-bold"><?= htmlspecialchars($product["name"]) ?></h5>
                            <p class="card-text text-danger fw-bold fs-6 mt-auto mb-3">
                                <?= number_format($product["price"], 0, ",", ".") ?> đ
                            </p>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm flex-fill">Xem chi tiết</a>
                                <a href="#" class="btn btn-primary btn-sm flex-fill">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- 4. Thương hiệu nổi bật -->
    <section class="container my-5">
        <h2 class="h4 fw-bold mb-3">Thương hiệu nổi bật</h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
            <?php foreach ($brands as $brand) { ?>
                <div class="col">
                    <div class="brand-box shadow-sm">
                        <div class="brand-circle"><?= htmlspecialchars($brand["badge"]) ?></div>
                        <div class="fw-semibold"><?= htmlspecialchars($brand["name"]) ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- 5. Form đăng ký nhận báo giá -->
    <section class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h2 class="h4 fw-bold mb-3">Form đăng ký nhận báo giá</h2>
                <form action="#" method="post">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ và tên">
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="0901234567">
                        </div>

                        <div class="col-md-6">
                            <label for="category" class="form-label">Danh mục sản phẩm quan tâm</label>
                            <select class="form-select" id="category" name="category">
                                <?php foreach ($categories as $key => $label) { ?>
                                    <option value="<?= htmlspecialchars($key) ?>"><?= htmlspecialchars($label) ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label d-block">Hình thức nhận báo giá</label>
                            <div class="d-flex flex-wrap gap-3 pt-1">
                                <?php foreach ($quoteMethods as $idx => $method) { ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quote_method" id="qm_<?= $idx ?>" value="<?= htmlspecialchars($method) ?>" <?= $idx === 0 ? "checked" : "" ?>>
                                        <label class="form-check-label" for="qm_<?= $idx ?>">
                                            <?= htmlspecialchars($method) ?>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="note" class="form-label">Nội dung yêu cầu</label>
                            <textarea class="form-control" id="note" name="note" rows="3" placeholder="Nhập số lượng hoặc yêu cầu chi tiết..."></textarea>
                        </div>

                        <div class="col-12 d-flex gap-2">
                            <button type="submit" class="btn btn-primary fw-semibold">Gửi yêu cầu</button>
                            <button type="reset" class="btn btn-secondary">Làm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- 6. Footer -->
    <footer class="py-4 mt-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-6">
                    <h5 class="fw-bold">LeThanhDat Store</h5>
                    <p class="mb-0 small">Hệ thống giới thiệu sản phẩm và thiết bị công nghệ phục vụ bài thực hành Lập trình Web 1.</p>
                </div>
                <div class="col-md-6 text-md-end small">
                    <div>Email: support@lethanhdatstore.local</div>
                    <div>Hotline: 0909 000 123</div>
                    <div>Địa chỉ: TP. Hồ Chí Minh</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>