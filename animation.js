/*ini adalah untuk memulai direktori scroll reveal / scroll menampilkan*/
window.sr = ScrollReveal();


/*bagian sr.reveal ini adalah untuk bagian mana saja yang akan memiliki animasi menampilkan secara muncul saat kita scroll dibagian tersebut*/
sr.reveal(".section-title", {
    /*ini durasinya*/
    duration: 750,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    scale: 0.2,
    mobile: false
});

sr.reveal(".section-subtitle", {
    duration: 1000,
    delay: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    scale: 0.2,
    mobile: false
});

sr.reveal(".title", {
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    scale: 0.2,
    mobile: false
});

sr.reveal(".subtitle", {
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    scale: 0.2,
    mobile: false
});
sr.reveal(".left", {
    duration: 1000,
    origin: 'left',
    distance: '300px',
    easing: 'ease-in-out',
    scale: 0.5,
    mobile: false
});

sr.reveal(".right", {
    duration: 1000,
    origin: 'right',
    distance: '300px',
    easing: 'ease-in-out',
    scale: 0.5,
    mobile: false
});

sr.reveal(".order", {
    duration: 2000,
    delay: 1000,
    scale: 0.2,
    easing: 'ease-in-out',
    mobile: false,
    rotate: { x: 0, y: 360, z: 180}
}, 300);

sr.reveal(".donuts", {
    duration: 500,
    delay: 2000,
    scale: 0.1,
    easing: 'ease-in-out',
    mobile: false,
    rotate: {x: 0, y: 0, z: 180}
}, 100);

$("a").on('click', function (event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000, function () {
        });
    }
});