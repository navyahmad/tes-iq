import { Link } from '@inertiajs/react';
import { Shield, Sparkles } from 'lucide-react';

export default function PublicLayout({ children }) {
    return (
        <div className="min-h-screen bg-zinc-950 text-zinc-100 font-sans selection:bg-blue-500 selection:text-white relative overflow-hidden flex flex-col justify-between">
            {/* Background Grid Pattern & Ambient Glow */}
            <div className="absolute inset-0 bg-[linear-gradient(to_right,#18181b_1px,transparent_1px),linear-gradient(to_bottom,#18181b_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-40 pointer-events-none" />
            <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[350px] bg-blue-600/10 blur-[120px] rounded-full pointer-events-none" />

            {/* Top Navigation */}
            <header className="relative z-10 border-b border-zinc-800/60 bg-zinc-950/60 backdrop-blur-xl">
                <div className="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                    <Link href="/" className="flex items-center gap-3 group">
                        <div className="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/20 group-hover:scale-105 transition-transform duration-300">
                            <Shield className="w-5 h-5 text-white" />
                        </div>
                        <div>
                            <span className="text-lg font-bold tracking-tight bg-gradient-to-r from-white via-zinc-200 to-zinc-400 bg-clip-text text-transparent">
                                PSYCHOMETRIC
                            </span>
                            <span className="text-xs block font-mono text-zinc-500 uppercase tracking-widest -mt-1">
                                Enterprise Assessment
                            </span>
                        </div>
                    </Link>

                    <div className="flex items-center gap-4">
                        <div className="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">
                            <Sparkles className="w-3.5 h-3.5 text-blue-400 animate-pulse" />
                            <span>Internal System v1.0</span>
                        </div>
                    </div>
                </div>
            </header>

            {/* Main Content Area */}
            <main className="relative z-10 flex-1 flex flex-col">
                {children}
            </main>

            {/* Footer */}
            <footer className="relative z-10 border-t border-zinc-900 bg-zinc-950/80 py-8">
                <div className="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-zinc-500 font-mono">
                    <p>© {new Date().getFullYear()} Enterprise Psychometric Platform. Internal Use Only.</p>
                    <div className="flex items-center gap-6">
                        <span>DISC Assessment</span>
                        <span className="text-zinc-700">•</span>
                        <span>IST Assessment</span>
                    </div>
                </div>
            </footer>
        </div>
    );
}
