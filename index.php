<?
  include_once("./common.php");
  
  $db_conn = mysql_conn();//불러오기
  $query = "select * from {$tb_name} where 1 order by idx desc";

  $result = $db_conn->query($query);
  $num = $result->num_rows;
?>
<!doctype html>
<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>구름 과제 02 - 게시판 만들기</title>
    <link href="./css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>게시판 목록</h1>  
    <div class="container">
			<div class="text-right">
        <button type="button" onclick="location.href='write.php'">글쓰기</button>
      </div>
      <table class="table">
        <thead>
        <tr>
          <th width="10%" scope="col" class="text-center">번호</th>
          <th width="50%" scope="col" class="text-center">제목</th>
          <th width="20%" scope="col" class="text-center">작성자</th>
          <th width="20%" scope="col" class="text-center">작성일</th>
        </tr>
        </thead>
        <tbody>
        <?
        if($num != 0) {
          for ( $i=0; $i<$num; $i++ ) {
            $row = $result->fetch_assoc();
        ?>
        <tr>
          <th scope="row" class="text-center"><?=$row["idx"]?></th>
          <td><a href="view.php?idx=<?=$row["idx"]?>"><?=$row["title"]?></a></td>
          <td class="text-center"><?=$row["writer"]?></td>
          <td class="text-center"><?=$row["regdate"]?></td>
        </tr>
        <?
          }
        } else {
        ?>
              <tr>
                <td colspan="4" class="text-center">작성된 내용이 없습니다.</td>
              </tr>
        <?
        }
        ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
<?
	$db_conn->close();//종료
?>
