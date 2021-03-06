<?php
/**
 * Twitter&reg; Bootstrap Theme for Elgg
 *
 * Converts all Elgg css elements to Twitter&reg; Bootstrap elements.  Helps 
 * Designers create beautiful Bootstrap themes for Elgg.
 *
 * PHP version 5.6
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Elgg Themes
 * @author     Nur Alam
 * @copyright  2017 SocialApparatus
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0
 */
?>
<style> /**/


    .elgg-widget-content {
        padding:0;
    }
    .elgg-widget-title {
        margin-bottom:0px;
    }
    h3 {
        font-size:19px;
    }
    .elgg-page-header {
        padding:10px 0px 10px 0px;
    }
    .panel-primary .panel-heading a,
    .panel-success .panel-heading a,
    .panel-info .panel-heading a,
    .panel-warning .panel-heading a,
    .panel-danger .panel-heading a {
        color:#ffffff;
    }

    /* ***************************************
            MISC
    *****************************************/
    #dashboard-info {
        border: 1px solid #DCDCDC;
        margin: 0 10px 15px;
    }
    .elgg-sidebar input[type=text],
    .elgg-sidebar input[type=number],
    .elgg-sidebar input[type=password] {
        box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    .elgg-module .elgg-list-river {
        border-top: none;
    }
    .elgg-module > .elgg-body > .elgg-list, /* margin for group modules */
    .elgg-module .elgg-widget-content > .elgg-list { /* margin for profile and dashboard widgets */
        margin-top: 0;
    }
    /* ***************************************
            ICONS
    *****************************************/
    .elgg-icon-hover-menu-hover,
    .elgg-icon-hover-menu,
    .elgg-icon-hover-menu:hover,
    :focus > .elgg-icon-hover-menu {
        width: 100%;
        height: 100%;
    }
    .elgg-icon-hover-menu-hover:before,
    .elgg-icon-hover-menu:before {
        position: absolute;
        bottom: 0;
        right: 0;
    }
    /* ***************************************
            RESPONSIVE
    *****************************************/
    html {
        font-size: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    .elgg-button-nav {
        display: none;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        color: #FFF;
        float: left;
        padding: 10px 18px;
    }
    .elgg-button-nav:hover {
        color: #FFF;
        text-decoration: none;
        background-color: #60B8F7;
    }
    .elgg-button-nav .elgg-icon-bars {
        font-size: 18px;
        color: #fff;
        vertical-align: middle;
    }
    @media (max-width: 1030px) {
        .elgg-menu-topbar-default > li:first-child a {
            margin-left: 0;
        }
        .elgg-page-footer {
            padding: 0 20px;
        }
    }
    @media (max-width: 820px) {
        .elgg-page-default {
            min-width: 0;
        }
        .elgg-page-body {
            padding: 0;
        }
        .elgg-main {
            padding: 12px 20px 10px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .elgg-layout-one-sidebar .elgg-main,
        .elgg-layout-two-sidebar .elgg-main {
            width: 100%;
        }
        .elgg-sidebar {
            border-left: none;
            border-top: 1px solid #DCDCDC;
            border-bottom: 1px solid #DCDCDC;
            background-color: #FAFAFA;
            width: 100%;
            float: left;
            padding: 27px 20px 20px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05) inset;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .elgg-sidebar-alt {
            display: none;
        }
        .elgg-page-default .elgg-page-footer > .elgg-inner {
            border-top: none;
        }
        .elgg-menu-footer {
            float: none;
            text-align: center;
        }
        .elgg-menu-page,
        .elgg-sidebar .elgg-menu-owner-block,
        .elgg-menu-groups-my-status {
            border-bottom: 1px solid #DCDCDC;
        }
        .elgg-menu-page a,
        .elgg-sidebar .elgg-menu-owner-block li a,
        .elgg-menu-groups-my-status li a {
            border-color: #DCDCDC;
            border-style: solid;
            border-width: 1px 1px 0 1px;
            margin: 0;
            padding: 10px;
            background-color: #FFFFFF;
        }
        .elgg-menu-page a:hover,
        .elgg-sidebar .elgg-menu-owner-block li a:hover,
        .elgg-menu-groups-my-status li a:hover,
        .elgg-menu-page li.elgg-state-selected > a,
        .elgg-sidebar .elgg-menu-owner-block li.elgg-state-selected > a,
        .elgg-menu-groups-my-status li.elgg-state-selected > a {
            color: #444;
            background-color: #F0F0F0;
            text-decoration: none;
        }
        .elgg-river-item input[type=text] {
            width: 100%;
        }
        .elgg-river-item input[type=submit] {
            margin: 5px 0 0 0;
        }
        /***** CUSTOM INDEX ******/
        .elgg-col-1of2 {
            float: none;
            width: 100%;
        }
        .prl {
            padding-right: 0;
        }
        /***** WIDGETS ******/
        .elgg-col-1of3,
        .elgg-col-2of3,
        #elgg-widget-col-1,
        #elgg-widget-col-2,
        #elgg-widget-col-3 {
            float: none;
            min-height: 0 !important;
            width: 100%;
        }
        .elgg-module-widget {
            margin: 0 0 15px;
        }
        .custom-index-col1 > .elgg-inner,
        .custom-index-col2 > .elgg-inner {
            padding: 0;
        }
        #dashboard-info {
            margin: 0 0 15px;
        }
    }
    @media (min-width: 767px) {
        .elgg-nav-collapse {
            display: block !important;
        }
    }
    @media (max-width: 766px) {
        .elgg-page-header > .elgg-inner h1 {
            padding-top: 10px;
        }
        .elgg-heading-site, .elgg-heading-site:hover {
            font-size: 1.6em;
        }
        .elgg-button-nav {
            cursor: pointer;
            display: block;
        }
        .elgg-nav-collapse {
            clear: both;
            display: none;
            width: 100%;
        }
        #login-dropdown a {
            padding: 10px 18px;
        }
        .elgg-menu-site {
            float: none;
        }
        .elgg-menu-site > li > ul {
            position: static;
            display: block;
            left: 0;
            margin-left: 0;
            border: none;
            box-shadow: none;
            background: none;
        }
        .elgg-more,
        .elgg-menu-site-more li,
        .elgg-menu-site > li > ul {
            width: auto;
        }
        .elgg-menu-site ul li {
            float: none;
            margin: 0;
        }
        .elgg-more > a {
            border-bottom: 1px solid #294E6B;
        }
        .elgg-menu-site > li {
            border-top: 1px solid #294E6B;
            clear: both;
            float: none;
            margin: 0;
        }
        .elgg-menu-site > li:first-child {
            border-top: none;
        }
        .elgg-menu-site > li > a {
            padding: 10px 18px;
        }
        .elgg-menu-site-more > li > a {
            color: #FFF;
            background: none;
            padding: 10px 18px 10px 30px;
        }
        .elgg-menu-site-more > li:last-child > a,
        .elgg-menu-site-more > li:last-child > a:hover {
            border-radius: 0;
        }
        .elgg-menu-site-more > li.elgg-state-selected > a,
        .elgg-menu-site-more > li > a:hover {
            background-color: #60B8F7;
            color: #FFF;
        }
    }
    @media (max-width: 600px) {
        .groups-profile-fields {
            float: left;
            padding-left: 0;
        }
        #profile-owner-block {
            border-right: none;
            width: auto;
        }
        #profile-details {
            display: block;
            float: left;
        }
        #groups-tools > li {
            width: 100%;
            margin-bottom: 20px;
        }
        #groups-tools > li:nth-child(odd) {
            margin-right: 0;
        }
        #groups-tools > li:last-child {
            margin-bottom: 0;
        }
        .elgg-menu-entity, .elgg-menu-annotation {
            margin-left: 0;
        }
        .elgg-menu-entity > li, .elgg-menu-annotation > li {
            margin-left: 0;
            margin-right: 15px;
        }
        .elgg-subtext {
            float: left;
            margin-right: 15px;
        }
    }

