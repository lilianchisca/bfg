'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require(`imagemin-webpack-plugin`)
const imageminMozjpeg = require(`imagemin-mozjpeg`)
const UglifyJsPlugin = require(`uglifyjs-webpack-plugin`)
const glob = require(`glob-all`)
const PurgecssPlugin = require(`purgecss-webpack-plugin`)
const HtmlCriticalWebpackPlugin = require(`html-critical-webpack-plugin`)

const config = require(`./config`)

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [] // eslint-disable-line
  }
}

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 2 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: `65-90`, speed: 4 },
      svgo: {
        plugins: [
          { removeUnknownsAndDefaults: false },
          { cleanupIDs: false },
          { removeViewBox: false },
        ],
      },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: config.enabled.watcher,
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
    }),
    new PurgecssPlugin({
      paths: glob.sync([
        `app/**/*.php`,
        `resources/views/**/*.php`,
        `resources/assets/scripts/**/*.js`,
      ]),
      extractors: [
        {
          extractor: TailwindExtractor,
          extensions: [`js`, `php`],
        },
      ],
    }),
    new HtmlCriticalWebpackPlugin({
      base: config.paths.dist,
      src: config.devUrl,
      dest: `styles/critical-home.css`,
      ignore: [`@font-face`, /url\(/],
      inline: false,
      minify: true,
      extract: false,
      dimensions: [
        {
          width: 360,
          height: 640,
        },
        {
          width: 1920,
          height: 1080,
        },
      ],
      penthouse: {
        blockJSRequests: false,
      },
    }),
  ],
}
