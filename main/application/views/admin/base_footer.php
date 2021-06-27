 </main>




 </div>

 </div>

 <!-- Le Javascript Pre-loads 
================================================== -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



 <!-- Le Javascript -->
 <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://bootadmin.org/scripts/vendor/bootstrap.min.js"></script>
 <script src="https://bootadmin.org/scripts/vendor/library.min.js"></script>



 <script src="https://bootadmin.org/scripts/core/main.js"></script>

 <script>
     (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
             (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
             m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
     })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
     ga('create', 'UA-104952515-1', 'auto');
     ga('send', 'pageview');



     /* Clock */
     setInterval(showTime, 1000);

     function showTime() {
         let time = new Date();
         let hour = time.getHours();
         let min = time.getMinutes();
         let sec = time.getSeconds();
         am_pm = "AM";

         if (hour > 12) {
             hour -= 12;
             am_pm = "PM";
         }
         if (hour == 0) {
             hr = 12;
             am_pm = "AM";
         }

         hour = hour < 10 ? "0" + hour : hour;
         min = min < 10 ? "0" + min : min;
         sec = sec < 10 ? "0" + sec : sec;

         let currentTime = hour + ":" +
             min + ":" + sec + am_pm;

         document.getElementById("clock")
             .innerHTML = currentTime;
     }
     showTime();
 </script>
 </body>

 </html>