
<?php include("../includes/functions.php"); ?>

<!-- Upit ka bazi -->

<?php
    $conection = mysqli_connect("localhost", "root", "", "widget_corp") or die("Error");
    $baza = "SELECT * FROM subjects ";
    $upit = mysqli_query($conection, $baza);
    $result = mysqli_fetch_all($upit, MYSQLI_ASSOC);
    // if (!$result) {
    //     die("Database query failed.");
    // }
    ?>

<?php include("../includes/layouts/header.php"); ?>

<div class="main">
        <div id="navigation">
          <ul class="subjects">
<!-- Koriscenje vracenih podataka -->
            <?php 
            foreach($result as $subject){
            ?>
            <li><?php echo $subject["menu_name"]; ?></li>
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
