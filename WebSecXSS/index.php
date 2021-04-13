<?php include('../Common/Header.php');



if (isset($_POST["submit"])) {

  if ($_POST["name"] != "" && $_POST["comment"] != "") {
    $errorName = "";
    $errorComment = "";
    saveComment($_POST["name"], $_POST["comment"]);
  }

  if ($_POST["name"] == "") {
    $errorName = "*Name can not be blank";
  }

  if ($_POST["comment"] == "") {
    $errorComment = "*Comment can not be blank";
  }
}

$comments = getAllComments();

?>

<body>
  <header class="w3-container w3-theme">
    <h1 class="w3-serif">Insecure Blog</h1>
  </header>

  <section class="w3-container w3-padding-16 w3-center " style="width: 75%; margin: auto;">
    <h2 class="w3-serif">Tokyo</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Skyscrapers_of_Shinjuku_2009_January.jpg/387px-Skyscrapers_of_Shinjuku_2009_January.jpg" class=" w3-image w3-border w3-padding w3-hover-grayscale" alt="Tokyo Central">
    <p class="w3-sans-serif">

    <p><b>Tokyo</b> (<span class="rt-commentedText nowrap"><span class="IPA nopopups noexcerpt"><a href="/wiki/Help:IPA/English" title="Help:IPA/English">/<span style="border-bottom:1px dotted"><span title="/ˈ/: primary stress follows">ˈ</span><span title="'t' in 'tie'">t</span><span title="/oʊ/: 'o' in 'code'">oʊ</span><span title="'k' in 'kind'">k</span><span title="/i/: 'y' in 'happy'">i</span><span title="/oʊ/: 'o' in 'code'">oʊ</span></span>/</a></span></span> <a href="/wiki/Help:Pronunciation_respelling_key" title="Help:Pronunciation respelling key"><i title="English pronunciation respelling"><span style="font-size:90%">TOH</span>-kee-oh</i></a>, <span class="rt-commentedText nowrap"><span class="IPA nopopups noexcerpt"><a href="/wiki/Help:IPA/English" title="Help:IPA/English">/-<span style="border-bottom:1px dotted"><span title="'k' in 'kind'">k</span><span title="/j/: 'y' in 'yes'">j</span><span title="/oʊ/: 'o' in 'code'">oʊ</span></span>/</a></span></span> <a href="/wiki/Help:Pronunciation_respelling_key" title="Help:Pronunciation respelling key"><i title="English pronunciation respelling">-⁠kyoh</i></a>; <a href="/wiki/Japanese_language" title="Japanese language">Japanese</a>: 東京, <i>Tōkyō</i> <small></small><span title="Representation in the International Phonetic Alphabet (IPA)" class="IPA"><a href="/wiki/Help:IPA/Japanese" title="Help:IPA/Japanese">[toːkʲoː]</a></span> <span class="nowrap" style="font-size:85%">(<span class="unicode haudio"><span class="fn"><span style="white-space:nowrap;margin-right:.25em;"><a href="/wiki/File:Ja-Tokyo.ogg" title="About this sound"><img alt="About this sound" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/11px-Loudspeaker.svg.png" decoding="async" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/17px-Loudspeaker.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/22px-Loudspeaker.svg.png 2x" data-file-width="20" data-file-height="20" width="11" height="11"></a></span><a href="//upload.wikimedia.org/wikipedia/commons/c/cf/Ja-Tokyo.ogg" class="internal" title="Ja-Tokyo.ogg">listen</a></span></span>)</span>), officially the <b>Tokyo Metropolis</b> (<a href="/wiki/Japanese_language" title="Japanese language">Japanese</a>: 東京都, <i>Tōkyō-to</i>), is the <a href="/wiki/Capital_of_Japan" title="Capital of Japan">de facto capital</a><sup id="cite_ref-7" class="reference"><a href="#cite_note-7">[note 1]</a></sup><sup id="cite_ref-8" class="reference"><a href="#cite_note-8">[7]</a></sup> and most populous <a href="/wiki/Prefectures_of_Japan" title="Prefectures of Japan">prefecture of Japan</a>. Located at the head of <a href="/wiki/Tokyo_Bay" title="Tokyo Bay">Tokyo Bay</a>, the prefecture forms part of the <a href="/wiki/Kant%C5%8D_region" title="Kantō region">Kantō region</a> on the central Pacific coast of <a href="/wiki/Japan" title="Japan">Japan</a>'s main island of <a href="/wiki/Honshu" title="Honshu">Honshu</a>. Tokyo is the political and economic center of the country, as well as the seat of the <a href="/wiki/Emperor_of_Japan" title="Emperor of Japan">Emperor of Japan</a> and the <a href="/wiki/Government_of_Japan" title="Government of Japan">national government</a>. As of 2021, the prefecture has an estimated population of 13,960,236.<sup id="cite_ref-metrostat_4-1" class="reference"><a href="#cite_note-metrostat-4">[4]</a></sup> The <a href="/wiki/Greater_Tokyo_Area" title="Greater Tokyo Area">Greater Tokyo Area</a> is the <a href="/wiki/List_of_metropolitan_areas_by_population" class="mw-redirect" title="List of metropolitan areas by population">most populous metropolitan area</a> in the world, with more than 37.393&nbsp;million residents as of 2020.<sup id="cite_ref-UN-World-Cities-2018_5-1" class="reference"><a href="#cite_note-UN-World-Cities-2018-5">[5]</a></sup>
    </p>

    </p>
  </section>


  <div class="w3-cell-row">
    <section class="w3-cell w3-mobile w3-container w3-padding-16 w3-theme-d5 " style="width: 50%; margin: auto;">
      <?php
      foreach ($comments as $comment) { ?>
        <div class="w3-panel w3-padding-large w3-theme-l4">
          <h4><?php print($comment['Name'] . ":") ?></h4>
          <p><?php echo ($comment['Comment']) ?></p>
        </div>

      <?php
      }
      ?>
      <form action="" method="post">
        <p>
          <label for="name" class="w3-text-theme-l2">Name:</label>
          <input name="name" type="text" class="w3-input w3-border" />
          <span class="error-text <?php if ($errorName == "") {
                                    print('hide');
                                  } ?>"><?php print($errorName) ?></span>
        </p>
        <p>
          <label for="comment" class="w3-text-theme-l2">Comment:</label>
          <textarea name="comment" id="" class="w3-input w3-border" style="resize: none;"></textarea>
          <span class="error-text <?php if ($errorComment == "") {
                                    print('hide');
                                  } ?>"><?php print($errorComment) ?></span>
        </p>
        <div class="w3-right ">
          <button class="w3-button w3-theme-light  w3-round-large" name="submit">Submit</button>
        </div>
      </form>
    </section>
  </div>

</body>

<script src="https://www.w3schools.com/lib/w3.js"></script>

</html>