/***********************************************************************************************************************/
/***********custom all css in this plugin******************************************************************************/
/*********************************************************************************************************************/
html{
    min-height:100%;
    position: relative;
}
body {
    margin:0 0 36px 0;
    padding-bottom: 6rem;
    min-height: 100%;
    font-family: Lato;
    color: #063A54;
    background-color: #F2F4F7 !important;
}
body>div#pages_only{
    margin:0 0 36px 0;
    padding-bottom: 6rem !important;
    min-height: 100%;
    font-family: Lato;
    color: #063A54;
    background-color: #FFFFFF !important;
}

a{
    color: #063A54;
    font-weight: bold;
}
/*****************************topbar******/
div.elgg-page-topbar>div.elgg-inner{
    display:none;
}
/**/
/* *** for footer *** */
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: .5px;
    border-color: #E1E4EA;
} 

#footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    width:100%;
    height: 36px;   
    text-align: center;
    background-color: #FFFFFF !important;
    /* padding: 1rem;
    background-color: #efefef; */
    
}
#footer-text{
    margin-top: 10px;

}
form.elgg-search.elgg-search-header{
    visibility: hidden !important;
    /* display: none; */
}
/* *** for navbar header*** */
.navbar.navbar-default.navbar-custom {
    font-family: 'Lato', sans-serif;
    color: #FFFFFF !important;
    background-color: #CC1962;
    /* background-repeat: no-repeat; */
}
.navbar-default .navbar-nav>li>a{
    color: #FFFFFF !important;
    font-weight: normal;
    line-height: 27px;
}
.navbar-left>li>a{
    color: #FFFFFF !important;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
    background-color: transparent;
    text-decoration-line: underline;
    text-decoration-style: solid;
    text-underline-position: under;
    /* padding-bottom: 3px;
    border-bottom: 1px solid #fff; */
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
    background-color: transparent;
    text-decoration-line: underline;
    text-decoration-style: solid;
    text-underline-position: under;
}
.navbar-inverse .navbar-nav>li>a:hover{
    background-color:#000000;
    opacity: 0.1;
}
.navbar-inverse .navbar-nav>li>a{
    color: #FFFFFF !important;
    font-weight: normal;
    line-height: 27px;
}
.navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
.collapse.navbar-collapse  {
width: 100%;
text-align: center;
}
.collapse.navbar-collapse>ul.navbar-nav {
float: none;
display: inline-block;
}
/* .elgg-page-body {
padding: 0 20px;
background: #F2F4F7;
} */
ul.nav.navbar-nav.navbar>li.elgg-menu-item-blog{
    display: none;
}
/* ul.nav.navbar-nav.navbar>li.elgg-menu-item-thewire{
    position: absolute;
    visibility: hidden;
}
ul.nav.navbar-nav.navbar>li.elgg-menu-item-thewire:after {
  content: 'Aggiornamenti di stato';
  visibility: visible;
} */
.navbar-inverse {
    background-color: #CC1962;
    border-color: #CC1962;
}

