<x-layout>
    <x-form title="Register an Account" description="Start tracking your Ideas today.">
        <form action="/register" method="POST" class="mt-10 space-y-4">
            @csrf

            <x-form.field name="name" label="Name"></x-form.field>
            <x-form.field name="email" tyle="email" label="E-Mail"></x-form.field>
            <x-form.field name="password" type="password" label="Password"></x-form.field>

            <button type="submit" class="btn mt-2 h-10 w-full">Create Account</button>

        </form>
    </x-form>
</x-layout>
