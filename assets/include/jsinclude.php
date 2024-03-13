<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script
    src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js">
</script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css" />
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script type="text/javascript">
// for favorite is check or uncheck

$(document).ready(function() {
    $('.clickable-image').click(function() {

        var targetId = $(this).data('target');
        var currentColor = $('#' + targetId).data('current-color');

        var newColor = currentColor === "rgb(255, 255, 255)" ? "#21E786" : "rgb(255, 255, 255)";

        $('#' + targetId).css('background-color', newColor);
        $('#' + targetId).data('current-color', newColor);
    });
});

// end favorite is check or uncheck

// for input phone number and country code

$(document).ready(function() {
    var input = $('#phone')[0];
    window.intlTelInput(input, {
        separateDialCode: true
    });
});

// end input phone number and country code


// for type password toggle


$(document).ready(function() {
    $('.password-toggle').click(function() {
        var passwordInput = $('#passwordInput');
        var icon = $('.password-toggle img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', 'assets/images/icon/eye.svg');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', 'assets/images/icon/eye-closed.svg');
        }
    });
});

$(document).ready(function() {
    $('.confirm-password-toggle').click(function() {
        var passwordInput = $('#confirmPasswordInput');
        var icon = $('.confirm-password-toggle img');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.attr('src', 'assets/images/icon/eye.svg');
        } else {
            passwordInput.attr('type', 'password');
            icon.attr('src', 'assets/images/icon/eye-closed.svg');
        }
    });
});

// for otp 

$(document).ready(function() {
    $('.otp-input').on('input', function() {
        if ($(this).val().length == 1) {
            $(this).next('.otp-input').focus();
        }
    });

    $('.otp-input:last').on('input', function() {
        if ($(this).val().length == 1) {
            $(this).blur();
        }
    });
});

// for sign in form redirect 

$(document).ready(function() {
    $('#signin-form').submit(function(event) {
        event.preventDefault();

        window.location.href = '/';
    });
});

$(document).ready(function() {
    $('#signup-form').submit(function(event) {
        event.preventDefault();

        window.location.href = '/otp.php';
    });
});

$(document).ready(function() {
    $('#otp-form').submit(function(event) {
        event.preventDefault();

        window.location.href = '/';
    });
});


// for chang tab in another file 


$(document).ready(function() {
    $('.dashboard-vehicles').click(function() {
        let tabId = $(this).data('tab-id');
        if (tabId) {
            sessionStorage.setItem('activeTab', tabId);

            window.location.href = 'wonvehicles.php';
        }
    });
});

$(document).ready(function() {
    let activeTab = sessionStorage.getItem('activeTab');
    if (activeTab) {
        $(`#${activeTab}`).tab('show');
        sessionStorage.removeItem('activeTab');
    }
});

// for chang tab in another file 



//===========================calendar==================//

$(document).ready(function() {
    var calendarEl = $('.calendar')[0];

    if (calendarEl) {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [{
                    title: 'Event 1',
                    start: '2024-03-10',
                    classNames: ["first-event"]
                },
                {
                    title: 'Event 2',
                    start: '2024-03-10',
                    classNames: ["second-event"]
                },
                {
                    title: 'Event 3',
                    start: '2024-03-10',
                    classNames: ["third-event"]
                },
                {
                    title: 'Event 2',
                    start: '2024-03-15',
                    classNames: ["first-event"]
                },
            ],
        });
        calendar.render();
    } else {
        console.error('Calendar element not found');
    }
});

// for image drag

$(document).ready(function() {
    $('#dropZone').on('click', function() {
        $('#fileInput').click();
    });

    $('#fileInput').on('change', function(e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = function(event) {
            const imageUrl = event.target.result;
            $('#dropZone').html(`<img src="${imageUrl}" alt="Dropped Image">`);
        };
        reader.readAsDataURL(file);
    });

    $('#dropZone').on('dragover', function(e) {
        e.preventDefault();
    });

    $('#dropZone').on('drop', function(e) {
        e.preventDefault();
        const file = e.originalEvent.dataTransfer.files[0];
        const reader = new FileReader();
        reader.onload = function(event) {
            const imageUrl = event.target.result;
            $('#dropZone').html(`<img src="${imageUrl}" alt="Dropped Image">`);
        };
        reader.readAsDataURL(file);
    });
});

// end image drag


