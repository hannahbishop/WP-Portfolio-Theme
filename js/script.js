$(function() {
  // Init ScrollMagic Controller
  var controller = new ScrollMagic();
  var scene = new ScrollScene({triggerElement: ".site-header"})
    .setPin(".site-header")
    .addTo(controller)
    .addIndicators();
});
