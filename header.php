<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_pk_options('company_name'); ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">
  <?php wp_head();?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top menu-top">
    <div class="container"> <a class="navbar-brand" href="#">پتروکیان <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="پردیس پتروکیان پارسیان"
          class="logo-nav"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
          class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="<?php echo get_site_url(); ?>">صفحه اصلی</a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">سوابق</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/?page_id=<?php echo get_page_id_by_title('projects');?>&id=1">پروژه های تکمیل شده</a></li>
              <li><a class="dropdown-item" href="/?page_id=<?php echo get_page_id_by_title('projects');?>&id=2">پروژه های در حال اجرا</a></li>
              <li><a class="dropdown-item" href="/?page_id=<?php echo get_page_id_by_title('projects');?>&id=3">لیست کلی پروژه ها</a></li>
            </ul>
          </li>
          <li class="nav-item"> <a class="nav-link" href="/?page_id=<?php echo get_page_id_by_title('posts');?>">مطالب</a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">توانمندی ها</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/?page_id=<?php echo get_page_id_by_title('certificate');?>">گواهی نامه و افتخارات</a></li>
              <li><a class="dropdown-item disabled" href="#">منابع انسانی</a></li>
              <li><a class="dropdown-item disabled" href="#">امکانات و تجهیزات</a></li>
              <li><a class="dropdown-item disabled" href="#">ستاد پشتیبانی و پایگاه عملیاتی</a></li>
              <li><a class="dropdown-item disabled" href="#">مدیریت بهداشت ، ایمنی و محیط زیست</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">معرفی شرکت</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/?page_id=<?php echo get_page_id_by_title('About-us');?>">شرکت پردیس پتروکیان پارسیان در یک نگاه</a></li>
              <li><a class="dropdown-item disabled" href="#">ساختار سازمانی</a></li>
              <li><a class="dropdown-item disabled" href="#">هیات مدیره</a></li>
            </ul>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#footer">تماس با ما</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <main role="main">