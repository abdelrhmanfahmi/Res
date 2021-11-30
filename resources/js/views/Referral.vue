<template>
    <div class="referral pt-5">
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
                            <a href="javascript:void(0);" id="thirdLI"> <img :src="'assets/images/Document.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Documents</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/referral'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fourthLI"> <i class="fa fa-bullhorn" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;  Referral</a>
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
                            <h3 style="color:#38435B;">Referral</h3>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                                <div class="card-body" style="padding:15px;">
                                    <span class="p-3" style="color:#868181;">Maximize your monthly earnings by inviting your friends to stick. We have a lot of advantages in our referral program</span>
                                    <div class="quodrant">
                                        <div class="qtop">
                                            <div class="row p-3">
                                                <div class="col-md-6 mb-3">
                                                    <h5>Total Referrals</h5>
                                                    <i class="fa fa-user"></i> &nbsp; 156
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <h5>Amount Earned</h5>
                                                    <i class="fa fa-coins"></i> &nbsp; 400 <span style="color:#20926B;">SAR</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="verticalLine">
                                        <div class="qbottom">
                                            <div class="row p-3">
                                                <div class="col-md-6 mb-3">
                                                    <h5>Your Referral Link</h5>
                                                    <form class="myFormFooter">
                                                        <input type="url" name="referral_link" id="referral_link" class="form-control" placeholder="https://getstake.com/signupref">
                                                        <button @click="submitForm" id="btnCopy">Copy</button>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <h5 class="mb-3">Share Your Referral Link</h5>
                                                    <a href="javascript:void(0);" class="hover-fade-out">
                                                        <!-- <i class="fab fa-twitter icon icon-xs" style="color:#fff;font-size:19px;"></i> -->
                                                        <img :src="'assets/images/Group 16848.svg'" width="40px" height="50px" alt="">
                                                    </a>
                                                    &nbsp;|&nbsp;
                                                    <a href="javascript:void(0);" class="hover-fade-out">
                                                        <!-- <i class="fab fa-facebook icon icon-xs" style="color:#fff;font-size:19px;"></i> -->
                                                        <img :src="'assets/images/Group 16849.svg'" width="40px" height="50px" alt="">
                                                    </a>
                                                    &nbsp;|&nbsp;
                                                    <a href="javascript:void(0);" class="hover-fade-out">
                                                        <!-- <i class="fab fa-whatsapp icon icon-xs" style="color:#fff;font-size:20px;"></i> -->
                                                        <img :src="'assets/images/whatsapp-svgrepo-com.svg'" width="40px" height="50px" alt="">
                                                    </a>
                                                    &nbsp;|&nbsp;
                                                    <a href="javascript:void(0);" class="hover-fade-out">
                                                        <!-- <i class="fab fa-linkedin icon icon-xs" style="color:#fff;font-size:20px;"></i> -->
                                                        <img :src="'assets/images/Group 16845.svg'" width="40px" height="50px" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-12">
                            <h3 style="color:#38435B;">REFERRED USERS</h3>
                            <div class="card">
                                <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                                <div class="card-body" style="padding:0px;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="50%">Users</th>
                                                <th>Date</th>
                                                <th>Amount Earned</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>5/11/2021</td>
                                                <td>50 SAR</td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>5/11/2021</td>
                                                <td>50 SAR</td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>5/11/2021</td>
                                                <td>50 SAR</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    name:"Referral",
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
        },
    }
}

$(document).ready(function(){
    if($(window).width() <= 500){
        $('.table').addClass('table-responsive');
    }else{
        $('.table').removeClass('table-responsive');
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
        if($(window).width() <= 500){
            $('.table').addClass('table-responsive');
        }else{
            $('.table').removeClass('table-responsive');
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
    .verticalLine{
        width: 1px;
        height: 227px;
        position: absolute;
        display: inline-block;
        right: 600px;
        top: 34px;
    }
    .quodrant{
        border-top:1px solid #eee;
        border-bottom:1px solid #eee;
    }
    .qtop{
        border-bottom:1px solid #eee;
    }
    .linkedin{
        border: 1px solid #0A66C2;
        border-radius: 30px;
        padding: 9px;
        background-color: #0A66C2;
    }
    .twitter{
        border: 1px solid #1DA1F2;
        border-radius: 25px;
        padding: 9px;
        background-color:#1DA1F2;

    }
    .facebook{
        border: 1px solid blue;
        border-radius: 25px;
        padding: 9px;
        background-color:blue;
    }
    .whatsapp{
        border: 1px solid green;
        border-radius: 25px;
        padding: 9px;
        background-color:green;
    }
    .footerForm{
        position:relative;
        /* right:15px; */
    }
    #referral_link {
        margin: 0px;
        padding: 0px;
        width: 360px;
        outline: none;
        height: 45px;
        border-radius: 20px;
    }
      
    #btnCopy {
        position: absolute;
        top: 30px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        border-top-left-radius: 18px;
        width:80px;
        right: 150px;
        z-index: 2;
        padding:10px;
        border: none;
        height: 45px;
        cursor: pointer;
        color: white;
        background-color: #20926B;
        transform: translateX(2px);
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
        right:-230px;
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
        height: 460px;
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
        width: 250px;
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
        #btnCopy{
            position:relative;
            right:-280px;
            top:-45px;
        }
        .verticalLine{
            position: absolute;
            right: 490px;
            top: 49px;
            height: 275px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        #wrapper{
            padding-left:0px;
        }
        #referral_link{
            position:relative;
            width:250px;
        }
        #btnCopy{
            position:relative;
            right:-170px;
            top:-45px;
        }
        .verticalLine{
            position:absolute;
            right:370px;
            top:73px;
            height:275px;
        }
    }

    @media (max-width: 500px){
        #wrapper{
            padding-left:0px;
        }
        .inMobileChange{
            justify-content: center !important;
        }
        #referral_link{
            position:relative;
            width:250px;
        }
        #btnCopy{
            position:relative;
            right:-170px;
            top:-45px;
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
        #referral_link{
            position:relative;
            width:180px;
        }
        #btnCopy{
            position:relative;
            right:-120px;
            top:-45px;
        }
    }
</style>