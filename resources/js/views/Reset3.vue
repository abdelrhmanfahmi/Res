<template>
    <div class="reset">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <form class="formSubmitCss">
                        <div class="pb-3">
                            <h5>RESET PASSWORD</h5>
                        </div>
                        <div class="form-group">
                            <label>New Password<span style="color:red;">*</span></label>
                            <input type="password" class="form-control" id="password" placeholder="xxxxxxxxxxxxx" style="width:300px;">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password<span style="color:red;">*</span></label>
                            <input type="password" class="form-control" id="newPassword" placeholder="xxxxxxxxxxxxx">
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
                    <img :src="'assets/images/Group 16633.svg'" class="imageCss" width="600px" height="740px" alt="">
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-start">
                    <div class="row socialLinksMobile d-flex align-items-end flex-column bd-highlight mb-3">
                        <div class="col-md-6 p-2 bd-highlight">
                            <div class="vl"></div>
                        </div>
                        <div class="col-md-6 mt-auto p-2 bd-highlight">
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
    name:"Reset3",
    methods:{
        SubmitForm:function(e){
            e.preventDefault();
            this.$router.push({ name: "Reset4"});
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
}
</style>