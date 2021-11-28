<template>
    <div class="home pt-5">
        <section class="" style="background-color:#F6F9FC;padding:4rem !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Real estate investing is your way to make money</h3>
                        <br>
                        <p style="line-height:3">
                            The first Saudi company to allow you to open an investment portfolio
                            for trading Real estate is less risky than stocks and with periodic
                            profits. The contribution starts from Three riyals and also allows
                            you to contribute to several different properties and Follow the
                            property of your favorite area
                        </p>
                        <br>
                        <button class="btn btnForHeadeUp mb-3" @click="GoToRegister">
                            <span style="color:#fff;font-size:18px;">SIGN UP</span>
                        </button>
                        <button class="btn btnForHeaderIn mb-3" @click="GoToLogin">
                            <span style="color:#fff;font-size:18px;">SIGN IN</span>
                        </button>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end mt-3">
                        <img :src="'assets/images/Group 16619.svg'" class="img-fluid" width="400px" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex bd-highlight">
                        <h3 class="p-2 flex-grow-1 bd-highlight">FEATURED PROPERTIES</h3>
                        <router-link :to="'/features'">
                            <a class="p-2 bd-highlight" href="javascript:void(0);">
                                <span style="color:#aba7a7">View All &nbsp; <i class="fas fa-chevron-right chevronStyle"></i></span>
                            </a>
                        </router-link>
                    </div>
                </div>
                <div class="row pt-2">
                    <carousel :per-page-custom="[[320, 1], [360, 1], [375, 1], [393, 1], [411, 1], [412, 1], [414, 1], [768, 2], [1024, 3], [1350, 4]]" :mouse-drag="true">
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/amadeusz-misiak-oXQT32eAMGE-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/hohyeong-lee-e0uCDHd19U4-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/ben-o-bro-wpU4veNGnHg-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/rahul-bhogal-Ub9LkIWxyec-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/shea-rouda-Vtl6cOhO87Y-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/amadeusz-misiak-oXQT32eAMGE-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                        <slide>
                            <div class="col-md-12 widthInMobileBig">
                                <div class="card" style="box-shadow: 0px 3px 8px #EDEDED;">
                                    <img :src="'/assets/images/rahul-bhogal-Ub9LkIWxyec-unsplash.png'" class="card-img-top" alt="...">
                                    <div class="card-img-overlay card-inverse">
                                        <div class="row imageOvelayRow">
                                            <div class="col-auto">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-heart heartOverlay"></i>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <div class="imageOverlayCarousel">
                                                    <p style="color:#fff;text-align:center;margin:2px;">Three Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp; <span>Office</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span style="color:#3F6D97;font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> 4</span> &nbsp; <span style="color:#3F6D97;font-size:11px;"><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> 120 m2</span>
                                                </div>
                                                <div class="pt-1">
                                                    <span style="color:#20926B;font-size:12px;">$: 38%</span> &nbsp; <span style="color:#20926B;font-size:12px;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</span>
                                                </div>
                                                <div class="" style="padding-top:0.3rem !important;">
                                                    <span class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </span>
                                                </div>
                                                <div class="pt-3">
                                                    <span style="color:#3F6D97;font-size:12px;">Earning Period :</span>
                                                </div>
                                            </div>
                                            <div class="col-auto inWidthMobile">
                                                <div style="background-color:#F5F5F5;padding:5px;">
                                                    <img :src="'assets/images/Location.svg'" width="14px" alt=""> &nbsp; <span>London</span>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <div class="pt-3 d-flex justify-content-center inWidthMobileClosed">
                                                    <span class="closeRight">Closed</span>
                                                </div>
                                                <div class="pt-2 d-flex justify-content-center inWidthMobileClock">
                                                    <span class="clockRight"><i class="fas fa-clock"></i> 6 Months</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </slide>
                    </carousel>
                </div>
            </div>
        </section>

        <section class="pt-5" style="background-color:#F6F9FC;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">BECOME AN INVESTOR</h3>
                        <p class="text-center pt-3" style="color:#aba7a7;">It's never been easier to invest in residential real estate</p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-3 inWidthMobileForInvestor">
                        <img :src="'assets/images/icons8_verified_account_2.svg'" class="img-fluid" width="60px" height="60px" alt="">
                        <div class="pt-4">
                            <h4 style="color:#38435B;font-weight: bold;">Ceate an account</h4>
                            <p class="pt-2" style="color:#38435B">Sign up for free to access property details and get a personalized dashboard</p>
                        </div>
                    </div>
                    <div class="col-md-3 inWidthMobileForInvestor">
                        <img :src="'assets/images/16405049131582960209.svg'" class="img-fluid" width="60px" height="60px" alt="">
                        <div class="pt-3">
                            <h4 style="color:#38435B;font-weight: bold;">Start Investing</h4>
                            <p class="pt-2" style="color:#38435B">Browse available properties and make an investment</p>
                        </div>
                    </div>
                    <div class="col-md-3 inWidthMobileForInvestor">
                        <img :src="'assets/images/g1833.svg'" class="img-fluid" width="60px" height="60px" alt="">
                        <div style="padding-top:1.3rem !important;">
                            <h4 style="color:#38435B;font-weight: bold;">Earn Income</h4>
                            <p class="pt-2" style="color:#38435B">Receive your periodic distributions when rent is paid</p>
                        </div>
                    </div>
                    <div class="col-md-3 inWidthMobileForInvestor">
                        <img :src="'assets/images/Group 16391.svg'" class="img-fluid" width="60px" height="60px" alt="">
                        <div style="padding-top:2.1rem !important;">
                            <h4 style="color:#38435B;font-weight: bold;">Enjoy Your Returns</h4>
                            <p class="pt-2" style="color:#38435B">Re-invest to multiply your returns or withdraw to enjoy your cash!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">OUR GOALS</h3>
                        <p class="text-center pt-3" style="color:#aba7a7;">Our goal is to make the real estate investment</p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-2 mb-3 changeCols zzzz">
                        <div class="card" style="height:160px;box-shadow: 0px 10px 30px #00000014;border-radius: 15px;background-color: #fff">
                            <div class="card-body text-center p-3" style="padding-top:2.5rem !important;">
                                <img :src="'assets/images/icons8_happy_1.svg'" width="90px" height="50px" class="rounded-circle" alt="">
                                <div class="card-text pb-2 pt-4" style="font-size:14px;">Without Experience</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 changeCols zzzz">
                        <div class="card" style="height:160px;box-shadow: 0px 10px 30px #00000014;border-radius: 15px;background-color: #fff">
                            <div class="card-body text-center p-3" style="padding-top:2.5rem !important;">
                                <img :src="'assets/images/9_1-project-experience.svg'" width="90px" height="50px" class="rounded-circle" alt="">
                                <div class="card-text pb-2 pt-4" style="font-size:14px;">Without Experience</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 changeCols zzzz">
                        <div class="card" style="height:160px;box-shadow: 0px 10px 30px #00000014;border-radius: 15px;background-color: #fff">
                            <div class="card-body text-center p-3" style="padding-top:2.5rem !important;">
                                <img :src="'assets/images/icons8_transaction.svg'" width="90px" height="50px" class="rounded-circle" alt="">
                                <div class="card-text pb-2 pt-4" style="font-size:14px;">Reasonable Prices</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 changeCols zzzz">
                        <div class="card" style="height:160px;box-shadow: 0px 10px 30px #00000014;border-radius: 15px;background-color: #fff">
                            <div class="card-body text-center p-3" style="padding-top:2.5rem !important;">
                                <img :src="'assets/images/faster-3.svg'" width="90px" height="50px" class="rounded-circle" alt="">
                                <div class="card-text pb-2 pt-4" style="font-size:14px;">Faster</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 changeCols zzzz">
                        <div class="card" style="height:160px;box-shadow: 0px 10px 30px #00000014;border-radius: 15px;background-color: #fff">
                            <div class="card-body text-center p-3" style="padding-top:2.5rem !important;">
                                <img :src="'assets/images/icons8_easy.svg'" width="90px" height="50px" class="rounded-circle" alt="">
                                <div class="card-text pb-2 pt-4" style="font-size:14px;">Much Easier</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 changeCols zzzz">
                        <div class="card" style="height:160px;box-shadow: 0px 10px 30px #00000014;border-radius: 15px;background-color: #fff">
                            <div class="card-body text-center p-3" style="padding-top:2.5rem !important;">
                                <img :src="'assets/images/Icon awesome-coins.svg'" width="90px" height="50px" class="rounded-circle" alt="">
                                <div class="card-text pb-2 pt-4" style="font-size:14px;">Reasonable Prices</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-5" style="background-color:#F6F9FC;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center" style="font-weight:bold;color:#38435B;">DOWNLOAD APP NOW</h3>
                        <p class="text-center pt-3" style="color:#aba7a7;">You can download the application today, enjoy the available services, and learn more</p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-6 AppStoreMobile d-flex justify-content-end">
                        <div class="appStore d-flex bd-highlight mb-3">
                            <div class="mr-auto p-2 bd-highlight d-flex align-items-center">
                                <!-- <i class="fab fa-apple" style="color:#20926B;font-size:40px;"></i> -->
                                <img :src="'assets/images/XMLID_27_.svg'" width="50px" height="50px" alt="">
                            </div>
                            <div class="p-2 bd-highlight">
                                <small>Download On The</small>
                                <h3 style="color:#38435B;">App Store</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 GooglePlayMobile d-flex justify-content-start">
                        <div class="playStore d-flex bd-highlight mb-3">
                            <div class="mr-auto p-2 bd-highlight d-flex align-items-center">
                                <!-- <i class="fab fa-google-play" style="color:#20926B;font-size:40px;"></i> -->
                                <img :src="'assets/images/Group 16628.svg'" width="50px" height="50px" alt="">
                            </div>
                            <div class="p-2 bd-highlight">
                                <small>Available On The</small>
                                <h3 style="color:#38435B;">Google Play</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import $ from "jquery";
