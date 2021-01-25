require('./bootstrap');

// Using global.$ will make the jquery object($) available
/*
require("jsdom").env("", function(err, window) {
    if (err) {
        console.error(err);
        return;
    }

    var $ = require("jquery")(window);
});
*/

let $;
$ = require('jquery');

$(document).ready(function() {
  // Checking input data before submitting the form
  $('#new-bouquet-form').on('submit', function(e) {
    // ----------- Validation code here -----------
    // Checking that "bouquet name" is a valid input: VARCHAR(50)
    let input_name = $('#bouquet-name').val();
    if(input_name.length > 50) {
      console.log('ERROR. The bouquet name you entered is longer than 50 characters.');
    }
    // Checking that "bouquet size" is a valid input: NUM ranging from 0 to 3
    let min_size = 0;
    let max_size = 3;
    let input_size = $('#bouquet-size').val();
    if(!isNumeric(input_size) || input_size < min_size || input_size > max_size) {
      console.log('ERROR. The bouquet size you entered is not valid: it is not a number ranging from 0 to 3.');
    }
    // Checking that "bouquet price" is a valid input: NUM > 0
    let input_price = $('#bouquet-price').val();
    if(!isNumeric(input_price) || input_price <= 0) {
      console.log('ERROR. The bouquet price you entered is not valid: it is not a number higher than 0.');
    }
    // Checking that "bouquet season" is a valid input: NUM ranging from 0 to 3
    let min_season = 0;
    let max_season = 3;
    let input_season = $('#bouquet-season').val();
    if(!isNumeric(input_season) || input_season < min_season || input_season > max_season) {
      console.log('ERROR. The bouquet season you entered is not valid: it is not a number ranging from 0 to 3.');
    }
    // Checking that "bouquet rating" is a valid input: NUM ranging from 0 to 5
    let min_rating = 0;
    let max_rating = 5;
    let input_rating = $('#bouquet-rating').val();
    if(!isNumeric(input_rating) || input_rating < min_rating || input_rating > max_rating) {
      console.log('ERROR. The bouquet rating you entered is not valid: it is not a number ranging from 0 to 5.');
    }
    // If input data is not valid, then the form will not be submitted
    if(!valid) {
      e.preventDefault();
    }
  });
});
