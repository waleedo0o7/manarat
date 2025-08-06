<?php include 'header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page home">

    <section class="home-intro-slider-wrapper">

        <div class="swiper-slider-wrapper">

            <div class="swiper-container swiper-custom"
                data-per-view="1"
                data-per-view-md="1"
                data-per-view-sm="1"
                data-per-view-xs="1"
                data-space-between="0"
                data-next-button="intro-button-next" data-prev-button="intro-button-prev" data-pagination="intro-pagination">

                <div class="swiper-wrapper">

                    <?php foreach (range(0, 4) as $inner_i) { ?>

                        <div class="swiper-slide">

                            <div class="intro-slide-wrapper"

                                style="background-image: linear-gradient(0deg, rgba(9, 42, 30, 0.8) 0%, rgba(9, 42, 30, 0.8) 100%),
                                   url(assets/images/hero-section.webp);">

                                <div class="container">

                                    <div class="intro-home-content">

                                        <h1 class="title mb-4"> ساهم في تطوير قطاع المقاولات </h1>

                                        <p class="text h5 mb-4"> في الهيئة السعودية للمقاولين، نؤمن بأن الإبداع يبدأ بفكرة، وأن التغيير والتطوير ينبعان من مشاركة الجميع. إذا كانت لديك فكرة مبتكرة تسهم في تحسين بيئة العمل في قطاع المقاولات، أو تدعم الابتكار، أو تعزز الكفاءة التشغيلية فنحن نرحب بها</p>

                                        <a href="#" class="btn btn-primary"> قدم فكرتك الآن </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

            <div class="pagination-and-buttons-wrapper">


                <div class="pagination-wrapper">
                    <div class="swiper-pagination" id="intro-pagination"></div>
                </div>


            </div>

        </div> <!-- swiper-slider-wrapper -->

    </section><!-- home-intro-slider-wrapper -->

    <section class="ideas-wrapper section-padding">

        <div class="container">

            <div class="mb-4">
                <h2 class="bold mb-2"> نوعية الأفكار التي نستقبلها </h2>
                <p class="lead"> معايير ومقاييس الافكار الإبداعية التي نستقبلها التي تدعم الإبتكار او تعزز كفاءة التشغيل </p>
            </div>

            <div class="row mt-5 flex-row-stretched">

                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="flex-center w-50px h-50px bg-primary-faded-shape mb-2">
                            <i class="icon icon-lg icon-settings color-primary"></i>
                        </div>
                        <h5 class="bold mb-2"> التحسينات</h5>
                        <p class="lead color-gray m-0"> أفكار تدعم الاستدامة وزيادة الكفاءة </p>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card h-100">
                        <div class="flex-center w-50px h-50px bg-primary-faded-shape mb-2">
                            <i class="icon icon-lg icon-wrench color-primary"></i>
                        </div>
                        <h5 class="bold mb-2"> مقترحات التطوير</h5>
                        <p class="lead color-gray m-0"> أفكار تدعم الاستدامة وزيادة الكفاءة أفكار تدعم الاستدامة وزيادة الكفاءة أفكار تدعم الاستدامة وزيادة الكفاءة أفكار تدعم الاستدامة وزيادة الكفاءة أفكار تدعم الاستدامة وزيادة الكفاءة </p>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card h-100">
                        <div class="flex-center w-50px h-50px bg-primary-faded-shape mb-2">
                            <i class="icon icon-lg icon-network color-primary"></i>
                        </div>
                        <h5 class="bold mb-2"> حلول التقنية</h5>
                        <p class="lead color-gray m-0"> أفكار تدعم الاستدامة وزيادة الكفاءة </p>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card h-100">
                        <div class="flex-center w-50px h-50px bg-primary-faded-shape mb-2">
                            <i class="icon icon-lg icon-initiatives color-primary"></i>
                        </div>
                        <h5 class="bold mb-2"> المبادرات</h5>
                        <p class="lead color-gray m-0"> أفكار تدعم الاستدامة وزيادة الكفاءة </p>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card h-100">
                        <div class="flex-center w-50px h-50px bg-primary-faded-shape mb-2">
                            <i class="icon icon-lg icon-productivity color-primary"></i>
                        </div>
                        <h5 class="bold mb-2"> زيادة الكفاءة</h5>
                        <p class="lead color-gray m-0"> أفكار تدعم الاستدامة وزيادة الكفاءة </p>
                    </div>
                </div>

            </div> <!-- row -->

        </div> <!-- container -->

    </section>

    <section class="apply-guide section-padding bg-white">

        <div class="container">

            <div class="flex-responsive-wrapper mb-5">

                <div class="start">
                    <h2 class="bold mb-2"> آلية التقديم </h2>
                    <p class="lead"> كيفية تقديم فكرتك للمساهمة في تطوير قطاع المقاولات بأفكارك الإبداعية </p>
                </div>

                <div class="end">
                    <a href="#" class="btn btn-primary"> قدم فكرتك الآن </a>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="flex-center flex-column">
                        <div class="flex-center w-60px h-60px bg-primary-faded-shape mb-2">
                            <i class="icon icon-xxl icon-idea color-primary"></i>
                        </div>
                        <h1 class="color-primary mb-2"> الخطوة الاولي </h1>
                        <p class="color-gray"> اضغط على زر "قدّم فكرتك الآن" </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="flex-center flex-column">
                        <div class="flex-center w-60px h-60px bg-primary-faded-shape mb-2">
                            <i class="icon icon-xxl icon-list-checked color-primary"></i>
                        </div>
                        <h1 class="color-primary mb-2"> الخطوة الثانية </h1>
                        <p class="color-gray"> قم بتعبئة النموذج المخصص وشرح فكرتك </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="flex-center flex-column">
                        <div class="flex-center w-60px h-60px bg-primary-faded-shape mb-2">
                            <i class="icon icon-xxl icon-users color-primary"></i>
                        </div>
                        <h1 class="color-primary mb-2"> الخطوة الثالثة </h1>
                        <p class="color-gray"> سيتم دراسة فكرتك من قبل الفريق المختص </p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="sent-ideas section-padding">

        <div class="container">

            <div class="flex-responsive-wrapper">

                <div class="start">
                    <div class="d-block">
                        <h2 class="bold mb-1"> الأفكار المرسلة </h2>
                        <p class="lead"> معايير ومقاييس الافكار الإبداعية التي نستقبلها التي تدعم الإبتكار او تعزز كفاءة التشغيل </p>
                    </div>

                </div>

                <div class="end">
                    <a href="#" class="btn btn-primary"> استعرض المزيد </a>
                </div>

            </div>

            <div class="swiper-slider-wrapper arrows-sides ">

                <div class="swiper-container swiper-custom"
                    data-per-view="3"
                    data-per-view-md="3"
                    data-per-view-sm="2"
                    data-per-view-xs="1"
                    data-space-between="40"
                    data-next-button="test2-button-next" data-prev-button="test2-button-prev" data-pagination="test2-pagination">

                    <div class="swiper-wrapper my-3 py-3">

                        <?php foreach (range(0, 20) as $inner_i) { ?>

                            <div class="swiper-slide p-1">

                                <div class="card text-start no-border base-box-shadow flex-start justify-content-between align-items-start p-4">

                                    <div class="start">
                                        <h6 class="font-medium show-lines-3 mb-3">

                                            <?php
                                            if ($inner_i  ==  0) {
                                                echo '   عنوان علي سطر واحد  ';
                                            } elseif ($i  ==  1) {
                                                echo ' عنوان علي سطرين اتنين صة للمقاولين لتوثيق مراحل المشاريع باستخدام ';
                                            } else {
                                                echo ' عنوان علي ثلاثه سطور او أكثر عادي فكرة لإنشاء منصة إلكترونية مخصصة للمقاولين لتوثيق مراحل المشاريع باستخدام الصور مراحل المشاريع باستخدام الصور مراحل المشاريع باستخدام الصور';
                                            }

                                            ?>
                                        </h6>

                                        <div class="w-100 flex-start bg-primary-faded p-2 base-border-radius mb-2 gap-2">
                                            <i class="icon icon-lg icon-user color-primary"></i>
                                            <span> محمد العتيبي </span>
                                        </div>

                                        <div class="flex-start mb-3">
                                            <span class="py-1 px-2 base-border-radius me-2 base-border small bold"> مبادرة توعية </span>
                                            <span class="py-1 px-2 base-border-radius me-2 base-border small bold"> حل تقني </span>
                                            <span class="py-1 px-2 base-border-radius me-2 base-border small bold"> مقترح تطوير </span>
                                        </div>
                                    </div>
                                    <div class="end">
                                        <a href="#" class="btn btn-light flex-center gap-1">
                                            <span> اطلع على التفاصيل </span>
                                            <i class="icon icon-lg icon-arrow-right"></i>
                                        </a>
                                    </div>





                                </div> <!-- card -->

                            </div> <!-- swiper-slide -->

                        <?php } ?>

                    </div>

                </div>

                <div class="swiper-button-prev" id="test2-button-prev">
                    <i class="icon icon-arrow-circle-left"></i>
                </div>

                <div class="swiper-button-next" id="test2-button-next">
                    <i class="icon icon-arrow-circle-right"></i>
                </div>

            </div> <!-- swiper-slider-wrapper -->

        </div>

    </section>

    <section class="faq section-padding bg-white">

        <div class="container">

            <div class="flex-responsive-wrapper mb-5">

                <div class="start">
                    <h2 class="bold mb-1"> الأسئلة الشائعة </h2>
                    <p class="lead"> معايير ومقاييس الافكار الإبداعية التي نستقبلها التي تدعم الإبتكار او تعزز كفاءة التشغيل </p>
                </div>

                <div class="end">
                    <a href="#" class="btn btn-light"> استعراض المزيد </a>
                </div>

            </div>

            <div class="custom-accordion">

                <div class="accordion-item">
                    <div class="accordion-item-header" id="headingOne">
                        <button class="accordion-button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p class="m-0 lead font-medium"> ما الهدف من استقبال الأفكار عبر هذا النموذج؟ </p>
                            <i class="icon icon-chevron-down"></i>
                        </button>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="accordion-item-body">
                            نهدف من خلال استقبال الأفكار إلى تعزيز المشاركة المجتمعية وتمكين الأفراد من المساهمة في تحسين خدمات الهيئة والقطاع بشكل عام.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header" id="headingTwo">
                        <button class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="m-0 lead font-medium"> من يمكنه تقديم فكرة؟ </p>
                            <i class="icon icon-chevron-down"></i>
                        </button>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="accordion-item-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header" id="headingThree">
                        <button class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="m-0 lead font-medium"> هل سيتم التواصل معي بعد تقديم الفكرة؟ </p>
                            <i class="icon icon-chevron-down"></i>
                        </button>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="accordion-item-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header" id="headingFour">
                        <button class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p class="m-0 lead font-medium"> هل كل الأفكار يتم تنفيذها؟ </p>
                            <i class="icon icon-chevron-down"></i>
                        </button>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="accordion-item-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include 'footer.php'; ?>