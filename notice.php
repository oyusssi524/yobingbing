<?php
include_once "./_header.php"
?>
  <main class="bz-main">
    <section class="bz-sec">
      <div class="container">
<?php
echo file_get_contents("notice/".$_GET['id'].".php")
?>
      </div>
    </section>
  </main>
<?php
include_once "./_footer.php"
?>