<?php include 'header.php'; ?>

<style>
    .color-primary-light-50 {
        background-color: var(--color-primary-light-50);
    }

    .color-primary-light-75 {
        background-color: var(--color-primary-light-75);
    }

    .color-primary-light-100 {
        background-color: var(--color-primary-light-100);
    }

    .color-primary-light-200 {
        background-color: var(--color-primary-light-200);
    }

    .color-primary-light-300 {
        background-color: var(--color-primary-light-300);
    }

    .color-primary-light-400 {
        background-color: var(--color-primary-light-400);
    }

    .color-primary-light-500 {
        background-color: var(--color-primary-light-500);
    }

    .color-primary-dark-50 {
        background-color: var(--color-primary-dark-50);
    }

    .color-primary-dark-75 {
        background-color: var(--color-primary-dark-75);
    }

    .color-primary-dark-100 {
        background-color: var(--color-primary-dark-100);
    }

    .color-primary-dark-200 {
        background-color: var(--color-primary-dark-200);
    }

    .color-primary-dark-300 {
        background-color: var(--color-primary-dark-300);
    }

    .color-primary-dark-400 {
        background-color: var(--color-primary-dark-400);
    }

    .color-primary-dark-500 {
        background-color: var(--color-primary-dark-500);
    }

    .color-secondary-light-50 {
        background-color: var(--color-secondary-light-50);
    }

    .color-secondary-light-75 {
        background-color: var(--color-secondary-light-75);
    }

    .color-secondary-light-100 {
        background-color: var(--color-secondary-light-100);
    }

    .color-secondary-light-200 {
        background-color: var(--color-secondary-light-200);
    }

    .color-secondary-light-300 {
        background-color: var(--color-secondary-light-300);
    }

    .color-secondary-light-400 {
        background-color: var(--color-secondary-light-400);
    }

    .color-secondary-light-500 {
        background-color: var(--color-secondary-light-500);
    }

    .color-secondary-dark-50 {
        background-color: var(--color-secondary-dark-50);
    }

    .color-secondary-dark-75 {
        background-color: var(--color-secondary-dark-75);
    }

    .color-secondary-dark-100 {
        background-color: var(--color-secondary-dark-100);
    }

    .color-secondary-dark-200 {
        background-color: var(--color-secondary-dark-200);
    }

    .color-secondary-dark-300 {
        background-color: var(--color-secondary-dark-300);
    }

    .color-secondary-dark-400 {
        background-color: var(--color-secondary-dark-400);
    }

    .color-secondary-dark-500 {
        background-color: var(--color-secondary-dark-500);
    }

    .color-success-light-50 {
        background-color: var(--color-success-light-50);
    }

    .color-success-light-75 {
        background-color: var(--color-success-light-75);
    }

    .color-success-light-100 {
        background-color: var(--color-success-light-100);
    }

    .color-success-light-200 {
        background-color: var(--color-success-light-200);
    }

    .color-success-light-300 {
        background-color: var(--color-success-light-300);
    }

    .color-success-light-400 {
        background-color: var(--color-success-light-400);
    }

    .color-success-light-500 {
        background-color: var(--color-success-light-500);
    }

    .color-success-dark-50 {
        background-color: var(--color-success-dark-50);
    }

    .color-success-dark-75 {
        background-color: var(--color-success-dark-75);
    }

    .color-success-dark-100 {
        background-color: var(--color-success-dark-100);
    }

    .color-success-dark-200 {
        background-color: var(--color-success-dark-200);
    }

    .color-success-dark-300 {
        background-color: var(--color-success-dark-300);
    }

    .color-success-dark-400 {
        background-color: var(--color-success-dark-400);
    }

    .color-success-dark-500 {
        background-color: var(--color-success-dark-500);
    }

    .color-warning-light-50 {
        background-color: var(--color-warning-light-50);
    }

    .color-warning-light-75 {
        background-color: var(--color-warning-light-75);
    }

    .color-warning-light-100 {
        background-color: var(--color-warning-light-100);
    }

    .color-warning-light-200 {
        background-color: var(--color-warning-light-200);
    }

    .color-warning-light-300 {
        background-color: var(--color-warning-light-300);
    }

    .color-warning-light-400 {
        background-color: var(--color-warning-light-400);
    }

    .color-warning-light-500 {
        background-color: var(--color-warning-light-500);
    }

    .color-warning-dark-50 {
        background-color: var(--color-warning-dark-50);
    }

    .color-warning-dark-75 {
        background-color: var(--color-warning-dark-75);
    }

    .color-warning-dark-100 {
        background-color: var(--color-warning-dark-100);
    }

    .color-warning-dark-200 {
        background-color: var(--color-warning-dark-200);
    }

    .color-warning-dark-300 {
        background-color: var(--color-warning-dark-300);
    }

    .color-warning-dark-400 {
        background-color: var(--color-warning-dark-400);
    }

    .color-warning-dark-500 {
        background-color: var(--color-warning-dark-500);
    }

    .color-danger-light-50 {
        background-color: var(--color-danger-light-50);
    }

    .color-danger-light-75 {
        background-color: var(--color-danger-light-75);
    }

    .color-danger-light-100 {
        background-color: var(--color-danger-light-100);
    }

    .color-danger-light-200 {
        background-color: var(--color-danger-light-200);
    }

    .color-danger-light-300 {
        background-color: var(--color-danger-light-300);
    }

    .color-danger-light-400 {
        background-color: var(--color-danger-light-400);
    }

    .color-danger-light-500 {
        background-color: var(--color-danger-light-500);
    }

    .color-danger-dark-50 {
        background-color: var(--color-danger-dark-50);
    }

    .color-danger-dark-75 {
        background-color: var(--color-danger-dark-75);
    }

    .color-danger-dark-100 {
        background-color: var(--color-danger-dark-100);
    }

    .color-danger-dark-200 {
        background-color: var(--color-danger-dark-200);
    }

    .color-danger-dark-300 {
        background-color: var(--color-danger-dark-300);
    }

    .color-danger-dark-400 {
        background-color: var(--color-danger-dark-400);
    }

    .color-danger-dark-500 {
        background-color: var(--color-danger-dark-500);
    }

    .color-gray-light-100 {
        background-color: var(--color-gray-light-100);
    }

    .color-gray-light-200 {
        background-color: var(--color-gray-light-200);
    }

    .color-gray-light-300 {
        background-color: var(--color-gray-light-300);
    }

    .color-gray-light-400 {
        background-color: var(--color-gray-light-400);
    }

    .color-gray-light-500 {
        background-color: var(--color-gray-light-500);
    }

    .color-gray-dark-100 {
        background-color: var(--color-gray-dark-100);
    }

    .color-gray-dark-200 {
        background-color: var(--color-gray-dark-200);
    }

    .color-gray-dark-300 {
        background-color: var(--color-gray-dark-300);
    }

    .color-gray-dark-400 {
        background-color: var(--color-gray-dark-400);
    }

    .color-gray-dark-500 {
        background-color: var(--color-gray-dark-500);
    }

    .color-text-light-50 {
        background-color: var(--color-text-light-50);
    }

    .color-text-light-100 {
        background-color: var(--color-text-light-100);
    }

    .color-text-light-200 {
        background-color: var(--color-text-light-200);
    }

    .color-text-light-400 {
        background-color: var(--color-text-light-400);
    }

    .color-text-dark-50 {
        background-color: var(--color-text-dark-50);
    }

    .color-text-dark-100 {
        background-color: var(--color-text-dark-100);
    }

    .color-text-dark-200 {
        background-color: var(--color-text-dark-200);
    }

    .color-text-dark-400 {
        background-color: var(--color-text-dark-400);
    }

    .button-text-light {
        background-color: var(--button-text-light);
    }

    .button-text-dark {
        background-color: var(--button-text-dark);
    }

    .color-black-light {
        background-color: var(--color-black-light);
    }

    .color-black-dark {
        background-color: var(--color-black-dark);
    }

    .color-white-light {
        background-color: var(--color-white-light);
    }

    .color-white-dark {
        background-color: var(--color-white-dark);
    }

    .web-app-top-bar {
        display: none !important
    }

    [class^="color-"],
    [class^="button-"],
    [class^="background-"] {
        display: inline-block;
        width: 100px;
        height: 60px;
        border-radius: 12px;
    }

    .ds-borderd {
        border: 1px solid rgb(228, 228, 228);
    }
