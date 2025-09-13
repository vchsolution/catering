<?php

use yii\helpers\Url;

$this->title = 'Section Creation';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
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
<header class="bg-white">
    <div class="w-[100%] px-4 py-3 flex items-center justify-between">
        <div class="flex items-center">
            <img src="<?= Yii::$app->request->baseUrl ?>/images/logo.png" alt="Logo" class="h-8 w-auto mr-4">
        </div>

        <div class="flex items-center space-x-6">
            <button class="text-gray-600 hover:text-gray-800 focus:outline-none">
                <i class="fas fa-search text-xl"></i>
            </button>

            <button class="relative text-gray-600 hover:text-gray-800 focus:outline-none">
                <i class="fa-regular fa-bell text-xl"></i>
            </button>

            <div class="inline-flex justify-between w-44 items-center bg-green-50 rounded-md px-3 py-2 cursor-pointer">
                <div class="flex items-center">
                    <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 15H21.75V2.25C21.75 1.85218 21.592 1.47064 21.3107 1.18934C21.0294 0.908035 20.6478 0.75 20.25 0.75H3.75C3.35218 0.75 2.97064 0.908035 2.68934 1.18934C2.40804 1.47064 2.25 1.85218 2.25 2.25V15H1.5C1.30109 15 1.11032 15.079 0.96967 15.2197C0.829018 15.3603 0.75 15.5511 0.75 15.75C0.75 15.9489 0.829018 16.1397 0.96967 16.2803C1.11032 16.421 1.30109 16.5 1.5 16.5H22.5C22.6989 16.5 22.8897 16.421 23.0303 16.2803C23.171 16.1397 23.25 15.9489 23.25 15.75C23.25 15.5511 23.171 15.3603 23.0303 15.2197C22.8897 15.079 22.6989 15 22.5 15ZM20.25 15H13.5V13.5C13.5 13.3011 13.579 13.1103 13.7197 12.9697C13.8603 12.829 14.0511 12.75 14.25 12.75H19.5C19.6989 12.75 19.8897 12.829 20.0303 12.9697C20.171 13.1103 20.25 13.3011 20.25 13.5V15ZM20.25 10.5C20.25 10.6989 20.171 10.8897 20.0303 11.0303C19.8897 11.171 19.6989 11.25 19.5 11.25C19.3011 11.25 19.1103 11.171 18.9697 11.0303C18.829 10.8897 18.75 10.6989 18.75 10.5V3.75H5.25V14.25C5.25 14.4489 5.17098 14.6397 5.03033 14.7803C4.88968 14.921 4.69891 15 4.5 15C4.30109 15 4.11032 14.921 3.96967 14.7803C3.82902 14.6397 3.75 14.4489 3.75 14.25V3C3.75 2.80109 3.82902 2.61032 3.96967 2.46967C4.11032 2.32902 4.30109 2.25 4.5 2.25H19.5C19.6989 2.25 19.8897 2.32902 20.0303 2.46967C20.171 2.61032 20.25 2.80109 20.25 3V10.5Z"
                              fill="#197953"/>
                    </svg>
                    <div class="flex flex-col text-left ml-3">
                        <span class="text-xs font-medium leading-tight">Mode</span>
                        <span class="font-bold text-base leading-tight">Business</span>
                    </div>
                </div>

                <i class="fas fa-chevron-down ml-2 text-xs"></i>
            </div>

            <div class="flex items-center space-x-2 cursor-pointer group">
                <div class="h-12 w-12 rounded-full bg-gray-200 overflow-hidden flex items-center justify-center">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/boy.png" alt="User Avatar"
                         class="h-full w-full object-cover">
                </div>
                <div class="text-sm pl-3">
                    <p class="font-bold text-base leading-tight">Asap Miller Rocky</p>
                    <p class="text-gray-500 text-xs">Administrator</p>
                </div>
            </div>
        </div>
    </div>

    <nav class="mx-auto px-4 py-4 border-b border-gray-200">
        <ul class="flex items-center justify-between space-x-1 text-sm mx-16">
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                        <span class="mr-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8619)">
                                <path d="M13.5 3H2.5C2.22386 3 2 3.22386 2 3.5V11C2 11.2761 2.22386 11.5 2.5 11.5H13.5C13.7761 11.5 14 11.2761 14 11V3.5C14 3.22386 13.7761 3 13.5 3Z"
                                      stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10 11.5L12 14" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M6 11.5L4 14" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M6 7.5V9" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M8 6.5V9" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10 5.5V9" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M8 3V1.5" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8619">
                                    <rect width="16" height="16" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Dashboard <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center bg-green-50 text-green-700 rounded-md px-3 py-1 font-medium">
                        <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8633)">
                                <path d="M14.0557 4H3.05566C2.77952 4 2.55566 4.22386 2.55566 4.5V12.5C2.55566 12.7761 2.77952 13 3.05566 13H14.0557C14.3318 13 14.5557 12.7761 14.5557 12.5V4.5C14.5557 4.22386 14.3318 4 14.0557 4Z"
                                      stroke="#197953" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M11.0557 4V3C11.0557 2.73478 10.9503 2.48043 10.7628 2.29289C10.5752 2.10536 10.3209 2 10.0557 2H7.05566C6.79045 2 6.53609 2.10536 6.34856 2.29289C6.16102 2.48043 6.05566 2.73478 6.05566 3V4"
                                      stroke="#197953" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M14.5557 7.39453C12.7323 8.44953 10.6623 9.00347 8.55566 9.00016C6.44914 9.00352 4.37918 8.4498 2.55566 7.39516"
                                      stroke="#197953" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M7.55566 7H9.55566" stroke="#197953" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8633">
                                    <rect width="16" height="16" fill="white" transform="translate(0.555664)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Master <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8644)">
                                <path d="M2.15527 4.80762L8.11152 8.06762L14.0678 4.80762" stroke="#494A4A"
                                      stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.35133 1.56234L13.8513 4.57359C13.9299 4.61656 13.9954 4.67983 14.0412 4.75679C14.0869 4.83375 14.1111 4.92157 14.1113 5.01109V10.9886C14.1111 11.0781 14.0869 11.1659 14.0412 11.2429C13.9954 11.3199 13.9299 11.3831 13.8513 11.4261L8.35133 14.4373C8.27774 14.4776 8.19521 14.4987 8.11133 14.4987C8.02745 14.4987 7.94491 14.4776 7.87133 14.4373L2.37133 11.4261C2.29279 11.3831 2.22724 11.3199 2.1815 11.2429C2.13577 11.1659 2.11153 11.0781 2.11133 10.9886V5.01109C2.11153 4.92157 2.13577 4.83375 2.1815 4.75679C2.22724 4.67983 2.29279 4.61656 2.37133 4.57359L7.87133 1.56234C7.94491 1.52208 8.02745 1.50098 8.11133 1.50098C8.19521 1.50098 8.27774 1.52208 8.35133 1.56234Z"
                                      stroke="#494A4A" stroke-width="1.2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M8.11133 8.06836V14.5002" stroke="#494A4A" stroke-width="1.2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8644">
                                    <rect width="16" height="16" fill="white" transform="translate(0.111328)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Product <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8654)">
                                <path d="M15.167 10H2.16699" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.16699 10L3.57262 4.37875C3.59966 4.27058 3.66207 4.17455 3.74995 4.10593C3.83783 4.0373 3.94612 4.00002 4.05762 4H13.2764C13.3879 4.00002 13.4962 4.0373 13.584 4.10593C13.6719 4.17455 13.7343 4.27058 13.7614 4.37875L15.167 10V12C15.167 12.1326 15.1143 12.2598 15.0205 12.3536C14.9268 12.4473 14.7996 12.5 14.667 12.5H2.66699C2.53438 12.5 2.40721 12.4473 2.31344 12.3536C2.21967 12.2598 2.16699 12.1326 2.16699 12V10Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.16699 6H6.16699" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.16699 6H9.16699" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.167 6H12.167" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.16699 8H6.16699" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.16699 8H9.16699" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.167 8H12.167" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.16699 4V2.5C5.16699 2.36739 5.21967 2.24021 5.31344 2.14645C5.40721 2.05268 5.53438 2 5.66699 2H8.16699C8.2996 2 8.42678 2.05268 8.52055 2.14645C8.61431 2.24021 8.66699 2.36739 8.66699 2.5V4" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8654">
                                    <rect width="16" height="16" fill="white" transform="translate(0.666992)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Transaction <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8670)">
                                <path d="M3.72266 8.5H4.72266" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.22266 2.5L13.2227 13.5" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.3799 8.5H12.7224" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.72266 8.5H8.67703" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.72266 10.5H10.4952" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.83496 3.5H14.2231C14.3557 3.5 14.4829 3.55268 14.5766 3.64645C14.6704 3.74021 14.7231 3.86739 14.7231 4V12.1769" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.3133 12.5H2.22266C2.09005 12.5 1.96287 12.4473 1.8691 12.3536C1.77533 12.2598 1.72266 12.1326 1.72266 12V4C1.72266 3.86739 1.77533 3.74021 1.8691 3.64645C1.96287 3.55268 2.09005 3.5 2.22266 3.5H4.13203" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8670">
                                    <rect width="16" height="16" fill="white" transform="translate(0.222656)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Non Transaction <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8684)">
                                <path d="M13.5273 7C14.4938 7 15.2773 6.2165 15.2773 5.25C15.2773 4.2835 14.4938 3.5 13.5273 3.5C12.5608 3.5 11.7773 4.2835 11.7773 5.25C11.7773 6.2165 12.5608 7 13.5273 7Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.77734 13H1.77734C1.64474 13 1.51756 12.9473 1.42379 12.8536C1.33002 12.7598 1.27734 12.6326 1.27734 12.5V10C1.27734 9.86739 1.33002 9.74021 1.42379 9.64645C1.51756 9.55268 1.64474 9.5 1.77734 9.5H3.77734" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.77734 10H9.77734L13.9648 9.03688C14.1188 8.99469 14.2804 8.98857 14.4371 9.019C14.5938 9.04943 14.7414 9.11559 14.8684 9.21233C14.9953 9.30907 15.0983 9.4338 15.1692 9.5768C15.2402 9.71981 15.2772 9.87725 15.2773 10.0369C15.2774 10.2296 15.2238 10.4186 15.1224 10.5825C15.0211 10.7465 14.876 10.8789 14.7036 10.965L12.2773 12L8.27734 13H3.77734V9.5L5.33984 7.9375C5.4795 7.79833 5.64523 7.68805 5.82754 7.61298C6.00985 7.53791 6.20518 7.49952 6.40234 7.5H9.52734C9.85886 7.5 10.1768 7.6317 10.4112 7.86612C10.6456 8.10054 10.7773 8.41848 10.7773 8.75C10.7773 9.08153 10.6456 9.39947 10.4112 9.63389C10.1768 9.86831 9.85886 10 9.52734 10H7.77734Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.7775 5.33101C11.4379 5.49165 11.0555 5.53871 10.6871 5.46523C10.3186 5.39176 9.98357 5.20164 9.73151 4.92302C9.47946 4.64439 9.32378 4.29203 9.28748 3.91807C9.25119 3.54411 9.33621 3.1684 9.52998 2.8465C9.72375 2.5246 10.016 2.27361 10.3634 2.13065C10.7109 1.9877 11.0951 1.96036 11.4593 2.05268C11.8235 2.14501 12.1483 2.3521 12.3857 2.64332C12.6231 2.93454 12.7605 3.29443 12.7775 3.66976" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8684">
                                    <rect width="16" height="16" fill="white" transform="translate(0.777344)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Finance <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8695)">
                                <path d="M8.33301 14C11.6467 14 14.333 11.3137 14.333 8C14.333 4.68629 11.6467 2 8.33301 2C5.0193 2 2.33301 4.68629 2.33301 8C2.33301 11.3137 5.0193 14 8.33301 14Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.33301 10C9.71372 10 10.833 8.88071 10.833 7.5C10.833 6.11929 9.71372 5 8.33301 5C6.9523 5 5.83301 6.11929 5.83301 7.5C5.83301 8.88071 6.9523 10 8.33301 10Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.32031 12.4609C4.69651 11.7199 5.27054 11.0976 5.97878 10.6629C6.68702 10.2282 7.5018 9.99805 8.33281 9.99805C9.16383 9.99805 9.97861 10.2282 10.6869 10.6629C11.3951 11.0976 11.9691 11.7199 12.3453 12.4609" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8695">
                                    <rect width="16" height="16" fill="white" transform="translate(0.333008)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Account <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8705)">
                                <path d="M12.3887 5H15.0499C15.1496 4.99995 15.2469 5.02968 15.3296 5.08536C15.4122 5.14104 15.4763 5.22013 15.5137 5.3125L16.3887 7.5" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.38867 9H12.3887" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8887 13.5C13.7171 13.5 14.3887 12.8284 14.3887 12C14.3887 11.1716 13.7171 10.5 12.8887 10.5C12.0602 10.5 11.3887 11.1716 11.3887 12C11.3887 12.8284 12.0602 13.5 12.8887 13.5Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.88867 13.5C6.7171 13.5 7.38867 12.8284 7.38867 12C7.38867 11.1716 6.7171 10.5 5.88867 10.5C5.06024 10.5 4.38867 11.1716 4.38867 12C4.38867 12.8284 5.06024 13.5 5.88867 13.5Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.3887 12H7.38867" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.3887 7.5H16.3887V11.5C16.3887 11.6326 16.336 11.7598 16.2422 11.8536C16.1485 11.9473 16.0213 12 15.8887 12H14.3887" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.38867 12H2.88867C2.75606 12 2.62889 11.9473 2.53512 11.8536C2.44135 11.7598 2.38867 11.6326 2.38867 11.5V4.5C2.38867 4.36739 2.44135 4.24021 2.53512 4.14645C2.62889 4.05268 2.75606 4 2.88867 4H12.3887V10.5856" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8705">
                                    <rect width="16" height="16" fill="white" transform="translate(0.888672)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Delivery <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8719)">
                                <path d="M6.44434 8H10.4443" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.44434 10H10.4443" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.44434 2.5H13.4443V12.5C13.4443 12.8978 13.2863 13.2794 13.005 13.5607C12.7237 13.842 12.3422 14 11.9443 14H4.94434C4.54651 14 4.16498 13.842 3.88368 13.5607C3.60237 13.2794 3.44434 12.8978 3.44434 12.5V2.5Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.44434 1.5V3.5" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.44434 1.5V3.5" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.4443 1.5V3.5" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8719">
                                    <rect width="16" height="16" fill="white" transform="translate(0.444336)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span> Report <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center text-gray-600 hover:text-green-700 font-medium">
                    <span class="mr-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_8732)">
                                <path d="M8 10.5C9.38071 10.5 10.5 9.38071 10.5 8C10.5 6.61929 9.38071 5.5 8 5.5C6.61929 5.5 5.5 6.61929 5.5 8C5.5 9.38071 6.61929 10.5 8 10.5Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.58934 11.1306C2.31307 10.6547 2.10142 10.1442 1.95996 9.61246L3.00871 8.29996C2.99684 8.0993 2.99684 7.89812 3.00871 7.69746L1.96059 6.38496C2.1018 5.85314 2.31302 5.34242 2.58871 4.86621L4.25809 4.67871C4.39139 4.52852 4.53352 4.38639 4.68371 4.25309L4.87121 2.58434C5.34673 2.30996 5.85662 2.09999 6.38746 1.95996L7.69996 3.00871C7.90062 2.99684 8.1018 2.99684 8.30246 3.00871L9.61496 1.96059C10.1468 2.1018 10.6575 2.31302 11.1337 2.58871L11.3212 4.25809C11.4714 4.39139 11.6135 4.53352 11.7468 4.68371L13.4156 4.87121C13.6919 5.34706 13.9035 5.85759 14.045 6.38934L12.9962 7.70184C13.0081 7.90249 13.0081 8.10368 12.9962 8.30434L14.0443 9.61684C13.9041 10.1485 13.6939 10.6592 13.4193 11.1356L11.75 11.3231C11.6167 11.4733 11.4745 11.6154 11.3243 11.7487L11.1368 13.4175C10.661 13.6937 10.1505 13.9054 9.61871 14.0468L8.30621 12.9981C8.10555 13.01 7.90437 13.01 7.70371 12.9981L6.39121 14.0462C5.85954 13.906 5.34883 13.6958 4.87246 13.4212L4.68496 11.7518C4.53477 11.6185 4.39264 11.4764 4.25934 11.3262L2.58934 11.1306Z" stroke="#494A4A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_8732">
                                    <rect width="16" height="16" fill="white"/></clipPath>
                            </defs>
                        </svg>
                    </span> Tools <i class="fas fa-chevron-down ml-2 text-xs"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
