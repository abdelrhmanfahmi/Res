<template>
    <div class="setting pt-5">
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
                            <a href="javascript:void(0);" id="firstLI"> <i class="fa fa-heart"></i> &nbsp;&nbsp;&nbsp;  Favourite</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/wallet'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="secondLI"> <i class="fa fa-wallet"></i> &nbsp;&nbsp;&nbsp;  Wallet</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/documents'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="thirdLI"> <i class="fa fa-file"></i> &nbsp;&nbsp;&nbsp;  Documents</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/referral'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fourthLI"> <i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;  Referral</a>
                        </router-link>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <span style="color:#888383;margin-left:20px;">help</span> </a>
                    </li>
                    <li>
                        <router-link :to="'/setting'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fifthLI"> <i class="fa fa-cog"></i> &nbsp;&nbsp;&nbsp;  Settings</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/support'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="sixthLI"> <i class="fa fa-comment"></i> &nbsp;&nbsp;&nbsp;  Support</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="sevenLI"> <i class="fa fa-sign-out-alt"></i> &nbsp;&nbsp;&nbsp;  Log Out</a>
                        </router-link>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <i class="fa fa-arrow-right openSidebar" @click="openSidebar"></i>
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-12">
                            <h3 style="color:#38435B;">Settings</h3>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <form class="settingForm">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Current Password</label>
                                        <input type="password" name="currentPassword" id="currentPassword" class="form-control" placeholder="*****************">
                                    </div>
                                    <div class="col mb-3">
                                        <label>New Password</label>
                                        <input type="password" name="newPassword" id="newPassword" class="form-control" placeholder="*****************">
                                    </div>
                                    <div class="col mb-3">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="*****************">
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-6 mb-3 inMobileChange d-flex justify-content-start">
                                        <button @click="submitForm" class="btn w-50" style="background-color:#20926B;border-radius:15px;">
                                            <span style="color:#fff;">CONFIRM</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6 mb-3 inMobileChange d-flex justify-content-end">
                                        <button @click="submitForm" class="btn w-50" style="background-color:#20926B;border-radius:15px;">
                                            <span style="color:#fff;">EDIT PROFILE</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr style="color:#ddd;">
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <h3 style="color:#38435B;">TWO-FACTOR DOCUMENTATION</h3>
                            <div class="pt-2 d-flex bd-highlight">
                                <p class="p-2 flex-grow-1 bd-highlight">This makes your account extra secure. Along with your password, you'll need to enter the secret code that we text your phone each time you log in Require code at login</p>
                                <div class="p-2 bd-highlight d-flex align-items-center">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="color:#ddd;">
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <h3 style="color:#38435B;">CONNECTED DEVICES</h3>
                            <p class="pt-2">This is a list of devices that have logged into your account.</p>
                            <div class="card">
                                <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                                <div class="card-body" style="padding:0px;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Customers</th>
                                                <th>IP Address</th>
                                                <th>Country</th>
                                                <th>Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>111.144.148</td>
                                                <td>Saudi Arabia</td>
                                                <td>Login</td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>111.144.148</td>
                                                <td>Saudi Arabia</td>
                                                <td>Login</td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>111.144.148</td>
                                                <td>Saudi Arabia</td>
                                                <td>Login</td>
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
    name:"Setting",
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
    .custom-control-input:checked ~ .custom-control-label::before{
        border-color:#20926B;
        background-color:#20926B;
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
        
    }
</style>