<?
	include_once("./common.php");

	$db_conn = mysql_conn();
	$idx = $_REQUEST["idx"];
	$query = "select * from {$tb_name} where idx={$idx}";

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
    <h1>게시물 보기</h1>   
	<?
	if($num != 0) {
		$row = $result->fetch_assoc();
	?>
    <div class="container">
		<table>
		  <tbody>
			<tr>
			  <th scope="row" width="20%" class="text-center">제목</th>
			  <td><?=$row["title"]?></td>
			</tr>
			<tr>
			  <th scope="row" width="20%" class="text-center">작성자</th>
			  <td><?=$row["writer"]?></td>
			</tr>
			<tr>
			  <th scope="row" width="20%" class="text-center">작성일</th>
			  <td><?=$row["regdate"]?></td>
			</tr>
			<tr>
			  <th scope="row" width="20%" class="text-center">내용</th>
			  <td><?=$row["content"]?></td>
			</tr>
		  </tbody>
		</table>
		<div class="text-right">
			<button type="button" onclick="location.href='index.php'">목록</button>
		</div>
    </div>
	<?
	} else {
		echo "<script>alert('존재하지 않는 게시글 입니다.');history.back(-1);</script>";
	}
	?>
  </body>
</html>
<?
	$db_conn->close();
?>
