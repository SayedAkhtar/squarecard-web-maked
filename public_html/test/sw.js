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
    "url": "css/bootstrap.min.css",
    "revision": "a15c2ac3234aa8f6064ef9c1f7383c37"
  },
  {
    "url": "css/font-awesome.css",
    "revision": "d1adf101b848010186784101845b1fc4"
  },
  {
    "url": "css/fonts/Allura-L.woff2",
    "revision": "d60e0b02378bf772bf202e25969231bf"
  },
  {
    "url": "css/fonts/Allura.woff2",
    "revision": "30df8adbfe5e0dda1c2b29dfd0ad6227"
  },
  {
    "url": "css/fonts/Charm-400-latin-ext.woff2",
    "revision": "519e8696ca16c674d37502f8bbcfce73"
  },
  {
    "url": "css/fonts/Charm-400-latin.woff2",
    "revision": "0b50cc669c1ca68464561e327166569c"
  },
  {
    "url": "css/fonts/Charm-400-thai.woff2",
    "revision": "71e350f62c3134cf508aa61a89323bc7"
  },
  {
    "url": "css/fonts/Charm-400-vietnamesee.woff2",
    "revision": "2d8b97d178636117a60d0e3e86ce336e"
  },
  {
    "url": "css/fonts/Charm-700-latin-ext.woff2",
    "revision": "7f9e0412419c13bbd3d5f60972c2d188"
  },
  {
    "url": "css/fonts/Charm-700-latin.woff2",
    "revision": "1bcbd288d6284d18442dc96d9136ca42"
  },
  {
    "url": "css/fonts/Charm-700-thai.woff2",
    "revision": "5dc35db2c8da61a8ec60f8c0c922f05a"
  },
  {
    "url": "css/fonts/Charm-700-vietnamesee.woff2",
    "revision": "dc8eb8d234b6815480af96e45b5203e5"
  },
  {
    "url": "css/main.css",
    "revision": "1cd179be3c78d5196c0fcb594ff56f4f"
  },
  {
    "url": "css/mobile.css",
    "revision": "592b1b56c84ae5e92d466a2e28a0e888"
  },
  {
    "url": "css/owl.carousel.min.css",
    "revision": "b2752a850d44f50036628eeaef3bfcfa"
  },
  {
    "url": "css/webfonts/fa-brands-400.eot",
    "revision": "d9d17590c975aad1be0ddab673f9c769"
  },
  {
    "url": "css/webfonts/fa-brands-400.svg",
    "revision": "80533988ff5fecd5be26557d08ce8237"
  },
  {
    "url": "css/webfonts/fa-brands-400.ttf",
    "revision": "c39278f7abfc798a241551194f55e29f"
  },
  {
    "url": "css/webfonts/fa-brands-400.woff",
    "revision": "b90365bccdabd68c6c03902b4b141f09"
  },
  {
    "url": "css/webfonts/fa-brands-400.woff2",
    "revision": "4b115e1153a9ea339d6a0bb284cc8ed3"
  },
  {
    "url": "css/webfonts/fa-regular-400.eot",
    "revision": "414ff5daad323a1c47c5177d4bd29674"
  },
  {
    "url": "css/webfonts/fa-regular-400.svg",
    "revision": "e7e957c87c454bccaa3bf9fdaa6874f8"
  },
  {
    "url": "css/webfonts/fa-regular-400.ttf",
    "revision": "f6c6f6c8cb7784254ad00056f6fbd74e"
  },
  {
    "url": "css/webfonts/fa-regular-400.woff",
    "revision": "5dd3976cb5d61e2e561f2a46b916f377"
  },
  {
    "url": "css/webfonts/fa-regular-400.woff2",
    "revision": "65779ebcc35604a25c2ba77309c5b8af"
  },
  {
    "url": "css/webfonts/fa-solid-900.eot",
    "revision": "b5596f4d339f99e3d69bc41be78db962"
  },
  {
    "url": "css/webfonts/fa-solid-900.svg",
    "revision": "82905d8d1c06969df11c8c378e9bdd4c"
  },
  {
    "url": "css/webfonts/fa-solid-900.ttf",
    "revision": "b70cea0339374107969eb53e5b1f603f"
  },
  {
    "url": "css/webfonts/fa-solid-900.woff",
    "revision": "61969d433bf265b9717a6c357a1e04e4"
  },
  {
    "url": "css/webfonts/fa-solid-900.woff2",
    "revision": "462806316fea535a6a57651bc2b000b0"
  },
  {
    "url": "img/31757.jpg",
    "revision": "b941a28540a5c16769dee9774db2e19c"
  },
  {
    "url": "img/android-chrome-192x192.png",
    "revision": "3309975219c8aa1f4e5cd9e8e94487ef"
  },
  {
    "url": "img/android-chrome-512x512.png",
    "revision": "dab26702934c59c0e616cb92eda83867"
  },
  {
    "url": "img/apple-touch-icon.png",
    "revision": "d67f8c87097263e04057fcd8ae0d4c58"
  },
  {
    "url": "img/browserconfig.xml",
    "revision": "a493ba0aa0b8ec8068d786d7248bb92c"
  },
  {
    "url": "img/favicon-16x16.png",
    "revision": "a9416e0b703b7ffb1e6339f543cb12e5"
  },
  {
    "url": "img/favicon-32x32.png",
    "revision": "b0a2b29af704d9534f6311a979e0ee80"
  },
  {
    "url": "img/favicon.ico",
    "revision": "b5caab0c2a9866990f71b7014389699b"
  },
  {
    "url": "img/female-user.jpeg",
    "revision": "cbabdaaaf2524a40f6df4e679ee2d69f"
  },
  {
    "url": "img/g-1.jpg",
    "revision": "c11e355269a981464bdc3083fb788f0d"
  },
  {
    "url": "img/g-2.jpg",
    "revision": "23d7efb3969fd35cb02cee26172b288e"
  },
  {
    "url": "img/g-3.jpg",
    "revision": "c12067640bdfebf12ca1a4e3efb0cf54"
  },
  {
    "url": "img/g-4.jpg",
    "revision": "1518708efc8d12b2966237454ba808a2"
  },
  {
    "url": "img/icons/icon-128x128.png",
    "revision": "88274fa36ef637cbe5116350e8447c59"
  },
  {
    "url": "img/icons/icon-144x144.png",
    "revision": "a3100478099df9016ab9610b8bca2bd1"
  },
  {
    "url": "img/icons/icon-152x152.png",
    "revision": "2ce9b0e3e489f033fee866a1d21421fc"
  },
  {
    "url": "img/icons/icon-192x192.png",
    "revision": "f00e6c9d43c661825b35fa739337ab31"
  },
  {
    "url": "img/icons/icon-384x384.png",
    "revision": "b65a467809e7a335f216d070d4f45121"
  },
  {
    "url": "img/icons/icon-512x512.png",
    "revision": "1cd4c4944fb6a4a66de61ad3654f8916"
  },
  {
    "url": "img/icons/icon-72x72.png",
    "revision": "3ac593e11aed896ba15f962748dc8ef0"
  },
  {
    "url": "img/icons/icon-96x96.png",
    "revision": "8526191e9e4ed5cc7243963daab5f3e1"
  },
  {
    "url": "img/male-user.jpeg",
    "revision": "045dede1a5bd4c514c4470cc1142c09a"
  },
  {
    "url": "img/mstile-150x150.png",
    "revision": "854090094850dacbb72b453a5a35ae70"
  },
  {
    "url": "img/safari-pinned-tab.svg",
    "revision": "e8e48aa9c5e5eab3904fd4f267fb2d74"
  },
  {
    "url": "img/site.webmanifest",
    "revision": "b9aa277fcfc34c31db6c7a7ea3469b8c"
  },
  {
    "url": "img/svg/001-love.svg",
    "revision": "428fe7910b1379567a8ee490a94722de"
  },
  {
    "url": "img/svg/002-couple.svg",
    "revision": "2b7f51f28fde2b623d10c31a2d801f04"
  },
  {
    "url": "img/svg/003-wedding-couple.svg",
    "revision": "876d78e2edc13a8c43f1009201ad5f6c"
  },
  {
    "url": "img/svg/004-couple-1.svg",
    "revision": "37afe159c219d06f77d61f3eec8dcc58"
  },
  {
    "url": "img/svg/005-wedding-rings.svg",
    "revision": "bf3b2c5f58acf673f0962b17ff173937"
  },
  {
    "url": "img/welcome-bg.jpg",
    "revision": "9f9e41312b0fee220be48303987c4616"
  },
  {
    "url": "index.html",
    "revision": "d38f811edb8bf0b535bbfbfe80b59b09"
  },
  {
    "url": "js/owl.carousel.min.js",
    "revision": "f416f9031fef25ae25ba9756e3eb6978"
  },
  {
    "url": "js/script.js",
    "revision": "2b52edd7e02e1a4f785d662d6b50b3a8"
  },
  {
    "url": "manifest.json",
    "revision": "894f585db360c1412d5a3e30f69d9276"
  },
].concat(self.__precacheManifest || []);
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});
self.addEventListener('fetch', function(event) {});
