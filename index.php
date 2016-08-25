<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="mainArea">
    <ul>
        <li>
            <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=company">
                <h3>사이트소개</h3>
                <p>자세히 보기</p>
                <img src="<?php echo G5_IMG_URL ?>/business.png">
            </a>
        </li>
        <li>
            <a href="">
                <h3>만든 사이트</h3>
                <p>모든 브라우저 & OS 지원</p>
                <img src="<?php echo G5_IMG_URL ?>/technology.png">
            </a>
        </li>
        <li>
            <a href="">
                <h3>1:1 문의</h3>
                <p>관리자님.! 질문있어요.!</p>
                <img src="<?php echo G5_IMG_URL ?>/school.png">
            </a>
        </li>
        <li>
            <a href="">
                <h3>포토폴리오</h3>
                <p>제작된 목록보기</p>
                <img src="<?php echo G5_IMG_URL ?>/photo.png">
            </a>
        </li>
    </ul>
</div>
<div id="mainArea2">
<?php echo latest('theme/notice', 'notice', 5, 30); ?>
<?php echo latest('theme/photo', 'Portfolio', 6, 30); ?>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>