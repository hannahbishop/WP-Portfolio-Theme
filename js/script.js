$(function() {

  // init Masonry
  var $grid = $('.grid').imagesLoaded( function() {
  // init Masonry after all images have loaded
    $grid.masonry({
      itemSelector: '.grid-item',
      // use element for option
      columnWidth: '.grid-sizer',
      percentPosition: true,
      gutter: 10
    });
  });

  //Sticky header
  var controller = new ScrollMagic();
  var scene = new ScrollScene({triggerElement: ".site-header"})
    .setPin(".site-header")
    .addTo(controller)
    .triggerHook("onLeave");

  //Grid item scroll loading effect
  //only if images have loaded fully
    $(".grid-item").each(function (index, elem) {
      var scrollMagicController = new ScrollMagic();
      var gridLoad = new TimelineMax();
      gridLoad.add([
        TweenMax.fromTo(elem, 0.6,{ opacity: 0 }, { opacity: 1 }),
        TweenMax.fromTo(elem, 0.3,{ top: "12em" }, { top: "0em" })
      ]);
       var gridLoadScene = new ScrollScene({
           triggerElement: elem,
       })
       .setTween(gridLoad)
       .reverse(false)
       .triggerHook("onEnter")
       .addTo(scrollMagicController);
     });
});
