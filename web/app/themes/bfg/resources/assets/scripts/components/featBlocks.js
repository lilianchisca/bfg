import * as basicScroll from 'basicscroll'

export default {
  init() {
    const featBlocks = document.querySelector(`.js-featblocks`)

    if (featBlocks) {
      const featBlocksScroll = basicScroll.create({
        elem: document.querySelector(`.js-featblocks`),
        from: `top-middle`,
        to: `bottom-top`,
        direct: true,
        props: {
          '--featBlockTitleX': {
            from: `20vw`,
            to: `-20vw`,
          },
        },
      })

      featBlocksScroll.start()
      featBlocksScroll.update()
    }
  },
}
