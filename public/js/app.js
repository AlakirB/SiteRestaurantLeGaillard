// Fixed navbar on scroll
window.addEventListener('scroll', function() {
    var nav1 = document.querySelector('.nav-1');
    var nav2 = document.querySelector('.nav-2');
    var placeholder = document.getElementById('navbar-placeholder');
    var nav1Height = nav1.offsetHeight;
    var nav2Height = nav2.offsetHeight;

    if (window.scrollY > nav1Height) {
        nav2.classList.add('fixed');
        placeholder.style.height = nav2Height + 'px';
    } else {
        nav2.classList.remove('fixed');
        placeholder.style.height = '0px';
    }
});