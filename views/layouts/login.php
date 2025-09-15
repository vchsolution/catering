<?php
use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            #starInput {
                font-family: 'Plus Jakarta Sans', sans-serif;
                padding: 8px 12px;
                font-size: 16px;
            }
            #starOutput span {
                color: green;
                margin-right: 3px;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="w-full h-screen bg-light shadow-lg flex flex-col md:flex-row overflow-hidden p-2 gap-2">
            <!-- Left Image -->
            <img
                src="<?= Yii::$app->request->baseUrl ?>/web/images/login-image.png"
                alt="Logo"
                class="hidden md:flex max-w-full h-[100%] object-contain"
            />

            <!-- Right Section -->
            <div
                class="w-full md:w-[100%] flex bg-white items-center justify-center p-6 md:p-12 border-t md:border-t-0 md:border-l border-gray-200 rounded-lg"
            >
            <?= $content ?>
            </div>
        </div>
    <?php $this->endBody() ?>
    </body>
    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>
</html>
<?php $this->endPage() ?>
