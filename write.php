<!doctype html>
<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>구름 과제 02 - 게시판 만들기</title>
    <link href="./css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>게시판 글쓰기</h1>    
    <div class="container">
      <form action="action.php" method="POST">
        <div class="form-group">
        <label for="frm_title">제목</label>
        <input type="text" id="frm_title" name="title" placeholder="Title Input">
        </div>
        <div class="form-group">
        <label for="frm_writer">작성자</label>
        <input type="text" id="frm_writer" name="writer" placeholder="Writer Input">
        </div>
        <div class="form-group last">
        <label for="frm_content">내용</label>
        <textarea id="frm_content" name="content" rows="5" placeholder="게시글 내용을 입력하세요."></textarea>
        </div>

        <div class="text-right">
          <input type="hidden" name="mode" value="write">
          <button type="submit">작성</button>
          <button type="button" onclick="history.back(-1);">목록</button>
        </div>
      </form>
    </div>
  </body>
</html>
