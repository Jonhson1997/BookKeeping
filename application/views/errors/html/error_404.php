<!DOCTYPE html>
<html>
  <head>
    <style>
      img { vertical-align: top; }
* { -webkit-box-sizing: border-box; box-sizing: border-box; }
.user_editor img.f-nav {
    z-index: 9999;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%
}
.pageHeader {
    margin: 0 auto;
    width: 98%;
    height: 83px
}
.pageHeader h1 {
    width: auto;
    float: left;
    padding: 0 0 0 10px
}
.mobile_menu,#menu {
    display: none
}
#topmenu {
    width: auto;
    height: 83px;
    float: right;
    padding: 0
}
.main_banner {
    margin: 0 auto;
    width: 100%;
    height: auto;
    overflow: hidden
}
.main_banner .b01 {
    margin: 0 auto;
    width: 100%;
    height: auto;
    overflow: hidden
}
.main_banner .b02 {
    display: none
}

@media only screen and (min-width: 321px) and (max-width: 800px) {
.main_banner .b01 {
    display: none
}
.main_banner .b02 {
    display: block
}
.banner_box {
    width: 100%;
    height: 100%;
    position: relative
}
.banner_box .banner_txtbox {
    width: 100%;
    height: auto;
    position: absolute;
    bottom: 15%;
    left: 0;
    display: none
}
.banner_box .banner_txtbox .banner_txt01 {
    width: 100%;
    height: auto;
    padding: 0;
    font-size: 30px;
    color: #fff;
    font-weight: 700;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.8)
}
.banner_box .banner_txtbox .banner_txt02 {
    width: 100%;
    height: auto;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.8)
}
}

@media only screen and (min-width: 0px) and (max-width: 320px) {
.main_banner .b01 {
    display: none
}
.main_banner .b02 {
    display: block
}
.banner_box {
    width: 100%;
    height: 100%;
    position: relative
}
.banner_box .banner_txtbox {
    width: 100%;
    height: auto;
    position: absolute;
    bottom: 15%;
    left: 0;
    display: none
}
.banner_box .banner_txtbox .banner_txt01 {
    width: 100%;
    height: auto;
    padding: 0;
    font-size: 40px;
    color: #fff;
    font-weight: 700;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.8)
}
.banner_box .banner_txtbox .banner_txt02 {
    width: 100%;
    height: auto;
    padding: 10px 0;
    font-size: 26px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.8)
}
}
.index-section {
    width: 100%;
    padding: 90px 0;
    overflow: hidden
}
.index-section-inner {
    width: 1160px;
    margin: auto
}
.index-section .index-section-title {
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center
}
.index-section .index-section-title h2 {
    font-size: 28px;
    font-weight: 700;
    line-height: 28px;
    color: #4DB0B9
}
.index-section .index-section-title h3 {
    display: inline-block;
    margin: 15px 0 0;
    padding: 0 0 10px;
    border-bottom: 2px solid #34b1c4;
    font-family: 'Arial';
    font-weight: 400;
    font-size: 12px;
    line-height: 12px;
    text-transform: capitalize;
    color: rgba(255,255,255,0.6)
}
.index-section .index-section-title + .index-section-content {
    margin-top: 40px
}
.index-list {
    display: flex;
    justify-content: space-between
}
.index-list .index-list-item {
    width: calc(100%/3 - 50px/3)
}
.index-list .index-list-item > a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 5px;
    overflow: hidden;
    padding: 20px
}
.index-list .index-list-item > a:hover {
    background-color: #2b5d74
}
.index-list .index-list-item > a, .index-list .index-list-item > a:hover {
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.index-list .index-list-item-icon {
    padding: 15px
}
.index-list .index-list-item-icon img {
    display: block;
    width: 80px
}
.index-list .index-list-item-profile {
    width: calc(100% - 130px);
    text-align: left;
    color: #fff
}
.index-list .index-list-item-profile > li + li {
    margin-top: 15px
}
.index-list .index-list-item-profile h3 {
    font-size: 20px;
    font-weight: 700;
    line-height: 20px
}
.index-list .index-list-item-profile p {
    font-size: 14px;
    line-height: 22px;
    opacity: .6
}
.index-section.index-service, .index-section.index-solution {
    background: url(images/servicebackground.jpg) no-repeat bottom center
}
.index-section.index-wysk .index-section-title h2 {
    color: #4DB0B9
}
.index-section.index-wysk .index-section-title h3 {
    color: #888;
    border-color: #4DB0B9
}
.index-section.index-wysk .index-list .index-list-item-profile {
    width: 100%;
    color: #333
}
.index-section.index-wysk .index-list .index-list-item > a:hover {
    background: none
}
.index-section.index-wysk .index-list a:hover .index-list-item-profile h3 {
    color: #015fa2
}
.index-section.index-wysk .index-list .index-list-item-profile h3, .index-section.index-wysk .index-list a:hover .index-list-item-profile h3 {
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.index-section.index-solution .index-list {
    flex-wrap: wrap;
    margin-top: -25px
}
.index-section.index-solution .index-list .index-list-item {
    margin-top: 25px
}

@media screen and (max-width: 1200px) {
.index-section-inner {
    width: calc(100% - 100px)
}
.index-section.index-solution .index-list .index-list-item {
    width: calc(100%/2 - 25px/2)
}
}

@media screen and (max-width: 1023px) {
.index-list {
    flex-wrap: wrap
}
.index-list .index-list-item {
    width: 100%!important
}
}

@media screen and (max-width: 767px) {
.index-section {
    padding: 50px 0
}
.index-section-inner {
    width: calc(100% - 40px)
}
.index-list .index-list-item > a {
    padding: 15px;
    align-items: flex-start
}
.index-list .index-list-item-icon {
    padding-top: 0
}
.index-list .index-list-item-icon img {
    width: 50px
}
.index-list .index-list-item-profile {
    width: calc(100% - 90px)
}
}
.index_formbackground {
    display: none
}
@media only screen and (min-width: 0px) and (max-width: 768px) {
.index_formbackground {
    margin: 0 auto;
    padding: 50px 0 40px;
    width: 100%;
    height: auto;
    overflow: hidden;
    background: url(images/parallax1.jpg) no-repeat bottom center;
    display: block
}
}
.index_formbackground2 {
    margin: 0 auto;
    padding: 50px 0 40px;
    width: 100%;
    height: auto;
    overflow: hidden;
    background: url(images/parallax1.jpg) no-repeat bottom center;
    display: block;
    
}
.index_formbackground3 {
    margin: 0 auto;
    padding: 50px 0 40px;
    width: 100%;
    height: auto;
    overflow: hidden;
    display: block;
    margin-top: 20px;
    background-color: #bbbdbe;
    border-radius: 10px; 
}
.index_form {
    margin: 0 auto;
    width: 90%;
    height: auto;
    overflow: hidden;
    padding: 0
}
.index_form h1 {
    width: 100%;
    height: auto;
    padding: 0 0 20px;
    font-size: 1.75em;
    color: #fff;
    text-align: center
}
.mwt_border {
    width: 100%;
    height: auto;
    background: #fff;
    position: relative;
    margin: 0;
    padding: 30px;
    border-radius: 5px
}
.mwt_border .arrow_t_int {
    width: 0;
    height: 0;
    border-width: 15px;
    border-style: solid;
    border-color: transparent transparent #34b1c4;
    position: absolute;
    top: -30px;
    left: 48%
}
.mwt_border .arrow_t_out {
    width: 0;
    height: 0;
    border-width: 15px;
    border-style: solid;
    border-color: transparent transparent #fff;
    position: absolute;
    top: -29px;
    left: 48%
}
.form {
    margin: 0 auto;
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden;
    font-size: 14px;
    color: #444;
    line-height: 1;
    background: #FFF
}
.form ul {
    margin: 0;
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden;
    line-height: 26px
}
.form ul .title {
    width: 120px;
    float: left;
    color: #666
}
.form ul h2 {
    margin: 0;
    width: calc(100% - 120px);
    padding: 0;
    height: auto;
    overflow: hidden
}
.form ul h3 {
    margin: 0 90px 0 0;
    width: calc(100% - 120px);
    padding: 0;
    height: auto;
    overflow: hidden;
    color: #666;
    line-height: 1.5
}
.form ul li {
    margin: 0 0 8px;
    width: 100%
}

@media only screen and (min-width: 0px) and (max-width: 639px) {
.form ul .title {
    width: 100%
}
.form ul h2 {
    width: 100%
}
.form ul h3 {
    width: 100%;
    margin: 0
}
}
ul.menu_top {
    width: auto;
    height: 83px
}
ul.menu_top > ul {
    float: left;
    display: block;
    list-style-type: none;
    height: 83px;
    margin: 0;
    padding: 0 10px
}
ul.menu_top > ul:hover {
    background: url(images/menu_hover.jpg) no-repeat center top
}
ul.menu_top > ul a {
    float: left;
    font-size: 16px;
    line-height: 83px;
    color: #FFF
}


@media only screen and (min-width: 481px) and (max-width: 1000px) {
.pageHeader {
    width: 90%
}
#topmenu {
    width: auto
}
ul.menu_top {
    display: none
}
.news_tab {
    width: 100%;
    margin: 0
}
.index_case {
    width: 100%;
    padding: 20px 0 0
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.pageHeader {
    width: 90%
}
#topmenu {
    width: auto
}
ul.menu_top {
    display: none
}
.news_tab {
    width: 100%;
    margin: 0
}
.index_case {
    width: 100%;
    padding: 20px 0 0
}
}

@media only screen and (min-width: 421px) and (max-width: 1000px) {
.pageHeader h1 {
    padding: 0
}
.mobile_menu {
    width: auto;
    float: right;
    padding: 18px 0 0;
    display: block
}
#menu { display: block }
}

@media only screen and (min-width: 0px) and (max-width: 420px) {
.pageHeader h1 {
    padding: 8px 0 0
}
.pageHeader h1 img {
    width: 220px
}
#menu { display: block }
.mobile_menu {
    width: auto;
    float: right;
    padding: 20px 0 0;
    display: block
}
.mobile_menu img {
    width: 37px
}
}
.container {
    margin: 0 auto;
    width: 1140px;
    height: auto;
    overflow: hidden
}
.container02 {
    margin: 0 auto;
    width: 1140px;
    height: auto;
    padding: 160px 0 0
}
.container03 {
    margin: 0 auto;
    width: calc(100% - 40px);
    height: auto;
    padding: 105px 20px 20px
}
.container04 {
    margin: 0 auto;
    width: 100%;
    height: auto;
    padding: 0
}
.container05,.containera1 {
    margin: 0 auto;
    width: 1140px;
    height: auto;
    padding: 110px 0
}
.containera1 { padding: 50px 0px; }
.container06 {
    margin: 0 auto;
    width: 95%;
    height: auto;
    padding: 160px 0 0
}
.container07 {
    margin: 0 auto;
    width: 1140px;
    height: auto;
    overflow: hidden;
    display: inline-flex;
    justify-content: center;
    align-content: flex-start;
    -ms-align-items: flex-start;
    align-items: flex-start;
    position: relative;
    min-height: 100VH;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap;
}
.main_bg {
    margin: 0 auto;
    width: 100%;
    height: auto;
    background: #edeff1;
    float: left;
}
.main_bg2 {
    margin: 0 auto;
    width: 100%;
    height: auto;
    background: #222532
}
.main_bg {
    margin: 0 auto;
    width: 100%;
    height: auto;
    background: #edeff1
}
.user_editor {
    width: 100%;
    height: auto;
    overflow: hidden;
    position: static!important
}
.user_editor p {
    text-align: justify;
}
.user_editor img {
    max-width: 100%!important;
    height: auto!important;
    margin: 25px auto
}

@media only screen and (min-width: 0px) and (max-width: 1190px) {
.container {
    width: 90%
}
.container02 {
    width: 90%;
    padding: 120px 0 0
}
.container03 {
    width: 100%;
    height: auto;
    padding: 85px 0 0
}
.container05,.containera1 {
    width: 90%
}
.container06 {
    width: 90%;
    padding: 120px 0 0
}
}
.list01 {
    margin: 0;
    padding: 12px 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    font-size: 15px;
    color: #333;
    line-height: 1.8
}
.list01 .icon {
    margin: 0;
    padding: 0 0 0 20px;
    background: url(images/icon.png) no-repeat 7px 10px;
    float: left;
    list-style: none;
    font-size: 15px;
    color: #006da2;
    line-height: 1.8;
    font-weight: 700;
    clear: both
}
.border-box {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}
.center {
    text-align: center
}
.title01 {
    width: 100%;
    font-size: 30px;
    color: #000;
    padding: 0 0 20px;
    line-height: 1.5;
    margin: 0 0 20px
}
.title02_box {
    width: 184px;
    height: auto;
    position: relative;
    margin-left: auto;
    margin-right: auto
}
.title02 {
    width: 100%;
    font-size: 25px;
    color: #FFF;
    font-weight: 700;
    padding: 9px 0;
    line-height: 30px;
    border: 1px solid #fff;
    border-radius: 30px
}
.title02-line {
    width: 1px;
    height: 52px;
    position: relative;
    margin: auto;
    margin-left: calc(50% - 0.5px);
    border-left: 1px solid #fff
}
.title02-cir {
    width: 8px;
    height: 8px;
    position: relative;
    margin: auto;
    background-color: #fff;
    border-radius: 4px
}
.title02-1,.title02-1hist {
    width: 18%;
    font-size: 25px;
    color: #FFF;
    font-weight: 700;
    padding: 8px 0;
    line-height: 30px;
    border: 1px solid #fff;
    border-radius: 30px
}
.title02-1 {
    margin: auto;
}
.title02-1histAllBox { 
    width: 100%; 
    height: auto;
    display: flex;
    justify-content: center;
}
.title02-2 {
    width: 22%;
    font-size: 25px;
    color: #FFF;
    font-weight: 700;
    padding: 14px 20px;
    padding-left: 36px;
    line-height: 30px;
    border: 1px solid #fff;
    border-radius: 30px
}
.title02-3 {
    width: 22%;
    font-size: 24px;
    color: #FFF;
    font-weight: 700;
    padding: 14px 20px;
    line-height: 30px;
    border: 1px solid #fff;
    border-radius: 30px;
    margin: auto
}
.title02-4 {
    width: 22%;
    font-size: 25px;
    color: #FFF;
    font-weight: 700;
    padding: 9px 0;
    margin: auto;
    margin-bottom: 50px;
    line-height: 30px;
    border: 1px solid #fff;
    border-radius: 30px
}
.title03 {
    width: 100%;
    font-size: 20px;
    color: #FFF;
    padding: 0 0 20px;
    line-height: 1.5;
    margin: 0 0 20px
}
.title04 {
    width: 100%;
    font-size: 14px;
    color: #000;
    padding: 0 0 30px;
    line-height: 2;
    margin: 0 0;
}
.title04 p {
    line-height: 55px
}
.title04 a {
    padding: 10px;
    color: #000;
    font-weight: 700;
    text-shadow: none;
    border-bottom: 1px solid rgba(0,0,0,0.61);
    -webkit-transition: all 1s, background-color 1s, color 1s;
    -moz-transition: all 1s, background-color 1s, color 1s;
    transition: all 1s, background-color 1s, color 1s
}
.title04 a:hover {
    color: #fff;
    background-color: rgba(70,70,70,1.00);
    border-radius: 10px;
    box-shadow: 0 4px 6px -3px rgba(0,0,0,0.72);
    border: 0
}
.title04 i {
    font-size: 26px;
    padding: 0 5px;
    color: rgba(0,0,0,0.2)
}
.title04_pbox {
    width: 100%;
    height: auto;
    margin: 0 auto;
    text-align: left
}
.title04_pbox p {
    line-height: 42px
}
.title04_pbox_title {
    width: 100%;
    height: auto;
    margin-bottom: 22px;
    margin-top: -15px;
    padding-top: 55px;
    border-top: 1px solid #d6d6d6;
    float: left;
}
.title04_pbox_title p {
    width: auto;
    height: 35px;
    float: left;
    text-align: center;
    padding: 0 25px;
    line-height: 37px;
    border-radius: 8px;
    background-color: rgba(113,113,113,1.00);
    color: #fff
}
.title05 {
    width: 100%;
    font-size: 20px;
    color: #FFF;
    padding: 0;
    line-height: 1.5;
    margin: 20px 0
}
.title05 em {
    font-size: 35px;
    font-weight: 600;
    color: #007d9c;
    display: inline-block;
    font-family: 'Open Sans';
    margin: 0 10px 0 0
}
.title06 {
    width: 100%;
    font-size: 20px;
    color: #000;
    padding: 0 0 20px;
    line-height: 1.5;
    margin: 0;
    font-weight: 700;
    width: 100%;
    font-size: 30px;
    color: rgba(0,0,0,0.3);
    padding: 0 0 20px;
    line-height: 1.5;
    margin: 0 0 20px
}
.title07 {
    width: 100%;
    font-size: 14px;
    color: rgba(0,0,0,0.6);
    padding: 0 0 20px;
    line-height: 2;
    margin: 0 0 20px
}
.title07 > p {
    width: 61%;
    text-align: left;
    position: relative;
    margin: auto;
}
#goToTop {
    position: fixed;
    bottom: 100px;
    right: 5%;
    z-index: 9
}
#goToTop a {
    background: rgba(0,0,0,0.3);
    border-radius: 3px;
    color: #FFF;
    font-size: 20px;
    height: 45px;
    width: 45px;
    text-align: center;
    line-height: 42px;
    display: block;
    text-decoration: none
}
#goToTop a:hover {
    line-height: 34px
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
#goToTop {
    right: 2%;
    bottom: 50px
}
#goToTop a {
    font-size: 15px;
    height: 37px;
    width: 37px;
    text-align: center;
    line-height: 35px;
    display: block
}
#goToTop a:hover {
    line-height: 30px
}
}
.intro03 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/about/about_bg.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro-body {
    width: 100%;
    display: block
}
.intro-body .brand-heading {
    font-size: 60px
}
.intro-body .intro-text a {
    color: #FFE53B;
    text-decoration: underline
}
.intro-body .intro-text a:hover {
    color: #FFE53B;
    text-decoration: none
}
.intro-body .intro-text,.intro-body .intro-text02,.intro-body .intro-text03 {
    font-size: 16px;
    line-height: 35px;
    margin-top: 20px;
    width: calc( 50% - 40px );
    text-align: justify;
    position: relative;
    margin: auto;
}
.intro-body .intro-text02 {
    width: 100%;
}
.intro-body .intro-text03{
    width: calc( 50% - 40px );
}

