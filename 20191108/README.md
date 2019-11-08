# Javascript vs PHP
- HTML, CSS => 정적인 언어
  - 정보를 사용자별로 컨텐츠를 제공하기 어려움
  - 동적인 페이지를 제공하기 어려움
- Javascript, PHP => 동적인 언어
  - 사용자별로 요청에 따른 다른 컨텐츠를 제공할 수 있음
  - 목적
    - HTML을 제어
  - 차이점
    - 클라이언트와 서버에서의 구동방식 차이
    - 구현할 수 있는 기능상의 차이
  ~~~GET
  요청 방식
  programing.php?content=html
  ~~~
***
## Javascript
- 클라이언트 측에서 실행되는 스크립트 언어
- 동적인 언어
- 목적
  - 클라이언트 측에서 브라우저나 HTML을 제어하기 위한 목적으로 사용
    1. HTML을 동적으로 사용
    2. 입력 값 검증 (Client Side Validation Check)
        - 예) 패스워드는 6글자 이상 3가지 조합으로 이루어 져야 함
    3. 마우스 우클릭 제한, 복상 방지, 특정 키 사용 방지
    4. DOM(Document Object Model) 접근(HTML 제어)
- 기타
  - 악성코드(클라이언트 측에서 실행되는 악성코드) => 정보 유출, 키로깅...
  - 브라우저가 수행하는 작업
    ```
    Domain Redirection Attack
    location.replace("http://malware.com")
    ```
***
## PHP
- 서버 측에서 실행되는 스크립트 언어
- 미들웨어(Middleware)
- 서버 측에서 서버 측의 기능 구현 및 데이터베이스 연동과 HTML 제어를 목적으로 사용
  1. 서버 측에서 사용자의 요청에 따라 동적인 페이지를 제공하기 위해 사용
      - 파일이나 DBMS와 연동해서 얻은 정보를 HTML 형태로 가공
      - 검색의 결과에 따라 동적인 페이지가 반환
      - 로그인, 회원가입 등
  2. 쿠키 및 세션 관리 (Persistent Cookie vs Session Cookie)
  3. 서버를 제어하기 위해 사용
- 기타
  - 악성코드(서버 측에서 실행되는 악성코드)
    - 웹셸 - 웹에서 사용되는 백도어
## PHP 설치 및 설정
  ```
  # 설치
    yum -y install php php-mysql
  # 설정 파일
    /etc/php.ini
  # 특정 확장자 사용 추가
    vi /etc/httpd/conf.d/php.conf
    Addtype application/x-httpd-php .html
  ```
***
## Javascript와 PHP의 기본 사용
- 공통
  - 단일 행 주석 : \/\/
  - 다중 행 주석 : \/* \*/
  - 연산자 : +, -, \*, /
  - 논리 연산자 : &&, ||, ~
  - 배열, 연관배열(C언어의 구조체)
    - 배열 : 순서가 있는 리스트, 인덱스로 값에 접근
    - 연관배열 : 순서가 없는 리스트, Key : Value로 구성, Key로 Value에 접근
  - 조건문
    - if문
    ```
    if(조건){
      실행;
    }
    else if(조건){
      실행;
    }
    else{
      실행;
    }
    ```

- Javascript : <strong>.js</strong>파일
  - &lt;script&gt; ... &lt;/script&gt;
  ~~~ Javascript
  var str = "Hello, Javascript";
  document.write("<p>" + str + "</p>");

  // 문자열 연산자
  var str = "Hello" + " " + "World";
  var email = "id" + "@" + "domain";

  // 변수 선언
  var [변수] = [value];

  // Popup 창
  alert("내용")

  // 배열
  var record = new Array(1, "학생1", 25, "대학생");
  document.write("<p>이름 : " + record[1] +"</p>");

  // 조건 : 입력값 검증
  var password = prompt("패스워드를 입력하세요");
  if(password.length < 8 || passwlrd.length > 16){
    alert("패스워드는 8 ~ 16으로 구성해야 합니다.");
  }
  if(password == "kimyaki9509"){
    alert("Successed!");
  }else{
    alert("Failed")
  }
  ~~~

- PHP : <strong>.php</strong>파일
  - &lt;?php ... ?&gt;
  - PHP 슈퍼글로벌 변수
    - 미리 예약된 변수들
    - \$\_GET, \$\_POST, \$\_REQUEST, \$\_SERVER, \$\_COKKIE, \$\_SESSION...
  ~~~ PHP
  $str = "Hello, PHP";
  echo "<p>{$str}</p>"

  // 문자열 연산자
  $str = "Hello"." "."World";
  $email = "id"."@"."domain";

  // 변수 선언
  $[변수] = [값];
  $str = "cat /etc/passwd"; // 공격 명령어
  system($str);

  // 배열
  $record = array(2, "학생2", 20, "취준생");
  echo "이름 : ".$record[1].", 나이 : ".$record[2];

  // 연관배열
  $record2 = array("no" => 3, "name" => "학생3", "age" => 22, "job" => "개발자");
  echo "이름 : {$record2['name']}, 직업 : {$record2['job']}";

  // 조건 : 입력값 검증
  $id = $_POST['id'];
  $pw = $_POST['pw'];
  // 패스워드 길이 검증
  if(strlen($pw) < 8 || strlen($pw)> 16){
    echo "<script>
            alert('패스워드는 8 ~ 16으로 구성해야 합니다.');
            history.back();
          </script>";
          exit;
  }
  if($id == "test" && $pw == '123456789'){
    echo "<script>
            alert('Successed');
            location.replace('Basic.html');
          </script>";
  }else{
    echo "<script>
            alert('Failed');
            location.replace('Login.html');
          </script>";
  }
  ~~~
***
## 디버깅
- Javascript : 브라우저의 개발자 도구에서 확인 가능
  - Console Tab에 에러문구로 확인
- PHP : Code가 실행되지 않으면 서버에서 중단
  - 서버측의 문제 발생 (HTTP ERROR 500 반환)
  - 디버깅 모드를 설정에서 켜야 확인 가능
  ```
  # PHP 설정 파일 수정
  vi /etc/php.ini
  # 530번째 줄
  display_errors = On
  ```
