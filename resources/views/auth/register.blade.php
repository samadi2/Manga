<x-guest-layout>

    <h1 class="connect">S'inscrire </h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="input-container ic1">
            <input id="name" class="input" name="name" type="text" required autofocus autocomplete="name" placeholder=" " />
            <div class="cut"></div>
            <label for="name" class="placeholder">Name</label>
        </div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        


         <!-- Email Address -->
         <div class="input-container ic2">
            <input id="email" class="input" type="email" name="email" required autofocus autocomplete="username" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder">Email</>
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      
      <!-- Password -->
        <div class="input-container ic2">
            <input id="password" class="input" type="password"
                name="password" required autocomplete="current-password" placeholder=" " />
            <div class="cut cut-short2"></div>
            <label for="password" class="placeholder">Password</>
        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />


        <!-- Confirm Password -->
        <div class="input-container ic2">
            <input id="password" class="input" type="password"
                name="password_confirmation" required autocomplete="new-password" placeholder=" " />
                <div class="cut cut-short2"></div>
                <label for="password_confirmation" class="placeholder">Confirm Password</>
            
        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
