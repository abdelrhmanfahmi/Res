<template>
    <div class="terms pt-5">
        <div class="pb-5">
            <img :src="'assets/images/back-graond-04.jpg'" class="imageHeader" alt="">
        </div>
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <img :src="'assets/images/back-graond-04.jpg'" width="100px" height="100px" alt="">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3 style="color:#38435B;">Terms And Conditions</h3>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-md-12 d-flex justify-content-center">
                   <div class="accordion" id="myAccordion" style="width:800px;">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="border:1px solid #ddd;">In ac pellentesque lacus, a posuere lectus. Fusce vulputate?</button>									
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>In ac pellentesque lacus, a posuere lectus. Fusce vulputate?
                                        Habitasse platea dictumst. Ut venenatis eros in auctor facilisis. Fusce fermentum interdum mauris quis
                                        volutpat. Donec est elit, dictum nec velit et, rutrum facilisis erat. Aliquam vulputate ornare lacus, sed
                                        volutpat nisi placerat vel.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="border:1px solid #ddd;">In ac pellentesque lacus, a posuere lectus. Fusce vulputate?</button>									
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>In ac pellentesque lacus, a posuere lectus. Fusce vulputate?
                                        Habitasse platea dictumst. Ut venenatis eros in auctor facilisis. Fusce fermentum interdum mauris quis
                                        volutpat. Donec est elit, dictum nec velit et, rutrum facilisis erat. Aliquam vulputate ornare lacus, sed
                                        volutpat nisi placerat vel.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" style="border:1px solid #ddd;">In ac pellentesque lacus, a posuere lectus. Fusce vulputate?</button>									
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>In ac pellentesque lacus, a posuere lectus. Fusce vulputate?
                                        Habitasse platea dictumst. Ut venenatis eros in auctor facilisis. Fusce fermentum interdum mauris quis
                                        volutpat. Donec est elit, dictum nec velit et, rutrum facilisis erat. Aliquam vulputate ornare lacus, sed
                                        volutpat nisi placerat vel.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" style="border:1px solid #ddd;">In ac pellentesque lacus, a posuere lectus. Fusce vulputate?</button>									
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>In ac pellentesque lacus, a posuere lectus. Fusce vulputate?
                                        Habitasse platea dictumst. Ut venenatis eros in auctor facilisis. Fusce fermentum interdum mauris quis
                                        volutpat. Donec est elit, dictum nec velit et, rutrum facilisis erat. Aliquam vulputate ornare lacus, sed
                                        volutpat nisi placerat vel.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" style="border:1px solid #ddd;">In ac pellentesque lacus, a posuere lectus. Fusce vulputate?</button>									
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>In ac pellentesque lacus, a posuere lectus. Fusce vulputate?
                                        Habitasse platea dictumst. Ut venenatis eros in auctor facilisis. Fusce fermentum interdum mauris quis
                                        volutpat. Donec est elit, dictum nec velit et, rutrum facilisis erat. Aliquam vulputate ornare lacus, sed
                                        volutpat nisi placerat vel.
                                    </p>
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
    name:"Terms",
}
</script>

<style scoped>
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
</style>