@extends('newhome.layouts.app')


{{-- ======= HEAD (หน้าแรก) ======= --}}
@section('title', 'Next Trip Holiday | บริษัททัวร์ต่างประเทศ ราคาคุ้ม บริการครบ')
@section('meta_description', 'จองแพ็กเกจทัวร์ญี่ปุ่น เกาหลี ไต้หวัน รวมถึงทัวร์เอเชียและยุโรป ราคาคุ้ม อัปเดตทุกสัปดาห์ บริการมืออาชีพ ไกด์ดูแลตลอดทริป ปลอดภัยและเชื่อถือได้')

{{-- แนะนำให้ลบ meta keywords ทิ้ง (ไม่จำเป็นสำหรับ Google) --}}

{{-- Canonical (กันเนื้อหาซ้ำ) --}}
<link rel="canonical" href="https://nexttripholiday.com/"/>

{{-- Robots (หน้าแรกให้ index ได้) --}}
<meta name="robots" content="index, follow"/>

{{-- Open Graph / Twitter: ใช้ข้อความเดียวกับ Title/Description เพื่อกันความสับสน --}}
<meta property="og:type" content="website"/>
<meta property="og:title" content="Next Trip Holiday | บริษัททัวร์ต่างประเทศ ราคาคุ้ม บริการครบ"/>
<meta property="og:description" content="จองแพ็กเกจทัวร์ญี่ปุ่น เกาหลี ไต้หวัน รวมถึงทัวร์เอเชียและยุโรป ราคาคุ้ม อัปเดตทุกสัปดาห์ บริการมืออาชีพ ไกด์ดูแลตลอดทริป ปลอดภัยและเชื่อถือได้"/>
<meta property="og:url" content="https://nexttripholiday.com/"/>
<meta property="og:site_name" content="Next Trip Holiday"/>
<meta property="og:image" content="https://nexttripholiday.b-cdn.net/og/nexttriphome.jpg"/>
<meta property="og:image:width" content="1200"/>
<meta property="og:image:height" content="630"/>
<meta property="og:image:alt" content="แพ็กเกจทัวร์ต่างประเทศ Next Trip Holiday"/>

<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="Next Trip Holiday | บริษัททัวร์ต่างประเทศ ราคาคุ้ม บริการครบ"/>
<meta name="twitter:description" content="จองแพ็กเกจทัวร์ญี่ปุ่น เกาหลี ไต้หวัน รวมถึงทัวร์เอเชียและยุโรป ราคาคุ้ม อัปเดตทุกสัปดาห์ บริการมืออาชีพ ไกด์ดูแลตลอดทริป"/>
<meta name="twitter:image" content="https://nexttripholiday.b-cdn.net/og/nexttriphome.jpg"/>

{{-- JSON-LD: Organization + WebSite + SearchAction --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Next Trip Holiday",
  "url": "https://nexttripholiday.com/",
  "logo": "https://nexttripholiday.b-cdn.net/brand/logo-512.png",
  "sameAs": [
    "https://www.facebook.com/nexttripholiday" 
  ]
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"WebSite",
  "url":"https://nexttripholiday.com/",
  "name":"Next Trip Holiday",
  "potentialAction":{
    "@type":"SearchAction",
    "target":"https://nexttripholiday.com/search?q={query}",
    "query-input":"required name=query"
  }
}
</script>

@section('content')
<h1 class="sr-only">Next Trip Holiday — บริษัททัวร์ต่างประเทศ ราคาคุ้ม บริการครบ</h1>


      <section class="relative isolate overflow-hidden h-[60vh] max-h-[60vh]">
  {{-- แทร็คสไลด์ --}}
  <div id="hero" class="h-full w-full">
    <div id="heroTrack"
         class="flex h-full w-full snap-x snap-mandatory overflow-x-auto scroll-smooth no-scrollbar">

      @foreach ($slide as $s)
        <div class="relative h-full w-full shrink-0 snap-center">
          <picture>
            <source media="(min-width:1024px)" srcset="https://nexttripholiday.b-cdn.net/{{ $s->img }}">
            <img
              src="https://nexttripholiday.b-cdn.net/{{ $s->img_mobile }}"
              alt="slide"
              class="absolute inset-0 h-full w-full object-cover object-center" />
          </picture>

          {{-- เลเยอร์ทับมืด --}}
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div>

          {{-- คำบรรยายจาก backend (จะอยู่มุมล่างซ้าย) --}}
          @if(!empty($s->detail))
            <div class="absolute bottom-4 left-4 right-4 z-10 text-white drop-shadow">
              {!! $s->detail !!}
            </div>
          @endif
        </div>
      @endforeach
    </div>

    {{-- ปุ่มเลื่อนซ้าย/ขวา --}}
    <button type="button" data-dir="-1"
            class="absolute left-2 top-1/2 z-20 -translate-y-1/2 rounded-full bg-black/40 p-2 text-white hover:bg-black/60">
      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
    </button>
    <button type="button" data-dir="1"
            class="absolute right-2 top-1/2 z-20 -translate-y-1/2 rounded-full bg-black/40 p-2 text-white hover:bg-black/60">
      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor"><path d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
    </button>
  </div>

  {{-- คอนเทนต์กลาง (หัวข้อ + ฟอร์มค้นหา) --}}

  <div class="pointer-events-none absolute inset-0 grid place-items-center px-3">
      <div class="rounded-2xl bg-white/10 backdrop-blur-sm backdrop-saturate-150
              ring-1 ring-white/20 shadow-xl p-4 sm:p-5">
    <div class="pointer-events-auto w-full max-w-6xl text-center text-white">
      <h1 class="text-3xl font-bold sm:text-5xl">สำรวจโลกกว้างกับเรา</h1>
      <p class="mt-2 mb-4 text-white/85">ดีลทัวร์ต่างประเทศประจำสัปดาห์ อัปเดตราคาเรียลไทม์</p>

      {{-- ฟอร์มค้นหาแบบเบา --}}
      <form action="{{ url('search-tour') }}" method="GET" class="mx-auto w-full max-w-3xl">
  <!-- กล่องค้นหาแบบเบลอ -->
  <div class="rounded-2xl bg-white/15 backdrop-blur-md ring-1 text-slate-600 ring-white/30 shadow-lg p-3 sm:p-4
              grid grid-cols-1 sm:grid-cols-12 gap-2 sm:gap-3 text-white">

    <!-- คำค้น -->
    <div class="relative sm:col-span-6">
      <span class="absolute left-3 top-1/2 -translate-y-1/2 opacity-90 text-slate-600">
        <svg viewBox="0 0 24 24" class="h-5 w-5"><path d="M11 4a7 7 0 105.29 12.29l3.7 3.7 1.42-1.42-3.7-3.7A7 7 0 0011 4z" fill="currentColor"/></svg>
      </span>

  <!-- คำค้น -->
<div class="relative sm:col-span-6">
  <span class="absolute left-3 top-1/2 -translate-y-1/2 opacity-90 text-slate-600">
    <svg viewBox="0 0 24 24" class="h-5 w-5"><path d="M11 4a7 7 0 105.29 12.29l3.7 3.7 1.42-1.42-3.7-3.7A7 7 0 0011 4z" fill="currentColor"/></svg>
  </span>

  <input id="search_data" name="search_data" autocomplete="on"
         placeholder="ประเทศ, เมือง, สถานที่ท่องเที่ยว"
         class="h-12 w-full rounded-lg border text-slate-900 border-white/30 bg-white/10 pl-10 pr-3 text-sm placeholder-text-slate-900
                focus:border-white focus:ring-2 focus:ring-white focus:outline-none" />

  <!-- ⬇️ กล่องผลลัพธ์ “มีแค่ชุดเดียว” ห้ามซ้ำ id -->
  <div id="livesearch"   class="nt-suggest hidden"></div>
  <div id="search_famus" class="nt-suggest hidden"></div>
</div>

      <!-- ถ้ามี live search เดิมของคุณจะใช้งานร่วมได้ -->
      <div id="livesearch" class="hidden"></div>
      <div id="search_famus" class="hidden"></div>
    </div>

    <!-- วันที่ (ช่วงเดียว) -->
    <div class="relative sm:col-span-6">
      <span class="absolute left-3 top-1/2 -translate-y-1/2 opacity-90 text-slate-600">
        <svg viewBox="0 0 24 24" class="h-5 w-5"><path d="M7 2h10a3 3 0 013 3v14a3 3 0 01-3 3H7a3 3 0 01-3-3V5a3 3 0 013-3zm2 6h6v2H9V8z" fill="currentColor"/></svg>
      </span>
      <input id="date_range" type="text" readonly
             placeholder="ช่วงวันที่"
             class="h-12 w-full rounded-lg border border-white/30 bg-white/10 pl-10 pr-3 text-sm text-slate-600 placeholder-white/70
                    focus:border-white focus:ring-2 focus:ring-white focus:outline-none" />
      <!-- ค่าเริ่ม-จบจริง ส่งเข้าแบ็กเอนด์ -->
      <input type="hidden" id="start_date" name="start_date">
      <input type="hidden" id="end_date"   name="end_date">
    </div>

    <!-- ช่วงราคา -->
    <div class="sm:col-span-6">
      <select name="price"
              class="h-12 w-full appearance-none rounded-lg border border-white/30 bg-blue/5 px-3 text-sm
                     focus:border-white focus:ring-2 focus:ring-white focus:outline-none text-slate-600">
        <option value="">ช่วงราคา</option>
        <option value="1">ต่ำกว่า 10,000</option>
        <option value="2">10,001–20,000</option>
        <option value="3">20,001–30,000</option>
        <option value="4">30,001–50,000</option>
        <option value="5">50,001–80,000</option>
        <option value="6">80,001 ขึ้นไป</option>
      </select>
    </div>

    <!-- รหัสทัวร์ -->
    <div class="sm:col-span-3">
      <input type="text" name="code_tour" placeholder="รหัสทัวร์"
             class="h-12 w-full rounded-lg border border-white/30 bg-white/10 px-3 text-sm placeholder-text-slate-900 text-slate-900
                    focus:border-white focus:ring-2 focus:ring-white focus:outline-none" />
    </div>

    <!-- ปุ่มค้นหา -->
    <div class="sm:col-span-3">
      <button type="submit"
              class="h-12 w-full rounded-lg bg-orange-500 text-sm font-semibold text-white
                     hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-white/80">
        ค้นหาทัวร์
      </button>
    </div>
  </div>
</form>

    </div>
    </div>
  </div>
</section>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css">
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // กำหนดจำนวนเดือนตามขนาดจอ (มือถือ 1 เดือน, จอใหญ่ 2 เดือน)
    const isDesktop = window.matchMedia('(min-width: 768px)').matches;

    const picker = new Litepicker({
      element: document.getElementById('date_range'),
      singleMode: false,                       // โหมดช่วงวัน
      autoApply: true,                         // เลือกแล้วใส่ค่าให้เลย
      numberOfMonths:  isDesktop ? 2 : 1,
      numberOfColumns: isDesktop ? 2 : 1,
      minDate: new Date().toISOString().slice(0,10),
      format: 'DD/MM/YYYY',                    // รูปแบบที่แสดงในช่องเดียว
      tooltipText: {one: 'คืน', other: 'คืน'}, // ข้อความ tooltip (ลบได้)
      setup: (inst) => {
        inst.on('selected', (d1, d2) => {
          const f = (d) => d ? d.format('YYYY-MM-DD') : '';
          document.getElementById('start_date').value = f(d1);
          document.getElementById('end_date').value   = f(d2);
        });
      }
    });

    // ค่าเริ่มต้น: วันนี้ → พรุ่งนี้
    const today = new Date();
    const tomorrow = new Date(today.getTime() + 86400000);
    picker.setDateRange(today, tomorrow);
    document.getElementById('start_date').value = today.toISOString().slice(0,10);
    document.getElementById('end_date').value   = tomorrow.toISOString().slice(0,10);

    // อัปเดตจำนวนเดือนเมื่อปรับขนาดหน้าจอ (ถ้าต้องการ)
    window.addEventListener('resize', () => {
      const desktopNow = window.matchMedia('(min-width: 768px)').matches;
      picker.setOptions({
        numberOfMonths:  desktopNow ? 2 : 1,
        numberOfColumns: desktopNow ? 2 : 1
      });
    });
  });
