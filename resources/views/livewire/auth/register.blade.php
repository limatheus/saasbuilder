@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-slate-900 leading-9">
            Create a new account
        </h2>

        <p class="mt-2 text-sm text-center text-slate-600 leading-5 max-w">
            Or
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                sign in to your account
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="register">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-slate-700 leading-5">
                        First name
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="first_name" id="first_name" type="text" required autofocus class="form-input @error('first_name') form-input-error @enderror" />
                    </div>

                    @error('first_name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="last_name" class="block text-sm font-medium text-slate-700 leading-5">
                        Last name
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="last_name" id="last_name" type="text"  class="form-input @error('last_name') form-input-error @enderror" />
                    </div>

                    @error('last_name')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium text-slate-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" type="email" required class="form-input @error('email') border-red-300 text-red-500 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="domain" class="block text-sm font-medium text-slate-700 leading-5">
                        Domain
                    </label>

                    <div class="flex flex-wrap items-stretch w-full mt-1 relative group">
                        <input type="text" wire:model.lazy="domain" name="domain" id="domain"  class="form-input-group  @error('domain') form-input-error @enderror" placeholder="domain">
                        <div class="flex ">
                            <span class="flex items-center leading-normal bg-slate-50 rounded-lg rounded-l-none border border-l-0 group-focus-within:border-1.5 group-focus-within:ring-1 group-focus-within:border-primary-500  group-focus-within:ring-primary-500 border-slate-300 py-3 px-4 pe-11 whitespace-no-wrap text-slate-500 text-sm group-focus-within:text-primary-500">.{{env('APP_DOMAIN')}}</span>
                        </div>
                    </div>

                    @error('domain')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-slate-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="form-input @error('password') form-input-error @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-slate-700 leading-5">
                        Confirm Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required class="form-input " />
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Register
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
