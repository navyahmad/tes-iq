import { useState, useEffect } from 'react';
import { Head, useForm } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';
import { motion, AnimatePresence } from 'motion/react';
import { Clock, ArrowRight, ArrowLeft, CheckCircle2, AlertCircle, Grid, HelpCircle } from 'lucide-react';

export default function Test({ discTest, questions = [] }) {
    const [currentIndex, setCurrentIndex] = useState(0);
    const [answers, setAnswers] = useState({});
    const [showNavigator, setShowNavigator] = useState(false);

    // Calculate remaining seconds based on discTest.started_at
    const calculateRemainingSeconds = () => {
        if (!discTest.started_at) return 1800; // 30 minutes
        const startTime = new Date(discTest.started_at).getTime();
        const now = new Date().getTime();
        const elapsedSeconds = Math.floor((now - startTime) / 1000);
        return Math.max(0, 1800 - elapsedSeconds);
    };

    const [timeLeft, setTimeLeft] = useState(calculateRemainingSeconds);

    // Timer Interval
    useEffect(() => {
        const timer = setInterval(() => {
            setTimeLeft((prev) => {
                if (prev <= 1) {
                    clearInterval(timer);
                    return 0;
                }
                return prev - 1;
            });
        }, 1000);

        return () => clearInterval(timer);
    }, []);

    // Format MM:SS
    const formatTime = (seconds) => {
        const mins = Math.floor(seconds / 60);
        const secs = seconds % 60;
        return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
    };

    const currentQuestion = questions[currentIndex] || {};
    const currentAnswer = answers[currentQuestion.id] || { most_choice: null, least_choice: null };

    // Handler to select P (Most) or K (Least)
    const handleSelectOption = (statementIndex, type) => {
        const questionId = currentQuestion.id;
        const existing = answers[questionId] || { most_choice: null, least_choice: null };

        let updatedMost = existing.most_choice;
        let updatedLeast = existing.least_choice;

        if (type === 'P') {
            // If already picked P on this statement, uncheck it
            if (updatedMost === statementIndex) {
                updatedMost = null;
            } else {
                updatedMost = statementIndex;
                // If K was on this same statement, clear K
                if (updatedLeast === statementIndex) {
                    updatedLeast = null;
                }
            }
        } else if (type === 'K') {
            // If already picked K on this statement, uncheck it
            if (updatedLeast === statementIndex) {
                updatedLeast = null;
            } else {
                updatedLeast = statementIndex;
                // If P was on this same statement, clear P
                if (updatedMost === statementIndex) {
                    updatedMost = null;
                }
            }
        }

        setAnswers({
            ...answers,
            [questionId]: {
                most_choice: updatedMost,
                least_choice: updatedLeast,
            },
        });
    };

    // Check if current question is fully answered (both P and K selected)
    const isCurrentQuestionAnswered = Boolean(
        currentAnswer.most_choice !== null && currentAnswer.least_choice !== null
    );

    // Count total answered questions
    const totalAnswered = Object.values(answers).filter(
        (ans) => ans.most_choice !== null && ans.least_choice !== null
    ).length;

    const isAllAnswered = totalAnswered === questions.length && questions.length > 0;

    const {
        data,
        setData,
        post,
        processing,
    } = useForm({
        answers: {},
    });

    const handleSubmitTest = () => {
        console.log("ANSWERS =", answers);

        if (!isAllAnswered) return;

        setData('answers', answers);

        post(route('disc.submit', discTest.id));
        console.log(answers);
    };

    const statements = [
        currentQuestion.statement_1,
        currentQuestion.statement_2,
        currentQuestion.statement_3,
        currentQuestion.statement_4,
    ];

    return (
        <PublicLayout>
            <Head title={`Tes DISC - Soal #${currentIndex + 1}`} />

            <div className="max-w-7xl mx-auto px-4 sm:px-6 py-6 sm:py-8 flex-1 flex flex-col">
                {/* Sticky Top Header Bar */}
                <div className="sticky top-4 z-30 bg-zinc-900/90 border border-zinc-800 rounded-2xl p-4 mb-6 backdrop-blur-xl shadow-xl flex flex-wrap items-center justify-between gap-4">
                    {/* Participant & Progress */}
                    <div className="flex items-center gap-4">
                        <div className="hidden sm:block">
                            <span className="text-xs text-zinc-500 font-mono block">Peserta:</span>
                            <span className="text-sm font-semibold text-white">
                                {discTest.participant_name}
                            </span>
                        </div>

                        <div className="h-8 w-px bg-zinc-800 hidden sm:block" />

                        <div>
                            <span className="text-xs text-zinc-400 font-mono">
                                Progress Soal: <strong className="text-white">{currentIndex + 1}</strong> / {questions.length}
                            </span>
                            <div className="w-36 sm:w-48 h-2 bg-zinc-950 rounded-full overflow-hidden mt-1 border border-zinc-800">
                                <div
                                    className="h-full bg-gradient-to-r from-blue-500 to-indigo-500 transition-all duration-300"
                                    style={{ width: `${((currentIndex + 1) / (questions.length || 1)) * 100}%` }}
                                />
                            </div>
                        </div>
                    </div>

                    {/* Timer & Question Grid Toggle */}
                    <div className="flex items-center gap-3">
                        {/* Countdown Timer */}
                        <div
                            className={`flex items-center gap-2 px-3.5 py-2 rounded-xl border text-sm font-mono font-semibold ${
                                timeLeft < 300
                                    ? 'bg-red-500/10 border-red-500/30 text-red-400 animate-pulse'
                                    : 'bg-zinc-950/80 border-zinc-800 text-zinc-200'
                            }`}
                        >
                            <Clock className="w-4 h-4 text-blue-400" />
                            <span>{formatTime(timeLeft)}</span>
                        </div>

                        {/* Navigator Toggle Button */}
                        <button
                            onClick={() => setShowNavigator(!showNavigator)}
                            className="p-2.5 rounded-xl bg-zinc-950/80 border border-zinc-800 text-zinc-300 hover:text-white hover:border-zinc-700 transition-colors flex items-center gap-2 text-xs font-mono"
                        >
                            <Grid className="w-4 h-4 text-indigo-400" />
                            <span className="hidden md:inline">Navigasi Soal</span>
                            <span className="px-2 py-0.5 rounded-md bg-blue-500/20 text-blue-400 text-xs">
                                {totalAnswered}/{questions.length}
                            </span>
                        </button>
                    </div>
                </div>

                {/* Main Content Area: Question Card + Sidebar Navigator */}
                <div className="grid grid-cols-1 lg:grid-cols-4 gap-6 flex-1 items-start">
                    {/* Question Card (Cols 3) */}
                    <div className="lg:col-span-3">
                        <AnimatePresence mode="wait">
                            <motion.div
                                key={currentIndex}
                                initial={{ opacity: 0, x: 20 }}
                                animate={{ opacity: 1, x: 0 }}
                                exit={{ opacity: 0, x: -20 }}
                                transition={{ duration: 0.25 }}
                                className="bg-zinc-900/90 border border-zinc-800 rounded-2xl p-5 sm:p-8 shadow-2xl backdrop-blur-xl"
                            >
                                {/* Question Header */}
                                <div className="flex items-center justify-between pb-4 border-b border-zinc-800 mb-6">
                                    <div className="flex items-center gap-3">
                                        <span className="w-9 h-9 rounded-xl bg-blue-500/10 border border-blue-500/30 text-blue-400 flex items-center justify-center font-mono font-bold text-sm">
                                            #{currentIndex + 1}
                                        </span>
                                        <h3 className="text-lg font-bold text-white tracking-tight">
                                            Pilih 1 "P" dan 1 "K"
                                        </h3>
                                    </div>

                                    {isCurrentQuestionAnswered ? (
                                        <span className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-mono">
                                            <CheckCircle2 className="w-3.5 h-3.5" />
                                            Sudah Terisi
                                        </span>
                                    ) : (
                                        <span className="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-mono">
                                            <AlertCircle className="w-3.5 h-3.5" />
                                            Belum Lengkap
                                        </span>
                                    )}
                                </div>

                                {/* Table / List of Statements */}
                                <div className="space-y-3 mb-8">
                                    {statements.map((statementText, index) => {
                                        const statementNum = index + 1;
                                        const isMost = currentAnswer.most_choice === statementNum;
                                        const isLeast = currentAnswer.least_choice === statementNum;

                                        return (
                                            <div
                                                key={statementNum}
                                                className={`p-4 rounded-xl border transition-all duration-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 ${
                                                    isMost || isLeast
                                                        ? 'bg-zinc-950/90 border-blue-500/40 shadow-lg shadow-blue-500/5'
                                                        : 'bg-zinc-950/40 border-zinc-800/80 hover:border-zinc-700'
                                                }`}
                                            >
                                                {/* Statement Text */}
                                                <div className="flex items-start gap-3 flex-1">
                                                    <span className="w-6 h-6 rounded-md bg-zinc-800 text-zinc-400 text-xs font-mono flex items-center justify-center shrink-0 mt-0.5">
                                                        {String.fromCharCode(65 + index)}
                                                    </span>
                                                    <p className="text-sm text-zinc-200 leading-relaxed font-medium">
                                                        {statementText}
                                                    </p>
                                                </div>

                                                {/* Selection Buttons: P & K */}
                                                <div className="flex items-center gap-2 self-end sm:self-center shrink-0">
                                                    {/* P Button */}
                                                    <button
                                                        type="button"
                                                        onClick={() => handleSelectOption(statementNum, 'P')}
                                                        className={`px-4 py-2 rounded-xl text-xs font-bold font-mono transition-all duration-200 flex items-center gap-1.5 ${
                                                            isMost
                                                                ? 'bg-blue-600 text-white shadow-md shadow-blue-600/30 scale-105 border border-blue-400'
                                                                : 'bg-zinc-800/60 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-700/50'
                                                        }`}
                                                    >
                                                        <span>P</span>
                                                        <span className="hidden sm:inline text-[10px] font-normal opacity-80">(Paling)</span>
                                                    </button>

                                                    {/* K Button */}
                                                    <button
                                                        type="button"
                                                        onClick={() => handleSelectOption(statementNum, 'K')}
                                                        className={`px-4 py-2 rounded-xl text-xs font-bold font-mono transition-all duration-200 flex items-center gap-1.5 ${
                                                            isLeast
                                                                ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30 scale-105 border border-indigo-400'
                                                                : 'bg-zinc-800/60 text-zinc-400 hover:text-white hover:bg-zinc-800 border border-zinc-700/50'
                                                        }`}
                                                    >
                                                        <span>K</span>
                                                        <span className="hidden sm:inline text-[10px] font-normal opacity-80">(Tidak)</span>
                                                    </button>
                                                </div>
                                            </div>
                                        );
                                    })}
                                </div>

                                {/* Guidance Info */}
                                <div className="p-3.5 rounded-xl bg-zinc-950/60 border border-zinc-800/80 mb-8 flex items-center gap-3 text-xs text-zinc-400">
                                    <HelpCircle className="w-4 h-4 text-blue-400 shrink-0" />
                                    <span>
                                        Pilih <strong>P</strong> pada pernyataan yang <em>paling menggambarkan</em> Anda, dan pilih <strong>K</strong> pada pernyataan yang <em>paling tidak menggambarkan</em> Anda.
                                    </span>
                                </div>

                                {/* Footer Action Buttons: Prev, Next, Submit */}
                                <div className="flex items-center justify-between gap-4 pt-4 border-t border-zinc-800">
                                    <button
                                        type="button"
                                        onClick={() => setCurrentIndex((prev) => Math.max(0, prev - 1))}
                                        disabled={currentIndex === 0}
                                        className="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-zinc-800/60 hover:bg-zinc-800 text-zinc-300 text-xs font-semibold disabled:opacity-40 disabled:cursor-not-allowed transition-colors"
                                    >
                                        <ArrowLeft className="w-4 h-4" />
                                        <span>Sebelumnya</span>
                                    </button>

                                    {currentIndex < questions.length - 1 ? (
                                        <button
                                            type="button"
                                            onClick={() => setCurrentIndex((prev) => Math.min(questions.length - 1, prev + 1))}
                                            disabled={!isCurrentQuestionAnswered}
                                            className="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-semibold shadow-lg shadow-blue-600/25 disabled:opacity-40 disabled:cursor-not-allowed transition-all duration-200"
                                        >
                                            <span>Selanjutnya</span>
                                            <ArrowRight className="w-4 h-4" />
                                        </button>
                                    ) : (
                                        <button
                                            type="button"
                                            onClick={handleSubmitTest}
                                            disabled={!isAllAnswered || processing}
                                            className="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-semibold shadow-lg shadow-emerald-600/25 disabled:opacity-40 disabled:cursor-not-allowed transition-all duration-200"
                                        >
                                            <CheckCircle2 className="w-4 h-4" />
                                            <span>{processing ? 'Menyimpan...' : 'Submit Jawaban DISC'}</span>
                                        </button>
                                    )}
                                </div>
                            </motion.div>
                        </AnimatePresence>
                    </div>

                    {/* Sidebar Navigator Grid (Col 1) */}
                    <div
                        className={`lg:block ${
                            showNavigator ? 'block' : 'hidden'
                        } bg-zinc-900/90 border border-zinc-800 rounded-2xl p-5 shadow-2xl backdrop-blur-xl`}
                    >
                        <h4 className="text-xs font-mono font-semibold text-zinc-300 uppercase tracking-wider mb-4 flex items-center justify-between">
                            <span>Daftar 24 Soal</span>
                            <span className="text-blue-400">{totalAnswered}/{questions.length}</span>
                        </h4>

                        <div className="grid grid-cols-6 lg:grid-cols-4 gap-2">
                            {questions.map((q, idx) => {
                                const ans = answers[q.id];
                                const isAnswered = ans && ans.most_choice !== null && ans.least_choice !== null;
                                const isCurrent = idx === currentIndex;

                                return (
                                    <button
                                        key={q.id || idx}
                                        type="button"
                                        onClick={() => {
                                            setCurrentIndex(idx);
                                            setShowNavigator(false);
                                        }}
                                        className={`h-10 rounded-xl font-mono text-xs font-bold transition-all flex items-center justify-center border ${
                                            isCurrent
                                                ? 'bg-blue-600 text-white border-blue-400 ring-4 ring-blue-500/20 scale-105'
                                                : isAnswered
                                                ? 'bg-emerald-500/10 border-emerald-500/30 text-emerald-400 hover:bg-emerald-500/20'
                                                : 'bg-zinc-950/60 border-zinc-800 text-zinc-500 hover:text-white hover:border-zinc-700'
                                        }`}
                                    >
                                        {idx + 1}
                                    </button>
                                );
                            })}
                        </div>
                    </div>
                </div>
            </div>
        </PublicLayout>
    );
}
