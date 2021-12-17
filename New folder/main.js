//Get Text Data
var textWrapper = document.querySelector('.text .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

//Now Animation Start
anime.timeline({ loop: true })
    .add({
        targets: '.text .letter',
        translateY: ["1.1em", 0],
        translateZ: 0,
        duration: 750,
        delay: (el, i) => 50 * i
    }).add({
        targets: '.text',
        opacity: 0,
        duration: 1000,
        easing: 'easeOutExpo',
        delay: 1000
    });