import { Carousel, Slide } from 'vue-carousel';
export default {
    name:"Home",
    methods:{
        GoToLogin:function(e){
            e.preventDefault();
            this.$router.push({ name: "Login"});
        },
        GoToRegister:function(e){
            e.preventDefault();
            this.$router.push({ name: "Register"});
        },
    },
    components: {
        Carousel,
        Slide
    }
}
$(document).ready(function(){
    if($(window).width() == 768){
        $('.changeCols').removeClass('col-md-2 zzzz');
        $('.changeCols').addClass('col-md-4');
    }else{
        $('.changeCols').removeClass('col-md-4 zzzz');
        $('.changeCols').addClass('col-md-2');
    }

    $(window).on('resize' , function(){
        if($(window).width() == 768){
            $('.changeCols').removeClass('col-md-2 zzzz');
            $('.changeCols').addClass('col-md-4');
        }else{
            $('.changeCols').removeClass('col-md-4 zzzz');
            $('.changeCols').addClass('col-md-2');
        }
    });
});
</script>

<style scoped>
    .widthInMobileBig{
        width:300px;
    }
    .heartOverlay{
        color:#4D4D4D;
        position: relative;
        right:5px;
    }
    .imageOvelayRow{
        position:relative;
        top:-5px;
    }
    .inWidthMobile{
        position:relative;
        right:-20px;
    }
    .imageOverlayCarousel{
        border: 1px solid #4D4D4D;
        background-color: #4D4D4D;
        opacity: 0.5;
        border-radius: 17px;
        padding: 2px;
        position: relative;
        top: -3px;
        right: -90px;
        padding-right: 5px;
        padding-left: 5px;
    }
    .chevronStyle{
        border: 1px solid #20926B;
        background-color: #20926B;
        padding: 3px;
        padding-right: 7px;
        padding-left: 7px;
        border-radius: 5px;
        color: #fff;
    }
    .clockLeft{
        color:#3F6D97;
        border:1px solid #3F6D97;
        border-radius:5px;
        font-size:10px;
        padding:1px;
        padding-bottom:4px;
        padding-top:4px;
    }
    .closeRight{
        color:#3F6D97;
        border: 1px solid #3F6D97;
        padding: 4px 4px;
        border-radius: 10px;
        font-size: 13px;
        padding-left:10px;
        padding-right:10px;
    }
    .clockRight{
        color:#3F6D97;
        border: 1px solid #3F6D97;
        border-radius: 10px;
        font-size: 13px;
        padding:4px;
    }
    .progress {
        width: 70px;
        height: 70px;
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
        line-height: 68px;
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
    .appStore{
        border:2px solid #20926B;
        border-radius:5px;
        padding-right:20px;
        padding-left:20px;
    }
    .playStore{
        border:2px solid #20926B;
        border-radius:5px;
        padding-right:7px;
        padding-left:7px;
    }
    .btnForHeadeUp{
        background-color:#20926B;
        color:#fff;
        width: 200px;
        border-radius:40px;
        padding:15px;
    }
    .btnForHeaderIn{
        background-color:#20926B;
        color:#fff;
        width: 200px;
        border-radius:40px;
        padding:15px;
    }
    @media screen and (min-width: 1025px) and (max-width: 1340px){
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
    }

    @media only screen and (width : 1024px){
        .inWidthMobile{
            position:relative;
            right:-40px;
        }
        .inWidthMobileClosed{
            padding-top: 1.3rem !important;
        }
        .inWidthMobileClock{
            position:relative;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-100px;
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
        .VueCarousel{
            width:740px;
        }
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .inWidthMobileClosed{
            padding-top: 0rem !important;
        }
        .inWidthMobileClock{
            position:relative;
        }
    }

    @media (max-width: 500px){
        .inWidthMobileForInvestor{
            text-align:center;
        }
        .VueCarousel{
            width:370px;
        }
        .btnForHeaderIn{
            margin-top:5px;
        }
        .AppStoreMobile{
            justify-content: center !important;
        }
        .GooglePlayMobile{
            justify-content: center !important;
        }
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .inWidthMobileClosed{
            padding-top: 0rem !important;
        }
        .inWidthMobileClock{
            position:relative;
        }
        .clockLeft{
            padding:5px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
    }
    @media only screen and (width:414px){
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
    }
    @media only screen and (width:412px){
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
    }
    @media only screen and (width:411px){
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
    }
    @media only screen and (width:393px){
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
    }
    @media only screen and (width:360px){
        .inWidthMobile{
            position:relative;
            right:-20px;
        }
        .VueCarousel{
            width:330px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-90px;
        }
    }
    @media only screen and (width:320px){
        .imageOverlayCarousel{
            position:relative;
            right:-70px;
        }
        .inWidthMobile{
            position:relative;
            right:0px;
        }
        .widthInMobileBig{
            width:291px;
        }
        .VueCarousel{
            width:300px;
        }
        .inWidthMobileClosed{
            padding-top:0rem !important;
        }
    }
</style>