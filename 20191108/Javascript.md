# Javascript
***
### HTML과 Javascript 분리
~~~ HTML
<script type="text/javascript" src="경로/파일.js"></script>
~~~
***
### Javascript 페이지 히스토리/리다이렉트
~~~HTML
<script>location.replace("index.html")</script>
<script>history.back()</script>
<script>location.href("index.html")</script>
~~~
### Client Side Validation Check
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