<div class="bg-gray-100 min-h-screen p-6">
    <div class="mx-auto px-6 py-4">
        <h1 class="text-2xl font-bold"><i class="fa-solid fa-arrow-left mr-2"></i> Add Section Creation</h1>
    </div>
    <div class="mx-auto px-6 py-4">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex flex-col lg:flex-row gap-6">
                <div class="w-full lg:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-4">
                        <div>
                            <label for="name" class="block text-sm font-bold text-gray-700">Name</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                        </div>
                        <div>
                            <label for="alias" class="block text-sm font-bold text-gray-700">Alias</label>
                            <input type="text" id="alias"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                        </div>
                    </div>
    
                    <div>
                        <label for="cuisine" class="block text-sm font-bold text-gray-700">Cuisine</label>
                        <input type="text" id="cuisine"
                               class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                    </div>
    
                    <hr class="my-6"/>
    
                    <div class="mb-8">
                        <label class="block text-sm font-bold text-gray-700">Sekat</label>
                        <div class="mt-4 grid grid-cols-3 gap-x-8 gap-y-4">
                            <div class="flex items-center">
                                <input id="karbo" name="seksi" type="radio"
                                       class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                                <label for="karbo" class="ml-2 block text-sm font-medium text-gray-700">Karbo</label>
                            </div>
                            <div class="flex items-center">
                                <input id="protein" name="seksi" type="radio"
                                       class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                                <label for="protein" class="ml-2 block text-sm font-medium text-gray-700">Protein</label>
                            </div>
                            <div class="flex items-center">
                                <input id="add-on" name="seksi" type="radio"
                                       class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                                <label for="add-on" class="ml-2 block text-sm font-medium text-gray-700">Add-on</label>
                            </div>
                            <div class="flex items-center">
                                <input id="veggie" name="seksi" type="radio"
                                       class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                                <label for="veggie" class="ml-2 block text-sm font-medium text-gray-700">Veggie</label>
                            </div>
                            <div class="flex items-center">
                                <input id="extra" name="seksi" type="radio"
                                       class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                                <label for="extra" class="ml-2 block text-sm font-medium text-gray-700">Extra</label>
                            </div>
                            <div class="flex items-center">
                                <input id="tanpa-karbo-sayur" name="seksi" type="radio"
                                       class="focus:ring-green-600 h-4 w-4 text-green-600 border-gray-300">
                                <label for="tanpa-karbo-sayur" class="ml-2 block text-sm font-medium text-gray-700">Tanpa
                                    Karbo / Sayur</label>
                            </div>
                        </div>
                    </div>
    
                    <hr class="my-6"/>
    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <label for="pemrosesan" class="block text-sm font-bold text-gray-700">Pemrosesan / Potongan
                                Bahan</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
    
                        </div>
                        <div>
                            <label for="or-matang" class="block text-sm font-bold text-gray-700">Gr Matang</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
    
                        </div>
                        <div>
                            <label for="rasa" class="block text-sm font-bold text-gray-700">Rasa</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
    
                        </div>
                    </div>
    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <label for="topping" class="block text-sm font-bold text-gray-700">Topping</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                        </div>
                        <div>
                            <label for="add-on-input" class="block text-sm font-bold text-gray-700">Add On</label>
                            <input type="text" id="add-on-input"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                        </div>
                        <div>
                            <label for="garnish" class="block text-sm font-bold text-gray-700">Garnish</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                        </div>
                        <div>
                            <label for="metode" class="block text-sm font-bold text-gray-700">Metode</label>
                            <input type="text" id="name"
                                   class="mt-1 block w-full rounded-md shadow-sm p-2 border border-gray-400 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                        </div>
                        <div class="col-span-2">
                            <label for="cooking-method" class="block text-sm font-bold text-gray-700">Cooking Method</label>
                            <textarea id="cooking-method" rows="3"
                                      class="mt-1 block w-full h-24 rounded-md border border-gray-400 shadow-sm focus:border-green-600 focus:ring-green-600 sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>
    
                <div class="mt-6 lg:mt-0 w-full lg:w-1/3 h-[500px] flex items-center justify-center p-6 border-2 border-dashed border-green-400 rounded-lg text-center bg-gray-100">
                    <div class="flex flex-col items-center text-center">
                        <span>
                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_9022)">
                                    <path d="M2.875 11.4993C2.8748 11.279 2.92524 11.0617 3.0224 10.864C3.11956 10.6663 3.26086 10.4936 3.43538 10.3592C3.60991 10.2247 3.81298 10.1322 4.02893 10.0888C4.24489 10.0453 4.46793 10.0521 4.68086 10.1085C7.78945 10.9405 14.6337 12.9368 23 12.9368C31.3663 12.9368 38.2105 10.9405 41.3281 10.1103C41.5403 10.0556 41.7622 10.05 41.9769 10.0941C42.1915 10.1382 42.3933 10.2308 42.5667 10.3649C42.74 10.4989 42.8805 10.6708 42.9773 10.8674C43.074 11.064 43.1246 11.2802 43.125 11.4993V34.4993C43.125 34.7197 43.0743 34.937 42.977 35.1347C42.8796 35.3323 42.7381 35.5049 42.5634 35.6391C42.3886 35.7734 42.1854 35.8657 41.9694 35.9089C41.7533 35.9521 41.5302 35.945 41.3173 35.8883C38.207 35.0528 31.3645 33.0618 23 33.0618C14.6355 33.0618 7.79305 35.0528 4.68266 35.8865C4.46991 35.9432 4.24698 35.9503 4.03106 35.9072C3.81515 35.8641 3.61203 35.7719 3.43736 35.6379C3.26269 35.5039 3.12114 35.3315 3.02364 35.1341C2.92614 34.9367 2.87528 34.7195 2.875 34.4993V11.4993Z" stroke="#197953" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M36.6562 21.5625C37.8471 21.5625 38.8125 20.5971 38.8125 19.4062C38.8125 18.2154 37.8471 17.25 36.6562 17.25C35.4654 17.25 34.5 18.2154 34.5 19.4062C34.5 20.5971 35.4654 21.5625 36.6562 21.5625Z" fill="#197953"/><path d="M2.875 28.8732L12.6392 19.1071C12.7727 18.9735 12.9313 18.8675 13.1058 18.7951C13.2803 18.7228 13.4673 18.6855 13.6562 18.6855C13.8452 18.6855 14.0322 18.7228 14.2067 18.7951C14.3812 18.8675 14.5398 18.9735 14.6733 19.1071L28.9512 33.3851" stroke="#197953" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.5947 28.0315L28.2109 23.4207C28.4805 23.1513 28.8459 23 29.227 23C29.6081 23 29.9736 23.1513 30.2432 23.4207L42.5068 35.6844" stroke="#197953" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2_9022">
                                        <rect width="46" height="46" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <p class="text-gray-500 font-bold">Upload Image</p>
                        <p class="text-xs text-gray-400 mt-2">Format: jpg / png
                            <br>ratio 3:4
                            <br>(maks. 5 mb)
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex">
                <div class="bg-white rounded-lg w-full">
                    <h3 class="text-lg font-semibold text-gray-800 mb-8">Main Ingredient</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-white divide-y border-b border-gray-600">
                                <tr class="font-bold text-gray-500">
                                    <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-72">
                                        <div class="flex items-center justify-between">
                                            Item Name
                                            <i class="fas fa-sort ml-1"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-28">
                                        <div class="flex items-center justify-between">
                                            Mentah
                                            <i class="fas fa-sort ml-1"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-36">
                                        <div class="flex items-center justify-between">
                                            Harga
                                            <i class="fas fa-sort ml-1"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Energi (kkal)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Protein (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Karbo (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Lemak (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Serat (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Natrium (mg)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Kolesterol (mg)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Gula (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-96">
                                        <div class="flex items-center justify-center">
                                            Kandungan
                                            <i class="fas fa-sort ml-3"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="relative py-3 px-2">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="py-4 px-2 whitespace-nowrap relative">
                                        <select class="w-full rounded-md shadow-sm p-2 pr-8 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm appearance-none">
                                            <option>-</option>
                                            <option>Bawang Putih</option>
                                            <option>Gula Pasir</option>
                                            <option>Bombai</option>
                                            <option>Daun Bawang</option>
                                            <option>Minyak Goreng</option>
                                            <option>Masako Ayam @1kg</option>
                                            <option>Wijen Putih</option>
                                            <option>Aida Bubuk @500gr</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center mr-2">
                                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 whitespace-nowrap">
                                        <input type="text" class="w-full rounded-md shadow-sm p-2 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                                    </td>
                                    <td class="py-4 px-2 whitespace-nowrap">
                                        <input type="text" class="w-full rounded-md shadow-sm p-2 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                                    </td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap text-center text-gray-500">-</td>
                                    <td class="py-4 px-2 whitespace-nowrap">
                                        <input type="text" class="w-full rounded-md shadow-sm p-2 border border-gray-300 focus:border-green-600 focus:ring-green-600 sm:text-sm">
                                    </td>
                                    <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium">
                                        <button type="button" class="text-gray-400 hover:text-red-500">
                                            <i class="fa-regular fa-trash-alt text-xl"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="flex justify-end mt-4">
                        <button type="button" class="flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md hover:bg-green-700 hover:text-white transition">
                            <i class="fas fa-circle-plus mr-2"></i>
                            Add
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex">
                <div class="bg-white rounded-lg w-full">
                    <h3 class="text-lg font-semibold text-gray-800 mb-8">Complimentary</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-white divide-y border-b border-gray-600">
                                <tr class="font-bold text-gray-500">
                                    <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-72">
                                        <div class="flex items-center justify-between">
                                            Item Name
                                            <i class="fas fa-sort ml-1"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-28">
                                        <div class="flex items-center justify-between">
                                            Mentah
                                            <i class="fas fa-sort ml-1"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider w-36">
                                        <div class="flex items-center justify-between">
                                            Harga
                                            <i class="fas fa-sort ml-1"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Energi (kkal)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Protein (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Karbo (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Lemak (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Serat (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Natrium (mg)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Kolesterol (mg)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-center text-xs tracking-wider">
                                        <div class="flex items-center justify-between">
                                            Gula (gr)
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-2 text-left text-xs tracking-wider w-96">
                                        <div class="flex items-center justify-center">
                                            Kandungan
                                            <i class="fas fa-sort ml-3"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="relative py-3 px-2">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-100 divide-y divide-gray-200 ">
                                <tr>
                                    <td class="py-4 px-2 whitespace-nowrap text-right text-sm font-medium" colspan="13">
                                        <div class="w-full flex justify-center items-center p-2">
                                            <div>
                                                <span class="text-gray-600">No selection has been made yet</span>
                                                <button type="button" class="mt-4 flex items-center px-4 py-2 border border-[#197953] text-[#197953] rounded-md mx-auto hover:bg-green-700 hover:text-white transition">
                                                    <i class="fas fa-circle-plus mr-2"></i>
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center flex-wrap gap-y-4 bg-gray-100 border border-gray-300 rounded-lg">
                        <div class="p-4 w-96 h-full">
                            <h4 class="text-lg font-bold"> <i class="fa-solid fa-flask text-[#F16251] mr-4"></i>Nutrition</h4>
                        </div>
                        
                        <div class="p-4 w-24 border-r border-l border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Energi</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 kKal</p>
                        </div>
                        <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Protein</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Carbo</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Fat</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Serat</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Natrium</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        <div class="p-4 w-24 border-r border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Kolesterol</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        <div class="p-4 w-24 border-gray-300 h-full text-center">
                            <p class="text-xs text-gray-500">Gula</p>
                            <p class="text-sm font-bold text-gray-800 mt-2">0 gr</p>
                        </div>
                        
                    </div>

                    <div class="flex items-center flex-wrap gap-y-4 bg-gray-100 border border-gray-300 rounded-lg">
                        <div class="p-6 w-80 h-full">
                             <h4 class="text-lg font-bold"> <i class="fa-solid fa-coins text-[#F16251] mr-4"></i></i>Food Cost</h4>
                        </div>
                        <div class="p-6 w-40 h-full text-center">
                            <h4 class="text-lg font-bold">Rp 0 <span class="font-bold text-green-700 bg-green-100 rounded-full px-3 py-1 ml-2">Low</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-10 w-full justify-end">
                <button type="button" class="px-6 py-2 font-bold rounded-md border border-gray-300 hover:bg-gray-400 transition mr-4">Cancel</button>
                <button type="button" class="px-6 py-2 bg-[#F16251] text-white font-bold rounded-md hover:bg-green-800 transition">Save</button>
            </div>
        </div>
        
    </div>
    
</div>
</body>
</html>