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

$footer_page = 'footer';

resolve_pageid('', $footer_page, $footer_page_exists);

if ($footer_page_exists):
?>
<footer id="dw__footer" class="small navbar <?php echo ((bootstrap3_conf('inverseNavbar')) ? 'navbar-inverse' : 'navbar-default') ?> navbar-fixed-bottom">
  <div class="container<?php echo (bootstrap3_is_fluid_container()) ? '-fluid' : '' ?>">
    <div class="navbar-text">
      <?php tpl_include_page($footer_page, 1, 1); ?>
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
