import * as basicScroll from 'basicscroll'

export default {
  init() {
    let currentIndex = 1
    let currentTransform = 0
    const maxTransform = ($(`.s-timeline__item`).length - 3) * -410
    const timelineWrap = $(`.js-timelinewrap`)

    function moveSlide() {
      timelineWrap.css(`transform`, `translateX(${currentTransform}px)`)
      $(`.s-timeline__item`).removeClass(`is-active`)
      $(
        `.s-timeline__item:nth-child(${currentIndex}), .s-timeline__item:nth-child(${currentIndex +
          1}), .s-timeline__item:nth-child(${currentIndex + 2})`
      ).addClass(`is-active`)
    }

    $(`.js-timelineprev`).on(`click`, function(e) {
      e.preventDefault()

      if (currentTransform === 0) {
        return
      }

      currentTransform += 410
      currentIndex -= 1

      moveSlide()
    })

    $(`.js-timelinenext`).on(`click`, function(e) {
      e.preventDefault()

      if (currentTransform === maxTransform) {
        return
      }

      currentTransform -= 410
      currentIndex += 1

      moveSlide()
    })

    const timelineLine = document.querySelector(`.js-timelineslines`)

    if (timelineLine) {
      const timelineLineScroll = basicScroll.create({
        elem: document.querySelector(`.js-timelineslines`),
        from: `top-bottom`,
        to: `middle-middle`,
        direct: true,
        props: {
          '--rotateTimelineTop': {
            from: `0deg`,
            to: `-45deg`,
          },
          '--rotateTimelineBottom': {
            from: `0deg`,
            to: `-45deg`,
          },
          '--timelineTitleX': {
            from: `-20vw`,
            to: `0`,
          },
        },
      })

      timelineLineScroll.start()
      timelineLineScroll.update()
    }
  },
}
