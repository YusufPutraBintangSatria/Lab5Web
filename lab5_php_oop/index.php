<?php
$mod = @$_REQUEST['mod'];
switch ($mod) {
  case "view":
    require("view.php");
    break;
  case "tambah":
    require("tambah.php");
    break;
  case "form":
    require("form-input.php");
    break;
 default:
 require("error.php");
}
?>