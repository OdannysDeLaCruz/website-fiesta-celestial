document.addEventListener('DOMContentLoaded', function () {
    new simpleParallax(document.querySelector('.landing__welcome-video__background'), {
        scale: 1.5,
        delay: .9,
        transition: 'cubic-bezier(0,0,0,1)'
    })
})