import * as basicScroll from 'basicscroll'

export default {
  init() {
    const topBgContainers = document.querySelectorAll(`.js-topbgcontainer`)

    Array.from(topBgContainers).forEach(el => {
      const topBgScroll = basicScroll.create({
        elem: el,
        from: `top-top`,
        to: `bottom-top`,
        direct: true,
        props: {
          '--y': {
            from: `0`,
            to: `100px`,
          },
        },
      })

      topBgScroll.start()
      topBgScroll.update()
    })
  },
}
