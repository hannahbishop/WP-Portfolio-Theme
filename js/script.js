$(function() {
  //Sticky header
  var controller = new ScrollMagic();
  var scene = new ScrollScene({triggerElement: ".site-header"})
    .setPin(".site-header")
    .addTo(controller)
    .triggerHook("onLeave");

  //Grid item scroll loading effect
  //only if images have loaded fully
  $('.project-thumbnail').imagesLoaded( { background: true }, function() {
    var scrollMagicController = new ScrollMagic();
    var gridLoad = new TimelineMax();
    gridLoad.add([
      TweenMax.fromTo('.grid-item', 0.2,{ opacity: 0 }, { opacity: 1 }),
      TweenMax.fromTo('.grid-item', 0.4,{ top: "10em" }, { top: "0em" })
    ]);
     var gridLoadScene = new ScrollScene({
         triggerElement: '.grid-item',
     })
     .setTween(gridLoad)
     .reverse(false)
     .triggerHook("onEnter")
     .addTo(scrollMagicController);
  });
});
