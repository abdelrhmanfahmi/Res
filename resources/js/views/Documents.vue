<template>
    <div class="documents pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <i class="fa fa-times changeCloseIcon" @click="closeSidebar"></i>
                <ul class="sidebar-nav">
                    <li>
                        <router-link :to="'/favourite'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="firstLI"> <img :src="'assets/images/Heart1.svg'" alt=""> &nbsp;&nbsp;&nbsp;  Favourite</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/wallet'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="secondLI"> <img :src="'assets/images/Wallet.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Wallet</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/documents'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="thirdLI"> <i class="fa fa-file-alt" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;  Documents</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/referral'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fourthLI"> <img :src="'assets/images/noun_marketing_3993120.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Referral</a>
                        </router-link>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <span style="color:#888383;margin-left:20px;">help</span> </a>
                    </li>
                    <li>
                        <router-link :to="'/setting'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fifthLI"> <img :src="'assets/images/Setting.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Settings</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/support'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="sixthLI"> <img :src="'assets/images/Chat.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Support</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="sevenLI"> <img :src="'assets/images/Logout.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Log Out</a>
                        </router-link>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <i class="fa fa-arrow-right openSidebar" @click="openSidebar"></i>
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-12">
                            <h3 style="color:#38435B;">DOCUMENTS</h3>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/amadeusz-misiak-oXQT32eAMGE-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/ben-o-bro-wpU4veNGnHg-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/hohyeong-lee-e0uCDHd19U4-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/shea-rouda-Vtl6cOhO87Y-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/amadeusz-misiak-oXQT32eAMGE-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/ben-o-bro-wpU4veNGnHg-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/hohyeong-lee-e0uCDHd19U4-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/shea-rouda-Vtl6cOhO87Y-unsplash.png'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row d-flex bd-highlight">
                                        <div class="col-md-7 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span style="font-size:10px;">Apartment in Rafa</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-2 flex-fill bd-highlight">
                                            <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span style="font-size:11px;">London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-12 text-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">VIEW DOCUMENT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
export default {
    name:"Documents",
    mounted(){
        var namePage = document.URL.split("/")[4];
        // console.log(namePage);
        if(namePage == "favourite"){
            $('#firstLI').addClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "wallet"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').addClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "documents"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').addClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "referral"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').addClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "setting"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').addClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "support"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').addClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else{
            // console.log('none');
        }
    },
    methods:{
        closeSidebar:function(e){
            e.preventDefault();
            $('.openSidebar').css('display' , 'initial');
            $("#wrapper").toggleClass("toggled");
        },
        openSidebar:function(e){
            e.preventDefault();
            $('.openSidebar').css('display' , 'none');
            $('.changeCloseIcon').css('display' , 'initial');
            $("#wrapper").toggleClass("toggled");
        },
        submitForm:function(e){
            e.preventDefault();
            this.$router.push({ path: '/document/1' });
        },
    }
}

$(document).ready(function(){
    if($(window).width() == 1024){
        $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
        $('.zzzz').addClass('col-md-4');
    }
    if($(window).width() == 768){
        $('.zzzz').removeClass('col-md-3 col-md-4 col-md-6 ChangeCols');
        $('.zzzz').addClass('col-md-6');
    }
    if($(window).width() > 1090){
        $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
        $('.zzzz').addClass('col-md-4');
    }
    if($(window).width() > 1340){
        $('.zzzz').removeClass('col-md-4 col-md-6 col-md-3 ChangeCols');
        $('.zzzz').addClass('col-md-3');
    }

    var namePage = document.URL.split("/")[4];
    // console.log(namePage);
    if(namePage == "favourite"){
        $('#firstLI').addClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "wallet"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').addClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "documents"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').addClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "referral"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').addClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "setting"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').addClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "support"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').addClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else{
        // console.log('none');
    }

    $(window).on('resize' , function(){
        if($(window).width() == 1024){
            $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
            $('.zzzz').addClass('col-md-4');
        }
        if($(window).width() == 768){
            $('.zzzz').removeClass('col-md-3 col-md-4 col-md-6 ChangeCols');
            $('.zzzz').addClass('col-md-6');
        }
        if($(window).width() > 1090){
            $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
            $('.zzzz').addClass('col-md-4');
        }
        if($(window).width() > 1340){
            $('.zzzz').removeClass('col-md-4 col-md-6 col-md-3 ChangeCols');
            $('.zzzz').addClass('col-md-3');
        }
    });
});
</script>

<style scoped>
    .sidebar-nav li a.activeNow{
        color: #20966B;
        border-left: 3px solid #20966B;
        background-color: #F1F1F1;
    }
    .openSidebar{
        position:relative;
        right:0px;
        top:30px;
        display:none;
        cursor:pointer;
    }
    .changeCloseIcon{
        position:relative;
        right:-210px;
        top:-3px;
        cursor:pointer;
    }
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: absolute;
        top:100px;
        left: 250px;
        width: 0;
        height: 458px;
        margin-left: -250px;
        border-right:1px solid #eee;
        overflow-y: auto;
        background: #fff;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 178px;
        margin: 0;
        padding: 2px;
        list-style: none;
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 57px;
        width:200px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #000;
        width:200px;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #20926B;
        background-color: #F1F1F1;
        border-left:3px solid #20926B;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
        border-left:3px solid #20926B;
    }

    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }

    .sidebar-nav > .sidebar-brand a {
        color: #20926B;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
        border-left:4px solid #20926B;
    }

    
    #wrapper {
        padding-left: 192px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 230px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }

    @media screen and (min-width: 1025px) and (max-width: 1340px){
        #wrapper{
            padding-left:0px;
        }
    }

    @media only screen and (width : 1024px){
        #wrapper{
            padding-left:0px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        #wrapper{
            padding-left:0px;
        }
    }

    @media (max-width: 500px){
        #wrapper{
            padding-left:0px;
        }
        .inMobileChange{
            justify-content: center !important;
        }
    }
    @media only screen and (width:414px){

    }
    @media only screen and (width:412px){
        
    }
    @media only screen and (width:411px){
        
    }
    @media only screen and (width:393px){

    }
    @media only screen and (width:360px){
        
    }
    @media only screen and (width:320px){
        .ChangeCols2{
            width:264px;
        }
    }
</style>