import { Head, Link } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';
import { motion } from 'motion/react';
import {
    ResponsiveContainer,
    LineChart,
    Line,
    XAxis,
    YAxis,
    CartesianGrid,
    Tooltip,
} from 'recharts';
import {
    User,
    Award,
    BarChart3,
    Zap,
    AlertTriangle,
    MessageSquare,
    Crown,
    Flame,
    ShieldAlert,
    Sprout,
    Briefcase,
    ArrowLeft,
    Sparkles,
    CheckCircle2,
} from 'lucide-react';

// Custom Tooltip Recharts dengan tema Dark Mode & Glassmorphism
const CustomTooltip = ({ active, payload, label }) => {
    if (active && payload && payload.length) {
        return (
            <div className="bg-zinc-900/95 border border-zinc-800 p-3 rounded-xl shadow-xl font-mono text-xs backdrop-blur-md">
                <p className="text-zinc-400 font-semibold mb-1">Tipe: {label}</p>
                <p className="text-blue-400 font-bold">Skor: {payload[0].value}</p>
            </div>
        );
    }
    return null;
};

export default function Result({ discTest, profile }) {
    const chartData = [
        {
            subject: "D",
            score: discTest.graph_d,
        },
        {
            subject: "I",
            score: discTest.graph_i,
        },
        {
            subject: "S",
            score: discTest.graph_s,
        },
        {
            subject: "C",
            score: discTest.graph_c,
        },
    ];

    // Konfigurasi seksi profil untuk grid 2 kolom (Job Match dipisah ke Card Landscape)
    const profileSections = [
        {
            title: "Strength (Kekuatan Utama)",
            items: profile?.strength || [],
            icon: Zap,
            color: "text-amber-400",
            bgColor: "bg-amber-500/10",
            borderColor: "border-amber-500/30",
        },
        {
            title: "Weakness (Area Kelemahan)",
            items: profile?.weakness || [],
            icon: AlertTriangle,
            color: "text-rose-400",
            bgColor: "bg-rose-500/10",
            borderColor: "border-rose-500/30",
        },
        {
            title: "Gaya Komunikasi",
            items: profile?.communication || [],
            icon: MessageSquare,
            color: "text-blue-400",
            bgColor: "bg-blue-500/10",
            borderColor: "border-blue-500/30",
        },
        {
            title: "Gaya Kepemimpinan",
            items: profile?.leadership || [],
            icon: Crown,
            color: "text-purple-400",
            bgColor: "bg-purple-500/10",
            borderColor: "border-purple-500/30",
        },
        {
            title: "Faktor Motivasi",
            items: profile?.motivation || [],
            icon: Flame,
            color: "text-orange-400",
            bgColor: "bg-orange-500/10",
            borderColor: "border-orange-500/30",
        },
        {
            title: "Pemicu Stres",
            items: profile?.stress || [],
            icon: ShieldAlert,
            color: "text-red-400",
            bgColor: "bg-red-500/10",
            borderColor: "border-red-500/30",
        },
        // {
        //     title: "Area Pengembangan",
        //     items: profile?.development || [],
        //     icon: Sprout,
        //     color: "text-emerald-400",
        //     bgColor: "bg-emerald-500/10",
        //     borderColor: "border-emerald-500/30",
        // },
    ];

    return (
        <PublicLayout>
            <Head title="Hasil Tes DISC" />

            <div className="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12 flex-1 flex flex-col justify-center items-center">
                <div className="w-full max-w-4xl space-y-6">
                    {/* Top Navigation & Status Badge */}
                    <div className="flex items-center justify-between">
                        <Link
                            href={route('landing')}
                            className="inline-flex items-center gap-2 text-xs font-mono text-zinc-400 hover:text-white transition-colors group"
                        >
                            <ArrowLeft className="w-4 h-4 group-hover:-translate-x-1 transition-transform" />
                            <span>Selesai & Kembali ke Beranda</span>
                        </Link>

                        <span className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-mono">
                            <CheckCircle2 className="w-3.5 h-3.5" />
                            Evaluasi Selesai
                        </span>
                    </div>

                    {/* Main Container Card */}
                    <motion.div
                        initial={{ opacity: 0, y: 15 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.4 }}
                        className="bg-zinc-900/90 border border-zinc-800 rounded-2xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl relative overflow-hidden space-y-8"
                    >
                        <div className="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 blur-3xl rounded-full pointer-events-none" />

                        {/* Page Header */}
                        <div className="pb-6 border-b border-zinc-800">
                            <span className="text-xs font-mono text-blue-400 uppercase tracking-widest block mb-1">
                                Langkah 3 dari 3 - Hasil Evaluasi
                            </span>
                            <h2 className="text-2xl sm:text-3xl font-bold text-white tracking-tight flex items-center gap-3">
                                <span>Laporan Profil Kepribadian DISC</span>
                            </h2>
                            <p className="text-xs sm:text-sm text-zinc-400 mt-1 leading-relaxed">
                                Berikut adalah rangkuman analisis potensi, kecenderungan perilaku, dan gambaran kepribadian kerja Anda.
                            </p>
                        </div>

                        {/* Participant Biodata & Result Summary Cards */}
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            {/* Participant Bio Card */}
                            <div className="p-5 rounded-xl bg-zinc-950/60 border border-zinc-800/80 space-y-3">
                                <div className="flex items-center gap-2 text-xs font-mono text-blue-400 uppercase tracking-wider mb-2">
                                    <User className="w-4 h-4" />
                                    <span>Biodata Peserta</span>
                                </div>

                                <div className="space-y-2.5 text-sm">
                                    <div className="flex justify-between items-center py-1 border-b border-zinc-800/50">
                                        <span className="text-zinc-500 text-xs">Nama Lengkap</span>
                                        <span className="font-semibold text-white">{discTest?.participant_name}</span>
                                    </div>
                                    <div className="flex justify-between items-center py-1 border-b border-zinc-800/50">
                                        <span className="text-zinc-500 text-xs">Usia</span>
                                        <span className="font-semibold text-white">{discTest?.age} Tahun</span>
                                    </div>
                                    <div className="flex justify-between items-center py-1">
                                        <span className="text-zinc-500 text-xs">Jenis Kelamin</span>
                                        <span className="font-semibold text-white">
                                            {discTest?.gender === 'L' ? 'Laki-laki' : discTest?.gender === 'P' ? 'Perempuan' : discTest?.gender}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {/* DISC Profile Result Card */}
                            <div className="p-5 rounded-xl bg-zinc-950/60 border border-zinc-800/80 space-y-3">
                                <div className="flex items-center gap-2 text-xs font-mono text-indigo-400 uppercase tracking-wider mb-2">
                                    <Award className="w-4 h-4" />
                                    <span>Hasil Profil DISC</span>
                                </div>

                                <div className="space-y-2.5 text-sm">
                                    <div className="flex justify-between items-center py-1 border-b border-zinc-800/50">
                                        <span className="text-zinc-500 text-xs">Tipe DISC Utama</span>
                                        <span className="font-mono font-bold text-base text-blue-400 px-3 py-0.5 rounded-md bg-blue-500/10 border border-blue-500/30">
                                            {discTest?.disc_type}
                                        </span>
                                    </div>
                                    <div className="flex justify-between items-center py-1 border-b border-zinc-800/50">
                                        <span className="text-zinc-500 text-xs">Primary</span>
                                        <span className="font-semibold text-zinc-200">{discTest?.primary_type}</span>
                                    </div>
                                    <div className="flex justify-between items-center py-1">
                                        <span className="text-zinc-500 text-xs">Secondary</span>
                                        <span className="font-semibold text-zinc-200">{discTest?.secondary_type}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Chart Section */}
                        <div className="p-5 sm:p-6 rounded-xl bg-zinc-950/60 border border-zinc-800/80 space-y-4">
                            <div className="flex items-center gap-2">
                                <div className="p-2 rounded-lg bg-blue-500/10 text-blue-400 border border-blue-500/30">
                                    <BarChart3 className="w-5 h-5" />
                                </div>
                                <div>
                                    <h3 className="text-base font-bold text-white">Visualisasi Grafik DISC</h3>
                                    <p className="text-xs text-zinc-400">Plot sebaran kecenderungan nilai D, I, S, dan C</p>
                                </div>
                            </div>

                            <div className="w-full h-[350px] pt-4">
                                <ResponsiveContainer width="100%" height="100%">
                                    <LineChart
                                        data={chartData}
                                        margin={{ top: 20, right: 30, left: -10, bottom: 10 }}
                                    >
                                        <CartesianGrid strokeDasharray="3 3" stroke="#27272a" />
                                        <XAxis
                                            dataKey="subject"
                                            stroke="#a1a1aa"
                                            tick={{ fill: '#a1a1aa', fontSize: 12, fontWeight: 'bold' }}
                                        />
                                        <YAxis
                                            domain={[0, 100]}
                                            stroke="#a1a1aa"
                                            tick={{ fill: '#a1a1aa', fontSize: 12 }}
                                        />
                                        <Tooltip content={<CustomTooltip />} />
                                        <Line
                                            type="monotone"
                                            dataKey="score"
                                            stroke="#3b82f6"
                                            strokeWidth={3}
                                            dot={{ r: 6, fill: '#3b82f6', stroke: '#60a5fa', strokeWidth: 2 }}
                                            activeDot={{ r: 8, fill: '#60a5fa', stroke: '#ffffff', strokeWidth: 2 }}
                                        />
                                    </LineChart>
                                </ResponsiveContainer>
                            </div>
                        </div>

                        {/* Summary Profile Block (Profil Umum) */}
                        {profile && (
                            <div className="p-5 sm:p-6 rounded-xl bg-gradient-to-r from-blue-950/40 via-indigo-950/30 to-zinc-950/60 border border-blue-500/30 space-y-3 relative overflow-hidden">
                                <div className="flex items-center gap-2 text-xs font-mono text-blue-400 uppercase tracking-wider">
                                    <Sparkles className="w-4 h-4" />
                                    <span>Ringkasan Profil Tipe {discTest?.disc_type}</span>
                                </div>
                                <h3 className="text-xl sm:text-2xl font-bold text-white">
                                    {profile.title}
                                </h3>
                                <p className="text-xs sm:text-sm text-zinc-300 leading-relaxed">
                                    {profile.summary}
                                </p>
                            </div>
                        )}

                        {/* ========================================================================= */}
                        {/* BAGIAN 3: INSIGHT PERSONAL (Berdasarkan 24 Pernyataan MOST Pilihan Peserta) */}
                        {/* ========================================================================= */}
                        <div className="p-5 sm:p-6 rounded-xl bg-zinc-950/60 border border-zinc-800/80 space-y-4">
                            <div className="border-b border-zinc-800/80 pb-3 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                <div>
                                    <span className="text-[10px] font-mono text-blue-400 uppercase tracking-widest block mb-0.5">
                                        Interpretasi Spesifik Jawaban
                                    </span>
                                    <h3 className="text-base sm:text-lg font-bold text-white flex items-center gap-2">
                                        <Sparkles className="w-5 h-5 text-amber-400" />
                                        <span>Karakteristik Yang Paling Menggambarkan Anda</span>
                                    </h3>
                                </div>
                                <span className="self-start sm:self-auto px-2.5 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-mono">
                                    {discTest?.answers?.length || 0} Poin Insight Personal
                                </span>
                            </div>

                            <p className="text-xs text-zinc-400 leading-relaxed">
                                Berikut adalah gambaran kecenderungan perilaku spesifik yang diambil secara langsung berdasarkan pernyataan pilihan utama (MOST) Anda selama tes:
                            </p>

                            <div className="grid grid-cols-1 gap-3 pt-1">
                                {discTest?.answers?.map((ans, idx) => {
                                    const most = ans.most_interpretation;
                                    if (!most) return null;

                                    return (
                                        <div
                                            key={idx}
                                            className="p-4 rounded-xl bg-zinc-900/80 border border-zinc-800/80 space-y-1.5 hover:border-zinc-700/80 transition-all"
                                        >
                                            <div className="flex items-start gap-3">
                                                <span className="shrink-0 px-2 py-0.5 rounded text-[10px] font-mono bg-blue-500/10 border border-blue-500/30 text-blue-400 font-bold mt-0.5">
                                                    #{idx + 1}
                                                </span>
                                                <div className="space-y-1 flex-1">
                                                    <h4 className="text-xs sm:text-sm font-bold text-white tracking-wide">
                                                        "{most.statement}"
                                                    </h4>
                                                    <p className="text-xs sm:text-sm text-zinc-300 leading-relaxed">
                                                        {most.most_description}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    );
                                })}
                            </div>
                        </div>

                        {/* Detailed Metrics Grid (Strength, Weakness, Communication, Leadership, dll) */}
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-5">
                            {profileSections.map((section, idx) => {
                                const IconComponent = section.icon;
                                const items = section.items || [];

                                if (items.length === 0) return null;

                                return (
                                    <div
                                        key={idx}
                                        className="p-5 rounded-xl bg-zinc-950/60 border border-zinc-800/80 space-y-3 hover:border-zinc-700/80 transition-all"
                                    >
                                        <div className="flex items-center gap-3 pb-3 border-b border-zinc-800/80">
                                            <div className={`p-2 rounded-lg ${section.bgColor} ${section.borderColor} border ${section.color}`}>
                                                <IconComponent className="w-4 h-4" />
                                            </div>
                                            <h4 className="text-sm font-semibold text-white">
                                                {section.title}
                                            </h4>
                                        </div>

                                        <ul className="space-y-2">
                                            {items.map((item, itemIdx) => (
                                                <li
                                                    key={itemIdx}
                                                    className="text-xs sm:text-sm text-zinc-300 leading-relaxed flex items-start gap-2.5"
                                                >
                                                    <span className="w-1.5 h-1.5 rounded-full bg-blue-400/80 mt-2 shrink-0" />
                                                    <span>{item}</span>
                                                </li>
                                            ))}
                                        </ul>
                                    </div>
                                );
                            })}
                        </div>

                        {/* ========================================================================= */}
                        {/* LANDSCAPE CARD KHUSUS: REKOMENDASI PEKERJAAN (JOB MATCH)                  */}
                        {/* ========================================================================= */}
                        {profile?.job_match && profile.job_match.length > 0 && (
                            <div className="p-6 rounded-xl bg-gradient-to-r from-cyan-950/40 via-blue-950/30 to-zinc-950/80 border border-cyan-500/30 space-y-4 shadow-lg backdrop-blur-sm relative overflow-hidden">
                                <div className="flex items-center gap-3 pb-3 border-b border-cyan-500/20">
                                    <div className="p-2.5 rounded-lg bg-cyan-500/10 text-cyan-400 border border-cyan-500/30">
                                        <Briefcase className="w-5 h-5" />
                                    </div>
                                    <div>
                                        <h3 className="text-base sm:text-lg font-bold text-white tracking-wide">
                                            Rekomendasi Pekerjaan (Job Match)
                                        </h3>
                                        <p className="text-xs text-zinc-400">
                                            Peran dan bidang karir yang paling selaras dengan profil kecenderungan kerja Anda
                                        </p>
                                    </div>
                                </div>

                                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 pt-1">
                                    {profile.job_match.map((job, jobIdx) => (
                                        <div
                                            key={jobIdx}
                                            className="p-3.5 rounded-lg bg-zinc-900/80 border border-cyan-500/20 flex items-center gap-3 hover:border-cyan-400/50 hover:bg-cyan-950/20 transition-all group"
                                        >
                                            <span className="w-2 h-2 rounded-full bg-cyan-400 group-hover:scale-125 transition-transform shrink-0" />
                                            <span className="text-xs sm:text-sm font-medium text-zinc-200 group-hover:text-cyan-300 transition-colors">
                                                {job}
                                            </span>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        )}
                    </motion.div>
                </div>
            </div>
        </PublicLayout>
    );
}