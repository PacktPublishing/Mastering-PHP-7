console.log('start-time: ' + Date.now());

$.ajax({
  url: 'http://foggyline.net/',
  success: function (result) {
    console.log('result-time: ' + Date.now())
    console.log(result)
  }
});

console.log('end-time: ' + Date.now());
