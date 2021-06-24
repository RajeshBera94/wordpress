 <footer class="footer site-chrome">
     <div class="legal">

         <div class="footer-logo">
             <!-- <img src="<?php echo the_custom_logo(); ?>" alt="HipHopDX" title="HipHopDX" /> -->
             <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }

                ?>
         </div>
         <div class="mobile">
             <ul class="social-links">
                 <li><a href="https://www.facebook.com/HipHopDX"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://twitter.com/hiphopdx"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://instagram.com/hiphopdx"><i class="fa fa-instagram"></i></a></li>
                 <li><a href="https://www.youtube.com/user/HipHopDX"><i class="fa fa-youtube-play"></i></a>
                 </li>
             </ul>
         </div>
         <span>Copyright &copy; 2021 Hot In Juba</span>
         <span>All Rights Reserved</span>
         <span>
             <a class="mobile" href="/contactus">Contact Us</a>
         </span>
     </div>
     <ul class="desktop">
         <li class="title">Sections</li>
         <li><a href="/">Home</a></li>
         <li><a href="/news">News</a></li>
         <li><a href="/singles">Singles</a></li>
         <li><a href="/videos">Videos</a></li>
         <li><a href="/reviews">Reviews</a></li>
         <li><a href="/interviews">Interviews</a></li>
         <li><a href="/editorials">Editorials</a></li>
         <li><a href="/release-dates">Releases</a></li>
     </ul>
     <ul class="desktop">
         <li class="title">Connect</li>
         <li><a href="http://www.facebook.com/pages/HipHopDXcom/6217682005">Facebook</a></li>
         <li><a href="http://twitter.com/hiphopdx">Twitter</a></li>
         <li><a href="http://instagram.com/hiphopdx">Instagram</a></li>
         <li><a href="http://youtube.com/user/hiphopdx">YouTube</a></li>
         <li><a href="/rss/news.xml">RSS</a></li>
     </ul>
     <ul class="desktop">
         <li class="title">More Info</li>
         <li><a href="/behind-the-site">Behind The Site</a></li>
         <li><a href="/staff">Staff</a></li>
         <li><a href="/advertising">Advertising</a></li>
         <li><a href="/contactus">Contact Us</a></li>
         <li><a href="/tos">Terms of Use</a></li>
         <li><a href="/privacy">Privacy Policy</a></li>
     </ul>
     <ul class="desktop">
         <li class="title">Our Sites</li>
         <li><a href="http://cherimedia.com">Cheri Media</a></li>
         <li><a href="http://battlerap.com">Battle Rap</a></li>
         <li><a href="http://roughstock.com">Roughstock</a></li>
     </ul>
 </footer>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendors.min.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/comments.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
 </div>
 </div>
 
     <!-- <div class="subscription-headline greeting">
         <h3>Subscribe To DX Newsletter</h3>
         Get the most important stories in Hip Hop<br> straight to your inbox
     </div>
     <div class="newsletter-signup-form">
         <form class="form">
             <input type="email" required class="form-control" placeholder="Enter Your Email">
             <button type="submit" name="send" class="newsletter-submit">Subscribe</button>
             <div class="error-container">
                 <div class="error-state">
                     <i class="fa fa-lg fa-exclamation-circle"></i>
                     <div class="message">Something’s Wrong. Make sure you typed in your email correctly.</div>
                 </div>
             </div>
         </form>
     </div>
     <div class="subscription-headline thanks" style="display: none">
         <i class="fa fa-lg fa-check-circle"></i>
         <h3>Thank You! Thank You! Thank You!<br>You’re Far Too Kind</h3>
         To complete the subscription process, please<br>click the link in the email we just sent you.
     </div>
     <div class="loading">
         <i class="fa fa-refresh fa-spin"></i> Joining Newsletter
     </div>
 </div> -->
     <script>
         $(document).ready(function() {

             var overlay = $('#newsletterSignUpOverlay');
             overlay.popup({
                 onopen: function() {
                     window.location.hash = '#signup';
                 },
                 onclose: function() {
                     window.location.hash = '';
                     Cookies.set('newsletterSignUpOverlay', 'shown');
                 }
             });

             $('#newsletterSignUpTab').click(function() {
                 overlay.popup('show');
             });

             $(document).on('mouseleave', function(event) {
                 var seenOverlay = Cookies.get('newsletterSignUpOverlay') === 'shown';

                 if (seenOverlay) {
                     return true;
                 }

                 setTimeout(function() {
                     overlay.popup('show');
                 }, 500);
             });

             if (window.location.hash == '#signup') {
                 overlay.popup('show');
             }

             var spinner = overlay.find('.loading');
             var form = $('#newsletterSignUpOverlay form')
             var errorContainer = form.find('.error-container');

             form.submit(function(e) {
                 e.preventDefault();

                 var email = form.find('input').val();
                 spinner.show();
                 form.hide();
                 errorContainer.removeClass('show-errors');

                 $.post(
                     "/newsletter/join", {
                         email: email
                     },
                     function(data) {
                         spinner.hide();

                         if (data.status == "0") {
                             overlay.find('.greeting').hide();
                             overlay.find('.thanks').show();
                             return;
                         }
                         form.show();
                         errorContainer.addClass('show-errors');
                     });
             });
         });
     </script>
     <script>
         $("body").css({
             "background-color": "#000000",
             "background-image": "none"
         });
     </script>
     <div id="parsely-root" style="display: none">
         <span id="parsely-cfg" data-parsely-site="hiphopdx.com"></span>
     </div>
     <script>
         (function(s, p, d) {
             var h = d.location.protocol,
                 i = p + "-" + s,
                 e = d.getElementById(i),
                 r = d.getElementById(p + "-root"),
                 u = h === "https:" ? "d1z2jf7jlzjs58.cloudfront.net" :
                 "static." + p + ".com";
             if (e) return;
             e = d.createElement(s);
             e.id = i;
             e.async = true;
             e.src = h + "//" + u + "/p.js";
             r.appendChild(e);
         })("script", "parsely", document);
     </script>
     <script>
         (function() {
             var startEngage = new Date().getTime();
             var timeEngaged = 0;
             var idleTime = 0;
             var idle = true;
             var idleReport = false;
             var idleTimer, reportTimer;

             /*  Set the user as idle, and calculate the time
                 they were non-idle */
             var setIdle = function() {
                 idleTime = new Date().getTime();
                 timeEngaged += idleTime - startEngage;
                 idle = true;
             };

             /*  Reset the 5 second idle timer.
                 If the user was idle, start the non-idle timer */
             var pulse = function(evt) {
                 if (idle) {
                     idle = false;
                     startEngage = new Date().getTime();
                     idleReport = false;
                 }
                 window.clearTimeout(idleTimer);
                 idleTimer = window.setTimeout(setIdle, 5000);
             };

             //  Utility function for attaching listeners to the window
             var addListener = function(evt, cb) {
                 if (window.addEventListener) {
                     window.addEventListener(evt, cb);
                 } else if (window.attachEvent) {
                     window.attachEvent('on' + evt, cb);
                 }
             };

             /* Push an event to dataLayer every 15 seconds
                unless the user is idle.
                Also, push an event when the user leaves the page */
             var report = function(evt) {
                 if (!idle) {
                     timeEngaged += new Date().getTime() - startEngage;
                 }

                 // Push the payload to dataLayer, and only push valid time values
                 if (!idleReport && timeEngaged > 0 && timeEngaged < 3600000) {
                     window.dataLayer.push({
                         'event': 'nonIdle',
                         'nonIdleTimeElapsed': timeEngaged
                     });
                 }
                 if (idle) {
                     idleReport = true;
                 }

                 // Fix possible beforeunload duplication problem
                 if (evt && evt.type === 'beforeunload') {
                     window.removeEventListener('beforeunload', report);
                 }
                 timeEngaged = 0;
                 startEngage = new Date().getTime();
                 reportTimer = window.setTimeout(report, 15000);
             };
             addListener('mousedown', pulse);
             addListener('keydown', pulse);
             addListener('scroll', pulse);
             addListener('mousemove', pulse);
             addListener('beforeunload', report);
             idleTimer = window.setTimeout(setIdle, 5000);
             reportTimer = window.setTimeout(report, 15000);
         })();
     </script>
     <?php wp_footer(); ?>
     </body>

     </html>