/* ******************************************** for nav tabs **************************** */
.nav-tabs {
    border-bottom: 4px solid #033046;
}
.nav-tabs>li{
    min-width: 147px;
    min-height: 40px;
    text-align: center;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
    color: #fff;
    background-color: #033046;
    border: 1px solid #033046;
}
.nav-tabs>li>a {
    margin-right: 0px;
    color: #063A54;
    background-color: #FFFFFF;
    border: 1px solid #8EA5B1;
    border-radius: 0 0 0 0;
    /* Only round the top corners */
    /* -webkit-border-top-left-radius: 8px;
    -webkit-border-top-right-radius: 8px;
    -moz-border-radius-topleft: 8px;
    -moz-border-radius-topright: 8px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px; */

}
.nav-tabs>li:first-child a{
    /* border-top-left-radius: 8px; */
    border-radius: 8px 0 0 0;
}
.nav-tabs>li:last-child a{
    /* border-top-right-radius: 8px; */
    border-radius: 0 8px 0 0;
}
/******************************************All page ***********************************/
.elgg-heading-main{
    font-weight: bold;
    font-size: 36px;
}
.elgg-avatar.elgg-avatar-tiny>a>img{
    border-radius: 50%;
    width: 32px;
    height: 32px;
}
.elgg-image>.elgg-avatar.elgg-avatar-tiny>a>img{
    border-radius: 50%;
    width: 60px;
    height: 60px;
}
.elgg-river-attachments .elgg-icon-arrow-right {
    margin: 8px 8px 0;
}
.elgg-image>a>img{
    border-radius: 50%;
    width: 60px;
    height: 60px;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-access{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-edit{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-delete{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-reply{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-previous{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-thread{
    display: none;
}
#cke_1_top{
    display: none;
}
#cke_1_bottom{
    display: none;
}
#thewire-submit-button{
    color: #fff;
    background-color: #063A54;
    border-color: #063A54;
    margin-left: 87%;
    width: 147px;
    height: 40px;
    margin-bottom: 15px;
}
.elgg-head.clearfix>.elgg-menu.elgg-menu-title.elgg-menu-hz.elgg-menu-title-default>.elgg-menu-item-add>.elgg-menu-content.btn.btn-warning{
    color: #fff;
    /* background-color: #063A54;
    border-color: #063A54; */
    /* margin-left: 87%; */
    width: 158px;
    height: 40px;
    margin-bottom: 15px;
}
#cke_thewire-textarea{
    /* height:100px; */
}
.form-group>#cke_thewire-textarea>.cke_inner.cke_reset>#cke_1_contents{
    hight:100px !important;
}
.elgg-menu.elgg-menu-longtext.elgg-menu-hz.elgg-menu-longtext-default>li.elgg-menu-item-ckeditor-toggler>a.elgg-menu-content.ckeditor-toggle-editor.elgg-longtext-control{
    display: none !important;
}
/******************************************Elgg River ***********************************/
/*header and combo box in one line*/
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main>.clearfix{
    display: inline-block;
    overflow: hidden;
    float:right;
    /* border: 1px solid aqua; */
    margin-top: -4px;
}
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main>.clearfix>.elgg-river-selector>span{
    float: left;
    padding-top: 13px;
    font-size: 14px;
    font-family: Lato, Regular;
}
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main>.clearfix>.elgg-river-selector>.form-group{
    float: right;
    width: 244px;
    height: 40px;
    margin-bottom: 0px;
}
#elgg-river-selector{
    height: 40px;
    color: #063A54;
    border-color: #b4c3cb;
}
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main{
    overflow: hidden;
    /* border: 1px solid red; */
    margin-bottom: 107px;
    padding-top: 10px;
}
.elgg-river-layout .elgg-river-selector{
    margin: 0px 5px;
}
    /* remove the original arrow */
    select{
        /* -webkit-appearance: none; */
        /* -moz-appearance: none;
        -o-appearance: none;
        appearance: none;  */
        /* background-color: #92ceea!important; */

        /* content: "\f107"; */
     }

    select::-ms-expand {
        /* display: none; */
    }

    select + i.fa {
        /* float: right;
        margin-top: -26px;
        margin-right: 10px; */
        /* this is so when you click on the chevron, your click actually goes on the dropdown menu */
        /* pointer-events: none; */
        /* everything after this is just to cover up the original arrow */
        /* (for browsers that don't support the syntax used above) */
        /* background-color: transparent;
        color:black!important;
        padding-right: 5px; */
    }

   select option{
       /* padding-right: 21px; */
   }

