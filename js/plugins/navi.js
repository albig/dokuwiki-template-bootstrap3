/*
 * DokuWiki Bootstrap3 Template: Plugins Hacks!
 *
 * Home     http://dokuwiki.org/template:bootstrap3
 * Author   Alexander Bigga <alexander@bigga.de> 
 * License  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// Navi plugin

var $dw_aside = jQuery('.dw__sidebar');

if ($dw_aside.length) {

  var loc = window.location.href;

  $dw_aside.find('li a').each(function() {

      if (loc.indexOf(jQuery(this).attr("href")) != -1) {

           jQuery(this).parent().addClass("active");

      }

   });

}
