<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white tracking-tight flex items-center gap-3">
            <i class="fa-solid fa-shapes text-brand-500"></i>
            {{ __('Brief Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            @if(session('success'))
                <div class="bg-brand-500/10 border border-brand-500/30 text-brand-400 px-5 py-4 rounded-xl relative shadow-[0_0_15px_rgba(20,184,166,0.1)] backdrop-blur-sm" role="alert">
                    <span class="block sm:inline font-medium"><i class="fa-solid fa-circle-check mr-2"></i> {{ session('success') }}</span>
                </div>
            @endif

            <!-- 3D Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total -->
                <div class="tilt-card group relative bg-slate-900/80 backdrop-blur-xl rounded-[24px] shadow-lg border border-slate-800 p-6 flex flex-col cursor-pointer overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="preserve-3d w-full h-full flex flex-col justify-between z-10" style="transform: translateZ(30px);">
                        <div class="flex justify-between items-start mb-6">
                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Total Briefs</h3>
                            <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 group-hover:bg-indigo-500 group-hover:text-white transition-colors duration-300 shadow-[0_0_15px_rgba(99,102,241,0.2)]">
                                <i class="fa-solid fa-layer-group text-lg"></i>
                            </div>
                        </div>
                        <span class="text-4xl font-black text-white" style="transform: translateZ(50px);">{{ $stats['total'] ?? 0 }}</span>
                    </div>
                </div>
                
                <!-- Pending -->
                <div class="tilt-card group relative bg-slate-900/80 backdrop-blur-xl rounded-[24px] shadow-lg border border-slate-800 p-6 flex flex-col cursor-pointer overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-amber-500 to-orange-500 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    <div class="preserve-3d w-full h-full flex flex-col justify-between z-10" style="transform: translateZ(30px);">
                        <div class="flex justify-between items-start mb-6">
                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pending</h3>
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300 shadow-[0_0_15px_rgba(245,158,11,0.2)]">
                                <i class="fa-solid fa-clock text-lg"></i>
                            </div>
                        </div>
                        <span class="text-4xl font-black text-white" style="transform: translateZ(50px);">{{ $stats['pending'] ?? 0 }}</span>
                    </div>
                </div>

                <!-- Contacted -->
                <div class="tilt-card group relative bg-slate-900/80 backdrop-blur-xl rounded-[24px] shadow-lg border border-slate-800 p-6 flex flex-col cursor-pointer overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-cyan-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    <div class="preserve-3d w-full h-full flex flex-col justify-between z-10" style="transform: translateZ(30px);">
                        <div class="flex justify-between items-start mb-6">
                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Contacted</h3>
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-colors duration-300 shadow-[0_0_15px_rgba(59,130,246,0.2)]">
                                <i class="fa-solid fa-phone text-lg"></i>
                            </div>
                        </div>
                        <span class="text-4xl font-black text-white" style="transform: translateZ(50px);">{{ $stats['contacted'] ?? 0 }}</span>
                    </div>
                </div>

                <!-- Completed -->
                <div class="tilt-card group relative bg-slate-900/80 backdrop-blur-xl rounded-[24px] shadow-lg border border-slate-800 p-6 flex flex-col cursor-pointer overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-brand-500 to-emerald-500 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    <div class="preserve-3d w-full h-full flex flex-col justify-between z-10" style="transform: translateZ(30px);">
                        <div class="flex justify-between items-start mb-6">
                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Completed</h3>
                            <div class="w-12 h-12 rounded-2xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center text-brand-400 group-hover:bg-brand-500 group-hover:text-white transition-colors duration-300 shadow-[0_0_15px_rgba(20,184,166,0.2)]">
                                <i class="fa-solid fa-check-double text-lg"></i>
                            </div>
                        </div>
                        <span class="text-4xl font-black text-white" style="transform: translateZ(50px);">{{ $stats['completed'] ?? 0 }}</span>
                    </div>
                </div>
            </div>

            <!-- Briefs Table -->
            <div class="bg-slate-900/50 backdrop-blur-xl shadow-xl rounded-[24px] border border-slate-800 overflow-hidden">
                <div class="px-6 py-5 border-b border-slate-800 flex justify-between items-center bg-slate-900/80">
                    <h3 class="text-lg font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-list-check text-brand-500 text-sm"></i>
                        Recent Submissions
                    </h3>
                </div>
                
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full divide-y divide-slate-800">
                        <thead class="bg-slate-900/90">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-[11px] font-bold text-slate-400 uppercase tracking-widest">Name / Client</th>
                                <th scope="col" class="px-6 py-4 text-left text-[11px] font-bold text-slate-400 uppercase tracking-widest hidden sm:table-cell">Contact Info</th>
                                <th scope="col" class="px-6 py-4 text-left text-[11px] font-bold text-slate-400 uppercase tracking-widest hidden lg:table-cell">Description</th>
                                <th scope="col" class="px-6 py-4 text-left text-[11px] font-bold text-slate-400 uppercase tracking-widest">Status</th>
                                <th scope="col" class="px-6 py-4 text-left text-[11px] font-bold text-slate-400 uppercase tracking-widest hidden md:table-cell">Submitted</th>
                                <th scope="col" class="px-6 py-4 text-right text-[11px] font-bold text-slate-400 uppercase tracking-widest">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/50">
                            @if(isset($briefs))
                                @forelse($briefs as $brief)
                                <tr class="hover:bg-slate-800/50 transition-colors group">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-white">{{ $brief->name }}</div>
                                        <div class="text-xs text-slate-500 sm:hidden mt-1">{{ $brief->contact }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap hidden sm:table-cell">
                                        <div class="text-sm text-slate-300 font-medium">{{ $brief->contact }}</div>
                                    </td>
                                    <td class="px-6 py-4 hidden lg:table-cell">
                                        <div class="text-sm text-slate-400 max-w-xs truncate" title="{{ $brief->description }}">
                                            {{ $brief->description }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($brief->status === 'pending')
                                            <span class="px-3 py-1 inline-flex text-xs font-bold rounded-full bg-amber-500/10 text-amber-400 border border-amber-500/20 shadow-[0_0_10px_rgba(245,158,11,0.1)]">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400 inline-block mr-2 mt-1.5 animate-pulse"></span> Pending
                                            </span>
                                        @elseif($brief->status === 'contacted')
                                            <span class="px-3 py-1 inline-flex text-xs font-bold rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20 shadow-[0_0_10px_rgba(59,130,246,0.1)]">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400 inline-block mr-2 mt-1.5"></span> Contacted
                                            </span>
                                        @elseif($brief->status === 'completed')
                                            <span class="px-3 py-1 inline-flex text-xs font-bold rounded-full bg-brand-500/10 text-brand-400 border border-brand-500/20 shadow-[0_0_10px_rgba(20,184,166,0.1)]">
                                                <span class="w-1.5 h-1.5 rounded-full bg-brand-400 inline-block mr-2 mt-1.5"></span> Completed
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 font-medium hidden md:table-cell">
                                        {{ $brief->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form action="{{ route('briefs.update-status', $brief->id) }}" method="POST" class="inline-flex items-center gap-2">
                                            @csrf
                                            @method('PATCH')
                                            <div class="relative">
                                                <select name="status" class="appearance-none text-xs font-semibold bg-slate-950 border border-slate-700 text-slate-300 rounded-lg focus:border-brand-500 focus:ring-brand-500/50 py-2 pl-3 pr-8 hover:border-slate-600 transition-colors cursor-pointer" onchange="this.form.submit()">
                                                    <option value="pending" {{ $brief->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="contacted" {{ $brief->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                                    <option value="completed" {{ $brief->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                                    <i class="fa-solid fa-chevron-down text-[10px]"></i>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center justify-center text-slate-500">
                                            <div class="w-16 h-16 rounded-2xl bg-slate-800/50 flex items-center justify-center mb-4 border border-slate-700/50 shadow-inner">
                                                <i class="fa-solid fa-inbox text-2xl text-slate-600"></i>
                                            </div>
                                            <p class="text-sm font-medium">Belum ada submission brief yang masuk.</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- 3D Card Hover Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.tilt-card');
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -10;
                    const rotateY = ((x - centerX) / centerX) * 10;
                    
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
                });
            });
        });
    </script>
</x-app-layout>
