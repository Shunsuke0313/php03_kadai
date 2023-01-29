<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規登録</title>

<body>
    <h1>新規登録</h1>
    <form method="POST" action="insert.php">
        <table id="applyForm">
            <tr><th>ユーザー名を決めましょう</th><td><input type="text" name="u_name" placeholder="Ena Papa"></td></tr>
            <tr><th>お住まいはどちらですか？</th><td><input type="text" name="postel_code" placeholder="2150021"></td></tr>
            <tr><th>お子さんの誕生日を教えてください</th><td><input type="text" name="birthday" placeholder="20211203"></td></tr>
        </table>
        <div class="submitButton"><input type="submit" value="送信"></div>
    </form>
    <h3><a href="select.php">ユーザー一覧</a></h3>

</body>