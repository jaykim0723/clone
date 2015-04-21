
//硫붿씤 tab
function mTabChange(os){
	for(i=1;i<=2;i++){
		if(os==i){
			document.getElementById("brd"+os).style.display="block";
			document.getElementById("bim"+os).src="./images/main/h2_m"+os+"_on.gif";
		}else{
			document.getElementById("brd"+i).style.display="none";
			document.getElementById("bim"+i).src="./images/main/h2_m"+i+".gif";
		}
	}
}


//�붾㈃ �뺣�異뺤냼
var nowZoom = 100;
function zoomIn() {
	nowZoom = nowZoom - 10;
	
	if(nowZoom <= 70) nowZoom = 70;
	zooms();
}
function zoomOut() {
	nowZoom = nowZoom + 10;
	
	if(nowZoom >= 130) nowZoom = 130;
	zooms();
}
function zoomReset(){
	nowZoom = 100; 
	
	zooms();
}
function zooms(){
	document.body.style.zoom = nowZoom + '%';
	/* if(nowZoom==70){
		alert ("30%濡�異뺤냼 �섏뿀�듬땲�� ");
	}
	if(nowZoom==130){
		alert ("300%留뚰겮 �뺣� �섏뿀�듬땲�� ");
	} */
} 





$(document).ready(function(){





	//FAQ
	$('.faq p').hide();



	//�섎떒 �ъ씠��諛붾줈媛�린
	$(".go_site .selectbox").next("ul").hide()



//�곷떒 硫붾돱
function initNavigation() {
	var lists = document.getElementsByTagName('ul');
	for (var i=0;i<lists.length;i++) {
		if (lists[i].className != 'gnb') continue;
		lists[i].onmouseover = navMouseOver; //gnb ��留덉슦���ㅻ쾭��navMouseOver �ㅽ뻾
		//lists[i].onmouseover = $("#gnb").removeClass( "gnb_all" ).addClass( "gnb" );
		lists[i].onmouseout = navMouseOut; //gnb ��留덉슦���꾩썐��navMouseOut �ㅽ뻾
		var listItems = lists[i].getElementsByTagName('li');
		for (var j=0;j<listItems.length;j++) {
			var test = listItems[j].getElementsByTagName('ul')[0]; //test = gnb > ul 
			if (test) {
				listItems[j].firstChild.onfocus = navMouseOver;
				listItems[j].relatedItem = test;
			}
		}
	}
}
var currentlyOpenedMenus = new Array();
var currentlyFocusedItem;
function navMouseOver(e) {
	
	var evt = e || window.event;
	var evtTarget = evt.target || evt.srcElement;
	if (evtTarget.nodeName == 'UL') return;
	while (evtTarget.nodeName != 'LI')
		evtTarget = evtTarget.parentNode;
	foldMenuIn(evtTarget);
	if (evtTarget.relatedItem && !evtTarget.relatedItem.opened) {
		evtTarget.className = 'highlight';
		evtTarget.relatedItem.className = 'foldOut';
		evtTarget.relatedItem.parentNode.className = 'active';
		evtTarget.relatedItem.opened = true;
		currentlyOpenedMenus.push(evtTarget.relatedItem); // currentlyOpenedMenus 諛곗뿴�먯꽌 evtTarget ��relatedItem 瑜�異붽�
		
	}
	
}
function navMouseOut(e) {
	var evt = e || window.event;
	var relatedNode = evt.relatedTarget || evt.toElement;
	foldMenuIn(relatedNode);
}
function foldMenuIn(targetNode) {
	if (!targetNode) return;
	var newCurrentlyOpenedMenus = new Array();
	for (var i=0;i<currentlyOpenedMenus.length;i++) {
		if (!containsElement(currentlyOpenedMenus[i],targetNode)) {
			currentlyOpenedMenus[i].className = '';
			currentlyOpenedMenus[i].parentNode.className = '';
			currentlyOpenedMenus[i].opened = false;
		}
		else
			newCurrentlyOpenedMenus.push(currentlyOpenedMenus[i]);
	}
	currentlyOpenedMenus = newCurrentlyOpenedMenus;
}
function containsElement(obj1,obj2) {
	while (obj2.nodeName != 'HTML') {
		if (obj2 == obj1) return true;
		obj2 = obj2.parentNode;
	}
	return false;
}
addEventSimple(window,"load",initNavigation);
function addEventSimple(obj,evt,fn) {
	if (obj.addEventListener)
		obj.addEventListener(evt,fn,false);
	else if (obj.attachEvent)
		obj.attachEvent('on'+evt,fn);
}
function removeEventSimple(obj,evt,fn) {
	if (obj.removeEventListener)
		obj.removeEventListener(evt,fn,false);
	else if (obj.detachEvent)
		obj.detachEvent('on'+evt,fn);
}
/** PUSH AND SHIFT FOR IE5 **/
function Array_push() {
	var A_p = 0
	for (A_p = 0; A_p < arguments.length; A_p++) {
		this[this.length] = arguments[A_p]
	}
	return this.length
}
if (typeof Array.prototype.push == "undefined") {
	Array.prototype.push = Array_push
}
function Array_shift() {
	var A_s = 0
	var response = this[0]
	for (A_s = 0; A_s < this.length-1; A_s++) {
		this[A_s] = this[A_s + 1]
	}
	this.length--
	return response
}
if (typeof Array.prototype.shift == "undefined") {
	Array.prototype.shift = Array_shift
}




});







