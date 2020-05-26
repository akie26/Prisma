$(document).ready(function(){
			$(".menSect").mouseenter(function(){
				$(".showMen").addClass("additionalMenu")
				$(".menuSect").addClass("mofoLink")
				.queue(function(){
					$(".tm").mouseleave(function(){
						$(".showMen").removeClass("additionalMenu")
						$(".menuSect").removeClass("mofoLink").dequeue();
					}).queue(function(){
						$(".showMen").mouseenter(function(){
							$(".showMen").addClass("additionalMenu")
							$(".menuSect").addClass("mofoLink").dequeue();
						}).queue(function(){
							$(".showMen").mouseleave(function(){
								$(".showMen").removeClass("additionalMenu")
								$(".menuSect").removeClass("mofoLink").dequeue();
							})
						})
					});
				});
			});
		});


		$(document).ready(function(){
			$(".womenSect").mouseenter(function(){
				$(".showWomen").addClass("additionalMenu")
				$(".womenuSect").addClass("mofoLink")
				.queue(function(){
					$(".twm").mouseleave(function(){
						$(".showWomen").removeClass("additionalMenu")
						$(".womenuSect").removeClass("mofoLink").dequeue();
					}).queue(function(){
						$(".showWomen").mouseenter(function(){
							$(".showWomen").addClass("additionalMenu")
							$(".womenuSect").addClass("mofoLink").dequeue();
						}).queue(function(){
							$(".showWomen").mouseleave(function(){
								$(".showWomen").removeClass("additionalMenu")
								$(".womenuSect").removeClass("mofoLink").dequeue();
							})
						})
					});
				});
			});
		})

		$(document).ready(function(){
			$(".kidsSect").mouseenter(function(){
				$(".showKids").addClass("additionalKidMenu")
				.queue(function(){
					$(".kidsSect").mouseleave(function(){
						$(".showKids").removeClass("additionalKidMenu")
						$(".kidsuSect").removeClass("mofoLink").dequeue();
					}).queue(function(){
						$(".showKids").mouseenter(function(){
							$(".showKids").addClass("additionalKidMenu")
							$(".kidsuSect").addClass("mofoLink").dequeue();
						}).queue(function(){
							$(".showKids").mouseleave(function(){
								$(".showKids").removeClass("additionalKidMenu")
								$(".kidsuSect").removeClass("mofoLink").dequeue();
							})
						})
					});
				});
			});
		});	



	$(document).ready(function(){
		$(window).on("scroll",function(){
			if($(window).scrollTop() > 30){
				$(".announceText").addClass("nonExist");
				$(".bodyFiller").removeClass("nonExist");
				$(".eternalHeader").css("position","fixed");
				$(".showKids").css("position","fixed");
				$(".showKids").css("top","50px");
				$(".showWomen").css("position","fixed");
				$(".showWomen").css("top","50px");
				$(".showMen").css("position","fixed");
				$(".showMen").css("top","50px");
			}else if($(window).scrollTop() < 30){
				var valueX = 80;
				var valueY = valueX - $(window).scrollTop() ;
				$(".bodyFiller").addClass("nonExist");
				$(".announceText").removeClass("nonExist");
				$(".eternalHeader").css("position","static");
				$(".showKids").css("position","fixed");
				$(".showKids").css("top",valueY + 'px');
				$(".showWomen").css("position","fixed");
				$(".showWomen").css("top",valueY + 'px');
				$(".showMen").css("position","fixed");
				$(".showMen").css("top",valueY + 'px');
			}
		});

	});

	$(document).ready(function(){
		 	$(".ofcShit").on("click",function(){
		 		$(".btnHead").toggleClass("demi");
		 		if($(".btnHead").hasClass('demi')){
		 			$('.dropdownA').addClass('magicA');
		 		}else{
		 			$('.dropdownA').removeClass('magicA');
		 		}
		 		if($('.dropdownB').hasClass('magicB') || $('.dropdownC').hasClass('magicC') || $('.dropdownD').hasClass('magicD')){
		 			$('.dropdownB').removeClass('magicB');
		 			$('.dropdownC').removeClass('magicC');
		 			$('.dropdownD').removeClass('magicD');
		 			$('.btnHeadA').removeClass('demi');
		 			$('.btnHeadB').removeClass('demi');
		 			$('.btnHeadC').removeClass('demi');
		 		}
		 	});
		 	$(".ofcShitA").on("click",function(){
		 		$(".btnHeadA").toggleClass("demi");
		 		if($(".btnHeadA").hasClass('demi')){
		 			$('.dropdownB').addClass('magicB');
		 		}else{
		 			$('.dropdownB').removeClass('magicB');
		 		}
		 		if($('.dropdownA').hasClass('magicA') || $('.dropdownC').hasClass('magicC') || $('.dropdownD').hasClass('magicD')){
		 			$('.dropdownA').removeClass('magicA');
		 			$('.dropdownC').removeClass('magicC');
		 			$('.dropdownD').removeClass('magicD');
		 			$('.btnHead').removeClass('demi');
		 			$('.btnHeadB').removeClass('demi');
		 			$('.btnHeadC').removeClass('demi');
		 		}
		 	});
		 	$(".ofcShitB").on("click",function(){
		 		$(".btnHeadB").toggleClass("demi");
		 		if($(".btnHeadB").hasClass('demi')){
		 			$('.dropdownC').addClass('magicC');
		 		}else{
		 			$('.dropdownC').removeClass('magicC');
		 		}
		 		if($('.dropdownA').hasClass('magicA') || $('.dropdownB').hasClass('magicB') || $('.dropdownD').hasClass('magicD')){
		 			$('.dropdownB').removeClass('magicB');
		 			$('.dropdownA').removeClass('magicA');
		 			$('.dropdownD').removeClass('magicD');
		 			$('.btnHeadA').removeClass('demi');
		 			$('.btnHead').removeClass('demi');
		 			$('.btnHeadC').removeClass('demi');
		 		}
		 	});
		 	$(".ofcShitC").on("click",function(){
		 		$(".btnHeadC").toggleClass("demi");
		 		if($(".btnHeadC").hasClass('demi')){
		 			$('.dropdownD').addClass('magicD');
		 		}else{
		 			$('.dropdownD').removeClass('magicD');
		 		}
		 		if($('.dropdownA').hasClass('magicA') || $('.dropdownB').hasClass('magicB') || $('.dropdownC').hasClass('magicC')){
		 			$('.dropdownB').removeClass('magicB');
		 			$('.dropdownC').removeClass('magicC');
		 			$('.dropdownA').removeClass('magicA');
		 			$('.btnHeadA').removeClass('demi');
		 			$('.btnHeadB').removeClass('demi');
		 			$('.btnHead').removeClass('demi');
		 		}
		 	});


		 	$(document).click(function() {
   				$('.dropdownA').removeClass('magicA');
   				$('.btnHead').removeClass('demi');
   				$('.dropdownB').removeClass('magicB');
   				$('.btnHeadA').removeClass('demi');
   				$('.dropdownC').removeClass('magicC');
   				$('.btnHeadB').removeClass('demi');
   				$('.dropdownD').removeClass('magicD');
   				$('.btnHeadC').removeClass('demi');	
			

			});
$(".ofcShit").click(function(e) {
    e.stopPropagation(); 
    return false;        
});	

$(".ofcShitA").click(function(e) {
    e.stopPropagation(); 
    return false;        
                         
});	

$(".ofcShitB").click(function(e) {
    e.stopPropagation(); 
    return false;        
                       
});	

$(".ofcShitC").click(function(e) {
    e.stopPropagation(); 
    return false;        
                        
});	
	});
	