</script>

<script>
  // ฟังก์ชันเรียกจากเมนูมือถือ (ถ้าใช้)
  function closeMobileMenu(){
    const panel = document.getElementById('mobileMenu');
    const backdrop = document.getElementById('backdrop');
    panel?.classList.add('-translate-x-full');
    backdrop?.classList.add('hidden');
    document.documentElement.classList.remove('overflow-hidden');
  }
</script>


{{-- ซ่อนสกอร์บาร์แนวนอนของสไลด์ (เล็กมาก ไม่ใช้ lib) --}}
<style>
  .no-scrollbar::-webkit-scrollbar{display:none;}
  .no-scrollbar{-ms-overflow-style:none;scrollbar-width:none;}
</style>

<script>
(() => {
  const track = document.getElementById('heroTrack');
  const prev  = document.querySelector('#hero [data-dir="-1"]');
  const next  = document.querySelector('#hero [data-dir="1"]');
  const step  = () => track.clientWidth;

  const go = dir => track.scrollBy({ left: dir * step(), behavior: 'smooth' });
  prev.addEventListener('click', () => go(-1));
  next.addEventListener('click', () => go(1));
})();
</script>


    <!-- แพ็คเกจทัวร์แนะนำในต่างแดน (เด่นขึ้น) -->
    <section class="relative py-12">
        <!-- พื้นหลังไล่สี + แสงเบลอ -->
        <div class="absolute inset-0 -z-10 bg-gradient-to-br from-orange-50 via-white to-sky-50"></div>
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_left,rgba(240,116,47,0.12),transparent_55%),radial-gradient(ellipse_at_bottom_right,rgba(56,189,248,0.12),transparent_60%)]">
        </div>

        <div class="mx-auto max-w-7xl px-4">
            <!-- หัวข้อ -->
            <div class="mb-6 flex items-center gap-3">
                <span
                    class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white shadow ring-1 ring-black/5">
                    <!-- icon pin -->
                    <svg viewBox="0 0 24 24" class="h-5 w-5 text-[#f0742f]">
                        <path fill="currentColor"
                            d="M12 2a7 7 0 00-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 00-7-7zm0 9.5A2.5 2.5 0 119.5 9 2.5 2.5 0 0112 11.5z" />
                    </svg>
                </span>
                <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-slate-900">
                    ประเทศยอดนิยม
                </h2>
            </div>

            <!-- กริดการ์ด -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($country as $co)
                    @php
                        $tour_count = App\Models\Backend\TourModel::where(
                            'country_id',
                            'like',
                            '%"' . @$co->id . '"%',
                        )->count();
                    @endphp

                    <a href="https://nexttripholiday.com/oversea/{{ @$co->country_name_en}}"
                        class="group relative block rounded-[26px] bg-gradient-to-br from-orange-200/40 via-rose-200/30 to-amber-200/40 p-[1px] hover:shadow-xl hover:shadow-orange-100/60 transition">

                        <!-- การ์ดด้านใน -->
                        <div
                            class="relative overflow-hidden rounded-[24px] bg-white ring-1 ring-black/5 transition-transform duration-300 group-hover:-translate-y-0.5">
                            <!-- รูป -->
                            <div class="relative aspect-[4/3] lg:aspect-[3/2] overflow-hidden">
                                <img src="https://nexttripholiday.b-cdn.net/{{ @$co->img_banner }}"
                                    alt="{{ @$co->country_name_th }}" loading="lazy"
                                    class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.04]">
                                <!-- gradient ซ้อนบนรูป -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/25 to-transparent">
                                </div>

                                <!-- ชิปมุมบน (ซ้าย: ไอคอนประเทศ/ท่องเที่ยว) -->
                                <div class="absolute left-3 top-3 flex items-center gap-2">
                                    <span
                                        class="inline-grid h-9 w-9 place-items-center rounded-lg bg-white/90 backdrop-blur-sm ring-1 ring-black/5 shadow">
                                        <!-- airplane -->
                                        <svg viewBox="0 0 24 24" class="h-5 w-5 text-[#f0742f]" fill="none"
                                            stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 12.75l-6.364 6.364a.75.75 0 001.06 1.06L12 13.06l6.803 7.115a.75.75 0 001.198-.905l-7.5-18a.75.75 0 00-1.386 0l-7.5 18a.75.75 0 001.198.905L10.5 12.75z" />
                                        </svg>
                                    </span>
                                </div>
                                {{-- <input type="text" ao> --}}
                                

                                <!-- ชิปมุมบนขวา: จำนวนโปรแกรม -->
                                <div
                                    class="absolute right-3 top-3 rounded-full bg-orange-500/80 px-3 py-1 text-xs font-semibold text-white ring-1 ring-black/5 shadow">
                                    {{ number_format($tour_count) }} โปรแกรม
                                </div>

                                <!-- ข้อความล่าง -->
                                <div class="absolute inset-x-0 bottom-0 p-4 md:p-5 text-white">
                                    <div class="flex items-end justify-between gap-3">
                                        <div>
                                            <div class="text-lg md:text-xl font-extrabold drop-shadow-sm">
                                                {{ @$co->country_name_th }}</div>
                                            <div class="mt-0.5 text-[13px] md:text-sm text-white/85 font-medium">
                                              {!! @$co->description !!}
                                            </div>
                                        </div>
                                        <span
                                            class="hidden md:inline-flex items-center gap-1 rounded-full bg-blue-900/80 px-3 py-1 text-sm font-semibold ring-1 ring-white/20 backdrop-blur-sm">
                                            ดูแพ็คเกจ
                                            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12h14m-7-7l7 7-7 7" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- โปรโมชั่นแพ็คเกจทัวร์  https://www.nexttripholiday.com/promotiontour/0/0-->
    <!-- โปรโมชั่นแพ็คเกจทัวร์ (Infinite Loop) -->
    <section class="py-10">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex items-baseline justify-between gap-4">
                <h2 class="text-2xl font-extrabold text-orange-500">โปรโมชั่นแพ็คเกจทัวร์</h2>

                <a href="https://www.nexttripholiday.com/promotiontour/0/0"
                    class="inline-flex items-center gap-2 text-[#ef4444] font-semibold hover:gap-3 transition-all">
                    ดูเพิ่มเติม
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="relative mt-6 overflow-hidden group">
                <div class="flex gap-6 animate-marquee group-hover:[animation-play-state:paused]">
                    @foreach ($ads as $ad)
                        <a href="https://www.nexttripholiday.com/promotiontour/0/0"
                            class="shrink-0 w-[300px] sm:w-[380px] lg:w-[460px] xl:w-[520px]
                block overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200 shadow-sm hover:shadow-md transition">
                            <div class="relative aspect-[2/1] overflow-hidden"> <!-- เตี้ยลง -->
                                <img src="https://nexttripholiday.b-cdn.net/{{ $ad->img }}" alt="promotion"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-300 group-hover:scale-[1.02]">
                            </div>
                        </a>
                    @endforeach

                    {{-- duplicate set for infinite loop --}}
                    @foreach ($ads as $ad)
                        <a href="https://www.nexttripholiday.com/promotiontour/0/0" aria-hidden="true"
                            class="shrink-0 w-[300px] sm:w-[380px] lg:w-[460px] xl:w-[520px]
                block overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200 shadow-sm">
                            <div class="relative aspect-[2/1] overflow-hidden">
                                <img src="https://nexttripholiday.b-cdn.net/{{ $ad->img }}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover object-center">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CSS keyframes -->
    <style>
        /* งูกินหาง: มี 2 ชุดเรียงต่อกันในแทร็คเดียว เลื่อนไป -50% เท่าความกว้างของ 1 ชุดพอดี */
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 28s linear infinite;
            /* ปรับความเร็วได้ */
            will-change: transform;
        }

        /* เคารพผู้ใช้ที่ไม่ต้องการแอนิเมชัน */
        @media (prefers-reduced-motion: reduce) {
            .animate-marquee {
                animation: none;
            }
        }
    </style>





    {{-- ==================== เลือกทัวร์ที่ใช่ในสไตล์คุณ (Tailwind + Backend) ==================== --}}
    <section class="bg-[#f5f7ef] py-10">
        <div class="mx-auto max-w-7xl px-4">
            <h2 class="text-2xl sm:text-[28px] font-extrabold text-slate-900">
                เลือกทัวร์ที่ใช่ในสไตล์คุณ
            </h2>

            @php
                // ----- Data ที่ใช้ซ้ำ -----
                $month = [
                    '',
                    'ม.ค.',
                    'ก.พ.',
                    'มี.ค.',
                    'เม.ย.',
                    'พ.ค.',
                    'มิ.ย.',
                    'ก.ค.',
                    'ส.ค.',
                    'ก.ย.',
                    'ต.ค.',
                    'พ.ย.',
                    'ธ.ค.',
                ];

                // ประเภททัวร์
                $tour_type = App\Models\Backend\TourTypeModel::where([
                    'status' => 'on',
                    'deleted_at' => null,
                ])
                    ->orderBy('id', 'asc')
                    ->get();

                // ทัวร์ลดราคา (อิงโค้ดเดิม)
                $tour_price = App\Models\Backend\TourModel::where([
                    'tb_tour.status' => 'on',
                    'tb_tour.deleted_at' => null,
                ])
                    ->where('tb_tour.special_price', '>', 0)
                    ->leftJoin('tb_tour_period', 'tb_tour.id', '=', 'tb_tour_period.tour_id')
                    ->where('tb_tour_period.status_display', 'on')
                    ->where('tb_tour_period.count', '>', 0)
                    ->whereDate('tb_tour_period.start_date', '>=', now())
                    ->whereNull('tb_tour_period.deleted_at')
                    ->where('tb_tour_period.status_period', '!=', 3)
                    ->orderBy('tb_tour_period.start_date', 'asc')
                    ->groupBy('tb_tour_period.tour_id')
                    ->select('tb_tour.*')
                    ->orderBy('tb_tour.special_price', 'desc')
                    ->limit(4)
                    ->get();

                // ถ้า controller ไม่ส่ง $tour_views มา ให้ fallback เป็น popular (เรียงตาม views / สร้างตามที่คุณใช้จริง)
                if (!isset($tour_views)) {
                    $tour_views = App\Models\Backend\TourModel::where(['status' => 'on', 'deleted_at' => null])
                        ->orderBy('views', 'desc')
                        ->limit(4)
                        ->get();
                }

                // ฟังก์ชันช่วยแปลงช่วงเดือน จาก period ทั้งหมด
                $formatTravelWindow = function ($periods) use ($month) {
                    if ($periods->isEmpty()) {
                        return null;
                    }
                    $first = $periods->first();
                    $last = $periods->last();
                    return $month[date('n', strtotime($first->start_date))] .
                        ' ' .
                        date('Y', strtotime($first->start_date)) .
                        ' – ' .
                        $month[date('n', strtotime($last->start_date))] .
                        ' ' .
                        date('Y', strtotime($last->start_date));
                };
            @endphp

            {{-- ---------- Tabs ---------- --}}
            <div class="mt-4 overflow-x-auto">
                <div class="flex items-center gap-3 min-w-max" role="tablist">
                    <button role="tab" aria-selected="true" data-tab-target="hot"
                        class="px-4 py-2 rounded-full text-[15px] font-semibold bg-[#f0742f] text-white shadow">
                        ทัวร์สนใจมากที่สุด
                    </button>

                    @foreach ($tour_type as $tt)
                        <button role="tab" aria-selected="false" data-tab-target="type-{{ $tt->id }}"
                            class="px-4 py-2 rounded-full text-[15px] font-semibold bg-white text-slate-700 ring-1 ring-slate-200 hover:bg-slate-50">
                            {{ $tt->type_name }}
                        </button>
                    @endforeach

                    <button role="tab" aria-selected="false" data-tab-target="sale"
                        class="px-4 py-2 rounded-full text-[15px] font-semibold bg-white text-slate-700 ring-1 ring-slate-200 hover:bg-slate-50">
                        ทัวร์ที่ลดราคา
                    </button>
                </div>
            </div>

            {{-- ---------- Panels ---------- --}}
            <div class="mt-6 space-y-6">

                {{-- ========== Panel: Hot ========== --}}
                <div data-tab-panel="hot">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($tour_views as $tour)
                            @php
                                $country = \App\Models\Backend\CountryModel::whereIn(
                                    'id',
                                    json_decode(@$tour->country_id, true) ?: [],
                                )->first();
                                $airline = \App\Models\Backend\TravelTypeModel::find(@$tour->airline_id);
                                $periodsAll = \App\Models\Backend\TourPeriodModel::where([
                                    'tour_id' => @$tour->id,
                                    'status_display' => 'on',
                                ])
                                    ->whereDate('start_date', '>=', now())
                                    ->whereNull('deleted_at')
                                    ->orderBy('start_date', 'asc')
                                    ->get();

                                $window = $formatTravelWindow($periodsAll);
                                $code = @$tour->code1_check ? @$tour->code1 : @$tour->code;
                                $hasSale = (int) @$tour->special_price > 0;
                                $priceAfter = $hasSale
                                    ? (int) $tour->price - (int) $tour->special_price
                                    : (int) $tour->price;
                            @endphp

                            {{-- Card --}}
                            <article class="group bg-white overflow-hidden rounded-2xl shadow-sm ring-1 ring-black/5">
                                <div class="relative">
                                    <div class="relative aspect-[1/1] overflow-hidden">
                                        <a href="https://nexttripholiday.com/tour/{{ $tour->slug }}" target="_blank">
                                            <img src="https://nexttripholiday.b-cdn.net/{{ @$tour->image }}"
                                                alt="{{ $tour->name }}"
                                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                                        </a>
                                    </div>


                                </div>

                                <div class="p-5">
                                    <div class="text-[#f0742f] text-sm font-semibold">{{ $tour->num_day }}</div>
                                    <h3 class="mt-1 text-lg font-extrabold leading-snug text-slate-900">
                                        <a href="{{ url('tour/' . $tour->slug) }}"
                                            target="_blank">{{ $tour->name }}</a>
                                    </h3>

                                    <ul class="mt-3 space-y-2 text-[13px] text-slate-600">
                                        <li class="flex items-center gap-2">
                                            <!-- airplane (outline) -->
                                            <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500"
                                                fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.5 12.75l-6.364 6.364a.75.75 0 001.06 1.06L12 13.06l6.803 7.115a.75.75 0 001.198-.905l-7.5-18a.75.75 0 00-1.386 0l-7.5 18a.75.75 0 001.198.905L10.5 12.75z" />
                                            </svg>
                                            สายการบิน <img src="https://nexttripholiday.b-cdn.net/{{ @$airline->image }}"
                                                alt="{{ @$airline->name }}">

                                        </li>
                                        <li class="flex items-center gap-2">
                                            <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500">
                                                <path fill="currentColor"
                                                    d="M19 4H5a2 2 0 00-2 2v13l4-4h12a2 2 0 002-2V6a2 2 0 00-2-2z" />
                                            </svg>
                                            {{ $window ?? 'กำหนดการเดินทางอัปเดต' }}
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500">
                                                <path fill="currentColor"
                                                    d="M17 3H7a2 2 0 00-2 2v14l7-3 7 3V5a2 2 0 00-2-2z" />
                                            </svg>
                                            รหัสทัวร์ {{ $code }}
                                        </li>
                                    </ul>

                                    <div class="mt-4 flex items-end justify-between">
                                        <span class="text-slate-500 text-sm">เริ่มต้น</span>
                                        <div class="text-right">
                                            @if ($hasSale)
                                                <div class="text-xs text-slate-400 line-through">ปกติ
                                                    {{ number_format($tour->price, 0) }} THB</div>
                                            @endif
                                            <div class="text-[20px] font-extrabold tracking-tight text-rose-600">
                                                {{ number_format($priceAfter, 0) }} THB
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- ========== Panel: แต่ละประเภท ========== --}}
                @foreach ($tour_type as $tt)
                    @php
                        $toursByType = App\Models\Backend\TourModel::where([
                            'type_id' => $tt->id,
                            'status' => 'on',
                            'deleted_at' => null,
                        ])
                            ->orderBy('price', 'asc')
                            ->limit(4)
                            ->get();
                    @endphp

                    <div class="hidden" data-tab-panel="type-{{ $tt->id }}">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            @forelse($toursByType as $tour)
                                @php
                                    $country = \App\Models\Backend\CountryModel::whereIn(
                                        'id',
                                        json_decode(@$tour->country_id, true) ?: [],
                                    )->first();
                                    $airline = \App\Models\Backend\TravelTypeModel::find(@$tour->airline_id);
                                    $periodsAll = \App\Models\Backend\TourPeriodModel::where([
                                        'tour_id' => @$tour->id,
                                        'status_display' => 'on',
                                    ])
                                        ->whereDate('start_date', '>=', now())
                                        ->whereNull('deleted_at')
                                        ->orderBy('start_date', 'asc')
                                        ->get();
                                    $window = $formatTravelWindow($periodsAll);
                                    $code = @$tour->code1_check ? @$tour->code1 : @$tour->code;
                                    $hasSale = (int) @$tour->special_price > 0;
                                    $priceAfter = $hasSale
                                        ? (int) $tour->price - (int) $tour->special_price
                                        : (int) $tour->price;
                                @endphp

                                {{-- ใช้การ์ดเดียวกับด้านบน --}}
                                <article class="group bg-white overflow-hidden rounded-2xl shadow-sm ring-1 ring-black/5">
                                    <div class="relative">
                                        <div class="relative aspect-[1/1] overflow-hidden">
                                            <a href="https://nexttripholiday.com/tour/{{ $tour->slug }}"
                                                target="_blank">
                                                <img src="https://nexttripholiday.b-cdn.net/{{ @$tour->image }}"
                                                    alt="{{ $tour->name }}"
                                                    class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-5">
                                        <div class="text-[#f0742f] text-sm font-semibold">{{ $tour->num_day }}</div>
                                        <h3 class="mt-1 text-lg font-extrabold leading-snug text-slate-900">
                                            <a href="https://nexttripholiday.com/tour/{{ $tour->slug }}"
                                                target="_blank">{{ $tour->name }}</a>
                                        </h3>
                                        <ul class="mt-3 space-y-2 text-[13px] text-slate-600">
                                            <li class="flex items-center gap-2">
                                                <!-- airplane (outline) -->
                                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500"
                                                    fill="none" stroke="currentColor" stroke-width="1.8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10.5 12.75l-6.364 6.364a.75.75 0 001.06 1.06L12 13.06l6.803 7.115a.75.75 0 001.198-.905l-7.5-18a.75.75 0 00-1.386 0l-7.5 18a.75.75 0 001.198.905L10.5 12.75z" />
                                                </svg>
                                                สายการบิน <img
                                                    src="https://nexttripholiday.b-cdn.net/{{ @$airline->image }}"
                                                    alt="{{ @$airline->name }}">
                                            </li>



                                            <li class="flex items-center gap-2">
                                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500">
                                                    <path fill="currentColor"
                                                        d="M19 4H5a2 2 0 00-2 2v13l4-4h12a2 2 0 002-2V6a2 2 0 00-2-2z" />
                                                </svg>
                                                {{ $window ?? 'กำหนดการเดินทางอัปเดต' }}
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500">
                                                    <path fill="currentColor"
                                                        d="M17 3H7a2 2 0 00-2 2v14l7-3 7 3V5a2 2 0 00-2-2z" />
                                                </svg>
                                                รหัสทัวร์ {{ $code }}
                                            </li>
                                        </ul>
                                        <div class="mt-4 flex items-end justify-between">
                                            <span class="text-slate-500 text-sm">เริ่มต้น</span>
                                            <div class="text-right">
                                                @if ($hasSale)
                                                    <div class="text-xs text-slate-400 line-through">ปกติ
                                                        {{ number_format($tour->price, 0) }} THB</div>
                                                @endif
                                                <div class="text-[20px] font-extrabold tracking-tight text-rose-600">
                                                    {{ number_format($priceAfter, 0) }} THB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @empty
                                <div
                                    class="col-span-full rounded-2xl bg-white p-10 text-center ring-1 ring-black/5 text-slate-500">
                                    ยังไม่มีแพ็กเกจในหมวดนี้
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach

                {{-- ========== Panel: Sale ========== --}}
                <div class="hidden" data-tab-panel="sale">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($tour_price as $tour)
                            @php
                                $country = \App\Models\Backend\CountryModel::whereIn(
                                    'id',
                                    json_decode(@$tour->country_id, true) ?: [],
                                )->first();
                                $airline = \App\Models\Backend\TravelTypeModel::find(@$tour->airline_id);
                                $periodsAll = \App\Models\Backend\TourPeriodModel::where([
                                    'tour_id' => @$tour->id,
                                    'status_display' => 'on',
                                ])
                                    ->whereDate('start_date', '>=', now())
                                    ->whereNull('deleted_at')
                                    ->orderBy('start_date', 'asc')
                                    ->get();
                                $window = $formatTravelWindow($periodsAll);
                                $code = @$tour->code1_check ? @$tour->code1 : @$tour->code;
                                $hasSale = (int) @$tour->special_price > 0;
                                $priceAfter = $hasSale
                                    ? (int) $tour->price - (int) $tour->special_price
                                    : (int) $tour->price;
                            @endphp

                            {{-- Card --}}
                            <article class="group bg-white overflow-hidden rounded-2xl shadow-sm ring-1 ring-black/5">
                                <div class="relative">
                                    <div class="relative aspect-[1/1] overflow-hidden">
                                        <a href="https://nexttripholiday.com/tour/{{ $tour->slug }}" target="_blank">
                                            <img src="https://nexttripholiday.b-cdn.net/{{ @$tour->image }}"
                                                alt="{{ $tour->name }}"
                                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                                        </a>
                                    </div>

                                </div>
                                <div class="p-5">
                                    <div class="text-[#f0742f] text-sm font-semibold">{{ $tour->num_day }}</div>
                                    <h3 class="mt-1 text-lg font-extrabold leading-snug text-slate-900">
                                        <a href="https://nexttripholiday.com/tour/{{ $tour->slug }}"
                                            target="_blank">{{ $tour->name }}</a>
                                    </h3>
                                    <ul class="mt-3 space-y-2 text-[13px] text-slate-600">
                                        <li class="flex items-center gap-2">
                                            <!-- airplane (outline) -->
                                            <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500"
                                                fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.5 12.75l-6.364 6.364a.75.75 0 001.06 1.06L12 13.06l6.803 7.115a.75.75 0 001.198-.905l-7.5-18a.75.75 0 00-1.386 0l-7.5 18a.75.75 0 001.198.905L10.5 12.75z" />
                                            </svg>
                                            สายการบิน <img src="https://nexttripholiday.b-cdn.net/{{ @$airline->image }}"
                                                alt="{{ @$airline->name }}">
                                        </li>

                                        <li class="flex items-center gap-2">
                                            <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500">
                                                <path fill="currentColor"
                                                    d="M19 4H5a2 2 0 00-2 2v13l4-4h12a2 2 0 002-2V6a2 2 0 00-2-2z" />
                                            </svg>
                                            {{ $window ?? 'กำหนดการเดินทางอัปเดต' }}
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] text-slate-500">
                                                <path fill="currentColor"
                                                    d="M17 3H7a2 2 0 00-2 2v14l7-3 7 3V5a2 2 0 00-2-2z" />
                                            </svg>
                                            รหัสทัวร์ {{ @$tour->code1_check ? @$tour->code1 : @$tour->code }}
                                        </li>
                                    </ul>
                                    <div class="mt-4 flex items-end justify-between">
                                        <span class="text-slate-500 text-sm">เริ่มต้น</span>
                                        <div class="text-right">
                                            @if ($hasSale)
                                                <div class="text-xs text-slate-400 line-through">ปกติ
                                                    {{ number_format($tour->price, 0) }} THB</div>
                                            @endif
                                            <div class="text-[20px] font-extrabold tracking-tight text-rose-600">
                                                {{ number_format($priceAfter, 0) }} THB
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Promo Banner -->
    <section id="promo" class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
        <div class="mx-auto max-w-7xl px-4 py-14 md:py-20 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold leading-tight">ระวัง !! กลุ่มมิจฉาชีพขายทัวร์และบริการอื่นๆ</h2>
                <p class="mt-4 text-white/90 max-w-prose">โดยแอบอ้างใช้ชื่อบริษัทเน็กซ์ ทริป ฮอลิเดย์
                    กรุณาชำระค่าบริการผ่านธนาคารชื่อบัญชีบริษัท "เน็กซ์ ทริป ฮอลิเดย์ จำกัด" เท่านั้น</p>

            </div>
            <ul class="space-y-4 text-sm" aria-label="benefits">
                <li class="flex items-start gap-3"><span
                        class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/15"><svg
                            class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span><span>ที่นั่งจำนวนจำกัด เฉพาะเส้นทางยอดนิยม</span></li>
                <li class="flex items-start gap-3"><span
                        class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/15"><svg
                            class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span><span>ยกเลิกฟรีภายใน 24 ชม.</span></li>
                <li class="flex items-start gap-3"><span
                        class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/15"><svg
                            class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg></span><span>บริการผู้เชี่ยวชาญตลอดการเดินทาง</span></li>
            </ul>
        </div>
    </section>

    <!-- Why Us -->
    <!-- Why Us -->
    @php
        $why = [
            [
                'title' => 'ทัวร์คุณภาพ',
                'desc' => 'เราบริการทัวร์คุณภาพมากมาย เพื่อให้ลูกค้าประทับใจในทุกทริป',
                'icon' => 'plane',
            ],
            ['title' => 'เที่ยวครบ คุ้ม', 'desc' => 'เที่ยวครบตามโปรแกรม คุ้มค่าทุกบาททุกสตางค์', 'icon' => 'list'],
            ['title' => 'เชื่อถือได้', 'desc' => 'ประสบการณ์มากกว่า 15 ปี กับวงการท่องเที่ยว', 'icon' => 'shield'],
            ['title' => 'ส่วนลดพิเศษ', 'desc' => 'รับส่วนลด/โปรพิเศษ อัปเดตทุกวัน', 'icon' => 'discount'],
        ];
    @endphp

    <section id="why" class="mx-auto max-w-7xl px-4 py-16">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-orange-500">ทำไมลูกค้าเลือกเรา</h2>
            <p class="mt-4 text-slate-600">โครงสร้างบริการครบวงจร คัดกรองคุณภาพคู่ค้า และระบบดูแลลูกค้าหลังการขาย</p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($why as $w)
                <div
                    class="group rounded-2xl border border-slate-200 p-6 bg-white/70 backdrop-blur-sm hover:shadow-md transition">
                    <div class="flex items-start gap-4">
                        <!-- Icon bubble -->
                        <span
                            class="relative grid h-12 w-12 place-items-center rounded-xl
                       bg-gradient-to-br from-orange-50 to-amber-100
                       ring-1 ring-orange-200/70 shadow-sm
                       group-hover:scale-105 transition">
                            @switch($w['icon'])
                                @case('plane')
                                    <!-- airplane -->
                                    <svg viewBox="0 0 24 24" class="h-6 w-6 text-orange-600" fill="none"
                                        stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 12.75l-6.364 6.364a.75.75 0 001.06 1.06L12 13.06l6.803 7.115a.75.75 0 001.198-.905l-7.5-18a.75.75 0 00-1.386 0l-7.5 18a.75.75 0 001.198.905L10.5 12.75z" />
                                    </svg>
                                @break

                                @case('list')
                                    <!-- checklist -->
                                    <svg viewBox="0 0 24 24" class="h-6 w-6 text-orange-600" fill="none"
                                        stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" d="M4 7h8M4 12h8M4 17h8" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 7l2 2 4-4M14 12l2 2 4-4M14 17l2 2 4-4" />
                                    </svg>
                                @break

                                @case('shield')
                                    <!-- shield check -->
                                    <svg viewBox="0 0 24 24" class="h-6 w-6 text-orange-600" fill="none"
                                        stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linejoin="round" d="M12 2l7 4v6c0 5-3.5 9-7 10-3.5-1-7-5-7-10V6l7-4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12l2 2 4-4" />
                                    </svg>
                                @break

                                @case('discount')
                                    <!-- discount / percent tag -->
                                    <svg viewBox="0 0 24 24" class="h-6 w-6 text-orange-600" fill="none"
                                        stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linejoin="round"
                                            d="M3 8a2 2 0 012-2h8l3 3v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                        <path stroke-linecap="round" d="M8 14l6-6" />
                                        <circle cx="7" cy="9" r="1.3" fill="currentColor" />
                                        <circle cx="13" cy="15" r="1.3" fill="currentColor" />
                                    </svg>
                                @break
                            @endswitch
                        </span>

                        <div>
                            <h3 class="font-semibold text-blue-900 mb-1">{{ $w['title'] }}</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">{{ $w['desc'] }}</p>
                        </div>
                    </div>

                    <!-- subtle divider -->
                    <div class="mt-4 h-px w-full bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Booking CTA -->
    <section id="booking" class="mx-auto max-w-7xl px-4 pb-20">
        <div
            class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-cyan-50 via-white to-sky-50 ring-1 ring-slate-200 p-10 md:p-16 flex flex-col items-center text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-orange-500 max-w-2xl">พร้อมเริ่มการเดินทางครั้งใหม่แล้วหรือยัง?
            </h2>
            <p class="mt-4 text-blue-900 max-w-xl">ค้นหาทริป หรือเลือกจากแพ็คเกจยอดนิยมแล้วจองทันที</p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="https://nexttripholiday.com/search-tour"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-orange-600 px-8 py-3 text-white text-sm font-semibold shadow hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">ค้นหาทัวร์ที่ใช่</a>
                <a href="https://www.nexttripholiday.com/package/0"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-white px-8 py-3 text-sm font-semibold text-orange-700 ring-1 ring-slate-200 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-orange-500">ดูแพ็คเกจ</a>
            </div>
        </div>
    </section>


    {{-- <!-- Reviews -->
    <section id="reviews" class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-16">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-800">เสียงจากลูกค้าจริง</h2>
                <p class="mt-4 text-slate-600">บางส่วนของประสบการณ์ที่น่าประทับใจ</p>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @php $reviews = [['title' => 'รีวิวทัวร์ ฮ่องกง', 'text' => 'ไกด์ดูแลดี บริการครบ ราคาโปรคุ้มมาก', 'author' => 'สุธิดา', 'image' => 'https://plus.unsplash.com/premium_photo-1661887277173-f996f36b8fb2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8SG9uZyUyMEtvbmd8ZW58MHx8MHx8fDA%3D', 'rating' => 5], ['title' => 'รีวิวทัวร์ ญี่ปุ่น ซากุระ', 'text' => 'สวยทุกที่ อาหารจัดเต็ม บินตรงตรงเวลา', 'author' => 'ปพิชญา', 'image' => 'https://media.istockphoto.com/id/155356833/photo/pink-cherry-blossoms.webp?a=1&b=1&s=612x612&w=0&k=20&c=_YkO9giMDrhFN4ifm5P-aeRYDHNQ9fOi0X0In4UECes=', 'rating' => 5], ['title' => 'รีวิวทัวร์ เวียดนาม', 'text' => 'สถานที่สวย อากาศดี ทีมงานมืออาชีพ', 'author' => 'รัฐศักดิ์', 'image' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=800&q=70', 'rating' => 4.8]]; @endphp
                @foreach ($reviews as $rev)
                    <x-review-card :title="$rev['title']" :text="$rev['text']" :author="$rev['author']" :image="$rev['image']"
                        :rating="$rev['rating']" />
                @endforeach
            </div>
        </div>
    </section> --}}

    <!-- Reviews (ใหม่) -->
    <section id="reviews" class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-5">
            <div class="flex items-end justify-between gap-4">
                <div class="text-center md:text-left max-w-2xl">
                    <h2 class="text-2xl md:text-3xl font-bold text-orange-500">เสียงจากลูกค้าจริง</h2>
                    <p class="mt-2 text-slate-600">บางส่วนของประสบการณ์ที่น่าประทับใจ</p>
                </div>

                <a href="{{ url('clients-review/0/0') }}"
                    class="hidden md:inline-flex items-center gap-2 text-orange-600 font-semibold hover:gap-3 transition-all">
                    ดูรีวิวทั้งหมด
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- แทร็ครีวิวเลื่อนซ้าย/ขวา -->
            <div class="relative mt-6">
                <!-- ปุ่มเลื่อน -->
                <button id="revPrev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 hidden md:grid h-10 w-10 place-items-center rounded-full bg-white/90 ring-1 ring-slate-200 shadow hover:bg-white">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="revNext"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 hidden md:grid h-10 w-10 place-items-center rounded-full bg-white/90 ring-1 ring-slate-200 shadow hover:bg-white">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- แถวรีวิว -->
                <div id="revTrack"
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 md:pb-4
                  [scrollbar-width:none] [-ms-overflow-style:none]">
                    <!-- ซ่อนสกอร์บาร์บน WebKit -->
                    <style>
                        #revTrack::-webkit-scrollbar {
                            display: none
                        }

                        .line-clamp-3 {
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 3;
                            overflow: hidden
                        }
                    </style>

                    @foreach ($review as $re)
                        @php
                            $countries = \App\Models\Backend\CountryModel::whereIn(
                                'id',
                                json_decode($re->country_id, true) ?? [],
                            )->get();
                            $rating = $re->rating ?? 5;
                        @endphp

                        <!-- การ์ดรีวิว -->
                        <article
                            class="rev-card snap-start shrink-0 w-[280px] sm:w-[320px] md:w-[360px] lg:w-[380px]
                          bg-white overflow-hidden rounded-2xl ring-1 ring-slate-200 shadow-sm">
                            <a href="https://nexttripholiday.com/clients-review/0/0" class="block group">
                                <div class="relative aspect-[4/3] overflow-hidden">
                                    <img src="https://nexttripholiday.b-cdn.net/{{ $re->img }}"
                                        alt="{{ $re->title }}"
                                        class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
                                </div>

                                <div class="p-5">
                                    <!-- ดาว -->
                                    <div class="flex items-center gap-[2px] text-amber-500">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg viewBox="0 0 24 24"
                                                class="h-[18px] w-[18px] {{ $i <= round($rating) ? 'fill-current' : 'fill-slate-300 text-slate-300' }}">
                                                <path
                                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        @endfor
                                    </div>

                                    <h3 class="mt-2 font-semibold text-slate-800">{{ $re->title }}</h3>
                                    <p class="mt-1 text-sm text-slate-600 line-clamp-3">
                                        {!! strip_tags($re->detail) !!}
                                    </p>

                                    <div class="mt-4 flex items-center gap-3">
                                        <img src="https://nexttripholiday.b-cdn.net/{{ $re->profile }}"
                                            class="h-9 w-9 rounded-full object-cover ring-1 ring-slate-200"
                                            alt="">
                                        <div class="leading-tight">
                                            <div class="font-medium text-slate-800">{{ $re->name }}</div>
                                            <div class="text-xs text-slate-500">ทริป{{ $re->trip }}</div>
                                        </div>
                                    </div>

                                    @if ($countries->count())
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            @foreach ($countries as $c)
                                                <a href="{{ url('clients-review/' . $c->id . '/0') }}"
                                                    class="text-xs px-2 py-1 rounded-full bg-orange-500 text-white hover:bg-slate-200">
                                                    #{{ $c->country_name_th }}
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- ปุ่มดูทั้งหมด (มือถือ) -->
            <div class="mt-6 md:hidden text-center">
                <a href="https://nexttripholiday.com/clients-review/0/0"
                    class="inline-flex items-center justify-center rounded-full bg-orange-600 px-6 py-3 text-white text-sm font-semibold shadow hover:bg-orange-700">
                    ดูรีวิวทั้งหมด
                </a>
            </div>

        </div>
    </section>

    <!-- JS: ปุ่มซ้าย/ขวา สำหรับเลื่อนแถวรีวิว -->
    <script>
        (function() {
            const track = document.getElementById('revTrack');
            if (!track) return;

            const prevBtn = document.getElementById('revPrev');
            const nextBtn = document.getElementById('revNext');

            function step() {
                const card = track.querySelector('.rev-card');
                if (!card) return 320; // fallback
                const style = getComputedStyle(track);
                const gap = parseInt(style.columnGap || style.gap || 24, 10);
                return card.getBoundingClientRect().width + gap;
            }

            prevBtn?.addEventListener('click', () =>
                track.scrollBy({
                    left: -step(),
                    behavior: 'smooth'
                })
            );
            nextBtn?.addEventListener('click', () =>
                track.scrollBy({
                    left: step(),
                    behavior: 'smooth'
                })
            );

            // แสดง/ซ่อนปุ่มอัตโนมัติเมื่อสุดขอบ
            function toggleArrows() {
                if (!prevBtn || !nextBtn) return;
                const maxScrollLeft = track.scrollWidth - track.clientWidth - 1;
                prevBtn.style.visibility = track.scrollLeft <= 0 ? 'hidden' : 'visible';
                nextBtn.style.visibility = track.scrollLeft >= maxScrollLeft ? 'hidden' : 'visible';
            }
            track.addEventListener('scroll', toggleArrows, {
                passive: true
            });
            window.addEventListener('resize', toggleArrows);
            toggleArrows();
        })();
    </script>

    <!-- Clients / Trusted by -->
    <section id="clients" class="py-16">
        <div class="mx-auto max-w-7xl px-4">
            <h2 class="text-center text-2xl md:text-3xl font-bold text-blue-800">
                ลูกค้าที่ไว้วางใจเรา <span class="text-orange-600">Next Trip Holiday</span>
            </h2>

            <!-- Marquee container -->
            <div class="relative mt-8 group overflow-hidden">
                <!-- edge fades -->
                <div class="pointer-events-none absolute inset-y-0 left-0 w-16 bg-gradient-to-r from-white to-transparent">
                </div>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 w-16 bg-gradient-to-l from-white to-transparent">
                </div>

                <!-- track: duplicate 2 รอบเพื่อวิ่งต่อเนื่อง -->
                <div
                    class="flex items-center gap-10 animate-logo-marquee group-hover:[animation-play-state:paused] [--speed:28s]">
                    @foreach ($customer as $cus)
                        <a href="https://nexttripholiday.b-cdn.net/{{ $cus->id }}" class="shrink-0"
                            title="{{ $cus->title ?? 'ลูกค้า' }}">
                            <img src="https://nexttripholiday.b-cdn.net/{{ $cus->logo }}"
                                alt="https://nexttripholiday.b-cdn.net/{{ $cus->title ?? 'ลูกค้า' }}" loading="lazy"
                                class="h-12 sm:h-14 md:h-16 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition">
                        </a>
                    @endforeach

                    {{-- สำเนาชุดที่ 2 เพื่อให้เลื่อนต่อเนื่องไร้รอยต่อ --}}
                    @foreach ($customer as $cus)
                        <a href="https://nexttripholiday.b-cdn.net/{{ $cus->id }}" aria-hidden="true"
                            class="shrink-0">
                            <img src="https://nexttripholiday.b-cdn.net/{{ $cus->logo }}" alt=""
                                loading="lazy"
                                class="h-12 sm:h-14 md:h-16 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition">
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- ปุ่มดูทั้งหมด (ถ้าต้องการ) -->
            <div class="mt-8 text-center">
                <a href="https://nexttripholiday.com/clients-review/0/0"
                    class="inline-flex items-center gap-2 text-orange-600 font-semibold hover:gap-3 transition-all">
                    ดูผลงานลูกค้าทั้งหมด
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <style>
        /* งูกินหาง: มี 2 ชุดโลโก้เรียงต่อกัน เลื่อน -50% เท่าความกว้างชุดแรกพอดี */
        @keyframes logo-marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-logo-marquee {
            animation: logo-marquee var(--speed, 28s) linear infinite;
            will-change: transform;
        }

        /* เคารพผู้ใช้ที่ปิดแอนิเมชัน: ให้เลื่อนเองด้วยการรูดแทน */
        @media (prefers-reduced-motion: reduce) {
            .animate-logo-marquee {
                animation: none;
            }
        }
    </style>



    {{-- <!-- Newsletter -->
    <section id="subscribe" class="bg-gradient-to-r from-amber-500 via-orange-600 to-orange-700 text-white">
        <div class="mx-auto max-w-5xl px-4 py-14 md:py-16 text-center">
            <h2 class="text-2xl md:text-3xl font-bold">รับดีลพิเศษก่อนใคร</h2>
            <p class="mt-3 text-white/90 max-w-2xl mx-auto">สมัครรับข่าวสารโปรโมชันและแพ็คเกจใหม่ อัปเดตรายสัปดาห์
                (ยกเลิกได้ทุกเมื่อ)</p>
            <form class="mt-8 max-w-md mx-auto flex flex-col sm:flex-row gap-3" action="#" method="POST">
                <input type="email" required placeholder="อีเมลของคุณ"
                    class="flex-1 rounded-full border-1 px-5 py-3 text-sm text-white text-slate-700 focus:ring-2 focus:ring-offset-2 focus:ring-white/70" />
                <button
                    class="rounded-full bg-black/30 hover:bg-black/40 px-8 py-3 text-sm  font-semibold backdrop-blur focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white/70">สมัคร</button>
            </form>
            <p class="mt-4 text-xs text-white/70">เราไม่ส่งสแปม และไม่ขายข้อมูลส่วนบุคคล</p>
        </div>
    </section> --}}

    @php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'TravelAgency',
            'name' => 'TourBooking',
            'url' => 'https://example.com',
            'description' => 'แพลตฟอร์มจองทัวร์คุณภาพ ในและต่างประเทศ',
            'image' => 'https://images.unsplash.com/photo-1499002238440-d264edd596ec?auto=format&fit=crop&w=1600&q=60',
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '12540',
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'TH',
            ],
            'sameAs' => ['https://www.facebook.com/', 'https://www.instagram.com/'],
        ];
    @endphp


    <script>
        // Tabs toggle (vanilla JS)
        (function() {
            const tabs = document.querySelectorAll('[role="tab"]');
            const panels = document.querySelectorAll('[data-tab-panel]');

            function activate(id, btn) {
                // reset
                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.classList.remove('bg-[#f0742f]', 'text-white', 'shadow');
                    t.classList.add('bg-white', 'text-slate-700', 'ring-1', 'ring-slate-200');
                });
                panels.forEach(p => p.classList.add('hidden'));

                // set active
                btn.setAttribute('aria-selected', 'true');
                btn.classList.add('bg-[#f0742f]', 'text-white', 'shadow');
                btn.classList.remove('bg-white', 'text-slate-700', 'ring-1', 'ring-slate-200');
                const panel = document.querySelector(`[data-tab-panel="${id}"]`);
                panel && panel.classList.remove('hidden');
            }

            tabs.forEach(btn => {
                btn.addEventListener('click', () => {
                    activate(btn.getAttribute('data-tab-target'), btn);
                });
            });
        })();
    </script>

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>


    <!-- ===== CSS เบา ๆ ===== -->
