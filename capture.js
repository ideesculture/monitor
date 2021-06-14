var page = require('webpage').create();
page.open('https://gadagne.ideesculture.fr/gestion/', function() {
  page.render('capture.png');
  phantom.exit();
});

