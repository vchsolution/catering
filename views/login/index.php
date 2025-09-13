<?php
use yii\helpers\Url;

$this->title = 'Login';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
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
    <body class="flex items-center justify-center h-screen bg-gray-100">
        <div class="w-full h-screen bg-light shadow-lg flex flex-col md:flex-row overflow-hidden p-2 gap-2">
            <!-- Left Image -->
                <img
                    src="<?= Yii::$app->request->baseUrl ?>/images/login-image.png"
                    alt="Logo"
                    class="hidden md:flex max-w-full h-[100%] object-contain"
                />

            <!-- Right Section -->
            <div
                class="w-full md:w-[100%] flex bg-white items-center justify-center p-6 md:p-12 border-t md:border-t-0 md:border-l border-gray-200 rounded-lg"
            >
                <div class="max-w-[340px] w-full space-y-6">
                    <!-- Logo -->
                    <img
                        src="<?= Yii::$app->request->baseUrl ?>/images/logo.png"
                        alt="Logo"
                        class="h-[54px] w-[90px]"
                    />

                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">
                            Welcome back!
                        </h2>
                        <p class="text-gray-500 text-sm">
                            To get started, please sign in
                        </p>
                    </div>

                    <!-- Form -->
                    <form action="<?= Url::to(['section-creation/create']) ?>" method="GET" class="space-y-4">
                        <!-- Username -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                User Login
                            </label>
                            <div class="relative mt-2">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-3"
                                >
                                    <i
                                        class="fa-regular fa-user-circle text-[#197953]"
                                    ></i>
                                </span>
                                <input
                                    type="text"
                                    placeholder="Email, username or phone number"
                                    class="block w-full rounded-md border border-[#197953] focus:outline-none focus:border-[#197953] focus:shadow-[0_0_6px_2px_rgba(25,121,83,0.4)] text-sm p-2 pl-10"
                                />
                            </div>
                        </div>

                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="relative mt-2">
                                 <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_101_5029)">
                                            <path
                                                d="M2.5 3.5V12.5"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M7 6V8"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M5.09814 7.38184L7.00002 7.99996"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M5.82446 9.61812L7.00009 8"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M8.17562 9.61812L7 8"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M8.90187 7.38184L7 7.99996"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M13 6V8"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M11.0981 7.38184L13 7.99996"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M11.8245 9.61812L13.0001 8"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M14.1756 9.61812L13 8"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M14.9019 7.38184L13 7.99996"
                                                stroke="#197953"
                                                stroke-width="1.2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_101_5029">
                                                <rect
                                                    width="16"
                                                    height="16"
                                                    fill="white"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <input
                                    type="password"
                                    id="password"
                                    class="block w-full rounded-md border border-[#197953] focus:outline-none focus:border-[#197953] focus:shadow-[0_0_6px_2px_rgba(25,121,83,0.4)] text-sm p-2 pr-8 pl-10"
                                />
                                <span
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                    onclick="togglePassword()"
                                >
                                    <i
                                        class="fa-regular fa-eye text-[#197953] text-sm"
                                        id="toggleIcon"
                                    ></i>
                                </span>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="pt-6">
                            <button
                                type="submit"
                                class="w-full bg-[#197953] hover:bg-[#156f47] text-white font-medium py-2 px-4 rounded-md transition"
                            >
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