$(document).ready(function() {
    $('#bid-amount').on('keydown', function(event) {
        // Check if the key pressed is the "+" key
        if (event.key === '+' || event.key === '-') {
            event.preventDefault();
        }
    });
});



$(document).ready(function() {
    let value = 250;

    function updateValue(newValue) {
        $('#bid-amount').val(newValue);
        value = newValue;
    }

    function increment() {
        const newValue = value + 250;
        updateValue(newValue);
    }

    function decrement() {
        const newValue = value - 250;
        if (newValue + 250 !== 250) {
            updateValue(newValue);
        }
    }

    $('#decrement-btn').on('click', function() {
        decrement();
    });

    $('#increment-btn').on('click', function() {
        increment();
    });

    $('#bid-amount').on('input', function() {
        const newValue = parseInt($(this).val());
        if (!isNaN(newValue)) {
            updateValue(newValue);
        }
    });
});


//===========Count Slider===================//
$(function() {
    // Owl Carousel
    var owl = $("#slider-1");
    owl.owlCarousel({
        items: 5,
        margin: 25,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 3
            },
            1200: {
                items: 3
            },

            1500: {
                items: 4
            }

        }
    });

    var owl = $("#slider-2");
    owl.owlCarousel({
        items: 5,
        margin: 25,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 3
            },
            1200: {
                items: 3
            },

            1500: {
                items: 4
            }

        }
    });

    var owl = $("#slider-3");
    owl.owlCarousel({
        items: 4,
        margin: 10,
        loop: true,
        autoplay: true,
        nav: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoWidth: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            960: {
                items: 3
            },
            1200: {
                items: 4.5
            },

            1500: {
                items: 4.5
            }

        }
    });


    //===========Count Function===================


    $('.count').each(function() {
        var targetCount = parseInt($(this).text());
        targetCount = isNaN(targetCount) ? 0 : targetCount;
        var startCount = 0;
        $(this).prop('Counter', startCount).animate({
            Counter: targetCount
        }, {
            duration: 3000,
            easing: 'swing',
            step: function(now) {
                var currentCount = Math.ceil(now);
                $(this).text(currentCount.toLocaleString());
                if (currentCount >= targetCount) {
                    $(this).stop();
                }
            }
        });
    });


    /////////////////////////////////////////////////////

    const slider = document.querySelector('.scroll-x');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });


    ////////////////////////////////////////////////


    $('#slide').on('click', function() {
        var container = $('.scroll-x');
        sideScroll(container, 'right', 25, 100, 10);
    });

    $('#slideBack').on('click', function() {
        var container = $('.scroll-x');
        sideScroll(container, 'left', 25, 100, 10);
    });

    function sideScroll(element, direction, speed, distance, step) {
        var scrollAmount = 0;
        var slideTimer = setInterval(function() {
            if (direction === 'left') {
                element.scrollLeft(element.scrollLeft() - step);
            } else {
                element.scrollLeft(element.scrollLeft() + step);
            }
            scrollAmount += step;
            if (scrollAmount >= distance) {
                clearInterval(slideTimer);
            }
        }, speed);
    }


    /////////////////////////////////////


    $(".toggle-1").click(function() {
        $(".filter-1").toggle();
    });

    $(".toggle-2").click(function() {
        $(".filter-2").toggle();
    });

    /////////////////////////////////////////////////
    const rangeInput = $('.range-input input'),
        priceInput = $('.year-input input'),
        range = $('.slider .progress');
    let priceGap = 1000;

    priceInput.on('input', function(e) {
        let minPrice = parseInt(priceInput.eq(0).val()),
            maxPrice = parseInt(priceInput.eq(1).val());

        if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput.eq(1).attr('max')) {
            if ($(e.target).hasClass("input-min")) {
                rangeInput.eq(0).val(minPrice);
                range.css('left', (minPrice / rangeInput.eq(0).attr('max')) * 100 + "%");
            } else {
                rangeInput.eq(1).val(maxPrice);
                range.css('right', 100 - (maxPrice / rangeInput.eq(1).attr('max')) * 100 + "%");
            }
        }
    });

    rangeInput.on('input', function(e) {
        let minVal = parseInt(rangeInput.eq(0).val()),
            maxVal = parseInt(rangeInput.eq(1).val());

        if (maxVal - minVal < priceGap) {
            if ($(e.target).hasClass("range-min")) {
                rangeInput.eq(0).val(maxVal - priceGap);
            } else {
                rangeInput.eq(1).val(minVal + priceGap);
            }
        } else {
            priceInput.eq(0).val(minVal);
            priceInput.eq(1).val(maxVal);
            range.css('left', (minVal / rangeInput.eq(0).attr('max')) * 100 + "%");
            range.css('right', 100 - (maxVal / rangeInput.eq(1).attr('max')) * 100 + "%");
        }
    });

    ////////////////////////////////////////////

    /*=======Onscroll fixed Section==========*/

    $(document).ready(function() {
        var mobileNavToggler = $('#mobileNavToggler');
        var mobileNav = $('#mobileNav');

        mobileNavToggler.click(function() {
            mobileNav.toggleClass('open');
        });
    });


    $(document).ready(function() {
        $('.redirect-details').click(function() {
            window.location.href = "/details.php";
        });
    });

    $(document).ready(function() {
        $('.redirect-livebidding').click(function() {
            window.location.href = "/livebidding.php";
        });
    });


    var elementPosition = $('.onscroll-fixed').offset();
    var howItSection = $('.scroll-none').offset().top + $('.scroll-none').outerHeight();
    $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop();
        if (scrollPosition > elementPosition.top && scrollPosition < howItSection) {
            $('.onscroll-fixed').css({
                'position': 'fixed',
                'top': '0'
            });

            $('.home-header').css({
                'position': 'unset',
                'top': '0'
            });

        } else {
            $('.onscroll-fixed').css('position', 'static');
            $('.home-header').css({
                'position': 'sticky',
                'top': '0'
            });
        }
    });


});

