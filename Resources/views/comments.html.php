<script type="text/javascript">
    var disqus_shortname = '<?php echo $disqus_shortname ?>';
    var disqus_developer = <?php echo $disqus_developer ?>;
    <?php if (!empty($disqus_identifier)): ?>
    var disqus_identifier = '<?php echo $disqus_identifier ?>';
    <?php endif; ?>
    <?php if (!empty($disqus_url)): ?>
    var disqus_url = '<?php echo $disqus_url ?>';
    <?php endif; ?>
    <?php if (!empty($disqus_title)): ?>
    var disqus_title = '<?php echo $disqus_title ?>';
    <?php endif; ?>

    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>