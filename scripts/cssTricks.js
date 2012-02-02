function setCSSHeight() {

  if (typeof window.innerHeight != 'undefined') {
  
    var viewportHeight = window.innerHeight;
  
  } else {

    var viewportHeight = document.documentElement.offsetHeight;

  }

  var cssCalculatedHeight = 105 + 60 + 30 +60 ;

  // Get rid of the scrollbar
  cssCalculatedHeight++;

  if (navigator.appName == 'Microsoft Internet Explorer') {

    cssCalculatedHeight += 5;

  }

  var recalculatedHeight = viewportHeight - cssCalculatedHeight;

  var bodyDiv = document.getElementById('body');

  if (bodyDiv.offsetHeight < (recalculatedHeight+60)) {
    
    bodyDiv.style.height = recalculatedHeight;

  }

}
