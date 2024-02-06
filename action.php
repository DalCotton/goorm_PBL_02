<?
	header("Content-Type: text/html; charset=UTF-8");
	include('./common.php');

	$mode = $_REQUEST["mode"];
	$db_conn = mysql_conn();
	
	if($mode == "write") {
		$title = $_POST["title"];//제목
		$writer = $_POST["writer"];//작성자
		$content = $_POST["content"];//내용
		$content = str_replace("\r\n", "<br>", $content);
		$viewpoint = 0;//조회수

		if($title=="" || $writer=="" || $content=="") {
			echo "<script>alert('작성하세요.');history.back(-1);</script>";
			exit();
		}
		
		$query = "insert into {$tb_name}(title, writer, content, viewpoint, regdate) values('{$title}', '{$writer}', '{$content}', '{$viewpoint}', now())";
		$db_conn->query($query);
		echo "<script>alert('게시글이 작성되었습니다.');</script>";

	}
	echo "<script>location.href='index.php';</script>";//메인으로 이동
	$db_conn->close();
?>