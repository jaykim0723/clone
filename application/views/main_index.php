<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>이웃사랑후원회 - 수정중-</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src="./js/jquery-1.8.2.min.js"></script> 
	<script type="text/javascript" src="./js/common.js"></script>
	<script type="text/javascript" src="./js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- 	<script type="text/javascript" src="/resources/pms/common/js/pms-common.js"></script>
	<script type="text/javascript" src="/resources/pms/common/js/ajax.js"></script>
	<script type="text/javascript" src="/resources/pms/common/js/validator.js"></script>
	<script type="text/javascript" src="/resources/pms/common/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="/resources/pms/common/js/print.js"></script> -->
	<!-- <script type="text/javascript" src="/resources/pms/common/js/placeholder.js"></script> -->


<script type="text/javascript">

$(document).ready(function(){
	//메인 이미지 효과
	$("#show_img_t1").slideUp( 0 ).delay( 500 ).fadeIn( 300 );
	$("#show_img_t2").slideUp( 0 ).delay( 800 ).fadeIn( 400 );
	$("#show_img1").hide();
	$("#show_img1").animate({
		height: "toggle",
		opacity: "toggle"
		}, {
		duration: 2000
		}
	);
});

</script>

	
<!--<script src="http://connect.facebook.net/en_US/all.js"></script> -->
<!--<script id="facebook-jssdk" src="//connect.facebook.net/ko_KR/all.js#xfbml=1"></script>-->
<script type="text/javascript">
	function changeSnsView(flag) {
		//switch sns view
		if(flag == 'F') {
			$("#facebook_area").css("display", "");
			$("#twitter_area").css("display", "none");
		}
		else {
			$("#facebook_area").css("display", "none");
			$("#twitter_area").css("display", "");
		}
	}
	function getFacebookData() {
		jQuery.ajax
		({
			url: "/facebook.jsp",
			type: 'POST', 
			cache : false,
			dataType: 'html',
			success: function(data) {
				$("#facebook_area").html(data);
			}
		});
	}
	
	function getTwitterDataAjax() {
		jQuery.ajax
		({
			url: "/twitter.jsp",
			type: 'POST', 
			cache : false,
			dataType: 'html',
			success: function(data) {
				$("#twitter_area").html(data);
				getFacebookData();
			}
		});
	}
	
	function jsMainPopupView(openParam, seq){
        window.open("/popup/popupView.do?seq_n="+seq+"&site_v=1", "popupView"+seq , openParam);
	}
	
	function jsMainPopup(){
		
		var width = 10;
        var height = 27;
        var scrollbars = "no";
		var resizable = "no";

			}
	
	
	function facebooktest()  {
	
		var count = 10; // 글이 보여질 개수 
		var facebookGroupId = 374625959226125; // 페이스북 그룹 ID
	
		var counts = 1;
	
		jQuery.ajax({
		    url: "https://graph.facebook.com/UniFutureCenter/posts?access_token=852963841381951|5siVmUC4A9m7khwYk2zi165iC6Q&locale=ko_KR&limit="+count+"",
		    dataType: "text",
		    jsonp: "callback",
		    cache: true,
		    success: function (json) {
		    	jQuery.ajax
				({
					url: "http://unifuture.unikorea.go.kr/www/main/userMain/getFaceBookDataAjax.do",
					data: {jsondata: json},
					type: 'POST', 
					cache : false,
					dataType: 'html',
					success: function(data) {
						$("#facebook_area").html(data);
					}
				});
		    }
		});

	}
	
	$(document).ready(function(){
	
		facebooktest();
		//getTwitterDataAjax();
		
	});
</script>

</head>

<body >
	
<ul id="quickNavigation">
	<li><a href="#container">본문내용 바로가기</a></li>
</ul>
<div class="body_wrap">
	<div class="mainBox">
		<!-- 헤더 -->
		<div class="header">
			


<!--<h1 class="logo">
	<a href="/"><img src="/resources/kor/images/common/logo.gif" alt="한반도 통일미래센터">
	</a>
