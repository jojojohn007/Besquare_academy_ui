let classname= 'class5'


$(document).ready(function(){
setTimeout(() => {
    document.querySelector('.tier1').textContent = completedpercentage

  set(completedpercentage)

}, 1000);

  
//dynamic header
$('.header').load('header.php')
  //dynamichero
})



function set(completedpercentage) {
  
  var dataContainer = document.getElementById('wheel1');
  console.log(dataContainer)
  // console.log(date_parse)
  var dataValue = parseInt(dataContainer.getAttribute('data-value'));
  dataContainer.setAttribute('data-value', completedpercentage);
  console.log('pr'+completedpercentage)

  function percentageToDegrees(percentage) {
  console.log("df"+percentage)
  return percentage / 100 * 360
}


  $(".progress").each(function() {
    console.log("ll"+completedpercentage)
  let value =completedpercentage
  // this.textContent = value
  var left = $(this).find('.progress-left .progress-bar');
  var right = $(this).find('.progress-right .progress-bar');

  if (value > 0) {
    if (value <= 50) {
      right.css('transition', '.8s')
     var tier1= document.querySelector('.tier1')
     animateValue("tier1",0,0,0,completedpercentage);
    //  tier1.textContent = completedpercentage
      right.css('transition-timing-function','ease-out 2s')

      right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
    } else {
      right.css('transform', 'rotate(180deg)')

      left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
    }
  }

})

}
//animate increment

function animateValue(id, start, end, duration ,completedpercentage) {
    var start= 0 ;
    // var end = parseInt(document.querySelector("."+id).textContent, 10);
    var end = completedpercentage
    var duration = 800;
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.querySelector("."+id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

