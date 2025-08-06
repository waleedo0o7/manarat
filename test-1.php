<?php include 'header.php'; ?>
<?php include '_top-header.php'; ?>



<div class="page inner-page contact-us">

    <div class="page-header bg-primary-faded">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://manarat.sca.sa" wire:navigate=""> الرئيسية </a></li>
                    <li class="breadcrumb-item active"> تواصل معنا</li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> تواصل معنا </h1>

            <p class="lead">
                راسل فريق منارات لأي استفسار أو دعم تقني أو اقتراح لتحسين المنصة.
            </p>
        </div>
    </div> <!-- page-header -->

    <div class="inner-content p-0">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="#" method="POST" aria-label="نموذج تواصل معنا">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name"> <span class="color-danger">*</span> الاسم بالكامل </label>
                                        <input type="text" id="contact-name" name="name" class="form-control" placeholder="الاسم بالكامل" required="" autocomplete="name" aria-required="true" aria-label="الاسم بالكامل">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-email"> البريد الإلكتروني </label>
                                        <input type="email" id="contact-email" name="email" class="form-control" placeholder="البريد الإلكتروني" autocomplete="email" aria-label="البريد الإلكتروني">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-phone"> رقم الجوال </label>
                                        <input type="tel" id="contact-phone" name="phone" class="form-control" placeholder="رقم الجوال" autocomplete="tel" aria-label="رقم الجوال">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-type"> النوع </label>
                                        <select class="form-control w-100" id="contact-type" name="type" aria-label="نوع الرسالة">
                                            <option value="AL">اقتراح</option>
                                            <option value="WY">شكوى</option>
                                            <option value="CA">بلاغ</option>
                                            <option value="TX">أخرى</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message"> تفاصيل الرسالة </label>
                                        <textarea class="form-control" id="contact-message" name="message" rows="3" placeholder="تفاصيل الرسالة" required="" autocomplete="off" aria-required="true" aria-label="تفاصيل الرسالة"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary py-4 px-4" aria-label="إرسال الرسالة"> ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 contact-col">
                        <div class="card">
                            <p class="h4 font-medium mb-3"> تواصل مع منارات </p>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-phone color-primary icon-lg"></i>
                                </div>
                                <div class="end contact-card">
                                    <p class="font-medium m-0"> رقم الجوال </p>
                                    <div class="flax-start color-primary">
                                        <a href="tel:966920000968" class="d-inline-flex text-to-copy">+966920000968</a>
                                        <i class="icon icon-copy-2 cursor-pointer"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-message color-primary icon-lg"></i>
                                </div>
                                <div class="end contact-card">
                                    <p class="font-medium m-0"> رسالة قصيرة </p>
                                    <div class="flax-start color-primary">
                                        <a href="tel:966920000968" class="d-inline-flex text-to-copy">+966920000968</a>
                                        <i class="icon icon-copy-2 cursor-pointer"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-envelope color-primary icon-lg"></i>
                                </div>
                                <div class="end contact-card">
                                    <p class="font-medium m-0"> البريد الالكتروني </p>
                                    <div class="flax-start color-primary">
                                        <a href="mailto:info@sca.sa" class="d-inline-flex text-to-copy"> info@sca.sa </a>
                                        <i class="icon icon-copy-2 cursor-pointer"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-envelope color-primary icon-lg"></i>
                                </div>
                                <div class="end contact-card">
                                    <p class="font-medium m-0"> فاكس </p>
                                    <div class="flax-start color-primary">
                                        <a href="#" class="d-inline-flex text-to-copy"> +966920000968 </a>
                                        <i class="icon icon-copy-2 cursor-pointer"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-location color-primary icon-lg"></i>
                                </div>
                                <div class="end">
                                    <p class="font-medium m-0"> الموقع </p>
                                    <div class="flax-start color-primary">
                                        <a href="https://maps.app.goo.gl/aFhjEZatZKC4ar9u7" target="_black" class="d-inline-flex"> المكتب الرئيسي - الرياض </a>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block">
                                <p class="h5 bold"> تابعنا على </p>
                                <div class="flex-start gap-3">
                                    <a href="https://www.facebook.com/" target="_blank" class="social-media-icon no-hover" aria-label="فيسبوك">
                                        <i class="icon icon-lg icon-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://x.com/" target="_blank" class="social-media-icon no-hover" aria-label="تويتر">
                                        <i class="icon icon-lg icon-x-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank" class="social-media-icon no-hover" aria-label="لينكدإن">
                                        <i class="icon icon-lg icon-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" class="social-media-icon no-hover" aria-label="انستغرام">
                                        <i class="icon icon-lg icon-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <hr>

                            <div class="flex-start gap-2 mb-3">
                                <p class="m-0"> ساعات العمل </p>
                                <div class="color-primary"> 24/7</div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <p class="m-0"> وقت الاستجابة </p>
                                <div class="color-primary"> 24 ساعة</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- inner-content -->
    </div> <!-- page -->
</div>


<?php include '_bottom-footer.php'; ?>
<?php include 'footer.php'; ?>