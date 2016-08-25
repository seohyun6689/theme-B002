<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if ($gr_id || $co_id ) { ?>
        </div>
<?php } ?>
    </div>
    <div id="footer">
        <div class="footer">
            <div class="footerL">
                <img src="<?php echo G5_IMG_URL ?>/ft.png" style="width:200px">
            </div>
            <div class="footerR">
                <ul class="bbslist">
                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=company">회사소개</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=privacy">개인정보 처리방침</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=provision">서비스 이용약관</a></li>
                </ul>
                <ul class="copyright">
                    <li>상호: 그누보드5</li>
                    <li>대표: 그누보드</li>
                    <li>주소: 00시 00동 00번지 00빌딜 0층</li>
                    <li>사업자등록번호: 000-00-00000</li>
                </ul>
                <ul class="sns_icon">
                    <li><a href="#"><img src="<?php echo G5_IMG_URL ?>/sns01.gif" alt="네이버 블로그"></a></li>
                    <li><a href="#"><img src="<?php echo G5_IMG_URL ?>/sns02.gif" alt="트위터"></a></li>
                    <li><a href="#"><img src="<?php echo G5_IMG_URL ?>/sns03.gif" alt="페이스북"></a></li>
                </ul>
                <p>Copyright All right reserved theplug.co.kr</p>
            </div>
        </div>
    </div>
</div>
<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}

include_once(G5_THEME_PATH."/tail.sub.php");
?>