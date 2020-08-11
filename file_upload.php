<?php
if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] == 0) { } else {
  // 送られていない，エラーが発生，などの場合
  exit('Error:画像が送信されていません');
}
// アップロードしたファイル名を取得.
// 一時保管しているtmpフォルダの場所の取得.
// アップロード先のパスの設定(サンプルではuploadフォルダ←作成!)
$uploadedFileName = $_FILES['upfile']['name']; //ファイル名の取得
$tempPathName = $_FILES['upfile']['tmp_name']; //tmpフォルダの場所
$fileDirectoryPath = 'upload/'; //アップロード先フォルダ
// ファイルの拡張子の種類を取得.
// ファイルごとにユニークな名前を作成.(最後に拡張子を追加) 
// ファイルの保存場所をファイル名に追加.
$extension = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
$uniqueName = date('YmdHis') . md5(session_id()) . "." . $extension;
$fileNameToSave = $fileDirectoryPath . $uniqueName;
// 最終的に「upload/hogehoge.png」のような形になる

$img = '';
if (is_uploaded_file($tempPathName)) {
  if (move_uploaded_file($tempPathName, $fileNameToSave)) {
    chmod($fileNameToSave, 0644);
    $img = '<img src="' . $fileNameToSave . '" >';
  } else {
    exit('Error:アップロードできませんでした');
  }
} else {
  exit("Error:画像がありません");
}

// 権限の変更 // imgタグを設定


// 送信データのチェック
// var_dump($_F);
// exit();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>file_upload</title>
</head>

<body>
  <?= $img ?>
</body>

</html>