<?php
$layout = 'has-nav';
include 'header.php';
?>

    <!-- 메인 헤더 영역 -->
    <header class="main_header">
        <div class="logo">
            <a href="./index.php" alt="홈으로 가기"><img src="public/img/top_logo.png" alt="GST 로고 이미지"></a>
        </div>
        <nav class="navigation">
            <ul>
                <li class="menuitem active"><a href="#">사용자 관리</a></li>
                <li class="menuitem"><a href="#">알림 관리</a></li>
                <li class="menuitem"><a href="#">모니터링</a></li>
                <li class="menuitem"><a href="#">커뮤니티</a></li>
                <li class="menuitem"><a href="#">수집관리</a></li>
                <li class="menuitem"><a href="#">업데이트 관리</a></li>
                <li class="menuitem"><a href="#">기준정보 관리</a></li>
                <li class="menuitem"><a href="#">시스템 관리</a></li>
            </ul>
        </nav>
        <div class="side_widget">
            <div class="profile">
                <div class="photo">
                    <img src="public/img/profile-default.png">
                </div>
                <div class="name">
                    <strong>김정우</strong>님
                </div>
            </div>
        </div>
    </header>

    <!-- content : 콘텐츠 영역 -->
    <div class="content">
        <!-- 좌측 사이드 네비게이션 -->
        <section class="side_navi">
            <div class="menu_top">
                <h3 class="name">사용자 관리</h3>
                <ul>
                    <li class="sidenav_item active"><a href="#">지자체 담당자 등록</a></li>
                    <li class="sidenav_item"><a href="#">로보케어 직원 등록</a></li>
                    <li class="sidenav_item"><a href="#">로봇사용자 등록</a></li>
                    <li class="sidenav_item"><a href="#">보호자 연결 등록</a></li>
                </ul>
            </div>
            <div class="menu_middle">
                <h3 class="name">관리구역 관리</h3>
                <ul>
                    <li class="sidenav_item"><a href="#">기관담당자 관리구역 설정</a></li>
                    <li class="sidenav_item"><a href="#">관리 구역 현황</a></li>
                </ul>
            </div>
        </section>
        <!-- content_inner -->
        <section class="content_inner">
            <?php
                // 01. jQgrid 테이블
                include 'components/content-table.php';                
            ?>
        </section>
        <!-- //.content_inner -->
    </div>
    <!-- //.content -->

<?php
include 'footer.php';
?>
