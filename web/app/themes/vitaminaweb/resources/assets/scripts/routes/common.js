import formMask from '../util/form-mask';

export default {
  init() {
    formMask.phone();

    $('button.menu-mobile-button').click(function() {
      $(this).toggleClass('is-open');
      $('body, .nav-fixed').toggleClass('menu-show');
      $('.toggle-menu-button.is-open').removeClass('d-none');
    });

    $('.slider-historia').slick({
      autoplay: true,
      dots: false,
      centerMode: false,
      arrows: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: false,
      autoplaySpeed: 8000,
      lazyLoad: 'progressive',
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    $('.slider-single').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 8000,
      lazyLoad: 'progressive',
    });

    $('.slider-noticias').slick({
      autoplay: true,
      dots: true,
      centerMode: true,
      arrows: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            infinite: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: false,
            infinite: true,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
            infinite: true,
          },
        },
      ],
    });
  },
  finalize() {
    
  },
};
