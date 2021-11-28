<template>
    <div class="reset2">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <form class="formSubmitCss" name="inputsReq">
                        <div class="pb-3 text-center">
                            <h5>FORGET PASSWORD</h5>
                            <p>Add the four-digit code</p>
                        </div>
                        <div class="row">
                            <div class="col-md-3 digit1">
                                <input type="text" name="num1" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}" class="text-center sms1" style="border-radius: 7px;opacity:1;background: #FAFAFA 0% 0% no-repeat padding-box;"/>
                            </div>
                            <div class="col-md-3 digit2">
                                <input type="text" name="num2" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}" class="text-center sms2" style="border-radius: 7px;opacity:1;background: #FAFAFA 0% 0% no-repeat padding-box;"/>
                            </div>
                            <div class="col-md-3 digit3">
                                <input type="text" name="num3" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}" class="text-center sms3" style="border-radius: 7px;opacity:1;background: #FAFAFA 0% 0% no-repeat padding-box;"/>
                            </div>
                            <div class="col-md-3 digit4">
                                <input type="text" name="num4" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}" class="text-center sms4" style="border-radius: 7px;opacity:1;background: #FAFAFA 0% 0% no-repeat padding-box;"/>
                            </div>
                        </div>
                        
                        <br class="inMobileDisappear">
                        <br>
                        <br>
                        <div class="pb-3">
                            <p>Did you recieve a message? <a href="javascript:void(0);" style="color:#20926B;">Resend Code</a></p>
                            <button type="submit" class="btn btn-success w-100 btn-lg" @click="SubmitForm" style="border-radius:10px;background-color:#20926B;">CONFIRM</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 d-flex justify-content-end" style="background-color:#20966b26;padding:0px;">
                    <img :src="'assets/images/Group 16820.svg'" class="imageCss" width="600px" height="740px" alt="">
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-start">
                    <div class="row socialLinksMobile d-flex align-items-end flex-column bd-highlight mb-3">
                        <div class="col-md-6 p-2 bd-highlight">
                            <div class="vl"></div>
                        </div>
                        <div class="col-md-6 mt-auto p-2 bd-highlight fahmyCode">
                            <div class="social-links">
                                <ul class="list-unstyled">
                                    <li class="mx-3 mb-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-linkedin icon icon-xs" style="color:#fff;"></i> -->
                                            <img :src="'assets/images/Group 2283.svg'" width="40px" height="50px" alt="">
                                        </a>
                                    </li>
                                    <li class="mx-3 mb-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-instagram icon icon-xs" style="color:#fff;"></i> -->
                                            <img :src="'assets/images/Group 2284.svg'" width="40px" height="50px" alt="">
                                        </a>
                                    </li>
                                    <li class="mx-3 mb-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-twitter icon icon-xs" style="color:#fff;"></i> -->
                                            <img :src="'assets/images/Group 2282.svg'" width="40px" height="50px" alt="">
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
    name:"Reset2",
    mounted(){
        $('.sms1').focus();
    },
    methods:{
        SubmitForm:function(e){
            e.preventDefault();
            this.$router.push({ name: "Reset3"});
        },
       autotab(current,to){
            if (current.getAttribute &&
                current.value.length==current.getAttribute("maxlength")) {
                to.focus()
            }
        }
    }
}
$(document).ready(function(){
    
});

$(window).on('load' , function(){
    $('.sms1').focus();
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
    .inMobileDisappear{
        display:block;
    }
}

@media only screen and (width : 1024px){
    .imageCss{
        width:400px !important;
    }
    .inMobileDisappear{
        display:block;
    }
}

@media screen and (min-width:768px) and (max-width:1000px) {
    .imageCss{
        width:300px !important;
    }
    .fahmyCode{
        width:30px;
    }
    .inMobileDisappear{
        display:block;
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
    .digit1{
        position:relative;
        right:0px;
        top:0px;
        width:90px;
    }
    .digit2{
        position:relative;
        right:0px;
        top:0px;
        width:90px;
    }
    .digit3{
        position:relative;
        right:0px;
        top:0px;
        width:90px;
    }
    .digit4{
        position:relative;
        right:0px;
        top:0px;
        width:90px;
    }
    .inMobileDisappear{
        display:none;
    }
    @media only screen and (width: 320px){
        .digit1{
            position:relative;
            right:0px;
            top:0px;
            width:70px;
        }
        .digit2{
            position:relative;
            right:0px;
            top:0px;
            width:70px;
        }
        .digit3{
            position:relative;
            right:0px;
            top:0px;
            width:70px;
        }
        .digit4{
            position:relative;
            right:0px;
            top:0px;
            width:70px;
        }
    } 
}
</style>