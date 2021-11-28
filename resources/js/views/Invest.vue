<template>
    <div class="invest pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <div class="pb-5">
            <img :src="'assets/images/Group 16522.png'" class="imageHeader" alt="">
        </div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card" style="border:0;box-shadow: 0px 3px 8px #EDEDED;width:800px;">
                        <hr class="verticalLine3">
                        <hr class="verticalLine4">
                        <div class="card-header" style="background-color:#20966B;padding:5px;"></div>
                        <div class="card-title" style="padding:30px;box-shadow: 0px 10px 30px #00000014;">
                            <span>Invest</span>
                            <div class="row" style="border-top:1px solid #ddd;padding:10px;">
                                <div class="col-md-4 mb-3">
                                    <h5>Total Portfolio</h5>
                                    <p class="pt-3" style="font-size:19px;">
                                        <i class="fas fa-coins"></i> &nbsp; 15,000 <span style="color:#20966B;">SAR</span>
                                    </p>
                                </div>
                                
                                <div class="col-md-8 mb-3">
                                    <div class="text-center">
                                        <p>Enter the investment amount</p>
                                        <div class="input-group mb-3">
                                            <input type="text" name="price" id="price" class="form-control priceInMobileWidth" placeholder="200">
                                            <div class="input-group-append">
                                                <span class="input-group-text" style="color: #20966B;">SR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" style="padding:50px;">
                                <div class="col-md-6">
                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                        <div class="progress-value">0%</div>
                                    </div>
                                    <p class="pt-2 text-center">Year Returnon Investment</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                        <div class="progress-value">0%</div>
                                    </div>
                                    <p class="pt-2 text-center">5 Years Return On Investment</p>
                                </div>
                            </div>
                            <div class="row pt-3" style="border-top:1px solid #ddd;">
                                <div class="col-md-6 text-center">
                                    <h4>Annual Rental Income</h4>
                                    <p class="pt-2">
                                        <i class="fas fa-coins"></i> &nbsp; 0,00 <span style="color:#20966B;">SAR</span>
                                    </p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h4>Expected Total Profit</h4>
                                    <p class="pt-2">
                                        <i class="fas fa-coins"></i> &nbsp; 0,00 <span style="color:#20966B;">SAR</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row" style="border-top:1px solid #ddd;padding:10px;border-bottom:1px solid #ddd;">
                                <div class="col-md-6 text-center">
                                    <h4>Expected Exit Income</h4>
                                    <p class="pt-2">
                                        <i class="fas fa-coins"></i> &nbsp; 0,00 <span style="color:#20966B;">SAR</span>
                                    </p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h4>Expected Net Profit</h4>
                                    <p class="pt-2">
                                        <i class="fas fa-coins"></i> &nbsp; 0,00 <span style="color:#20966B;">SAR</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row pt-4 pb-3">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <button @click="submitForm" class="btn w-25" style="background-color:#20966B;border-radius:20px;padding:12px;">
                                        <span class="inMobileLowSize">INVEST</span>
                                    </button>
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
export default {
    name:"Invest",
    methods:{
        submitForm:function(e){
            e.preventDefault();
        }
    }
}
</script>

<style scoped>
    .inMobileLowSize{
        color:#fff;
        font-size:20px;
    }
    .verticalLine3{
        width: 1px;
        height: 155px;
        position: absolute;
        display: inline-block;
        right: 550px;
        top: 50px;
    }
    .verticalLine4{
        width: 1px;
        height: 202px;
        position: absolute;
        display: inline-block;
        right: 400px;
        top: 486px;
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
        .verticalLine3{
            position: absolute;
            right: 550px;
            top: 50px;
            height: 156px;
        }
        .verticalLine4{
            width: 1px;
            height: 202px;
            position: absolute;
            display: inline-block;
            right: 400px;
            top: 490px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        .verticalLine3{
            position: absolute;
            right: 480px;
            top: 50px;
            height: 157px;
        }
        .verticalLine4{
            width: 1px;
            height: 202px;
            position: absolute;
            display: inline-block;
            right: 350px;
            top: 510px;
        }
    }

    @media (max-width: 500px){
        .inMobileLowSize{
            font-size:16px;
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