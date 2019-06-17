/**
 * Welcome to your Workbox-powered service worker!
 *
 * You'll need to register this file in your web app and you should
 * disable HTTP caching for this file too.
 * See https://goo.gl/nhQhGp
 *
 * The rest of the code is auto-generated. Please don't update this file
 * directly; instead, make changes to your Workbox build configuration
 * and re-run your build process.
 * See https://goo.gl/2aRDsh
 */

importScripts("https://storage.googleapis.com/workbox-cdn/releases/4.1.1/workbox-sw.js");

self.addEventListener('message', (event) => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});

/**
 * The workboxSW.precacheAndRoute() method efficiently caches and responds to
 * requests for URLs in the manifest.
 * See https://goo.gl/S9QRab
 */
self.__precacheManifest = [
  {
    "url": "bootstrap.min.css",
    "revision": "a15c2ac3234aa8f6064ef9c1f7383c37"
  },
  {
    "url": "font-awesome.css",
    "revision": "d1adf101b848010186784101845b1fc4"
  },
  {
    "url": "fonts/Allura-L.woff2",
    "revision": "d60e0b02378bf772bf202e25969231bf"
  },
  {
    "url": "fonts/Allura.woff2",
    "revision": "30df8adbfe5e0dda1c2b29dfd0ad6227"
  },
  {
    "url": "fonts/Charm-400-latin-ext.woff2",
    "revision": "519e8696ca16c674d37502f8bbcfce73"
  },
  {
    "url": "fonts/Charm-400-latin.woff2",
    "revision": "0b50cc669c1ca68464561e327166569c"
  },
  {
    "url": "fonts/Charm-400-thai.woff2",
    "revision": "71e350f62c3134cf508aa61a89323bc7"
  },
  {
    "url": "fonts/Charm-400-vietnamesee.woff2",
    "revision": "2d8b97d178636117a60d0e3e86ce336e"
  },
  {
    "url": "fonts/Charm-700-latin-ext.woff2",
    "revision": "7f9e0412419c13bbd3d5f60972c2d188"
  },
  {
    "url": "fonts/Charm-700-latin.woff2",
    "revision": "1bcbd288d6284d18442dc96d9136ca42"
  },
  {
    "url": "fonts/Charm-700-thai.woff2",
    "revision": "5dc35db2c8da61a8ec60f8c0c922f05a"
  },
  {
    "url": "fonts/Charm-700-vietnamesee.woff2",
    "revision": "dc8eb8d234b6815480af96e45b5203e5"
  },
  {
    "url": "lightbox.min.css",
    "revision": "767938d77eef356b1ba76c3897384948"
  },
  {
    "url": "main.css",
    "revision": "c9080d8f7063971c12eb828514a2019b"
  },
  {
    "url": "main.scss",
    "revision": "70230dee2f572903d453bfd08426dea4"
  },
  {
    "url": "mobile.css",
    "revision": "592b1b56c84ae5e92d466a2e28a0e888"
  },
  {
    "url": "mobile.scss",
    "revision": "e9bf0badc8c21f6a82da5f44c5e5bfc6"
  },
  {
    "url": "owl.carousel.min.css",
    "revision": "b2752a850d44f50036628eeaef3bfcfa"
  },
  {
    "url": "webfonts/fa-brands-400.eot",
    "revision": "d9d17590c975aad1be0ddab673f9c769"
  },
  {
    "url": "webfonts/fa-brands-400.svg",
    "revision": "80533988ff5fecd5be26557d08ce8237"
  },
  {
    "url": "webfonts/fa-brands-400.woff",
    "revision": "b90365bccdabd68c6c03902b4b141f09"
  },
  {
    "url": "webfonts/fa-brands-400.woff2",
    "revision": "4b115e1153a9ea339d6a0bb284cc8ed3"
  },
  {
    "url": "webfonts/fa-regular-400.eot",
    "revision": "414ff5daad323a1c47c5177d4bd29674"
  },
  {
    "url": "webfonts/fa-regular-400.svg",
    "revision": "e7e957c87c454bccaa3bf9fdaa6874f8"
  },
  {
    "url": "webfonts/fa-regular-400.woff",
    "revision": "5dd3976cb5d61e2e561f2a46b916f377"
  },
  {
    "url": "webfonts/fa-regular-400.woff2",
    "revision": "65779ebcc35604a25c2ba77309c5b8af"
  },
  {
    "url": "webfonts/fa-solid-900.eot",
    "revision": "b5596f4d339f99e3d69bc41be78db962"
  },
  {
    "url": "webfonts/fa-solid-900.svg",
    "revision": "82905d8d1c06969df11c8c378e9bdd4c"
  },
  {
    "url": "webfonts/fa-solid-900.woff",
    "revision": "61969d433bf265b9717a6c357a1e04e4"
  },
  {
    "url": "webfonts/fa-solid-900.woff2",
    "revision": "462806316fea535a6a57651bc2b000b0"
  }
].concat(self.__precacheManifest || []);
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});
