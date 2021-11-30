<template>
    <div class="favourite pt-5">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <i class="fa fa-times changeCloseIcon" @click="closeSidebar"></i>
                <ul class="sidebar-nav">
                    <li>
                        <router-link :to="'/favourite'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="firstLI"> <i class="fa fa-heart" style="font-size:20px"></i> &nbsp;&nbsp;&nbsp;  Favourite</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/wallet'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="secondLI"> <img :src="'assets/images/Wallet.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Wallet</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/documents'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="thirdLI"> <img :src="'assets/images/Document.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Documents</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/referral'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fourthLI"> <img :src="'assets/images/noun_marketing_3993120.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Referral</a>
                        </router-link>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <span style="color:#888383;margin-left:20px;">help</span> </a>
                    </li>
                    <li>
                        <router-link :to="'/setting'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="fifthLI"> <img :src="'assets/images/Setting.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Settings</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/support'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="sixthLI"> <img :src="'assets/images/Chat.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Support</a>
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="'/'" class="nav-item" exact>
                            <a href="javascript:void(0);" id="sevenLI"> <img :src="'assets/images/Logout.svg'" width="20px" alt=""> &nbsp;&nbsp;&nbsp;  Log Out</a>
                        </router-link>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <i class="fa fa-arrow-right openSidebar" @click="openSidebar"></i>
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-12">
                            <h3 style="color:#38435B;">FAVOURITE</h3>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ChangeCols mb-3 zzzz">
                            <div class="card ChangeCols2" style="box-shadow: 0px 3px 8px #EDEDED;">
                                <img :src="'/assets/images/back-graond-04.jpg'" class="card-img-top" alt="...">
                                <div class="card-img-overlay card-inverse">
                                    <div class="row imageOvelayRow">
                                        <div class="col-auto">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-heart heartOverlay" style="color:red;"></i>
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
                                        <div class="col-md-12 d-flex bd-highlight">
                                            <div class="officeCSS mr-auto p-2 bd-highlight">
                                                <img :src="'assets/images/Home.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>Office</span>
                                            </div>
                                            <div class="londonCSS p-2 bd-highlight">
                                                <img :src="'assets/images/Location.svg'" width="15px" alt=""> &nbsp;&nbsp;&nbsp; <span>London</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight">
                                        <div class="col-md-12 changeHeight d-flex bd-highlight">
                                            <div class="dataCSS pt-2 mr-auto p-2 bd-highlight">
                                                <p style="font-size:18px;">100 $ &nbsp; <img :src="'assets/images/Group 2374.svg'" width="15px" alt=""></p>
                                                <div class="d-flex dataCSS1">
                                                    <p style=""><img :src="'assets/images/Group 2250.svg'" width="15px" alt=""> &nbsp; 4</p>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <p style=""><img :src="'assets/images/Group 2253.svg'" width="15px" alt=""> &nbsp; 120 m2</p>
                                                </div>
                                                <div class="d-flex dataCSS2">
                                                    <p style="color:#20926B;">$: 38%</p> &nbsp;
                                                    &nbsp;&nbsp;
                                                <p style="color:#20926B;"><img :src="'assets/images/Group 16303.svg'" width="14px" alt=""> 64%</p>
                                                </div>
                                            </div>
                                            <div class="dataProgress p-2 bd-highlight">
                                                <div class="progress closed"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                    <div class="progress-value">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row changeHeight2">
                                        <div class="col-md-12 changeHeight2 d-flex bd-highlight">
                                            <div class="dataCSS3 pt-2 mr-auto p-2 bd-highlight">
                                                <p class="clockLeft"><i class="fas fa-clock"></i> 28d 09h 31m left </p>
                                                <p style="color:#3F6D97;font-size:13px;">Earning Period :</p>
                                            </div>
                                            <div class="dataCSS4 p-2 bd-highlight">
                                                <p class="closeRight">Closed</p>
                                                <p class="clockRight"><i class="fas fa-clock"></i> 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
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
import $ from "jquery";
export default {
    name:"Favourite",
    mounted(){
        var namePage = document.URL.split("/")[4];
        // console.log(namePage);
        if(namePage == "favourite"){
            $('#firstLI').addClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "wallet"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').addClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "documents"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').addClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "referral"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').addClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "setting"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').addClass('activeNow');
            $('#sixthLI').removeClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else if(namePage == "support"){
            $('#firstLI').removeClass('activeNow');
            $('#secondLI').removeClass('activeNow');
            $('#thirdLI').removeClass('activeNow');
            $('#fourthLI').removeClass('activeNow');
            $('#fifthLI').removeClass('activeNow');
            $('#sixthLI').addClass('activeNow');
            $('#sevenLI').removeClass('activeNow');
        }else{
            // console.log('none');
        }
    },
    methods:{
        closeSidebar:function(e){
            e.preventDefault();
            $('.openSidebar').css('display' , 'initial');
            $("#wrapper").toggleClass("toggled");
        },
        openSidebar:function(e){
            e.preventDefault();
            $('.openSidebar').css('display' , 'none');
            $('.changeCloseIcon').css('display' , 'initial');
            $("#wrapper").toggleClass("toggled");
        },
    }
}

