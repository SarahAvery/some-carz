/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};


window.onload = function () {
  const mobileNav = document.querySelector("#main-nav");
  const toggle = document.getElementById("toggle");
  /**
   * Closes the mobile menu, when the criteria is met
   *
   * @param {Object} settings
   * @param {Array}  settings.included - elements we want to close the menu, no matter where they live
   * @param {Array}  settings.excluded - elements in the document that should not close the menu
   */

  const closeMenu = ({
    included,
    excluded
  }) => function (e) {
    if (included.find(i => i === e.target || i.contains(e.target)) || excluded.every(i => !i.contains(e.target))) {
      mobileNav.classList.remove("open");
      document.removeEventListener("click", this);
    }
  };

  const onClose = closeMenu({
    included: [document.querySelector("#close-toggle")],
    excluded: [document.querySelector("#main-nav")]
  });

  function toggleMenu(e) {
    e.stopPropagation();
    const isOpen = Array.from(mobileNav.classList).includes("open");

    if (!isOpen) {
      document.addEventListener("click", onClose);
    }

    mobileNav.classList.toggle("open");
  }

  toggle.addEventListener("click", toggleMenu);
};
/******/ })()
;