</h1>-->
<div class="quickMenu">
	<h2 class="hide">공통 네비게이션 영역</h2>
	<ul>
		<li class="home"><a href="/"><img src="./images/common/util_home.gif" alt="home"></a>
		</li>
		
		<li><a href="/www/mr/login/login/login.do"><img src="./images/common/util_login.gif" alt="로그인"></a>
		</li>
		<li><a href="/www/mr/signup/join/joinAgree.do"><img src="./images/common/util_join.gif" alt="회원가입"></a>
		</li>
     	
		
<!--	<li class="text"><a href="#" onclick="javascript:zoomReset();"><img src="/resources/kor/images/common/text_100per.gif" alt="화면크기 100%"></a>
		</li>
		<li class="text"><a href="#" onclick="javascript:zoomOut();"><img src="/resources/kor/images/common/text_plus.gif" alt="화면크기 확대"></a>
		</li>
		<li class="text"><a href="#" onclick="javascript:zoomIn();"><img src="/resources/kor/images/common/text_minus.gif" alt="화면크기 축소"></a> 
		</li>-->
	</ul>
</div>

<h2 class="hide">메인메뉴</h2>
<div id="gnb">
	<ul class="gnb">
	<li id="gnb1">
	
		<a href="/views/cms/www/ne/ne_1.jsp">남북/국제교류</a>
		<ul>
			<li><a href="/views/cms/www/ne/ne_1.jsp">이산가족상봉</a></li> 
			<li><a href="/views/cms/www/ne/ne_2.jsp">남북실무회담</a></li> 
			<li><a href="/views/cms/www/ne/ne_3.jsp">체육교류</a></li> 
			<li><a href="/views/cms/www/ne/ne_4.jsp">남북청소년교류</a></li> 
		</ul>
	</li>
	<li id="gnb2">

		<a href="/views/cms/www/as/sm/sm_info.jsp">청소년통일체험활동</a>
		<ul>		
			<li><a href="/views/cms/www/as/sm/sm_info.jsp">학교단체 및 특화프로그램</a></li> 
			<li><a href="/views/cms/www/as/ym/ym_info.jsp">단위 프로그램</a></li> 
			<li><a href="/views/cms/www/as/cm/cm_1.jsp">일정표</a></li> 
		</ul>
	</li>
	<li id="gnb3">
		<a href="/views/cms/www/fm/fc/fc_info.jsp">가족활동</a>
	<ul>	
		<li><a href="/views/cms/www/fm/fc/fc_info.jsp">가족 캠프</a></li> 
	</ul>
	</li>
	<li id="gnb4">
		<a href="/views/cms/www/un/fy/centerinfo.jsp">이용안내</a>
		<ul>
			
		<li><a href="/views/cms/www/un/fy/centerinfo.jsp">시설안내</a></li> 
				<li><a href="/views/cms/www/un/ay/ay_rent.jsp">이용신청</a></li> 
				<li><a href="/views/cms/www/un/fees.jsp">요금안내</a></li> 
		</ul>
	</li>
	<li id="gnb5">
		<a href="/www/bn/notice/bbs/bbsList.do?bbs_cd_n=1">알림마당</a>
		<ul>
			<li><a href="/www/bn/notice/bbs/bbsList.do?bbs_cd_n=1">공지사항</a></li> 
			<li><a href="/www/bn/photonews/bbs/bbsList.do?bbs_cd_n=4">포토뉴스</a></li> 
			<li><a href="/www/bn/press/bbs/bbsList.do?bbs_cd_n=2">보도자료</a></li> 
			<li><a href="/www/bn/media/bbs/bbsList.do?bbs_cd_n=14">미디어동향</a></li> 
			<li><a href="/www/bn/events/eventschedule/eventList.do">행사안내</a></li> 
			<li><a href="/www/bn/archive/bbs/bbsList.do?bbs_cd_n=3">자료실</a></li> 
			<li><a href="/www/bn/bn_faq/bbs/bbsList.do?bbs_cd_n=7">자주묻는 질문</a></li> 

		</ul>
	</li>
	<li id="gnb6">
		<a href="/www/cc/freeboard/bbs/bbsList.do?bbs_cd_n=5">고객마당</a>
		<ul>
			<li><a href="/www/cc/freeboard/bbs/bbsList.do?bbs_cd_n=5">열린게시판</a></li> 
			<li><a href="/www/cc/message/extendsdata/externalBbsList.do">통일미래 메시지</a></li> 
			<li><a href="/www/cc/videosketch/bbs/bbsList.do?bbs_cd_n=9">영상스케치</a></li> 
			<li><a href="/www/cc/faq/bbs/bbsList.do?bbs_cd_n=7">&nbsp;</a></li> 
		</ul>
	</li>
	<li id="gnb7">
		<a href="/views/cms/www/at/gs/greetings.jsp">센터소개</a>
		<ul>
			<li><a href="/views/cms/www/at/gs/greetings.jsp">센터장 인사말</a></li> 
			<li><a href="/views/cms/www/at/an/purpose.jsp">기관안내</a></li> 
			<li><a href="/views/cms/www/at/organization.jsp">조직 및 업무</a></li> 
			<li><a href="/views/cms/www/at/location.jsp">찾아오시는 길</a></li> 

		</ul>
	</li>
	</ul>
