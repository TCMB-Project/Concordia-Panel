<!--navbar-->
<nav>
  <div class="nav-wrapper" style="background: <?php echo $_SESSION['oauth2_response']['banner_color']; ?>">
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="left hide-on-med-and-down">
      <li><a href="/"><i class="material-icons">home</i></a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="<?php echo $_ENV['concordia_folder'];?>">管理画面</a></li>
      <li><a href="<?php echo $_ENV['concordia_folder'];?>/application">申請フォーム</a></li>
      <li><a href="<?php echo $_ENV['concordia_folder'];?>/setting">設定</a></li>
    </ul>
  </div>
</nav>

<!--sidenav-->
<ul id="slide-out" class="sidenav">
  <li>
    <div class="user-view">
      <div class="background" style="background: <?php echo $_SESSION['oauth2_response']['banner_color']; ?>"></div>
      <img class="circle" src="https://cdn.discordapp.com/avatars/<?php echo $_SESSION['oauth2_response']['id']."/".$_SESSION['oauth2_response']['avatar'];?>">
      <span class="white-text name"><?php echo $_SESSION['oauth2_response']['username']." #".$_SESSION['oauth2_response']['discriminator'];?></span>
      <span class="white-text email">ID: <?php echo $_SESSION['oauth2_response']['id'];?></span>
    </div>
  </li>
  <li><a href="<?php echo $_ENV['concordia_folder'];?>">管理画面</a></li>
  <li><a href="<?php echo $_ENV['concordia_folder'];?>/application">申請フォーム</a></li>
  <li><a href="<?php echo $_ENV['concordia_folder'];?>/setting">設定</a></li>
</ul>

<!--sidenav script-->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
</script>