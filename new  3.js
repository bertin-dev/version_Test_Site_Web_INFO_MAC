









document.getElementById("messages_content").scrollTop=getElementById("messages_content").scrollHeight
function (content)
{
	$('#room').html(content);
	document.getElementById("#notifiation                                                                                                                                                 ").play();
}

function infiniteScroll(){
	var offset=20;
	//on initiakise ajaxready a true au premier chargement de la fonction
	$(window).data('ajaxready',true);
	$('#content').append('<div id="loader"><img src="/img/ajax-loader.gif" alt="loader ajax"></div>');
	var deviceAgent=navigator.userAgent.toLowerCase();
	var agentID=deviceAgent.match(/(iphone|ipod|ipad)/);
	
	
	$(window).scroll(function(){
		//on teste si ajaxready vaut false,auquel cas on stoppe la fonction
		if($(window).data('ajaxready')==false) return;
		
		if(($(window).scrollTop()+$(window).height())==$(document).height()
		|| agentID && ($(window).scrollTop()+$(window).height())+150 > $(document).height()){
			//lorsqu'on commenceun traitement,on met ajaxready a false
			$(window).data('ajaxready',false);
			
			$('#content #loader').fadeIn(400);
			$.get('pagination.php?page='+offset+'/',function(data){
				if(data != ''){
					$('#content #loader').before(data);
					$('#content .hidden'.fadeIn(400));
					offset+=20;
					//une fois tous les traitements effectués,
					//on remet ajaxready a false//afin de pouvoirrappeller la fonction
					$(window).data('ajaxready',true);
				
				}
				$('#content #loader').fadeOut(400);
			})	;
		}	
	});
	
};