jQuery(document).ready(function() {
  jQuery('.left').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
      offset: 100
     });
});

jQuery(document).ready(function() {
  jQuery('.left1').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
      offset: 100
     });
});

//This jQuery function calls the class and animates when the document is ready as the  page comes in view.

jQuery(document).ready(function() {
  jQuery('.right').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
      offset: 100
     });
});
jQuery(document).ready(function() {
  jQuery('.right1').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
      offset: 100
     });
});
