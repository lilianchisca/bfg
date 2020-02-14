import * as basicScroll from 'basicscroll'

export default {
  init() {
    const footerLine = document.querySelector(`.js-footerline`)

    if (footerLine) {
      const footerLineScroll = basicScroll.create({
        elem: document.querySelector(`.js-footerline`),
        from: `top-bottom`,
        to: `top-middle`,
        direct: true,
        props: {
          '--footerRotate': {
            from: `0deg`,
            to: `-45deg`,
          },
          '--footerY': {
            from: `70px`,
            to: `0px`,
          },
        },
      })

      footerLineScroll.start()
      footerLineScroll.update()
    }
  },
}
