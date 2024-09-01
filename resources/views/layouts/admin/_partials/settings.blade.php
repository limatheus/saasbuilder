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
                        <input name="radioThemeMode" type="radio" id="radioThemeLight" class="hidden" hidden checked
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
                        <input name="radioThemeMode" type="radio" id="radioThemeDark" class="hidden" hidden
                               onchange="toggleThemeMode()">
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End App Settings Sidebar -->
