<footer class="section-60 page-footer bg-dark-blue section-skew">
        <div class="skew-block"></div>
        <div class="shell-wide">
          <div class="range range-xs-center range-sm-middle text-md-left">
            <div class="cell-xs-10 cell-md-6">
              <!--Footer brand--><a href="index.html"><img width='165' height='76' src='<?= img_url('logo-light-165x76.png') ?>' alt=''/></a>
            </div>
            <div class="cell-xs-10 cell-md-6 text-md-right offset-top-20 offset-md-top-0">
              <p class="text-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a class="text-dark" href="privacy.html">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="<?= js_url('core.min') ?>"></script>
    <script src="<?= js_url('script') ?>"> </script>
    <script src="<?= js_url('modernizr-2.6.2.min') ?>"></script>
    <script src="<?= js_url('jquery.cookie-1.3.1') ?>"></script>
		<script src="<?= js_url('fine-uploader') ?>"></script>
    <script src="<?= js_url('jquery.steps') ?>"></script>
		<script src="<?= js_url('sweetalert2.min') ?>"></script>
		<script src="<?= js_url('sweetalert2.all.min') ?>"></script>
    <!--script src="<?= js_url('modal') ?>"></script-->
    <script src="<?= js_url('jquery-controller') ?>"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.1/dist/sweetalert2.js"></script-->
    <!--script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script-->
		<script>
				$(function ()
				{
						$("#wizard").steps({
								headerTag: "h2",
								bodyTag: "section",
								transitionEffect: "slideLeft"
						});
						var multiFileUploader = new qq.FineUploader({
            element: document.getElementById("file-drop-area"),
            request: {
                endpoint: '../assets/upload/view/fine-uploader/endpoint.php'
            },
            validation: {
              allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
              sizeLimit: 4048000 // 200 kB = 200 * 1024 bytes
            }
        });
				});
				
		</script>
	
		<!--script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script-->
  </body><!-- Google Tag Manager --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
