// import external dependencies
import 'jquery'

// import local dependencies
import Router from './util/Router'
import ready from './util/ready'
import common from './routes/common'
import barbaInit from './components/barbaInit'

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
})

// Load Events
ready(() => {
  routes.loadEvents()
  barbaInit(routes)
})
