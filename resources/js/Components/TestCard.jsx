import { Link } from '@inertiajs/react';
import { motion } from 'motion/react';
import { ArrowRight, Lock, CheckCircle2 } from 'lucide-react';

export default function TestCard({
    title,
    subtitle,
    description,
    icon: Icon,
    badge,
    isActive = false,
    href = '#',
    features = [],
    index = 0,
}) {
    const cardVariants = {
        hidden: { opacity: 0, y: 20 },
        visible: {
            opacity: 1,
            y: 0,
            transition: { duration: 0.5, delay: 0.2 + index * 0.15 },
        },
    };

    return (
        <motion.div
            variants={cardVariants}
            initial="hidden"
            animate="visible"
            className="h-full"
        >
            <div
                className={`relative h-full flex flex-col justify-between p-8 rounded-2xl border transition-all duration-300 ${
                    isActive
                        ? 'bg-gradient-to-b from-zinc-900/90 to-zinc-900/40 border-zinc-700/60 hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/10'
                        : 'bg-zinc-900/20 border-zinc-800/40 opacity-70 cursor-not-allowed'
                }`}
            >
                {/* Active Indicator & Glow Effect */}
                {isActive && (
                    <div className="absolute top-0 right-10 w-32 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-b-full shadow-[0_0_12px_rgba(59,130,246,0.8)]" />
                )}

                <div>
                    {/* Header Card: Icon & Badge */}
                    <div className="flex items-center justify-between mb-6">
                        <div
                            className={`w-14 h-14 rounded-xl flex items-center justify-center ${
                                isActive
                                    ? 'bg-blue-500/10 border border-blue-500/30 text-blue-400'
                                    : 'bg-zinc-800/40 border border-zinc-700/30 text-zinc-500'
                            }`}
                        >
                            <Icon className="w-7 h-7" />
                        </div>
                        <span
                            className={`px-3 py-1 rounded-full text-xs font-medium font-mono border ${
                                isActive
                                    ? 'bg-blue-500/10 border-blue-500/30 text-blue-400'
                                    : 'bg-zinc-800/50 border-zinc-700/40 text-zinc-500'
                            }`}
                        >
                            {badge}
                        </span>
                    </div>

                    {/* Title & Subtitle */}
                    <h3 className="text-2xl font-bold text-white tracking-tight mb-1">
                        {title}
                    </h3>
                    <p className="text-xs font-mono text-blue-400/80 mb-4 tracking-wide uppercase">
                        {subtitle}
                    </p>
                    <p className="text-sm text-zinc-400 leading-relaxed mb-6">
                        {description}
                    </p>

                    {/* Features List */}
                    <div className="space-y-2.5 pt-4 border-t border-zinc-800/60 mb-8">
                        {features.map((feature, idx) => (
                            <div key={idx} className="flex items-center gap-2.5 text-xs text-zinc-300">
                                <CheckCircle2 className={`w-4 h-4 ${isActive ? 'text-blue-400' : 'text-zinc-600'}`} />
                                <span>{feature}</span>
                            </div>
                        ))}
                    </div>
                </div>

                {/* CTA Button / Action */}
                <div>
                    {isActive ? (
                        <Link
                            href={href}
                            className="w-full inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold text-sm shadow-lg shadow-blue-600/25 hover:shadow-blue-500/40 transition-all duration-300 group"
                        >
                            <span>Pilih & Mulai Tes</span>
                            <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                        </Link>
                    ) : (
                        <button
                            disabled
                            className="w-full inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-zinc-800/40 border border-zinc-800 text-zinc-500 font-semibold text-sm cursor-not-allowed"
                        >
                            <Lock className="w-4 h-4" />
                            <span>Modul Belum Tersedia</span>
                        </button>
                    )}
                </div>
            </div>
        </motion.div>
    );
}
