<nav class="border-border border-y relative">
    <div class="mx-4 my-4 md:mx-36 flex items-center justify-between">
        <span class="text-2xl font-bold tracking-tighter">
            <span class="text-primary">NEÓN</span>
            <span class="text-secondary">GONZ</span>
        </span>

        {{-- Desktop --}}
        <div class="hidden lg:flex w-2/3 xl:w-1/2 items-center justify-between">
            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
            <a class="nav-link" href="#">Servicios</a>
            <a class="nav-link" href="#">Nosotros</a>
            <a class="nav-link" href="{{ url('/contact') }}">Contacto</a>
            <button class="bg-primary rounded-md p-2 cursor-pointer">Cotiza ahora</button>
        </div>

        {{-- Burger --}}
        <button id="burger-btn" class="lg:hidden border border-border rounded-lg p-2 cursor-pointer">
            <x-lucide-menu id="icon-menu" class="size-5" />
            <x-lucide-x    id="icon-close" class="size-5 hidden" />
        </button>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden border-t border-border px-4 pb-4 flex-col gap-3 lg:mt-0 lg:hidden">
        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
        <a class="nav-link" href="#">Servicios</a>
        <a class="nav-link" href="#">Nosotros</a>
        <a class="nav-link" href="{{ url('/contact') }}">Contacto</a>
        <button class="bg-primary rounded-md py-1 w-full">Cotiza ahora</button>
    </div>
</nav>

@push('scripts')
<script>
        const btn = document.getElementById('burger-btn');
        const menu = document.getElementById('mobile-menu');
        let open = false;

        btn.addEventListener('click', () => {
        open = !open;
        menu.classList.toggle('hidden', !open);
        menu.classList.toggle('flex', open); // 👈
    });
</script>
@endpush