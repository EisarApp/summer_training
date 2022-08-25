<x-company-layout :company="$plan->company">
    <section class="m-4">
        <h1 class="text-xl text-blue-900 font-bold mb-4">
            وصف البرنامج:
        </h1>
        <p class="mb-4">
            {{ $plan->description }}
        </p>
        <h2 class="mb-4 font-semibold text-blue-400">
            نوع التدريب:
        </h2>
        <p class="mb-4">{{ $plan->training_type == 'summer' ? 'صيفي' : 'تعاوني' }}</p>
        <h2 class="mb-4 font-semibold text-blue-400">
            طريقة التدريب:
        </h2>
        <p class="mb-4">{{ $plan->training_method == 'remote' ? 'عن بعد' : 'حضوري' }}</p>
        <h2 class="mb-4 font-semibold text-blue-400">
            مدة التدريب
        </h2>
        <p class="mb-4">
            {{ ' من ' . date('Y-m-d', strtotime("$plan->starting_time")) . 'الى  ' . date('Y-m-d', strtotime("$plan->ending_date")) }}
        </p>
    </section>
    </section>
    <section>
        @if ($plan->require_training_letter || $plan->require_national_id)
            <h1 class="text-xl text-blue-900 font-bold mb-4">
                مستندات اضافية مطلوبة:
            </h1>
        @endif
        <form method="post" action="/trainingRequset">
            @csrf
            <input type="hidden" value="{{$plan->id}}" name="plan_id">
            @if ($plan->require_training_letter)
                <div class="my-4">
                    <h2 class="mb-4 font-semibold text-blue-400">
                        صورة الهوية الوطنية أو الاقامة:
                    </h2>
                    <label
                        class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-900 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-900 hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">اختر الملف</span>
                        <input type='file' class="hidden" />
                    </label>
                </div>
            @endif
            @if ($plan->require_national_id)
                <div class="my-4">
                    <h2 class="mb-4 font-semibold text-blue-400">
                        خطاب التدريب:
                    </h2>
                    <label
                        class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-900 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-900 hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">اختر الملف</span>
                        <input type='file' class="hidden" />
                    </label>
                </div>
            @endif
            @can('trainee')
                <button type="submit"
                    class="py-2 px-12 mt-8 text-sm font-medium text-center text-white rounded-lg hover:bg-blue-200 bg-gradient-to-r from-blue-200 to-blue-500">
                    التقديم
                </button>
            @endcan
        </form>
    </section>
</x-company-layout>
