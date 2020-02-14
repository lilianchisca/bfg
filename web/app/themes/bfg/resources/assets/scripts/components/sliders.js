import 'slick-carousel'
import * as basicScroll from 'basicscroll'

export default {
  init() {
    if ($(`.js-testslider`).length) {
      window.testslider = $(`.js-testslider`).slick({
        arrows: false,
        dots: true,
        autoplay: 10000,
        draggable: false,
        slidesToShow: 1,
        slidesToScroll: 1,
      })
    }

    const testimonialLine = document.querySelector(`.js-testimonialslines`)

    if (testimonialLine) {
      const testimonialLineScroll = basicScroll.create({
        elem: document.querySelector(`.js-testimonialslines`),
        from: `top-bottom`,
        to: `middle-middle`,
        direct: true,
        props: {
          '--rotateTop': {
            from: `0deg`,
            to: `-45deg`,
          },
          '--rotateBottom': {
            from: `0deg`,
            to: `-45deg`,
          },
        },
      })

      testimonialLineScroll.start()
      testimonialLineScroll.update()
    }
  },
}
