import { Head } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';
import TestCard from '@/Components/TestCard';
import { motion } from 'motion/react';
import { UserCheck, BrainCircuit, ShieldCheck, Zap, BarChart3 } from 'lucide-react';

export default function LandingIndex() {
    return (
        <PublicLayout>
            <Head title="Pilih Jenis Psikotes" />

            <div className="max-w-7xl mx-auto px-6 py-12 md:py-20 flex-1 flex flex-col justify-center">
                {/* Hero Section */}
                <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    {/* <motion.div
                        initial={{ opacity: 0, y: -10 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.4 }}
                        className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-xs font-mono text-blue-400"
                    >
                        <Zap className="w-3.5 h-3.5" />
                        <span>Platform Evaluasi Kepribadian & Potensi Kerja</span>
                    </motion.div> */}

                    <motion.h1
                        initial={{ opacity: 0, y: 15 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.5, delay: 0.1 }}
                        className="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-tight"
                    >
                        Selamat Datang di Portal{' '}
                        <span className="bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400 bg-clip-text text-transparent">
                            Psikotes Enterprise
                        </span>
                    </motion.h1>

                    <motion.p
                        initial={{ opacity: 0, y: 15 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.5, delay: 0.2 }}
                        className="text-base md:text-lg text-zinc-400 max-w-2xl mx-auto leading-relaxed"
                    >
                        Pilih modul penilaian di bawah ini untuk memulai evaluasi. Pastikan Anda menyelesaikan tes sesuai petunjuk dalam suasana yang tenang.
                    </motion.p>
                </div>

                {/* Selection Cards Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto w-full mb-16">
                    <TestCard
                        title="DISC Personality Test"
                        subtitle="Perilaku & Gaya Kerja"
                        description="Instrumen penilaian psikologi untuk mengidentifikasi 4 tipe gaya kepribadian utama: Dominance, Influence, Steadiness, dan Conscientiousness."
                        icon={UserCheck}
                        badge="Tersedia / Aktif"
                        isActive={true}
                        href={route('disc.index')}
                        features={[
                            '24 Nomor Soal Pilihan Berganda',
                            'Opsi: Paling & Paling Tidak Sesuai',
                            'Perhitungan Profil Otomatis (Graph 1, 2, 3)',
                            'Estimasi Waktu: 30 Menit',
                        ]}
                        index={0}
                    />

                    <TestCard
                        title="IST (Intelligenz Struktur Test)"
                        subtitle="Struktur Kemampuan Intelektual"
                        description="Tes potensi akademik komprehensif untuk mengukur 9 subtes kecerdasan verbal, numerik, dan spasial secara rinci."
                        icon={BrainCircuit}
                        badge="Tahap Pengembangan"
                        isActive={false}
                        features={[
                            '9 Subtes Intelektual Terpisah',
                            'Skor Kemampuan Komprehensif',
                            'Evaluasi Logika & Penalaran',
                            'Estimasi Waktu: 90 Menit',
                        ]}
                        index={1}
                    />
                </div>

                {/* Trust & Feature Badges */}
                <motion.div
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    transition={{ duration: 0.6, delay: 0.5 }}
                    className="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto w-full pt-8 border-t border-zinc-900 text-center"
                >
                    <div className="flex items-center justify-center gap-3 text-zinc-400">
                        <ShieldCheck className="w-5 h-5 text-blue-400 shrink-0" />
                        <span className="text-xs font-mono">Kerahasiaan Data Terjamin</span>
                    </div>
                    <div className="flex items-center justify-center gap-3 text-zinc-400">
                        <Zap className="w-5 h-5 text-indigo-400 shrink-0" />
                        <span className="text-xs font-mono">Pengerjaan Daring Real-time</span>
                    </div>
                    <div className="flex items-center justify-center gap-3 text-zinc-400">
                        <BarChart3 className="w-5 h-5 text-purple-400 shrink-0" />
                        <span className="text-xs font-mono">Laporan Hasil Otomatis</span>
                    </div>
                </motion.div>
            </div>
        </PublicLayout>
    );
}
