<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once ($_SERVER['DOCUMENT_ROOT'].$_ENV['concordia_folder'].'/src/mcquery.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" />
  <link rel="stylesheet" href="<?php echo $_ENV['concordia_folder']; ?>/materialize/css/materialize.min.css">
  <link rel="stylesheet" href="<?php echo $_ENV['concordia_folder']; ?>/src/style.css">
  <script src="<?php echo $_ENV['concordia_folder']; ?>/materialize/js/materialize.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Concordia Panel</title>
</head>
<body>
  <?php include('src/navbar.php');?>
  <h5 style="padding-left: 3%">Concordia Panel</h5>
  <div class="container" style="padding-top:1%;">
    <div style="padding-top: 1%;">
      <h5>サーバーステータス</h5>
    </div>
    <div class="card-panel grey lighten-4">
      <div class="flex">
        <div>
          <span class="material-symbols-outlined" style="font-size: 60px;">account_circle</span>
          <p><?php echo $info["Players"]?>人が参加中</p>
        </div>
        <div>
          <span class="material-symbols-outlined" style="font-size: 60px;">conversion_path</span>
          <p>Version:<?php echo htmlspecialchars($info["Version"])?></p>
        </div>
        <div>
        <span class="material-symbols-outlined" style="font-size: 60px;">map</span>
          <p>World:<?php echo htmlspecialchars($info["Map"])?></p>
        </div>
        <div>
          <span class="material-symbols-outlined" style="font-size: 60px;">stadia_controller</span>
          <p>GameMode:<?php echo htmlspecialchars($info["GameMode"])?></p>
        </div>
        <div>
          <span class="material-symbols-outlined" style="font-size: 60px;">counter_4</span>
          <p>IPv4Port:<?php echo htmlspecialchars($info["IPv4Port"])?></p>
        </div>
        <div>
        <span class="material-symbols-outlined" style="font-size: 60px;">counter_6</span>
          <p>IPv6Port:<?php echo htmlspecialchars($info["IPv6Port"])?></p>
        </div>
      </div>
    </div>
    <div style="padding-top: 1%;">
      <h5>管理ツール</h5>
    </div>
    <div class="card-panel grey lighten-4">
      <div class="flex">
        <div>
          <a href="form_check/allowlist" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">group_add</span>
            <p>ホワイトリスト審査</p>
          </a>
        </div>
        <div>
          <a href="form_check/building" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">location_city</span>
            <p>大型建築申請審査</p>
          </a>
        </div>
        <div>
          <a href="addon" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">extension</span>
            <p>アドオン管理</p>
          </a>
        </div>
        <div>
          <a href="reboot" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">restart_alt</span>
            <p>再起動</p>
          </a>
        </div>
      </div>
    </div>
    <div style="padding-top: 1%;">
      <h5>管理ツール(管理者専用)</h5>
    </div>
    <div class="card-panel grey lighten-4">
      <div class="flex">
        <div>
          <a href="power" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">power_settings_new</span>
            <p>サーバーソフト管理</p>
          </a>
        </div>
        <div>
          <a href="backup" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">settings_backup_restore</span>
            <p>バックアップ管理</p>
          </a>
        </div>
        <div>
          <a href="form_check/op" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">stress_management</span>
            <p>OP申請審査</p>
          </a>
        </div>
        <div>
          <a href="access" style="color:inherit">
            <span class="material-symbols-outlined" style="font-size: 60px;">admin_panel_settings</span>
            <p>アクセス権管理</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>