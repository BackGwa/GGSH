
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