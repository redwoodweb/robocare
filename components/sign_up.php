<!--회원가입-->
<div class="wrapper sign_up">
    <div class="inner">
        <div class="title">
            <h1 class="f_weight_500">회원가입</h1>
            <p class="prec f_weight_500"><em>＊</em>표시는 필수 입력사항입니다.</p>
        </div>
        <form action="">
          <table id="" class="table_a">
            <tr>
              <th class="f_weight_700"><em>＊</em>사용자 아이디</th>
              <td>
                <input type="text" class="middle" placeholder="8~12자 까지 영문/숫자만 허용">
                <button class="gbtn transparent f_weight_700">중복확인</button>
                <!--a href="#" class="gbtn transparent">중복확인</a-->
                <!--class명 동일하게 추가 시, a,button 모두 사용가능-->
              </td>
            </tr>
            <tr>
              <th class="f_weight_700"><em>＊</em>비밀번호</th>
              <td>
                <input type="text" class="middle" placeholder="10~14자 / 문자+숫자+특수문자 조합">
              </td>
            </tr>
            <tr>
              <th><em>＊</em>한글성명</th>
              <td>
                <input type="text" class="middle">
              </td>
            </tr>
            <tr>
              <th class="f_weight_700"><em>＊</em>영문성명</th>
              <td>
                <input type="text" class="middle">
              </td>
            </tr>
            <tr>
              <th><em>＊</em>영문성명</th>
              <td>
                <input type="text" class="middle">
              </td>
            </tr>
            <tr>
              <th class="f_weight_700"><em>＊</em>주소</th>
              <td>
                <input type="text" class="big">
                <button class="gbtn transparent f_weight_700">검색</button>
              </td>
            </tr>
            <tr>
              <th class="f_weight_700">상세주소</th>
              <td>
                <input type="text" class="big" placeholder="예시) 1동 1002호(00동, 00아파트)＊단독주택의 경우 건물번호 입력">
              </td>
            </tr>
            <tr>
              <th class="f_weight_700"><em>＊</em>이메일</th>
              <td>
                <input type="text" class="small"><i>＠</i><input type="text" class="small">
                <div class="custom-select small">
                  <select>
                    <option value="0">이메일 선택</option>
                    <option value="1">naver.com</option>
                    <option value="2">daum.co.kr</option>
                    <option value="3">gmail.com</option>
                    <option value="4">yahoo.com</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <th class="f_weight_700"><em>＊</em>전화번호</th>
              <td>
                <input type="text" class="tiny"><i>-</i><input type="text" class="tiny"><i>-</i><input type="text" class="tiny">
              </td>
            </tr>
            <tr>
              <th><em>＊</em>휴대폰 번호</th>
              <td>
                <input type="text" class="tiny"><i>-</i><input type="text" class="tiny"><i>-</i><input type="text" class="tiny">
                <button class="gbtn transparent f_weight_700">본인확인</button>
                <input type="checkbox" id="ck" name=""></input>
                <label for="ck"></label>
                <div class="txt">확인 완료 여부</div>
              </td>
            </tr>
          </table>
        </form>
        <div class="button_group">
          <button class="gbtn normal gray f_weight_700">취소</button>
          <button class="gbtn normal f_weight_700">회원가입</button>
        </div>
    </div>
</div>
