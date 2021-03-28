<?php
  // mysql:host=ホスト名;dbname=データベース名;charset=文字エンコード
  $dsn = 'mysql:host=db;dbname=1st-gen-2nd-work;charset=utf8mb4;[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]';
 
  // データベースのユーザー名
    $user = 'root';
 
  // データベースのパスワード
    $password = 'root_pass_fB3uWvTS';
 
// tryにPDOの処理を記述
try {
 
  // PDOインスタンスを生成
  $dbh = new PDO($dsn, $user, $password);
  echo "接続成功\n";
// エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {
 
  // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();
 
  // 強制終了
  exit;
 
}

$stmt = $dbh->query("SELECT SUM(`study_time(m)`)FROM post_table;");
$result = $stmt->fetchAll();
// var_dump($result);
echo $result[0][0];//合計学習時間
echo $result[0][0];//合計学習時間
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチで東京の人しか解けない！ #東京の難読地名クイズ</title>
    <link rel="stylesheet" href="quizy.css">
    
    <link href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
</head>

<body>
</body>
</html>
