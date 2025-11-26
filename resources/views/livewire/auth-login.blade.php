<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Login ke KantinKu
            </h2>
        </div>
        <form class="mt-8 space-y-6" wire:submit="login">
            <div>
                <label for="username" class="sr-only">NIM atau Email</label>
                <input 
                    id="username" 
                    name="username" 
                    type="text" 
                    wire:model="username"
                    required 
                    class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan NIM atau Email"
                >
                @error('username')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="sr-only">Password</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    wire:model="password"
                    required 
                    class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Password"
                >
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button 
                    type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Login
                </button>
            </div>

            <div class="text-center text-sm text-gray-600">
                <p>Default password: <strong>password123</strong></p>
                <p class="mt-2">
                    Admin: NIM <strong>1234567890</strong> atau email <strong>ami@gmail.com</strong><br>
                    Buyer: NIM <strong>0987654321</strong> atau email <strong>pond@gmail.com</strong>
                </p>
            </div>
        </form>
    </div>
</div>