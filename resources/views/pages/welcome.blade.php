@extends('layouts.app')

@section('title', 'Neón Gonz')

@section('content')
    <section id="inicio" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: repeating-linear-gradient(45deg, transparent, transparent 40px, currentColor 40px, currentColor 41px);">
            </div>
        </div>

        <div class="absolute top-1/3 left-1/4 w-96 h-96 bg-primary/20 rounded-full blur-[150px]">
        </div>
        <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-secondary/20 rounded-full blur-[120px]">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center">
                <div class="flex justify-center animate__animated animate__fadeIn animate__delay-1s">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo de Neón Gonz" class="w-24 md:w-36 h-auto">
                </div>
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight mb-6 animate__animated animate__fadeIn">
                <span class="">
                    Transformamos <span class="text-primary">ideas</span> en <span class="text-secondary">realidad</span>
                </span>
                </h1>
            
                <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto mb-10 text-pretty">
                    Expertos en publicidad, estructuras metálicas de calidad y personalización de artículos. Tu visión, nuestra especialidad.
                </p>

                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-border pt-10">
                    @foreach ([
                        ["label" => "Años de experiencia", "value" => "+35"],
                        ["label" => "Proyectos completados", "value" => "200+"],
                        ["label" => "Clientes satisfechos", "value" => "100%"],
                        ["label" => "Aliados y proveedores", "value" => "+10"]
                    ] as $index => $stat)
                        <div class="text-center animate__animated animate__fadeInDown animate__delay-{{ $index }}s">
                            <div class="text-3xl md:text-4xl font-bold text-primary">{{ $stat['value'] }}</div>
                            <div class="text-sm text-muted-foreground mt-1">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@php
    $services = [
        [
            "icon"=> "megaphone",
            "title"=> "Publicidad e impresión",
            "description"=> "Letreros luminosos, lonas, rótulos y señalética que capturan la atención y fortalecen tu marca.",
            "features"=> ["Letreros LED y Neón", "Lonas Publicitarias", "Rótulos y Anuncios", "Vinil y Stickers", "Señalética"],
        ],
        [
            "icon"=> "wrench",
            "title"=> "Herrería",
            "description"=> "Estructuras metálicas, puertas, ventanas y trabajos personalizados con los más altos estándares.",
            "features"=> ["Toldos", "Estanterías",  "Muebles", "Estructuras Metálicas"],
        ],
        [
            "icon"=> "car",
            "title"=> "Accesorios automotrices",
            "description"=> "Instalación de accesorios de seguridad vial en vehículos.",
            "features"=> ["Cámaras de reversa", "Alarmas de reversa", "Alarmas antirrobo", ],
        ],
    ];
@endphp

<section id="servicios" class="py-24 bg-card">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mb-16">
            <span class="text-primary font-medium text-sm uppercase tracking-wider">Nuestros Servicios</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6 text-balance">
                Soluciones completas para tu negocio
            </h2>
            <p class="text-muted-foreground text-lg">
                Ofrecemos una gama completa de servicios para hacer crecer tu marca y mejorar tus espacios.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="card">
                    <div class="p-8">

                        <div class="w-14 h-14 rounded-lg bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
                            <x-dynamic-component :component="'lucide-' . $service['icon']" class="w-7 h-7 text-primary" />
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold">{{ $service['title'] }}</h3>
                            <x-lucide-arrow-up-right class="w-5 h-5 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 group-hover:-translate-y-1 transition-all" />
                        </div>

                        <p class="text-muted-foreground mb-6">{{ $service['description'] }}</p>

                        <ul class="space-y-2">
                            @foreach ($service['features'] as $feature)
                                <li class="flex items-center gap-2 text-sm">
                                    <div class="w-1.5 h-1.5 rounded-full bg-secondary"></div>
                                    <span class="text-foreground">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-8 pt-6 border-t border-border">
                            <span class="text-5xl font-bold text-muted/30"></span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="nosotros" class="py-24 bg-card">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mb-16">
            <span class="text-primary font-medium text-sm uppercase tracking-wider">Sobre nosotros</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6 text-balance">
                Construimos confianza con cada proyecto
            </h2>
            <p class="text-muted-foreground text-lg mb-8">
              En <span class="text-secondary font-semibold">Neón Gonz</span>, combinamos creatividad, 
              experiencia y dedicación para ofrecer soluciones integrales en publicidad, 
              herrería e impresión. Cada proyecto es una oportunidad para superar expectativas.
            </p>

            @php
                $highlights = [
                    "Más de 35 años de experiencia en el mercado",
                    "Materiales de primera calidad garantizados",
                    "Equipo de profesionales altamente capacitados",
                    "Entregas puntuales y compromiso total",
                    "Precios competitivos sin sacrificar calidad",
                    "Atención personalizada en cada proyecto",
                ];
            @endphp

            <div class="grid sm:grid-cols-2 gap-4">
                @foreach ($highlights as $item)
                    <div class="flex items-start gap-3">
                        <x-lucide-circle-check class="w-5 h-5 text-primary shrink-0" />
                        <span class="text-sm text-foreground">{{ $item }}</span>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
    </div>
