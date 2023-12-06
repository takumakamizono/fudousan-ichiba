const browserSync = require("browser-sync");
const { src, dest, watch } = require("gulp");
const autoprefixer = require("autoprefixer");
const path = require("path");
const LoadPlugins = require("gulp-load-plugins");
const $ = LoadPlugins();
const sass = require("gulp-dart-sass");
const pkg = require("./package.json");
const server = browserSync.create();

function imageChange() {
  let count = 1;
  return src("./images-src/*.jpg")
    .pipe($.imagemin())
    .pipe(
      $.rename((path) => {
        path.basename = "fudousanichiba-" + count;
        count++;
      })
    )
    .pipe(dest("./fudousan-ichiba/images"));
}

function styles() {
  const themeInfo = pkg.theme;
  const comment = `
  /*
  Theme Name: ${themeInfo.name}
  Theme URI: ${themeInfo.uri}
  Description: ${themeInfo.description}
  Version: ${themeInfo.version}
  Author: ${themeInfo.author}
  Author URI: ${themeInfo.authorUri}
  License: ${themeInfo.license}
  License URI: ${themeInfo.licenseUri}
  Text Domain: ${themeInfo.textDomain}
  Domain Path: ${themeInfo.domainPath}
  */
  `;

  return src("./fudousan-ichiba/styles/style.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe(
      $.postcss([autoprefixer({ overrideBrowserslist: ["last 2 versions"] })])
    )
    .pipe($.cleanCss())
    .pipe($.header(comment))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./fudousan-ichiba/"))
    .pipe(browserSync.stream());
}

function startAppServer() {
  browserSync.init({
    proxy: "http://localhost:8888",
    port: 8887,
    files: ["fudousan-ichiba/**/*.css"],
    notify: false,
  });

  watch("./fudousan-ichiba/**/*.scss", styles);
  watch("./fudousan-ichiba/**/*.php").on("change", browserSync.reload);
}

function jsMinify() {
  return src([
    "./fudousan-ichiba/scripts/libs/*.js",
    "./fudousan-ichiba/scripts/*.js",
    "!./fudousan-ichiba/scripts/libs/*.min.js",
    "!./fudousan-ichiba/scripts/*.min.js",
  ])
    .pipe($.uglify())
    .pipe(
      $.rename({
        extname: ".min.js",
      })
    )
    .pipe(
      $.if(
        (file) => path.basename(file.path) === "main.min.js",
        dest("./fudousan-ichiba/scripts"),
        dest("./fudousan-ichiba/scripts/libs")
      )
    );
}

exports.imageChange = imageChange;
exports.styles = styles;
exports.serve = startAppServer;
exports.javascripts = jsMinify;
