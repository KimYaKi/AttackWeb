# CSS &lt;20191107&gt;
***
### CSS
- HTML을 디자인하기 위한 언어
  - HTML과 문법적으로 다르나 HTML없이 동작할 수 없는 언어
- HTML은 정보, CSS는 디자인 담당
- CSS 주석 : \/* 주석 \*/

### CSS 문법
- 선택자 { 선언; }
- 선언
  - Property : Value 형태
  ~~~css
  selector {
    property : value;
    ...
  }
  ~~~
***
### CSS in HTML과
- 태그의 속성으로 사용하는 방법
  - 태그의 style 속성을 사용
  - 해당 태그 자체가 컨텐츠를 묶어주기 때문에 선택자가 필요 없음
  - 부모태그에 사용하면 하위 태그들도 함께 변경 됨
  - HTML5에서는 권장하지 않음
  ~~~HTML
  <h1 style="color:red;">제목</h1>
  ~~~
- 선택자를 이용하는 방법
  - 여러 태그의 CSS를 적용하기 위한 방법
  - 동일한 코드의 중복 횟수를 줄일 수 있음
  ~~~HTML
    <head>
      <style>
        th{
          color: white;
          background-color: black;
        }
      </style>
    </head>
    <body>
      <table>
        <tr>
          <th>여기 디자인 수정</th>
          <td></td>
        </tr>
      </table>
    </body>
  ~~~
***
## Declaration
  ~~~ HTML
    color : lightblue;
    text-decoration : underline;
    text-align : center;
    font-size : px | em | rem;
    font-family : monospace;
    font-weight : bold;
    background-color : black
  ~~~

***
### CSS Selector 사용법
- Tag Selector
  - 태그명 { 선언 }
  ~~~ CSS
  태그명:{
    property : value;
    ...
  }
  ~~~
- ID Selector
  - #ID명 { 선언 }
  ~~~ HTML
  <style media="screen">
    #ID{
      property : value;
      ...
    }
  </style>
  ~~~
- Class Selector
  - .클래스명 { 선언 }
  ~~~ HTML
  <style media="screen">
    .Class{
      property : value;
      ...
    }
  </style>
  ~~~
- Multi Selector
  - 선택자1, 선택자2, 선택자3 { 선언 }
  ~~~ HTML
  <style media="screen">
    h1, p, td{
      property : value;
      ...
    }
  </style>
  ~~~
- Etc. Selector
  - 부모/자식 관계의 태그 선택자
  - Tag1 Tag2 { 선언 }
  - #id_green>li  : id가 id_green 하위의 li태그 선택
  - 동일한 태그지만 다른 id와 class를 가진 태그 선택
  ~~~HTML
  <style media="screen">
    ul li{
      property : value;
      ...
    }

    #id_green>li{
      property : value;
      ...
    }

    div#id_green{
      property : value;
      ...
    }
    div.class_puple{
      property : value;
      ...
    }
  </style>
  ~~~
***
### 가상 클래스 선택자
- &lt;a&gt;에서 사용
  - a:link : 방문하지 않았던 링크
  - a:visited : 방문했던 링크
  - a:hover : 링크에 마우스를 롤오버했을 때
  - a:focus : 포커스 될 때
  ~~~ CSS
  a {text-decoration: none}
  a:link {color: black}
  a:visited {color: blue}
  a:hover {color: orange}
  a:active {color: green}
  a:focus {color: gray}
  ~~~
***
### 선택자 우선순위
- 스타일 속성 > 아이디 선택자 > 클래스 선택자 > 태그 선택자 순서
- !important 사용시 어떤 선택자 보다도 우선순위가 높아짐
***
### 박스 모델
- 글자간의 간격이나 태두리간의 간격을 조절할 때 하용하는 모델
  - padding : 글자와 테두리간의 간격
  - height : 컨텐츠의 높이
  - weight : 컨텐츠의 길이
  - margin : Box와 Box간의 간격
***
### 플로트(float)
- float 속성으로 위치를 독립적으로 설정
- 글자들 내에 이미지 혹은 Box가 있는 경우에 독립된 위치로 사용
***
### HTML과 CSS 분리
- HTML파일은 정보만 작성
- CSS파일은 디자인만 작성
~~~HTML
<head>
  <link rel="stylesheet" href="/css/master.css" type="text/css">
</head>
~~~
