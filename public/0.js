(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/countdownTimer.js":
/*!****************************************!*\
  !*** ./resources/js/countdownTimer.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (function () {
  // $('#js-startcounter').click()
  var mySeconds;
  var intervalHandle;
  document.querySelector("#js-startcounter").addEventListener("click", function (e) {
    console.log('start counter');
  });

  window.resetPage = function () {
    document.getElementById("inputArea").style.display = "none";
  };

  function tick() {
    var timeDisplay = document.getElementById("time");
    var min = Math.floor(mySeconds / 60);
    var sec = mySeconds - min * 60;

    if (sec < 10) {
      sec = "0" + sec;
    }

    var message = min.toString() + ":" + sec;
    timeDisplay.innerHTML = message;

    if (mySeconds === 0) {
      alert("De ronde is voorbij");
      clearInterval(intervalHandle);
      resetPage();
    }

    mySeconds--;
  }

  function startCounter() {
    var myInput = document.getElementById("minutes").value;

    if (isNaN(myInput)) {
      alert("Voer een mummer in.");
      return;
    }

    mySeconds = myInput * 60;
    intervalHandle = setInterval(tick, 1000);
  }

  ;
  document.querySelector("#js-startcounter").addEventListener("click", function () {
    startCounter();
  });

  window.checkTimer = function (token) {
    $.ajax({
      type: 'post',
      url: '/api/timer',
      data: {
        action: 'start',
        seconds: ''
      }
    }).done(function (data) {
      if (data === "OK") {
        console.log('OK');
      }
    }).fail(function (ctx) {
      alert(ctx.responseText);
      console.log(ctx.responseText);
      console.log('error');
    });
  };
});

/***/ })

}]);