<template>
    <div class="reset1">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <form class="formSubmitCss">
                        <div class="pb-3">
                            <h5>FORGET PASSWORD</h5>
                            <p>We will send a confirmation code to your phone</p>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number<span style="color:red;">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <vue-country-code
                                        @onSelect="onSelect"
                                        :preferredCountries="['sa', 'us', 'gb']"
                                        :enabledCountryCode="true">
                                    </vue-country-code>
                                    <input type="tel" class="form-control" id="phone" placeholder="xxxxxxxxxxxxx" style="width:300px;">
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <div class="pb-3">
                            <button type="submit" class="btn btn-success w-100 btn-lg" @click="SubmitForm" style="border-radius:10px;background-color:#20926B;">CONFIRM</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 d-flex justify-content-end" style="background-color:#20966b26;padding:0px;">
                    <img :src="'assets/images/Group 16820.svg'" class="imageCss" alt="">
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-start">
                    <div class="row socialLinksMobile d-flex align-items-end flex-column bd-highlight mb-3">
                        <div class="col-md-6 p-2 bd-highlight">
                            <div class="vl"></div>
                        </div>
                        <div class="col-md-6 mt-auto p-2 bd-highlight fahmyCode">
                            <div class="social-links">
                                <ul class="list-unstyled inMobileChangeToFlex">
                                    <li class="mx-3 mb-3">
                                        <a href="javascript:void(0);" class="hover-fade-out">
                                            <!-- <i class="fab fa-linkedin icon icon-xs" style="color:#fff;"></i> -->
                                            <img :src="'assets/images/Group 2283.svg'" class="linkedinRotate" width="40px" height="50px" alt="">
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
                                            <img :src="'assets/images/Group 2282.svg'" class="instagramRotate" width="40px" height="50px" alt="">
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
import Vue from "vue";
import VueCountryCode from "vue-country-code-select";

Vue.use(VueCountryCode);
import $ from "jquery";
export default {
    name:"Reset1",
    data() {
        return {
        };
    },
    methods:{
        SubmitForm:function(e){
            e.preventDefault();
            this.$router.push({ name: "Reset2"});
        },
        onSelect({name, iso2, dialCode}) {
            console.log(name, iso2, dialCode);
        },
    }
}

$(document).ready(function(){
    
});
</script>

<style scoped>
.imageCss{
    height:100%;
    width:100%;
    object-fit:none;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
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
    #phone{
        width:264px !important;
    }
}

@media only screen and (width : 1024px){
    
}

@media screen and (min-width:768px) and (max-width:1000px) {
    #phone{
        width:264px !important;
    }
    .fahmyCode{
        width:30px;
    }
}

@media (max-width: 500px){
    .linkedinRotate{
        -ms-transform: rotate(270deg); /* IE 9 */
        transform: rotate(270deg);
    }
    .instagramRotate{
        -ms-transform: rotate(270deg); /* IE 9 */
        transform: rotate(270deg);
    }
    .vl{
        display:none;
    }
    .inMobileChangeToFlex{
        display:flex;
    }
    .formSubmitCss{
        padding-top:30px;
    }
    #phone{
        width:264px !important;
    }
    .socialLinksMobile{
        position:relative;
        right:-20px;
    }
}
@media only screen and (width : 414px){
    #phone{
        width:264px !important;
    }
}
@media only screen and (width : 412px){
    #phone{
        width:264px !important;
    }
}
@media only screen and (width :411px){
    #phone{
        width:264px !important;
    }
}
@media only screen and (width : 393px){
    #phone{
        width:264px !important;
    }
}
@media only screen and (width : 360px){
    #phone{
        width:254px !important;
    }
}
@media only screen and (width : 320px){
    #phone{
        width:216px !important;
    }
}
</style>