new WOW().init();


var owl = $("#slider-4");
owl.owlCarousel({
    items: 5,
    margin: 25,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    autoWidth: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        960: {
            items: 3
        },
        1200: {
            items: 3
        },
        1400: {
            items: 4
        }
    }
});

///////////////////////////////////////

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        total: t,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds
    };
}

/////////////////////////////////////

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector(".days");
    var hoursSpan = clock.querySelector(".hours");
    var minutesSpan = clock.querySelector(".minutes");
    var secondsSpan = clock.querySelector(".seconds");

    function updateClock() {
        var t = getTimeRemaining(endtime);

        if (t.total <= 0) {
            clearInterval(timeinterval);

            var newTime = Date.parse(endtime);
            var nowTime = Date.parse(new Date());

            while (newTime <= nowTime) {
                newTime = newTime + 1 * 24 * 60 * 60 * 1000; // add 24hours
            }

            var deadline = new Date(newTime);
            initializeClock('countdown', deadline);
        } else {
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
            minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
            secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = "February 22 2024 00:00:00 GMT+0200";
initializeClock("countdown", deadline);


/*=================skill-per==========*/



var skillPers = document.querySelectorAll(".skill-per");

skillPers.forEach(function(skillPer) {
    var per = parseFloat(skillPer.getAttribute("per"));
    skillPer.style.width = per + "%";

    var animatedValue = 0;
    var startTime = null;

    function animate(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;
        var stepPercentage = progress / 1000; // Dividing by duration in milliseconds (1000ms = 1s)

        if (stepPercentage < 1) {
            animatedValue = per * stepPercentage;
            skillPer.setAttribute("per", formatPercentage(animatedValue));
            requestAnimationFrame(animate);
        } else {
            animatedValue = per;
            skillPer.setAttribute("per", formatPercentage(animatedValue));
        }
    }

    function formatPercentage(value) {
        // Append a decimal point if the value is a decimal
        return Number.isInteger(value) ? Math.floor(value) + "%" : value.toFixed(1) + "%";
    }

    requestAnimationFrame(animate);
});


//   var elementPosition = $('#fixed').offset();

// $(window).scroll(function(){
//         if($(window).scrollTop() > elementPosition.top){
//               $('#fixed').css('position','fixed').css('top','50');
//         } else {
//             $('#fixed').css('position','static');
//         }    
// });

var Fx = $("#Fx");

var myScrollFunc = function() {
    var y = $(window).scrollTop();
    if (y >= 80) {
        Fx.addClass("countdown-bg fixed").removeClass("countdown-bg unset");
    } else {
        Fx.addClass("countdown-bg unset").removeClass("countdown-bg fixed");
    }
};

$(window).scroll(myScrollFunc);

/*=======Onscroll fixed Section==========*/


// for livebigging page
</script>