$(document).ready(function(){

    if($(window).width() == 1024){
        $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
        $('.zzzz').addClass('col-md-4');
    }
    if($(window).width() == 768){
        $('.zzzz').removeClass('col-md-3 col-md-4 col-md-6 ChangeCols');
        $('.zzzz').addClass('col-md-6');
    }
    if($(window).width() > 1090){
        $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
        $('.zzzz').addClass('col-md-4');
    }
    if($(window).width() > 1340){
        $('.zzzz').removeClass('col-md-4 col-md-6 col-md-3 ChangeCols');
        $('.zzzz').addClass('col-md-3');
    }

    var namePage = document.URL.split("/")[4];
    // console.log(namePage);
    if(namePage == "favourite"){
        $('#firstLI').addClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "wallet"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').addClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "documents"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').addClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "referral"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').addClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "setting"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').addClass('activeNow');
        $('#sixthLI').removeClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else if(namePage == "support"){
        $('#firstLI').removeClass('activeNow');
        $('#secondLI').removeClass('activeNow');
        $('#thirdLI').removeClass('activeNow');
        $('#fourthLI').removeClass('activeNow');
        $('#fifthLI').removeClass('activeNow');
        $('#sixthLI').addClass('activeNow');
        $('#sevenLI').removeClass('activeNow');
    }else{
        // console.log('none');
    }

    $(window).on('resize' , function(){
        if($(window).width() == 1024){
            $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
            $('.zzzz').addClass('col-md-4');
        }
        if($(window).width() == 768){
            $('.zzzz').removeClass('col-md-3 col-md-4 col-md-6 ChangeCols');
            $('.zzzz').addClass('col-md-6');
        }
        if($(window).width() > 1090){
            $('.zzzz').removeClass('col-md-3 col-md-6 col-md-4 ChangeCols');
            $('.zzzz').addClass('col-md-4');
        }
        if($(window).width() > 1340){
            $('.zzzz').removeClass('col-md-4 col-md-6 col-md-3 ChangeCols');
            $('.zzzz').addClass('col-md-3');
        }
    });
});
</script>