$(document).ready(function(){
	$(window).on("scroll",function(){
		if($(window).scrollTop() > 109){
			$('.navSectHead').addClass("navFix");
			$('.itemPageOne').css("margin-top","98px");
		}else{
			$('.navSectHead').removeClass("navFix");
			$('.itemPageOne').css("margin-top","30px");
		}
	});
});

$(document).ready(function(){
	$('body').on("click", function(){
		if($('#overlay').hasClass('active')){
			$(this).css("overflow-y","hidden");
			$('.eternalHeader').css("display","none");
		}else{
			$(this).css("overflow-y","scroll");
			$('.eternalHeader').css("display","grid");
		}
	});
});

$(document).ready(function(){
	$('#searchInput').on("focus",function(){
		$('#searchForm').css("border-color","#000000");
	});
	$('#searchInput').on("focusout",function(){
		$('#searchForm').css("border-color","#FDFEFE");
	});
});


$(document).ready(function(){
	$('#na-btn').on("click",function(){
		window.location = "new arrivals.php";
	});
});

$(document).ready(function(){
	$('#searchInput').hover(function(){
		find_mouse=true;
	},function(){
		find_mouse=false;
	});
	$('#searchResult').hover(function(){
		find_mouse=true;
	},function(){
		find_mouse=false;
	});

	$("body").click(function(){
		if(!find_mouse){
			$("#searchResult").hide();
		}else{
			$("#searchResult").show();
		}
	});

	$('#searchInput').click(function(){
		$('#searchResult').toggleClass('ahah');
		if($('#searchResult').hasClass('ahah'))
			$('#searchForm').css("border-color","#000000");
	});

});
