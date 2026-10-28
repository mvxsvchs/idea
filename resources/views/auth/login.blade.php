<x-layout>
    <x-form title="Log into your Account" description="Glad to have you back today.">
        <form action="/login" method="POST" class="mt-10 space-y-4">
            @csrf

            <x-form.field name="email" tyle="email" label="E-Mail"></x-form.field>
            <x-form.field name="password" type="password" label="Password"></x-form.field>

            <button type="submit" class="btn mt-2 h-10 w-full" data-test="login-button">Sign in</button>

        </form>
    </x-form>
</x-layout>
