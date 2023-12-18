<?php include("../includes/functions.php"); ?>

<!-- Upit ka bazi -->

<?php include("../includes/layouts/header.php"); ?>

<div class="main">
  <div id="navigation">
    <ul class="subjects">
      <?php
      $conection = mysqli_connect("localhost", "root", "", "widget_corp") or die("Error");
      $baza = "SELECT * FROM subjects ";
      $upit = mysqli_query($conection, $baza);
      $subject_set = mysqli_fetch_all($upit, MYSQLI_ASSOC);
      ?>
      <!-- Koriscenje vracenih podataka -->
      <?php
      foreach ($subject_set as $subject) {
      ?>
        <li><?php echo $subject["menu_name"]; ?></li>
      <?php
      }
      ?>
    </ul>
    <ul class="pages">
      <?php
      $conection = mysqli_connect("localhost", "root", "", "widget_corp") or die("Error");
      $baza = "SELECT * FROM pages ";
      $upit = mysqli_query($conection, $baza);
      $page_set = mysqli_fetch_all($upit, MYSQLI_ASSOC);
      ?>
      <?php
      foreach ($page_set as $page) {
      ?>
        <li><?php echo $page["menu_name"]; ?></li>
      <?php
      }
      ?>
    </ul>
  </div>
  <div id="page">
    <h2>Manage Content</h2>
  </div>
</div>
<!-- Release returned data -->
<?php include("../includes/layouts/footer.php"); ?>

<!-- Zatvori konekciju -->
<?php mysqli_close($conection); ?>