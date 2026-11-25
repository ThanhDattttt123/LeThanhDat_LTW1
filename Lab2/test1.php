<?php
// Khởi tạo mảng menu
$menus = [
    "Trang chủ",
    "Tin tức",
    "Liên hệ",
    "Giới thiệu"
];

// Khởi tạo mảng môn học
$subjects = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL"
];

// Khởi tạo mảng chứa danh sách sinh viên
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ]
];

// Khởi tạo mảng dữ liệu cho Form đăng ký sinh viên
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];

$classes = [
    "A1" => "CNTT1",
    "A2" => "CNTT2",
    "A3" => "CNTT3",
    "A4" => "CNTT4"
];

$genders = ["Nam", "Nữ", "Khác"];

$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding: 20px;
            background: #f5f7fa;
            font-family: Arial, sans-serif;
        }

        /* CSS Menu (Câu B.1) */
        nav {
            background: rgb(4, 40, 94);
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav li {
            flex: 1;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover {
            background: #084298;
        }

        /* CSS Danh sách môn học (Câu B.2) */
        .s1 {
            max-width: 500px;
            margin: 25px auto 0;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 12px;
        }
        .s1 .total {
            text-align: center;
            margin-bottom: 16px;
            font-weight: bold;
            color: #333;
        }
        .s1 ul {
            list-style: none;
        }
        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: 0.3s;
        }
        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        /* CSS Danh sách sinh viên (Câu B.3) */
        .s2 {
            max-width: 800px;
            margin: 25px auto 0;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .s2 h3 {
            margin-bottom: 15px;
            color: #222;
        }
        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }
        .s2 th, .s2 td {
            border: 1px solid #dee2e6;
            padding: 10px 12px;
            text-align: center;
        }
        .s2 th {
            background: #0d6efd;
            color: #fff;
        }
        .s2 tr:hover td {
            background: #cfe2ff;
            transition: 0.2s;
        }

        /* CSS Form đăng ký sinh viên (Câu B.4) */
        .s3 {
            max-width: 600px;
            margin: 25px auto 0;
            background: #fff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .s3 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s3 .form-group {
            margin-bottom: 15px;
        }
        .s3 .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #333;
        }
        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 14px;
        }
        .s3 .option-list {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }
        .s3 .option-item {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }
        .s3 .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .s3 button {
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .s3 button[type="submit"] {
            background: #0d6efd;
            color: #fff;
        }
        .s3 button[type="submit"]:hover {
            background: #084298;
        }
        .s3 button[type="reset"] {
            background: #e9ecef;
            color: #333;
        }
        .s3 button[type="reset"]:hover {
            background: #dee2e6;
        }
    </style>
</head>
<body>
    <!-- ===== Menu ====== -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <!-- ===== Danh sách môn học ====== -->
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <p class="total">Tổng số môn học: <?= count($subjects) ?></p>
        <ul>
            <?php foreach ($subjects as $subject) { ?>
                <li><?= $subject ?></li>
            <?php } ?>
        </ul>
    </section>

    <!-- ===== Danh sách sinh viên ====== -->
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php foreach ($students as $index => $student) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student["id"] ?></td>
                    <td><?= $student["name"] ?></td>
                    <td><?= $student["gender"] ?></td>
                    <td><?= $student["class"] ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>

    <!-- ===== Form đăng ký thông tin sinh viên ====== -->
    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label class="form-label" for="fullname">Họ và tên</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên">
            </div>

            <div class="form-group">
                <label class="form-label" for="faculty">Khoa</label>
                <select id="faculty" name="faculty">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option value="<?= $faculty ?>"><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="class">Lớp</label>
                <select id="class" name="class">
                    <?php foreach ($classes as $key => $class) { ?>
                        <option value="<?= $key ?>"><?= $class ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <span class="form-label">Giới tính</span>
                <div class="option-list">
                    <?php foreach ($genders as $gender) { ?>
                        <label class="option-item">
                            <input type="radio" name="gender" value="<?= $gender ?>">
                            <?= $gender ?>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group">
                <span class="form-label">Sở thích</span>
                <div class="option-list">
                    <?php foreach ($hobbies as $key => $hobby) { ?>
                        <label class="option-item">
                            <input type="checkbox" name="hobbies[]" value="<?= $key ?>">
                            <?= $hobby ?>
                        </label>
                    <?php } ?>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit">Đăng ký</button>
                <button type="reset">Làm mới</button>
            </div>
        </form>
    </section>
</body>
</html>