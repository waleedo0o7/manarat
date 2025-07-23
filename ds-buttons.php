<?php include 'header.php'; ?>

<style>
    .web-app-top-bar {
        display: none !important
    }


    button,
    a {
        margin-inline-end: 10px;
    }
</style>

<div class="page default-layout page-name">

    <div class="ds-section">

        <div class="ds-title">
            <h1 class="text-center"> Buttons </h1>
        </div>

        <div class="container">

            <div class="ds-sub-section mb-5">

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Normal </p>
                    </div>

                    <div class="col-md-10">
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-gray">gray</button>
                        </div>
                    </div>

                </div>

            </div>



            <div class="ds-sub-section mb-5">

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Faded </p>
                    </div>

                    <div class="col-md-10">
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary-faded"> Primary </button>

                            <button type="button" class="btn btn-secondary-faded"> Secondary </button>

                            <button type="button" class="btn btn-success-faded"> Success </button>




                            <button type="button" class="btn btn-danger-faded"> Danger </button>
                        </div>
                    </div>

                </div>

            </div>







            <div class="ds-sub-section mb-5">
                <div class="row">
                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Disabled </p>
                    </div>
                    <div class="col-md-10">
                        <div class="d-flex ">
                            <button type="button" disabled class="btn btn-primary">Primary</button>
                            <button type="button" disabled class="btn btn-secondary">Secondary</button>
                            <button type="button" disabled class="btn btn-success">Success</button>
                            <button type="button" disabled class="btn btn-danger">Danger</button>
                            <button type="button" disabled class="btn btn-warning">Warning</button>
                            <button type="button" disabled class="btn btn-info">Info</button>
                            <button type="button" disabled class="btn btn-light">Light</button>
                            <button type="button" disabled class="btn btn-dark">Dark</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="ds-sub-section mb-5">
                <div class="row">
                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Outline Normal </p>
                    </div>
                    <div class="col-md-10">
                        <div class="d-flex ">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" disabled class="btn btn-outline-light">Light</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ds-sub-section mb-5">
                <div class="row">
                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Outline Disabled </p>
                    </div>
                    <div class="col-md-10">
                        <div class="d-flex ">
                            <button type="button" disabled class="btn btn-outline-primary">Primary</button>
                            <button type="button" disabled class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" disabled class="btn btn-outline-success">Success</button>
                            <button type="button" disabled class="btn btn-outline-danger">Danger</button>
                            <button type="button" disabled class="btn btn-outline-warning">Warning</button>
                            <button type="button" disabled class="btn btn-outline-info">Info</button>
                            <button type="button" disabled class="btn btn-outline-light">Light</button>
                            <button type="button" disabled class="btn btn-outline-dark">Dark</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ds-sub-section mb-5">

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Sizes </p>
                    </div>

                    <div class="col-md-7">

                        <div class="mb-2">

                            <button type="button" class="btn btn-primary btn-xs small"> Button XS </button>
                            <button type="button" class="btn btn-primary btn-sm">Button small </button>
                            <button type="button" class="btn btn-primary">Button normal </button>
                            <button type="button" class="btn btn-primary btn-lg">Button large </button>

                        </div>

                        <button type="button" class="btn btn-primary w-100">Primary full width </button>

                    </div>

                </div>
            </div>


            <div class="ds-sub-section mb-5">
                <div class="row">
                    <div class="col-md-2">
                        <p class="m-0 mt-1 lead"> Action buttons </p>
                    </div>

                    <div class="col-md-10">

                        <div class="mb-3">
                            <a href="#" class="btn btn-action btn-action-sm btn-primary"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-sm btn-secondary"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-sm btn-success"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-sm btn-danger"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-sm btn-warning"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-sm btn-info"> <i class="icon icon-trash"></i> </a>
                        </div>
                        <div class="mb-3">
                            <a href="#" class="btn btn-action btn-primary"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-secondary"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-success"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-danger"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-warning"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-info"> <i class="icon icon-trash"></i> </a>
                        </div>

                        <div class="mb-3">
                            <a href="#" class="btn btn-action btn-action-lg btn-primary"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-lg btn-secondary"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-lg btn-success"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-lg btn-danger"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-lg btn-warning"> <i class="icon icon-trash"></i> </a>
                            <a href="#" class="btn btn-action btn-action-lg btn-info"> <i class="icon icon-trash"></i> </a>
                        </div>

                    </div>
                </div>
            </div>

            <hr />

            <div class="ds-sub-section mb-5">
                <div class="row">
                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> App buttons </p>
                    </div>
                    <div class="col-md-7">

                        <div class="mb-3">
                            <button type="button" class="btn btn-primary min-w-200"> Continue </button>
                            <button type="button" class="btn btn-primary-faded min-w-200"> Continue </button>
                            <button type="button" class="btn btn-outline-primary min-w-200"> Continue </button>
                            <button type="button" class="btn btn-link min-w-200"> Continue </button>
                        </div>


                        <div class="mb-3">
                            <button type="button" disabled class="btn btn-primary min-w-200"> Continue </button>
                            <button type="button" disabled class="btn btn-primary-faded min-w-200"> Continue </button>
                            <button type="button" disabled class="btn btn-outline-primary min-w-200"> Continue </button>
                            <button type="button" disabled class="btn btn-link min-w-200"> Continue </button>
                        </div>


                        <div class="mb-3">
                            <button type="button" class="btn btn-primary min-w-200"> <i class="start-center-icon icon icon-trash"></i> Continue </button>
                            <button type="button" class="btn btn-primary-faded min-w-200"> <i class="start-center-icon icon icon-trash"></i> Continue </button>
                            <button type="button" class="btn btn-outline-primary min-w-200"> <i class="start-center-icon icon icon-trash"></i> Continue </button>
                            <button type="button" class="btn btn-link min-w-200"> <i class="start-center-icon icon icon-trash"></i> Continue </button>
                        </div>


                        <div class="mb-3">
                            <button type="button" class="btn btn-primary min-w-200"> Continue <i class="end-center-icon icon icon-trash"></i> </button>
                            <button type="button" class="btn btn-primary-faded min-w-200"> Continue <i class="end-center-icon icon icon-trash"></i> </button>
                            <button type="button" class="btn btn-outline-primary min-w-200"> Continue <i class="end-center-icon icon icon-trash"></i> </button>
                            <button type="button" class="btn btn-link min-w-200"> Continue <i class="end-center-icon icon icon-trash"></i> </button>
                        </div>

                        <p> for more click <button type="button" class="btn btn-link p-0"> here </button> </p>

                        <button href="#" class="btn btn-action btn-primary"> <i class="icon icon-trash"></i> </button>
                        <button href="#" class="btn btn-action btn-primary-faded"> <i class="icon icon-trash"></i> </button>
                        <button href="#" class="btn btn-action btn-outline-primary"> <i class="icon icon-trash"></i> </button>

                    </div>


                </div>
            </div>




        </div> <!-- container -->

    </div> <!-- ds-section -->

</div> <!-- page -->

<?php include 'footer.php'; ?>