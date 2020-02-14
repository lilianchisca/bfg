import * as basicScroll from 'basicscroll'

export default {
  init() {
    const introSectionContainers = document.querySelectorAll(
      `.js-introectioncontainer`
    )

    Array.from(introSectionContainers).forEach(el => {
      const introSectionScroll = basicScroll.create({
        elem: el,
        from: `top-top`,
        to: `bottom-middle`,
        direct: true,
        props: {
          '--linesrotate': {
            from: `-45deg`,
            to: `45deg`,
          },
        },
      })

      introSectionScroll.start()
      introSectionScroll.update()
    })
  },
}
