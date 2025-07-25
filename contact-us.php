<?php include 'header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page contact-us">

    <div class="page-header bg-primary-faded">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> تواصل معنا </a></li>
                    <li class="breadcrumb-item active"> تواصل معنا </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> تواصل معنا </h1>

            <p class="lead"> مثال على وصف الخدمة لشراء قطعة أرض لبناء منزلك، يتطلب ذلك توثيق عملية البيع والشراء في مكاتب التوثيق أو خدمات كاتب العدل لتسجيل العقار باسمك. </p>

        </div>

    </div> <!-- page-header -->


    <div class="inner-content p-0">


        <div class="section-padding">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label> <span class="color-danger">*</span> الاسم الاول </label>
                            <input type="text" class="form-control" placeholder="الاسم الاول">
                        </div> <!-- form-group -->
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label> البريد الإلكتروني </label>
                            <input type="text" class="form-control" placeholder="نص تلميحي">
                        </div> <!-- form-group -->
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label> رقم الجوال </label>
                            <input type="text" class="form-control" placeholder="نص تلميحي">
                        </div> <!-- form-group -->
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label> النوع </label>
                            <select class="form-control w-100">
                                <option value="AL">Brazil</option>
                                <option value="WY">Canada</option>
                                <option value="CA">France</option>
                                <option value="TX">Germany</option>
                                <option value="FL">Italy</option>
                                <option value="NY">Japan</option>
                                <option value="IL">Kenya</option>
                                <option value="GA">Mexico</option>
                                <option value="OH">Nigeria</option>
                                <option value="MI">Spain</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> تفاصيل الفكرة </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="النص المُدخل"></textarea>
                        </div>
                    </div>


                    <div class="col-lg-12 mb-4">

                        <div class="mb-1">
                            <p class="lead font-medium"> إرفاق ملفات داعمة (اختياري) </p>
                            <p class="small color-gray"> يمكنك إرفاق ملفات لتوضيح فكرتك (PDF، صور، عروض، مستندات). الحد الأقصى للملف 10MB. </p>
                        </div>

                        <div class="d-block">

                            <a href="#" class="btn btn-secondary relative upload-files-button mb-2">
                                <span class="me-1"> تصفح الملفات </span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.62508 5.66669C9.62508 5.32151 9.34526 5.04169 9.00008 5.04169C8.6549 5.04169 8.37508 5.32151 8.37508 5.66669V8.37502H5.66675C5.32157 8.37502 5.04175 8.65484 5.04175 9.00002C5.04175 9.3452 5.32157 9.62502 5.66675 9.62502H8.37508V12.3334C8.37508 12.6785 8.6549 12.9584 9.00008 12.9584C9.34526 12.9584 9.62508 12.6785 9.62508 12.3334V9.62502H12.3334C12.6786 9.62502 12.9584 9.3452 12.9584 9.00002C12.9584 8.65484 12.6786 8.37502 12.3334 8.37502H9.62508V5.66669Z" fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.00008 17.9584C4.05253 17.9584 0.041748 13.9476 0.041748 9.00002C0.041748 4.05247 4.05253 0.041687 9.00008 0.041687C13.9476 0.041687 17.9584 4.05247 17.9584 9.00002C17.9584 13.9476 13.9476 17.9584 9.00008 17.9584ZM1.29175 9.00002C1.29175 13.2572 4.74289 16.7084 9.00008 16.7084C13.2573 16.7084 16.7084 13.2572 16.7084 9.00002C16.7084 4.74283 13.2573 1.29169 9.00008 1.29169C4.74289 1.29169 1.29175 4.74283 1.29175 9.00002Z" fill="white"></path>
                                </svg>
                            </a>


                            <input type="file" id="upload-files-input" class="d-none" multiple>


                            <div id="files-list" class="files-list"></div>

                        </div>

                    </div>

                    <div class="col-lg-12">
                        <a href="#" class="btn btn-primary py-4 px-4"> ارسال فكرتك الآن </a>
                    </div>

                </div>

            </div>

        </div>

    </div> <!-- inner-content -->


</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include 'footer.php'; ?>