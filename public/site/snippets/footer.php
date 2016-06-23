<footer>
<div class="container">
  <div id="pages">
      <h3>Stuff &amp; Things:</h3>
      <ul>
          <li><a href="/about">About</a></li>
          <li><a href="/reading">Reading</a></li>
          <li><a href="/quotes">Quotes</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/hire-me">Hire Me</a></li>
      </ul>
  </div>
      <div id="places">
      <h3>How To Stalk Me:</h3>
        <ul>
          <li id="twitterIcon"></a><a href="http://www.twitter.com/peterbinks">Twitter</a></li>
          <li id="dribbbleIcon"><a href="http://www.dribbble.com/peterbinks">Dribbble</a></li>
          <li id="instagramIcon"><a href="http://www.instagram.com/peterbinks">Instagram</a></li>
          <li id="googleIcon"></i><a href="http://behance.net/peterbinks">Behance</a></li>
          <li id="linkedinIcon"><a href="http://www.linkedin.com/in/peterbinkowski" >LinkedIn</a></li>
          <li id="emailIcon"><a href="mailto:peter@peterbinks.net">Email</a><li>
        </ul>
  </div>
  <div class="copyright">
    <?php echo kirbytext($site->copyright("- Peter Binokwski"));  ?> <p>Have a great <span id="day"></span></p>
  </div>
</div>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
      $('body').addClass('js');
      var $menu = $('#menu'),
        $menulink = $('#nav-icon');

    $menulink.click(function() {
      $menu.toggleClass('active'),
      $menulink.toggleClass('active');
      return false;
    });});
  </script>

 <script>
  var _gaq=[['_setAccount','UA-15758586-2'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<script>
$("p:has(img)").contents().unwrap();
</script>

<script type="text/javascript">
var d = new Date();
var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday",
  "Friday", "Saturday");
document.getElementById("day").innerHTML = (weekday[d.getDay()]);
</script>

</body>

</html>
