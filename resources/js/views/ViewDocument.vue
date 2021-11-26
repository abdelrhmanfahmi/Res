<template>
    <div class="viewDocs pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <div class="pb-5">
            <img :src="'assets/images/back-graond-04.jpg'" class="imageHeader" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h3>APARTMENT IN RAFAL TOWER</h3>
                    </div>
                    <div class="pt-2 d-flex bd-highlight" style="height:50px;">
                        <h5 class="p-2 bd-highlight">Minimum Investment</h5>
                        <p class="p-2 bd-highlight" style="color:#3F6D97;font-size:17px;">200 SAR</p>
                    </div>
                    <div class="d-flex bd-highlight">
                        <p class="p-2 bd-highlight"><i class="fas fa-home"></i> 94 m2</p> 
                        <p class="p-2 bd-highlight"><i class="fas fa-home"></i> 2 Rooms</p>
                    </div>
                    <div class="pt-1">
                        <p><span style="color:#b5aaaa;">Propert Price</span> &nbsp; <span style="color:#3F6D97;">1000.000 SAR</span></p>
                    </div>
                    <div style="padding-top:0.8rem !important;">
                        <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pt-2">
                        <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                            <div class="progress-value">100%</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" style="padding-top: 2.5rem !important;">
                        <p class="closeRight">Closed</p>
                    </div>
                    <div class="pt-2 d-flex justify-content-center">
                        <p class="clockRight"><i class="fas fa-map-marker-alt" style="color:#3F6D97;"></i> <span style="color:#3F6D97;text-decoration:underline;">Rafal Tower, Paris</span></p>
                    </div>
                </div>
            </div>
            <hr style="color:#736868;">
            <div class="row pt-3">
                <div class="col-md-12">
                    <h3>DESCRIPTION</h3>
                    <p class="pt-2" style="font-size:21px;color:#736868;">
                        Stake is offering a unique opportunity to invest in a luxury furnished studio in The Burj Khalifa, the
                        World’s Tallest Building.
                    </p>
                
                    <p style="font-size:21px;color:#736868;">
                        The Burj Khalifa is a global icon. At 828 metres tall, this magnificent skyscraper is located next to
                        The Dubai Mall in Downtown Dubai.
                    </p>

                    <p style="font-size:21px;color:#736868;">
                        The deal is offered at AED 1,938,547 presenting a gross yield of 6.34% in the first year. After
                        deducting building service charges and all other expected running costs, the property offers
                        investors a net yield of 4.31% for the first year.
                    </p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12">
                    <h3>EXPECTED INVESTMENT</h3>
                    <p class="pt-2" style="font-size:19px;">Expected investment over the next five years expected investment over the next five years</p>
                    <div class="pt-2">
                        <canvas id="planet-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12">
                    <h3>PROPERTY FINANCIAL PLAN</h3>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="card" style="border:0;">
                        <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                        <div class="card-title pt-3 text-center" style="background-color:#F1F1F1;padding:20px;">
                            <h4 style="color:#20926B;">Property Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row inMobileCouldHappen1">
                                <div class="col-md-6 text-center">
                                    <h5>Annual Rent</h5>
                                    <p class="pt-2" style="color:#20926B">123.000 SAR</p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h5>Property Price</h5>
                                    <p class="pt-2" style="color:#20926B">1,988,827 SAR</p>
                                </div>
                            </div>
                            <hr class="verticalLine1">
                            <div class="row pt-3 inMobileCouldHappen2">
                                <div class="col-md-6 text-center">
                                    <h5>Net Return</h5>
                                    <p class="pt-2" style="color:#20926B">4.31 %</p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h5>Res Fee</h5>
                                    <p class="pt-2" style="color:#20926B">1.5 %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="border:0;">
                        <div class="card-header" style="background-color:#20926B;padding:5px;"></div>
                        <div class="card-title pt-3 text-center" style="background-color:#F1F1F1;padding:20px;">
                            <h4 style="color:#20926B;">Rental Income Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row inMobileCouldHappen1">
                                <div class="col-md-6 text-center">
                                    <h5>Net Income</h5>
                                    <p class="pt-2" style="color:#20926B">83.468 SAR</p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h5 class="inIPAD">Investment Price</h5>
                                    <p class="pt-2" style="color:#20926B">2,175,871 SAR</p>
                                </div>
                            </div>
                            <hr class="verticalLine2">
                            <div class="row pt-3 inMobileCouldHappen2">
                                <div class="col-md-6 text-center">
                                    <h5>Annual Cost</h5>
                                    <p class="pt-2" style="color:#20926B">39,468 SAR</p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h5>Transfer Fees</h5>
                                    <p class="pt-2" style="color:#20926B">187.044 SAR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12">
                    <h3>PROPERTY FEATURES</h3>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-3 swimmingPool">
                    <div class="text-center swim">
                        <span>Hello1</span>
                    </div>
                    <p class="pt-3 swimText">Swimming Pool</p>
                </div>
                <div class="col-md-3 Kitchen">
                    <div class="text-center kitchen">
                        <span>Hello2</span>
                    </div>
                    <p class="pt-3 kitText">Kitchen</p>
                </div>
                <div class="col-md-3 Garden">
                    <div class="text-center garden">
                        <span>Hello3</span>
                    </div>
                    <p class="pt-3 garText">Garden</p>
                </div>
                <div class="col-md-3 Jim">
                    <div class="text-center jim">
                        <span>Hello4</span>
                    </div>
                    <p class="pt-3 jimText">Jim</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12">
                    <h3>DOCUMENTS</h3>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6 mb-3">
                    <div class="firstProj d-flex bd-highlight">
                        <img :src="'assets/images/avatar-8.jpg'" width="30px" height="30px" alt="">
                        &nbsp;&nbsp;
                        <p style="color:#20926B;text-decoration:underline">Project125.xw</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3 gotoBrother">
                    <div class="secondProj d-flex bd-highlight">
                        <img :src="'assets/images/avatar-8.jpg'" width="30px" height="30px" alt="">
                        &nbsp;&nbsp;
                        <p style="color:#20926B;text-decoration:underline">Project125.xw</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-md-12 d-flex justify-content-center">
                    <button @click="submitForm" class="btn w-25" style="background-color:#20966B;border-radius:20px;padding:12px;">
                        <span class="inMobileLowSize">INVEST</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