$(function() {


	//�섎떒 �ъ씠��諛붾줈媛�린
	$(".go_site .selectbox").click(function() {
		$(this).next("ul").slideToggle();
	});






	//�쒖꽕�덈궡 �쇳꽣�덈궡
	var element_list = $(".m4_tab > .tab > ul > li");

	$(".bulid_info").hide();
	$(".bulid_info:first").show();

		element_list.each(function( index ) {
			$(this).find("a").click(function() {

					$(this).parent().addClass("on");
					$(this).parent().siblings().removeClass('on');
					var index2 = index+1;
					$(".bulid_info").hide();
					$("#bulid_info"+index2).show();
			});
		});







//硫붿씤 �듬찓��
/*
	$(".quick .slides_q").carouFredSel({
		align		: "left",
		width		: "536px",
		height		: 60,
		items		:{
		visible 	: 4
	},
	scroll      	:{
	items			: 1,
	duration        : 890,
	pauseOnHover	: true
	},
		next: '.next_banner',
		prev: '.prev_banner',
		direction	: "left"
	});
	$(".rolling_stop").click(function() {
		$(".quick .slides_q").trigger("pause");
	});
	$(".rolling_play").click(function() {
		$(".rolling ul").trigger("play");
	});
	$('.quick .slides_q a').each(function(index) {
		$(this).bind('focus', function() {
	$(".quick .slides_q").trigger("pause");
		});
	});
	*/

	//硫붿씤 �대�吏�
	$(".m_pre_img .slides_m").carouFredSel({
		width		: "596px",
		height		: "auto",
		duration	: 890,
		items		:{
			width: 596
		},
		scroll: { items:1,duration: 900,fx : "crossfade" }, //Possible values: "none", "scroll", "directscroll", "fade", "crossfade", "cover", "cover-fade", "uncover" or "uncover-fade"
		pagination: "#pager1"
	});


	//硫붿씤 �앹뾽議�
	$(".m_popup_zone .slides_popup").carouFredSel({
		align		: "left",
		width		: "280px",
		height		: 223,
		duration	: 890,
		items: {
			width: 280
		},
		pagination: "#pager2",
		direction	: "left"
	});
	$(".popup_stop").click(function() {
		$(".m_popup_zone .slides_popup").trigger("pause");
	});
	$(".popup_play").click(function() {
		$(".m_popup_zone .slides_popup").trigger("play");
	});
	$('.m_popup_zone .slides_popup').each(function(index) {
		$(this).bind('focus', function() {
	$(".popup_stop").trigger("pause");
		});
	});




	//FAQ
	$('.faq h4 a').click(function() {
		
		var element = $(this).parents().next('p');
		if (element.is(':visible')) {
			$(this).parents().next('p').slideUp();
		} else {
			$(this).parents().next('p').slideDown();
		}

	});






});


