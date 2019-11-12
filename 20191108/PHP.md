# PHP
***
### 기본 사용 문법
- GET, POST 방식으로 전달된 인자 처리
- 전달된 인자를 기반으로 동적 페이지 제공
  - $\_GET : GET 방식으로 전달된 인자에 접근하기 위한 변수
  - $\_POST : POST 방식으로 전달된 인자에 접근하기 위한 변수
  - $\_COOKIE : COOKIE 방식으로 전달된 인자에 접근하기 위한 변수
  - $\_REQUEST
    - GPC(GET, POST, COOKIE) 방식으로 전달된 인자에 접근하기 위한 변수
    - 보안에 좋지 않음
  - $\_SERVER : HTTP 프로토콜 정보 등에 접근하기 위한 변수
    - 클라이언트의 정보등을 알기 위해 사용
    - IP, Agent, Browser등의 정보
#### 반복문
  ~~~php
  $record = array(1, "사람1", 26, "Good", "학생");

  // for문
  for($i = 0 ; $i < count($record); $i++){
    echo $record[$i]."<br/>";
  }

  // while 문
  $cnt = 0;
  while($cnt < count($record)){
    echo $record[$cnt]."<br>";
    $cnt++;
  }
  ~~~
### PHP 라이브러리 사용
- PHP 메뉴얼
  - php.net
- php-mysql
  - PHP에서 mysql DBMS에 접근하기 위한 라이브러리 제공
***
### Server Side Validation Check
- 입력 값에 대한 검증을 서버에서 수행하는 형태
- 클라이언트에서 HTML이나 Javascript 등으로 입력 값 검증 시 우회 가능성이 존재
- 서버 상에서도 데이터 검증에 대한 코드가 있어야 함
  - Secure Coding
  - HTML이나 Javascript를 우회 할 가능성을 방지할 수 있음
    - 그래도 할 수 있는 방법은 있음
***
### PHP를 이용한 DBMS 연동
- MySQL Monitor VS php-mysql Library
  - Database 접속
    ~~~bash
    # Linux Database Monitor 접속
    mysql -h192.168.95.50 -uroot -p9509
    ~~~
    ~~~php
    // PHP 기본 MySql 접속 함수
    $link = mysql_connect('192.168.95.50', 'root', '9509');
    if(!$link){
      die('Clould not connect: '.mysql_error());
    }
    echo 'Connected Successfully';
    mysql_close($link);

    // 위의 함수 상위 호환
    $link = mysqli_connect('192.168.95.50', 'root', '9509');
    if(!$link){
      die('Clould not connect: '.mysqli_error());
    }
    echo 'Connected Successfully';
    mysqli_close($link);
    ~~~
  - Database 사용
    ~~~bash
    # Linux Database Monitor DB 선택
    USE webhacktest;
    ~~~
    ~~~php
    # mysqli 함수 사용
    $db_selected = mysqli_select_db($link, 'webhacktest');
    if(!$db_selected){
      die ('Can\'t use webhacktest : '.mysqli_error($link));
    }
    echo 'DB Select Successfully';
    ~~~
  - Database 접속 및 선택
    ~~~bash
    # Linux Database Monitor DB 접속 및 선택
    mysql -h192.168.95.50 -uroot -p9509 webhacktest
    ~~~
    ~~~php
    $link = mysqli_connect('192.168.95.50', 'root', '9509', 'webhacktest');
    ~~~
  - SQL 쿼리 전송
    ~~~SQL
    # SQL
    CREATE TABLE test (no INT AUTO_INCREMENT PRIMARY KEY);
    INSERT INTO test VALUES ('');
    ~~~
    ~~~php
    $sql_create_query = "CREATE TABLE test (no INT AUTO_INCREMENT PRIMARY KEY)";
    $sql_insert_query = "INSERT INTO test VALUES (NULL)";

    $result = mysqli_query($link, $sql_insert_query);
    if(!$result){
      die('Invalid query: '.mysqli_error($link));
    }
    ~~~
  - SQL 쿼리에 의한 레코드 출력(개수)
    ~~~SQL
    SELECT count(*) FROM member;
    ~~~
    ~~~php
    mysql_num_rows();
    mysqli_num_rows();
    ~~~
  - SQL 쿼리에 의한 레코드 출력(레코드)
    ~~~SQL
    SELECT id FROM member;
    ~~~
    ~~~php
    mysql_fetch_row();      // 배열 접근
    mysql_fetch_assoc();    // 연관 배열 접근
    mysql_fetch_array();    // 배열 + 연관 배열 접근
    mysql_free_result();    // 리소스 해제 -> 생략 가능

    mysqli_fetch_row();
    mysqli_fetch_assoc();
    mysqli_fetch_array();
    mysqli_free_result();

    ~~~
  - 전체 레코드 출력
    ~~~php
    $mem_count = mysqli_num_rows($result);
    echo "<p>회원 수 : ${mem_count}</p><br />";

    while($row = mysqli_fetch_assoc($result)){
      echo "아이디 : ${row['id']}<br />";
      echo "닉네임 : ${row['nickname']}<br />";
    }
    ~~~
***
### HTTP Cookie VS Session
- Persistent Cookie(Cookie) vs Session Cookie(Session)
- WAS(Web Application Server)가 클라이언트 식별에 사용되는 정보
  - HTTP는 Stateless
  - 연결을 계속 맺은 상태가 아니어서 사용자의 상태를 실별할 수 없음
  - 로그인 정보, 광고, 등등...
- Persistent Cookie (사용자 브라우저 HDD)
  - 클라이언트 브라우저의 HDD에 저장 (반영구적)
  - 만료 : 서버는 만료 일자를 해주지만 클라이언트가 임의로 수정을 할 수 있음
  - 서버가 응답 페이지(해더)를 통해 발급 : Set-Cookie: [변수]=[값]; ...
    - 개인 컨텐츠 정보 등등...
    > 1. 서버에서 요청한 클라이언트에 대한 응답으로 쿠키를 발급
    > 2. 클라이언트의 브라우저에서 발급받은 Cookie를 저장
    >     - 사용자를 식별하는 번호표
    > 3. 로그인 페이지를 요청 할 때, 브라우저가 발급받은 Cookie를 함께 요청

- Session Cookie (사용자 브라우저, 서버 메모리)
  - 브라우저 메모리에 저장 됨 (일시적), 서버 메모리에도 저장(관리)
  - 만료 : 세션을 유지하는 동안만 사용, 서버가 관리
  - 서버가 응답 페이지(해더)를 통해 발급 : Set-Cookie: [변수]=[값]; ...
    - Session Token : Session을 식별하기위해 사용
    - PHP : PHPSESSID
    - JSP : JSESSIONID(?)
  - Session Token은 Cookie를 통해 전달
    > 1. 서버가 Cookie를 발급할 때 해당 클라이언트에 대한 Cookie를 요청 클라이언트 별로 발급
    > 2. 사용자의 브라우저가 Cookie를 함께 요청 한 경우 서버에서는 해당 Cookie에 대한 메모리를 확보하여 상태를 저장
***
### Session Cookie 관리
  ~~~php
  session_start();
  session_destroy();
  ~~~
### Persistent Cookie, Session Cookie의 보안상 차이
### PHP 설정
  ~~~vim
  # 설정 파일
  # vim /etc/php.ini
  short_open_tag = On #Off -> On
  ~~~
  ~~~html
  # 전
    <?php ... ?>
  # 후
    <? ... ?>
  ~~~
### PHP 헤더를 이용한 페이지
### PHP 외부 파일 참조
### PHP 분리
