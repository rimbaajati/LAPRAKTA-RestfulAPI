<x-guest-layout>
    <div class="w-full max-w-sm mx-auto mt-10">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Role Sel -->
            <div class="mt-4">
                <label for="role" class="block font-medium text-sm text-gray-700">Login Sebagai</label>
                <select id="role" name="role" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" required autofocus
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-between">
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
