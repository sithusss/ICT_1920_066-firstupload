

$('textarea').keyup(function() {
    let characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
  
    current.text(characterCount);
  
    /*This isn't entirely necessary, just playing around*/
    if (characterCount < 10) {
      current.css('color', 'black');
    }
    if (characterCount > 40 && characterCount < 120) {
      current.css('color', 'green');
    }
    if (characterCount > 121 && characterCount < 200) {
      current.css('color', 'red');
    }
    
  
    /*if (characterCount >= 60) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight', 'bold');
    } else {
      maximum.css('color', '#666');
      theCount.css('font-weight', 'normal');
    }*/
  });
  