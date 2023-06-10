
// 탭 아이디
const tabid = ['rank', 'register', 'log', 'more'];

// 현재 탭
let nowtab = 0;

// 탭 변경 함수
function TabChange(id) {

    // 탭 변경
    TabAnimation(id);
    nowtab = id;

    setTimeout(function(){
        document.getElementById("tab").src = `./${tabid[id]}.php`;
    }, 50)

    // 현재 탭을 제외한 모든 탭을 비활성화
    for (let i = 0; i < tabid.length; i++) {
        if(i != id) {
            document.getElementById(tabid[i]).querySelector('.item-icon').classList.add('unactive');
            document.getElementById(tabid[i]).querySelector('.item-name').classList.add('unactive');
        } else {
            document.getElementById(tabid[i]).querySelector('.item-icon').classList.remove('unactive');
            document.getElementById(tabid[i]).querySelector('.item-name').classList.remove('unactive');
        }
    }
}

// 탭 변경 애니메이션 제거 함수
function RemoveAnimation(){
    var appElement = document.getElementById("app");
    appElement.classList.remove('TabChangeL');
    appElement.classList.remove('TabChangeR');
}

// 탭 변경 애니메이션 재생 함수
function TabAnimation(id){

    RemoveAnimation();

    console.log(`이전 탭 : ${nowtab} | 바뀌는 탭 : ${id}`);

    if(nowtab > id) {
        console.log('왼쪽으로 이동');
        document.getElementById("app").classList.add('TabChangeL');
    } else if (nowtab < id) {
        console.log('오른쪽으로 이동');
        document.getElementById("app").classList.add('TabChangeR');
    }

    setTimeout(RemoveAnimation, 250);
}

// 탭 변경 이벤트 등록 함수
function EventRegister() {
    for (let i = 0; i < tabid.length; i++) {
            document.getElementById(tabid[i]).addEventListener('click', function(){ if(i != nowtab) TabChange(i) })
    }
}

EventRegister();