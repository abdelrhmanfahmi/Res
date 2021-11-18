<template>
    <div class="login">
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
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+966</button>
                                    <!-- <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">+966</a>
                                    </div> -->
                                    <input type="tel" class="form-control" id="phone" placeholder="xxxxxxxxxxxxx" style="width:300px;">
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <div class="pb-3">
                            <button type="submit" class="btn btn-success w-100 btn-lg" @click="SubmitForm" style="border-radius:10px;">CONFIRM</button>
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
    name:"Reset1",
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
    .imageCss{
        width:550px !important;
    }
    #phone{
        width:264px !important;
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
    #phone{
        width:264px !important;
    }
}

@media (max-width: 500px){
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