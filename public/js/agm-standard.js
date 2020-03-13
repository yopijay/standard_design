/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/agm-standard.js":
/*!**************************************!*\
  !*** ./resources/js/agm-standard.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  var list = $('.navbar-side > ul > .list');
  var links = $('.navbar-side > ul').find('.navbar-link');
  $('.content').css({
    display: 'none'
  });
  $('#dashboard-page').css({
    display: 'block'
  });
  sidenavFunction(list, links);
  brandButtons();
}); // Sidenav Function

function sidenavFunction(list, links) {
  for (var count = 0; count < list.length; count++) {
    list[count].addEventListener('click', function (e) {
      e.stopPropagation();

      if (this.classList.contains('active')) {
        this.classList.remove('active');
      } else if (this.parentElement.parentElement.classList.contains('active')) {
        this.classList.add('active');
      } else {
        for (var item = 0; item < list.length; item++) {
          list[item].classList.remove('active');
        }

        this.classList.add('active');
      }
    });
  }

  for (var count = 0; count < links.length; count++) {
    links[count].addEventListener('click', function (e) {
      e.stopPropagation();

      if (this.classList.contains('active')) {
        this.classList.add('active');
      } else if (this.parentElement.parentElement.classList.contains('active')) {
        this.classList.add('active');
      } else {
        for (var item = 0; item < links.length; item++) {
          links[item].classList.remove('active');
        }

        this.classList.add('active');
      }
    });
  }

  $(links).on('click', function () {
    var content = $(this).find('a').attr('content');
    $('.content').css({
      display: 'none'
    });

    switch (content) {
      case 'dashboard-page':
        $('#dashboard-page').css({
          display: 'block'
        });
        break;

      case 'colors-page':
        $('#color-page').css({
          display: 'block'
        });
        break;

      case 'typography-page':
        $('#typography-page').css({
          display: 'block'
        });
        break;

      case 'buttons-page':
        $('#button-page').css({
          display: 'block'
        });
        break;

      case 'cards-page':
        $('#card-page').css({
          display: 'block'
        });
        break;

      case 'toasters-page':
        $('#toaster-page').css({
          display: 'block'
        });
        break;

      case 'radio-page':
        $('#radio-page').css({
          display: 'block'
        });
        break;

      case 'checkbox-page':
        $('#checkbox-page').css({
          display: 'block'
        });
        break;

      case 'toggles-page':
        $('#toggle-page').css({
          display: 'block'
        });
        break;

      case 'input-page':
        $('#input-page').css({
          display: 'block'
        });
        break;

      case 'login-page':
        $('#login-page').css({
          display: 'block'
        });
        break;

      case '404-page':
        $('#404-page').css({
          display: 'block'
        });
        break;
    }
  });
} // Branded Buttons


function brandButtons() {
  var brandlist = {
    behance: "<i class='fab fa-behance'></i><span>Behance</span>",
    css3: "<i class='fab fa-css3'></i><span>CSS3</span>",
    dribbble: "<i class='fab fa-dribbble'></i><span>Dribble</span>",
    dropbox: "<i class='fab fa-dropbox'></i><span>Dropbox</span>",
    facebook: "<i class='fab fa-facebook-f'></i><span>Facebook</span>",
    flickr: "<i class='fab fa-flickr'></i><span>Flickr</span>",
    github: "<i class='fab fa-github'></i><span>Github</span>",
    googlePlus: "<i class='fab fa-google-plus-g'></i><span>Google Plus</span>",
    html5: "<i class='fab fa-html5'></i><span>HTML5</span>",
    instagram: "<i class='fab fa-instagram'></i><span>Instagram</span>",
    linkedin: "<i class='fab fa-linkedin-in'></i><span>LinkedIn</span>",
    openid: "<i class='fab fa-openid'></i><span>OpenID</span>",
    pinterest: "<i class='fab fa-pinterest'></i><span>Pinterest</span>",
    reddit: "<i class='fab fa-reddit'></i><span>Reddit</span>",
    spotify: "<i class='fab fa-spotify'></i><span>Spotify</span>",
    stackOverflow: "<i class='fab fa-stack-overflow'></i><span>Stack-Overflow</span>",
    tumblr: "<i class='fab fa-tumblr'></i><span>Tumblr</span>",
    twitter: "<i class='fab fa-twitter'></i><span>Twitter</span>",
    vimeo: "<i class='fab fa-vimeo-v'></i><span>Vimeo</span>",
    vk: "<i class='fab fa-vk'></i><span>VK</span>",
    xing: "<i class='fab fa-xing'></i><span>Xing</span>",
    yahoo: "<i class='fab fa-yahoo'></i><span>Yahoo</span>",
    youtube: "<i class='fab fa-youtube'></i><span>Youtube</span>"
  };
  var brandbtnclass = [];
  $('.btn-brand').each(function () {
    brandbtnclass.push($(this).attr('class').split(' '));
  });
  $.each(brandbtnclass, function (key, value) {
    $.each(brandlist, function (key1, value1) {
      if (jQuery.inArray(key1, value) == 1) {
        $(".btn-brand.".concat(key1)).html(value1);
        return false;
      }
    });
  });
}

/***/ }),

/***/ 1:
/*!********************************************!*\
  !*** multi ./resources/js/agm-standard.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\GIT\standard_design\resources\js\agm-standard.js */"./resources/js/agm-standard.js");


/***/ })

/******/ });