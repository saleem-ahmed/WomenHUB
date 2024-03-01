<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <a href="/">
                <div style="background-color: #fff; margin-bottom: -40px; width: 100%; border-top-left-radius: 5%; border-top-right-radius: 5px;">
                    <!-- <img class="mb-5" style="padding: 30px 130px 30px 130px; " src="{{ asset('images/10-1.png')}}" alt=""> -->
                    <h1 class="mb-5" style="padding: 20px 156px; font-weight: bold; font-size: 20px;">Women HUb.</h1>
                    <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->

                </div>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h5 class="text-center mb-4">Chef Signup</h5>

            <!-- Name -->
            <div>
                <x-label for="fullname" :value="__('Full Name')" />

                <x-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
                <!-- <input id="fullname" class="form-control block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus /> -->
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

           <!-- Phone -->
           <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full"
                                type="text"
                                name="phone" required />
            </div>

            <!-- Kitchen Name -->
           <div class="mt-4">
                <x-label for="CNIC" :value="__('CNIC')" />

                <x-input id="CNIC" class="block mt-1 w-full"
                                type="file"
                                name="Cnic" required />
            </div>
            {{-- <!-- Kitchen Name -->
           <div class="mt-4">
                <x-label for="kitchen_name" :value="__('Kitchen Name')" />

                <x-input id="kitchen_name" class="block mt-1 w-full"
                                type="text"
                                name="kitchen_name" required />
            </div> --}}

            <!-- Location -->
           <div class="mt-4">
                <x-label for="location" :value="__('Location')" />

                <x-input id="location" class="block mt-1 w-full"
                                type="text"
                                name="location" required />
            </div>

            <input type="text" name="role" value="chef" style="display: none">

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