/*dropdrow arrow sign*/
.form-group {
  position: relative;
}

.form-group:after {
    content: '\f107';
    font: normal normal normal 18px/1 FontAwesome;
    color: #033046;
    right: 6px;
    top: 6px;
    /* height: 34px; */
    padding: 5px 0px 0px 0px;
    /* border-left: 1px solid #033046; */
    position: absolute;
    pointer-events: none;
}


/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
display: none;
}

.form-group select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

}
option {
    font-weight: normal;
    font-size: 15px;
    display: block;
    white-space: pre;
    min-height: 1.2em;
    padding-top: 8.5px;
    padding-right: 2px;
    padding-bottom: 8.5px;
    padding-left: 11px;
}
/**/
.elgg-menu-item-add{
    padding-top: 12px;
    /* white-space: normal; */
}
/* END */
/***************************pagination************************/
    .pagination{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }
    .pagination>li {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%;
    }
    .pagination>li>a, .pagination>li>span {
        color : #063A54;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #033046;
        border-color: #033046;
    }
/*END pagination*/
/******************************elgg-body padding */
    .elgg-image-block .elgg-image {
        /* padding-left:5px; */
        margin-right: 0px;
    }
    .elgg-image-block {
        padding: 24px 18px 20px 18px;
    }
    .elgg-body{
        padding-left: 18px;
    }
