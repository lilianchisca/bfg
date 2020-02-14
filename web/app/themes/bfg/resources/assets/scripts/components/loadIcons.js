import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { faTwitter, faLinkedinIn } from '@fortawesome/free-brands-svg-icons'
// import {} from '@fortawesome/free-regular-svg-icons'
// import {} from '@fortawesome/free-solid-svg-icons'
// import {} from '@fortawesome/pro-solid-svg-icons'
import { faGlobeAmericas } from '@fortawesome/pro-regular-svg-icons'
import {
  faLongArrowRight,
  faLongArrowLeft,
  faSearch,
} from '@fortawesome/pro-light-svg-icons'

library.add(
  faLongArrowRight,
  faLongArrowLeft,
  faTwitter,
  faLinkedinIn,
  faGlobeAmericas,
  faSearch
)

export default {
  init() {
    dom.watch()
  },
}
