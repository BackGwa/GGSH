
<!-- document 제목 -->
<?php
    // 새로운 소식
    $title[0] = '새로운 소식';

    // 계급 시스템에 대하여
    $title[1] = '계급 시스템';

    // 데이터 관리
    $title[2] = '데이터 관리';
?>

<!-- document 소제목 -->
<?php
    // 새로운 소식
    $subtitle[0] = '계급사회의 새로운 소식들,';

    // 계급 시스템에 대하여
    $subtitle[1] = '계급 시스템은 이렇게 작동해요.';
    
    // 데이터 관리
    $subtitle[2] = '여러분의 소중한 정보들은 이렇게 저장되요';
?>

<!-- document 내용 -->
<?php
    // 새로운 소식
    $content[0] = '
                    <h1>
                        곧 정식 릴리즈!
                    </h1>

                    <div class="display-content">
                        계급사회가 곧 있으면 정식 릴리스로 출시가 돼요!
                    </div>

                    <div class="display-content">
                        깔끔하고 직관적인 화면과 셀 수 없을 정도로 추가된 기능들을 사용해보세요! 
                    </div>

                    <h1>
                        새로운 기능
                    </h1>

                    <div class="display-content">
                        <b>> 인터페이스를 대폭 개선했어요.</b>
                        <br>옛날과 다르게 이제 더 이상 답답하고 복잡하지 않아요.
                        새로운 기능을 탐험해보세요!
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 다크 모드를 추가했어요.</b>
                        <br>더 이상은 밝은 화이트 테마 때문에 눈뽕을 당하지 않을거랍니다.
                        라떼는 밝은 테마 때문에 고생 크게 했는데 말이죠..
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 계급 기록을 추가했어요.</b>
                        <br>이제부턴 누구의 점수가 얼만큼 올랐는지 모두가 투명하게 확인할 수 있어요.
                        아직은 많은 부분을 고치고 있어요. 하지만, 개발이 완료된다면, 앞으론 모두가 감시자가 될거랍니다.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 계급 등록을 개선했어요.</b>
                        <br>다른 사람에게 점수를 주거나, 미처 점수를 고르지 못한 상태로 등록하는 일을 더 이상 없을거랍니다.
                        또한, 달무티와 같은 보드게임을 즐기고 추가적인 옵션을 넣지 못하는 일도 없을거랍니다.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 더보기에 편의 기능을 추가했어요.</b>
                        <br>일부 기능은 개발 중이라 접근할 수 없지만, 빠른 시일 내에 모두가 사용할 수 있도록
                        밤샘 노력을 해볼게요!
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 모든 디바이스를 지원해요.</b>
                        <br>막 한 6~7년 전에 나온 기기가 아니라면, 이제부터 완벽하게 어디서든 이쁘게 보일거랍니다.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 보드게임 배정이 개선되었어요.</b>
                        <br>기존에 투박하고 PC 환경에서만 지원되었던 보드게임 배정을 새롭게 바꿨어요.
                        또한, 이제는 보드게임에 참여하지 않는 사람을 포함하지 않고 배정할 수 있어요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 애니메이션이 추가되었어요.</b>
                        <br>이제는 뚝뚝 끊기고 마음에 들지 않는 모션은 삭제해버렸어요.
                        대신, 부드럽고 이쁜 모션이 화면을 슝슝 여행할 거예요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 데이터베이스를 개선했어요.</b>
                        <br>불필요한 데이터나 복잡한 구조 등의 문제를 해결했어요.
                        티끌만큼도 차이가 안나지만.. 기분은 좋잖아요!?
                    </div>

                    <h1>
                        버그 수정
                    </h1>

                    <div class="display-content">
                        <b>> 리소스 괴물을 없앴어요.</b>
                        <br>자꾸 쓸모없게 데이터를 잡아먹는 대따 큰 파일 괴물들을 모두 없애버렸어요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 등록이 안되던 오류를 수정했어요.</b>
                        <br>학번에 대한 정보가 없거나 알 수 없는 값이 들어오면, 그대로 경직이 되던
                        멍청한 아이를 해고하고 좀 지니어스한 아이를 새롭게 고용했어요. 이제 앞으로는 그런 일은 더 이상 일어나지 않아요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 더 이상 무작위로 배치되지 않아요.</b>
                        <br>계급의 점수가 같을때 아주 가끔씩 헷갈려서 찍어서 순위를 매기는 경우가 발생했어요.
                        하지만, 이제는 열심히 메모를 해서 더 이상은 무작위로 배치되지 않아요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 글씨가 이제 잘 보여요!</b>
                        <br>카메라의 묻어있던 얼룩을 제거하고 화각을 좀 더 넓혔어요.
                        이제부터 글씨가 잘려서 안 보이는 일은 없을거에요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> PC 환경에서의 문제를 수정했어요.</b>
                        <br>PC에서는 모바일처럼 자연스러운 화면이 구성되지 않았던,
                        버그를 수정했어요. 이제 모든 것이 깔끔하게 보인답니다.
                    </div>

                    <h1>
                        곧 업데이트
                    </h1>

                    <div class="display-content">
                        <b>> 중복 배정 방지</b>
                        <br>보드게임 배정 시에 계속 같은 게임이 나오지 않게
                        하는 기능을 준비하고 있어요. 이 기능은 출시까지 얼마 안 남았어요.
                    </div>

                    ';

    // 계급 시스템에 대하여
    $content[1] = '
                    <h1>
                        목적은 이래요..
                    </h1>
                    <div class="display-content">
                        특기 적성 보드게임 반에서는 더욱 많은 게임을 즐기고 경쟁하는 재미를 주기 위하여,
                        랭킹 제도를 운영하고 있어요.
                        <br>또한, 추후에 순위권 학생들에게는 소소한 상품들을 선물해줄 예정이랍니다.
                    </div>

                    <h1>
                        플레이 & 기록!
                    </h1>
                    <div class="display-content">
                        게임을 즐긴 후 "계급 등록" 탭에서 자신이 즐긴 보드게임과 점수 등을 기입해서 계급에 반영해요.
                        이 계급으로는 남들과 경쟁 할 수 있고 내가 얼마나 보드 게임을 잘하는지 알 수 있는 지표랍니다.
                        <br>그렇다고 해서 조작해서는 안돼요! 자신이 기록한 점수는 모두가 볼 수 있기 때문에,
                        거짓말을 치면 앞으로 친구들로부터 소외될 수 있어요. <s>(또한, 패널티가 부여되요.)</s>
                    </div>

                    <h1>
                        기록은 모두 자동!
                    </h1>
                    <div class="display-content">
                        기록되는 모든 점수는 특별한 경우를 제외하곤 절대 그 누구도 건들지 않아요.
                        또한, 여러분이 점수를 입력하기만하면, 모든 절차가 여러분이 눈 깜짝할 사이에 스스로 끝나있어요.
                        <br>관리자도 여러분의 점수는 진짜 절대 잘 안 건들이지만, 아래와 같은 경우에는 살짝 건들여요.
                        <br>1. 서비스 오류로 점수 반영이 불가능 할 때
                        <br>2. 사용자의 실수로 점수를 높게 혹은 적게 반영했을때
                        <br>3. 부정행위를 발견하였을때
                    </div>

                    <h1>
                        사용된 기술
                    </h1>
                    <div class="display-content">
                        계급사회 어플리케이션은 모두 웹개발(HTML, CSS, JS)로 이루어져있어요.
                        또한, 여러분의 점수를 처리하고 저장하는 백엔드 기술로는 PHP와 MySQL이 사용되고 있답니다.
                        <br>호스팅 서비스는 "아이비 호스팅"을 사용하고 있으며, 무료 호스팅을 사용하고 있어요.
                        때문에, 트래픽 사용량에 제한이 있어서 과도한 사용은 자제해주세요.
                    </div>

                    <h1>
                        왜 계급인가요?
                    </h1>
                    <div class="display-content">
                        해당 랭킹 시스템은 일부 명칭을 게임 "위대한 달무티"로부터 벤치마킹 해왔어요.
                        그래서 다소 어색한 계급이라는 표현이 사용되고 있어요. 하지만, 뜻하는 것은 "랭킹"과 다르지 않으니
                        이를 참고해주세요!
                    </div>

                    ';
    
    // 데이터 관리
    $content[2] = '
                    <h1>
                        데이터베이스 기술
                    </h1>

                    <div class="display-content">
                        현재 여러분의 정보를 저장하는 데이터베이스는 MySQL을 사용하고 있어요.
                        데이터베이스 서버는 호스팅 업체 "아이비 호스팅"의 DB서버를 사용하고 있으며, 데이터베이스의 용량은
                        여러분의 모든 데이터를 저장하고도 남는 대략 10MB 정도 저장할 수 있어요. 
                    </div>

                    <h1>
                        보안
                    </h1>

                    <div class="display-content">
                        <b>> 서버와 POST 방식으로 소통해요.</b>
                        <br>일반적으로 URL에 데이터가 노출되는 GET 방식과 달리 POST 방식은 비교적 안전하게 데이터를 전송해요.
                        브라우저의 기록과 캐시를 남기지 않아, 추적 또한 어려워요.
                    </div>

                    <div class="display-content"></div>

                    <div class="display-content">
                        <b>> 데이터 저장은 안전하게</b>
                        <br>여러분의 랭킹 데이터는 안전하게 암호화되어서 저장되고 있어요.
                        여러분의 데이터는 안전하게 저장되었다가, 서버가 전송할 때 다시 해독해서 보낸답니다.
                    </div>

                    <div class="display-content"></div>
    
    
    
    
                    ';
?>