/*END */
/*************************card*/
    .panel-body {
    padding: 0px;
    }
    .panel-default>.panel-heading {
        color: #333;
        background-color: #063A54;
        border-color: #063A54;
    }
    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 18px;
        color: #FFFFFF;
    }
    .elgg-widget-content {
        padding: 0px;
    }
    .elgg-widget-title {
        margin-left: 20px;
        font-size: 18px;
        color: #FFFFFF;
    }
/*END Card*/
/**********************image in elgg-river-message*/
    .elgg-river-message>font{
        float: left;
        width: 50%;
        padding: 5px;
    }
    .elgg-river-message>a{
        float: left;
        width: 50%;
        padding: 5px;
    }
/*END*/

/********************************************Dropdown menu*************************/
    /* caret style */
        .caret {
            position: relative;
        }

    /* dropdown style */
        .dropdown.open .caret:before,
        .dropdown.open .caret:after {
        content: "";
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        border-width: 7px 8px;
        border-style: solid;
        border-color: transparent;
        z-index: 1001;
        }
        .dropdown.open .caret:before {
        bottom: -17px;
        right: -8px;
        border-bottom-color: #ccc;
        }
        .dropdown.open .caret:after {
        bottom: -18px;
        right: -8px;
        border-bottom-color: #fff;
        }

    /* navbar style */
    .navbar-nav > li > .dropdown-menu {
    /* border-top-left-radius: 4px;
    border-top-right-radius: 4px; */
    border-radius: 6px;
    border: 1px solid #8EA5B1;
    box-shadow: 0 6px 12px #CDD2DB;
    }
    .navbar-nav > .open > a .caret:before {
    bottom: -30px;
    }
    .navbar-nav > .open > a .caret:after {
    bottom: -30px;
    }
    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 15px;
        vertical-align: middle;
        border-top: 0px dashed;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
        /* display:none; */
    }
.dropdown>a:after {
    content: '\f107';
    font: normal normal normal 18px/1 FontAwesome;
    color: #033046;
    right: 20px;
    top: 20px;
    /* height: 34px; */
    /* padding: 5px 0px 0px 0px; */
    /* border-left: 1px solid #033046; */
    position: absolute;
    pointer-events: none;
}

.dropdown>a select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

}
    .dropdown-menu .divider {
        height: 1px;
        margin: 4px 0;
        overflow: hidden;
        background-color: #8EA5B1;
    }
    .dropdown-menu>li>a {
        font-size: 15px;
        color: #063A54;
        font-family: Lato, Bold;
        font-weight: bold;
    }
    /* .dropdown-menu>li: hover {
        display: block;
        background-color:#D9E1E5;
    } */
    .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
        color: #063A54;
        text-decoration: none;
        background-color: #D9E1E5;
    }
    .dropdown.open .caret:before, .dropdown.open .caret:after {
        border-width: 12px 8px;
    }
    .navbar-nav > .open > a .caret:after {
        bottom: -30px;
    }
