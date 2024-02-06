# goorm_PBL_02
구름 과제 02_DB를 활용한 게시판 기능 구현

*요구사항
- 게시판에 필요한 요소정리(작성자/작성일/글제목/글내용/조회수)
- 게시판 목록/읽기/쓰기 3가지 기능 구현.
- 결과물 스크린샷

(추후에 개선되어야할 게시판 요소들)
+[비밀글설정]
+[파일업로드]
+[회원가입 후 서비스 활용(글권한-수정,삭제 등)]


<p style="color: red;">(※common.php에는 db정보가 있으므로 업로드 제외하였습니다.)</p>

[생성한 DB 테이블]
create table gr_board(
idx int not null auto_increment,
title varchar(50),
content text,
writer varchar(20),
regdate date,
viewpoint varchar(20),
primary key(idx)
)DEFAULT CHARSET = utf8;

