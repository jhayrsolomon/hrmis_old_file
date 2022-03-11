<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use common\models\User;

//$this->title = '';
AppAsset::register($this);
$this->registerJsFile(
    '@web/js/formScript.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <!-- <title>?= Html::encode($this->title) ?></title> -->
    
    <title>HRMIS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/img/favicon.png" rel="icon">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= Yii::$app->request->baseUrl?>/assets_/css/style.css" rel="stylesheet">

    <?php $this->head() ?>
</head>
<body style="background-color: #e9ecef;">
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
            <img src="<?= Yii::$app->request->baseUrl?>/assets_/img/logo.png" alt="">
            <span class="d-none d-lg-block">PAMANA</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div> --><!-- End Search Bar -->
        <nav class="header-nav ms-auto">
            <?php
                if (Yii::$app->user->isGuest) {
            ?>
                <div class="d-flex align-items-center">
                    <div class="nav-item pe-3">
                        <a href="<?= Yii::$app->request->baseUrl?>/site/login" class="get-started-btn scrollto">LOGIN</a>
                    </div>
                </div>
            <?php
                } else {
            ?>
                    <ul class="d-flex align-items-center">

                        <li class="nav-item dropdown pe-3">

                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="site/logout" data-bs-toggle="dropdown">
                            <img src="<?= Yii::$app->request->baseUrl?>/assets_/img/logo.png" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                            </a>
                            <!-- End Profile Iamge Icon -->

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6><?= Yii::$app->user->identity->username ?></h6>
                                    <span>Position</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="<?= Yii::$app->request->baseUrl?>/employee/profile">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <?php
                                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline']);
                                        echo Html::submitButton(
                                            '<i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>',
                                            ['class' => 'dropdown-item d-flex align-items-center btn btn-link logout']
                                        );
                                        echo Html::endForm();
                                    ?>
                                    <!-- <a class="dropdown-item d-flex align-items-center" href="?= Yii::$app->request->baseUrl?>/site/logout">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>
                                    </a> -->
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
            <?php 
                }
            ?>
                
            
            <!-- <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="site/login" data-bs-toggle="dropdown">
                        <img src="?= Yii::$app->request->baseUrl?>/assets_/img/logo.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Login</span>
                    </a> -->
                    <!-- End Profile Iamge Icon -->

                    <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>?= Yii::app->user->identity ?></h6>
                            <span>Position</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->

                        <!-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="site/logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                            </a>
                        </li>

                    </ul> --><!-- End Profile Dropdown Items -->
                <!-- </li> --><!-- End Profile Nav -->

            <!-- </ul> -->
        </nav><!-- End Icons Navigation -->
    </header>

<?php $this->beginBody() ?>
<?php 
    if (!Yii::$app->user->isGuest) {
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <?php 
            //if(Yii::$app->user->can('module_setup')){
        ?>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#manage-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gear"></i><span>Manage</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="manage-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/manage/staff">
                            <i class="bi bi-circle"></i><span>User/Admin Staff</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/manage/pds">
                            <i class="bi bi-circle"></i><span>e-PDS</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/manage/attendance">
                            <i class="bi bi-circle"></i><span>Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/manage/attendance">
                            <i class="bi bi-circle"></i><span>Performance</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/manage/security">
                            <i class="bi bi-circle"></i><span>Security</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/manage/holidays">
                            <i class="bi bi-circle"></i><span>Holidays</span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php 
            //}
            //if(Yii::$app->user->can('module_setup')){
        ?>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#setup-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gear"></i><span>Module Setup</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="setup-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/item-numbers">
                            <i class="bi bi-circle"></i><span>Item Numbers</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/positions">
                            <i class="bi bi-circle"></i><span>Positions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/position-types">
                            <i class="bi bi-circle"></i><span>Position Types</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/leave-types">
                            <i class="bi bi-circle"></i><span>Leave Types</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/appointment-status">
                            <i class="bi bi-circle"></i><span>Appointment Status</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/staff-types">
                            <i class="bi bi-circle"></i><span>Nature of Appointment (Staff Types)</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/sections">
                            <i class="bi bi-circle"></i><span>Sections</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/divisions">
                            <i class="bi bi-circle"></i><span>Divisions</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/salary-groups">
                            <i class="bi bi-circle"></i><span>Salary Groups</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/salary-grades">
                            <i class="bi bi-circle"></i><span>Salary Grades</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/salary-grades-steps">
                            <i class="bi bi-circle"></i><span>Salary Grade Steps</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/status-of-appointments">
                            <i class="bi bi-circle"></i><span>Status of Appointments</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?= Yii::$app->request->baseUrl?>/performance/spms">
                            <i class="bi bi-circle"></i><span>SPMS</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/employee/personal-data-sheet/personal-information">
                    <i class="bi bi-person-badge"></i>
                    <span>e-PDS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/employee/payroll">
                    <i class="bi bi-person-badge"></i>
                    <span>Online View of Payroll</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="?= Yii::$app->request->baseUrl?>/employee/schedule">
                    <i class="bi bi-person-badge"></i>
                    <span>Schedule</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#time-and-attendance-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gear"></i><span>Time and Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="time-and-attendance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link" href="<?= Yii::$app->request->baseUrl?>/employee/attendance">
                            <i class="bi bi-circle"></i><span>Attendance</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="?= Yii::$app->request->baseUrl?>/time-and-attendance">
                    <i class="bi bi-person-badge"></i>
                    <span>Time and attendance</span>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="?= Yii::$app->request->baseUrl?>/security">
                    <i class="bi bi-person-badge"></i>
                    <span>Security</span>
                </a>
            </li> -->
        <?php
            //}
            //if(Yii::$app->user->can('employee_module')){
        ?>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#performance-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-bookmark"></i><span>Performance</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="performance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link" href="?= Yii::$app->request->baseUrl?>/performance/daily-monitoring-output">
                            <i class="bi bi-circle"></i><span>DMO</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="?= Yii::$app->request->baseUrl?>/performance/monthly-accomplishment-report">
                            <i class="bi bi-circle"></i><span>MAR</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="?= Yii::$app->request->baseUrl?>/performance/individual-performance-commitment-and-review">
                            <i class="bi bi-circle"></i><span>IPCR</span>
                        </a>
                    </li>
                </ul>
            </li>

      <!-- End Components Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Forms Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Tables Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Charts Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Icons Nav -->

      <!-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li> -->
      <!-- End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li> -->
      <!-- End F.A.Q Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> -->
      <!-- End Register Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li> -->
      <!-- End Login Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> -->
      <!-- End Error 404 Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> -->
      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <?php 
    }
  ?>

<main id="main" role="main" class="main">
    <!-- <div class="container"> -->
        <!-- <h1>?= isset($this->title) ? Html::encode($this->title) : '' ?></h1> -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    <!-- </div> -->
</main>

<!-- <footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; ?= Html::encode(Yii::$app->name) ?> ?= date('Y') ?></p>
        <p class="float-right">?= Yii::powered() ?></p>
    </div>
</footer> -->
    <!-- ======= Footer ======= -->
    <!-- <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PAMANA SYSTEMS</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> -->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <!-- Designed by <a href="https://www.nationalmuseum.gov.ph/">National Museum of the Philippines</a>
        </div>
    </footer> --><!-- End Footer -->

<?php $this->endBody() ?>

    <!-- Vendor JS Files -->
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/php-email-form/validate.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/quill/quill.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/chart.js/chart.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/vendor/echarts/echarts.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= Yii::$app->request->baseUrl?>/assets_/js/main.js"></script>

</body>
</html>
<?php $this->endPage();