/*END Dropdown*/
/**********************down-up fortawesome*/
/*UP*/
a.elgg-widget-collapse-button:before {
    font-family: FontAwesome;
    content: "\f106";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
}
/*Down*/
a.elgg-widget-collapsed:before {
    /* content: "\25BA"; */
    font-family: FontAwesome;
    content: "\f107";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
}
/*end*/
/***********************************profile**************/
    #profile-owner-block {
        width: 200px;
        float: left;
        background-color: #eee;
        padding: 0px;
    }
    /*circle of the avatar image in profile*/
    .elgg-avatar-large > a > img{
        border-radius: 50%;
    }
    /*end*/
    /*Menu*/
    .elgg-menu.profile-action-menu.mvm > li > a {
        display: block;
        white-space: normal;
        margin: 2px;
        background-color: transparent;
        border-color: transparent;
        color: #063A54;
        font-size: 15px;
        font-family: Lato, Bold;
        font-weight: bold;
        text-align: left;
    }
    .elgg-menu.profile-action-menu.mvm > li > a:hover {
        background-color: #F2F4F7;
        width:100%;
    }
    .nav.nav-pills.nav-stacked> li > a:hover {
        background-color: #F2F4F7;
        width:100%;
    }
    .elgg-image-alt>a{
        background-color: #063A54;
        border-color: #063A54;
    }
    .elgg-image-alt>a:hover{
        background-color: #063A54;
        border-color: #063A54;
    }
    .elgg-widget-add-control>a{
        background-color: #063A54;
        border-color: #063A54;
    }
    .elgg-widget-add-control>a:hover{
        background-color: #063A54;
        border-color: #063A54;
    }
    /*****************edit image******/
    .btn-warning {
        color: #FFFFFF;
        background-color: #CC1962;
        border-color: #CC1962;
    }
    .btn-warning:hover {
        color: #FFFFFF;
        background-color: #E62F7A;
        border-color: #E62F7A;
    }
    .btn-warning:focus {
        color: #FFFFFF;
        background-color: #E62F7A;
        border-color: #91033D;
    }
    .btn-warning:active {
        color: #FFFFFF !important;
        background-color: #91033D !important;
        border-color: #91033D !important;
    }
    .btn-success {
        color: #fff;
        background-color: #063A54;
        border-color: #063A54;
    }
    .btn-success:hover {
        color: #fff !important;
        background-color: #12839E !important;
        border-color: #12839E !important;
    }
    .btn-success:focus {
        color: #fff !important;
        background-color: #12839E !important;
        border-color: #063A54 !important;
    }
    .btn-success:active {
        color: #fff !important;
        background-color: #033046 !important;
        border-color: #033046 !important;
    }
    .mll, .mhl {
        margin-left: 0px;
        margin-top: 20px
    }
    .elgg-foot>input{
        margin-top: 20px;
    }
/********END profile********/
/***********************page**********************/

.elgg-menu-item-subpage{
    padding-top: 20px;
}

.breadcrumb>li+li:before {
    padding: 0 10px;
    content: ">";
    width: 6px;
    height: 14px;
    color: #063A54;
    opacity: 0.5;
}
.elgg-output>p>img{
    float: left;
    margin:5px;
}
.breadcrumb{
    position: absolute;
    padding: 65px 0px;
    margin-bottom: 20px;
    list-style: none;
    background-color: transparent;
    border-radius: 4px;
    font-size: 14px;
    font-family: Lato;
    text-align: left;
}
.elgg-head.clearfix{
    margin-bottom:50px;
}
/* div.elgg-page.elgg-page-default>div.container.body>div>div.elgg-head.clearfix>h2.elgg-heading-main{
    position: absolute; */
    /* font-size: 36px;
    font-family: Lato;
    text-align: left;
} */
div.elgg-image-block.clearfix.elgg-listing-full-header {
    padding: 50px 5px 20px 0px;
}
.elgg-form.elgg-form-pages-edit{
    padding-top: 50px;
}
/*end page*/
div.panel-body>h2{
    margin-left: 14px;
}
.elgg-gallery-users > li {
    margin: 5px 10px;
}
/*********************************group*******/
div>form.elgg-form.elgg-form-alt.elgg-form-groups-edit{
    padding-top:50px;
}

