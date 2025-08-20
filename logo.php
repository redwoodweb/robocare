<?php if (isset($page) && $page === 'login') : ?>
    <!-- 로그인 페이지일 때 로고 -->
    <a href="./index.php">
        <img src="public/img/logo.png" alt="GST">
    </a>
<?php else : ?>
    <!-- 로그인 페이지가 아닐 때 로고 -->
    <a href="./index.php">
        <img src="public/img/top_logo.png" alt="GST">
    </a>
<?php endif; ?>