import Chart from 'chart.js';
import chartData2 from '../chartData2.js';
export default {
    name:"ViewDocument",
    data() {
        return {
        chartData2: chartData2
        }
    },
    mounted() {
        const ctx = document.getElementById('planet-chart');
        new Chart(ctx, this.chartData2);
    },
    methods:{
        submitForm:function(e){
            e.preventDefault();
            this.$router.push({ name: "Invest"});
        }
    }
}
</script>

<style scoped>
    .inMobileLowSize{
        color:#fff;
        font-size:20px;
    }
    .gotoBrother{
        position:relative;
        right:400px;
    }
    .firstProj{
        position: relative;
        right:0px;
        top:0px;
        padding:17px;
        width:190px;
        height:57px;
        background-color:#20966b4d;
    }
    .secondProj{
        position:relative;
        right:-40px;
        top:0px;
        padding:17px;
        width:190px;
        height:57px;
        background-color:#20966b4d;
    }
    .swimText{
        position:relative;
        right:-60px;
    }
    .kitText{
        position:relative;
        right:20px;
    }
    .garText{
        position:relative;
        right:135px;
    }
    .jimText{
        position:relative;
        right:240px;
    }
    .swim{
        background-color:#20966b4d;
        padding:5px;
        width:130px;
        position:relative;
        right:-50px;
        top:0px;
    }
    .kitchen{
        background-color:#20966b4d;
        padding:5px;
        width:130px;
        position:relative;
        right:60px;
        top:0px;
    }
    .garden{
        background-color:#20966b4d;
        padding:5px;
        width:130px;
        position:relative;
        right:176px;
        top:0px;
    }
    .jim{
        background-color:#20966b4d;
        padding:5px;
        width:130px;
        position:relative;
        right:292px;
        top:0px;
    }
    .verticalLine1{
        width: 1px;
        height: 205px;
        position: absolute;
        display: inline-block;
        right: 261px;
        top: 67px;
    }
    .verticalLine2{
        width: 1px;
        height: 205px;
        position: absolute;
        display: inline-block;
        right: 272px;
        top: 67px;
    }
    .inMobileCouldHappen2{
        border-bottom: 1px solid #ddd;
    }
    .inMobileCouldHappen1{
        border-bottom: 1px solid #ddd;
    }
    .clockLeft{
        color: #3F6D97;
        border: 1px solid #3F6D97;
        border-radius: 20px;
        padding: 8px;
        text-align: center;
        width: 200px;
    }
    .closeRight{
        color:#3F6D97;
        border: 1px solid #3F6D97;
        padding: 5px;
        border-radius: 20px;
        text-align:center;
        width:150px;
    }
    .clockRight{
        color:#3F6D97;
        border: 1px solid #3F6D97;
        padding: 5px;
        border-radius: 20px;
        text-align:center;
        width:200px;
    }
    .imageHeader{
        object-fit:cover;
        background-size: cover;
        left:0;
        top:0;
        height:502px;
        width:100%;
    }
    .progress {
        width: 100px;
        height: 100px;
        line-height: 150px;
        background: none;
        margin: 0 auto;
        box-shadow: none;
        position: relative
    }

    .progress:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 12px solid #fff;
        position: absolute;
        top: 0;
        left: 0
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1
    }

    .progress .progress-left {
        left: 0
    }

    .progress .progress-bar {
        width: 97%;
        height: 97%;
        background: none;
        border-width: 4px;
        border-style: solid;
        position: absolute;
        top: 0
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left
    }

    .progress .progress-right {
        right: 0
    }

    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards
    }

    .progress .progress-value {
        width: 87%;
        height: 76%;
        border-radius: 50%;
        background: #fff;
        font-size: 19px;
        color: #000;
        line-height: 90px;
        text-align: center;
        position: absolute;
        top: 5%;
        left: 5%;
    }

    .progress.closed .progress-bar {
        border-color: #20926B
    }

    .progress.closed .progress-left .progress-bar {
        animation: loading-2 1.5s linear forwards 1.8s
    }

    .progress.rented .progress-bar {
        border-color: #E9B35C
    }

    .progress.rented .progress-left .progress-bar {
        animation: loading-2 1.5s linear forwards 1.8s
    }

    .progress-left .progress-bar {
        animation: loading-3 1s linear forwards 1.8s
    }

    .progress-left .progress-bar {
        animation: loading-4 0.4s linear forwards 1.8s
    }

    .progress-left .progress-bar {
        animation: loading-5 1.2s linear forwards 1.8s
    }

    @keyframes loading-1 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }
    }

    @keyframes loading-2 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }
    }

    @keyframes loading-3 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }
    }

    @keyframes loading-4 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }
    }

    @media only screen and (max-width: 990px) {
        .progress {
            margin-bottom: 20px
        }
    }

     @media screen and (min-width: 1025px) and (max-width: 1340px){
        
    }

    @media only screen and (width : 1024px){
        .verticalLine1{
            position: absolute;
            display: inline-block;
            right: 214px;
        }
        .verticalLine2{
            position: absolute;
            display: inline-block;
            right: 224px;
        }
        .swimText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .kitText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .garText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .jimText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .swim{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:-40px;
            /* top:0px; */
        }
        .kitchen{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:-40px;
            /* top:0px; */
        }
        .garden{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:-40px;
            /* top:0px; */
        }
        .jim{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:-40px;
            /* top:0px; */
        }
        .gotoBrother{
            position:relative;
            right:270px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        .clockRight{
            position:relative;
            top:15px;
        }
        .inIPAD{
            font-size:17px;
        }
        .verticalLine1{
            position: absolute;
            display: inline-block;
            right: 161px;
        }
        .verticalLine2{
            position: absolute;
            display: inline-block;
            right: 168px;
        }
        .swimText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .kitText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .garText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .jimText{
            position:relative;
            right:0px;
            text-align:center;
        }
        .swim{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .kitchen{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .garden{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .jim{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .gotoBrother{
            position:relative;
            right:170px;
        }
    }

    @media (max-width: 500px){
        .inMobileLowSize{
            font-size:16px;
        }
        .gotoBrother{
            position:relative;
            right:40px;
        }
        .verticalLine1{
            display:none;
        }
        .verticalLine2{
            display:none;
        }
        .swimText{
            position:relative;
            right:0px;
        }
        .kitText{
            position:relative;
            right:0px;
        }
        .garText{
            position:relative;
            right:0px;
        }
        .jimText{
            position:relative;
            right:0px;
        }
        .swim{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .kitchen{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .garden{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
        }
        .jim{
            background-color:#20966B;
            padding:5px;
            width:130px;
            position:relative;
            right:0px;
            /* top:0px; */
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