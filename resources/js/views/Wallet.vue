<template>
    <div class="wallet pt-5">
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
                            <a href="javascript:void(0);" id="secondLI"> <i class="fa fa-wallet" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;  Wallet</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/documents'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="thirdLI"> <img :src="'assets/images/Document.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Documents</a>
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
                            <h3 style="color:#38435B;">My Wallet</h3>
                            <div class="card" style="border:0; box-shadow: 0px 10px 30px #00000014;">
                                <div class="card-body">
                                    <p style="color:#868181;font-size:14px;">BALANCE ACTIVITY - AED WALLET</p>
                                    <div class="row pt-3" style="border-top:1px solid #eee;">
                                        <div class="col-md-3">
                                            <h6>Total Wallet</h6>
                                            <div class="pt-2">
                                                <i class="fa fa-coins"></i> &nbsp; 15,000 <span style="color:#20926B;">SAR</span>
                                            </div>
                                            <hr class="verticalLine1">
                                        </div>
                                        <div class="col-md-3">
                                            <h6>Total withdrawn amount</h6>
                                            <div class="pt-2">
                                                <i class="fa fa-coins"></i> &nbsp; 400 <span style="color:#20926B;">SAR</span>
                                            </div>
                                            <hr class="verticalLine2">
                                        </div>
                                        <div class="col-md-3">
                                            <h6>Total amount received</h6>
                                            <div class="pt-2">
                                                <i class="fa fa-coins"></i> &nbsp; 900 <span style="color:#20926B;">SAR</span>
                                            </div>
                                            <hr class="verticalLine3">
                                        </div>
                                        <div class="col-md-3 inMobileCredit d-flex align-items-center justify-content-center">
                                            <button @click="submitForm" class="btn" style="background-color:#20926B;border-radius:20px;">
                                                <span style="color:#fff;">ADD CREDIT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-12 d-flex bd-highlight">
                            <h4 class="p-2 flex-grow-1 bd-highlight">Calculations</h4>
                            <div class="p-2 bd-highlight">
                                <a href="javascript:void(0);" style="color:#20926B;">
                                    This Year &nbsp;<i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                                <div class="card-body" style="padding:40px;">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>Operations</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="trs">
                                                <td>
                                                    <span style="border:1px solid #808482;padding:9px;border-radius:20px;color:#808482;">Addition</span>
                                                </td>
                                                <td>Balance has been added to your wallet</td>
                                                <td>1800 SAR</td>
                                            </tr>
                                            <tr class="trs">
                                                <td>
                                                    <span style="border:1px solid #20926B;padding:9px;border-radius:20px;color:#20926B;">Revenues</span>
                                                </td>
                                                <td>Balance has been added</td>
                                                <td style="color:#20926B;">100 SAR</td>
                                            </tr>
                                            <tr class="trs">
                                                <td>
                                                    <span style="border:1px solid red;padding:9px;border-radius:20px;color:red;">Withdraw</span>
                                                </td>
                                                <td>The amount has been refunded to your account</td>
                                                <td style="color:red;">400 SAR</td>
                                            </tr>
                                            <tr class="trs">
                                                <td>
                                                    <span style="border:1px solid #808482;padding:9px;border-radius:20px;color:#808482;">Addition</span>
                                                </td>
                                                <td>Balance has been added to your wallet</td>
                                                <td>1800 SAR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="pt-3 d-flex justify-content-end">
                                <a href="javascript:void(0);" style="color:#0c0c0c;font-weight:bold;">
                                    <span>View All</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-12 d-flex bd-highlight">
                            <h4 class="p-2 flex-grow-1 bd-highlight">Accounts</h4>
                            <div class="p-2 bd-highlight">
                                <a href="javascript:void(0);" style="color:#20926B;">
                                    Bank Account &nbsp;<i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#808482;padding:5px;"></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center" style="padding:20px;">
                                            <a href="javascript:void(0);" style="color:#808482;">
                                                <i class="fa fa-plus"></i> &nbsp; Add a New Bank Account
                                            </a>
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
    name:"Wallet",
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
    .table th, .table td{
        padding:1.75rem !important;
    }
    .verticalLine1{
        width: 1px;
        height: 94px;
        position: absolute;
        display: inline-block;
        right: 30px;
        top: -32px;
    }
    .verticalLine2{
        width: 1px;
        height: 94px;
        position: absolute;
        display: inline-block;
        left: 251px;
        top: -32px;
    }
    .verticalLine3{
        width: 1px;
        height: 94px;
        position: absolute;
        display: inline-block;
        right: 0px;
        top: -32px;
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
        .verticalLine2{
            position:absolute;
            left:220px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        #wrapper{
            padding-left:0px;
        }
        .verticalLine1{
            position:absolute;
            height:113px;
            right:20px;
        }
        .verticalLine2{
            position:absolute;
            height:113px;
            left:155px;
        }
        .verticalLine3{
            position:absolute;
            height:113px;
            right:0px;
        }
    }

    @media (max-width: 500px){
        #wrapper{
            padding-left:0px;
        }
        .verticalLine1{
            display: none;
        }
        .verticalLine2{
            display: none;
        }
        .verticalLine3{
            display: none;
        }
        .inMobileCredit{
            margin-top:1rem !important;
        }
        .table th, .table td{
            padding:0.85rem !important;
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