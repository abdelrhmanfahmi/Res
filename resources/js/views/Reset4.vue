<template>
    <div class="reset4">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="text-center imageAfterReset">
                                 <img :src="'assets/images/back-graond-04.jpg'" width="200px" height="150px" alt="">
                             </div>
                             <div class="pt-5 text-center">
                                 <h5>Your password has been reset</h5>
                            </div>
                             <div class="text-center btnLoginAfterReset" style="padding-top:4rem !important;">
                                 <button type="submit" class="btn btn-success w-100 btn-lg" @click="SubmitForm" style="border-radius:10px;background-color:#20926B;">SIGN IN</button>
                            </div>
                         </div>
                     </div>
                </div>
                <div class="col-md-5 d-flex justify-content-end" style="background-color:#D1CDCA;">
                    <img :src="'assets/images/back-graond-04.jpg'" class="imageCss" width="600px" height="740px" alt="">
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-start">
                    <div class="row socialLinksMobile d-flex align-items-end flex-column bd-highlight mb-3">
                        <div class="col-md-6 p-2 bd-highlight">
                            <div class="vl"></div>
                        </div>
                        <div class="col-md-6 mt-auto p-2 bd-highlight fahmyCode">
                            <div class="social-links">
                                <ul class="list-unstyled">
                                    <li class="mx-3 mb-4">
                                        <a href="javascript:void(0);" class="hover-fade-out linkedin">
                                            <i class="fab fa-linkedin icon icon-xs" style="color:#fff;"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3 mb-4">
                                        <a href="javascript:void(0);" class="hover-fade-out instagram">
                                            <i class="fab fa-instagram icon icon-xs" style="color:#fff;"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3 mb-4">
                                        <a href="javascript:void(0);" class="hover-fade-out twitter">
                                            <i class="fab fa-twitter icon icon-xs" style="color:#fff;"></i>
                                        </a>
                                    </li>
                                </ul>
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
    name:"Reset4",
    methods:{
        SubmitForm:function(e){
            e.preventDefault();
            this.$router.push({ name: "Login"});
        }
    }
}

$(document).ready(function(){
    
});
</script>

<style scoped>
.social-links{
    position: relative;
    right: 32px;
    top: 20px;
}
.linkedin{
    border: 1px solid #0A66C2;
    border-radius: 25px;
    padding: 10px;
    background-color: #0A66C2;
}
.twitter{
    border: 1px solid #1DA1F2;
    border-radius: 25px;
    padding: 10px;
    background-color:#1DA1F2;

}
.instagram{
    border: 1px solid #833AB4;
    border-radius: 25px;
    padding: 10px;
    background-color:#833AB4;
}

.vl{
    border-left: 3px solid #D1CDCA;
    height: 500px;
    position: relative;
    top:20px;
}
@media screen and (min-width: 1025px) and (max-width: 1340px){
    .imageCss{
        width:550px !important;
    }
}

@media only screen and (width : 1024px){
    .imageCss{
        width:400px !important;
    }
}

@media screen and (min-width:768px) and (max-width:1000px) {
    .imageCss{
        width:300px !important;
    }
    .fahmyCode{
        width:30px;
    }
}

@media (max-width: 500px){
    .formSubmitCss{
        padding-top:30px;
    }
    .socialLinksMobile{
        position:relative;
        right:-20px;
    }
    .btnLoginAfterReset{
        padding-bottom:2rem !important;
    }
    .imageAfterReset{
        padding-top:2rem !important;
    }
}
</style>