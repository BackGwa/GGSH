
// 모바일 터치 디바이스 호버 이펙트 지원

var hoverEffect = document.querySelectorAll('.rankitem');

hoverEffect.forEach(i => {
    i.addEventListener('touchstart', function () {
        i.classList.add('active');
    });
});

hoverEffect.forEach(i => {
    i.addEventListener('touchend', function () {
        i.classList.remove('active');
    });
});