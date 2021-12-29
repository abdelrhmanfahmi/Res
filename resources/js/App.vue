<template>
    <div class="app">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <nav v-if="!['Login', 'Register', 'Reset1' , 'Reset2' , 'Reset3' , 'Reset4' ,].includes($route.name)" class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color:#fff !important;">
            <router-link :to="'/'">
                <a class="navbar-brand" href="javascript:void(0);">
                    <img :src="'assets/images/Group 1.svg'" width="150px" height="50px" alt="">
                </a>
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto designNow">
                    <li class="nav-item">
                        <router-link :to="'/'" class="nav-item" exact>
                            <a class="nav-link" href="javascript:void(0);">Homepage</a>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="'/investment'" class="nav-item" exact>
                            <a class="nav-link" href="javascript:void(0);">My Investments</a>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="'/opportunities'" class="nav-item" exact>
                            <a class="nav-link" href="javascript:void(0);">Opportunities Available</a>
                        </router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Learn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <router-link :to="'/faq'" exact>
                               <a class="dropdown-item" href="javascript:void(0);">
                                   <img :src="'assets/images/noun_FAQ_1272960.svg'" width="15px" alt=""> &nbsp; <span>FAQS</span>
                               </a>
                            </router-link>
                            <router-link :to="'/terms'" exact>
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <img :src="'assets/images/noun_Terms And Conditions_3842634.svg'" width="15px" alt=""> &nbsp; <span>Terms And Condition</span>
                                </a>
                            </router-link>
                            <router-link :to="'/privacy'" exact>
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <img :src="'assets/images/Shield Done.svg'" width="15px" alt=""> &nbsp; <span>Privacy Policy</span>
                                </a>
                            </router-link>
                            <router-link :to="'/about'" exact>
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <img :src="'assets/images/Info Circle.svg'" width="15px" alt=""> &nbsp; <span>About US</span>
                                </a>
                            </router-link>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown22" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" :src="'/assets/images/saudi.png'" alt="Header Language"
                                height="16" width="25px">&nbsp;<span>SAR</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown22">
                            &nbsp;<img id="header-lang-img" :src="'/assets/images/british.png'" alt="Header Language"
                                height="16" width="25px">&nbsp;<span style="cursor:pointer;">Dollar</span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="vl"></div>
                    </li>
                    
                </ul>
                <div class="form-inline my-2 my-lg-0 fahmyCode designNow2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <router-link :to="'/favourite'" class="nav-item filledForHeart2" exact>
                                <a class="nav-link filledForHeart" href="javascript:void(0);">
                                    <i class="fa fa-heart rounded-circle filled" style="border:1px solid #eee;padding:10px;"></i>
                                </a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="'/notifications'" class="nav-item" exact>
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="fa fa-bell rounded-circle" style="border:1px solid #eee;padding:10px;"></i>
                                </a>
                            </router-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown33" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Ahmed Mezied</span> &nbsp; <img :src="'assets/images/avatar-8.jpg'" width="30px" height="30px" alt="" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown33">
                                <router-link :to="'/profile'">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img :src="'assets/images/Profile.svg'" width="15px" alt=""> &nbsp; <span>My Profile</span>
                                    </a>
                                </router-link>
                                <router-link :to="'/favourite'">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img :src="'assets/images/Heart1.svg'" width="15px" alt=""> &nbsp; <span>Favourite</span>
                                    </a>
                                </router-link>
                                <router-link :to="'/support'">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img :src="'assets/images/Chat.svg'" width="15px" alt=""> &nbsp; <span>Support</span>
                                    </a>
                                </router-link>
                                <router-link :to="'/setting'">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img :src="'assets/images/Setting.svg'" width="15px" alt=""> &nbsp; <span>Settings</span>
                                    </a>
                                </router-link>
                                <router-link :to="'/'">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <img :src="'assets/images/Logout.svg'" width="15px" alt=""> &nbsp; <span>Sign Out</span>
                                    </a>
                                </router-link>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <router-view></router-view>

        <footer v-if="!['Login', 'Register', 'Reset1' , 'Reset2' , 'Reset3' , 'Reset4' ,].includes($route.name)" class="page-footer font-small pt-4" style="background-color:#4D4D4D !important;">
            <div class="container-fluid text-center text-md-left p-4">
                <div class="row">
                    <div class="col-md-12 text-center pb-5">
                        <h5 class="text-white fontsCSS">NEED HELP GETTING STARTED?</h5>
                        <br>
                        <p class="text-white">TALK TO ONE OF OUR TEAM MEMBERS AND START BUILDING YOUR PORTFOLIO</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-md-0 mt-3 d-flex justify-content-center">
                        <div class="row d-flex align-items-end flex-column bd-highlight mb-3">
                            <div class="col-auto p-2 bd-highlight footerImageMobile">
                                <img :src="'assets/images/Group 16383.svg'" class="imageInIpad" width="170px" height="60px" alt="">
                            </div>
                            <div class="col-auto mt-auto p-2 bd-highlight footerLinksMobile">
                                <ul class="list-unstyled d-flex mb-0">
                                    <li class="mx-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-twitter icon icon-xs text-white" style="font-size:19px;"></i> -->
                                            <img :src="'assets/images/Group 16852.svg'" width="50px" height="50px" alt="">
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-instagram icon icon-xs text-white" style="font-size:19px;"></i> -->
                                            <img :src="'assets/images/Group 16851.svg'" width="50px" height="50px" alt="">
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-linkedin icon icon-xs text-white" style="font-size:19px;"></i> -->
                                            <img :src="'assets/images/Group 16850.svg'" width="50px" height="50px" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 mb-md-0 mb-3">
                        <h5 class="text-white">Home</h5>
                        <hr class="firstHr">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="javascript:void(0);" class="text-white">Properties</a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:void(0);" class="text-white">How it works</a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:void(0);" class="text-white">Our message</a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:void(0);" class="text-white">Our Advantages</a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:void(0);" class="text-white">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                
                    <div class="col-md-4 mb-md-0 mb-3 d-flex align-items-start flex-column bd-highlight mb-3 inMobileMoveToCenter">
                        <h5 class="text-white">Latest News</h5>
                        <hr class="secondHr">
                        <div class="row p-2 bd-highlight">
                            <p class="text-white" style="font-size:20px;">Subscribe to get the latest news and developments to invest in real estate</p>
                        </div>
                        <div class="row mt-auto p-2 bd-highlight">
                            <div class="col-md-12 footerForm">
                                <form class="myFormFooter">
                                    <input type="text" name="news" id="news" class="form-control" placeholder="Your E-mail">
                                    <button @click="SubmitForm" id="btnSubscribe">Subscripe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-white">Call Us</h5>
                        <hr class="thirdHr">
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <p class="text-white" style="font-size:18px;">info@res.sa.com</p>
                            </li>
                            <li class="mb-4">
                                <p class="text-white" style="font-size:18px;">+966552389207</p>
                            </li>
                            <li class="mb-4">
                                <p class="text-white" style="font-size:18px;">Kingdom Saudi Arabia</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright text-center py-3" style="background-color:#5b5b5d !important;">
                <a href="javascript:void(0);" style="color:#fff;">© 2021 <span style="color:#20926B">Real Estate Stocks</span> ® | All rights reserved</a>
            </div>
        </footer>

    </div>
