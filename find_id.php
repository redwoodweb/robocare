<?php
$layout = 'common';
include 'header.php';
?>
    <!-- 네비게이션 없을 경우 헤더 -->
    <header>
        <div class="logo">
            <a href="/" alt="홈으로 가기"><img src="public/img/top_logo.png" alt="GST 로고 이미지"></a>
        </div>
    </header>
    <!-- //.네비게이션 없을 경우 헤더 -->
    <!-- content : 콘텐츠 영역 -->
    <div class="content">
        <!-- content_inner -->
        <div class="content_inner">
            <?php
                //해당 컴포넌트 : sign_up.php(회원가입),user_info_view.php(사용자 정보관리 확인/수정),authentication.php(본인인증페이지),compeleted_sign_up.php(회원가입완료)
                /////////////// find_id.php(아이디 찾기),result_find_id.php(아이디 찾기 완료), agreement.php(약관동의), user_info_view_auth.php(사용자 정보관리 인증)
                // include 'components/sign_up.php';
                // include 'components/user_info_view.php';
                //include 'components/authentication.php';
                // include 'components/compeleted_sign_up.php';
                include 'components/find_id.php';
                //include 'components/result_find_id.php';
                //include 'components/agreement.php';
                //include 'components/user_info_view_auth.php';
                //include 'components/user_info_view_auth.php';
            ?>
        </div>
        <!-- //.content_inner -->
    </div>
    <!-- //.content -->

<?php
$fLayout = 'f_relative';
include 'footer.php';
?>
