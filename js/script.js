$(function() {
  // Init ScrollMagic Controller
  var controller = new ScrollMagic();
  var scene = new ScrollMagic.Scene({triggerElement: ".site-header"})
  .setPin(".site-header")
  .addIndicators()
  .addTo(controller);
});