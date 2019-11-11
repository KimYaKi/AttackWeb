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
- HTML Element 찾기, 추가, 삭제
  > 찾기
    ~~~Javascript
    ~~~
  > 추가
    ~~~Javascript
    ~~~
  > 삭제
    ~~~Javascript
    ~~~
    ~~~javascript
    /*
    input이라고 되어있는 태그를 식별 getElementByTagName("input")
    선택된 input태그 중 2번째(배열) : getElementByTagName("input")[1]
    찾아온 태그의 값 : getElementByTagName("input")[1].value
    */
    document.getElementByTagName("input")[1].value
    ~~~
- Event Handler 추가
- HTML 객체 찾기

## 데이터 검증
- 사용자가 입력한 값을 검증하기 위한 코드
  - 잘못된 범위의 값을 입력했는지 검증
  - 입력 값 필터링을 위해 사용
    - 공격 코드 사용 여부 판단
  - 마우스 우클릭 제한, 키보드 입력 제한, ...

## Client Side Validation Check
- 입력 값에 대한 검증을 브라우저에서 수행
  - Input 태그의 속성 값을 사용
    - 입력 제한의 한정적인 부분이 많음
    ~~~HTML
    <input type="text" name="id" maxlength="10"/>
    -> 최대 글자 10글자로 입력 값 제한
    -> 10글자 이상의 값을 입력할 수 있는가?
    ~~~
- ByPass Client Side Validation Check
  - 클라이언트 측의 검증 코드 우회
  - 제한된 입력 값을 검증하는 코드를 처리하지 않게 하는 것
  - 서버에 직접적으로 값을 구성해서 요청하는 경우
  - 검증 코드를 우회할 수 있다 -> 해킹의 기반이 됨
