<?php
$layout = 'no-nav';
include 'header.php';
?>
    <!-- 네비게이션 없을 경우 헤더 -->
    <header class="no_nav_header">
        <div class="logo">
            <?php
             include './components/logo.php';
            ?>
        </div>
    </header>
    <!-- //.네비게이션 없을 경우 헤더 -->
    <!-- content : 콘텐츠 영역 -->
    <div class="content">
        <!-- content_inner -->
        <div class="content_inner">
            <?php
                //로그인페이지
                include 'components/login.php';
                // include 'components/authentication.php';
                // include 'components/sign_up.php';
            ?>
        </div>
        <!-- //.content_inner -->
    </div>
    <!-- //.content -->

<?php
include 'footer.php';
?>
