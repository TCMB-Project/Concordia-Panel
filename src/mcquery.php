<?php
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;
$Query = new MinecraftQuery();
try
{
  $Query->ConnectBedrock($_ENV['BDS_ADDR'], $_ENV['BDS_PORT'] );
  $info = $Query->GetInfo();
}
catch( MinecraftQueryException $e )
{
  echo "情報取得失敗: ". $e->getMessage();
}