.elgg-field>input{
    /* background-color: #063A54;
    border-color: #063A54; */
}
.elgg-field>input:hover {
    /* background-color: #063A54;
    border-color: #063A54; */
}
/***end group*/
/******************************file*****/
div>form.elgg-form.elgg-form-file-upload{
    padding-top:50px;
}
.elgg-menu-item-download>a{
    background-color: #063A54;
    border-color: #063A54;
}
.elgg-menu-item-download>a:hover{
    background-color: #063A54;
    border-color: #063A54;
}
.elgg-menu-item-download{
    padding-top: 15px;
}
/***end file**/
/*********************************bookmark***/
div>form.elgg-form.elgg-form-bookmarks-save{
    padding-top:50px;
}
/*********end bookmark*/
.elgg-avatar.elgg-avatar-small>a>img{
    border-radius: 50%;
    width: 60px;
    height: 60px;
}
.elgg-river-layout .elgg-list-river {
    border-top: 0px solid #DCDCDC;
}

.elgg-list {
    margin: 0px 0;
    /* margin-left: 2px; */
    border: 1px solid #8EA5B1;
    background-color: #FFFFFF;
    border-radius: 0px 0px 8px 8px;
    box-shadow: 0px 7px 24px #d5dde1;
}
.elgg-list > li {
    border-bottom: 1px solid #E1E4EA;
}

.elgg-body>.elgg-river-summary{
    font-size: 13px;
}
.elgg-body>.elgg-river-attachments, .elgg-river-message, .elgg-river-content {
    border-left: 0px solid #DCDCDC;
    margin: 8px 0 5px 0;
    padding-left: 0px;
    font-size: 16px;
}
.elgg-body>.elgg-river-timestamp {
    color: #063A54;
    opacity: 0.6;
    font-family: Lato, Regular;
    font-size: 14px;
    font-style: normal;
    line-height: 14px;
    padding-right: 44px;
}
.elgg-body>.elgg-river-like{
    color: #063A54;
    opacity: 0.6;
    font-family: Lato, Regular;
    font-size: 14px;
    font-style: normal;
    line-height: 14px;
    padding-right: 44px;
}
.elgg-body>.elgg-river-comment{
    color: #063A54;
    opacity: 0.6;
    font-family: Lato, Regular;
    font-size: 14px;
    font-style: normal;
    line-height: 14px;
    padding-right: 44px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-comment>a>span:after{
    content: "Commenta";
    color: #063A54;
    opacity: 1.0;
    font-family: Lato;
    font-size: 14px;
    font-weight: Bold;
    line-height: 14px;
    padding-right: 14px;
    padding-left: 10px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-likes>a>span:after{
    content: "Mi Piace";
    color: #063A54;
    opacity: 1.0;
    font-family: Lato;
    font-size: 14px;
    font-weight: Bold;
    line-height: 14px;
    padding-right: 14px;
    padding-left: 10px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-unlike>a>span:after{
    content: "Mi Piace";
    color: #063A54;
    opacity: 1.0;
    font-family: Lato;
    font-size: 14px;
    font-weight: Bold;
    line-height: 14px;
    padding-right: 14px;
    padding-left: 10px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-likes-count{
    display: none;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-delete{
    display: none;
}
/* ***********************************for font: Lato. *********************************/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

</style>