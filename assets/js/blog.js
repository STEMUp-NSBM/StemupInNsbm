$(function () {
  "use strict";

  var list = document.getElementsByClassName("spacer");
  for (var i = 0; i < list.length; i++) {
    var size = list[i].getAttribute("data-height");
    list[i].style.height = "" + size + "px";
  }

  var list = document.getElementsByClassName("data-bg-image");

  for (var i = 0; i < list.length; i++) {
    var bgimg = list[i].getAttribute("data-bg-image");
    list[i].style.backgroundImage = "url('" + bgimg + "')";
  }
});
