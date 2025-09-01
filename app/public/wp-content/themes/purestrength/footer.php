<footer>
        <div>
            <address>
              <p><a href="https://strength-f.com/" target="_blank">運営会社／ストレングス・フィット合同会社</a></p>
            </address>
            <p class="privacy"><a href="../shared/pdf/privacypolicy.pdf" target="_blank">プライバシーポリシー</a></p>
            <ul id="fsns">
                <li>
                    <a href="https://www.facebook.com/purestrength.official/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sns-fb.svg" alt="Facebook"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/purestrength_official/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sns-ig.svg" alt="Instagram"></a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll-lite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- InstanceBeginEditable name="body-ft" -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/0.3.6/ScrollTrigger.min.js"></script>
    <?php if(is_home()): ?>
			<script>
				$(function() {
						$("#content>*:not(#top-sec02)>*,#top-sec02>*:not(#top-sec02-area)>*,#top-sec02-area>*>*").addClass("animated").attr("data-scroll", "toggle(.fadeInUp, .invisible) once");
						$(".top-pr>*").attr("data-scroll", "toggle(.fadeInUp, .invisible) centerVertical once");
						$(".notani").removeClass("animated").removeAttr("data-scroll");
				});
				document.addEventListener('DOMContentLoaded', function() {
						var trigger = new ScrollTrigger();
				});
			</script>
    <?php endif; ?>

    <!-- InstanceEndEditable -->
    <script src="<?php echo get_template_directory_uri(); ?>/shared/js/shared.js"></script>
    <!-- Event snippet for 入会フォームへのクリック conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.open(url, '_blank');
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-663120809/QzASCO_wvMgBEKnXmbwC',
                'event_callback': callback
            });
            return false;
        }
    </script>
	
  <?php wp_footer(); ?>
</body>
<!-- InstanceEnd -->

</html>