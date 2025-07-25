<?php include 'header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page ideas-list">

    <div class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> الرئيسية </a></li>
                    <li class="breadcrumb-item active"> الأفكار الإبداعية المرسلة </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> الأفكار الإبداعية المرسلة </h1>

        </div>

    </div> <!-- page-header -->


    <div class="inner-content">

        <div class="container">

            <div class="flex-between mb-3">

                <p class="lead"> 374 فكرة موجودة </p>

                <div class="dropdown">
                    <button class="btn btn-light base-border" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ترتيب حسب
                        <i class="icon icon-sort icon-sm ms-2"></i>
                    </button>
                    <div class="dropdown-menu text-start" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"> ترتيب 1 </a>
                        <a class="dropdown-item" href="#"> ترتيب 1 </a>
                        <a class="dropdown-item" href="#"> ترتيب 1 </a>
                        <a class="dropdown-item" href="#"> ترتيب 1 </a>
                    </div>
                </div>

            </div>

            <div class="row">

                <?php foreach (range(0, 7) as $i) { ?>

                    <div class="col-lg-4">

                        <div class="card text-start no-border base-box-shadow flex-start justify-content-start align-items-start p-4 mb-3">

                            <h6 class="font-medium mb-3"> فكرة لإنشاء منصة إلكترونية مخصصة للمقاولين لتوثيق مراحل المشاريع باستخدام الصور والتقارير الزمنية. </h6>

                            <div class="w-100 flex-start bg-primary-faded p-2 base-border-radius mb-2 gap-2">
                                <i class="icon icon-lg icon-user color-primary"></i>
                                <span> محمد العتيبي </span>
                            </div>

                            <div class="flex-start mb-3">
                                <span class="py-1 px-2 base-border-radius me-2 base-border small bold"> مبادرة توعية </span>
                                <span class="py-1 px-2 base-border-radius me-2 base-border small bold"> حل تقني </span>
                                <span class="py-1 px-2 base-border-radius me-2 base-border small bold"> مقترح تطوير </span>
                            </div>

                            <a href="#" class="btn btn-light flex-center gap-1">
                                <span> اطلع على التفاصيل </span>
                                <i class="icon icon-lg icon-arrow-right"></i>
                            </a>

                        </div> <!-- card -->

                    </div>

                <?php } ?>

            </div>

        </div>

    </div> <!-- inner-content -->


</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include 'footer.php'; ?>