</style>

<div class="page default-layout page-name">

    <div class="ds-section">

        <div class="ds-title">
            <h1 class="text-center"> Colors </h1>
        </div>

        <div class="container">

            <div class="ds-sub-section mb-5">

                <h3 class="text-left"> Primary </h3>

                <p class="lead"> Light</p>
                <div class="color-primary-light-50"></div>
                <div class="color-primary-light-75"></div>
                <div class="color-primary-light-100"></div>
                <div class="color-primary-light-200"></div>
                <div class="color-primary-light-300"></div>
                <div class="color-primary-light-400"></div>
                <div class="color-primary-light-500"></div>


                <p class="lead"> Dark</p>
                <div class="color-primary-dark-50"></div>
                <div class="color-primary-dark-75"></div>
                <div class="color-primary-dark-100"></div>
                <div class="color-primary-dark-200"></div>
                <div class="color-primary-dark-300"></div>
                <div class="color-primary-dark-400"></div>
                <div class="color-primary-dark-500"></div>

            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">Secondary</h3>
                <p class="lead">Light</p>
                <div class="color-secondary-light-50"></div>
                <div class="color-secondary-light-75"></div>
                <div class="color-secondary-light-100"></div>
                <div class="color-secondary-light-200"></div>
                <div class="color-secondary-light-300"></div>
                <div class="color-secondary-light-400"></div>
                <div class="color-secondary-light-500"></div>

                <p class="lead">Dark</p>
                <div class="color-secondary-dark-50"></div>
                <div class="color-secondary-dark-75"></div>
                <div class="color-secondary-dark-100"></div>
                <div class="color-secondary-dark-200"></div>
                <div class="color-secondary-dark-300"></div>
                <div class="color-secondary-dark-400"></div>
                <div class="color-secondary-dark-500"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">Success</h3>
                <p class="lead">Light</p>
                <div class="color-success-light-50"></div>
                <div class="color-success-light-75"></div>
                <div class="color-success-light-100"></div>
                <div class="color-success-light-200"></div>
                <div class="color-success-light-300"></div>
                <div class="color-success-light-400"></div>
                <div class="color-success-light-500"></div>

                <p class="lead">Dark</p>
                <div class="color-success-dark-50"></div>
                <div class="color-success-dark-75"></div>
                <div class="color-success-dark-100"></div>
                <div class="color-success-dark-200"></div>
                <div class="color-success-dark-300"></div>
                <div class="color-success-dark-400"></div>
                <div class="color-success-dark-500"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">Warning</h3>
                <p class="lead">Light</p>
                <div class="color-warning-light-50"></div>
                <div class="color-warning-light-75"></div>
                <div class="color-warning-light-100"></div>
                <div class="color-warning-light-200"></div>
                <div class="color-warning-light-300"></div>
                <div class="color-warning-light-400"></div>
                <div class="color-warning-light-500"></div>

                <p class="lead">Dark</p>
                <div class="color-warning-dark-50"></div>
                <div class="color-warning-dark-75"></div>
                <div class="color-warning-dark-100"></div>
                <div class="color-warning-dark-200"></div>
                <div class="color-warning-dark-300"></div>
                <div class="color-warning-dark-400"></div>
                <div class="color-warning-dark-500"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">Danger</h3>
                <p class="lead">Light</p>
                <div class="color-danger-light-50"></div>
                <div class="color-danger-light-75"></div>
                <div class="color-danger-light-100"></div>
                <div class="color-danger-light-200"></div>
                <div class="color-danger-light-300"></div>
                <div class="color-danger-light-400"></div>
                <div class="color-danger-light-500"></div>

                <p class="lead">Dark</p>
                <div class="color-danger-dark-50"></div>
                <div class="color-danger-dark-75"></div>
                <div class="color-danger-dark-100"></div>
                <div class="color-danger-dark-200"></div>
                <div class="color-danger-dark-300"></div>
                <div class="color-danger-dark-400"></div>
                <div class="color-danger-dark-500"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">Gray</h3>
                <p class="lead">Light</p>
                <div class="color-gray-light-100"></div>
                <div class="color-gray-light-200"></div>
                <div class="color-gray-light-300"></div>
                <div class="color-gray-light-400"></div>
                <div class="color-gray-light-500"></div>

                <p class="lead">Dark</p>
                <div class="color-gray-dark-100"></div>
                <div class="color-gray-dark-200"></div>
                <div class="color-gray-dark-300"></div>
                <div class="color-gray-dark-400"></div>
                <div class="color-gray-dark-500"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">Text Colors</h3>

                <p class="lead">Light</p>
                <div class="color-text-light-50"></div>
                <div class="color-text-light-100"></div>
                <div class="color-text-light-200"></div>
                <div class="color-text-light-400"></div>

                <p class="lead">Dark</p>
                <div class="color-text-dark-50"></div>
                <div class="color-text-dark-100"></div>
                <div class="color-text-dark-200"></div>
                <div class="color-text-dark-400"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left">background</h3>

                <p class="lead">Light</p>
                <div class="background-1-light ds-borderd"></div>
                <div class="background-2-light ds-borderd"></div>

                <p class="lead">Dark</p>
                <div class="background-1-dark ds-borderd"></div>
                <div class="background-2-dark ds-borderd"></div>
            </div>

            <div class="ds-sub-section mb-5">
                <h3 class="text-left"> Button text</h3>

                <p class="lead">Light</p>
                <div class="button-text-light ds-borderd"></div>

                <p class="lead">Dark</p>
                <div class="button-text-dark ds-borderd"></div>
            </div>

        </div> <!-- container -->

    </div> <!-- ds-section -->



</div> <!-- page -->

<?php include 'footer.php'; ?>