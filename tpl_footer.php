<?php
/**
 * DokuWiki Bootstrap3 Template: Footer page
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

if (page_findnearest('footer', bootstrap3_conf('useACL'))):
?>
<footer id="dw__footer" class="small navbar <?php echo ((bootstrap3_conf('inverseNavbar')) ? 'navbar-inverse' : 'navbar-default') ?>">
  <div class="container<?php echo (bootstrap3_is_fluid_container()) ? '-fluid' : '' ?>">
    <div class="navbar-text">
      <?php tpl_include_page('footer', 1, 1, bootstrap3_conf('useACL')); ?>
    </div>
  </div>
</footer>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//dadu.eu/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 13]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//dadu.eu/piwik/piwik.php?idsite=13" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<?php endif; ?>