@media (max-width: 768px) {
.intro-body .brand-heading {
    font-size: 42px
}
.intro-body .intro-text {
    font-size: 14px
}
    .title01 { font-size: 28px; }
}
.about01 {
    width: 100%;
    margin: 0;
    height: auto;
    overflow: hidden
}
.about01 li {
    width: calc(100% / 5 - 44px);
    height: auto;
    overflow: hidden;
    padding: 0 20px;
    margin: 0 0 40px;
    list-style: none;
    display: inline-block
}
.about01 li .icon {
    width: 65px;
    height: auto;
    position: relative;
    margin: 0 auto
}
.about01 li .info {
    width: 100%;
    margin: 0;
    padding: 0;
    height: auto;
    overflow: hidden;
    text-align: center
}
.about01 li .info h2 {
    width: 100%;
    font-size: 16px;
    padding: 20px 0 0
}

@media only screen and (min-width: 640px) and (max-width: 768px) {
.about01 ul li {
    width: calc(100% / 2 - 41px);
    padding: 20px
}
.about01 ul li:last-of-type {
    width: calc(100% / 2 - 41px);
    padding: 20px
}
.about01 ul li:nth-child(2n+0) {
    width: calc(100% / 2 - 41px);
    padding: 20px;
    border-right: 0
}
}

