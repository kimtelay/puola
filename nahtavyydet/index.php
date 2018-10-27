<?php 
$title='Nähtävyydet';
include('../header.php');
?>


    <!-- Main Blog Content -->
    <div class="large-8 columns" role="content">
    <ul data-orbit>
      <li>
        <img src="../img/puolan_hevonen.jpg" />
        <div class="orbit-caption"></div>
      </li>
    </ul>

      <article>

<h4>Puolan tärkeimmät nähtävyydet sijaitsevat Krakovassa:</h4>

<a target="top" href="http://fi.wikipedia.org/wiki/Auschwitz">Auschwitzin keskitysleiri Krakovan lähellä<br />
<a target="top" href="http://www.wawel.krakow.pl/en/">Wawelin linna</a><br />
<a target="top" href="http://en.wikipedia.org/wiki/St._Mary%27s_Basilica,_Krak%C3%B3w">Mariankirkko</a><br />
<a target="top" href="http://en.wikipedia.org/wiki/Sukiennice">Verkahalli (Sukiennice)</a><br />
<a target="top" href="http://en.wikipedia.org/wiki/Kazimierz">Krakovan juutalaiskaupunginosa (Kazimierz)</a><br />
<br /><br />

<h4>Nähtävyyksiä muualla Puolassa:</h4>

<a target="top" href="http://fi.wikipedia.org/wiki/Toru%C5%84">Torun kaupunki</a><br />
<a target="top" href="http://en.wikipedia.org/wiki/Przemy%C5%9Bl">Przemyslin kaupunki</a><br />
<a target="top" href="http://fi.wikipedia.org/wiki/Wroc%C5%82aw">Wroclawin kaupunki (Euroopan kulttuurikaupunki 2016)</a><br/>

<a target="top" href="http://fi.wikipedia.org/wiki/Wieliczkan_suolakaivos">Wieliczkan suolakaivos</a><br />
<br /><br />

<h4>Linkkejä</h4>

<a target="top" href="http://www.mtv3.fi/matkailu/ulkomaat/matkakohteet.shtml/933719?Puola">Maikkarin juttu Krakovasta</a><br/>
<a target="top" href="http://www.city.fi/yhteisot/matkaopas/puola/">Cityn matkaopas Puolaan</a><br/>

<br><br>
<a href="http://clk.tradedoubler.com/click?p(345)a(1971564)g(16952822)url(http://cdon.fi/kirjat/saikkonen%2c_pauliina/puola-8683810)"><img src="http://cdon.fi/media-dynamic/images/product/00/08/68/38/10/1/puola.jpg" /><br />
Puola<br />Pauliina Saikkonen
</a>

        <hr />
        <iframe width="640" height="360" src="//www.youtube.com/embed/R-5VsxqXUQ4" frameborder="0" allowfullscreen></iframe><br>
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