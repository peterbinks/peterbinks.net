<footer>
<div class="container">
  <div class="columns six offset-by-three places">
    <h3>How To Stalk Me:</h3>
      <ul>
        <li id="twitterIcon"></a><a href="http://www.twitter.com/peterbinks">Twitter</a></li>
        <li id="dribbbleIcon"><a href="http://www.dribbble.com/peterbinks">Dribbble</a></li>
        <li id="instagramIcon"><a href="http://www.instagram.com/peterbinks">Instagram</a></li>
        <li id="googleIcon"></i><a href="http://github.com/peterbinks">Github</a></li>
        <li id="linkedinIcon"><a href="http://www.linkedin.com/in/peterbinkowski" >LinkedIn</a></li>
        <li id="emailIcon"><a href="mailto:peter@peterbinks.net">Email</a></li>
      <ul>
  </div>
  <div class="copyright">
     <span>&copy; 2016</span>
     <span>Have a great <span id="day"></span></span>
  </div>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

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
    var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday",                         "Thursday", "Friday", "Saturday");
    document.getElementById("day").innerHTML = (weekday[d.getDay()]);
</script>

</body>

</html>
