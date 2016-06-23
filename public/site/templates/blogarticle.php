<?php snippet('header') ?>
<?php snippet('menu') ?>

<section>
  <div class="container">
    <div class="blogarticle">
      <article>
        <h1 class="post-title"><?php echo html($page->title()) ?></h1>
        <h3 class="time-stamp"><time datetime="<?php echo $page->date('M d Y') ?>" pubdate="pubdate"><?php echo $page->date('M d Y') ?></time></h3>
        <article class="post">
        <?php echo kirbytext($page->text()) ?>
        <br>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'petebinks'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </article>

        <a href="<?php echo url('blog') ?>">Back…</a>

      </article>
    </div>
  </div>
</section>

<?php snippet('footer') ?>