</section>

@php
    $contactInfo = [
        ["icon" => "map-pin",  "label" => "Dirección", "value" => "Constitución 5, Santa María Aztahuacan, Iztapalapa, 09500 Ciudad de México"],
        ["icon" => "phone",    "label" => "Teléfono",  "value" => "+52 55 5218 8640"],
        ["icon" => "mail",     "label" => "Email",     "value" => "neongonz@hotmail.com"],
        ["icon" => "clock",    "label" => "Horario",   "value" => "Lun - Sáb: 10:00 AM - 6:00 PM"],
    ];
@endphp

<section id="contacto" class="py-24 bg-card">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16">

            {{-- Columna izquierda - Info --}}
            <div>
                <span class="text-primary font-medium text-sm uppercase tracking-wider">Contacto</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-6 text-balance">
                    Hablemos de tu <span class="text-secondary">proyecto</span>
                </h2>
                <p class="text-muted-foreground text-lg mb-10">
                    Estamos listos para ayudarte a llevar tu negocio al siguiente nivel.
                    Contáctanos y recibe una cotización sin compromiso.
                </p>

                <div class="space-y-6">
                    @foreach ($contactInfo as $item)
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                <x-dynamic-component :component="'lucide-' . $item['icon']" class="w-5 h-5 text-primary" />
                            </div>
                            <div>
                                <div class="text-sm text-muted-foreground">{{ $item['label'] }}</div>
                                <div class="text-foreground font-medium">{{ $item['value'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Columna derecha - Formulario --}}
            <div class="bg-background border border-border rounded-2xl p-8">
                <h3 class="text-2xl font-bold mb-6">Solicita tu cotización</h3>

                {{-- {{ route('contact.send') }} --}}
                <form action="" method="POST" class="space-y-5">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="text-sm text-muted-foreground mb-2 block">Nombre</label>
                            <input type="text" name="name" placeholder="Tu nombre"
                                class="w-full h-10 px-3 rounded-md bg-muted border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-ring" />
                        </div>
                        <div>
                            <label class="text-sm text-muted-foreground mb-2 block">Email</label>
                            <input type="email" name="email" placeholder="tu@email.com"
                                class="w-full h-10 px-3 rounded-md bg-muted border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-ring" />
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="text-sm text-muted-foreground mb-2 block">Teléfono</label>
                            <input type="text" name="phone" placeholder="(123) 456-7890"
                                class="w-full h-10 px-3 rounded-md bg-muted border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-ring" />
                        </div>
                        <div>
                            <label class="text-sm text-muted-foreground mb-2 block">Servicio de interés</label>
                            <select name="service"
                                class="w-full h-10 px-3 rounded-md bg-muted border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                <option value="">Selecciona un servicio</option>
                                <option value="publicidad">Publicidad</option>
                                <option value="herreria">Herrería</option>
                                <option value="impresion">Impresión</option>
                                <option value="varios">Varios servicios</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="text-sm text-muted-foreground mb-2 block">Mensaje</label>
                        <textarea name="message" rows="4" placeholder="Cuéntanos sobre tu proyecto..."
                            class="w-full px-3 py-2 rounded-md bg-muted border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-ring resize-none"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-primary-foreground py-4 text-lg font-medium rounded-md transition-colors cursor-pointer">
                        Enviar Mensaje
                        <x-lucide-send class="w-5 h-5" />
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection

