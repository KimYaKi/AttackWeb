# HTML 문법 &lt;20191106&gt;
***
## 기본 문법
* HTML은 대/소문자를 구분하지 않음
* Space, TAB, Enter -> 문법 사이의 구분자
***
## 태그(Tag)와 속성(Attribute)
* 열린 태그부터 닫힌 태그까지 정보를 묶어주는 역할
* 태그(Tag) => 엘리먼트(Element)
* 태그는 부모/자식 관계
***
## HTML 인코딩 (HTML Encoding)
* <,
* DTD(Document Type Definition)
  * HTML 문서의 종류(버전)를 기술
    * HTML4, XHTML(XML + HTML), HTML5 ...
  * &lt;!DOCTYPE html&gt; : HTML5
***
## HTML 태그
#### 골격 태그 순서
 - &lt;html&gt; : HTML 문서의 시작
   - &lt;head&gt; : HTML 문서 설명
     - &lt;title&gt; : 페이지의 제목(브라우저의 타이틀에 표시)
     - &lt;meta&gt; : 페이지의 설명
       - &lt;meta charset="UTF-8"&gt; : 문자의 인코딩 방식
       - &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
       - &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
     - &lt;body&gt; : HTML의 본문(컨텐츠)
#### Body내에서 사용하는 Tag
 - &lt;strong&gt; : 문자를 묶어서 강조할 때 사용
 - &lt;br /&gt; : 단일 태그, 컨텐츠의 개행에 새용
 - &lt;p&gt; : 문단과 문단 사이의 단락을 끊어줄 때 새용
 - &lt;h1&gt; ~ &lt;h6&gt; : 본문의 제목 1 ~ 6순서로 작아짐
 - &lt;a&gt; : Hyper Link 사용
    - href : 속성을 함께 사용, Hyper Reference
      - 정보를 찾아갈 수 있도록 만들어주는 태그
    - <strong>title</strong> 속성
      - 컨텐츠에 마우스를 Rollover했을 때 나오는 문구 Tooltip
      - 모든 태그의 공용 속성
    - target : 문서를 오픈 할 위치를 지정
      - \_blank : 새 창에서 출력
 - &lt;li&gt; : List
    - &lt;ol&gt; : 순서가 있는 리스트, Ordered List
    - &lt;ul&gt; : 순서가 없는 리스트, Unodered List
    - emmet => ol>li*3^ul>li*3
 - &lt;img&gt; : 이미지를 표현
    - 이미지를 클릭 했을 때 다른 페이지로 이동할 때 -> &lt;a&gt; 묶어서 사용
    - src : 이미지의 경로 지정
    - title : 이미지 Tooltip
    - alt : 이미지의 대체 택스트
    - width, height : 이미지 좌/우 길이, px단위
 - &lt;font&gt; : HTML에서 디자인을 담당 => HTML5에서는 퇴출
    - size : 폰트 크기
    - color : 폰트 색상
 - &lt;table&gt;
    - border : 테이블 테두리 굵기 지정
    - &lt;tr&gt; : 테이블 행
    - &lt;td&gt; : 테이블 열
    - &lt;th&gt; : 테이블의 헤더의 열에 사용하는 태그, 데이터 구분 목적
    - &lt;thead&gt;, &lt;tbody&gt; : 테이블 제목, 테이블 내용을 구분
 - &lt;div&gt;, &lt;span&gt; : CSS에서 접근하기 위한 목적
    - id : 특정 컨텐츠를 식별하기 위한 속성
    - class : 여러 컨텐츠를 하나의 집합으로 식별하기 위한 속성
 - &lt;iframe&gt; : 외부 문서를 프레임 형태로 삽입
 - &lt;video&gt; : 비디오 재생 태그
 - &lt;form&gt; : 중요하므로 아래에 정리
***
## &lt;form&gt; 태그
#### 개요
- 양식을 제출할 때 사용
- 회원가입, 로그인, 회원정보 수정, 회원탈퇴 등등...
- 게시글 작성, 게시글 보기, 검색, 파일 업로드 등등...
- 양식 제출 => 페이지 요청(GET, POST)
  - GET : 데이터를 암호화 없이 URL에 담아서 전송, 길이 제한 있음
    - URL?id=avcd&pw=1234
  - POST : 데이터를 Body에 넣어서 전송, 길이 제한 없음
#### 속성
- action
  - 양식을 제출할 페이지
- method
  - 양식을 제출할 요청 메소드
- &lt;input&gt;
  - 사용자로부터 입력받기 위한 태그
  - type : 입력받는 내용에 대한 타입을 설정할 수 있음
    > test(문자열), number(숫자), password(비밀번호)
    date(날짜), month(월), week(요일), time(시간)
    email(이메일 양식),  tel(전화번호)
    checkbox(체크박스), radio(라이도 버튼), select(선택 박스)
    hidden(숨김 양식)
    sumbit(제출), reset(초기화), button(버튼)

  - palceholder : 입력받는 곳에 설명을 보여 줌
  - name : input박스에 변수 명으로 사용 해서 식별 값으로 사용
  - autofocus : 자동으로 커서 이동
- &lt;label&gt;
