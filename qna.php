<!DOCTYPE html>
<html lang="sk">
<?php include_once "parts/header.php"?>
<?php include_once "parts/nav.php"?>
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
      <section class="container">
      <div class="accordion">
        <div class="question">Otázka 1</div>
        <div class="answer">Odpoveď 1</div>
      </div>
      <div class="accordion">
        <div class="question">Otázka 2</div>
        <div class="answer">Odpoveď 2</div>
      </div>
      <div class="accordion">
        <div class="question">Otázka 3</div>
        <div class="answer">Odpoveď 3</div>
      </div>
    </section>
    </section>
  </div>
  </main>
  <?php
  $file_path = "parts/footer.php";
  if(!include_once($file_path)) {
      echo"Failed to include $file_path";
  }
  ?>
<script src="js/accordion.js"></script>
<script src="js/menu.js"></script>
</body>
</html>