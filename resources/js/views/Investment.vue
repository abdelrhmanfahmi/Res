<template>
    <div class="investment pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="pb-5">
            <img :src="'assets/images/Group 16522.png'" class="imageHeader" alt="">
            <div class="container">
                <div class="row styleForCards">
                    <div class="col-md-3 mb-4">
                        <div id="cardStyle1" class="card cardWidthStyle">
                            <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                            <div class="card-body">
                                <span style="font-size:14px;">My total investment</span>
                                <div class="pt-2">
                                    <i class="fa fa-coins"></i> &nbsp; 20,000 <span style="color:#20926B;">SAR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div id="cardStyle2" class="card cardWidthStyle">
                            <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                            <div class="card-body">
                                <span style="font-size:14px;">Total annual income</span>
                                <div class="pt-2">
                                    <i class="fa fa-coins"></i> &nbsp; 1800 <span style="color:#20926B;">SAR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div id="cardStyle3" class="card cardWidthStyle">
                            <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                            <div class="card-body">
                                <span style="font-size:14px;">Expected net profit</span>
                                <div class="pt-2">
                                    <i class="fa fa-coins"></i> &nbsp; 34,400 <span style="color:#20926B;">SAR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div id="cardStyle4" class="card cardWidthStyle">
                            <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                            <div class="card-body">
                                <span style="font-size:14px;">number of properties</span>
                                <div class="pt-2">
                                    <i class="fa fa-home"></i> &nbsp; 02 <span style="color:#20926B;">Property</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style="background-color:#F6F9FC;padding:20px;">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-md-12 d-flex bd-highlight">
                        <h3 class="p-2 flex-grow-1 bd-highlight">Profits</h3>
                        <div class="p-2 bd-highlight">
                            <a href="javascript:void(0);" style="color:#20926B;">
                                This Year &nbsp;<i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-12 d-flex justify-content-center">
                        <canvas id="planet-chart"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3>INVESTED REAL ESTATE</h3>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6 ChangeCols fahmico">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img :src="'assets/images/amadeusz-misiak-oXQT32eAMGE-unsplash.png'" class="card-img InEarningsStyle" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-title" style="font-size:12px;">Apartment in Rafal Tower</p>
                                            <div class="pt-1">
                                                <img :src="'assets/images/Location.svg'" height="18px" alt=""> &nbsp; <span>London</span>
                                            </div>
                                            <div class="pt-1">
                                                <span style="color:#20926B;">$: 38%</span> &nbsp; <span style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 44%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="earningStyle">
                                                <p class="styleInMobileEarn1" style="font-size:14px;">earnings property</p>
                                                <p class="styleInMobileEarn2" style="color:#3F6D97;">800 SAR / YEAR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ChangeCols fahmico">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img :src="'assets/images/shea-rouda-Vtl6cOhO87Y-unsplash.png'" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-title" style="font-size:12px;">Apartment in Rafal Tower</p>
                                            <div class="pt-1">
                                                <img :src="'assets/images/Location.svg'" height="18px" alt=""> &nbsp; <span>London</span>
                                            </div>
                                            <div class="pt-1">
                                                <span style="color:#20926B;">$: 38%</span> &nbsp; <span style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 44%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="earningStyle">
                                                <p style="font-size:14px;">earnings property</p>
                                                <p style="color:#3F6D97;">800 SAR / YEAR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-6 ChangeCols fahmico">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img :src="'assets/images/hohyeong-lee-e0uCDHd19U4-unsplash.png'" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-title" style="font-size:12px;">Apartment in Rafal Tower</p>
                                            <div class="pt-1">
                                                <img :src="'assets/images/Location.svg'" height="18px" alt=""> &nbsp; <span>London</span>
                                            </div>
                                            <div class="pt-1">
                                                <span style="color:#20926B;">$: 38%</span> &nbsp; <span style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 44%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="earningStyle">
                                                <p style="font-size:14px;">earnings property</p>
                                                <p style="color:#3F6D97;">800 SAR / YEAR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ChangeCols fahmico">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img :src="'assets/images/rahul-bhogal-Ub9LkIWxyec-unsplash.png'" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="card-title" style="font-size:12px;">Apartment in Rafal Tower</p>
                                            <div class="pt-1">
                                                <img :src="'assets/images/Location.svg'" height="18px" alt=""> &nbsp; <span>London</span>
                                            </div>
                                            <div class="pt-1">
                                                <span style="color:#20926B;">$: 38%</span> &nbsp; <span style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 44%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="earningStyle">
                                                <p style="font-size:14px;">earnings property</p>
                                                <p style="color:#3F6D97;">800 SAR / YEAR</p>
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
    </div>
