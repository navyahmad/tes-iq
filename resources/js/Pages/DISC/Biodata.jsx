import { Head, useForm, Link } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';
import { motion } from 'motion/react';
import { User, Calendar, Users, ArrowRight, ArrowLeft, ShieldCheck } from 'lucide-react';

export default function Biodata() {
    const { data, setData, post, processing, errors } = useForm({
        participant_name: '',
        age: '',
        gender: '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        post(route('disc.start'));
    };

    return (
        <PublicLayout>
            <Head title="Biodata Peserta DISC" />

            <div className="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12 flex-1 flex flex-col justify-center items-center">
                <div className="w-full max-w-xl">
                    {/* Back Button */}
                    <div className="mb-6">
                        <Link
                            href={route('landing')}
                            className="inline-flex items-center gap-2 text-xs font-mono text-zinc-400 hover:text-white transition-colors group"
                        >
                            <ArrowLeft className="w-4 h-4 group-hover:-translate-x-1 transition-transform" />
                            <span>Kembali ke Pilihan Tes</span>
                        </Link>
                    </div>

                    {/* Main Form Card */}
                    <motion.div
                        initial={{ opacity: 0, y: 15 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.4 }}
                        className="bg-zinc-900/90 border border-zinc-800 rounded-2xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl relative overflow-hidden"
                    >
                        <div className="absolute top-0 right-0 w-40 h-40 bg-blue-600/10 blur-3xl rounded-full pointer-events-none" />

                        {/* Form Header */}
                        <div className="mb-6 sm:mb-8">
                            <span className="text-xs font-mono text-blue-400 uppercase tracking-widest block mb-1">
                                Langkah 1 dari 3
                            </span>
                            <h2 className="text-xl sm:text-2xl font-bold text-white tracking-tight">
                                Data Diri Peserta Tes
                            </h2>
                            <p className="text-xs sm:text-sm text-zinc-400 mt-1 leading-relaxed">
                                Isikan informasi biodata Anda dengan benar sebelum memulai sesi psikotes DISC.
                            </p>
                        </div>

                        {/* Form Body */}
                        <form onSubmit={handleSubmit} className="space-y-5 sm:space-y-6">
                            {/* Participant Name */}
                            <div>
                                <label className="block text-xs font-semibold text-zinc-300 uppercase tracking-wider mb-2">
                                    Nama Lengkap <span className="text-red-400">*</span>
                                </label>
                                <div className="relative flex items-center">
                                    <div className="absolute left-3.5 text-zinc-500 pointer-events-none flex items-center justify-center">
                                        <User className="w-4 h-4 sm:w-5 sm:h-5 text-zinc-400" />
                                    </div>
                                    <input
                                        type="text"
                                        value={data.participant_name}
                                        onChange={(e) => setData('participant_name', e.target.value)}
                                        placeholder="Contoh: Ahmad Fauzi"
                                        className={`w-full pl-11 pr-4 py-3 sm:py-3.5 bg-zinc-950/90 border ${
                                            errors.participant_name ? 'border-red-500/80 focus:ring-red-500/20' : 'border-zinc-800 focus:border-blue-500 focus:ring-blue-500/20'
                                        } rounded-xl text-sm text-white placeholder-zinc-600 focus:outline-none focus:ring-4 transition-all`}
                                    />
                                </div>
                                {errors.participant_name && (
                                    <p className="mt-1.5 text-xs text-red-400">{errors.participant_name}</p>
                                )}
                            </div>

                            {/* Grid for Age and Gender */}
                            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                                {/* Age */}
                                <div>
                                    <label className="block text-xs font-semibold text-zinc-300 uppercase tracking-wider mb-2">
                                        Usia (Tahun) <span className="text-red-400">*</span>
                                    </label>
                                    <div className="relative flex items-center">
                                        <div className="absolute left-3.5 text-zinc-500 pointer-events-none flex items-center justify-center">
                                            <Calendar className="w-4 h-4 sm:w-5 sm:h-5 text-zinc-400" />
                                        </div>
                                        <input
                                            type="number"
                                            value={data.age}
                                            onChange={(e) => setData('age', e.target.value)}
                                            placeholder="Contoh: 25"
                                            className={`w-full pl-11 pr-4 py-3 sm:py-3.5 bg-zinc-950/90 border ${
                                                errors.age ? 'border-red-500/80 focus:ring-red-500/20' : 'border-zinc-800 focus:border-blue-500 focus:ring-blue-500/20'
                                            } rounded-xl text-sm text-white placeholder-zinc-600 focus:outline-none focus:ring-4 transition-all`}
                                        />
                                    </div>
                                    {errors.age && (
                                        <p className="mt-1.5 text-xs text-red-400">{errors.age}</p>
                                    )}
                                </div>

                                {/* Gender */}
                                <div>
                                    <label className="block text-xs font-semibold text-zinc-300 uppercase tracking-wider mb-2">
                                        Jenis Kelamin <span className="text-red-400">*</span>
                                    </label>
                                    <div className="relative flex items-center">
                                        <div className="absolute left-3.5 text-zinc-500 pointer-events-none flex items-center justify-center z-10">
                                            <Users className="w-4 h-4 sm:w-5 sm:h-5 text-zinc-400" />
                                        </div>
                                        <select
                                            value={data.gender}
                                            onChange={(e) => setData('gender', e.target.value)}
                                            className={`w-full pl-11 pr-8 py-3 sm:py-3.5 bg-zinc-950/90 border ${
                                                errors.gender ? 'border-red-500/80 focus:ring-red-500/20' : 'border-zinc-800 focus:border-blue-500 focus:ring-blue-500/20'
                                            } rounded-xl text-sm text-white focus:outline-none focus:ring-4 transition-all appearance-none cursor-pointer`}
                                        >
                                            <option value="" disabled className="bg-zinc-900 text-zinc-500">
                                                -- Pilih --
                                            </option>
                                            <option value="L" className="bg-zinc-900 text-white">
                                                Laki-laki
                                            </option>
                                            <option value="P" className="bg-zinc-900 text-white">
                                                Perempuan
                                            </option>
                                        </select>
                                        <div className="absolute right-3.5 pointer-events-none text-zinc-500 text-xs">
                                            ▼
                                        </div>
                                    </div>
                                    {errors.gender && (
                                        <p className="mt-1.5 text-xs text-red-400">{errors.gender}</p>
                                    )}
                                </div>
                            </div>

                            {/* Submit Button */}
                            <div className="pt-2 sm:pt-4">
                                <button
                                    type="submit"
                                    disabled={processing}
                                    className="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 sm:py-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold text-sm shadow-lg shadow-blue-600/25 transition-all duration-300 disabled:opacity-50 group cursor-pointer"
                                >
                                    <span>{processing ? 'Menyimpan...' : 'Lanjut ke Instruksi Tes'}</span>
                                    <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                                </button>
                            </div>
                        </form>

                        {/* Privacy Footer Notice */}
                        <div className="mt-6 pt-4 border-t border-zinc-800/60 flex items-center justify-center gap-2 text-xs text-zinc-500">
                            <ShieldCheck className="w-4 h-4 text-blue-400 shrink-0" />
                            <span>Data Anda hanya dipergunakan untuk keperluan evaluasi internal.</span>
                        </div>
                    </motion.div>
                </div>
            </div>
        </PublicLayout>
    );
}