<style scoped>
    .changeHeight{
        height:110px;
    }
    .changeHeight2{
        height:85px;
    }
    .dataProgress{
        position:relative;
        right:-10px;
    }
    .dataCSS{
        position:relative;
        right:10px;
    }
    .dataCSS3{
        position:relative;
        right:15px;
    }
    .dataCSS4{
        position:relative;
        right:10px;
    }
    .dataCSS1{
        position:relative;
        top:-10px;
        width:120px;
    }
    .dataCSS2{
        position:relative;
        top:-20px;
    }
    .officeCSS{
        padding-right: 22px !important;
        background-color: #F5F5F5;
    }
    .londonCSS{
        background-color: #F5F5F5;
        padding-left: 12px !important;
    }
    .sidebar-nav li a.activeNow{
        color: #20966B;
        border-left: 3px solid #20966B;
        background-color: #F1F1F1;
    }
    .openSidebar{
        position:relative;
        right:0px;
        top:30px;
        display:none;
        cursor:pointer;
    }
    .changeCloseIcon{
        position:relative;
        right:-230px;
        top:-3px;
        cursor:pointer;
    }
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: absolute;
        top:100px;
        left: 250px;
        width: 0;
        height: 460px;
        margin-left: -250px;
        border-right:1px solid #eee;
        overflow-y: auto;
        background: #fff;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 178px;
        margin: 0;
        padding: 2px;
        list-style: none;
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 57px;
        width:200px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #000;
        width:200px;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #20926B;
        background-color: #F1F1F1;
        border-left:3px solid #20926B;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
        border-left:3px solid #20926B;
    }

    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }

    .sidebar-nav > .sidebar-brand a {
        color: #20926B;
    }

    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
        border-left:4px solid #20926B;
    }

    
    #wrapper {
        padding-left: 192px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }

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
        right:-10px;
    }
    .imageOverlayCarousel{
        border: 1px solid #4D4D4D;
        background-color: #4D4D4D;
        opacity: 0.5;
        border-radius: 17px;
        padding: 2px;
        position: relative;
        top: -3px;
        right: -70px;
        padding-right: 5px;
        padding-left: 5px;
    }
    .clockLeft{
        color: #3F6D97;
        border: 1px solid #3F6D97;
        border-radius: 20px;
        font-size: 11px;
        padding: 7px;
        width: 113px;
    }
    .closeRight{
        color: #3F6D97;
        border: 1px solid #3F6D97;
        padding: 5px;
        border-radius: 20px;
        text-align: center;
        font-size: 13px;
        width: 90px;
    }
    .clockRight{
        color: #3F6D97;
        border: 1px solid #3F6D97;
        border-radius: 20px;
        font-size: 13px;
        padding: 7px;
        position: relative;
        top: -10px;
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
        border-width: 6px;
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
            margin-bottom: 20px;
            width:83px;
            height:80px;
        }
    }
    @media screen and (min-width: 1025px) and (max-width: 1340px){
        .inWidthMobile{
            position:relative;
            right:-90px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-160px;
        }
        .dataCSS4{
            position:relative;
            right:-10px;
        }
        #wrapper{
            padding-left:0px;
        }
        .changeCloseIcon{

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
        #wrapper{
            padding-left:0px;
        }
        .changeCloseIcon{
            
        }
    }

    @media screen and (min-width:768px) and (max-width:1000px) {
        .imageOverlayCarousel{
            position:relative;
            right:-140px;
        }
        .inWidthMobile{
            position:relative;
            right:-70px;
        }
        .inWidthMobileClosed{
            padding-top: 0rem !important;
        }
        .inWidthMobileClock{
            position:relative;
        }
        #wrapper{
            padding-left:0px;
        }
        .changeCloseIcon{
            
        }
    }

    @media (max-width: 500px){
        .changeCloseIcon{
            
        }
        #wrapper{
            padding-left:0px;
        }
        .inWidthMobile{
            position:relative;
            right:-40px;
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
            right:-120px;
        }
    }
    @media only screen and (width:414px){
        .inWidthMobile{
            position:relative;
            right:-80px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-160px;
        }
    }
    @media only screen and (width:412px){
        .inWidthMobile{
            position:relative;
            right:-80px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-160px;
        }
    }
    @media only screen and (width:411px){
        .inWidthMobile{
            position:relative;
            right:-80px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-160px;
        }
    }
    @media only screen and (width:393px){
        .inWidthMobile{
            position:relative;
            right:-110px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-150px;
        }
    }
    @media only screen and (width:360px){
        .inWidthMobile{
            position:relative;
            right:-30px;
        }
        .imageOverlayCarousel{
            position:relative;
            right:-110px;
        }
    }
    @media only screen and (width:320px){
        .imageOverlayCarousel{
            position:relative;
            right:-85px;
        }
        .inWidthMobile{
            position:relative;
            right:-10px;
        }
        .widthInMobileBig{
            width:291px;
        }
        .inWidthMobileClosed{
            padding-top:0rem !important;
        }
        .ChangeCols2{
            width:264px;
        }
    }
</style>