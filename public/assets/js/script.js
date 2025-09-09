AOS.init({
    duration: 400, 
    easing: 'ease-in-out', 
   
});
$(document).on('click', function (event) {
    const $sidebar = $('.right-list');
    const $svgIcon = $('.header_mobile img.icon');
    if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 &&
        !$svgIcon.is(event.target) && $svgIcon.has(event.target).length === 0) {
        if ($sidebar.css('right') === '0px') {
            $sidebar.css('right', '-30rem');
        }
    }
});

$('img.icon').on('click', function (event) {
    event.stopPropagation();
    const $sidebar = $('.right-list');

    if ($sidebar.css('right') === '0px') {
        $sidebar.css('right', '-30rem');
    } else {
        $sidebar.css('right', '0');
    }
});
var swiper_testimonials = new Swiper('.swiper_testimonials', {
    slidesPerView: 'auto',

    effect: 'slide',
    speed: 500,
   
    
   
}); 
var swiper_clients = new Swiper('.swiper_clients', {
    slidesPerView: 'auto',

    effect: 'slide',
    speed: 500,
    
   
});
 // validation for all text/textarea inputs
 $('form input[type="text"], form textarea').on('input', function () {
    var value = $.trim($(this).val());
    var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
    var errorField = $(this).closest('.input_container').find('.error-message');

    if (value === '') {
        errorField.text('This field is required').show();
    }
     else {
        errorField.hide();
    }
});
// only numbers + live error
$('#phoneInput').on('input', function () {
    this.value = this.value.replace(/\D/g, '');
    var errorField = $(this).closest('.input_container').find('.error-message');
    if (this.value === '') {
        errorField.text('This field is required').show();
    } else {
        errorField.hide();
    }
});
  // Form submit validation
  $('form').on('submit', function (e) {
    e.preventDefault();
    let isValid = true;
    $('.error-message').hide();

    $('form input[type="text"],form textarea').each(function () {
        var value = $.trim($(this).val());
        var placeholder = ($(this).attr('placeholder') || '').toLowerCase();
        var errorField = $(this).closest('.input_container').find('.error-message');

        if (value === '') {
            errorField.text('This field is required').show();
            isValid = false;
        } 
    });
    if (isValid) {
        this.submit();
    }
});

function initTestimonials() {
    document.querySelectorAll('.testimonials .swiper_testimonials .swiper-slide .flex_col').forEach(col => {
      var desc = col.querySelector('.desc_slide');
      if (!desc || col.querySelector('.toggle-btn')) return;
  
      if (desc.scrollHeight > desc.clientHeight) {
        var btn = document.createElement('button');
        btn.classList.add('toggle-btn');
        btn.textContent = 'View More';
        col.appendChild(btn);
  
        btn.addEventListener('click', function () {
          desc.classList.toggle('expanded');
          col.classList.toggle('active'); 
          this.textContent = desc.classList.contains('expanded') ? 'View Less' : 'View More';
        });
      }
    });
  }
  initTestimonials();
//   swiper_testimonials.on('slideChange', function () {
//     document.querySelectorAll('.testimonials .swiper_testimonials .swiper-slide .flex_col').forEach(col => {
//       const desc = col.querySelector('.desc_slide');
//       const btn  = col.querySelector('.toggle-btn');
  
//       if (desc) desc.classList.remove('expanded');
//       if (col) col.classList.remove('active');
//       if (btn) btn.textContent = 'View More';
//     });
//   });