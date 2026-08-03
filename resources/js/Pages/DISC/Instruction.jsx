import { Head, Link } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';
import { motion } from 'motion/react';
import { Clock, CheckSquare, AlertCircle, ArrowRight, ArrowLeft, UserCheck } from 'lucide-react';

export default function Instruction({ discTest }) {
    return (
        <PublicLayout>
            <Head title="Instruksi Tes DISC" />

            <div className="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12 flex-1 flex flex-col justify-center items-center">
                <div className="w-full max-w-2xl">
                    {/* Back Button */}
                    <div className="mb-6">
                        <Link
                            href={route('disc.index')}
                            className="inline-flex items-center gap-2 text-xs font-mono text-zinc-400 hover:text-white transition-colors group"
                        >
                            <ArrowLeft className="w-4 h-4 group-hover:-translate-x-1 transition-transform" />
                            <span>Kembali ke Edit Biodata</span>
                        </Link>
                    </div>

                    <motion.div
                        initial={{ opacity: 0, y: 15 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.4 }}
                        className="bg-zinc-900/90 border border-zinc-800 rounded-2xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl relative overflow-hidden"
                    >
                        <div className="absolute top-0 right-0 w-48 h-48 bg-blue-600/10 blur-3xl rounded-full pointer-events-none" />

                        {/* Step Header & Participant Greeting */}
                        <div className="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-zinc-800 mb-6 gap-4">
                            <div>
                                <span className="text-xs font-mono text-blue-400 uppercase tracking-widest block mb-1">
                                    Langkah 2 dari 3
                                </span>
                                <h2 className="text-xl sm:text-2xl font-bold text-white tracking-tight">
                                    Petunjuk Pengerjaan DISC
                                </h2>
                            </div>
                            <div className="sm:text-right bg-zinc-950/60 p-3 sm:p-0 rounded-xl border sm:border-0 border-zinc-800">
                                <span className="text-xs text-zinc-500 font-mono block">Peserta:</span>
                                <span className="text-sm font-semibold text-zinc-200">
                                    {discTest.participant_name} ({discTest.age} thn, {discTest.gender === 'L' ? 'Laki-laki' : 'Perempuan'})
                                </span>
                            </div>
                        </div>

                        {/* Rules & Guidelines Grid */}
                        <div className="space-y-4 mb-8">
                            <div className="flex items-start gap-4 p-4 rounded-xl bg-zinc-950/60 border border-zinc-800/80">
                                <div className="p-2.5 rounded-lg bg-blue-500/10 border border-blue-500/30 text-blue-400 shrink-0">
                                    <Clock className="w-5 h-5" />
                                </div>
                                <div>
                                    <h4 className="text-sm font-semibold text-white mb-1">Alokasi Waktu 30 Menit</h4>
                                    <p className="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                        Timer hitung mundur 30 menit akan dimulai tepat setelah Anda menekan tombol di bawah ini. Selesaikan seluruh soal sebelum waktu habis.
                                    </p>
                                </div>
                            </div>

                            <div className="flex items-start gap-4 p-4 rounded-xl bg-zinc-950/60 border border-zinc-800/80">
                                <div className="p-2.5 rounded-lg bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 shrink-0">
                                    <CheckSquare className="w-5 h-5" />
                                </div>
                                <div>
                                    <h4 className="text-sm font-semibold text-white mb-1">24 Nomor Soal (Paling & Paling Tidak)</h4>
                                    <p className="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                        Pada setiap nomor soal terdapat 4 pernyataan. Anda wajib memilih:
                                        <br />
                                        • <span className="text-blue-400 font-semibold">Paling Menggambarkan Saya (P)</span> — 1 pilihan.
                                        <br />
                                        • <span className="text-indigo-400 font-semibold">Paling Tidak Menggambarkan Saya (K)</span> — 1 pilihan.
                                    </p>
                                </div>
                            </div>

                            <div className="flex items-start gap-4 p-4 rounded-xl bg-zinc-950/60 border border-zinc-800/80">
                                <div className="p-2.5 rounded-lg bg-amber-500/10 border border-amber-500/30 text-amber-400 shrink-0">
                                    <AlertCircle className="w-5 h-5" />
                                </div>
                                <div>
                                    <h4 className="text-sm font-semibold text-white mb-1">Jawab Secara Spontan & Jujur</h4>
                                    <p className="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                        Tidak ada jawaban benar atau salah. Pilihlah jawaban yang paling mencerminkan diri Anda di lingkungan kerja saat ini.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {/* CTA Start Test */}
                        <div>
                            <Link
                                href={route('disc.test', discTest.id)}
                                className="w-full inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold text-sm shadow-lg shadow-blue-600/25 transition-all duration-300 group cursor-pointer"
                            >
                                <UserCheck className="w-4 h-4" />
                                <span>Saya Mengerti & Mulai Tes</span>
                                <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                            </Link>
                        </div>
                    </motion.div>
                </div>
            </div>
        </PublicLayout>
    );
}
