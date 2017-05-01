
<div class="container-fluid" id="searchresult">

  <div class="container">

    <?php

      foreach ($resultArray as $key => $value) {

        $word = $value->word;
        $english = $value->english;
        $meaning = $value->meaning;
        $sound = $value->sound;
        $domain = $value->domain;
    ?>

    <div class="row">

      <h4>
        <?php
          echo $word. " (". $english. ") ";
        ?>
        <button name="checked" id="play_sound" class="btn btn-xs btn-success">Play</button>

      </h4>
      <p>
        <?php echo $meaning; ?>
      </p>

    </div>
    <?php } ?>
  </div>

</div>