@media only screen and (min-width: 0px) and (max-width: 639px) {
.about01 li {
    width: calc(100% - 40px)
}
}
.about02 {
    background: url(images/about/about02_bg.jpg) no-repeat top left;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 0;
    padding-top: 140px;
    padding-bottom: 100px
}
.about02 .txtbox {
    width: 100%
}
.about02 .txtbox .t01 {
    width: 60%;
    font-size: 16px;
    color: #FFF;
    line-height: 42px;
    text-align: center;
    margin: 10px auto;
}
.about02 .txtbox .t02 {
    width: 100%;
    font-size: 20px;
    color: #FFF;
    line-height: 27px;
    text-align: center;
    margin: 0;
    font-weight: 300;
    margin-top: 18px
}
.about02 .txtbox li {
    width: 100%;
    margin: 0;
    padding: 0 0 10px;
    list-style: none;
    font-size: 15px;
    color: #FFF;
    line-height: 1.5
}
.about02 .txtbox li:before {
    display: inline-block;
    content: '\00bb';
    margin: 0 .6em;
    color: #fff
}
.about03 {
    width: 100%;
    background: url(images/about/about03_bg.jpg) no-repeat top right;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding-top: 83px;
    min-height: calc( 100vh - 281px );
    display: inline-flex;
    justify-content: center;
    align-content: center;
    -ms-align-items: center;
    align-items: center;
}
.about04 {
    background: url(images/about/about04_bg.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.about05 {
    background: url(images/history/history_bg.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0;
    width: 100%;
    display: inline-flex;
    justify-content: center;
    align-content: flex-start;
    -ms-align-items: flex-start;
    align-items: flex-start;
    min-height: 100VH;
}
.about_hist01 {
    width: 14px;
    height: 100px;
    background: url(images/history/history_chp01.png) no-repeat top center;
    top: 60px;
    position: absolute;
    z-index: 1;
}
.about_hist02 {
    width: 100%;
    height: auto;
    background: url(images/history/history_chp02.png) repeat-y top center;
    position: relative;
    top: 30px;
    z-index: 2;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding-top: 18px;
    margin-bottom: 80px;
}
.hist_TBox01,.hist_TBox02,.hist_TBox03,.hist_TBox04,.hist_TBox05 { 
    width: auto; 
    height: auto; 
    padding: 0px; 
    display: inline-flex; 
    justify-content: flex-start;
    align-content: center;
    -ms-align-items: center;
    align-items: center;
    margin-left: 550px;
    padding-top: 15px;
    position: relative;
}
.hist_TBox02,.hist_TBox05 {
    margin-right: 554px;
    margin-left: inherit;
    top: 5px;
}
.hist_TBox03 {
    margin-left: 450px;
    margin-top: 12px;
}
.hist_TBox04 {
    margin-right: 480px;
    margin-left: inherit;
    top: -4px;
}
.hist_TBox05 { top: 30px; }
.hist_TB_Cin { 
    width: 30px; 
    height: 30px; 
    background-color: #fff; 
    border-radius: 30px ;
    float: left;
}
.hist_TB_CinLink01,.hist_TB_CinLink02,.hist_TB_CinLink03 {
    width: 120px;
    height: 5px;
    background-color: #fff;
    float: left;
}
.hist_TB_CinLink02 { width: 85px; }
.hist_TB_CinLink03 { width: 20px; }
.hist_gsC01 {
    width: auto;
    height: auto;
    display: inline-flex;
    justify-content: flex-start;
    align-content: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap;
}
.hist_TB_Cin02 {
    width: 100px;
    height: 80px;
    font-size: 22px;
    color: #fff;
    line-height: 60px;
    border-radius: 80px;
    border: 10px solid #fff;
    text-align: center;
    position: relative;
        font-weight: 600;
        -webkit-box-sizing: border-box; 
        box-sizing: border-box;
}
.hist_TBTXs, .hist_TBTXs02 { 
    width: 320px;
    height: auto;
    padding: 10px;
    position: relative;
    margin-left: 10px;
        font-size: 16px;
        line-height: 26px;
    color: #242424;
    border: 1px solid #fff;
        text-align: justify;
        -webkit-box-sizing: border-box; 
        box-sizing: border-box;
}
.hist_TBTXs02 { 
    margin-left: inherit;
    margin-right: 10px;
    width: 360px;
}
.hist_TBox01:hover > .hist_TB_Cin, .hist_TBox02:hover > .hist_TB_Cin, .hist_TBox03:hover > .hist_TB_Cin, .hist_TBox04:hover > .hist_TB_Cin, .hist_TBox05:hover > .hist_TB_Cin { background-color: #fc003b; }


.about_list {
    width: 100%;
    margin: 40px 0 0
}
.about_list ul {
    width: calc(100% / 3 - 50px);
    margin: 0 20px;
    padding: 0;
    list-style: none;
    display: inline-block;
    text-align: center
}
.about_list ul em {
    width: 126px;
    height: 126px;
    display: block;
    margin: 0 auto 20px;
    font-size: 25px;
    color: #FFF;
    line-height: 94px;
    border: 2px solid #4db0b9;
    border-radius: 100%;
    font-weight: 700
}
.about_list ul h3 {
    width: 156px;
    height: 40px;
    display: block;
    font-size: 24px;
    color: #FFF;
    line-height: 38px;
    border-radius: 50px;
    font-weight: 700;
    background-color: #4db0b9;
    margin: auto;
    position: relative;
    bottom: 75px
}
.about_list ul h2 {
    width: 100%;
    font-size: 20px;
    color: #4db0b9;
    margin: 0 0 10px;
    font-weight: 700
}
.about_list ul p {
    font-size: 15px;
    color: #FFF;
    line-height: 1.8
}

@media only screen and (min-width: 0px) and (max-width: 639px) {
.about_list ul {
    width: 100%;
    margin: 0 0 30px
}
}
.about_box {
    width: 100%;
    padding: 30px 20px;
    height: auto;
    overflow: hidden;
    border-bottom: 1px dashed #c5c5c5;
    display: inline-flex;
    justify-content: flex-start;
    align-content: center;
    -ms-align-items: center;
    align-items: center;
}
.gridder-content:nth-child(odd) {  background-color: #F5F5F5; }
.gridder-content:nth-child(even) {  background-color: #EBEBEB; }
.gridder-content { transition: transform .25s; }
.gridder-content:hover { transform: scale(1.025); }
.about_box .icon {
    width: 80px;
    margin-right: 18px;
    float: left
}
.about_box .txtbox {
    width: calc(100% - 100px);
    float: left
}
.about_box .txtbox h1 {
    width: 100%;
    font-size: 20px;
    color: #189ec3;
    font-weight: 700
}
.about_box .txtbox p {
    width: 100%;
    font-size: 15px;
    color: #333;
    margin: 10px 0 0
}
.intro04 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/wysk/wysk_bg01.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro05 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/wysk/wysk_bg02.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro14 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/wysk/wysk_bg03.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.wysk01 {
    width: 100%;
    margin: 0;
    height: auto;
    overflow: hidden
}
.wysk01 li {
    width: calc(100% / 5 - 44px);
    height: auto;
    overflow: hidden;
    padding: 0 20px;
    margin: 0 0 40px;
    list-style: none;
    display: inline-block
}
.wysk01 li .icon {
    width: 100%;
    text-align: center;
    font-size: 36px;
    color: #1eacd4
}
.wysk01 li .info {
    width: 100%;
    margin: 0;
    padding: 0;
    height: auto;
    overflow: hidden;
    text-align: center
}
.wysk01 li .info h2 {
    width: 100%;
    font-size: 16px;
    padding: 20px 0 0
}
.wysk02 {
    background: url(images/about/about02_bg.jpg) no-repeat top left;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.wysk02 .txtbox {
    width: 100%;
    margin: 20px 0 0
}
.wysk02 .txtbox .t01 {
    width: 100%;
    font-size: 15px;
    color: #FFF;
    line-height: 1.5;
    text-align: center;
    margin: 50px 0 0
}
.wysk02 .txtbox li {
    width: 100%;
    margin: 0;
    padding: 0 0 10px;
    list-style: none;
    font-size: 15px;
    color: #FFF;
    line-height: 1.5
}
.wysk02 .txtbox li:before {
    display: inline-block;
    content: '\00bb';
    margin: 0 .6em;
    color: #fff
}

@media screen and (max-width:1023px) {
.wysk02 {
    padding: 100px 0
}
}

@media screen and (max-width:767px) {
.wysk02 {
    padding: 50px 0
}
}

@media only screen and (min-width: 640px) and (max-width: 768px) {
.wysk01 ul li {
    width: calc(100% / 2 - 41px);
    padding: 20px
}
.wysk01 ul li:last-of-type {
    width: calc(100% / 2 - 41px);
    padding: 20px
}
.wysk01 ul li:nth-child(2n+0) {
    width: calc(100% / 2 - 41px);
    padding: 20px;
    border-right: 0
}
}

@media only screen and (max-width: 639px) {
.wysk01 li {
    width: calc(100% - 40px)
}
}
.wysk_box {
    width: 100%;
    margin: 50px 0 20px;
    height: auto;
    overflow: hidden
}
.wysk_box .icon {
    width: 100px;
    text-align: center;
    font-size: 45px;
    color: #666;
    float: left
}
.wysk_box .txtbox {
    width: calc(100% - 100px);
    float: left
}
.wysk_box .txtbox h1 {
    width: 100%;
    font-size: 20px;
    color: #189ec3;
    font-weight: 700
}
.wysk_box .txtbox p {
    width: 100%;
    font-size: 15px;
    color: #333;
    margin: 10px 0 0
}
.wysk-list {
    width: 1140px;
    margin: auto;
    display: flex;
    justify-content: space-between
}
.wysk-list > li > a {
    display: flex;
    padding: 25px;
    flex-direction: column;
    align-items: center;
    border-radius: 5px
}
.wysk-list > li > a:hover {
    background-color: #2b5d74
}
.wysk-list > li > a, .wysk-list > li > a:hover {
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.wysk-list > li > a > img {
    display: block;
    width: 80px
}
.wysk-list > li > a > h3 {
    color: #fff;
    font-size: 18px;
    margin-top: 15px;
    text-align: center
}

@media screen and (max-width: 1200px) {
.wysk-list {
    width: 100%
}
}

@media screen and (max-width: 1023px) {
.wysk-list > li > a > img {
    width: 65px
}
.wysk-list > li > a > h3 {
    font-size: 16px
}
}

@media screen and (max-width: 767px) {
.wysk-list {
    flex-direction: column
}
.wysk-list > li + li {
    margin-top: 25px
}
}
.wysk-speedtool {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 90px 0
}
.wysk-speedtool .pic img {
    display: block;
    max-width: 100%!important;
    height: auto!important
}
.wysk-speedtool .txtbox {
    margin-top: 30px
}
.wysk-speedtool .tt {
    width: 100%;
    text-align: center;
    margin-bottom: 20px
}
.wysk-speedtool .tt span {
    font-size: 26px;
    color: #009fe7;
    display: inline-block;
    border-bottom: 2px solid #009fe7;
    font-weight: 700
}
.wysk-speedtool .tt em {
    width: auto;
    display: inline-block;
    color: #000;
    font-size: 26px;
    padding-left: 10px
}
.intro06 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/customized/customized_bg01.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro07 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/customized/customized_bg02.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro08 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/customized/customized_bg03.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.cus {
    width: 100%;
    margin-top: -30px
}
.cus ul {
    width: 100%;
    text-align: center
}
.cus ul li {
    display: inline-block;
    width: calc(100% / 5 - 4px);
    position: relative;
    margin: 30px 0;
    padding: 0;
    vertical-align: text-top
}
.cus ul li img {
    width: 60px;
    padding: 0 0 0 15px
}
.cus ul li p {
    display: inline-block;
    width: calc(100% - 15px);
    padding: 0 0 0 15px;
    font-size: 15px
}
.cus ul li:before {
    content: '';
    display: block;
    width: 15px;
    height: 68px;
    background-image: url(images/cus-arrow.svg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% auto;
    position: absolute;
    left: -1%;
    top: 50%;
    margin-top: -29px
}
.cus ul li:first-of-type:before {
    content: '';
    background: none
}

@media only screen and (min-width: 481px) and (max-width: 768px) {
.cus ul li {
    width: calc(100% / 5)
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.cus ul li:before {
    content: '';
    background: none
}
.cus ul li {
    width: 100%;
    border-top: 1px solid #e1e1e1;
    display: inline-block;
    vertical-align: middle;
    padding: 10px 0;
    margin: 10px 0 0
}
}
.cus02 {
    width: 100%;
    margin-top: -30px
}
.cus02 ul {
    width: 100%;
    text-align: center
}
.cus02 ul li {
    display: inline-block;
    width: calc(100% / 7);
    position: relative;
    margin: 30px 0;
    padding: 0
}
.cus02 ul li img {
    width: 60px
}
.cus02 ul li p {
    display: inline-block;
    width: 100%
}
.cus02 ul li:before {
    content: '';
    display: block;
    width: 26px;
    height: 118px;
    background-image: url(images/cus-arrow.svg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% auto;
    position: absolute;
    left: -5%;
    top: 50%;
    margin-top: -49px
}
.cus02 ul li:first-of-type:before {
    content: '';
    background: none
}

@media only screen and (min-width: 481px) and (max-width: 768px) {
.cus02 ul li {
    width: calc(100% / 5)
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.cus02 ul li:before {
    content: '';
    background: none
}
.cus02 ul li {
    width: 100%;
    border-top: 1px solid #e1e1e1;
    display: inline-block;
    vertical-align: middle;
    padding: 10px 0;
    margin: 10px 0 0
}
}
.cus-list-content {
    margin: 110px 0
}
.cus-list {
    display: flex;
    justify-content: space-between
}
.cus-list .cus-list-item {
    width: calc(100%/3 - 50px/3)
}
.cus-list .cus-list-item > a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 5px;
    overflow: hidden;
    padding: 20px
}
.cus-list .cus-list-item > a, .cus-list .cus-list-item > a:hover {
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.cus-list .cus-list-item-icon {
    padding: 15px
}
.cus-list .cus-list-item-icon img {
    display: block;
    width: 80px
}
.cus-list .cus-list-item-profile {
    width: calc(100% - 130px);
    text-align: left;
    color: #333
}
.cus-list .cus-list-item-profile > li + li {
    margin-top: 15px
}
.cus-list .cus-list-item-profile h3 {
    font-size: 20px;
    font-weight: 700;
    line-height: 20px
}
.cus-list .cus-list-item-profile:hover li h3 {
    color: #1eacd4
}
.cus-list .cus-list-item-profile p {
    font-size: 14px;
    line-height: 22px;
    opacity: .6
}

@media screen and (max-width: 1200px) {
.cus-list .cus-list-item {
    width: calc(100%/2 - 25px/2)
}
}

@media screen and (max-width: 1023px) {
.cus-list {
    flex-wrap: wrap
}
.cus-list .cus-list-item {
    width: 100%!important
}
}

@media screen and (max-width: 767px) {
.cus-list .cus-list-item > a {
    padding: 15px;
    align-items: flex-start
}
.cus-list .cus-list-item-icon {
    padding-top: 0
}
.cus-list .cus-list-item-icon img {
    width: 50px
}
.cus-list .cus-list-item-profile {
    width: calc(100% - 90px)
}
}
.cus03 {
    width: 70%;
    margin: 0 auto -40px
}
.cus03 > ul {
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none
}
.cus03 > ul > li {
    width: 100%;
    height: auto;
    overflow: hidden;
    margin: 0 0 40px
}
.cus03 > ul > li .pic {
    width: 60px;
    float: left
}
.cus03 > ul > li .pic img {
    width: 60px;
    height: 60px;
    border-radius: 100%;
    background: #edb43d
}
.cus03 > ul > li:nth-child(2) .pic img {
    width: 60px;
    height: 60px;
    border-radius: 100%;
    background: #ff4e57
}
.cus03 > ul > li:nth-child(3) .pic img {
    width: 60px;
    height: 60px;
    border-radius: 100%;
    background: #0bac67
}
.cus03 > ul > li:nth-child(4) .pic img {
    width: 60px;
    height: 60px;
    border-radius: 100%;
    background: #6764d8
}
.cus03 > ul > li:nth-child(5) .pic img {
    width: 60px;
    height: 60px;
    border-radius: 100%;
    background: #009fe7
}
.cus03 > ul > li .txtbox {
    width: calc(100% - 100px);
    float: left;
    margin: 0 0 0 40px
}
.cus03 > ul > li .txtbox h3 {
    width: 100%;
    font-size: 20px;
    font-weight: 700;
    color: #FFF
}
.cus03 > ul > li .txtbox h4 {
    font-size: 14px;
    line-height: 1.5;
    margin: 10px 0 0;
    color: #FFF
}

@media screen and (max-width: 1200px) {
.cus03 {
    width: 100%
}
}

@media screen and (max-width: 1023px) {
.cus03 > li > a > img {
    width: 65px
}
.cus03 > li > a > h3 {
    font-size: 16px
}
}

@media screen and (max-width: 767px) {
.cus03 {
    flex-direction: column
}
.cus03 > li + li {
    margin-top: 25px
}
}
.titleBox {
    padding: 0 10px 10px;
    border-bottom: 1px solid #D6D6D6;
    margin-bottom: 25px
}
.titleBox h1 {
    font-size: 19px;
    color: #5F5F5F;
    padding: 0 0 10px
}
.titleBox h2 {
    font-size: 36px;
    color: #061540
}
.titleBox h2 strong {
    font-weight: 400
}
.titleBox h2 em {
    margin-left: 8px;
    font-size: 15px;
    color: #bababa
}
.titleBox h3 {
    font-size: 36px;
    color: #fff
}
.service {
    padding: 0 10px 60px;
    height: auto;
    overflow: hidden
}
.service > ul {
    margin: 0 auto;
    width: 100%;
    padding: 0 0 30px;
    list-style: none;
    height: auto;
    overflow: hidden
}
.service .stitle {
    margin: 0 0 30px;
    width: 100%;
    height: auto;
    overflow: hidden
}
.service .stitle span {
    background: #705aa2;
    font-size: 16px;
    color: #fff;
    padding: 10px 10px 5px
}
.service .stitle .txt {
    margin: 10px;
    height: auto;
    overflow: hidden;
    font-size: 15px;
    color: #666;
    width: calc(100% - 20px)
}
.service02 {
    padding: 0 10px 60px;
    height: auto;
    overflow: hidden
}
.service02 ul {
    margin: 0 auto;
    width: 100%;
    padding: 0 0 30px;
    list-style: none;
    height: auto;
    overflow: hidden
}
.service02 ul li {
    margin: 0 0 10px;
    padding: 0;
    list-style: none;
    width: 100%
}
.service02 ul dd {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 50%;
    float: left;
    vertical-align: top
}
.service02 ul li img {
    width: 100%
}
.service02 ul dd img {
    width: 100%
}
.service04 {
    padding: 0 10px 60px;
    height: auto;
    overflow: hidden
}
.service04 .writing {
    margin: 10px 0 30px;
    padding: 0 0 30px;
    list-style: none;
    width: 100%;
    border-bottom: 1px dotted rgba(0,0,0,0.3)
}
.service04 .info {
    margin: 0;
    padding: 0;
    width: 100%
}
.service05 {
    padding: 0 10px 60px;
    width: 100%;
    height: auto;
    overflow: hidden
}
.service05 ul {
    margin: 0 0 30px;
    width: 100%;
    padding: 0;
    list-style: none
}
.service05 ul li {
    margin: 0 0 30px;
    width: calc(100% - 30px);
    padding: 0;
    list-style: none;
    background: #fff;
    height: auto;
    overflow: hidden
}
.service05 ul:nth-child(2n+0) li {
    margin: 0 30px 0 0;
    width: calc(100% - 30px);
    padding: 0;
    list-style: none;
    background: #fff;
    height: auto;
    overflow: hidden
}
.service05 ul li .pic {
    margin: 0;
    width: 33%;
    padding: 0;
    float: left
}
.service05 ul:nth-child(2n+0) li .pic {
    margin: 0;
    width: 33%;
    padding: 0;
    float: right
}
.service05 ul li .pic img {
    width: 100%
}
.service05 ul li .info {
    margin: 0 20px 10px;
    width: calc(67% - 40px);
    padding: 0;
    float: right;
    height: auto;
    overflow: hidden
}
.service05 ul:nth-child(2n+0) li .info {
    margin: 0 20px;
    width: calc(67% - 40px);
    padding: 0;
    float: left
}
.service05 ul li .info h1 {
    margin: 40px 0 10px;
    width: 100%;
    font-size: 25px;
    color: #34b1c4
}
.service05 ul li .info h2 {
    margin: 0;
    width: 100%
}
.service06 {
    padding: 0 10px 60px;
    width: 100%;
    height: auto;
    overflow: hidden
}
.service06 ul {
    margin: 10% 0 0;
    width: 50%;
    float: left;
    padding: 0;
    list-style: none
}
.service06 li {
    margin: 0;
    width: 50%;
    float: left;
    padding: 0;
    list-style: none
}
.service06 li img {
    width: 100%
}
.servicebox {
    margin: 0 0 30px;
    padding: 0;
    width: 100%;
    overflow: hidden;
    background: url(images/services/servicesbg.jpg) #FFF no-repeat bottom
}
.servicebox .stxt {
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden
}
.servicebox .stxt .sleft {
    width: calc(50% - 30px);
    padding: 30px 0 0 30px;
    float: left;
    height: auto;
    overflow: hidden
}
.servicebox .stxt .sright {
    width: 50%;
    padding: 0;
    float: right;
    height: auto;
    overflow: hidden
}
.servicebox .stxt .sright img {
    width: 100%
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.servicebox .stxt .sleft {
    width: calc(100% - 40px);
    padding: 20px
}
.servicebox .stxt .sright {
    width: 100%
}
.about02 .txtbox .t01 { width: 100%; margin: 10px auto; text-align: justify; }
.apptxtbox li { text-align: justify; }
.title05 { font-size: 19px; text-align: justify; }
.w15_2 { text-align: justify; }
}
.servicebox02 {
    margin: 0 0 30px;
    padding: 0;
    width: 100%;
    overflow: hidden;
    background: url(images/services/servicesbg02.jpg) no-repeat bottom
}
.servicebox02 .stxt {
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden
}
.servicebox02 .stxt .sleft {
    width: calc(50% - 30px);
    padding: 30px 0 0 30px;
    float: left;
    height: auto;
    overflow: hidden
}
.servicebox02 .stxt .sright {
    width: 50%;
    padding: 0;
    float: right;
    height: auto;
    overflow: hidden
}
.servicebox02 .stxt .sright img {
    width: 100%
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.servicebox02 .stxt .sleft {
    width: calc(100% - 40px);
    padding: 20px
}
.servicebox02 .stxt .sright {
    width: 100%
}
}
.servicebox03 {
    margin: 0 0 30px;
    padding: 0;
    width: 100%;
    overflow: hidden;
    background: url(images/services/servicesbg03.jpg) #FFF no-repeat bottom
}
.servicebox03 .stxt {
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden
}
.servicebox03 .stxt .sleft {
    width: calc(50% - 30px);
    padding: 30px 0 0 30px;
    float: left;
    height: auto;
    overflow: hidden
}
.servicebox03 .stxt .sright {
    width: 50%;
    padding: 0;
    float: right;
    height: auto;
    overflow: hidden
}
.servicebox03 .stxt .sright img {
    width: 100%
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.servicebox03 .stxt .sleft {
    width: calc(100% - 40px);
    padding: 20px
}
.servicebox03 .stxt .sright {
    width: 100%
}
}
.form02 {
    width: 100%;
    height: auto;
    overflow: hidden;
    margin: 26px 0 0
}
.form02 ul {
    margin: 0;
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden;
    list-style: none
}
.form02 ul li {
    width: 100%;
    height: auto;
    overflow: hidden;
    margin: 0;
    padding: 0;
    list-style: none
}
.form02 ul dd {
    width: calc(50% - 10px);
    margin: 0 10px 8px 0;
    padding: 0;
    float: left;
    height: auto;
    overflow: hidden
}
.form02 ul dd:nth-child(2) {
    width: calc(50% - 10px);
    margin: 0 0 8px 10px;
    padding: 0;
    float: left;
    height: auto;
    overflow: hidden
}
.form02 ul .title {
    width: 90px;
    float: left;
    color: #666;
    line-height: 35px
}
.form02 ul h2 {
    margin: 0;
    width: calc(100% - 90px);
    padding: 0;
    height: auto;
    overflow: hidden;
    float: left
}
.form02 ul h3 {
    margin: 0 0 10px 90px;
    width: calc(100% - 90px);
    padding: 0;
    height: auto;
    overflow: hidden;
    float: left;
    color: #666;
    line-height: 1.5
}
.form02 .box {
    border-radius: 5px;
    position: relative;
    border: 1px solid #d6d6d6;
    margin: 0 0 10px;
    background: #fff
}
.form02 .box i {
    display: block;
    font-size: 16px;
    color: #34b1c4;
    width: 37px;
    line-height: 35px;
    text-align: center;
    border: 1px solid #d6d6d6;
    position: absolute;
    right: -1px;
    top: -1px;
    border-radius: 5px;
    transition: all .4s ease
}
.form02 .box input[type="text"] {
    border: none;
    font-size: 14px;
    color: #666;
    border-radius: 5px;
    outline: none;
    width: 100%;
    height: 35px;
    padding: 5px 40px 5px 5px;
    box-sizing: border-box
}
.form02 .box textarea {
    border: none;
    font-size: 14px;
    color: #666;
    background: none;
    outline: none;
    border: none;
    width: 100%;
    padding: 5px 40px 5px 5px;
    box-sizing: border-box
}
.form02 .box input[type="text"]:focus ~ i, .form02 .box textarea:focus ~ i {
    color: #e73e4d
}

@media only screen and (min-width: 0px) and (max-width: 767px) {
.form02 ul .title {
    width: 100%;
    line-height: 26px
}
.form02 ul h2 {
    width: 100%;
}
.form02 ul h3 {
    width: 100%;
    margin: 0 0 10px
}
.form02 ul dd {
    width: 100%;
    margin: 0
}
.form02 ul dd:nth-child(2) {
    width: 100%;
    margin: 0
}
}
.slist {
    margin: 0;
    width: 100%;
    background: #FFF
}
.slist img {
    width: 100%
}
.slist .servicetitle {
    margin: -8px 0 10px;
    width: 100%;
    height: auto;
    overflow: hidden;
    border-bottom: 1px solid #ebebeb;
    background: #fff;
    background: -moz-linear-gradient(left, #fff 0%, #edeff1 100%);
    background: -webkit-linear-gradient(left, #fff 0%, #edeff1 100%);
    background: linear-gradient(to right, #fff 0%, #edeff1 100%);
}
.slist .servicetitle span {
    background: #d31245;
    font-size: 13px;
    color: #fff;
    padding: 10px
}
.slist .servicetitle .txt {
    margin: 10px;
    width: 100%;
    height: auto;
    overflow: hidden;
    font-size: 13px;
    color: #666;
    width: calc(100% - 20px)
}

@media only screen and (min-width: 0px) and (max-width: 999px) {
.service {
    padding: 0 10px 30px
}
.service02 {
    padding: 0 10px 30px
}
}

@media only screen and (min-width: 0px) and (max-width: 640px) {
.service02 ul dd {
    width: 100%
}
.service04 .writing {
    padding: 0;
    width: 100%
}
.service04 .info {
    width: 100%
}
.service05 ul li {
    margin: 0;
    width: 100%
}
.service05 ul:nth-child(2n+0) li {
    margin: 0;
    width: 100%
}
.service05 ul li .pic {
    width: 100%
}
.service05 ul:nth-child(2n+0) li .pic {
    width: 100%
}
.service05 ul li .info {
    margin: 0 10px 10px;
    width: calc(100% - 20px)
}
.service05 ul:nth-child(2n+0) li .info {
    margin: 0 10px 10px;
    width: calc(100% - 20px)
}
.service05 ul li .info h1 {
    margin: 10px 0;
    font-size: 20px
}
}

@media only screen and (min-width: 768px) and (max-width: 800px) {
.service05 ul li {
    margin: 0 10px;
    width: calc(100% - 20px)
}
.service05 ul:nth-child(2n+0) li {
    margin: 0 10px;
    width: calc(100% - 20px)
}
.service05 ul li .pic {
    width: 38%
}
.service05 ul:nth-child(2n+0) li .pic {
    width: 38%
}
.service05 ul li .info {
    margin: 0 10px 10px;
    width: calc(62% - 20px)
}
.service05 ul:nth-child(2n+0) li .info {
    margin: 0 10px 10px;
    width: calc(62% - 20px)
}
.service05 ul li .info h1 {
    margin: 15px 0 10px;
    font-size: 20px
}
.service05 ul li .info h2 {
    line-height: 1.5
}
}
.intro {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/intro-bg.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.down-arrow-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: inline-block;
    margin: 20px auto;
    color: #fff;
    font-size: 20px;
    line-height: 40px;
    text-align: center;
    border: 1PX solid #fff
}
.service_health {
    width: 100%;
    margin: 90px 0;
    height: auto;
    overflow: hidden
}
.service_health .pic {
    width: 50%;
    float: left
}
.service_health .pic img {
    width: 100%
}
.service_health .txtbox {
    width: calc(50% - 40px);
    float: left;
    margin: 5% 0 0 40px
}
.service_health .txtbox .list {
    width: 100%;
    margin: 0;
    height: auto;
    overflow: hidden
}
.service_health .txtbox .list .pull-left {
    margin: 20px;
    padding: 0
}
.service_health .txtbox .list .pull-left>i {
    font-size: 24px;
    height: 64px;
    line-height: 64px;
    text-align: center;
    width: 64px;
    border-radius: 100%;
    color: #1eacd4;
    -webkit-box-shadow: inset 0 0 0 1px #d7d7d7;
    box-shadow: inset 0 0 0 1px #d7d7d7;
    transition: background-color 400ms, background-color 400ms;
    position: relative;
    margin: -20px 0 0
}
.service_health .txtbox .list:hover .pull-left>i {
    background-image: -moz-linear-gradient(90deg, #0d6da7 0%, #1eacd4 100%);
    background-image: -webkit-linear-gradient(90deg, #0d6da7 0%, #1eacd4 100%);
    background-image: -ms-linear-gradient(90deg, #0d6da7 0%, #1eacd4 100%);
    color: #fff;
    -webkit-box-shadow: inset 0 0 0 5px rgba(255,255,255,0.8);
    box-shadow: inset 0 0 0 5px rgba(255,255,255,0.8)
}
.service_health .txtbox .list .media-body {
    display: table-cell;
    vertical-align: top
}
.service_health .txtbox .list .media-body h4 {
    font-size: 18px;
    font-weight: 700
}
.service_health .txtbox .list .media-body p {
    font-size: 15px;
    line-height: 1.5;
    margin: 10px 0 0;
    color: #666
}

@media only screen and (min-width: 0px) and (max-width: 950px) {
.service_health .pic {
    width: 100%
}
.service_health .txtbox {
    width: 100%;
    margin: 0
}
}
.service_rwd {
    background: url(images/services/plants-bg.jpg) no-repeat top left;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.service_rwd .txtbox {
    width: 100%;
    margin: 20px 0 0
}
.service_rwd .txtbox li {
    width: 100%;
    margin: 0;
    list-style: none;
    font-size: 15px;
    color: #FFF;
    padding: 0 0 10px;
    line-height: 1.5
}
.service_rwd .txtbox li:before {
    display: inline-block;
    content: '\00bb';
    margin: 0 .6em;
    color: #fff
}
.service_cart {
    width: 100%;
    margin: 110px 0;
    height: auto;
    overflow: hidden
}
.service_cart ul {
    width: 100%;
    height: auto;
    overflow: hidden;
    margin: 20px 0;
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: center;
}
.service_cart ul li {
    width: calc(100% / 4 - 41px);
    height: auto;
    padding: 0 20px;
    margin: 0 0 30px;
    list-style: none;
    float: left;
    border-right: 1px solid #f5f6f0
}
.service_cart ul li:last-of-type {
    width: calc(100% / 4 - 41px);
    border-right: 0
}
.service_cart ul li .icon {
    width: 100%;
    text-align: center;
    font-size: 45px;
    color: #1eacd4
}
.service_cart ul li .info {
    width: 100%;
    margin: 0;
    padding: 0;
    height: auto;
    overflow: hidden;
    text-align: center
}
.service_cart ul li .info h2 {
    width: 100%;
    font-size: 18px;
    font-weight: 700;
    padding: 20px 0 0
}
.service_cart ul li .info h3 {
    width: 100%;
    font-size: 15px;
    line-height: 1.5;
    margin: 10px 0 0;
    color: #666
}

@media only screen and (min-width: 640px) and (max-width: 768px) {
.service_cart ul li {
    width: calc(100% / 2 - 41px);
    padding: 20px
}
.service_cart ul li:last-of-type {
    width: calc(100% / 2 - 41px);
    padding: 20px
}
.service_cart ul li:nth-child(2n+0) {
    width: calc(100% / 2 - 41px);
    padding: 20px;
    border-right: 0
}
}

@media only screen and (min-width: 0px) and (max-width: 639px) {
.service_cart ul li {
    width: calc(100% - 40px);
    border-top: 1px solid #f5f6f0;
    border-right: 0;
    padding: 20px
}
.service_cart ul li:last-of-type {
    width: calc(100% - 40px);
    padding: 20px
}
}
.service_short {
    background: url(images/services/solution_bg02.jpg) no-repeat top right;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.service_2week {
    background: url(images/services/solution_bg01.jpg) no-repeat top right;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.service_app {
    background: url(images/services/app_bg.jpg) no-repeat top right;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.service_seo {
    background: url(images/services/seo_bg.jpg) no-repeat top left;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.apptxtbox {
    width: 100%;
    margin: 20px 0 0;
    text-align: center
}
.apptxtbox li {
    width: 100%;
    margin: 0;
    list-style: none;
    font-size: 15px;
    color: #FFF;
    padding: 0 0 10px;
    line-height: 1.5
}
.apptxtbox li:before {
    display: inline-block;
    content: '\00bb';
    margin: 0 .6em;
    color: #fff
}
.service_case {
    width: 100%;
    margin: 0 0 40px;
    height: auto;
    overflow: hidden
}
.stt {
    width: 100%;
    padding: 0 0 20px;
    height: auto;
    overflow: hidden;
    font-size: 25px;
    color: #000;
    text-align: center
}
.service_case dt {
    width: calc(100% - 60px);
    margin: 0;
    padding: 10px 30px;
    height: auto;
    overflow: hidden;
    font-size: 18px;
    color: #333;
    font-weight: 700;
    border-bottom: 1px dashed rgba(0,0,0,0.2);
    background: rgba(255,255,255,0.9);
    text-align: left
}
.service_case dd {
    width: calc(100% - 0px);
    margin: 0;
    height: auto;
    overflow: hidden;
    text-align: center;
    font-size: 15px;
    color: #333;
    border-bottom: 1px dashed rgba(0,0,0,0.2)
}
.service_case dd table tr td {
    padding: 10px;
    border-right: 1px dashed rgba(0,0,0,0.2)
}
.service_case dd table tr td:last-of-type {
    padding: 10px;
    border-right: none
}
.service_case .sctxt {
    width: 100%;
    margin: 20px 0 0;
    height: auto;
    overflow: hidden;
    font-size: 15px;
    color: #333;
    line-height: 1.5
}
.service_case02 {
    display: none
}
.service_case04 {
    display: none
}

@media only screen and (min-width: 0px) and (max-width: 767px) {
.service_case {
    display: none
}
.service_case02 {
    width: 100%;
    margin: 0 0 40px;
    height: auto;
    overflow: hidden;
    display: block
}
.service_case02 dd {
    display: inline-block;
    text-align: center;
    width: calc(100% / 3 - 20px);
    margin: 0 8px
}
.service_case02 dd h1 a:link {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #294d83;
    border-right: 2px solid #294d83;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #3a7ad9;
    width: calc(100% - 2px)
}
.service_case02 dd h2 a:link, .service_case02 dd h2 a:visited {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #9a3339;
    border-right: 2px solid #9a3339;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #ff4e57;
    width: calc(100% - 2px)
}
.service_case02 dd h3 a:link {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #095937;
    border-right: 2px solid #095937;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #0bac67;
    width: calc(100% - 2px)
}
.service_case02 dd h1 a:hover, .service_case02 dd h2 a:hover, .service_case02 dd h3 a:hover {
    background: #333e48;
    border-bottom: 2px solid #333e48;
    border-right: 2px solid #333e48;
    color: #fff;
    text-decoration: none
}
.service_case04 {
    width: 100%;
    margin: 0 0 40px;
    height: auto;
    overflow: hidden;
    display: block
}
.service_case04 dd {
    display: inline-block;
    text-align: center;
    width: calc(100% / 2 - 20px);
    margin: 0 8px 10px
}
.service_case04 dd h1 a:link {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #294d83;
    border-right: 2px solid #294d83;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #3a7ad9;
    width: calc(100% - 2px)
}
.service_case04 dd h2 a:link, .service_case04 dd h2 a:visited {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #9a3339;
    border-right: 2px solid #9a3339;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #ff4e57;
    width: calc(100% - 2px)
}
.service_case04 dd h3 a:link {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #095937;
    border-right: 2px solid #095937;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #0bac67;
    width: calc(100% - 2px)
}
.service_case04 dd h4 a:link {
    outline: none;
    display: block;
    padding: 10px 0;
    border-bottom: 2px solid #4c1e7a;
    border-right: 2px solid #4c1e7a;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    color: #fff;
    background: #893ad9;
    width: calc(100% - 2px)
}
.service_case04 dd h1 a:hover, .service_case04 dd h2 a:hover, .service_case04 dd h3 a:hover, .service_case04 dd h4 a:hover {
    background: #333e48;
    border-bottom: 2px solid #333e48;
    border-right: 2px solid #333e48;
    color: #fff;
    text-decoration: none
}
}

@media only screen and (min-width: 0px) and (max-width: 500px) {
.service_case02 {
    width: 100%;
    margin: 0 0 40px;
    height: auto;
    overflow: hidden;
    display: block
}
.service_case02 dd {
    width: 100%;
    margin: 0 0 10px
}
.service_case04 {
    width: 100%;
    margin: 0 0 40px;
    height: auto;
    overflow: hidden;
    display: block
}
.service_case04 dd {
    width: 100%;
    margin: 0 0 10px
}
}
.servicecasebox {
    margin: 0;
    padding: 40px;
    width: 1300px;
    height: auto;
    overflow: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

@media only screen and (min-width: 1000px) and (max-width: 1340px) {
.servicecasebox {
    width: 95%;
    padding: 10px;
    margin: 0 auto
}
}

@media only screen and (min-width: 0px) and (max-width: 999px) {
.servicecasebox {
    width: 95%;
    padding: 10px;
    margin: 0 auto
}
}
.service_case03 {
    width: 100%;
    margin: 0;
    height: auto;
    overflow: hidden
}
.service_case03 dt {
    width: 100%;
    margin: 0;
    padding: 10px 0;
    height: auto;
    overflow: hidden;
    font-size: 16px;
    color: #333;
    font-weight: 700;
    border-bottom: 1px dashed rgba(0,0,0,0.2);
    background: rgba(255,255,255,0.9);
    text-align: center
}
.service_case03 dd {
    width: calc(100% - 0px);
    margin: 0;
    height: auto;
    overflow: hidden;
    text-align: center;
    font-size: 14px;
    color: #333;
    border-bottom: 1px dashed rgba(0,0,0,0.2);
    background: #edeff1
}
.service_case03 dd table tr td {
    padding: 10px
}
.intro09 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/solution_bg01.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro10 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/solution_bg02.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro11 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/solution_bg03.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro12 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/solution_bg04.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro13 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/solution_bg05.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro15 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/services/solution_bg06.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro16 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: 100vh;
    padding: 0px;
    text-align: center;
    color: #fff;
    background: url(images/new_customized/customized_bg.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    padding-top: 83px;
}
.success {
    width: 100%;
    margin: 0;
    padding: 0;
    height: auto;
    overflow: hidden
}
.success ul {
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none
}
.success ul li {
    width: calc(100% / 4 - 80px);
    padding: 40px 0 30px 40px;
    margin: 0;
    list-style: none;
    display: inline-block
}
.success ul li img {
    width: 100%
}
.newSUC {
    width: 100%;
    margin: 0;
    padding: 2px 0px;
    height: auto;
    overflow: hidden
}
.newSUC > img {
    width: 100%;
    height: auto;
}
.newSUC02 {
    width: 100%;
    height: auto;
    margin: 0;
    padding: 2px 0px;
    overflow: hidden;
    display: none
}
.newSUC02 > img {
    width: 100%;
    height: auto;
}
@media only screen and (min-width: 751px) and (max-width: 800px) {
.success ul li {
    width: calc(100% / 3 - 60px);
    padding: 30px 0 30px 30px
}
}

@media only screen and (min-width: 401px) and (max-width: 750px) {
.success ul li {
    width: calc(100% / 2 - 60px);
    padding: 30px 0 30px 30px
}
}

@media only screen and (min-width: 0px) and (max-width: 400px) {
.success ul li {
    width: calc(100% - 80px);
    padding: 40px 0 30px 40px
}
}
.solution01 {
    width: 100%;
    margin: 0;
    padding: 0;
    height: auto;
    overflow: hidden
}
.solution01 li {
    width: calc(100% / 4);
    float: left;
    margin: 0;
    padding: 0;
    list-style: none;
    height: auto;
    overflow: hidden
}
.solution01 li .spic {
    width: 100%;
    height: 350px;
    margin: auto;
    position: relative
}
.solution01 li .spic .stxt {
    width: calc(100% - 10%);
    padding: 15% 5%;
    position: absolute;
    font-size: 14px;
    color: #FFF;
    line-height: 1.5;
    text-align: center
}
.solution01 li .spic .stxt em {
    width: 100%;
    display: block;
    font-size: 28px;
    color: #FFF;
    line-height: 1.5;
    padding-bottom: 5px
}
.solution01 li .spic div {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    float: left;
    margin: 0;
    outline: 0
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.solution01 li {
    width: 100%
}
}
.ebook {
    background: url(images/services/ebook_bg.jpg) no-repeat top left;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0
}
.intro2 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/contact/contact_bg.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.intro3 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: calc(100% - 0px);
    height: calc(100vh - 83px);
    padding: 83px 20px 0;
    text-align: center;
    color: #fff;
    background: url(images/contact/contact_bg3.jpg) no-repeat bottom center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover
}
.contact {
    width: 100%;
    margin: 110px 0;
    height: auto;
    overflow: hidden
}
.contact > ul {
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
    height: auto;
    overflow: hidden
}
.contact > ul > li {
    width: calc(100% / 3 - 40px);
    margin: 0;
    padding: 0 20px;
    list-style: none;
    height: auto;
    overflow: hidden;
    float: left
}
.cbox {
    width: 100%;
    margin: 0
}
.cbox em {
    width: 100px;
    height: 98px;
    text-align: center;
    display: block;
    border-radius: 100%;
    background: #085998;
    margin: 0 auto 20px;
    font-size: 24px;
    color: #FFF;
    line-height: 1.5;
    padding-top: 15px
}
.cbox em .tt {
    font-size: 16px;
    color: #FFF;
    width: 100%
}
.cbox .map {
    width: 100%;
    display: block
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.contact > ul > li {
    width: 100%;
    margin: 0 0 30px;
    padding: 0 0 30px;
    border-bottom: 1px dotted rgba(0,0,0,0.3)
}
.contact > ul > li:last-of-type {
    margin: 0;
    padding: 0;
    border-bottom: none
}
.cbox .map {
    display: none
}
}
.clist {
    margin: 15px 0 0;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    text-align: center
}
.clist dd {
    margin: 0;
    padding: 0;
    list-style: none;
    font-size: 16px;
    color: #20afd7;
    line-height: 1.5;
    display: inline-block;
    text-align: center
}
.clist .fa-map-marker, .flist .fa-phone {
    font-size: 20px
}
.clist dt {
    margin: 0;
    padding: 0;
    list-style: none;
    font-size: 16px;
    color: #333;
    line-height: 1.5;
    display: inline-block;
    text-align: center
}
.clist dt a {
    color: #333
}
.clist dt a:hover {
    color: #f73e00
}
.contact02,.contact03 {
    background: url(images/contact/contact_bg2.jpg) no-repeat top left;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
    padding: 80px 0px;
}
.contact03 {
    padding-top: 160px;
}
.form03 {
    width: 100%;
    height: auto;
    overflow: hidden;
    font-size: 14px;
    color: #444;
    line-height: 1
}
.form03 ul {
    margin: 0;
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden
}
.form03 ul .title {
    width: 130px;
    float: left;
    color: #666;
    line-height: 35px
}
.form03 ul h2 {
    margin: 0;
    width: calc(100% - 130px);
    padding: 0;
    height: auto;
    overflow: hidden;
    line-height: 35px
}
.form03 ul h2 em {
    display: inline-block;
    line-height: 1.5
}
.form03 ul h2 b {
    display: inline-block;
    width: calc(100% - 185px)
}
.form03 ul h3 {
    margin: 10px 0 10px 130px;
    width: calc(100% - 130px);
    padding: 0;
    height: auto;
    overflow: hidden;
    line-height: 1.5
}
.form03 ul h3 b {
    display: inline-block;
    width: calc(100% - 200px)
}
.form03 ul li {
    margin: 0 0 8px;
    width: 100%
}
.form03 ul dd {
    width: calc(50% - 10px);
    margin: 0 10px 8px 0;
    float: left
}
.form03 ul dd:nth-child(2) {
    width: calc(50% - 10px);
    margin: 0 0 8px 10px;
    float: left
}
.form03 input[type="text"] {
    border: none;
    font-size: 14px;
    color: #666;
    border-radius: 5px;
    background: #f5f5f5;
    outline: none;
    width: 100%;
    height: 35px;
    padding: 5px;
    box-sizing: border-box
}
.form03 textarea[type="text"] {
    border: none;
    font-size: 14px;
    color: #666;
    background: #f5f5f5;
    border-radius: 5px;
    outline: none;
    border: none;
    width: 100%;
    padding: 5px;
    box-sizing: border-box
}
.form03 .box input[type="text"]:focus ~ i, .form03 .box textarea:focus ~ i {
    color: #e73e4d
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.form03 ul .title {
    width: 100%;
    line-height: 26px
}
.form03 ul h2 {
    width: 100%
}
.form03 ul h3 {
    margin: 10px 0;
    width: 100%
}
.form03 ul h2 b {
    display: block;
    width: 100%!important
}
.form03 ul h3 b {
    display: block;
    width: 100%!important
}
.form03 ul dd {
    width: 100%;
    margin: 0 0 8px
}
.form03 ul dd:nth-child(2) {
    width: 100%;
    margin: 0 0 8px
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.form03 ul h2 em {
    display: none
}
}
.form_list {
    margin: 0 0 10px;
    width: calc(100% - 12px);
    padding: 10px 5px 0;
    height: auto;
    overflow: hidden;
    border-radius: 5px;
    border: 1px solid #d6d6d6;
    font-size: 14px;
    color: #444;
    line-height: 1
}
.form_list h3 {
    width: 110px;
    float: left
}
.form_list h4 {
    width: calc(100% - 110px);
    float: left
}
.check_list {
    margin: 0 auto;
    width: 100%;
    padding: 0;
    height: auto;
    overflow: hidden
}
.check_list li {
    width: calc(100% / 3);
    float: left;
    list-style: none;
    padding: 0 0 10px
}
.check_list dd {
    width: 100%;
    display: block;
    list-style: none;
    margin: 0 0 10px;
    height: auto;
    overflow: hidden
}

@media only screen and (min-width: 481px) and (max-width: 640px) {
.check_list li {
    width: calc(100% / 2)
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.form_list h3 {
    width: 100%;
    margin: 0 0 10px
}
.form_list h4 {
    width: 100%
}
.check_list li {
    width: 100%
}
}
.news {
    padding: 0 10px 60px;
    height: auto;
    overflow: hidden
}
.news ul {
    margin: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    padding: 40px 0;
    border-bottom: 3px solid #000
}
.news ul .pic {
    margin: 0;
    width: 40%;
    height: auto;
    overflow: hidden;
    padding: 0;
    float: left;
    background: #000
}
.news ul .pic img {
    width: 100%;
    transition: all .5s;
    display: block
}
.news ul:hover .pic img {
    transform: scale(1.1);
    opacity: .6
}
.news ul .date {
    margin: 0;
    width: calc(60% - 20px);
    height: auto;
    overflow: hidden;
    padding: 0 0 0 20px;
    float: left
}
.news ul .date .tt {
    margin: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    padding: 10px 0;
    font-size: 24px;
    color: #000;
    line-height: 1.8;
    font-weight: 700
}
.news ul .date .tt a {
    color: #000;
    text-decoration: none
}
.news ul .date .tt a:hover {
    color: #f73e00;
    text-decoration: none
}
.news ul:hover .date .tt a {
    color: #f73e00;
    text-decoration: none
}
.news ul .date .cc {
    margin: 0;
    width: 100%;
    padding: 0;
    font-size: 15px;
    color: #333;
    line-height: 1.8
}

@media only screen and (min-width: 0px) and (max-width: 640px) {
.news ul .pic {
    width: 100%;
    padding: 0
}
.news ul .date {
    width: 100%;
    padding: 0
}
}

@media only screen and (min-width: 641px) and (max-width: 768px) {
.news ul .date .tt {
    padding: 0 0 10px;
    font-size: 22px
}
}
.newsview {
    margin: 0;
    padding: 0 10px 0px;
    width: 100%;
    height: auto;
    overflow: hidden
}
.newsview > ul,.newsview > ul > h1.SV_TTX {
    margin: 0;
    padding: 0 0 10px;
    width: 100%;
    height: auto;
    overflow: hidden;
    list-style: none;
    border-bottom: 3px solid #000;
    font-size: 26px;
    color: #000;
    line-height: 2;
    clear: both;
    font-weight: 700
}
.newsview > ul > h1.SV_TTX {
    border-bottom: 0px solid #000;
    width: auto;
    float: left;
}
.newsview > li {
    margin: 0 0 20px;
    padding: 15px 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    list-style: none;
    font-size: 15px;
    color: #333;
    line-height: 1.8
}
.newsview01 {
    margin: 0;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden
}
.newsview01 h1 {
    margin: 0;
    padding: 0;
    width: 20%;
    height: auto;
    overflow: hidden;
    float: left
}
.newsview01 h2 {
    margin: 10px 0 0;
    padding: 0;
    width: 80%;
    height: auto;
    overflow: hidden;
    float: right
}

@media only screen and (min-width: 0px) and (max-width: 420px) {
.newsview01 h1 {
    margin: 0 0 20px;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    text-align: center
}
.newsview01 h2 {
    margin: 0;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden
}
}

@media only screen and (min-width: 481px) and (max-width: 768px) {
.newsview01 h1 {
    margin: 0;
    padding: 0;
    width: 30%;
    height: auto;
    overflow: hidden;
    float: left
}
.newsview01 h2 {
    margin: 50px 0 0;
    padding: 0;
    width: 70%;
    height: auto;
    overflow: hidden;
    float: right
}
}

@media only screen and (min-width: 421px) and (max-width: 480px) {
.newsview01 h1 {
    margin: 0;
    padding: 0;
    width: 40%;
    height: auto;
    overflow: hidden;
    float: left
}
.newsview01 h2 {
    margin: 20px 0 0;
    padding: 0;
    width: 60%;
    height: auto;
    overflow: hidden;
    float: right
}
}
.newsview02 {
    width: 100%;
    margin: 30px 0;
    height: auto;
    overflow: hidden
}
.newsview02 .pic {
    width: 60%;
    float: right
}
.newsview02 .pic img {
    width: 100%
}
.newsview02 .txtbox {
    width: calc(40% - 20px);
    float: left;
    margin: 5% 20px 0 0
}
.newsview02 .txtbox ul {
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
    height: auto;
    overflow: hidden
}
.newsview02 .txtbox ul li {
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
    font-size: 15px;
    color: #666;
    padding: 0 0 10px 0;
    line-height: 1.5
}
.newsview02 .txtbox ul li:before {
    display: inline-block;
    content: '\00bb';
    margin: 0 .6em;
    color: #666
}

@media only screen and (min-width: 0px) and (max-width: 950px) {
.newsview02 .pic {
    width: 100%
}
.newsview02 .txtbox {
    width: 100%;
    margin: 0
}
}
.newsview03 {
    padding: 40px 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    background: url(images/servicebackground.jpg) no-repeat bottom center
}
.newsview03 .txtbox {
    width: 100%;
    margin: 0 auto;
    padding: 30px;
    box-sizing: border-box
}
.newsview03 .txtbox ul:nth-child(1) {
    width: calc(50% - 41px);
    margin: 0;
    padding: 0 40px 0 0;
    list-style: none;
    height: auto;
    overflow: hidden;
    float: left
}
.newsview03 .txtbox ul:nth-child(2) {
    width: calc(50% - 41px);
    margin: 0;
    padding: 0 0 0 40px;
    list-style: none;
    height: auto;
    overflow: hidden;
    float: left;
    border-left: 1px dotted rgba(255,255,255,0.3)
}
.news_list {
    width: 100%;
    margin: 0
}
.news_list em {
    width: 100px;
    height: 100px;
    text-align: center;
    display: block;
    border-radius: 100%;
    background: #1ac6ff;
    margin: 0 auto 20px;
    font-size: 24px;
    color: #FFF;
    line-height: 100px
}
.news_list li {
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
    font-size: 15px;
    color: #FFF;
    padding: 0 0 10px 0;
    line-height: 1.5
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.newsview03 .txtbox ul:nth-child(1) {
    width: 100%;
    margin: 0;
    padding: 0 0 40px;
    border-bottom: 1px dotted rgba(255,255,255,0.3)
}
.newsview03 .txtbox ul:nth-child(2) {
    width: 100%;
    margin: 0;
    padding: 40px 0 0;
    border-left: none
}
    .title02-4 { width: 50%; }
    .service .stitle .txt {  text-align: justify;}
}
.share {
    margin: 20px 0 0;
    width: 100%;
    height: auto;
    overflow: hidden
}
.share li {
    margin: 10px;
    padding: 0 0 20px;
    width: calc(100% / 3 - 20px);
    list-style: none;
    display: block;
    float: left;
    background: #fff;
    transition: opacity .4s ease-in-out
}
.share:hover li:not(:hover) {
    opacity: .4
}
.share li .pic {
    margin: 0;
    width: 100%;
    position: relative
}
.share li .pic img {
    width: 100%
}
.share li .title {
    width: calc(100% - 20px);
    height: auto;
    padding: 0 10px;
    margin: 10px 0 0
}
.share li .title h1 {
    width: 100%;
    margin: 0 0 10px;
    font-size: 18px;
    outline: none;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}
.share li .title h1 a {
    color: #000;
    text-decoration: none
}
.share li .title h1 a:hover {
    color: #f73e00;
    text-decoration: none
}
.share li:hover h1 a {
    color: #f73e00
}
.share li .title p {
    width: 100%;
    height: auto;
    line-height: 1.6;
    font-size: 15px;
    outline: none;
    text-decoration: none;
    color: #666
}

@media only screen and (min-width: 481px) and (max-width: 800px) {
.share li {
    width: calc(100% / 2 - 20px)
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.share li {
    margin: 10px 0;
    width: 100%
}
}
.sitemap {
    padding: 0 10px 60px;
    height: auto;
    overflow: hidden
}
.sitemap > ul {
    margin: 0 0 60px;
    padding: 0 20px 0 0;
    width: calc(100% / 4 - 23px);
    list-style: none;
    display: inline-block;
    vertical-align: top
}
.sitemap > ul:last-of-type {
    margin: 0 0 60px;
    padding: 0;
    width: calc(100% / 4);
    list-style: none;
    display: inline-block;
    vertical-align: top
}
.sitemap > ul > h1 {
    width: 100%;
    margin: 0 0 10px;
    font-size: 26px;
    color: #000;
    font-weight: 700
}
.sitemap > ul > h1 a {
    color: #000;
    text-decoration: none
}
.sitemap > ul > h1 a:hover {
    color: #f73e00;
    text-decoration: none
}
.sitemap > ul > dd {
    width: 100%;
    margin: 0
}
.sitemap > ul > dd > li {
    width: 100%;
    margin: 0 0 10px;
    font-size: 16px;
    color: #666
}
.sitemap > ul > dd > li a {
    color: #666;
    text-decoration: none
}
.sitemap > ul > dd > li a:hover {
    color: #0070c9;
    text-decoration: none
}

@media only screen and (min-width: 641px) and (max-width: 800px) {
.sitemap > ul {
    padding: 0 20px 0 0;
    width: calc(100% / 3 - 23px)
}
.sitemap > ul:last-of-type {
    padding: 0;
    width: calc(100% / 3)
}
}

@media only screen and (min-width: 480px) and (max-width: 640px) {
.sitemap > ul {
    padding: 0 20px 0 0;
    width: calc(100% / 2 - 23px)
}
.sitemap > ul:last-of-type {
    padding: 0;
    width: calc(100% / 2)
}
}

@media only screen and (min-width: 0px) and (max-width: 479px) {
.sitemap > ul {
    padding: 0;
    width: 100%
}
.sitemap > ul:last-of-type {
    padding: 0;
    width: 100%
}
}
.case {
    padding: 0;
    height: auto;
    overflow: hidden
}
.case ul {
    padding: 0;
    margin: 0;
    list-style: none;
    width: 100%
}
.case ul li {
    width: 50%;
    position: relative;
    float: left;
    padding: 0;
    margin: 0;
    list-style: none
}
.case ul li .pic {
    margin: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    padding: 0;
    background: #000
}
.case ul li .pic img {
    width: 100%;
    transition: all .5s;
    display: block
}
.case ul li:hover .pic img {
    transform: scale(1.1);
    opacity: .6
}
.casetxtbox {
    width: calc(100% - 40px);
    text-align: center;
    position: absolute;
    padding: 0 20px 20px;
    line-height: 1.3;
    z-index: 1
}
.casetxtbox h1 {
    margin: 25% 0 0;
    font-size: 40px;
    color: #fff
}
.casetxtbox h2 {
    margin: 8px 0 0;
    font-size: 18px;
    color: #fff
}

@media only screen and (min-width: 0px) and (max-width: 999px) {
.case ul li {
    width: 100%
}
}

@media only screen and (min-width: 0px) and (max-width: 520px) {
.casetxtbox {
    width: calc(100% - 20px);
    padding: 0 10px 10px;
    line-height: 1.2
}
.casetxtbox h1 {
    margin: 30% 0 0;
    font-size: 24px
}
.casetxtbox h2 {
    display: none
}
}
.case02 {
    padding: 0 0 60px;
    height: auto;
    overflow: hidden
}
.case_list {
    margin: 20px 0 0;
    width: 100%;
    height: auto;
    overflow: hidden
}
.case_list li {
    margin: 10px;
    padding: 0 0 20px;
    width: calc(100% / 4 - 20px);
    list-style: none;
    display: block;
    float: left;
    background: #fff;
    transition: opacity .4s ease-in-out
}
.case_list:hover li:not(:hover) {
    opacity: .4
}
.case_list li .pic {
    margin: 0;
    width: 100%;
    position: relative
}
.case_list li .pic img {
    width: 100%
}
.case_list li .pic a:link, .case_list li .pic a:visited {
    outline: none;
    text-decoration: none
}
.case_list li .pic .infobox {
    display: none
}
.case_list li:hover .pic .infobox {
    width: 100%;
    height: 99%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.5);
    display: block
}
.case_list li .pic .ctitle {
    width: calc(100% - 20px);
    margin-top: 25%;
    font-size: 22px;
    color: #FFF;
    text-align: center;
    padding: 0 10px
}
.case_list li .pic .iconbox {
    width: auto;
    margin: 25% auto 0;
    text-align: center
}
.case_list li .pic .iconbox .cmore {
    width: 45px;
    height: 45px;
    line-height: 45px;
    display: inline-block;
    text-align: center;
    border-radius: 100%;
    color: #000;
    background: rgba(255,255,255,0.8);
    margin: 10px 5px 0
}
.case_list li .pic .iconbox .cmore a {
    color: #000
}
.case_list li .pic .iconbox .cmore:hover {
    background: #fe8d03
}
.case_list li .pic .iconbox .cmore:hover a {
    color: #fff
}
.case_list li .pic .iconbox .link {
    width: 45px;
    height: 45px;
    line-height: 45px;
    display: inline-block;
    text-align: center;
    border-radius: 100%;
    color: #000;
    background: rgba(255,255,255,0.8);
    margin: 10px 5px 0
}
.case_list li .pic .iconbox .link a {
    color: #000
}
.case_list li .pic .iconbox .link:hover {
    background: #fe8d03
}
.case_list li .pic .iconbox .link:hover a {
    color: #fff
}
.case_list li .title {
    width: 100%;
    height: auto;
    min-height: 80px;
    padding: 30px 10px 0;
    margin: 0;
    font-size: 16px;
    outline: none;
    text-decoration: none;
    position: relative;
    color: #000
}
.case_list li .title a:link, .case_list li .title a:visited {
    outline: none;
    text-decoration: none
}
.case_list li .title:after {
    content: '';
    position: absolute;
    width: 32px;
    height: 1px;
    display: block;
    border-top: 2px solid;
    opacity: .8;
    top: 20px;
    color: #000
}
.case_list li .title a {
    color: #000
}

@media only screen and (min-width: 481px) and (max-width: 1060px) {
.case_list li .title {
    min-height: 65px
}
}

@media only screen and (min-width: 801px) and (max-width: 1150px) {
.case_list li .pic .ctitle {
    font-size: 18px
}
}

@media only screen and (min-width: 481px) and (max-width: 850px) {
.case_list li {
    width: calc(100% / 2 - 20px)
}
.case_list li .pic .ctitle {
    font-size: 16px
}
.case_list li .pic .iconbox .cmore {
    width: 40px;
    height: 40px;
    line-height: 40px
}
.case_list li .pic .iconbox .link {
    width: 40px;
    height: 40px;
    line-height: 40px
}
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.case_list li {
    margin: 10px 0;
    width: 100%
}
.case_list li .pic .ctitle {
    font-size: 16px
}
.case_list li .pic .iconbox .cmore {
    width: 40px;
    height: 40px;
    line-height: 40px
}
.case_list li .pic .iconbox .link {
    width: 40px;
    height: 40px;
    line-height: 40px
}
}
.catalog {
    margin: 0 10px 10px;
    width: 100%;
    padding: 0 0 10px;
    display: block;
    height: auto;
    overflow: hidden
}
.catalog li {
    height: auto;
    overflow: hidden;
    font-size: 14px;
    color: #FFF;
    list-style: none;
    display: inline-block;
    line-height: 36px
}
.catalog li a {
    color: #444;
    padding: 5px 15px;
    margin: 0 0 15px;
    background: #FFF;
    border: 2px solid #ccc;
    border-radius: 3px
}
.catalog li a:hover {
    color: #fff;
    background-color: #ccc
}
.catalog li.current a {
    color: #FFF;
    border: 2px solid #127cb3;
    background: #20afdb;
    background: -moz-linear-gradient(top, #20afdb 0%, #055091 100%);
    background: -webkit-linear-gradient(top, #20afdb 0%, #055091 100%);
    background: linear-gradient(to bottom, #20afdb 0%, #055091 100%);
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.catalog li a {
    padding: 5px 10px;
    background: none;
    border: none;
    margin: 0 0 5px
}
.catalog li.current a {
    border: none
}
}
.catalog02 {
    margin: 0 0 10px 10px;
    width: auto;
    padding: 0 0 10px;
    display: block;
    height: auto;
    overflow: hidden;
    float: left
}
.catalog02 li {
    height: auto;
    overflow: hidden;
    font-size: 14px;
    color: #FFF;
    list-style: none;
    display: inline-block;
    line-height: 36px
}
.catalog02 li a {
    color: #444;
    padding: 5px 15px;
    margin: 0 0 15px;
    background: #FFF;
    border: 2px solid rgba(255,255,255,0.6);
    border-radius: 3px
}
.catalog02 li a:hover {
    color: #fff;
    background-color: rgba(255,255,255,0.6)
}
.catalog02 li.current a {
    color: #FFF;
    border: 2px solid #127cb3;
    background: #20afdb;
    background: -moz-linear-gradient(top, #20afdb 0%, #055091 100%);
    background: -webkit-linear-gradient(top, #20afdb 0%, #055091 100%);
    background: linear-gradient(to bottom, #20afdb 0%, #055091 100%);
}
.catalog02 li a span {
    font-size: 10px;
    opacity: .7
}

@media only screen and (min-width: 0px) and (max-width: 768px) {
.catalog02 li a {
    color: rgba(255,255,255,0.7);
    padding: 5px 10px;
    background: none;
    border: none;
    margin: 0 0 5px
}
.catalog02 li a:hover {
    background-color: rgba(255,255,255,0.6)
}
.catalog02 li.current a {
    border: none
}
}
.catalog_select {
    margin: 0 10px 10px 0;
    width: auto;
    padding: 0 0 10px;
    display: block;
    height: auto;
    overflow: hidden;
    float: right
}
.casebox {
    margin: 0;
    padding: 40px;
    width: 1300px;
    height: auto;
    overflow: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}
.casebox .txt01 {
    margin: 0;
    padding: 0;
    width: calc(40% - 40px);
    height: auto;
    overflow: hidden
}
.casebox .txt01 h1 {
    margin: 5px 0 0;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden
}
.casebox .txt01 h1 .name {
    font-size: 32px;
    color: #000;
    width: 100%
}
.casebox .txt01 h1 .link {
    width: 36px;
    height: 36px;
    font-size: 15px;
    line-height: 36px;
    display: block;
    text-align: center;
    border-radius: 100%;
    color: #fff;
    background: #fe8d03;
    margin: 5px 0 0
}
.casebox .txt01 h1 .link:hover {
    color: #fff;
    background: rgba(0,0,0,0.3)
}
.casebox .txt01 h2 {
    margin: 15px 0 0;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    font-size: 15px;
    color: #000;
    line-height: 1.8
}
.casebox .txt01 h3 {
    margin: 15px 0 0;
    padding: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    display: none
}
.casebox .txt01 h3 li {
    font-size: 15px;
    color: #FFF;
    list-style: none;
    display: inline-block;
    padding: 10px 15px;
    margin: 0 8px 8px 0;
    background: #28bad1;
    border-radius: 3px
}
.casebox .txt01 h3 li:nth-child(2) {
    background: #9fc124
}
.casebox .txt01 h3 li:nth-child(3) {
    background: #705aa2
}
.casebox .txt01 h3 li:nth-child(4) {
    background: #f4304c
}
.casebox .txt01 h3 li:nth-child(5) {
    background: #fe8d03
}
.casebox .pic01 {
    margin: 0 40px 0 0;
    padding: 0;
    width: 60%;
    height: auto;
    overflow: hidden;
    float: left
}
.casebox .pic01 img {
    width: 100%
}

@media only screen and (min-width: 1000px) and (max-width: 1340px) {
.casebox {
    width: 95%;
    padding: 20px;
    margin: 0 auto
}
}

@media only screen and (min-width: 0px) and (max-width: 999px) {
.casebox {
    width: 95%;
    padding: 20px;
    margin: 0 auto
}
.casebox .pic01 {
    margin: 0 0 30px;
    width: 100%
}
.casebox .txt01 {
    width: 100%
}
.casebox .txt01 h1 .name {
    font-size: 25px
}
}
.button_back {
    padding: 13px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    line-height: 14px;
    color: #fff;
    background: #015fa2;
    cursor: pointer;
    outline: none;
    border: none;
    width: auto;
    margin: 10px 10px 0 0;
    border-radius: 3px
}
.button_back:nth-child(2n+0) {
    background: #34b1c4
}
.button_back:hover {
    color: #fff;
    background: #ff4e57
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.button_back {
    width: calc(100% - 2px);
    margin: 0 0 10px
}
}
.button_back02 {
    padding: 10px 0;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    color: #fff;
    background: #28bad1;
    cursor: pointer;
    outline: none;
    border: #fff 1px solid;
    width: 180px;
    margin: 10px 10px 0 0;
    border-radius: 5px
}
.button_back02:nth-child(2n+0) {
    background: #9fc124
}
.button_back02:hover {
    color: #fff;
    background: #ff4e57;
    border: #fff 1px solid
}

@media only screen and (min-width: 0px) and (max-width: 480px) {
.button_back02 {
    width: calc(100% - 2px);
    margin: 0 0 10px
}
}
.btn-return {
    outline: none;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    line-height: 14px;
    text-align: center;
    color: #fff;
    background-color: #34b1c4;
    margin-top: 20px;
    padding: 10px
}
.btn-return:hover {
    background: #ff4e57
}
.btn-return02 {
    padding: 13px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    line-height: 14px;
    color: #fff;
    background: rgba(0,0,0,0.3);
    cursor: pointer;
    outline: none;
    border: none;
    width: auto;
    margin: 10px 10px 0 0;
    border-radius: 3px
}
.btn-return02 a {
    color: #fff;
    text-decoration: none
}
.btn-return02:hover {
    background: #ff4e57
}
.btn-return03,.btn-return04,.btn-return05 {
    outline: none;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    line-height: 14px;
    text-align: center;
    color: #fff;
    background-color: #ff4d00;
    margin-top: 20px;
    padding: 10px;
    margin-right: 10px;
}
.btn-return03:hover {
    background: #e80000;
}
.btn-return04 { background-color: #006dc1; }
.btn-return04:hover { background-color: #ffc600; }
.btn-return05 { background-color: #00b900; }
.btn-return05:hover { background-color: #94e100; }

@media only screen and (min-width: 0px) and (max-width: 480px) {
.btn-return02 {
    width: calc(100% - 2px);
    margin: 0 0 10px
}
}
.button_book {
    padding: 13px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    background: rgba(0,0,0,0.5);
    cursor: pointer;
    outline: none;
    border: none;
    width: auto;
    margin: 0;
    border-radius: 50px
}
.button_book:hover {
    background: #34b1c4
}
.more {
    margin: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    padding: 0
}
.more .button {
    padding: 10px 40px;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    color: #fff;
    background: #1ea7d1;
    border-radius: 3px;
    font-family: Open Sans
}
.more .button:hover {
    background: #f73e00;
    color: #fff;
    transition: all .3s
}
.more2 {
    margin: 0;
    width: 100%;
    height: auto;
    overflow: hidden;
    padding: 0
}
.more2 .button {
    padding: 10px 40px;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    color: #fff;
    background: rgba(0,0,0,0.3);
    border-radius: 3px;
    font-family: Open Sans
}
.more2 .button:hover {
    background: rgba(0,0,0,0.6);
    transition: all .3s
}
.e404box {
    width: 600px;
    background: #FFF;
    padding: 20px;
    margin: 0 auto;
    display: block;
    border-radius: 5px;
    -moz-box-shadow: 3px 3px 2px rgba(0%,0%,0%,0.1);
    -webkit-box-shadow: 3px 3px 2px rgba(0%,0%,0%,0.1);
    box-shadow: 0 0 40px rgba(0%,0%,0%,0.1)
}
.e404 {
    width: auto;
    display: block;
    padding: 0
}
.e404 img {
    max-width: 100%
}
.e404 dd {
    width: auto;
    display: inline-block;
    margin: 5px 15px;
    padding: 0;
    list-style: none
}
.e404 dd.error {
    font-family: Helvetica, sans-serif;
    font-size: 40px;
    font-weight: 700;
    color: #333;
    margin: 11px 0 0;
    vertical-align: top
}
.e404 dd.text {
    font-size: 14px;
    color: #333;
    text-align: left;
    line-height: 1.6
}
.e404 dd.text a {
    color: #4DB0B9
}
.e404 dd.topbtn {
    vertical-align: top;
    margin: 18px 0 0
}
.e404 dd a.btn {
    outline: none;
    border-radius: 3px;
    font-size: 13px;
    line-height: 13px;
    text-align: center;
    color: #ffF;
    padding: 5px 10px;
    border: 2px solid #ff4e57;
    text-decoration: none;
    vertical-align: top;
    background: #ff4e57
}
.e404 dd .btn:hover {
    background: #4DB0B9;
    border: 2px solid #4DB0B9;
    color: #FFF
}

.WebNav { width: auto; height: 83px; float: left; display: -webkit-inline-box; display: -ms-inline-flexbox; display: inline-flex; -webkit-box-pack: end; -ms-flex-pack: end; justify-content: flex-end; -ms-flex-line-pack: center; align-content: center; -webkit-box-align: center; -ms-flex-align: center; align-items: center; margin-right: 0px; }

.WebNav > div { width: auto; height: 83px; padding: 0px 8px; font-size: 16px; font-weight: normal; color: #ffffff; display: -webkit-inline-box; display: -ms-inline-flexbox; display: inline-flex; -webkit-box-pack: center; -ms-flex-pack: center; justify-content: center; -ms-flex-line-pack: center; align-content: center; -webkit-box-align: center; -ms-flex-align: center; align-items: center; background: #16a3d1; background: linear-gradient(135deg, rgba(22, 163, 209, 0) 25%, rgba(9, 93, 155, 0) 90%);  -webkit-transition: all 0.3s ease; transition: all 0.3s ease; position: relative; }

.WebNav > div:hover { background: #16a3d1; background: linear-gradient(135deg, #16a3d1 25%, #095d9b 90%); -webkit-transition: all 0.3s ease; transition: all 0.3s ease; }

.WebNav > div > ul:first-child > a { color: #ffffff; font-weight: 600; }
.WebNav > div > ul:first-child { color: #ffffff; font-weight: 600; max-height: inherit; }
.WebNav > div > ul:nth-child(2) { width: 170px; height: auto; max-height: 0px; background-color: #085998; -webkit-transition: all 0.5s ease; transition: all 0.5s ease; position: absolute; top: 83px; right: 0px; overflow: hidden; opacity: .15; margin-left: -40px; }
.WebNav > div:nth-child(2) > ul:nth-child(2) { width: 166px; height: auto; max-height: 0px; background-color: #085998; -webkit-transition: all 0.5s ease; transition: all 0.5s ease; position: absolute; top: 83px; right: 1px; overflow: hidden; opacity: .15; margin-left: -40px; }

.WebNav > div:hover > ul,.WebNav > div:hover > li { max-height: 500px; opacity: 1; -webkit-transition: all 0.5s ease; transition: all 0.5s ease; }
.WebNav > div:nth-child(2):hover > ul:nth-child(2) { max-height: 500px; opacity: 1; -webkit-transition: all 0.5s ease; transition: all 0.5s ease; }

.WebNav > div > ul > li,.WebNav > div > li > li { width: calc( 100% - 20px); height: 40px; border-bottom: 1px solid rgba(255, 255, 255, 0.3); text-align: left; color: #ffffff; font-size: 13px; margin: 0px 10px; display: -webkit-inline-box; display: -ms-inline-flexbox; display: inline-flex; -webkit-box-pack: start; -ms-flex-pack: start; justify-content: flex-start; -ms-flex-line-pack: center; align-content: center; -webkit-box-align: center; -ms-flex-align: center; align-items: center; }

.WebNav > div > ul > li > a,.WebNav > div > li > li > a { color: #ffffff; width: 100%; height: auto; -webkit-transition: all 0.5s ease; transition: all 0.5s ease; }

.WebNav > div > ul > li > a:hover,.WebNav > div > li > li > a:hover { color: rgba(255, 255, 255, 0.7); -webkit-transition: all 0.5s ease; transition: all 0.5s ease; }

.WebNav > div > ul > a > li,.WebNav > div > li > a > li { width: calc( 100% - 20px); height: 40px; border-bottom: 1px solid rgba(255, 255, 255, 0.3); text-align: left; color: #ffffff; font-size: 14px; margin: 0px 10px; display: -webkit-inline-box; display: -ms-inline-flexbox; display: inline-flex; -webkit-box-pack: start; -ms-flex-pack: start; justify-content: flex-start; -ms-flex-line-pack: center; align-content: center; -webkit-box-align: center; -ms-flex-align: center; align-items: center; }

.WebNav > div > ul > a:hover > li,.WebNav > div > li > a:hover > li { color: rgba(255, 255, 255, 0.7); -webkit-transition: all 0.5s ease; transition: all 0.5s ease; }

.WebNav > div > ul > a:last-child > li,.WebNav > div > li > a:last-child > li { margin-bottom: 10px; }

.Quick_form{ width: 50%; height: auto; padding: 30px; border: 1px dashed #c2c2c2; border-radius: 10px; }

.title08 { width: 100%; font-size: 14px; color: #000; padding: 0px; line-height: 2; margin: 20px 0; text-align: justify; }
.QF_trBox,.QF_trBox03 { width: 100%; height: auto; font-size: 16px; color: #242424; display: inline-flex; justify-content: space-between; align-content: center; -ms-align-items: center; align-items: center; margin: 10px 0px; }
.QF_trBox03 { justify-content: flex-start; }

.QF_txBox { width: 25%; height: auto; float: left; line-height: 33px; }
.QF_inpt { width: calc( 75% - 10px ); margin-left: 10px; padding: 6px 12px; font-size: 14px; border: 1px solid #c2c2c2; border-radius: 5px; }
.QF_trBox02 { width: 100%; height: auto; font-size: 16px; color: #242424; display: inline-flex; justify-content: flex-end; align-content: center; -ms-align-items: center; align-items: center; margin: 10px 0px; }
.inpt_sub { font-size: 18px; color: #fff; padding: 10px 30px; border: 0px solid #fff; border-radius: 5px; background: rgb(59,103,158);
background: -moz-linear-gradient(top, rgba(59,103,158,1) 0%, rgba(43,136,217,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%);
background: -webkit-linear-gradient(top, rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%);
background: linear-gradient(to bottom, rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); }
.share_view_LfBox { width: calc( 100% - 300px - 20px ); height: auto; margin-right: 20px; float: left; }
.share_view_RfBox { width: 300px; height: auto; float: left; }
.sv_newsBox { width: 100%; height: auto; border-bottom: 1px dashed #646464; display: inline-flex; justify-content: space-between; align-content: center; -ms-align-items: center; align-items: center; float: left; }
.sv_newsBox > a { width: 100%; }
.sv_newsBPHot { width: auto; height: 90px; float: left; }
.sv_newsBPHot > img { width: auto; height: 90px; }
.sv_newsCNBox { width: 100%; height: auto; float: left; }
.sv_newsBTT { width: 100%; height: 30px; padding: 0px 12px; line-height: 30px; background-color: #085998; color: #fff; font-size: 13px; font-weight: 600; }
.sv_newsTxBox { width: 100%; height: auto; padding: 12px; line-height: 18px; font-size: 13px; color: #646464; text-align: justify; background-color: #fff; }
.sv_newsTxBox > a > ul { width: 100%; height: 13px; text-align: left; font-size: 12px; line-height: 13px; margin: 5px 0px; position: relative; display: inline-flex; justify-content: flex-start; -ms-align-items: center;align-items: center;align-content: center; color: #333; }
.sv_newsTxBox > a > ul::before { content: url('images/SVS_IC.svg'); width: 13px; height: 13px; float: left; margin-right: 8px; }
.sv_newsBoxTpTT { width: 100%; height: 40px; font-size: 18px; color: #005180; font-weight: 600; line-height: 40px; }
.but_tabox,.but_tabox02 { width: 100%; height: auto; float: left; margin-top: 0px; display: flex; justify-content: center; align-content: center;-ms-align-items: center; align-items: center; margin-bottom: 50px; -webkit-flex-wrap: wrap;-moz-flex-wrap: wrap;-ms-flex-wrap: wrap;-o-flex-wrap: wrap; flex-wrap: wrap; }
.SV_bemo_butr { width: 100%; height: auto; float: left; font-size: 13px; color: #545454; margin-top: 20px;margin-bottom: 20px; }
.SV_bemo_butr > ul { float: left; margin-right: 10px; }
.SV_bemo_butr > ul > a { color: #004786; }
.SV_bemo_butr > ul.lineat > a { color: #61ca04; }
.SV_share_box { width: 100%; height: auto; display: inline-flex; justify-content: flex-end; align-content: center;-ms-align-items: center; align-items: center; }
.SV_share_LineB { width: auto; height: 30px; float: left; display: flex}
.SV_share_FBB { width: auto; height: 28px; float: left; margin-left: 8px; display: flex }
.SV_share_FBB span { vertical-align:top !important; }
.label > span.lang { font-size: 14px !important; }
.SVTT_srbox { width: 100%; display: inline-flex; justify-content: space-between; align-content: center; -ms-align-items: center; align-items: center;}
.SV_shrbox { width: auto; height: 62px; display: flex; justify-content: flex-end; align-content: center;-ms-align-items: center;align-items: center; padding-bottom: 10px; }
@media only screen and (min-width: 0px) and (max-width: 768px) {
    .WebNav { display: none; }
    .share_view_LfBox { width: 100%; margin-right: 0px; }
    .share_view_RfBox { width: 100%; margin-bottom: 50px; }
    .SV_bemo_butr { margin-bottom: 0px; }
    .newsview > li { margin: 0px; }
    .sv_newsBoxTpTT { padding-left: 10px; }
    .sv_newsBox { width: calc( 100% / 2 - 20px ); margin: 0px 10px; float: left; }
    .newsview { padding: 0px; }
    .but_tabox { justify-content: flex-start; }
    .but_tabox02{  justify-content: center; margin-bottom: 50px; }
    .SVTT_srbox { -webkit-flex-wrap: wrap;-moz-flex-wrap: wrap;-ms-flex-wrap: wrap;-o-flex-wrap: wrap;flex-wrap: wrap; justify-content: flex-start; }
    .SV_shrbox{ height: 40px; }
    .newsview > ul > h1.SV_TTX { width: 100%; }
    .title02-3,.title02-2 { width: 70%; }
    .title02-2 { margin: auto; }
    .solution01 li .spic .stxt { width: 100%; text-align: justify; }
    .service_cart ul { -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap; }
    .solution01 li .spic .stxt em { text-align: center; }
    .title04 { text-align: justify; }
    .title07 > p { width: 100%; }
    .intro-body .intro-text03 { width: 100%; }
    
}
.foot_jddt_qrc { width: 80px; height: 80px; float: left; }
.foot_jddt_qrc img { width: 100%; height: auto; float: left; }
.QrcB { display: block; }
footer .footer-line { display: none; }

@media screen and (max-width: 1270px) {
    .container07 { width: 1000px; }
        .hist_TBTXs, .hist_TBTXs02 { width: 270px;  }
        .hist_TB_CinLink01 { width: 84px; }
        .hist_TB_CinLink02 { width: 84px; }
        .hist_TBox01 { margin-left: 465px; }
        .hist_TBox03 { margin-left: 400px; }
        .hist_TBox02, .hist_TBox05 { margin-right: 466px; }
        .hist_TBox04 { margin-right: 400px; }
    .intro-body .intro-text { width: calc( 70% - 40px ); text-align: justify; position: relative; margin: auto; }
    .newSUC { display: none; }
    .newSUC02 {
        display: inline-flex;
        justify-content: center;
        align-content: center;
        -ms-align-items: center;
        align-items: center;
    }
}
@media screen and (max-width: 960px) {
    .title02-1, .title02-1hist { width: 184px; }
    .container07 { width: calc( 100% - 40px ); }
    .hist_TBox01,.hist_TBox03 { width: 50%; margin-left: calc( 50% - 30px ); -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap; }
    .hist_TBox02,.hist_TBox04,.hist_TBox05 { width: 50%; margin-right: calc( 50% - 30px ); -webkit-flex-wrap: wrap;
     -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
         -o-flex-wrap: wrap;
    flex-wrap: wrap;
    }
    .hist_TBTXs, .hist_TBTXs02 { width: 100%; margin-left: 0; }
    .hist_gsC01 { width: calc( 100% - 60px ); justify-content: center; margin-left: 60px; }
    .hist_TB_Cin02 { width: 150px; }
    .hist_TB_CinLink01,.hist_TB_CinLink02,.hist_TB_CinLink03 { width: calc( 100% - 30px ); height: 2px; }
    .hist_TBTXs, .hist_TBTXs02 { margin-top: 20px; }
    .histmb01 { order: 1; }
    .histmb02 { order: 2; }
    .histmb03 { order: 3; margin-right: auto; margin-left: inherit; }
    .histmb04 { order: 1; }
    .histmb05 { order: 2; }
    .about_hist02 { margin-bottom: 60px; }
    .hist_mbt02 { margin-top: -160px; }
    .hist_mbt03 { margin-top: -90px; }
    .hist_mbt04 { margin-top: -150px; }
    .hist_mbt05 { margin-top: -170px; }
    .hist_mbt06 { margin-top: -100px; }
    .hist_mbt07 { margin-top: -110px; }
    .hist_mbt08 { margin-top: -150px; }
    .hist_mbt09 { margin-top: -170px; }
    .hist_mbt10 { margin-top: -110px; }
    .hist_mbt11 { margin-top: -310px; }
    .hist_mbt12 { margin-top: -0px; }
    .hist_mbt13 { margin-top: -200px; }
    .hist_mbt14 { margin-top: -20px; }
    .hist_mbt15 { margin-top: -260px; }
    .hist_mbt16 { margin-top: -50px; }
    .hist_mbt17 { margin-top: -210px; }
    .hist_mbt18 { margin-top: -130px; }
    .hist_mbt19 { margin-top: -130px; }
    .hist_mbt20 { margin-top: -100px; }
    .hist_mbt21 { margin-top: -120px; }
    .hist_mbt22 { margin-top: -120px; }
    .hist_mbt23 { margin-top: -230px; }
    .hist_mbt24 { margin-top: -120px; }
    .intro-body .intro-text { width: calc( 60% - 40px ); font-size: 15px; }
    .QrcB { display: none; }
    footer .footer-line { padding-top: 20px; display: flex; justify-content: flex-start; text-align: left; color: #fff; align-content: center; -ms-align-items: center;
    align-items: center; }
    footer .footer-line_TX { font-size: 18px; color: #fff; margin-right: 10px; }
    footer .footer-top > li:nth-child(4) { padding-top: 20px; width: 100%; }
}
@media screen and (max-width: 480px) {
    .about_hist01 { width: 100%; background: url(images/history/history_chp01.png) no-repeat top left; }
    .about_hist02 { background: url(images/history/history_chp02.png) repeat-y top left; top: 29px; }
    .hist_TB_Cin { width: 20px; height: 20px; }
    .hist_TBox01, .hist_TBox03 { margin-left: 0px; width: 100%; }
    .hist_gsC01 {
    width: calc( 100% - 30px );
    justify-content: center;
    margin-left: 30px;
    }
    .hist_TBox02, .hist_TBox04, .hist_TBox05 { margin-right: 0px; width: 100%; }
    .hist_mbt02 { margin-top: -0px; }
    .hist_mbt03 { margin-top: -0px; }
    .hist_mbt04 { margin-top: -0px; }
    .hist_mbt05 { margin-top: -0px; }
    .hist_mbt06 { margin-top: -0px; }
    .hist_mbt07 { margin-top: -0px; }
    .hist_mbt08 { margin-top: -0px; }
    .hist_mbt09 { margin-top: -0px; }
    .hist_mbt10 { margin-top: -0px; }
    .hist_mbt11 { margin-top: -0px; }
    .hist_mbt12 { margin-top: -0px; }
    .hist_mbt13 { margin-top: -0px; }
    .hist_mbt14 { margin-top: -0px; }
    .hist_mbt15 { margin-top: -0px; }
    .hist_mbt16 { margin-top: -0px; }
    .hist_mbt17 { margin-top: -0px; }
    .hist_mbt18 { margin-top: -0px; }
    .hist_mbt19 { margin-top: -0px; }
    .hist_mbt20 { margin-top: -0px; }
    .hist_mbt21 { margin-top: -0px; }
    .hist_mbt22 { margin-top: -0px; }
    .hist_mbt23 { margin-top: -0px; }
  .hist_mbt24 { margin-top: -0px; }
    .histmb02 { order: 1; }
    .histmb01 { order: 2; }
    .hist_TB_Cin02 { line-height: 46px; border: 6px solid #fff; height: 60px; }
    .hist_gsC01 { margin-top: 15px; }
    .hist_TBox01, .hist_TBox02, .hist_TBox03, .hist_TBox04, .hist_TBox05 { padding-top: 26px; padding-bottom: 18px; }
    .intro-body .intro-text { width: calc( 100% - 40px ); }
    .Quick_form { width: 100%; padding: 20px; }
    .QF_txBox { width: 40%; }
    .about_box .txtbox p { text-align: justify; }
    .sv_newsBox { width: 100%; margin: 0px; }
}
@media screen and (max-width: 376px) {
    .QF_txBox { width: 44%; font-size: 14px; }
    footer .footer-top > li > ul > li + li { width: 100%; margin-left: 0px; }
    footer .footer-top > li > ul > li { width: 100%; }
} 
      body {background: url(<?php echo base_url('public/error/404_bg.gif')?>) repeat; font-family:"微軟正黑體", Arial, Helvetica, sans-serif,"新細明體";}
      
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
      <div class="e404 center" style="margin-top:5%;">
        <div style="margin:0 0 10px 0;"><img src="<?php echo base_url('public/error/404.png')?>"></div>
        <dd class="error">ERROR</dd>
        <dd class="text">此網頁不存在，請您點選下列網址，<br>進入首頁：<a href="<?php echo base_url()?>"><?php echo base_url()?></a></dd>
        <dd class="topbtn"><a class="btn" href="javascript:history.back(1)">返回到剛才的頁面 ></a></dd>
      </div>
   
  </body>
</html>