</div>
<!-- <span class="gnb_gover3">
<a href="http://www.unikorea.go.kr/content.do?cmsid=1471" target="_blank" title="새창열림"><img src="/resources/kor/images/common/btn_gover3.gif" alt="정부 3.0 정보공개"></a>
</span> -->


		</div>
		<div class="container" id="container">
			
<div class="visual">
	<ul class="slide">
		<li class="img1"><span>통일미래세대의 교류와 화합의장 - 우리의 꿈! 여기서 시작됩니다</span></li>
	</ul>
</div>


<!-- 퀵메뉴 -->
<div class="quick_wrap">
	<div class="quick">
		<h2><img src="./images/main/txt_quick.gif" alt="quick menu"></h2>
		<ul class="list slides_q">
			
			<li class="list2"><a href="/views/cms/www/un/fy/centerinfo.jsp"><img src="./images/main/txt_quick2.gif" alt="후원회 소개"></a></li>
			<li class="list1" style="width:134px;"><a href="/views/cms/www/un/ay/ay_rent.jsp"><img src="/resources/kor/images/main/txt_quick1.gif" alt="공지사항"></a></li>
			<li class="list3"><a href="/www/bn/events/eventschedule/eventList.do"><img src="./images/main/txt_quick3.gif" alt="행사안내"></a></li>
			<li class="list6"><a href="/www/cc/faq/bbs/bbsList.do?bbs_cd_n=7"><img src="./images/main/txt_quick6.gif" alt="자주묻는질문"></a></li>
			<li class="list5"><a href="/views/cms/www/at/location.jsp"><img src="./images/main/txt_quick5.gif" alt="참여정보"></a></li>
		</ul>
	</div>
</div>

