import Headroom from 'headroom.js'
import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'

export default {
  init() {
    if ($(`.js-header`).length) {
      const fixedHeader = document.querySelector(`.js-header`)
      const headroom = new Headroom(fixedHeader, {
        offset: 60,
        classes: {
          initial: `s-header`,
          pinned: `s-header--pinned`,
          unpinned: `s-header--unpinned`,
          top: `s-header--top`,
          notTop: `s-header--not-top`,
          bottom: `s-header--bottom`,
          notBottom: `s-header--not-bottom`,
        },
      })

      headroom.init()

      $(`.js-navToggle`).on(`click`, function(e) {
        e.preventDefault()

        const overlayScrollArea = document.querySelector(`.js-overlay`)

        $(`body`).toggleClass(`has-overlay`)

        if ($(`body`).hasClass(`has-overlay`)) {
          disableBodyScroll(overlayScrollArea)
        } else {
          enableBodyScroll(overlayScrollArea)
        }
      })
    }
  },
}
