
      $(function(){
          $("#head-title").typed({
            strings: ["Programs must be written for people", "and only incidentally for machines to execute " ,"Talk is cheap. Show me the code. ",],
            typeSpeed: 70,
            loop: true,
            startDelay: 100
          });
		  
      });
	  $('#logo_img').hover(function(e){
		  $('#logo_img').css({
			  transform:'scale(1.1)',
			  transition:'.4s'
			  })
		  },function(e){
			$('#logo_img').css({
			  transform:'scale(1)'
			 })	  
	  });
  
     