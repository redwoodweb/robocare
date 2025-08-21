# Robocare UI

프로젝트 시작일 : 2020.06.25
퍼블리싱 : 류일환
개발/의뢰인 : 제이랩

### Updated

- 2020.06.30 : 로그인 페이지 / 기본 콘텐츠 페이지 작업 완료
- 2025.08.21 : live sass complier 확장 프로그램과 sass버전 업데이트 간 충돌현상 해결
  (sass @import deprecated(지원 종료)로 @use,@forward로 수정 보완 )

---

### 파일 구조

- header.php
- layout-has-nav.php : 네비게이션 있는 버전
- layout-no-nav.php : 네비게이션 없는 페이지
- footer.php
- components : 콘텐츠영역의 파일들. 각 레이아웃 페이지에서 include를 통해 불러옴.
- public
  - css : style.min.css 파일 하나만 import하면 됨.
  - scss : style.scss에서 모든 scss 파일들을 로드, style.scss 파일 하나만 변환하면 됨.
  - partial : 필요에 따라 분리된 scss 파일. 새로운 파일을 추가할 때마다 위 style.scss 파일에 로드 추가해주어야 함.
  - basic.scss : 전체 css에 공통적으로 적용되는 css 코드들 및 변수들.
  - img
  - js : footer.php 파일에서 스크립트 파일 로드, peterosea에서 작업하는 스크립트 파일.

#### css type 별 구성

- font : 폰트 굵기는 9단계 클래스 제공
  .f_weight_100~900
- button : 투명타입(transparent 클래스 추가) 일반타입( narmal 클래스 추가)으로 제공 a, button tag 모두 사용 가능
  .transparent - 투명버튼
  .normal - 배경색 있는 버튼 default 검색정( 색상코드 : #333333), .gray 클래스(회색 버튼, 색상코드: #818286) 제공

#### 레이아웃 구성

      - 네이게이션 없는 레이아웃 : 파일명 - layout-no-nav.php
      - 네비게이션 있는 레이아웃  : 파일명 - layout-has-nav.php
      - 스크롤 시 footer scroll형 레이아웃: 파일명 layout.php 해당 레이아웃 사용 컴포넌트 파일 내부 주석 처리하여 기재함
