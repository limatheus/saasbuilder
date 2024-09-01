@extends('layouts.base')

@section('base-body')
    <header
        class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] ac-transition">
        <div class="flex-center-between grow">
            <!-- Header Left -->
            <div class="flex items-center gap-4">
                <div class="menu-hamburger-container flex-center">
                    <button type="button" id="app-menu-hamburger" class="menu-hamburger hidden xl:block"></button>
                    <button type="button" class="menu-hamburger block xl:hidden" data-drawer-target="app-menu-drawer"
                            data-drawer-show="app-menu-drawer" aria-controls="app-menu-drawer"></button>
                </div>
                <div class="w-56 md:w-72 leading-none text-sm relative text-gray-900 dark:text-dark-text hidden sm:block">
                    <span class="absolute top-1/2 -translate-y-[40%] left-3.5">
                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                    </span>
                    <input type="text" name="header-search" placeholder="Search..."
                           class="bg-transparent pl-[36px] pr-12 py-4 dk-border-one rounded-full w-full font-spline_sans focus:outline-none focus:border-primary-500">
                    <span
                        class="absolute top-1/2 -translate-y-[40%] right-4 hidden lg:flex lg:items-center lg:gap-0.5 select-none">
                        <i class="ri-command-line text-[12px]"></i><span>+</span><span>k</span>
                    </span>
                </div>
            </div>
            <!-- Header Right -->
            <div class="flex items-center gap-1 sm:gap-3">
                <!-- Dark Light Button -->
                <button type="button"
                        class="themeMode size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md"
                        onclick="toggleThemeMode()">
                    <i class="ri-contrast-2-line text-[22px] dark:text-dark-text-two dark:before:!content-['\f1bf']"></i>
                </button>
                <!-- Settings Button -->
                <button type="button" class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md"
                        data-drawer-target="app-setting-drawer" data-drawer-show="app-setting-drawer"
                        data-drawer-placement="right" aria-controls="app-setting-drawer">
                    <i class="ri-settings-3-line text-[22px] dark:text-dark-text-two animate-spin-slow"></i>
                </button>
                <!-- Notification Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownNotification" data-popover-trigger="click"
                            data-popover-placement="bottom-end"
                            class="relative size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md">
                        <i class="ri-notification-3-line text-[22px] dark:text-dark-text-two"></i>
                        <span
                            class="absolute -top-1 -right-1 size-4 rounded-50 flex-center bg-primary-500 leading-none text-xs text-white">0</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNotification"
                         class="!-right-full sm:!right-0 z-backdrop invisible w-[250px] sm:w-[320px] bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-dark-card-two dark:divide-dark-border-four">
                        <div
                            class="block px-4 py-2 font-medium text-center text-heading rounded-t-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white">
                            Notifications
                        </div>
                        <div class="divide-y divide-gray-100 dark:divide-dark-border-four">
                            <a href="notification.html" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                                <div class="flex-shrink-0">
                                    <img class="size-10 rounded-50" src="assets/images/user/user-1.png" alt="user">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="notification.html" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                                <div class="flex-shrink-0">
                                    <img class="size-10 rounded-50" src="assets/images/user/user-2.png" alt="user">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">10 min ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="notification.html"
                           class="flex-center py-2 text-sm font-medium text-center text-heading rounded-b-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white">
                            View all
                        </a>
                    </div>
                </div>
                <!-- Language Select Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownLanguage" data-popover-trigger="click"
                            data-popover-placement="bottom-end"
                            class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md">
                        <img src="assets/images/flag/us.svg" alt="flag" class="size-5 rounded-sm" title="English">
                    </button>
                    <!-- Dropdown -->
                    <div id="dropdownLanguage"
                         class="absolute invisible z-backdrop py-2 bg-white rounded-md shadow-md min-w-[10rem] flex flex-col dark:bg-dark-card-shade">
                        <a href="#"
                           class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full"
                           data-lang="en" title="English">
                            <img src="assets/images/flag/us.svg" alt="flag" class="object-cover size-4 rounded-50">
                            <h6 class="font-medium text-gray-500 dark:text-white">English</h6>
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full"
                           data-lang="sp" title="Spanish">
                            <img src="assets/images/flag/es.svg" alt="flag" class="object-cover size-4 rounded-50">
                            <h6 class="font-medium text-gray-500 dark:text-white">Spanish</h6>
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full"
                           data-lang="fr" title="French">
                            <img src="assets/images/flag/fr.svg" alt="flag" class="object-cover size-4 rounded-50">
                            <h6 class="font-medium text-gray-500 dark:text-white">French</h6>
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full"
                           data-lang="it" title="Italian">
                            <img src="assets/images/flag/it.svg" alt="flag" class="object-cover size-4 rounded-50">
                            <h6 class="font-medium text-gray-500 dark:text-white">Italian</h6>
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full"
                           data-lang="ar" title="Arabic">
                            <img src="assets/images/flag/ar.svg" alt="flag" class="object-cover size-4 rounded-50">
                            <h6 class="font-medium text-gray-500 dark:text-white">Arabic</h6>
                        </a>
                    </div>
                </div>
                <!-- Border -->
                <div
                    class="w-[1px] h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-[#EEE] dark:bg-dark-border hidden sm:block"></div>
                <!-- User Profile Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click"
                            data-popover-placement="bottom-end"
                            class="text-gray-500 dark:text-dark-text flex items-center gap-2 sm:pr-4 relative after:absolute after:right-0 after:font-remix after:content-['\ea4e'] after:text-[18px] after:hidden sm:after:block">
                        <img src="assets/images/user/profile-img.png" alt="user-img" class="size-7 sm:size-9 rounded-50">
                        <span
                            class="font-semibold leading-none text-lg capitalize hidden sm:block">{{auth()->user()->first_name}}</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownProfile"
                         class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four">
                        <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                            <div class="font-medium ">{{auth()->user()->full_name}}</div>
                            <div class="truncate">{{auth()->user()->email}}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="index.html"
                                   class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="account-setting.html"
                                   class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="sign-in.html"
                               class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start App Menu -->
    <div id="app-menu-drawer"
         class="app-menu flex flex-col gap-y-2.5 bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max xl:translate-x-0 rounded-r-10 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:group-data-[sidebar-size=lg]:bottom-4 z-backdrop ac-transition"
         tabindex="-1">
        <div
            class="px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:px-2 group-data-[sidebar-size=sm]:justify-center">
            <a href="index.html" class="group-data-[sidebar-size=lg]:block hidden">
                <img src="assets/images/logo/logo-text.svg" alt="logo" class="group-data-[theme-mode=dark]:hidden">
                <img src="assets/images/logo/logo-text-dark.svg" alt="logo" class="group-data-[theme-mode=light]:hidden">
            </a>
            <a href="index.html" class="group-data-[sidebar-size=lg]:hidden block">
                <img src="assets/images/logo/logo-icon.svg" alt="logo">
            </a>
        </div>
        <div id="app-menu-scrollbar" data-scrollbar
             class="pl-4 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
            <div class="group-data-[sidebar-size=lg]:max-h-full">
                <ul id="navbar-nav"
                    class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">
                    <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="notification.html"
                           class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18"
                                     fill="none">
                                    <path
                                        d="M14.388 14.048H1.6184C1.50665 14.0473 1.39704 14.0173 1.30051 13.961C1.20398 13.9047 1.12393 13.824 1.06834 13.7271C1.01276 13.6301 0.983596 13.5203 0.983765 13.4085C0.983935 13.2968 1.01343 13.187 1.06931 13.0903C1.59526 12.1804 2.25688 10.5212 2.25688 7.66319C2.25688 6.13917 2.8623 4.67757 3.93994 3.59993C5.01758 2.52228 6.47918 1.91687 8.0032 1.91687C9.52722 1.91687 10.9888 2.52228 12.0665 3.59993C13.1441 4.67757 13.7495 6.13917 13.7495 7.66319C13.7495 10.522 14.4119 12.1804 14.9387 13.0903C14.9946 13.1872 15.0241 13.2971 15.0242 13.4089C15.0243 13.5208 14.995 13.6308 14.9392 13.7278C14.8835 13.8248 14.8032 13.9054 14.7064 13.9616C14.6097 14.0178 14.4999 14.0476 14.388 14.048Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_5)] group-[.active]/menu-link:fill-[url(#g_5)] dark:fill-none"/>
                                    <path
                                        d="M11.1955 16.6019C11.1955 16.7712 11.1283 16.9337 11.0085 17.0534C10.8888 17.1731 10.7264 17.2404 10.5571 17.2404H5.44922C5.27989 17.2404 5.11749 17.1731 4.99775 17.0534C4.87801 16.9337 4.81074 16.7712 4.81074 16.6019C4.81074 16.4326 4.87801 16.2702 4.99775 16.1504C5.11749 16.0307 5.27989 15.9634 5.44922 15.9634H10.5571C10.7264 15.9634 10.8888 16.0307 11.0085 16.1504C11.1283 16.2702 11.1955 16.4326 11.1955 16.6019ZM15.9355 3.53862C15.2179 2.13609 14.1403 0.949501 12.8133 0.10041C12.7424 0.0551165 12.6632 0.0242842 12.5804 0.00968503C12.4975 -0.0049141 12.4126 -0.00299197 12.3305 0.0153408C12.2483 0.0336736 12.1707 0.0680555 12.1019 0.11651C12.0331 0.164965 11.9746 0.226537 11.9297 0.297686C11.8847 0.368836 11.8543 0.44816 11.8402 0.531098C11.826 0.614037 11.8284 0.698955 11.8472 0.78097C11.866 0.862985 11.9008 0.94048 11.9496 1.009C11.9984 1.07752 12.0603 1.13572 12.1317 1.18024C13.2703 1.90451 14.1927 2.92208 14.8021 4.12602C14.8827 4.27155 15.0168 4.3799 15.176 4.42803C15.3352 4.47616 15.5069 4.46026 15.6546 4.38373C15.8023 4.30719 15.9142 4.17605 15.9667 4.01822C16.0191 3.86039 16.0079 3.68832 15.9355 3.53862ZM0.63748 4.4708C0.754452 4.47075 0.869162 4.43857 0.96909 4.37777C1.06902 4.31697 1.15032 4.22989 1.20413 4.12602C1.81356 2.92208 2.73602 1.90451 3.87457 1.18024C3.94596 1.13572 4.00785 1.07752 4.05668 1.009C4.1055 0.94048 4.14031 0.862985 4.15908 0.78097C4.17786 0.698955 4.18024 0.614037 4.16609 0.531098C4.15194 0.44816 4.12154 0.368836 4.07663 0.297686C4.03172 0.226537 3.97319 0.164965 3.90441 0.11651C3.83562 0.0680555 3.75794 0.0336736 3.67582 0.0153408C3.59371 -0.00299197 3.50878 -0.0049141 3.42592 0.00968503C3.34306 0.0242842 3.2639 0.0551165 3.19299 0.10041C1.86593 0.949501 0.788422 2.13609 0.0708293 3.53862C0.0204195 3.63593 -0.00409717 3.74457 -0.000361225 3.85409C0.00337472 3.96361 0.0352375 4.07033 0.0921606 4.16397C0.149084 4.25761 0.229151 4.33503 0.324657 4.38877C0.420164 4.44251 0.527893 4.47076 0.63748 4.4708ZM15.4901 12.7662C15.6032 12.9602 15.6632 13.1806 15.664 13.4051C15.6647 13.6297 15.6063 13.8505 15.4945 14.0452C15.3827 14.2399 15.2216 14.4018 15.0273 14.5144C14.833 14.6269 14.6125 14.6863 14.3879 14.6865H1.61834C1.39394 14.686 1.17361 14.6265 0.979551 14.5138C0.785495 14.4011 0.624566 14.2392 0.512976 14.0445C0.401385 13.8498 0.343073 13.6291 0.343914 13.4047C0.344755 13.1803 0.404718 12.9601 0.517765 12.7662C1.23685 11.5252 1.61834 9.76061 1.61834 7.6632C1.61834 5.96985 2.29103 4.34585 3.48841 3.14847C4.68579 1.95109 6.30979 1.2784 8.00314 1.2784C9.69649 1.2784 11.3205 1.95109 12.5179 3.14847C13.7153 4.34585 14.3879 5.96985 14.3879 7.6632C14.3879 9.75981 14.7694 11.5244 15.4901 12.7662ZM14.3879 13.4095C13.5388 11.9514 13.111 10.0184 13.111 7.6632C13.111 6.30852 12.5728 5.00932 11.6149 4.05141C10.657 3.09351 9.35782 2.55536 8.00314 2.55536C6.64846 2.55536 5.34926 3.09351 4.39135 4.05141C3.43345 5.00932 2.8953 6.30852 2.8953 7.6632C2.8953 10.0192 2.46593 11.9522 1.61834 13.4095H14.3879Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white"/>
                                    <defs>
                                        <linearGradient id="g_5" x1="2.18655" y1="3.46529" x2="8.18057" y2="12.9769"
                                                        gradientUnits="userSpaceOnUse">
                                          <stop offset="0" stop-color="#795DED"/>
                                          <stop offset="0.0001" stop-color="#7D5DFE"/>
                                          <stop offset="1" stop-color="#76D466"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Notification
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Logout Link -->
        <div class="mt-auto px-7 py-6 group-data-[sidebar-size=sm]:px-2">
            <a href="#"
               class="flex-center-between text-gray-500 dark:text-dark-text font-semibold leading-none bg-gray-200 dark:bg-[#090927] dark:group-data-[sidebar-size=sm]:bg-dark-card-shade rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center">
                <span class="group-data-[sidebar-size=sm]:hidden block">Logout</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path
                        d="M6.66645 15.3328C6.66645 15.5096 6.59621 15.6792 6.47119 15.8042C6.34617 15.9292 6.17661 15.9995 5.9998 15.9995H1.33329C0.979679 15.9995 0.640552 15.859 0.390511 15.609C0.140471 15.3589 0 15.0198 0 14.6662V1.33329C0 0.979679 0.140471 0.640552 0.390511 0.390511C0.640552 0.140471 0.979679 0 1.33329 0H5.9998C6.17661 0 6.34617 0.0702357 6.47119 0.195256C6.59621 0.320276 6.66645 0.48984 6.66645 0.666645C6.66645 0.84345 6.59621 1.01301 6.47119 1.13803C6.34617 1.26305 6.17661 1.33329 5.9998 1.33329H1.33329V14.6662H5.9998C6.17661 14.6662 6.34617 14.7364 6.47119 14.8614C6.59621 14.9865 6.66645 15.156 6.66645 15.3328ZM15.8045 8.47139L12.4713 11.8046C12.378 11.898 12.2592 11.9615 12.1298 11.9873C12.0004 12.0131 11.8663 11.9999 11.7444 11.9494C11.6225 11.8989 11.5184 11.8133 11.4451 11.7036C11.3719 11.5939 11.3329 11.4649 11.333 11.333V8.66638H5.9998C5.823 8.66638 5.65343 8.59615 5.52841 8.47113C5.40339 8.34611 5.33316 8.17654 5.33316 7.99974C5.33316 7.82293 5.40339 7.65337 5.52841 7.52835C5.65343 7.40333 5.823 7.33309 5.9998 7.33309H11.333V4.66651C11.3329 4.53459 11.3719 4.4056 11.4451 4.29587C11.5184 4.18615 11.6225 4.10062 11.7444 4.05012C11.8663 3.99962 12.0004 3.98642 12.1298 4.01218C12.2592 4.03795 12.378 4.10152 12.4713 4.19486L15.8045 7.52809C15.8665 7.59 15.9156 7.66352 15.9492 7.74445C15.9827 7.82538 16 7.91213 16 7.99974C16 8.08735 15.9827 8.17409 15.9492 8.25502C15.9156 8.33595 15.8665 8.40948 15.8045 8.47139ZM14.3879 7.99974L12.6663 6.27563V9.72385L14.3879 7.99974Z"
                        fill="currentColor"/>
                </svg>
            </a>
        </div>
    </div>
    <!-- End App Menu -->

    <!-- Start App Settings Sidebar -->
    <div id="app-setting-drawer"
         class="side-canvas font-spline_sans dark:bg-dark-card-two right-0 h-screen translate-x-full duration-300 overflow-y-auto w-80 sm:w-96"
         tabindex="-1">
        <button type="button" data-drawer-hide="app-setting-drawer" aria-controls="app-setting-drawer"
                class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg absolute top-2.5 right-2.5">
            <i class="ri-close-line text-gray-500 dark:text-dark-text"></i>
        </button>
        <div class="p-6 py-3 border-b border-gray-200 dark:border-dark-border-four">
            <h6 class="text-lg font-medium text-gray-500 dark:text-dark-text">Personalize Settings</h6>
            <p class="text-sm text-gray-500 dark:text-dark-text mt-1">
                Design your space exactly how you want it !
            </p>
        </div>
        <!-- Customizatin Options -->
        <div class="p-6 pt-3 divide-y divide-gray-200 dark:divide-dark-border-four space-y-10">
            <!-- Theme Mode -->
            <div class="pt-10 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Mode</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1 inline-block"
                               for="radioThemeLight">Light</label>
                        <label
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five rounded-md flex-center py-3 select-none cursor-pointer ring-2 ring-transparent group-data-[theme-mode=light]:ring-primary-500 leading-none"
                            for="radioThemeLight">
                            <i class="ri-sun-line text-inherit text-2xl"></i>
                            <input name="radioThemeMode" type="radio" id="radioThemeLight" hidden checked
                                   onchange="toggleThemeMode()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1 inline-block"
                               for="radioThemeDark">Dark</label>
                        <label
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five rounded-md flex-center py-3 select-none cursor-pointer ring-2 ring-transparent group-data-[theme-mode=dark]:ring-primary-500 leading-none"
                            for="radioThemeDark">
                            <i class="ri-moon-clear-line text-inherit text-2xl"></i>
                            <input name="radioThemeMode" type="radio" id="radioThemeDark" hidden
                                   onchange="toggleThemeMode()">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End App Settings Sidebar -->

    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 ac-transition">
        @yield('content')
    </div>
    <!-- End Main Content -->
@endsection

