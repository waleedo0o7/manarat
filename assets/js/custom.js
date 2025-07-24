let allSwipers = {};

let breakpointSm = 576;
let breakpointMd = 768;
let breakpointLg = 992;
let breakpointXl = 1250;
let breakpoint2xl = 1600;

$(function () {
    toggleMobileMenu();
    toggleMobileSearch();

    
    $(".flatpickr").flatpickr();
    $('.select2').select2();


    $(document).on('click', '.dropdown.prevent-auto-close .dropdown-menu', function (e) {
        e.stopPropagation();
    });

});

function toggleMobileMenu() {
    $(".toggle-mobile-menu-button").on("click", function () {
        $(".mobile-menu-popup").toggleClass("show");
        $("body").toggleClass("overflow-hidden");

    });
}

function toggleMobileSearch() {
    $(".toggle-mobile-search-button").on("click", function () {
        $(".mobile-search").toggleClass("show");
        $("body").toggleClass("overflow-hidden");

    });
}

$('.swiper-custom:not(.swiper-initialized)').each(function (index, element) {

    let $el = $(element);
    let swiperName = `swiper${index}`;

    let nextButtonId = $el.attr('data-next-button');
    let prevButtonId = $el.attr('data-prev-button');
    let paginationId = $el.attr('data-pagination');
    let paginationType = $el.attr('data-pagination-type') || 'bullets'; // bullets - progressbar 
    let nextButton = nextButtonId ? document.getElementById(nextButtonId) : null;
    let prevButton = prevButtonId ? document.getElementById(prevButtonId) : null;
    let paginationEl = paginationId ? document.getElementById(paginationId) : null;


    let spaceBetween = $el.attr('data-space-between') || 10;

    let perView = $el.attr('data-per-view') || 3;

    let perViewMd = $el.attr('data-per-view-md') || 2;

    let perViewSm = $el.attr('data-per-view-sm') || 1;

    let perViewXs = $el.attr('data-per-view-xs') || 1;

    let effect = $el.attr('data-effect') || 'slide' // slide - fade - coverflow - creative - cards  ;


    let centeredSlides = $el.attr('data-centered-slides') || false; // true - false

    let initialSlide = $el.attr('data-initial-slide') || 0; // 0 - 1 - 2 - 3 - 4    

    let options = {
        loop: false,
        slidesPerView: perViewXs,
        spaceBetween: 5,
        effect: effect,
        centeredSlides: centeredSlides,
        initialSlide: initialSlide,

        navigation: {
            nextEl: nextButton || $el.parent().find('.swiper-button-next')[0],
            prevEl: prevButton || $el.parent().find('.swiper-button-prev')[0],
            clickable: true,
        },

        pagination: {
            el: paginationEl,
            type: paginationType,
            clickable: true,
        },

        breakpoints: {
            [breakpointSm]: {
                slidesPerView: perViewSm,
                spaceBetween: 10
            },
            [breakpointMd]: {
                slidesPerView: perViewMd,
                spaceBetween: 10
            },
            [breakpointXl]: {
                slidesPerView: perView,
                spaceBetween: spaceBetween
            }
        }

    }

    let swiperInstance = new Swiper(element, options);

    allSwipers[swiperName] = swiperInstance;
    // console.log(`Initialized ${swiperName}`);

});


function toggle(btn) {
    const submenu = btn.nextElementSibling;
    submenu.classList.toggle('d-none');
}
