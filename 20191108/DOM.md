# DOM (Document Object Model)
- HTML을 브라우저에서 제어하기 위한 기능

## HTML DOM
- 웹 페이지가 로드될 때 브라우저가 DOM을 생성
- 브라우저가 받은 HTML을 트리 구조로 나열
- 태그 : Element
  - 태그 안의 컨텐츠 : innerHTML
  - 여러 속성들을 포함 하고 있음(style, onClick, ...)
- Javascript로 동적 HTML을 만드는데 필요한 기능을 제공
  - HTML Element 변경 (p태그 -> a태그 변경)
  - HTML Element Attributes 변경
  - Style Sheet 변경 (동적인 디자인)
  - 기존 Element 및 Attributes 삭제
    - 태그를 지울 수 있음
    - 광고창 닫기와 같은 기능
  - 새로운 HTML Element 및 Attributes 추가
  - 새로운 이벤트 생성
- 배울 내용
  - HTML 요소 변경
  - Style Sheet 변경
  - 이벤트 추가
  - HTML 요소 추가/삭제

## HTML DOM 사용
- 개발자도구(F12)에서 Console 탭으로 이동해서 사용할 수 있음
1. HTML Element 찾기
    ~~~javascript
    /*
    input이라고 되어있는 태그를 식별 getElementByTagName("input")
    선택된 input태그 중 2번째(배열) : getElementByTagName("input")[1]
    찾아온 태그의 값 : getElementByTagName("input")[1].value
    */
    document.getElementByTagName("input")[1].value
    ~~~
2. HTML Element 추가
3. HTML Element 삭제
4. Event Handler 추가
5. HTML 객체 찾기
