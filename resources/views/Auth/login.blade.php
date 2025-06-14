<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
      Sign in to your account
    </h2>
  </div>

  <!-- Card container -->
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <div class="bg-white px-6 py-8 rounded-lg shadow-lg">
      <form class="space-y-6" action="/login_now" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">
            Email address
          </label>
          <div class="mt-2">
            <input
              type="email"
              name="email"
              id="email"
              autocomplete="email"
              required
              placeholder="Email"
             class="block w-full rounded-md bg-white px-3 py-1.5 text-base leading-6 text-gray-900 outline outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm leading-6"

            />
            @error('email')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">
              Password
            </label>
          </div>
         <div class="mt-2 relative w-full max-w-sm">
          <input
            type="password"
            name="password"
            placeholder="Password"
            id="password"
            autocomplete="current-password"
            required
            class="block w-full rounded-md bg-white px-3 py-1.5 pr-10 text-base leading-6 text-gray-900 outline outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm leading-6"
          />
          
          <!-- Eye icon button -->
          <button
            type="button"
            id="togglePassword"
            class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-400 hover:text-indigo-600 focus:outline-none"
            aria-label="Toggle password visibility"
          >
            <!-- Eye SVG icon -->
            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path id="eyeOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path id="eyeOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
        </div>

        <div>
          <button
            type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
          >
            Sign in
          </button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm/6 text-gray-500">
        Don't have an account?
        <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">
          register now
        </a>
      </p>
    </div>
</form>
  </div>
</div>
<script src="../assets/js/login.js"></script>
</body>
</html>
