import LoadIcons from '../components/loadIcons'
import Header from '../components/header'
import Footer from '../components/footer'
import Heading from '../components/heading'
import Parallaxes from '../components/parallaxes'
import IntroSection from '../components/introsection'
import Hero from '../components/hero'
import FeatBlocks from '../components/featBlocks'
import Sliders from '../components/sliders'
import Timeline from '../components/timeline'

export default {
  init() {
    LoadIcons.init()
    Parallaxes.init()
    IntroSection.init()
    Heading.init()
    Hero.init()
    FeatBlocks.init()
    Sliders.init()
    Timeline.init()
    Footer.init()
  },
  finalize() {
    if (!window.headerActivated) {
      Header.init()
      window.headerActivated = true
    }
  },
}