</template>

<script>
import $ from "jquery";
export default {
    name:"App",
    methods:{
        SubmitForm:function(e){
            e.preventDefault();
        }
    }
}

$(document).ready(function(){
    $(document).ready(function(){
        if($(window).width() <= 500){
            $('.fahmyCode').removeClass('designNow2');
        }else if($(window).width() == 768){
            $('.fahmyCode').removeClass('designNow2');
        }else{
            $('.fahmyCode').addClass('designNow2');
        }
    });
    $(window).on('resize' , function(){
        if($(window).width() <= 500){
            $('.fahmyCode').removeClass('designNow2');
        }else if($(window).width() == 768){
            $('.fahmyCode').removeClass('designNow2');
        }else{
            $('.fahmyCode').addClass('designNow2');
        }
    });
});
</script>

<style scoped>
    .designNow2{
        position:relative;
        top:10px;
        right:300px;
    }
    .vl{
        border-left: 2px solid #000;
        height: 30px;
        position: relative;
        top:5px;
        right:-30px;
    }
    .designNow{
        position:relative;
        top:10px;
    }
    #news::-webkit-input-placeholder { /* Edge */
        position:relative;
        right:-30px;
        color:#e4e0e0;
        font-family:'ap';
    }

    #news:-ms-input-placeholder { /* Internet Explorer 10-11 */
        position:relative;
        right:-40px;
        color:#e4e0e0;
        font-family:'ap';
    }

    #news::placeholder {
        position:relative;
        right:-40px;
        color:#e4e0e0;
        font-family:'ap';
    }
    .fontsCSS{
        font-size:29px;
    }
    a:link { text-decoration: none; }


    a:visited { text-decoration: none; }


    a:hover { text-decoration: none; }


    a:active { text-decoration: none; }
    .dropdown-item:hover, .dropdown-item:focus{
        color:#20966B !important;
    }
    a.dropdown-item{
        color:#000;
    }
    a.nav-item{
        text-decoration: none;
    }
    .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active{
        color:#20926B;
    }
    .navbar-light .navbar-nav .nav-link{
        color:#000;
    }
    .navbar-light .navbar-nav .nav-link:hover{
        color:#20926B;
    }
    .footerForm{
        position:relative;
        right:15px;
    }
    #news {
        margin: 0px;
        padding: 0px;
        width: 360px;
        outline: none;
        height: 45px;
        border-radius: 20px;
    }
      
    #btnSubscribe {
        position: absolute;
        top: 0;
        border-radius: 25px;
        right: 0px;
        z-index: 2;
        padding:10px;
        border: none;
        height: 45px;
        cursor: pointer;
        color: white;
        background-color: #20926B;
        transform: translateX(2px);
    }
    .firstHr{
        display: block;
        margin-top: -0.2em;
        margin-bottom: 0.5em;
        margin-left: 0px;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
        width: 170px;
        color:#fff;
    }
    .secondHr{
        display: block;
        margin-top: -0.2em;
        margin-bottom: 0.5em;
        margin-left: 0px;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
        width: 140px;
        color:#fff;
    }
    .thirdHr{
        display: block;
        margin-top: -0.2em;
        margin-bottom: 0.5em;
        margin-left: 0px;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
        width: 120px;
        color:#fff;
    }
    .twitterCss{
        border: 1px solid #777777;
        border-radius: 25px;
        background-color: #777777;
        border-width: 12px;
    }
    .instagramCss{
        border: 1px solid #777777;
        border-radius: 25px;
        background-color: #777777;
        border-width: 12px;
    }
    .linkedinCss{
        border: 1px solid #777777;
        border-radius: 25px;
        background-color: #777777;
        border-width: 12px;
    }
    .navbar-nav > li{
        padding-left:10px;
        padding-right:10px;
    }
    .navbar-brand{
        margin-right:8rem;
        position:relative;
        right:-100px;
    }
