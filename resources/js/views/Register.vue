<template>
    <div class="login">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-end">
                    <form class="formSubmitCss pb-5">
                        <div class="pb-3">
                            <h5>CREATE NEW ACCOUNT</h5>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Full Name<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Type Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>ID / Staying<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="staying" placeholder="Type Id/Staying">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Date Of Birth<span style="color:red;">*</span></label>
                                <input type="date" class="form-control" id="date_of_birth" placeholder="Type DateOfBirth">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mobile Number<span style="color:red;">*</span></label>
                                <input type="tel" class="form-control" id="phone" placeholder="Type Mobile Number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>E-mail<span style="color:red;">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="Type E-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Password<span style="color:red;">*</span></label>
                                <input type="password" class="form-control" id="password" placeholder="****************">
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-75 btn-lg" @click="SubmitForm" style="border-radius:10px;">CREATE ACCOUNT</button>
                        </div>
                        <div class="pt-5 text-center">
                            <p>Already Have An account? <a href="javascript:void(0);" style="color:green;">Sign In</a></p>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 d-flex justify-content-end" style="background-color:#D1CDCA;">
                    <img :src="'assets/images/back-graond-04.jpg'" class="imageCss" width="600px" height="740px" alt="">
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-start">
                    <div class="row socialLinksMobile d-flex align-items-end flex-column bd-highlight mb-3">
                        <div class="col-md-6 p-2 bd-highlight">
                            <div class="vl"></div>
                        </div>
                        <div class="col-md-6 mt-auto p-2 bd-highlight">
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
export default {
    name:"Register",
    methods:{
        SubmitForm:function(e){
            e.preventDefault();
        }
    }
}
</script>

<style scoped>
.social-links{
    position: relative;
    right: 32px;
    top: 20px;
}
.linkedin{
    border: 1px solid #007bff;
    border-radius: 25px;
    padding: 10px;
    background-color: #007bff;
}
.twitter{
    border: 1px solid blue;
    border-radius: 25px;
    padding: 10px;
    background-color:blue;

}
.instagram{
    border: 1px solid pink;
    border-radius: 25px;
    padding: 10px;
    background-color:pink;
}

.vl{
    border-left: 3px solid #D1CDCA;
    height: 500px;
    position: relative;
    top:20px;
}
@media screen and (min-width: 1025px) and (max-width: 1340px){

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