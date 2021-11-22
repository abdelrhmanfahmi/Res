<template>
    <div class="about pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="">
            <img :src="'assets/images/back-graond-04.jpg'" class="imageHeader" alt="">
        </div>
        <div class="container-fluid">
            <div class="row p-5" style="background-color:#F6F9FC;">
                <div class="col-md-6">
                    <h3>Who We Are ?</h3>
                </div>
                <div class="col-md-6">
                    <p style="line-height:3">
                        The first Saudi company that allows you to open an investment portfolio, to
                        trade real estate, with less risks than stocks, and with periodic profits, the
                        contribution starts from three riyals, and it also allows you to contribute to
                        several different properties, and follow the property of your favorite area
                        The first Saudi company that allows you to open an investment portfolio, to
                        trade real estate, with less risks than stocks, and with periodic profits, the
                        contribution starts from three riyals, and it also allows you to contribute to
                    </p>
                </div>
            </div>
            <div class="row p-5 pt-5">
                <div class="col-md-6">
                    <h3>Have a query?</h3>
                    <br>
                    <div class="infoAdd mb-3">
                        <p>Phone : +966 58 360 8011</p>
                    </div>
                    <div class="infoAdd mb-3">
                        <p>E-Mail : nfo@res.sa.com</p>
                    </div>
                    <div class="infoAdd mb-3">
                        <p>Address : King Fahd Road, Riyadh 12381</p>
                    </div>
                    <button @click="submitForm" id="submitForm" class="btn mb-3 btnOfAbout">
                        <span style="font-size:20px;">SCHEDULE CALL</span>
                    </button>
                </div>
                <div class="col-md-6">
                    <h3>Follow us on social media</h3>
                    <div class="pt-5">
                        <a href="javascript:void(0);" class="hover-fade-out linkedin">
                            <i class="fab fa-linkedin icon icon-xs" style="color:#fff;font-size:20px;"></i>
                        </a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="javascript:void(0);" class="hover-fade-out instagram">
                            <i class="fab fa-instagram icon icon-xs" style="color:#fff;font-size:19px;"></i>
                        </a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="javascript:void(0);" class="hover-fade-out twitter">
                            <i class="fab fa-twitter icon icon-xs" style="color:#fff;font-size:19px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"About",
    methods:{
        submitForm:function(e){
            e.preventDefault();
        },
    },
}
</script>

<style scoped>
    .linkedin{
        border: 1px solid #0A66C2;
        border-radius: 30px;
        padding: 12px;
        background-color: #0A66C2;
    }
    .twitter{
        border: 1px solid #1DA1F2;
        border-radius: 25px;
        padding: 12px;
        background-color:#1DA1F2;

    }
    .instagram{
        border: 1px solid #833AB4;
        border-radius: 25px;
        padding: 12px;
        background-color:#833AB4;
    }
    .btnOfAbout{
        background-color:#20926B;
        color:#fff;
        width: 300px;
        padding: 10px;
        border-radius:25px;
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
    .infoAdd{
        background-color:#F6F9FC;
        padding:20px;
        width:500px;
    }

    @media screen and (min-width: 1025px) and (max-width: 1340px){

    }

    @media only screen and (width : 1024px){
        .infoAdd{
            width:400px;
        }
        .btnOfAbout{
            width:250px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        .infoAdd{
            width:250px;
        }
        .btnOfAbout{
            width:250px;
        }
    }

    @media (max-width: 500px){
        .infoAdd{
            width:250px;
        }
        .btnOfAbout{
            width:250px;
        }
    }

    @media only screen and (width : 414px){
        .infoAdd{
            width:300px;
        }
        .btnOfAbout{
            width:300px;
        }
    }

    @media only screen and (width : 412px){
        .infoAdd{
            width:300px;
        }
        .btnOfAbout{
            width:300px;
        }
    }

    @media only screen and (width : 411px){
        .infoAdd{
            width:300px;
        }
        .btnOfAbout{
            width:300px;
        }
    }
</style>