@media screen and (min-width: 1025px) and (max-width: 1340px){
    .designNow2{
        position:relative;
        top:10px;
        right:300px;
    }
    .navbar-nav > li{
        padding-left:5px;
        padding-right:5px;
    }
    .navbar-brand{
        margin-right:2rem;
        position:relative;
        right:-30px;
    }
    .navbar-expand-lg .navbar-nav .nav-link{
        font-size:13px;
    }
    .firstHr{
        width:140px;
    }
}

@media only screen and (width : 1024px){
    .designNow2{
        position:relative;
        top:10px;
        right:10px;
    }
    .navbar-nav > li{
        padding-left:5px;
        padding-right:5px;
    }
    .navbar-brand{
        margin-right:1rem;
        position:relative;
        right:0px;
    }
    .navbar-expand-lg .navbar-nav .nav-link{
        font-size:12px;
    }
    #news{
        width:300px;
    }
    .firstHr{
        width:130px;
    }
    .footerImageMobile{
        position:relative;
        right:30px;
    }
}

@media screen and (min-width:768px) and (max-width:1000px) {
    .navbar-brand{
        margin-right:1rem;
        position:relative;
        right:0px;
    }
    #news{
        width:230px;
    }
    .firstHr{
        width:100px;
    }
    .imageInIpad{
        width:150px;
    }
    .footerImageMobile{
        position:relative;
        right:40px;
    }
    .vl{
        display:none;
    }
}

@media (max-width: 500px){
    .vl{
        display:none;
    }
    .imageInIpad{
        position:relative;
        right:30px;
    }
    .navbar-brand{
        margin-right:1rem;
        position:relative;
        right:0px;
    }
    .footerImageMobile{
        padding-bottom:4rem !important
    }
    .footerLinksMobile{
        padding-bottom:3rem !important;
    }
    .firstHr{
        position:relative;
        right:-95px;
    }
    .thirdHr{
        position:relative;
        right:-120px;
    }
    .inMobileMoveToCenter{
        align-items:center !important;
    }
    .secondHr{
        margin-left:110px;
    }
}

@media only screen and (width : 412px){
    #news{
        width:350px;
    }
}

@media only screen and (width : 411px){
    #news{
        width:350px;
    }
}

@media only screen and (width : 393px){
    #news{
        width:310px;
    }
    .firstHr{
        position:relative;
        right:-90px;
    }
    .thirdHr{
        position:relative;
        right:-110px;
    }
}

@media only screen and (width : 375px){
    #news{
        width:310px;
    }
    .firstHr{
        position:relative;
        right:-80px;
    }
    .thirdHr{
        position:relative;
        right:-110px;
    }
}

@media only screen and (width : 360px){
    #news{
        width:295px;
    }
    .firstHr{
        position:relative;
        right:-70px;
    }
    .thirdHr{
        position:relative;
        right:-100px;
    }
}

@media only screen and (width : 320px){
    #news{
        width:255px;
    }
    .firstHr{
        position:relative;
        right:-50px;
    }
    .thirdHr{
        position:relative;
        right:-70px;
    }
    .secondHr{
        margin-left:70px;
    }
}
</style>