</template>

<script>
import $ from "jquery";
import Chart from 'chart.js';
import chartData from '../chartData.js';
export default {
    name:"Investment",
    data() {
        return {
        chartData: chartData
        }
    },
    mounted() {
        const ctx = document.getElementById('planet-chart');
        new Chart(ctx, this.chartData);
    }
}

$(document).ready(function(){
    if($(window).width() == 768){
        $('.ChangeCols').removeClass('col-md-6 col-md-4 col-md-12 fahmico');
        $('.ChangeCols').addClass('col-md-12');
    }else{
        $('.ChangeCols').removeClass('col-md-6 col-md-4 col-md-12 fahmico');
        $('.ChangeCols').addClass('col-md-6');
    }

    $(window).on('resize' , function(){
        if($(window).width() == 768){
            $('.ChangeCols').removeClass('col-md-6 col-md-4 col-md-12 fahmico');
            $('.ChangeCols').addClass('col-md-12');
        }else{
            $('.ChangeCols').removeClass('col-md-6 col-md-4 col-md-12 fahmico');
            $('.ChangeCols').addClass('col-md-6');
        }
    });
});
</script>

<style scoped>
    .earningStyle{
        position:relative;
        top:5px;
        background-color:#eee;
        padding:10px;
        text-align:center;
        height:80px;
    }
    #cardStyle1{
        position:relative;
        right:-90px;
    }
    #cardStyle2{
        position:relative;
        right:-30px;
    }
    #cardStyle3{
        position:relative;
        right:30px;
    }
    #cardStyle4{
        position:relative;
        right:90px;
    }
    .cardWidthStyle{
        width:200px;
    }
    .styleForCards{
        position:relative;
        right:-25px;
        top:-60px;
    }
    .imageHeader{
        object-fit:cover;
        background-size: cover;
        left:0;
        top:0;
        height:502px;
        width:100%;
    }
    @media screen and (min-width: 1025px) and (max-width: 1340px){
        
    }

    @media only screen and (width : 1024px){
        .styleForCards{
            position:relative;
            right:-10px;
        }
        #cardStyle1{
            position:relative;
            right:0px;
        }
        #cardStyle2{
            position:relative;
            right:0px;
        }
        #cardStyle3{
            position:relative;
            right:0px;
        }
        #cardStyle4{
            position:relative;
            right:0px;
        }
        .styleInMobileEarn1{
            font-size:12px !important;
        }
        .styleInMobileEarn2{
            font-size:12px;
        }
        .InEarningsStyle{
            height:143px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        .cardWidthStyle{
            width:172px;
        }
        .styleForCards{
            position:relative;
            right:0px;
        }
        #cardStyle1{
            position:relative;
            right:0px;
        }
        #cardStyle2{
            position:relative;
            right:0px;
        }
        #cardStyle3{
            position:relative;
            right:0px;
        }
        #cardStyle4{
            position:relative;
            right:0px;
        }
    }

    @media (max-width: 500px){
        .styleForCards{
            position:relative;
            right:-90px;
            justify-content:center;
            top:10px;
            width:290px;
        }
        #cardStyle1{
            position:relative;
            right:0px;
        }
        #cardStyle2{
            position:relative;
            right:0px;
        }
        #cardStyle3{
            position:relative;
            right:0px;
        }
        #cardStyle4{
            position:relative;
            right:0px;
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
    @media only screen and (width:375px){
        .styleForCards{
            position:relative;
            right:-75px;
            width:270px;
        }
        #cardStyle1{
            position:relative;
            right:0px;
        }
        #cardStyle2{
            position:relative;
            right:0px;
        }
        #cardStyle3{
            position:relative;
            right:0px;
        }
        #cardStyle4{
            position:relative;
            right:0px;
        }
    }
    @media only screen and (width:360px){
        .styleForCards{
            position:relative;
            right:-65px;
            width:250px;
        }
        #cardStyle1{
            position:relative;
            right:0px;
        }
        #cardStyle2{
            position:relative;
            right:0px;
        }
        #cardStyle3{
            position:relative;
            right:0px;
        }
        #cardStyle4{
            position:relative;
            right:0px;
        }
    }
    @media only screen and (width:320px){
        .styleForCards{
            position:relative;
            right:-45px;
            width:230px;
        }
        #cardStyle1{
            position:relative;
            right:0px;
        }
        #cardStyle2{
            position:relative;
            right:0px;
        }
        #cardStyle3{
            position:relative;
            right:0px;
        }
        #cardStyle4{
            position:relative;
            right:0px;
        }
    }
</style>