<style>
  .nt-suggest{
    position:absolute; inset-inline:0; top:100%; margin-top:.5rem;
    z-index:99999; background:#fff; border:1px solid rgba(0,0,0,.06);
    border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.08);
    max-height:clamp(260px,60vh,520px); overflow-y:auto;
    -webkit-overflow-scrolling:touch; overscroll-behavior:contain;
    scrollbar-gutter:stable;
  }
  /* ตัวห่อบนสุด (portal) เอาไว้ย้ายกล่องออกจาก section ที่ overflow-hidden */
  #nt-portal{ position:fixed; z-index:2147483647; left:0; top:0; width:0; height:0; pointer-events:none; }
  /* แทนบรรทัดเดิมของ #nt-portal .nt-suggest ทั้งกลุ่ม */
#nt-portal .nt-suggest{
  position: fixed;            /* เด็ดขาดว่าอิง viewport */
  left: 0; top: 0;            /* แล้วค่อยเลื่อนด้วย transform */
  width: var(--nt-w, 320px);
  transform: translate(var(--nt-x,0px), var(--nt-y,0px));
  pointer-events: auto;
  margin: 0;

  background:#fff; border:1px solid rgba(0,0,0,.06);
  border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.08);

  max-height: clamp(260px, 60vh, 520px);
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  overscroll-behavior: contain;
}
  .nt-suggest::-webkit-scrollbar{ width:10px; }
  .nt-suggest::-webkit-scrollbar-thumb{ background:#e5e7eb; border-radius:999px; border:2px solid #fff; }

  .nt-sec{ padding:12px 14px; border-top:1px solid #f2f2f2; }
  .nt-sec:first-child{ border-top:none; }
  .nt-sec h6{ margin:0 0 6px; font:600 13px/1.2 ui-sans-serif,system-ui; color:#4b5563; position:sticky; top:0; background:#fff; z-index:1; padding-top:12px; }
  .nt-row{ display:flex; align-items:center; gap:10px; padding:10px 12px; border-radius:10px; cursor:pointer; }
  .nt-row:hover{ background:#f8fafc; }
  .nt-flag{ width:24px; height:18px; object-fit:cover; border-radius:3px; }
  .nt-chipwrap{ display:flex; flex-wrap:wrap; gap:8px; }
  .nt-chip{ display:inline-flex; align-items:center; gap:8px; padding:8px 12px; border-radius:999px; border:1px solid #e5e7eb; background:#fff; cursor:pointer; }
  .nt-chip:hover{ background:#f8fafc; }
</style>


<!-- ===== JS เติมรายการ + ดักคลิกแล้วใส่ค่า ===== -->
<script>
(function(){
  const $input  = document.getElementById('search_data');
  const $live   = document.getElementById('livesearch');
  const $famus  = document.getElementById('search_famus');
  if(!$input || !$live || !$famus) return;

  // ----- สร้าง portal แล้ว “ย้ายกล่อง” ออกไปอยู่บน body เพื่อชนะ overflow/z-index -----
  let portal = document.getElementById('nt-portal');
  if(!portal){
    portal = document.createElement('div');
    portal.id = 'nt-portal';
    document.body.appendChild(portal);
  }
  portal.appendChild($live);
  portal.appendChild($famus);

  // ----- วางตำแหน่งกล่องตาม input -----
  function place(){
  const r   = $input.getBoundingClientRect();
  const gap = 8;                       // ระยะห่างใต้ช่อง
  const x   = Math.round(r.left);      // อิงพิกัด viewport
  const y   = Math.round(r.bottom + gap);

  [$live, $famus].forEach(el=>{
    el.style.setProperty('--nt-x', x + 'px');
    el.style.setProperty('--nt-y', y + 'px');
    el.style.setProperty('--nt-w', r.width + 'px');
  });
}


  // ----- utils -----
  const norm = s => String(s||'').trim();
  const has  = a => Array.isArray(a) && a.length>0;
  const esc  = s => String(s||'').replace(/[&<>"']/g, m=>({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;' }[m]));
  const show = el => (el.classList.remove('hidden'), place());
  const hide = el => el.classList.add('hidden');
  const hideAll = () => { hide($live); hide($famus); };

  function pick(text){
    $input.value = text;
    $input.dispatchEvent(new Event('input', {bubbles:true}));
    hideAll();
    $input.focus();
  }

  // ----- render “ยอดนิยม/คำค้นฮิต” -----
  function renderFamous(){
    let html = '';
    if(has(window.country_famus)){
      const chips = window.country_famus.map(c=>{
        const label = 'ทัวร์'+(c.country_name_th || c.country_name_en || '');
        const flag  = c.img_icon ? `<img class="nt-flag" src="https://nexttripholiday.b-cdn.net/${esc(c.img_icon)}" alt="">` : '';
        return `<button type="button" class="nt-chip" data-label="${esc(label)}">${flag}<span>${esc(label)}</span></button>`;
      }).join('');
      html += `<div class="nt-sec"><h6>ประเทศยอดนิยม</h6><div class="nt-chipwrap">${chips}</div></div>`;
    }
    if(has(window.keyword_famus)){
      const chips = window.keyword_famus.map(k=>{
        const label = k.keyword || k.name || '';
        return `<button type="button" class="nt-chip" data-label="${esc(label)}">${esc(label)}</button>`;
      }).join('');
      if(chips) html += `<div class="nt-sec"><h6>คำค้นยอดฮิต</h6><div class="nt-chipwrap">${chips}</div></div>`;
    }
    // fallback set
    const quicks = ['ญี่ปุ่น','โอซาก้า','เวียดนาม','เชียงใหม่','ไต้หวัน','จางเจียเจี้ย','ฮอกไกโด'];
    html += `<div class="nt-sec"><h6>ค้นด่วน</h6><div class="nt-chipwrap">${
      quicks.map(x=>`<button type="button" class="nt-chip" data-label="${esc(x)}">${esc(x)}</button>`).join('')
    }</div></div>`;
    $famus.innerHTML = html;
  }

  // ----- live search จากตัวแปรเดิม (country, city, province, amupur) -----
  function searchPool(q){
    q = norm(q).toLowerCase();
    if(!q) return [];
    const out=[], seen=new Set();

    (window.country||[]).forEach(c=>{
      const name = ((c.country_name_th||'')+' '+(c.country_name_en||'')).toLowerCase();
      if(name.includes(q)){
        const label='ทัวร์'+(c.country_name_th||c.country_name_en||'');
        if(!seen.has(label)){ seen.add(label); out.push({label,icon:c.img_icon?`https://nexttripholiday.b-cdn.net/${c.img_icon}`:''}); }
      }
    });

    (window.city||[]).forEach(c=>{
      const name=((c.city_name_th||'')+' '+(c.city_name_en||'')).toLowerCase();
      if(name.includes(q)){
        const label=(c.city_name_th||c.city_name_en||'');
        if(!seen.has(label)){ seen.add(label); out.push({label,icon:''}); }
      }
    });

    (window.province||[]).forEach(p=>{
      const name=((p.name_th||'')+' '+(p.name_en||'')).toLowerCase();
      if(name.includes(q)){
        const label='ทัวร์'+(p.name_th||p.name_en||'');
        if(!seen.has(label)){ seen.add(label); out.push({label,icon:''}); }
      }
    });

    (window.amupur||[]).forEach(a=>{
      const name=((a.name_th||'')+' '+(a.name_en||'')).toLowerCase();
      if(name.includes(q)){
        const label=(a.name_th||a.name_en||'');
        if(!seen.has(label)){ seen.add(label); out.push({label,icon:''}); }
      }
    });

    return out.slice(0,30);
  }

  function renderLive(list){
    $live.innerHTML = (list.length? `
      <div class="nt-sec">
        ${list.map(it=>`
          <div class="nt-row" data-label="${esc(it.label)}">
            ${it.icon?`<img class="nt-flag" src="${esc(it.icon)}" alt="">`:''}
            <div>${esc(it.label)}</div>
          </div>`).join('')}
      </div>` :
      `<div class="nt-sec"><div class="nt-row">ไม่พบผลลัพธ์</div></div>`
    );
  }

  // ----- events -----
  let timer;
  $input.addEventListener('focus', ()=>{ 
    if(!norm($input.value)){ renderFamous(); show($famus); }
    place();
  });
  $input.addEventListener('input', ()=>{
    clearTimeout(timer);
    const v = norm($input.value);
    timer = setTimeout(()=>{
      if(!v){ renderFamous(); show($famus); return; }
      renderLive(searchPool(v)); show($live);
    },120);
  });

  // เลือกรายการ
  [$live,$famus].forEach(box=>{
    box.addEventListener('click', e=>{
      const el = e.target.closest('[data-label]'); if(!el) return;
      pick(el.getAttribute('data-label') || el.textContent.trim());
    });
  });

  // ปิดเมื่อคลิกนอก / กด Esc
  document.addEventListener('click', (e)=>{
    if(e.target===$input) return;
    if($live.contains(e.target) || $famus.contains(e.target)) return;
    hideAll();
  }, true);
  document.addEventListener('keydown', e=>{ if(e.key==='Escape') hideAll(); });

  // อัปเดตตำแหน่งเมื่อเลื่อน/ย่อขยาย
  const relayout = ()=>{ if(!$live.classList.contains('hidden')||!$famus.classList.contains('hidden')) place(); };
  window.addEventListener('scroll', relayout, true);
  window.addEventListener('resize', relayout);
})();
</script>


@endsection

<!-- Removed old delayed background script; hero now uses direct media panel for clarity & aesthetics -->