<div class="m_pre_txt">
	<!-- 1 포토뉴스 -->
	<div class="m_photo">
		<h2><a href="/www/bn/photonews/bbs/bbsList.do?bbs_cd_n=4"><img src="/resources/kor/images/main/h2_photo.gif" alt="포토"></a></h2>
				<a href="/www/bn/photonews/bbs/bbsView.do?bbs_cd_n=4&amp;bbs_seq_n=49">
			<img src="./images/foot_img.jpg" alt="통일정책지도자 과정(4.1일)" width="220" height="136">
		</a>
		<p><a href="/www/bn/photonews/bbs/bbsView.do?bbs_cd_n=4&amp;bbs_seq_n=49">통일정책지도자 과정(4...
	 <span class="date">2015-04-02</span></a></p>
				<span class="more"><a href="/www/bn/photonews/bbs/bbsList.do?bbs_cd_n=4"><img src="./images/main/btn_more.gif" alt="포토뉴스 자세히 보기"></a></span>
	</div>

	<!-- 2 공지사항 -->
	<div class="m_notice">
		<div class="m_notice1">
			<h2><a href="#none" onkeypress="this.onclick();" onclick="mTabChange(1); return false;"><img src="./images/main/h2_m1_on.gif" alt="공지사항" id="bim1"></a></h2>	
			<div id="brd1">
				<ul>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=26">&lt;통일박람회 2015&gt; 전시부스 참여 단체,기관을 모집하고 있습니다.</a> <span class="date">2015-04-06</span></li>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=25">한민족 합창축제 모집요강</a> <span class="date">2015-03-11</span></li>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=24">한반도통일미래센터 홈페이지 오프라인 점검으로 인한 사용 일시 정지</a> <span class="date">2015-02-24</span></li>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=23">한반도통일미래센터 보조강사[기간제 근로자] 채용 연장 공고</a> <span class="date">2015-02-04</span></li>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=22">한반도통일미래센터 보조강사(기간제 근로자) 채용 공고</a> <span class="date">2015-01-28</span></li>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=12">한반도통일미래센터 개관식</a> <span class="date">2014-10-22</span></li>
									<li><a href="/www/bn/notice/bbs/bbsView.do?bbs_cd_n=1&amp;bbs_seq_n=10">통일부 일반임기제 공무원 경력경쟁채용 공고</a> <span class="date">2014-09-15</span></li>
								</ul>
				<span class="more"><a href="#"><img src="./images/main/btn_more.gif" alt="공지사항- 자세히 보기"></a></span>
			</div>
		</div>
		<div class="m_notice2">
			<h2><a href="#none" onkeypress="this.onclick();" onclick="mTabChange(2); return false;"><img src="./images/main/h2_m2.gif" alt="보도자료" id="bim2"></a></h2>
			<div id="brd2" style="display:none;">
				<ul>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=17">한반도통일미래센터 정상운영 시작</a> <span class="date">2015-03-25</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=16">한반도통일미래센터 글로벌캠프 개최 보도자료</a> <span class="date">2015-03-05</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=15">한반도통일미래센터와 청소년단체협의회 업무협약체결 보도자료</a> <span class="date">2015-02-16</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=14">'청소년방과후아카데미' 학생 초청 통일체험연수 실시</a> <span class="date">2015-02-11</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=12">개관식 보도참고자료</a> <span class="date">2014-11-18</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=11">한반도통일미래센터 개관</a> <span class="date">2014-11-11</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=10">｢국제유소년(U-15)축구대회｣ 참가 관련 북한 선수단 남한 방문 승인</a> <span class="date">2014-11-06</span></li>
									<li><a href="/www/bn/press/bbs/bbsView.do?bbs_cd_n=2&amp;bbs_seq_n=9">한반도통일미래센터 운영 경비 지원 등 의결(제265차 교추협 결과)</a> <span class="date">2014-09-15</span></li>
								</ul>
				<span class="more"><a href="#"><img src="./images/main/btn_more.gif" alt="보도자료 자세히 보기"></a></span>
			</div>
		</div>
	</div>

	<!-- 3 팝업존 -->
	<div class="m_popup_zone">
		<h2><img src="./images/main/h2_popup.gif" alt="팝업존=>클릭"></h2>
		<div class="controll">
			<a href="#none" class="popup_stop"><img src="./images/common/btn_stop.png" alt="stop"></a>
			<a href="#none" class="popup_play"><img src="./images/common/btn_play.png" alt="play"></a>
			<div id="pager2" class="pager" style="display: block;"><a href="#" class=""><span>1</span></a><a href="#" class=""><span>2</span></a><a href="#" class="selected"><span>3</span></a></div>
		</div>
		<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 280px; height: 223px; margin: 0px; overflow: hidden;"><ul class="slides_popup" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 1960px; height: 223px; z-index: auto;">
													
			<li>
			<a href="https://www.facebook.com/loveneighbors1/photos/a.552870964759770.1073741827.552836648096535/631811423532390/?type=1&theater" target="_blank" title="새창열기">
				<img src="./images/main/Acounts.png" alt="후원계좌" width="280" height="223">
			</a>
			</li>
			<li>
			<a href="http://www.namsanwon.or.kr/" target="_blank" title="새창열기">
				<img src="./images/banner/banner2.jpg" alt="남산원" width="280" height="223">
			</a>
			</li>
			<li>
			<a href="https://www.facebook.com/loveneighbors1/photos/pb.552836648096535.-2207520000.1428607165./820944837952380/?type=3&theater">
				<img src="./images/banner/banner3.jpg" alt="한반도통일미래센터 개관식" width="280" height="223">
			</a>
			</li>
			</ul>
			</div>
		<div class="clearfix"></div>
	</div>



	<!-- 4 SNS소식 -->
	<div class="m_sns">
		<h2><img src="./images/main/h2_sns.gif" alt="SNS소식"></h2>
		<!-- <span class="sns_tw"><a href="#" onclick="changeSnsView('T');return false;"><img src="/resources/kor/images/main/ico_twitter.gif" alt="트위터" /></a></span> -->
		<span class="sns_fb"><a href="https://www.facebook.com/loveneighbors1" target="_blank"><img src="./images/main/facebook.jpg" alt="페이스북"></a></span>
		<div class="m_sns_cont" id="facebook_area">
			<div class="sns">
				<!--<a href="http://view.asiae.co.kr/news/view.htm?idxno=2015030410493707484" class="img" target="_blank"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQCKPjUGsch_dUSE&w=130&h=130&url=http%3A%2F%2Fcwstatic.asiae.co.kr%2Fasiae_v1%2Fgnb_t%2Fasiae_logo.jpg&cfs=1" alt="이미지" /></a>-->
				<p class="note"><a href="https://www.facebook.com/unikorea/photos/a.132204193488004.12593.124201000954990/808122045896212/?type=1" target="_blank">이웃사랑 사이트 진척사항</a></p>
				<span class="date">2015-03-10 오전 10:25</span>
			</div>
			<div class="sns">
				<!--<a href="http://bit.ly/1CfRBZ9" class="img" target="_blank"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQBtRP47N66RnD7m&w=130&h=130&url=http%3A%2F%2Fimage.newsis.com%2Fimages%2Fnewsis_sns.jpg&cfs=1" alt="이미지" /></a>-->
				<p class="note"><a href="#" target="_blank">미완성</a></p>
				<span class="date">2015-02-11 오후 03:15</span>
			</div>
			<div class="sns">
				<!--<a href="https://www.facebook.com/unikorea/photos/a.132204193488004.12593.124201000954990/808122045896212/?type=1" class="img" target="_blank"><img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/s130x130/10473506_808122045896212_5518679968240849033_n.jpg?oh=650936fd2c25e32cef4979a2e1790bff&oe=55A2547C&__gda__=1437956172_58a962513d413e7b0fb7b853725af9c1" alt="이미지" /></a>-->
				<p class="note"><a href="#" target="_blank">미완성</a></p>

				<span class="date">2014-11-12 오전 09:27</span>
			</div>
			<div class="sns">
				<!--<a href="https://www.facebook.com/video.php?v=808113675897049" class="img" target="_blank"><img src="https://fbcdn-vthumb-a.akamaihd.net/hvthumb-ak-xfa1/v/t15.0-10/s130x130/10502829_808117272563356_808113675897049_55157_941_b.jpg?oh=d725b18c2a55f41739409d6332347746&oe=559BA270&__gda__=1437311013_2cce25f116aab9c20d0cc3b685bd5731" alt="이미지" /></a>-->
				<p class="note"><a href="#" target="_blank">미완성</a></p>
				<span class="date">2014-11-12 오전 09:19</span>
			</div>
			<div class="sns">
				<!--<a href="http://m.news.naver.com/read.nhn?mode=LSD&mid=sec&sid1=100&oid=079&aid=0002650189" class="img" target="_blank"><img src="https://fbexternal-a.akamaihd.net/safe_image.php?d=AQA0jbMPFy4Cd3GH&w=130&h=130&url=http%3A%2F%2Fimgnews.naver.net%2Fimage%2Forigin%2F079%2F2014%2F10%2F31%2F2650189.jpg&cfs=1" alt="이미지" /></a>-->
				<p class="note"><a href="" target="_blank">미완성</a></p>
				<span class="date">2014-11-05 오후 12:22</span>
			</div>
		</div>
		<!-- <div class="m_sns_cont" id="twitter_area" style="display:none">
		</div> -->
	</div>

</div>

		
		</div><!-- end of container  -->	
	</div><!-- end of mainBox -->
	<div id="footer">
		

<script type="text/javascript">
/* 	function jsGoSite(obj){
		var site = obj.value;
		if(site!=""){
			if(confirm("새창으로 이동 합니다.")){
				window.open(site);
			}
		}
		return false;
	}
	//통합검색
	function subLayoutTotalSearch(){
		var form = document.subSearchForm;
		var searchVal = form.search_val_v.value;
		
		if(""==searchVal){
			alert("검색어를 입력해 주십시요.");
			form.search_val_v.focus();
			return false;
		}else{
			form.action = "/search/search/searchList.do";
			form.submit();
		}
	} */
</script>
<h2 class="hide">페이지 하단 영역</h2>
<div id="foot">
	<ul>
		<li class="first"><a href="/views/cms/www/etc/privacy.jsp">개인정보처리방침</a></li>
		<!-- <li><a href="/views/cms/www/etc/copyright.jsp">저작권정책</a></li> -->
		<li><a href="/views/cms/www/etc/videoinformation.jsp">영상정보기기처리지침</a></li>
		<li class="last"><a href="/www/etc/sitemap/userMain/siteMap.do">사이트맵</a></li>
		<li class="go_site">
			<form name="subSearchForm" id="subSearchForm" action="/search/search/searchList.do" method="get">
				<input type="hidden" name="tab_cl" value="01">
					<input type="text" name="search_val_v" id="search_val_v" placeholder="검색어를 입력하세요">
					<a href="#" onclick="subLayoutTotalSearch();return false;"><img src="./images/common/btn_search.gif" alt="검색">
				</a>
			</form>
		</li>
		<li class="go_site">
			<a href="#none" class="selectbox">관련 SNS 및 블로그</a>
				<ul style="display: none;">
					<li><a href="http://blog.naver.com/lovengs" target="_blank" title="새창열림">블로그</a></li>
					<li><a href="https://www.facebook.com/loveneighbors1" target="_blank" title="새창열림">페이스북</a></li>
					<li><a href="http://www.uniedu.go.kr/uniedu/page/2.do?mcd=MC10001106" target="_blank" title="새창열림">트위터</a></li>

				</ul>
			<!-- <select onchange="jsGoSite(this);return false;">
				<option value="">유관기관사이트</option>
				<option value="http://www.unikorea.go.kr/index.do">통일부</option>
				<option value="http://www.uniedu.go.kr/uniedu/main/main.do">통일교육원</option>
				<option value="http://www.tongtong.go.kr/web/jsp/usrsys/main/UsrIndex.jsp">이산가족 통합센터</option>
				<option value="http://www.rrc.go.kr/">규제개혁위원회</option>
				<option value="http://www.110.go.kr/start.do">정부민원 안내콜센터</option>
				<option value="https://www.sanghun.go.kr/pt/main/portalHome.do">상훈포털시스템</option>
				<option value="http://dialogue.unikorea.go.kr/main.do">남북 회담본부</option>
				<option value="http://www.uniedu.go.kr/uniedu/page/2.do?mcd=MC10001106">전국 통일관</option>
			</select> -->
		</li>
	</ul>
</div>
<div class="footer_wrap">
	<p class="f_logo">
		<!--<img src="" alt="한반도 통일미래센터">-->
	</p>
	<address>
		<p>COPYRIGHT 2015 이웃사랑후원회  ALL RIGHTS RESERVED</p>
<!-- 		우) 486-910 경기도 연천군 전곡읍 어못내길 125 한반도통일미래센터 <br/>대표전화 : 031-839-7942 (교육•이용 안내 7930), 이메일 : <a href="mailto:unifuture@unikorea.go.kr">unifuture@unikorea.go.kr</a> -->
		Made by Jay KIM.  이웃사랑후원회 <br>연락처 카톡:talkguy, 이메일 : <a href="mailto:lovengs@naver.com">lovengs@naver.com</a>
	</address>
<!-- 	<span class="qr_code"> 한반도통일미래센터
	<br> 모바일 웹<br>QR 코드 
	<img src="/resources/kor/images/common/qr_code.gif" alt="한반도통일미래센터 모바일 QR 코드"></SPAN> -->
	<span class="unikorea"> <a href="http://www.unikorea.go.kr/" target="_blank" title="새창열림"><img src="./images/logo/logo.png" alt="이웃사랑"></a> </span>
</div>

	</div>
    </div>


</body></html>
