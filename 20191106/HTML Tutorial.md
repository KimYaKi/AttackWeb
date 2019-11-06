# HTML 문법
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
***
