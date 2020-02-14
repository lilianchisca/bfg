import * as basicScroll from 'basicscroll'

export default {
  init() {
    $(`.js-nextToggle`).on(`click`, function(e) {
      e.preventDefault()

      document
        .querySelector(`.js-nextTarget`)
        .scrollIntoView({ behavior: `smooth` })
    })

    const heroSectionContainers = document.querySelectorAll(
      `.js-heroectioncontainer`
    )

    Array.from(heroSectionContainers).forEach(el => {
      const heroSectionScroll = basicScroll.create({
        elem: el,
        from: `top-top`,
        to: `bottom-top`,
        direct: true,
        props: {
          '--lineX': {
            from: `0`,
            to: `40vw`,
          },
        },
      })

      heroSectionScroll.start()
      heroSectionScroll.update()
    })

    const heroSectionAddContainers = document.querySelectorAll(
      `.js-heroectionaddcontainer`
    )

    Array.from(heroSectionAddContainers).forEach(el => {
      const heroSectionAddScroll = basicScroll.create({
        elem: el,
        from: `middle-top`,
        to: `bottom-top`,
        direct: true,
        props: {
          '--linesrotate': {
            from: `-45deg`,
            to: `45deg`,
          },
          '--toplineY': {
            from: `0`,
            to: `0`,
          },
          '--bottomlineY': {
            from: `0`,
            to: `0`,
          },
        },
      })

      heroSectionAddScroll.start()
      heroSectionAddScroll.update()
    })
  },
}
