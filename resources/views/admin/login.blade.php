<x-guest-layout>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <input type="email" name="email" required autofocus>
        <input type="password" name="password" required>
        <button type="submit">Login Admin</button>
    </form>
</x-guest-layout>
