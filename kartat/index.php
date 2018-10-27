<?php 
$title='Kartat';
include('../header.php');
?>

    <!-- Main Blog Content -->
    <div class="large-8 columns" role="content">
    <article>
    <h3>Puolan kartta</h3>

    <div class="flex-video">
      <iframe width="600" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fi/maps?oe=utf-8&amp;client=firefox-a&amp;q=google+maps+puola&amp;ie=UTF8&amp;hq=&amp;hnear=Puola&amp;gl=fi&amp;ll=51.919438,19.145136&amp;spn=6.837622,21.643066&amp;t=h&amp;z=6&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fi/maps?oe=utf-8&amp;client=firefox-a&amp;q=google+maps+puola&amp;ie=UTF8&amp;hq=&amp;hnear=Puola&amp;gl=fi&amp;ll=51.919438,19.145136&amp;spn=6.837622,21.643066&amp;t=h&amp;z=6&amp;source=embed" style="color:#0000FF;text-align:left">Näytä suurempi kartta</a></small> 
    </div>
<p>Puola on sopivan kokoinen maa, jossa on helppo liikkua. 
Ennen matkaa on hyvä tutustua karttoihin ja etsiä jo valmiiksi omien suosikkikohteiden sijainnit. 
</p>
      </article>

      <article>

<p><b><a target="top" href="http://europa.eu/abc/european_countries/eu_members/poland/index_fi.htm">Tietoa Puolasta</a></b></p>
<p><b><a target="top" href="http://kartat.org/?maa=Puola+%28Poland%29">Puolan kartta</a></b></p>
</b></p>
      </article>


    </div>
    
    <!-- End Main Content -->

    <!-- Sidebar -->

    <aside class="large-4 columns">

<div class="panel">
<h5>Tervetuloa Puolaan!</h5>
<p>Puola on saman Itämeren äärellä kuin Suomi. 
Siitä huolimatta yllättävän harva on siellä käynyt.</p>
</div>

<a class="twitter-timeline" height="450" href="https://twitter.com/Kaupunkilomat"  data-widget-id="348118074546847744">Tweets by @Kaupunkilomat</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<br>

<br><br>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 300x250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3354762675531955"
     data-ad-slot="1617362852"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br><br><br>

<div class="panel">
  <ul>
  <?php
  // Regular Expressions ohje: http://dev.mysql.com/doc/refman/5.0/en/regeecho xp$
  $uutiset='puola|varsova|gdansk&nokey=tuless&num=6';
  require_once('/var/www/library/uutisvirta.inc');
  echo uutisvirta($uutiset,'1','8','',1); //$hakusanat,$lang$
  ?>
  </ul>
</div>
    </aside>

<?php include('../footer.php'); ?>