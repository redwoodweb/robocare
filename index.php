<?php
$layout = 'common';
include 'header.php';
?>    
    <!-- content : 콘텐츠 영역 -->
    <div class="content">
        <!-- content_inner -->
        <div class="content_inner">
            <ul>
                <li><a href="./login.php">로그인</a></li>
                <li><a href="./sign_up.php">회원가입</a></li>
                <li><a href="./user_info_view.php">사용자 정보관리 확인/수정</a></li>
                <li><a href="./authentication.php">본인 인증 페이지</a></li>
                <li><a href="./completed_sign_up.php">회원가입 완료</a></li>
                <li><a href="./find_id.php">아이디 찾기</a></li>
                <li><a href="./result_find_id.php">아이디 찾기 완료</a></li>
                <li><a href="./agreement.php">약관동의</a></li>
                <li><a href="./user_info_view_auth.php">사용자 정보관리 인증</a></li>
            </ul>
            //해당 컴포넌트 : sign_up.php(회원가입),user_info_view.php(사용자 정보관리 확인/수정),authentication.php(본인인증페이지),completed_sign_up.php(회원가입완료)
            /////////////// find_id.php(아이디 찾기),result_find_id.php(아이디 찾기 완료), agreement.php(약관동의), user_info_view_auth.php(사용자 정보관리 인증)            
        </div>
        <!-- //.content_inner -->
    </div>
    <!-- //.content -->

<?php
$fLayout = 'f_relative';
// include 'footer.php';
?>
