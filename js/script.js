slideCnt={slider_main:1,slider_main2:1,productsSlider2:1,productsSlider3:1,productsSlider4:1,mediaSlider:1,topNews:1};$(function(){var e="";var d="";var f=window.Hover=function(b){return new f.fn.init(b)};f.fn={init:function(b){this.prop=b},bind:function(b,a){d=b;e=a;$(window).bind("touchstart",function(c){var h=c.target||window.target;var g=null;if("A"==h.tagName||$(h).hasClass(e)){g=$(h)}else{if($(h).parents("a").length>0){g=$(h).parents("a")}else{if($(h).parents("."+e).length>0){g=$(h).parents("."+e)}}}if(null!=g){f().touchstartHoverElement(g)}})},touchstartHoverElement:function(b){b.addClass(d);b.unbind("touchmove",f().touchmoveHoverElement);b.bind("touchmove",f().touchmoveHoverElement);b.unbind("touchend",f().touchendHoverElement);b.bind("touchend",f().touchendHoverElement)},touchmoveHoverElement:function(b){$(this).removeClass(d)},touchendHoverElement:function(b){$(this).removeClass(d)}};f.fn.init.prototype=f.fn;f().bind("hover","tap");$("#submit_back").click(function(){$("#formflg").val("back")});if($("#loader").get(0)){$("#loader span").animate({width:"30%"},1000,"swing")}});window.onload=function(){$("header").css("position","fixed");if($("#loader").get(0)){$("#loader span").stop().animate({width:"100%"},600,"swing",function(){$("#loading").delay(300).fadeOut(650)})}resizeFunc()};$(document).ready(function(){$(window).resize(function(){resizeFunc()})});function resizeFunc(){hsize=$(window).height();wsize=$(window).width();$(".flex_height").css("height",hsize+"px");$(".awards .inner").css("height",$(".awards .awards_wrap .awards_photo").height());$(".page_title_position").css("margin-top",0.5*-$(".page_title_position").height());var d=0;$(".slider").each(function(){var a=$(this).attr("id");$(this).find("li").each(function(){if(d<$(this).find(".slider_text").height()+parseInt($(this).find(".slider_text").css("padding-top"))+parseInt($(this).find(".slider_text").css("padding-bottom"))){d=$(this).find(".slider_text").height()+parseInt($(this).find(".slider_text").css("padding-top"))+parseInt($(this).find(".slider_text").css("padding-bottom"))}})});$(".slider .slider_text").css({height:d});if(wsize>768){$(".slider").css({height:d+0.5*$(".slider").width()+38})}else{$(".slider").css({height:d+0.575*$(".slider").width()+30})}$(".slider li").each(function(){if(0!=parseInt($(this).css("left"))){$(this).css("left",$(this).width())}});if(wsize>768){$(".sliderNaviLeft,.sliderNaviRight").css({top:0.25*$(".slider").width()-32});if($(".category").get(0)){$(".category").css({left:$(".works_list").offset().left});scrollFunc()}}else{$(".sliderNaviLeft,.sliderNaviRight").css({top:0.575*$(".slider").width()*0.5-14})}if($("#modalBack").get(0)){if(wsize>768){if($("#modalMain").height()+120>hsize){$(".modalLeft img").css({height:hsize-120,width:"auto"})}else{$(".modalLeft img").css({height:"auto",width:"100%"})}$(".modalRight").css({"margin-top":0.5*($("#modalMain").height()-$(".modalRight").height())});$("#modalBack .btn_detail").css({top:0.5*(hsize-$("#modalMain").height()-80),left:$("#modalMain").offset().left+$("#modalMain").width()+92});$("#modalMain").css({"margin-top":0.5*(hsize-$("#modalMain").height()-80)})}else{$("#modalMain").css({"margin-top":0.5*(hsize-$("#modalMain").height()-36)})}}if($(".tmpl_e").get(0)){if(wsize>=1024){var c=0;$(".tmpl_e .copy_area").each(function(){if(c<$(this).height()){c=$(this).height()}});$(".tmpl_e").height(c)}else{$(".tmpl_e").height("auto")}}if($(".quality_cnt").get(0)){if(wsize>768){}else{$(".quality_cnt").each(function(){$(this).css({"margin-top":0.5*-$(this).height()})})}}if($(".company_access_LR").get(0)){if(wsize>768){var c=0;$(".company_access_LR").height("auto");$(".company_access_LR").each(function(){if(c<$(this).height()){c=$(this).height()}});$(".company_access_LR").height(c)}else{$(".company_access_LR").height("auto")}}if($(".service .col_2 a .inner .text .panel").get(0)){if(wsize>768){$(".service .col_2 a .inner .text .panel").height($(".service .col_2 a .inner .text").height())}}if(wsize>768){var c=0;$(".navigation nav ul li").height(0.34*(hsize-80))}}$(".toggle").click(function(){if($("html").hasClass("toggled")){$(".navigation nav").removeClass("back_img1");$(".navigation nav").removeClass("back_img2");$(".navigation nav").removeClass("back_img3");$(".navigation nav").removeClass("back_img4");$(".navigation nav").removeClass("back_img5");$(".navigation nav").addClass("back_img"+Math.ceil(5*Math.random()))}$("html").toggleClass("toggled")});$(".navigation nav").addClass("back_img"+Math.ceil(5*Math.random()));$(window).scroll(function(){if($(".category").get(0)){scrollFunc()}});function scrollFunc(){wsize=$(window).width();var f=document.body.scrollTop||document.documentElement.scrollTop;if(wsize>768){var e=$("#related").offset().top-f-276;var h=$(".works_list").eq(0).offset().top+56-f;if(h<=138){if(e>0){h=138}else{h=138+e}}$(".category").css({top:h});var g=$(".works_list").eq(0).attr("id").split("works_list_")[1];$(".works_list").each(function(a){var i=$(this).offset().top-f;if(i-h<0){var c=$(this).attr("id").split("works_list_")[1];$(".category .year_num_current").text(c)}})}else{if("works"==$("body").attr("id")){if("-30px"==$(".category").css("top")&&0!=f){$(".category").animate({top:67},750,"swing")}var e=$("#related").offset().top-f-276;var h=$(".works_list").eq(0).offset().top-f;if(h<=138){if(e>0){h=138}else{h=138+e}}var g="YEAR";$(".works_list").each(function(a){var c=$(this).offset().top-f;if(c-h<0){g=$(this).attr("id").split("works_list_")[1]}});$(".category .year_num_current").text(g)}}}var ua=navigator.userAgent;var isIE=ua.match(/msie/i),isIE9=ua.match(/msie [9.]/i);if(isIE){if(isIE9){$(".nav_bg").css({top:"0",left:"0"})}}$(function(){$('a[href^="#"]').click(function(){var f=400;var e=$(this).attr("href");if("#top"!=e){var h=$("#"==e||""==e?"html":e);var g=h.offset().top}else{var g=0}$("body,html").animate({scrollTop:g},f,"swing");return false})});if(!navigator.userAgent.match(/(iPhone|android|iPad)/)){$(document).ready(function(){b();$(window).resize(function(){b()});function b(){var c=$(window).height();$(".flex_height2").css("height",c)}})}function setSlider(){var d=300;var c=0;$(".slider").each(function(){var b=$(this).attr("id");$(this).find("li").css({left:$(this).find("ul").width()});$(this).find("li:first-child").css({left:0});$(this).find(".sliderNaviPos a").each(function(a){$(this).click(function(){slider(a+1,b);return false})})});resizeFunc()}function slider(F,E,D){var C=500;if("swp"==D){C=250}var B=slideCnt[E];if(F==B){return}var A=$("#"+E+" ul").width();if("left"==F||"right"==F){var z=F}else{if(F>B){var z="right"}else{var z="left"}}if("left"==z){if("left"==F){if(1==B){var y=$("#"+E+" li").length}else{var y=B-1}}else{var y=F}if(1==y){var x=$("#"+E+" li").length}else{var x=y-1}if(B==$("#"+E+" li").length){var w=1}else{var w=B+1}var v=A;var u=-A;var t=2*-A;var s=-A;var r=A;var q=2*A}else{if("right"==z){if("right"==F){if(B==$("#"+E+" li").length){var y=1}else{var y=B+1}}else{var y=F}if(y==$("#"+E+" li").length){var x=1}else{var x=y+1}if(1==B){var w=$("#"+E+" li").length}else{var w=B-1}var v=-A;var u=A;var t=2*A;var s=A;var r=-A;var q=2*-A}}$("#"+E+" li:nth-child("+B+")").stop().css({left:0}).animate({left:v},C,"easeOutQuart");$("#"+E+" li:nth-child("+y+")").stop().css({left:u}).animate({left:0},C,"easeOutQuart");$("#"+E+" .sliderNaviPos a").removeClass("current");$("#"+E+" .sliderNaviPos a:nth-child("+y+")").addClass("current");slideCnt[E]=y;return false}function setForm(){$(".contact_form dl").not(".type-archival").css({display:"none"});$(".contact_form dl").css({display:"none"});if("アートスキャンのお見積もり"==$("select#contact_type").val()){$(".contact_form dl.type-art").css({display:"block"})}else{if("アーカイバル（ジクレー版画印刷）のお見積もり"==$("select#contact_type").val()){$(".contact_form dl.type-archival").css({display:"block"})}else{if("その他お問い合わせ"==$("select#contact_type").val()){$(".contact_form dl.type-other").css({display:"block"})}}}$("select#contact_type").change(function(){$(".contact_form dl").css({display:"none"});if("アートスキャンのお見積もり"==$("select#contact_type").val()){$("p#repeat-head").html('弊社のアートスキャンのご利用は初めてですか？<span class="red">*</span>');$(".contact_form dl.type-art").css({display:"block"})}else{if("アーカイバル（ジクレー版画印刷）のお見積もり"==$("select#contact_type").val()){$("p#repeat-head").html('弊社のアーカイバル（ジクレー版画印刷）のご利用は初めてですか？<span class="red">*</span>');$(".contact_form dl.type-archival").css({display:"block"})}else{if("その他お問い合わせ"==$("select#contact_type").val()){$(".contact_form dl.type-other").css({display:"block"})}}}});$("form").submit(function(){var d=false;if("アートスキャンのお見積もり"==$("select#contact_type").val()){var c="type-art"}else{if("アーカイバル（ジクレー版画印刷）のお見積もり"==$("select#contact_type").val()){var c="type-archival"}else{if("その他お問い合わせ"==$("select#contact_type").val()){var c="type-other"}}}$(".contact_form dl").each(function(){$(this).find("dd").removeClass("error");$(this).find("dd .error_msg").remove();if($(this).hasClass("required")&&$(this).hasClass(c)){if($(this).hasClass("paper-check")){if(!$('form [name="paper[]"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}else{if($(this).hasClass("job-check")){if(!$('input[name="job"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}else{if($(this).hasClass("format-check")){if(!$('input[name="format"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}else{console.log($('input[name="format"]:checked').val());if("原画"==$('input[name="format"]:checked').val()&&""==$(this).find(".inputData").val()){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}}else{if($(this).hasClass("framed-check")){}else{if($(this).hasClass("original-check")){if(!$('input[name="original"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}else{if($(this).hasClass("repeat-check")){if(!$('input[name="repeat"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}else{if($(this).hasClass("know-check")){if(!$('input[name="know"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}else{if(!$(".know-memo").is(":hidden")){if(!$('input[name="know-memo"]').val()){$("#know-memo-box").addClass("error");d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}}}else{if(""==$(this).find(".inputData").val()){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">必須項目です。必ず入力してください。</p>')}}}}}}}}}});if(!$(".tel-check").find(".inputData").val().match(/^[0-9\-]+$/)&&""!=$(".tel-check").find(".inputData").val()){$(".tel-check dd").addClass("error");$(".tel-check dd").append('<p class="error_msg">半角数字、ハイフンで入力してください。</p>')}if(!$(".mail-check").find(".inputData").val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)&&""!=$(".mail-check").find(".inputData").val()){$(".mail-check dd").addClass("error");$(".mail-check dd").append('<p class="error_msg">正しいメールアドレスを入力してください。</p>')}if(!$(".postcode-check").find(".inputData").val().match(/^\d{3}-?\d{4}$/)&&""!=$(".postcode-check").find(".inputData").val()){$(".postcode-check dd").addClass("error");$(".postcode-check dd").append('<p class="error_msg">正しい郵便番号を入力してください。</p>')}if(d){$("#error_msg_main").css({display:"block"});return false}else{$("#error_msg_main").css({display:"none"})}})}function setFormEn(){$(".contact_form dl").not(".type-archival").css({display:"none"});$(".contact_form dl").css({display:"none"});if("Art-Scan"==$("select#contact_type").val()){$(".contact_form dl.type-art").css({display:"block"})}else{if("Giclee Archival printing"==$("select#contact_type").val()){$(".contact_form dl.type-archival").css({display:"block"})}else{if("Other medium"==$("select#contact_type").val()){$(".contact_form dl.type-other").css({display:"block"})}}}$("select#contact_type").change(function(){$(".contact_form dl").css({display:"none"});if("Art-Scan"==$("select#contact_type").val()){$(".contact_form dl.type-art").css({display:"block"});$("p#repeat-head").html('Have you been used our scaning serves before?<span class="red">*</span>')}else{if("Giclee Archival printing"==$("select#contact_type").val()){$(".contact_form dl.type-archival").css({display:"block"});$("p#repeat-head").html('Have you been used our printing serves before?<span class="red">*</span>')}else{if("Other medium"==$("select#contact_type").val()){$(".contact_form dl.type-other").css({display:"block"})}}}});$("form").submit(function(){var d=false;if("Art-Scan"==$("select#contact_type").val()){var c="type-art"}else{if("Giclee Archival printing"==$("select#contact_type").val()){var c="type-archival"}else{if("Other medium"==$("select#contact_type").val()){var c="type-other"}}}$(".contact_form dl").each(function(){$(this).find("dd").removeClass("error");$(this).find("dd .error_msg").remove();if($(this).hasClass("required")&&$(this).hasClass(c)){if($(this).hasClass("paper-check")){if(!$('form [name="paper[]"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}else{if($(this).hasClass("job-check")){if(!$('input[name="job"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}else{if($(this).hasClass("format-check")){if(!$('input[name="format"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}else{console.log($('input[name="format"]:checked').val());if("Original artwork"==$('input[name="format"]:checked').val()&&""==$(this).find(".inputData").val()){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}}else{if($(this).hasClass("framed-check")){if(!$('input[name="framed"]').is(":checked")){}}else{if($(this).hasClass("original-check")){if(!$('input[name="original"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}else{if($(this).hasClass("repeat-check")){if(!$('input[name="repeat"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}else{if($(this).hasClass("know-check")){if(!$('input[name="know"]').is(":checked")){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}else{if(!$(".know-memo").is(":hidden")){if(!$('input[name="know-memo"]').val()){$("#know-memo-box").addClass("error");d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}}}else{if(""==$(this).find(".inputData").val()){d=true;$(this).find("dd").addClass("error");$(this).find("dd").append('<p class="error_msg">Required field. Please be sure to input.</p>')}}}}}}}}}});if(!$(".tel-check").find(".inputData").val().match(/^[0-9\-]+$/)&&""!=$(".tel-check").find(".inputData").val()){$(".tel-check dd").addClass("error");$(".tel-check dd").append('<p class="error_msg">Please use single byte number and hyphen.</p>')}if(!$(".mail-check").find(".inputData").val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)&&""!=$(".mail-check").find(".inputData").val()){$(".mail-check dd").addClass("error");$(".mail-check dd").append('<p class="error_msg">Invalid email address.</p>')}if(!$(".postcode-check").find(".inputData").val().match(/^[0-9\-]+$/)&&""!=$(".postcode-check").find(".inputData").val()){$(".postcode-check dd").addClass("error");$(".postcode-check dd").append('<p class="error_msg">Invalid postal code.</p>')}if(d){$("#error_msg_main").css({display:"block"});return false}else{$("#error_msg_main").css({display:"none"})}})}function setFaq(){$(".faq_qa dt").click(function(){if($(this).parent().hasClass("faq_close")){$(this).parent().removeClass("faq_close");$(this).next("dd").css({display:"block"})}else{$(this).parent().addClass("faq_close");$(this).next("dd").css({display:"none"})}});$("#faq_btn li").click(function(b){$(".fqa_set").css({display:"none"});$("#faq_btn li").removeClass("current");$(this).addClass("current");$("."+$(this).data("rel")).css({display:"block"});wsize=$(window).width();if(wsize<=768){if("faq_artie"==$(this).data("rel")){$("#faq_btn li.btn_art").css({"border-left-color":"#a20222"});$("#faq_btn li.btn_artie").css({"border-right-color":"#a20222"});$("#faq_btn li.btn_archival").css({"border-left-color":"#262626"});$("#faq_btn li.btn_art").css({"border-right-color":"#262626"})}else{if("faq_art"==$(this).data("rel")){$("#faq_btn li.btn_art").css({"border-left-color":"#a20222"});$("#faq_btn li.btn_art").css({"border-right-color":"#a20222"});$("#faq_btn li.btn_artie").css({"border-right-color":"#a20222"});$("#faq_btn li.btn_archival").css({"border-left-color":"#a20222"})}else{if("faq_archival"==$(this).data("rel")){$("#faq_btn li.btn_art").css({"border-right-color":"#a20222"});$("#faq_btn li.btn_archival").css({"border-left-color":"#a20222"});$("#faq_btn li.btn_art").css({"border-left-color":"#262626"});$("#faq_btn li.btn_artie").css({"border-right-color":"#262626"})}}}}})}$('input[name="know"]:radio').change(function(){var a=$(this).val();if(a=="雑誌"||a=="Magazine"){$(".memo-box-label").show()}else{$(".memo-box-label").hide()}if(a=="雑誌"||a=="その他"||a=="Magazine"||a=="etc"){$(".know-memo").show("slow")}else{$(".know-memo").hide("slow")}});