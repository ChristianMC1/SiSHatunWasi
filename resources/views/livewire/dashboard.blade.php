<div class="flex flex-col gap-6 p-4 sm:p-6 lg:p-8">
    {{-- ================================================================ --}}
    {{-- HEADER: Saludo + fecha/hora                                     --}}
    {{-- ================================================================ --}}
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-2">
        <div>
            <h1 class="text-2xl sm:text-3xl font-serif font-bold text-white">
                Buenos días, <span class="text-premium">{{ auth()->user()->name }}</span>
                <span class="inline-block ml-1">👋</span>
            </h1>
            <p class="text-sm text-zinc-400 mt-1 font-sans">Bienvenido al panel administrativo de Hatun Wasi.</p>
        </div>
        <div class="text-right">
            <p class="text-sm font-semibold text-white font-sans" x-data x-init="
                function updateClock() {
                    const now = new Date();
                    const days = ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];
                    const months = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
                    const dayName = days[now.getDay()];
                    const day = now.getDate();
                    const month = months[now.getMonth()];
                    const year = now.getFullYear();
                    const hours = now.getHours().toString().padStart(2, '0');
                    const minutes = now.getMinutes().toString().padStart(2, '0');
                    document.getElementById('dashboard-clock').innerHTML = `${dayName}, ${day} de ${month} de ${year}<br><span class='text-premium'>${hours}:${minutes}</span>`;
                }
                updateClock();
                setInterval(updateClock, 1000);
            ">
                <span id="dashboard-clock" class="text-zinc-400"></span>
            </p>
        </div>
    </div>

    {{-- ================================================================ --}}
    {{-- KPI CARDS: 4 indicadores                                         --}}
    {{-- ================================================================ --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        {{-- Productos --}}
        <div class="relative overflow-hidden rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5 group hover:border-premium/30 transition-all duration-300">
            <div class="absolute top-0 right-0 w-24 h-24 bg-premium/5 rounded-full -translate-y-8 translate-x-8"></div>
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-xl bg-premium/15 flex items-center justify-center text-premium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 font-sans">Productos</span>
            </div>
            <p class="text-3xl font-bold text-white font-sans">{{ $totalProductos }}</p>
            <p class="text-xs text-zinc-500 mt-0.5 font-sans">Registrados</p>
        </div>

        {{-- Clientes --}}
        <div class="relative overflow-hidden rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5 group hover:border-blue-400/30 transition-all duration-300">
            <div class="absolute top-0 right-0 w-24 h-24 bg-blue-500/5 rounded-full -translate-y-8 translate-x-8"></div>
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-xl bg-blue-500/15 flex items-center justify-center text-blue-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>
                </div>
                <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 font-sans">Clientes</span>
            </div>
            <p class="text-3xl font-bold text-white font-sans">{{ $totalClientes }}</p>
            <p class="text-xs text-zinc-500 mt-0.5 font-sans">Registrados</p>
        </div>

        {{-- Categorías --}}
        <div class="relative overflow-hidden rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5 group hover:border-emerald-400/30 transition-all duration-300">
            <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/5 rounded-full -translate-y-8 translate-x-8"></div>
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/15 flex items-center justify-center text-emerald-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                </div>
                <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 font-sans">Categorías</span>
            </div>
            <p class="text-3xl font-bold text-white font-sans">{{ $totalCategorias }}</p>
            <p class="text-xs text-zinc-500 mt-0.5 font-sans">Disponibles</p>
        </div>

        {{-- Tutoriales --}}
        <div class="relative overflow-hidden rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5 group hover:border-purple-400/30 transition-all duration-300">
            <div class="absolute top-0 right-0 w-24 h-24 bg-purple-500/5 rounded-full -translate-y-8 translate-x-8"></div>
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-xl bg-purple-500/15 flex items-center justify-center text-purple-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400 font-sans">Tutoriales</span>
            </div>
            <p class="text-3xl font-bold text-white font-sans">{{ $totalTutoriales }}</p>
            <p class="text-xs text-zinc-500 mt-0.5 font-sans">Publicados</p>
        </div>
    </div>

    {{-- ================================================================ --}}
    {{-- FILA 3: Gráfico categorías (izq) + Últimos productos (der)       --}}
    {{-- ================================================================ --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        {{-- Gráfico de productos por categoría --}}
        <div class="rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5">
            <h3 class="text-sm font-semibold text-white font-sans mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                Productos por categoría
            </h3>
            <div class="space-y-3">
                @forelse($productosPorCategoria as $cat)
                    <div>
                        <div class="flex items-center justify-between text-xs mb-1">
                            <span class="text-zinc-300 font-medium font-sans">{{ $cat->slug }}</span>
                            <span class="text-zinc-500 font-sans">{{ $cat->products_count }}</span>
                        </div>
                        <div class="w-full h-2 bg-zinc-700/50 rounded-full overflow-hidden">
                            <div class="h-full rounded-full bg-gradient-to-r from-premium/80 to-premium transition-all duration-700"
                                 style="width: {{ $maxCount > 0 ? ($cat->products_count / $maxCount) * 100 : 0 }}%">
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-zinc-500 font-sans">No hay categorías registradas.</p>
                @endforelse
            </div>
        </div>

        {{-- Últimos productos agregados --}}
        <div class="rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5">
            <h3 class="text-sm font-semibold text-white font-sans mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                Últimos productos
            </h3>
            <div class="space-y-2">
                @forelse($ultimosProductos as $p)
                    <div class="flex items-center gap-3 p-2.5 rounded-xl bg-zinc-700/30 hover:bg-zinc-700/50 transition-colors">
                        <div class="w-10 h-10 rounded-lg bg-zinc-700 flex-shrink-0 overflow-hidden">
                            @if($p->images->first())
                                <img src="{{ Storage::url($p->images->first()->url) }}" alt="{{ $p->nombre }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-zinc-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-white truncate font-sans">{{ $p->nombre }}</p>
                            <p class="text-xs text-zinc-500 font-sans">{{ $p->category?->slug ?? 'Sin categoría' }}</p>
                        </div>
                        <span class="text-sm font-semibold text-premium font-sans">S/ {{ number_format($p->precio, 2) }}</span>
                    </div>
                @empty
                    <p class="text-sm text-zinc-500 font-sans">No hay productos registrados.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- ================================================================ --}}
    {{-- FILA 4: Stock bajo (izq) + Actividad reciente (der)               --}}
    {{-- ================================================================ --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        {{-- Productos con stock bajo --}}
        <div class="rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5">
            <h3 class="text-sm font-semibold text-white font-sans mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                Stock bajo
            </h3>
            <div class="space-y-2">
                @forelse($stockBajo as $p)
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-zinc-700/30 hover:bg-zinc-700/50 transition-colors">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-8 h-8 rounded-lg bg-red-500/10 flex items-center justify-center text-red-400 flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </div>
                            <span class="text-sm text-zinc-200 truncate font-sans">{{ $p->nombre }}</span>
                        </div>
                        <span class="text-sm font-bold px-2.5 py-1 rounded-lg font-sans {{ $p->cantidad <= 1 ? 'bg-red-500/20 text-red-400' : ($p->cantidad <= 3 ? 'bg-amber-500/20 text-amber-400' : 'bg-yellow-500/20 text-yellow-400') }}">
                            {{ $p->cantidad }}
                        </span>
                    </div>
                @empty
                    <p class="text-sm text-zinc-500 font-sans">No hay productos con stock bajo.</p>
                @endforelse
            </div>
        </div>

        {{-- Actividad reciente --}}
        <div class="rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5">
            <h3 class="text-sm font-semibold text-white font-sans mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Actividad reciente
            </h3>
            <div class="space-y-1">
                @forelse($actividad as $item)
                    <div class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-zinc-700/30 transition-colors">
                        <div class="w-8 h-8 rounded-lg bg-zinc-700/50 flex items-center justify-center text-zinc-400 flex-shrink-0 mt-0.5">
                            @if($item['icon'] === 'cube')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            @elseif($item['icon'] === 'users')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>
                            @elseif($item['icon'] === 'tag')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                            @else
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-zinc-300 font-sans">
                                <span class="text-premium font-medium">{{ $item['subject'] }}</span>
                                <span class="text-zinc-500"> — {{ $item['action'] }}</span>
                            </p>
                            <p class="text-xs text-zinc-600 mt-0.5 font-sans">{{ $item['time']->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-zinc-500 font-sans">Sin actividad reciente.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- ================================================================ --}}
    {{-- FILA 5: Acciones rápidas                                         --}}
    {{-- ================================================================ --}}
    <div class="rounded-2xl border border-zinc-700/50 bg-zinc-800/60 p-5">
        <h3 class="text-sm font-semibold text-white font-sans mb-4 flex items-center gap-2">
            <svg class="w-4 h-4 text-premium" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            Acciones rápidas
        </h3>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            <a href="{{ route('productos') }}" wire:navigate
               class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-br from-premium/10 to-premium/5 border border-premium/20 hover:border-premium/50 hover:from-premium/20 hover:to-premium/10 transition-all duration-300 group">
                <div class="w-10 h-10 rounded-lg bg-premium/20 flex items-center justify-center text-premium group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-white font-sans">Nuevo Producto</p>
                    <p class="text-[10px] text-zinc-500 font-sans">Agregar al inventario</p>
                </div>
            </a>

            <a href="{{ route('clients') }}" wire:navigate
               class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-br from-blue-500/10 to-blue-500/5 border border-blue-500/20 hover:border-blue-400/50 hover:from-blue-500/20 hover:to-blue-500/10 transition-all duration-300 group">
                <div class="w-10 h-10 rounded-lg bg-blue-500/20 flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-white font-sans">Nuevo Cliente</p>
                    <p class="text-[10px] text-zinc-500 font-sans">Registrar cliente</p>
                </div>
            </a>

            <a href="{{ route('categorias') }}" wire:navigate
               class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-br from-emerald-500/10 to-emerald-500/5 border border-emerald-500/20 hover:border-emerald-400/50 hover:from-emerald-500/20 hover:to-emerald-500/10 transition-all duration-300 group">
                <div class="w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-white font-sans">Nueva Categoría</p>
                    <p class="text-[10px] text-zinc-500 font-sans">Crear categoría</p>
                </div>
            </a>

            <a href="{{ route('tutoriales') }}" wire:navigate
               class="flex items-center gap-3 p-4 rounded-xl bg-gradient-to-br from-purple-500/10 to-purple-500/5 border border-purple-500/20 hover:border-purple-400/50 hover:from-purple-500/20 hover:to-purple-500/10 transition-all duration-300 group">
                <div class="w-10 h-10 rounded-lg bg-purple-500/20 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-white font-sans">Nuevo Tutorial</p>
                    <p class="text-[10px] text-zinc-500 font-sans">Publicar tutorial</p>
                </div>
            </a>
        </div>
    </div>
</div>
