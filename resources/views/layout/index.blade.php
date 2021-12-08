<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Mongo Panel | @yield('title')</title>

    <link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">تست منگو</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="بحث" aria-label="بحث">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
{{--            <a class="nav-link px-3" href="#">تسجيل الخروج</a>--}}
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            sales
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">لوحة القيادة</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        هذا الأسبوع
                    </button>
                </div>
            </div>

            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

            <h2>عنوان القسم</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>بيانات</td>
                        <td>عشوائية</td>
                        <td>تثري</td>
                        <td>الجدول</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>تثري</td>
                        <td>مبهة</td>
                        <td>تصميم</td>
                        <td>تنسيق</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>عشوائية</td>
                        <td>غنية</td>
                        <td>قيمة</td>
                        <td>مفيدة</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>معلومات</td>
                        <td>تثري</td>
                        <td>توضيحية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>الجدول</td>
                        <td>بيانات</td>
                        <td>تنسيق</td>
                        <td>قيمة</td>
                    </tr>
                    <tr>
                        <td>1,005</td>
                        <td>قيمة</td>
                        <td>مبهة</td>
                        <td>الجدول</td>
                        <td>تثري</td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>قيمة</td>
                        <td>توضيحية</td>
                        <td>غنية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>تثري</td>
                        <td>مفيدة</td>
                        <td>معلومات</td>
                        <td>مبهة</td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>بيانات</td>
                        <td>عشوائية</td>
                        <td>تثري</td>
                        <td>الجدول</td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>تثري</td>
                        <td>مبهة</td>
                        <td>تصميم</td>
                        <td>تنسيق</td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>عشوائية</td>
                        <td>غنية</td>
                        <td>قيمة</td>
                        <td>مفيدة</td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>معلومات</td>
                        <td>تثري</td>
                        <td>توضيحية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>الجدول</td>
                        <td>تثري</td>
                        <td>تنسيق</td>
                        <td>قيمة</td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>قيمة</td>
                        <td>مبهة</td>
                        <td>الجدول</td>
                        <td>تصميم</td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>قيمة</td>
                        <td>توضيحية</td>
                        <td>غنية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>بيانات</td>
                        <td>مفيدة</td>
                        <td>معلومات</td>
                        <td>الجدول</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>
