import * as basicScroll from 'basicscroll'

export default {
  init() {
    const headingContainers = document.querySelectorAll(`.js-headingcontainer`)

    Array.from(headingContainers).forEach(el => {
      const headingScroll = basicScroll.create({
        elem: el,
        from: `top-top`,
        to: `bottom-middle`,
        direct: true,
        props: {
          '--rotate': {
            from: `45deg`,
            to: `0`,
          },
        },
      })

      headingScroll.start()
      headingScroll.update()
    })

    const headingAltContainers = document.querySelectorAll(
      `.js-headingaltcontainer`
    )

    Array.from(headingAltContainers).forEach(el => {
      const headingAltScroll = basicScroll.create({
        elem: el,
        from: `top-middle`,
        to: `top-top`,
        direct: true,
        props: {
          '--rotate': {
            from: `45deg`,
            to: `0`,
          },
        },
      })

      headingAltScroll.start()
      headingAltScroll.update()
    })
  },
}
