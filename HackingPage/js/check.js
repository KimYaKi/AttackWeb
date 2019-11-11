function joinFormChk() {
  var id = document.joinForm.id.value;
  var pw = document.joinForm.pw.value;
  var pw_re = document.joinForm.pw_re.value;

  if (id.length < 4 || id.length > 12) {
    alert("아이디가 잘못 되었습니다.");
    document.joinForm.id.focus();
    return false;
  }
  if (pw.length < 6 || pw.length > 20) {
    alert("패스워드 길이가 잘못 되었습니다.");
    document.joinForm.pw.focus();
    return false;
  }
  if (pw != pw_re) {
    alert("패스워드가 동일하지 않습니다.");
    document.joinForm.pw_re.focus();
    return false;
  }
  document.joinForm.submit();
}
