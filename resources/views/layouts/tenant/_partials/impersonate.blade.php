@if(isImpersonated())
    <div x-data="{open: false}">
        <div class="fixed top-0 flex items-center justify-center z-[300] w-full" >
            <button x-show="!open"
                    @click="open = true"  x-transition.opacity.duration.200ms
                    class=" px-4 py-2 text-sm font-medium text-white uppercase transform duration-200 bg-dark-card dark:bg-primary-500 justify-center rounded-b-md z-[300]"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 animate-pulse">
                    <path fill="#ffffff"
                          d="M11.5 10.9c-4 0-7.9.9-11.5 2.8h22.9c-3.6-1.9-7.4-2.8-11.4-2.8zM16.7 14.8c-1.7 0-3.1 1.1-3.6 2.6-1-.3-1.9-.3-2.8-.1-.6-1.4-1.9-2.4-3.6-2.4-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8s3.8-1.7 3.8-3.8v-.4c.8-.2 1.6-.1 2.4.2v.3c0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8 0-2.2-1.7-4-3.8-4zm-7.2 3.9c0 1.6-1.3 2.8-2.8 2.8-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8c1.2 0 2.2.7 2.6 1.7.1.3.2.6.2 1.1 0-.1 0-.1 0 0zm7.2 2.8c-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8 2.8 1.3 2.8 2.8-1.3 2.8-2.8 2.8zM16.7 2 9.9 3.1 6.6 2 4.4 8.7h14.5z"
                          class="color4a4a4a svgShape"></path>
                </svg>
            </button>
        </div>

        <div class="fixed top-0 flex items-center justify-center z-[300] w-full" >

            <div class="w-full" x-show="open" class="alert-banner"  x-transition.opacity.duration.200ms>
                <label class="close cursor-pointer flex items-center justify-between w-full p-2 bg-dark-card dark:bg-primary-500 shadow text-white z-10 rounded-b-md" title="close" for="banneralert">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                        <path fill="#ffffff"
                              d="M11.5 10.9c-4 0-7.9.9-11.5 2.8h22.9c-3.6-1.9-7.4-2.8-11.4-2.8zM16.7 14.8c-1.7 0-3.1 1.1-3.6 2.6-1-.3-1.9-.3-2.8-.1-.6-1.4-1.9-2.4-3.6-2.4-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8s3.8-1.7 3.8-3.8v-.4c.8-.2 1.6-.1 2.4.2v.3c0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8 0-2.2-1.7-4-3.8-4zm-7.2 3.9c0 1.6-1.3 2.8-2.8 2.8-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8c1.2 0 2.2.7 2.6 1.7.1.3.2.6.2 1.1 0-.1 0-.1 0 0zm7.2 2.8c-1.6 0-2.8-1.3-2.8-2.8s1.3-2.8 2.8-2.8 2.8 1.3 2.8 2.8-1.3 2.8-2.8 2.8zM16.7 2 9.9 3.1 6.6 2 4.4 8.7h14.5z"
                              class="color4a4a4a svgShape"></path>
                    </svg>
                    <div>
                        <b>{{__('Impersonating:')}}</b> {{auth()->user()->full_name}} {{__('of')}} <b>{{tenant()->name}}</b>
                    </div>

                    <div class="flex items-center space-x-3">
                        <a href="{{ route('tenant.logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form-menu').submit();"
                           class="flex items-center gap-2 py-1 px-3 text-sm text-white hover:bg-primary-600 rounded">
                            <i class="ri-logout-box-line text-lg align-middle text-white"></i>
                            <span>Leave</span>
                        </a>
                        <form id="logout-form-menu" action="{{ route('tenant.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <svg class="fill-current text-white text" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" @click="open = false">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>

                </label>
            </div>

        </div>
    </div>
@endif
