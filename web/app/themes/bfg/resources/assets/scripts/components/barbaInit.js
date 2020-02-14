import $ from 'jquery'
import barba from '@barba/core'
import barbaPrefetch from '@barba/prefetch'
import barbaCss from '@barba/css'
import { enableBodyScroll } from 'body-scroll-lock'

barba.use(barbaCss)
barba.use(barbaPrefetch)

export default function(routes) {
  barba.init({
    prevent: ({ el }) => el.classList && el.classList.contains(`ab-item`),
    transitions: [
      {
        name: `one-pager-transition`,
        to: {
          namespace: [`one-pager`],
        },
        leave() {
          return new Promise(resolve => {
            resolve()
          })
        },
        enter() {
          return new Promise(resolve => {
            resolve()
          })
        },
        beforeEnter() {
          $(window).scrollTop(0)

          if (`scrollRestoration` in window.history) {
            window.history.scrollRestoration = `manual`
          }
        },
        after(data) {
          // $(`html, body`).animate(
          //   {
          //     scrollTop: $(`body`).offset().top,
          //   },
          //   500
          // )

          $(`.js-navItem`).removeClass(`is-active`)
          $(`.js-navItem[data-slug="${data.next.url.path}"]`).addClass(
            `is-active`
          )
          $(`body`).attr(`class`, $(`#body-classes`).attr(`class`))
          const overlayScrollArea = document.querySelector(`.js-overlay`)
          enableBodyScroll(overlayScrollArea)
          // $(`body`).css(`overflow`, `visible`)
          routes.loadEvents()
        },
      },
    ],
  })
}
