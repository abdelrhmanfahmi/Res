<template>
    <div class="profile pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="pb-5">
            <img :src="'assets/images/Group 16522.png'" class="imageHeader" alt="">
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card" style="width:750px;">
                        <div class="card-header">
                            Edit Profile
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="col mb-3">
                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col mb-3">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                            </form>

                            <h3 class="text-center pt-5">Change Profile Picture</h3>

                            <p class="text-center pt-2">Recommended dimensions 300x300</p>

                            <div class="text-center pt-4 pb-4 divsPhotoEdit">
                                <div class="text-center" style="background-color:#eee;padding:20px;">
                                    <img :src="'assets/images/avatar-8.jpg'" class="rounded-circle" width="130px" height="120px" style="padding:10px;" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center pt-5">
                                    <button class="btn w-50" style="background-color:#20926B;border-radius:20px;padding:10px;">
                                        <span style="font-size:18px;color:#fff;">CHOOSE PHOTO</span>
                                    </button>
                                </div>
                            </div>

                            <h3 class="text-center pt-5">Identity Verification</h3>

                            <p class="text-center pt-2">Please share a copy of your passport and residence</p>

                            <div class="row pt-4">
                                <div class="col-md-6 divsStayUpload d-flex justify-content-end mb-3">
                                    <div class="text-center divsStay" style="">
                                        <!-- <i class="fas fa-upload" style="font-size:50px;"></i> -->
                                        <img :src="'assets/images/upload-svgrepo-com.svg'" alt="">
                                        <p class="pt-4" style="color:#20926B;font-weight:bold;font-size:14px;">Add Your Stay</p>
                                    </div>
                                </div>
                                <div class="col-md-6 divsPassportUpload d-flex justify-content-start mb-3">
                                    <div class="text-center divsPassport">
                                        <!-- <i class="fas fa-upload" style="font-size:50px;"></i> -->
                                        <img :src="'assets/images/upload-svgrepo-com.svg'" alt="">
                                        <p class="pt-4" style="color:#20926B;font-weight:bold;font-size:14px;">Add Passport</p>
                                    </div>
                                </div>
                            </div>

                            <p class="text-center pt-3">Maximum file size: 40MB. JPG, PNG or PDF</p>

                            <p class="text-center pt-2">You must upload two files</p>

                            <div class="row">
                                <div class="col-md-12 text-center pt-5">
                                    <button class="btn w-50" style="background-color:#20926B;border-radius:20px;padding:10px;">
                                        <span style="font-size:20px;color:#fff;">SAVE EDITS</span>
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
    name:"Profile",
}
</script>

<style scoped>
    .divsPhotoEdit{
        border:1px solid #ddd;
        border-radius:5px;
        padding:25px;
    }
    .divsPassport{
        border:1px solid #ddd;
        border-radius:15px;
        padding:60px;
        width:220px;
        height:200px;
    }
    .divsStay{
        border:1px solid #ddd;
        border-radius:15px;
        padding:60px;
        width:220px;
        height:200px;
    }
    .imageHeader{
        object-fit:cover;
        background-size: cover;
        left:0;
        top:0;
        height:502px;
        width:100%;
    }
    .searchBar{
        position: relative;
        top:120px;
    }
    @media screen and (min-width: 1025px) and (max-width: 1340px){
        
    }

    @media only screen and (width : 1024px){
        
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        
    }

    @media (max-width: 500px){
        .divsStayUpload{
            justify-content: center !important;
        }
        .divsPassportUpload{
            justify-content: center !important;
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