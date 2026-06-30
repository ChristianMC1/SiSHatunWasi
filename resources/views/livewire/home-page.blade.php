<div>
    {{-- ================================================================ --}}
    {{-- NAVBAR: Dark #111111 · Glassmorphism · Gold accents               --}}
    {{-- ================================================================ --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-[#111111]/90 backdrop-blur-xl border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-premium/15 flex items-center justify-center text-premium font-serif font-bold text-base border border-premium/30">HW</div>
                <span class="text-xl font-serif font-bold text-white tracking-tight">HATUN <span class="text-premium">WASI</span></span>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a href="#inicio" class="text-sm text-white/50 hover:text-premium transition-all duration-300 font-medium relative after:absolute after:bottom-[-8px] after:left-0 after:w-0 after:h-[1.5px] after:bg-premium after:transition-all after:duration-500 hover:after:w-full">Inicio</a>
                <a href="#nosotros" class="text-sm text-white/50 hover:text-premium transition-all duration-300 font-medium relative after:absolute after:bottom-[-8px] after:left-0 after:w-0 after:h-[1.5px] after:bg-premium after:transition-all after:duration-500 hover:after:w-full">Nosotros</a>
                <a href="#catalogo" class="text-sm text-white/50 hover:text-premium transition-all duration-300 font-medium relative after:absolute after:bottom-[-8px] after:left-0 after:w-0 after:h-[1.5px] after:bg-premium after:transition-all after:duration-500 hover:after:w-full">Productos</a>
                <a href="#tutoriales" class="text-sm text-white/50 hover:text-premium transition-all duration-300 font-medium relative after:absolute after:bottom-[-8px] after:left-0 after:w-0 after:h-[1.5px] after:bg-premium after:transition-all after:duration-500 hover:after:w-full">Tutoriales</a>
                <a href="#contacto" class="text-sm text-white/50 hover:text-premium transition-all duration-300 font-medium relative after:absolute after:bottom-[-8px] after:left-0 after:w-0 after:h-[1.5px] after:bg-premium after:transition-all after:duration-500 hover:after:w-full">Contacto y cat&aacute;logos</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" target="_blank"
                   class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-premium/40 text-premium text-sm font-semibold hover:bg-premium hover:text-black transition-all duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    Ingresar
                </a>
            </div>
        </div>
    </nav>

    {{-- ================================================================ --}}
    {{-- HERO: Dark #111111 · Clean · No gradient overlay · Premium         --}}
    {{-- ================================================================ --}}
    <section id="inicio" class="relative min-h-screen flex items-center overflow-hidden z-10 pt-20 bg-[#111111]">
        <div class="absolute inset-0 bg-black/60 z-[1]"></div>
        <div class="absolute inset-0 z-0" style="background-image: url('/images/fondo.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-7 animate-fade-in">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-premium/40 text-premium text-[11px] font-semibold tracking-[0.15em] uppercase mb-8">
                        <span class="w-1.5 h-1.5 rounded-full bg-premium"></span>
                        Porcelanatos &middot; Cer&aacute;micos &middot; Revestimientos
                    </span>
                    <h1 class="font-serif font-bold text-white leading-[1.05] tracking-tight mb-6 text-5xl sm:text-6xl md:text-7xl lg:text-8xl">
                        Acabados que<br>
                        <span class="italic text-premium">transforman</span> espacios
                    </h1>
                    <div class="w-20 h-0.5 bg-premium/60 mb-6"></div>
                    <p class="font-sans text-base sm:text-lg text-[#C7C7C7] leading-relaxed max-w-xl mb-10">
                        Somos la empresa l&iacute;der en venta de porcelanatos, cer&aacute;micos, revestimientos y sanitarios en Juliaca.
                        Calidad premium, precios justos y asesor&iacute;a experta para cada ambiente de tu hogar.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#catalogo"
                           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-premium text-black font-semibold text-sm hover:bg-premium-light transition-all duration-300 shadow-lg shadow-premium/20 hover:shadow-premium/30 hover:-translate-y-0.5">
                            Explorar cat&aacute;logo
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                            </svg>
                        </a>
                        <a href="#contacto"
                           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full border border-white/20 text-white/70 font-semibold text-sm hover:border-premium/50 hover:text-premium transition-all duration-300">
                            Cont&aacute;ctanos
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 grid grid-cols-2 gap-3 sm:gap-4 animate-slide-up">
                    <div class="group p-5 sm:p-6 rounded-2xl bg-[#202020] border border-white/5 hover:border-premium/30 transition-all duration-500 hover:-translate-y-1">
                        <div class="w-10 h-10 rounded-xl bg-premium/10 flex items-center justify-center mb-3 group-hover:bg-premium/20 transition-all duration-500">
                            <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <p class="text-2xl sm:text-3xl font-bold text-white font-sans">+{{ $totalProductos }}</p>
                        <p class="text-xs text-[#C7C7C7]/60 mt-1 font-sans">Productos disponibles</p>
                    </div>
                    <div class="group p-5 sm:p-6 rounded-2xl bg-[#202020] border border-white/5 hover:border-premium/30 transition-all duration-500 hover:-translate-y-1">
                        <div class="w-10 h-10 rounded-xl bg-premium/10 flex items-center justify-center mb-3 group-hover:bg-premium/20 transition-all duration-500">
                            <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-2xl sm:text-3xl font-bold text-white font-sans">10+</p>
                        <p class="text-xs text-[#C7C7C7]/60 mt-1 font-sans">A&ntilde;os de experiencia</p>
                    </div>
                    <div class="group p-5 sm:p-6 rounded-2xl bg-[#202020] border border-white/5 hover:border-premium/30 transition-all duration-500 hover:-translate-y-1">
                        <div class="w-10 h-10 rounded-xl bg-premium/10 flex items-center justify-center mb-3 group-hover:bg-premium/20 transition-all duration-500">
                            <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-2xl sm:text-3xl font-bold text-white font-sans">Calidad</p>
                        <p class="text-xs text-[#C7C7C7]/60 mt-1 font-sans">Premium garantizada</p>
                    </div>
                    <div class="group p-5 sm:p-6 rounded-2xl bg-[#202020] border border-white/5 hover:border-premium/30 transition-all duration-500 hover:-translate-y-1">
                        <div class="w-10 h-10 rounded-xl bg-premium/10 flex items-center justify-center mb-3 group-hover:bg-premium/20 transition-all duration-500">
                            <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <p class="text-2xl sm:text-3xl font-bold text-white font-sans">Env&iacute;os</p>
                        <p class="text-xs text-[#C7C7C7]/60 mt-1 font-sans">A todo el pa&iacute;s</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================ --}}
    {{-- NOSOTROS: Beige stone #EFE9DF · Dark text · White card            --}}
    {{-- ================================================================ --}}
    <section id="nosotros" class="relative py-28 sm:py-36 z-10 bg-[#EFE9DF]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                {{-- Left: Large photograph with background image --}}
                <div class="lg:col-span-6 relative" x-data x-init="$el.classList.add('animate-slide-up')">
                    <div class="aspect-[4/5] rounded-[2rem] overflow-hidden bg-white border border-[#1F1F1F]/5 shadow-xl relative">
                        {{-- Background image with overlay --}}
                        <div class="absolute inset-0" style="background-image: url('/images/fondo.png'); background-size: cover; background-position: center;"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
                        {{-- Content --}}
                        <div class="relative h-full flex items-center justify-center">
                            <div class="text-center p-12">
                                <div class="w-24 h-24 mx-auto mb-8 rounded-full bg-premium/10 border-2 border-premium/30 flex items-center justify-center">
                                    <span class="font-serif text-4xl font-bold text-premium">HW</span>
                                </div>
                                <p class="text-white/70 text-sm font-sans max-w-xs mx-auto leading-relaxed italic">&quot;Espacios que inspiran &middot; Acabados que perduran&quot;</p>
                            </div>
                        </div>
                        {{-- Decorative corner accents --}}
                        <div class="absolute top-6 left-6 w-16 h-16 border-t-2 border-l-2 border-premium/40 rounded-tl-xl"></div>
                        <div class="absolute bottom-6 right-6 w-16 h-16 border-b-2 border-r-2 border-premium/40 rounded-br-xl"></div>
                    </div>
                    {{-- Floating stat badges --}}
                    <div class="absolute -bottom-6 -left-6 sm:-left-8 flex gap-3 sm:gap-4">
                        <div class="px-5 py-3 rounded-xl bg-white shadow-lg shadow-black/5 border border-[#1F1F1F]/5">
                            <p class="text-2xl font-bold text-premium font-serif">10+</p>
                            <p class="text-[11px] text-[#5E5E5E] font-sans">A&ntilde;os</p>
                        </div>
                        <div class="px-5 py-3 rounded-xl bg-white shadow-lg shadow-black/5 border border-[#1F1F1F]/5">
                            <p class="text-2xl font-bold text-premium font-serif">+500</p>
                            <p class="text-[11px] text-[#5E5E5E] font-sans">Proyectos</p>
                        </div>
                        <div class="px-5 py-3 rounded-xl bg-white shadow-lg shadow-black/5 border border-[#1F1F1F]/5">
                            <p class="text-2xl font-bold text-premium font-serif">+1K</p>
                            <p class="text-[11px] text-[#5E5E5E] font-sans">Productos</p>
                        </div>
                    </div>
                </div>

                {{-- Right: Editorial content --}}
                <div class="lg:col-span-6 flex flex-col justify-center space-y-6 lg:pl-8" x-data x-init="$el.classList.add('animate-slide-up')">
                    <span class="text-premium font-semibold text-sm tracking-[0.2em] uppercase font-sans">Nosotros</span>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-[#1F1F1F] leading-tight">
                        Hatun Wasi SRL
                    </h2>
                    <div class="w-16 h-0.5 bg-premium/60"></div>
                    <p class="text-[#5E5E5E] leading-relaxed text-base sm:text-lg font-sans max-w-xl">
                        Con m&aacute;s de 10 a&ntilde;os en el mercado de Juliaca, somos especialistas en porcelanatos, cer&aacute;micos, revestimientos y sanitarios.
                        Trabajamos con las mejores marcas para ofrecerte calidad premium al mejor precio.
                    </p>
                    <p class="text-[#5E5E5E]/70 leading-relaxed text-sm font-sans max-w-xl">
                        Nuestro equipo de asesores est&aacute; listo para ayudarte a elegir el acabado perfecto para cada rinc&oacute;n de tu hogar.
                        Creemos que cada espacio merece un tratamiento &uacute;nico, con materiales que combinan belleza, durabilidad y sostenibilidad.
                    </p>

                    {{-- Timeline --}}
                    <div class="pt-4">
                        <div class="flex items-center gap-8 sm:gap-12">
                            <div class="text-center">
                                <div class="w-12 h-12 rounded-full bg-premium/10 border border-premium/20 flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <p class="text-xs text-[#5E5E5E] font-sans">Fundaci&oacute;n</p>
                                <p class="text-sm font-bold text-[#1F1F1F] font-sans">2014</p>
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-premium/40 via-premium/20 to-transparent"></div>
                            <div class="text-center">
                                <div class="w-12 h-12 rounded-full bg-premium/10 border border-premium/20 flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <p class="text-xs text-[#5E5E5E] font-sans">Local propio</p>
                                <p class="text-sm font-bold text-[#1F1F1F] font-sans">2018</p>
                            </div>
                            <div class="flex-1 h-px bg-gradient-to-r from-premium/40 via-premium/20 to-transparent"></div>
                            <div class="text-center">
                                <div class="w-12 h-12 rounded-xl bg-premium/10 border border-premium/20 flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-5 h-5 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <p class="text-xs text-[#5E5E5E] font-sans">Premium</p>
                                <p class="text-sm font-bold text-[#1F1F1F] font-sans">2022</p>
                            </div>
                        </div>
                    </div>

                    <a href="#catalogo"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-premium/40 text-[#1F1F1F] text-sm font-semibold hover:bg-premium hover:text-black transition-all duration-300 w-fit mt-4">
                        Descubrir productos
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================ --}}
    {{-- AMBIENTES: Dark gray #1C1C1C · Light text · Dark cards            --}}
    {{-- ================================================================ --}}
    <section id="ambientes" class="relative py-28 sm:py-32 z-10 bg-[#1C1C1C]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-data x-init="$el.classList.add('animate-fade-in')">
                <span class="text-premium/70 font-semibold text-sm tracking-[0.2em] uppercase font-sans">Ambientes</span>
                <h2 class="text-4xl sm:text-5xl font-serif font-bold text-white mt-4">Encuentra el acabado perfecto</h2>
                <div class="w-16 h-0.5 bg-premium/60 mx-auto mt-4"></div>
                <p class="text-[#C7C7C7] mt-4 max-w-xl mx-auto font-sans">Selecciona una estancia y descubre productos ideales para cada espacio.</p>
            </div>
            <div class="grid grid-cols-4 sm:grid-cols-4 md:grid-cols-8 gap-3 items-center justify-center w-full max-w-5xl mx-auto">
                <div wire:click="setAmbiente(null)"
                     class="flex flex-col items-center justify-center p-3 rounded-2xl border transition-all duration-300 cursor-pointer text-center w-full aspect-square hover:-translate-y-0.5
                            {{ $filterAmbiente === '' ? 'bg-premium/10 border-premium/50 text-premium' : 'bg-[#202020] border-white/5 text-[#C7C7C7] hover:border-premium/30 hover:text-premium' }}">
                    <div class="w-8 h-8 mb-1.5 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h7v7H3V3zm11 0h7v7h-7V3zM3 14h7v7H3v-7zm11 0h7v7h-7v-7z" /></svg>
                    </div>
                    <span class="font-sans text-[11px] font-semibold">Todos</span>
                </div>

                @foreach ([
                    ['Baño', 'bano', 'M4 12h16v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zm2-2V8a2 2 0 012-2h8a2 2 0 012 2v2M7 18l-1 2M17 18l1 2'],
                    ['Cocina', 'cocina', 'M5 5h14v14H5V5zm2 2v4h10V7H7zm0 6h4v4H7v-4zm6 0h4v4h-4v-4z'],
                    ['Sala', 'sala', 'M4 12h2v-2a2 2 0 012-2h8a2 2 0 012 2v2h2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-1H8v1a1 1 0 01-1 1H5a1 1 0 01-1-1v-5z'],
                    ['Comedor', 'comedor', 'M12 4v8M8 12h8M6 20l2-4h8l2 4'],
                    ['Dormitorio', 'dormitorio', 'M4 8h16v10H4V8zm0 2v4h16v-4H4zM8 12h2M14 12h2'],
                    ['Terraza', 'terraza', 'M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83'],
                    ['Fachadas', 'fachadas', 'M12 3L3 12h3v9h6v-6h2v6h6v-9h3L12 3z'],
                ] as $item)
                    @php $activeAmb = $filterAmbiente === $item[1]; @endphp
                    <div wire:click="setAmbiente('{{ $item[0] }}')"
                         class="flex flex-col items-center justify-center p-3 rounded-2xl border transition-all duration-300 cursor-pointer text-center w-full aspect-square hover:-translate-y-0.5
                                {{ $activeAmb ? 'bg-premium/10 border-premium/50 text-premium' : 'bg-[#202020] border-white/5 text-[#C7C7C7] hover:border-premium/30 hover:text-premium' }}">
                        <div class="w-8 h-8 mb-1.5 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $item[2] }}" /></svg>
                        </div>
                        <span class="font-sans text-[11px] font-medium">{{ $item[0] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================================================ --}}
    {{-- CATÁLOGO / PRODUCTOS: Light #F7F5F1 · Dark text · White cards     --}}
    {{-- ================================================================ --}}
    <section id="catalogo" class="relative py-28 sm:py-36 z-10 bg-[#EFE9DF]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-data x-init="$el.classList.add('animate-fade-in')">
                <span class="text-premium font-semibold text-sm tracking-[0.2em] uppercase font-sans">Cat&aacute;logo</span>
                <h2 class="text-4xl sm:text-5xl font-serif font-bold text-[#1F1F1F] mt-4">Nuestros Productos</h2>
                <div class="w-16 h-0.5 bg-premium/60 mx-auto mt-4"></div>
                <p class="text-[#5E5E5E] mt-4 max-w-xl mx-auto font-sans">Explora nuestra colecci&oacute;n de acabados premium para cada ambiente.</p>
            </div>

            {{-- Filters --}}
            <div class="bg-white rounded-3xl p-5 sm:p-7 border border-[#1F1F1F]/5 mb-12 shadow-sm" x-data x-init="$el.classList.add('animate-slide-up')">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div class="md:col-span-2">
                        <div class="relative">
                            <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[#5E5E5E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <input wire:model.live="search" type="text" placeholder="Buscar producto, c&oacute;digo o marca..."
                                   class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-white border border-[#1F1F1F]/10 text-[#1F1F1F] placeholder-[#5E5E5E]/40 focus:border-premium/50 focus:ring-2 focus:ring-premium/10 transition-all duration-300 outline-none text-sm font-sans">
                        </div>
                    </div>
                    <div>
                        <select wire:model.live="filterCategory"
                                class="w-full px-4 py-3.5 rounded-xl bg-white border border-[#1F1F1F]/10 text-[#1F1F1F] focus:border-premium/50 focus:ring-2 focus:ring-premium/10 transition-all duration-300 outline-none text-sm appearance-none cursor-pointer font-sans">
                            <option value="">Todas las categor&iacute;as</option>
                            @foreach ($categorias as $cat)
                                <option value="{{ $cat->slug }}">{{ $cat->slug }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select wire:model.live="filterAmbiente"
                                class="w-full px-4 py-3.5 rounded-xl bg-white border border-[#1F1F1F]/10 text-[#1F1F1F] focus:border-premium/50 focus:ring-2 focus:ring-premium/10 transition-all duration-300 outline-none text-sm appearance-none cursor-pointer font-sans">
                            <option value="">Todos los ambientes</option>
                            @foreach ($ambientes as $amb)
                                <option value="{{ $amb->slug }}">{{ $amb->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button wire:click="clearFilters"
                                class="w-full px-4 py-3.5 rounded-xl border border-[#1F1F1F]/10 text-[#5E5E5E] text-sm font-semibold hover:border-premium/50 hover:text-premium transition-all duration-300 flex items-center justify-center gap-2 bg-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Limpiar filtros
                        </button>
                    </div>
                </div>
            </div>

            {{-- Product Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-6">
                @forelse ($productos as $producto)
                    <div wire:key="prod-{{ $producto->id }}" x-data="{ showImage: false }" class="group bg-white rounded-2xl overflow-hidden ring-1 ring-[#1F1F1F]/15 shadow-sm transition-all duration-500 hover:shadow-xl hover:shadow-premium/5 hover:-translate-y-1 flex flex-col">
                        <div class="relative w-full aspect-[4/3] bg-[#F7F5F1] overflow-hidden">
                            @if ($producto->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $producto->images->first()->url) }}"
                                     alt="{{ $producto->nombre }}"
                                     @click="showImage = true"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out cursor-pointer">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-[#5E5E5E]">
                                    <svg class="w-16 h-16 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-xs font-medium text-[#5E5E5E]/50">Sin imagen</span>
                                </div>
                            @endif
                            @if ($producto->category)
                                <span class="absolute top-3 left-3 px-3 py-1.5 rounded-lg bg-white/90 text-premium text-xs font-semibold border border-premium/20 shadow-sm">
                                    {{ $producto->category->slug }}
                                </span>
                            @endif
                            @if ($producto->ambientes->isNotEmpty())
                                <div class="absolute top-3 right-3 flex flex-wrap gap-1 justify-end">
                                    @foreach ($producto->ambientes as $amb)
                                        <span class="px-2 py-0.5 rounded-md bg-white/70 text-[10px] font-medium text-[#5E5E5E] border border-[#1F1F1F]/5">{{ $amb->nombre }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="font-serif font-semibold text-[#1F1F1F] text-sm leading-snug mb-2">{{ $producto->nombre }}</h3>
                            <p class="text-xs text-[#5E5E5E] leading-relaxed mb-4 flex-1 font-sans">{{ $producto->descripcion }}</p>

                            <div class="flex flex-wrap gap-1.5 mb-4">
                                @if ($producto->codigo)
                                    <span class="px-2.5 py-1 rounded-lg bg-premium/8 text-premium/70 text-[10px] font-medium font-sans">{{ $producto->codigo }}</span>
                                @endif
                                @if ($producto->medidas)
                                    <span class="px-2.5 py-1 rounded-lg bg-premium/8 text-premium/70 text-[10px] font-medium font-sans">{{ $producto->medidas }}</span>
                                @endif
                                @if ($producto->marca)
                                    <span class="px-2.5 py-1 rounded-lg bg-premium/8 text-premium/70 text-[10px] font-medium font-sans">{{ $producto->marca }}</span>
                                @endif
                            </div>

                            <div class="flex items-center justify-between pt-3 border-t border-[#1F1F1F]/5">
                                <span class="text-lg font-bold text-[#2C3E50] font-sans">S/. {{ number_format($producto->precio, 2) }}</span>
                                @if ($producto->cantidad > 0)
                                    <span class="flex items-center gap-1.5 text-[11px] text-[#26E02D] font-medium font-sans">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#26E02D]"></span>
                                        {{ $producto->cantidad }} en stock
                                    </span>
                                @else
                                    <span class="text-[11px] text-[#5E5E5E]/50 font-medium font-sans">Sin stock</span>
                                @endif
                            </div>
                        </div>

                        {{-- Image Modal --}}
                        <template x-teleport="body">
                            <div x-show="showImage" x-cloak
                                 @click="showImage = false"
                                 @keydown.escape.window="showImage = false"
                                 class="fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">
                                <div @click.stop
                                     class="relative max-w-4xl w-full max-h-[90vh] flex items-center justify-center">
                                    @if ($producto->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $producto->images->first()->url) }}"
                                             alt="{{ $producto->nombre }}"
                                             class="max-w-full max-h-[85vh] w-auto h-auto object-contain rounded-2xl shadow-2xl">
                                    @endif
                                    <button @click="showImage = false"
                                            class="absolute -top-4 -right-4 w-10 h-10 rounded-full bg-premium text-black flex items-center justify-center shadow-lg hover:bg-premium-light transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </template>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <svg class="w-16 h-16 mx-auto text-[#5E5E5E]/30 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-[#5E5E5E]">No se encontraron productos</h3>
                        <p class="text-sm text-[#5E5E5E]/50 mt-1 font-sans">Intenta con otros filtros o t&eacute;rminos de b&uacute;squeda.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-14" x-data x-init="$el.classList.add('animate-fade-in')">
                {{ $productos->onEachSide(1)->links('components.pagination') }}
            </div>
        </div>
    </section>

    {{-- ================================================================ --}}
    {{-- TUTORIALES: Dark gray #1C1C1C · Light text · Dark cards           --}}
    {{-- ================================================================ --}}
    <section id="tutoriales" class="relative py-28 sm:py-32 z-10 bg-[#1C1C1C]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-data x-init="$el.classList.add('animate-fade-in')">
                <span class="text-premium/70 font-semibold text-sm tracking-[0.2em] uppercase font-sans">Aprende</span>
                <h2 class="text-4xl sm:text-5xl font-serif font-bold text-white mt-4">Tutoriales de Instalaci&oacute;n</h2>
                <div class="w-16 h-0.5 bg-premium/60 mx-auto mt-4"></div>
                <p class="text-[#C7C7C7] mt-4 max-w-xl mx-auto font-sans">Gu&iacute;as pr&aacute;cticas para instalar nuestros productos como un profesional.</p>
            </div>

            <div class="max-w-md mx-auto mb-12" x-data x-init="$el.classList.add('animate-slide-up')">
                <div class="relative">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[#C7C7C7]/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input wire:model.live="tutorialSearch" type="text" placeholder="Buscar tutorial..."
                           class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-[#202020] border border-white/5 text-white placeholder-[#C7C7C7]/40 focus:border-premium/50 focus:ring-2 focus:ring-premium/10 transition-all duration-300 outline-none text-sm font-sans">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
                @forelse ($tutorials as $tutorial)
                    <div class="group bg-[#202020] rounded-2xl overflow-hidden ring-1 ring-premium/30 shadow-sm shadow-premium/5 transition-all duration-500 hover:-translate-y-1">
                        <a href="{{ $tutorial->url }}" target="_blank" rel="noopener noreferrer">
                            <div class="relative h-48 bg-[#111111] flex items-center justify-center overflow-hidden">
                                @if ($tutorial->thumbnail)
                                    <img src="{{ $tutorial->thumbnail }}" alt="{{ $tutorial->titulo }}"
                                         class="w-full h-full object-cover absolute inset-0"
                                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                                    <div class="w-full h-full flex items-center justify-center" style="display:none">
                                        <svg class="w-20 h-20 text-white/5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                @else
                                    <svg class="w-20 h-20 text-white/5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                @endif
                                @if ($tutorial->duracion)
                                    <span class="absolute bottom-4 right-4 px-3 py-1.5 rounded-lg bg-black/60 text-white/70 text-xs font-medium border border-white/5 font-sans">{{ $tutorial->duracion }}</span>
                                @endif
                                <div class="absolute inset-0 bg-premium/0 group-hover:bg-premium/5 transition-all duration-500 flex items-center justify-center">
                                    <span class="w-14 h-14 rounded-full bg-premium flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform scale-75 group-hover:scale-100 shadow-lg shadow-premium/30">
                                        <svg class="w-6 h-6 text-black ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class="p-6">
                            <h3 class="font-serif font-bold text-white text-sm leading-snug">{{ $tutorial->titulo }}</h3>
                            <div class="mt-5">
                                <a href="{{ $tutorial->url }}" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-premium/30 text-premium text-sm font-semibold hover:bg-premium hover:text-black transition-all duration-300 font-sans">
                                    Ver tutorial
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <svg class="w-16 h-16 mx-auto text-white/5 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-lg font-semibold text-white/40">No se encontraron tutoriales</h3>
                        <p class="text-sm text-white/20 mt-1 font-sans">Intenta con otros t&eacute;rminos de b&uacute;squeda.</p>
                    </div>
                @endforelse
            </div>

            @if ($tutorialLastPage > 1)
                <div class="mt-12 flex items-center justify-center gap-2" x-data x-init="$el.classList.add('animate-fade-in')">
                    <button wire:click="gotoTutorialPage({{ max(1, $tutorialPage - 1) }})"
                            @if($tutorialPage <= 1) disabled @endif
                            class="w-10 h-10 rounded-xl flex items-center justify-center text-[#C7C7C7] bg-[#202020] border border-white/5 hover:border-premium/50 hover:text-premium transition-all duration-300 @if($tutorialPage <= 1) opacity-30 cursor-not-allowed @endif">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    @for ($p = 1; $p <= $tutorialLastPage; $p++)
                        <button wire:click="gotoTutorialPage({{ $p }})"
                                class="w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold transition-all duration-300 font-sans
                                       {{ $p === $tutorialPage ? 'bg-premium text-black' : 'text-[#C7C7C7] bg-[#202020] border border-white/5 hover:border-premium/50 hover:text-premium' }}">
                            {{ $p }}
                        </button>
                    @endfor
                    <button wire:click="gotoTutorialPage({{ min($tutorialLastPage, $tutorialPage + 1) }})"
                            @if($tutorialPage >= $tutorialLastPage) disabled @endif
                            class="w-10 h-10 rounded-xl flex items-center justify-center text-[#C7C7C7] bg-[#202020] border border-white/5 hover:border-premium/50 hover:text-premium transition-all duration-300 @if($tutorialPage >= $tutorialLastPage) opacity-30 cursor-not-allowed @endif">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </section>

    {{-- ================================================================ --}}
    {{-- CONTACTO Y CATÁLOGOS: Light #EFE9DF · Dark text                  --}}
    {{-- ================================================================ --}}
    <section id="contacto" class="relative py-28 sm:py-36 z-10 bg-[#EFE9DF]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-data x-init="$el.classList.add('animate-fade-in')">
                <span class="text-premium font-semibold text-sm tracking-[0.2em] uppercase font-sans">Contacto y cat&aacute;logos</span>
                <h2 class="text-4xl sm:text-5xl font-serif font-bold text-[#1F1F1F] mt-4">Cont&aacute;ctanos</h2>
                <div class="w-16 h-0.5 bg-premium/60 mx-auto mt-4"></div>
                <p class="text-[#5E5E5E] mt-4 max-w-xl mx-auto font-sans">Estamos aqu&iacute; para ayudarte a encontrar los acabados perfectos para tu hogar.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 items-stretch max-w-6xl mx-auto">

                <div class="md:col-span-3 flex flex-col justify-between p-8 sm:p-10 bg-transparent rounded-[2rem] border-2 border-[#1B4079]/20 shadow-sm overflow-hidden min-h-[460px]">

                    <div>
                        <h3 class="font-serif text-3xl sm:text-4xl font-bold text-[#1B4079] tracking-wide leading-tight">
                            Conversemos sobre tu proyecto
                        </h3>
                        <p class="font-sans text-sm sm:text-base text-[#5E5E5E] mt-3 leading-relaxed max-w-lg">
                            Estamos listos para asesorarte. Elige el canal de tu preferencia y hablemos.
                        </p>
                    </div>

                    <div class="space-y-5 font-sans text-sm text-[#1B4079] mt-8">

                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-[18px] h-[18px]"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.199 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.124-.272-.198-.57-.347zM.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.411 0 11.989 0c3.183.001 6.177 1.24 8.43 3.496 2.254 2.256 3.491 5.253 3.487 8.437-.005 6.57-5.355 11.918-11.931 11.918-2.007-.001-3.98-.507-5.731-1.472L0 24z"/></svg>
                            </div>
                            <div>
                                <p class="text-[11px] text-[#1B4079]/60 font-semibold uppercase tracking-widest">WhatsApp Ventas</p>
                                <p class="font-semibold text-[#1B4079]">+51 941 234 567</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[18px] h-[18px]"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                            </div>
                            <div>
                                <p class="text-[11px] text-[#1B4079]/60 font-semibold uppercase tracking-widest">Correo Corporativo</p>
                                <p class="font-semibold text-[#1B4079]">ventas@hatunwasi.com</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[18px] h-[18px]"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25s-7.5-4.108-7.5-11.25a7.5 7.5 0 1 1 15 0Z" /></svg>
                            </div>
                            <div>
                                <p class="text-[11px] text-[#1B4079]/60 font-semibold uppercase tracking-widest">Showroom Central</p>
                                <p class="font-semibold text-[#1B4079] whitespace-normal">Jr. 8 de Noviembre 537, Juliaca</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 pt-4 border-t border-[#1B4079]/10">
                            <a href="{{ $facebook_url ?? 'https://facebook.com' }}" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center hover:bg-[#1B4079] hover:text-white transition-all duration-300">
                                <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://wa.me/51941234567" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center hover:bg-[#1B4079] hover:text-white transition-all duration-300">
                                <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.199 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.124-.272-.198-.57-.347zM.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.411 0 11.989 0c3.183.001 6.177 1.24 8.43 3.496 2.254 2.256 3.491 5.253 3.487 8.437-.005 6.57-5.355 11.918-11.931 11.918-2.007-.001-3.98-.507-5.731-1.472L0 24z"/></svg>
                            </a>
                            <a href="{{ $instagram_url ?? 'https://instagram.com' }}" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center hover:bg-[#1B4079] hover:text-white transition-all duration-300">
                                <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 16a4 4 0 110-8 4 4 0 010 8z"/></svg>
                            </a>
                            <a href="{{ $tiktok_url ?? 'https://tiktok.com' }}" target="_blank" rel="noopener noreferrer"
                               class="w-9 h-9 bg-[#F6DCD7] text-[#1B4079] rounded-xl flex items-center justify-center hover:bg-[#1B4079] hover:text-white transition-all duration-300">
                                <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="md:col-span-2 w-full rounded-[2rem] overflow-hidden border border-[#B5C5C5]/30 shadow-sm min-h-[460px]">
                    <iframe
                        class="w-full h-full min-h-[460px]"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.846!2d-70.133!3d-15.495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDI5JzQyLjAiUyA3MMKwMDcnNTguOCJX!5e0!3m2!1ses!2spe!4v1625000000000!5m2!1ses!2spe"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

            </div>

            <div class="mt-16 max-w-6xl mx-auto">
                <div x-data x-init="$el.classList.add('animate-fade-in')" wire:key="catalogos-wrapper">
                    <div class="bg-[#2B6F8F] rounded-3xl p-8 sm:p-10 shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <svg class="w-7 h-7 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <h3 class="text-2xl font-serif font-bold text-white">Cat&aacute;logos en PDF</h3>
                        </div>
                    @if ($catalogos->count())
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach ($catalogos as $cat)
                                <a href="{{ asset('storage/' . $cat->archivo) }}" target="_blank"
                                   class="group block bg-white/10 backdrop-blur-sm rounded-2xl p-5 border border-white/20 hover:bg-white/20 transition-all duration-300">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8.5 7.5c0 .83-.67 1.5-1.5 1.5H9v2H7.5V7H10c.83 0 1.5.67 1.5 1.5v1zm5 2c0 .83-.67 1.5-1.5 1.5h-2.5V7H15c.83 0 1.5.67 1.5 1.5v3zm4-3H19v1h1.5V11H19v2h-1.5V7h3v1.5zM9 9.5h1v-1H9v1zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm10 5.5h1v-3h-1v3z"/>
                                            </svg>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <p class="font-semibold text-white text-sm truncate">{{ $cat->titulo }}</p>
                                            @if ($cat->descripcion)
                                                <p class="text-xs text-white/60 mt-0.5 line-clamp-1">{{ $cat->descripcion }}</p>
                                            @endif
                                        </div>
                                        <svg class="w-4 h-4 text-white/50 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        @if ($catalogos->hasPages())
                            <div class="mt-6 flex items-center justify-center gap-2">
                                <button wire:click="gotoCatalogoPage({{ $catalogos->currentPage() - 1 }})"
                                        @if($catalogos->onFirstPage()) disabled @endif
                                        class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold text-white bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-300 @if($catalogos->onFirstPage()) opacity-30 cursor-not-allowed @endif">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                @for ($p = 1; $p <= $catalogos->lastPage(); $p++)
                                    <button wire:click="gotoCatalogoPage({{ $p }})"
                                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-all duration-300 {{ $p === $catalogos->currentPage() ? 'bg-white text-[#2B6F8F]' : 'text-white bg-white/10 border border-white/20 hover:bg-white/20' }}">
                                        {{ $p }}
                                    </button>
                                @endfor
                                <button wire:click="gotoCatalogoPage({{ $catalogos->currentPage() + 1 }})"
                                        @if($catalogos->onLastPage()) disabled @endif
                                        class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold text-white bg-white/10 border border-white/20 hover:bg-white/20 transition-all duration-300 @if($catalogos->onLastPage()) opacity-30 cursor-not-allowed @endif">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        @endif
                    @else
                        <div class="text-center py-12">
                            <svg class="w-12 h-12 mx-auto text-white/20 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <p class="text-sm text-white/60 font-sans">Pr&oacute;ximamente cat&aacute;logos disponibles.</p>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================ --}}
    {{-- FOOTER: Black #111111 · Premium                                   --}}
    {{-- ================================================================ --}}
    <footer class="relative bg-[#111111] z-10 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-11 h-11 rounded-full bg-premium/10 flex items-center justify-center text-premium font-serif font-bold text-base border border-premium/30">HW</div>
                        <span class="text-xl font-serif font-bold text-white">HATUN <span class="text-premium">WASI</span></span>
                    </div>
                    <p class="text-sm text-white/30 leading-relaxed mb-6 max-w-xs font-sans">Transformamos espacios con acabados premium. Calidad y elegancia para cada ambiente de tu hogar.</p>
                    <div class="flex gap-3">
                        <a href="{{ $facebook_url ?? 'https://facebook.com' }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                           class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-premium hover:border-premium transition-all duration-300 group">
                            <svg class="w-4 h-4 text-white/30 group-hover:text-black transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="{{ $instagram_url ?? 'https://instagram.com' }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                           class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-premium hover:border-premium transition-all duration-300 group">
                            <svg class="w-4 h-4 text-white/30 group-hover:text-black transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 16a4 4 0 110-8 4 4 0 010 8z"/>
                            </svg>
                        </a>
                        <a href="{{ $tiktok_url ?? 'https://tiktok.com' }}" target="_blank" rel="noopener noreferrer" aria-label="TikTok"
                           class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-premium hover:border-premium transition-all duration-300 group">
                            <svg class="w-4 h-4 text-white/30 group-hover:text-black transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <a href="{{ $whatsapp_url ?? 'https://wa.me/51951789456' }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                           class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-premium hover:border-premium transition-all duration-300 group">
                            <svg class="w-4 h-4 text-white/30 group-hover:text-black transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-premium/50 mb-6 font-sans">Categor&iacute;as</h4>
                    <ul class="space-y-3.5">
                        @foreach ($categorias->take(5) as $cat)
                            <li>
                                <button wire:click="$set('filterCategory', '{{ $cat->slug }}')"
                                        class="text-sm text-white/30 hover:text-premium transition-colors duration-300 font-sans">
                                    {{ $cat->slug }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-premium/50 mb-6 font-sans">M&aacute;s Productos</h4>
                    <ul class="space-y-3.5">
                        @foreach ($categorias->skip(5) as $cat)
                            <li>
                                <button wire:click="$set('filterCategory', '{{ $cat->slug }}')"
                                        class="text-sm text-white/30 hover:text-premium transition-colors duration-300 font-sans">
                                    {{ $cat->slug }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-premium/50 mb-6 font-sans">Servicio al Cliente</h4>
                    <ul class="space-y-3.5">
                        <li><a href="#contacto" class="text-sm text-white/30 hover:text-premium transition-colors duration-300 font-sans">Cont&aacute;ctanos</a></li>
                        <li><a href="#nosotros" class="text-sm text-white/30 hover:text-premium transition-colors duration-300 font-sans">Nosotros</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-premium/50 mb-6 font-sans">S&iacute;guenos</h4>
                    <p class="text-sm text-white/30 mb-5 font-sans">Conoce m&aacute;s en nuestras redes.</p>
                    <div class="flex gap-3">
                        <a href="{{ $facebook_url ?? 'https://facebook.com' }}" target="_blank" rel="noopener noreferrer"
                           class="flex-1 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-white/30 text-sm font-semibold hover:bg-premium hover:text-black hover:border-premium transition-all duration-300 text-center font-sans">
                            Facebook
                        </a>
                        <a href="{{ $instagram_url ?? 'https://instagram.com' }}" target="_blank" rel="noopener noreferrer"
                           class="flex-1 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-white/30 text-sm font-semibold hover:bg-premium hover:text-black hover:border-premium transition-all duration-300 text-center font-sans">
                            Instagram
                        </a>
                        <a href="{{ $tiktok_url ?? 'https://tiktok.com' }}" target="_blank" rel="noopener noreferrer"
                           class="flex-1 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-white/30 text-sm font-semibold hover:bg-premium hover:text-black hover:border-premium transition-all duration-300 text-center font-sans">
                            TikTok
                        </a>
                        <a href="{{ $whatsapp_url ?? 'https://wa.me/51951789456' }}" target="_blank" rel="noopener noreferrer"
                           class="flex-1 px-5 py-3 rounded-xl bg-white/5 border border-white/10 text-white/30 text-sm font-semibold hover:bg-premium hover:text-black hover:border-premium transition-all duration-300 text-center font-sans">
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-sm text-white/15 font-sans">&copy; {{ date('Y') }} Hatun Wasi SRL. Todos los derechos reservados.</p>
                <p class="text-xs text-white/10 font-sans">Dise&ntilde;ado con pasi&oacute;n por el equipo Hatun Wasi</p>
            </div>
        </div>
    </footer>

    {{-- ================================================================ --}}
    {{-- BACK TO TOP: Gold accent                                           --}}
    {{-- ================================================================ --}}
    <button x-data="{ visible: false }"
            x-init="window.addEventListener('scroll', () => visible = window.scrollY > 500)"
            x-show="visible"
            x-cloak
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-premium text-black shadow-lg shadow-premium/20 hover:bg-premium-light hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>
</div>
