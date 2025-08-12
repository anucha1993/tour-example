@extends('layouts.app')

@section('title','จองทัวร์ ราคาพิเศษ | Tour Booking')
@section('meta_description','จองแพ็คเกจทัวร์ในประเทศและต่างประเทศ ราคาพิเศษ อัปเดตทุกสัปดาห์ คัดสรรโดยผู้เชี่ยวชาญด้านท่องเที่ยว')

@section('content')
<style>
/* Hero redesigned: layered gradient + subtle noise (data-uri) keeping it light */
.hero{position:relative;background:
	radial-gradient(circle at 70% 35%,rgba(255,166,0,.25),rgba(255,166,0,0) 55%),
	linear-gradient(115deg,#0f172a,#1e293b 60%,#334155),
	url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160' viewBox='0 0 160 160'%3E%3Crect width='160' height='160' fill='%230f172a'/%3E%3Ccircle cx='1' cy='1' r='1' fill='%23223344'/%3E%3C/svg%3E") repeat;}
.hero:after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,23,42,.75),rgba(15,23,42,.55) 55%,rgba(15,23,42,.15) 72%,#ffffff);mix-blend-mode:multiply;}
.hero-media img{transition:filter .6s ease,transform .7s ease;}
.hero-media img.loading{filter:blur(12px) saturate(140%);transform:scale(1.05);}
@media (min-width:1024px){.hero-grid{display:grid;grid-template-columns:repeat(12,minmax(0,1fr));gap:3rem;align-items:center;}}
</style>

<!-- HERO -->
<section class="hero overflow-hidden">
	<div class="relative mx-auto max-w-7xl px-4 pt-20 pb-28 md:pt-28 md:pb-40 hero-grid">
		<div class="relative z-10 col-span-7">
			<div class="inline-flex items-center gap-2 rounded-full bg-white/10 backdrop-blur px-4 py-1.5 ring-1 ring-white/25 text-[11px] text-orange-200 font-medium mb-4">
				<span>ดีลฤดูกาลใหม่</span><span class="inline-block h-1 w-1 rounded-full bg-orange-300"></span><span>ลดสูงสุด 1,500 บ.</span>
			</div>
			<h1 class="text-4xl md:text-5xl font-bold leading-tight text-white drop-shadow-sm max-w-3xl">ออกเดินทางกับ <span class="text-orange-300">ทัวร์ที่ใช่</span> คัดสรรคุณภาพสำหรับคุณ</h1>
			<p class="mt-5 text-white/85 max-w-xl text-base md:text-lg">รวมกว่า 800+ โปรแกรมยอดนิยม รีวิวสูง ทีมผู้เชี่ยวชาญดูแลตั้งแต่ค้นหา จนจบทริป</p>
			<div class="mt-8 flex flex-col sm:flex-row gap-4">
				<a href="#popular" class="inline-flex items-center gap-2 rounded-full bg-orange-600 px-8 py-3 text-white font-semibold shadow-lg shadow-orange-600/30 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400">ดูแพ็คเกจ</a>
				<a href="#booking" class="inline-flex items-center gap-2 rounded-full bg-white/15 backdrop-blur px-8 py-3 text-white font-semibold ring-1 ring-white/40 hover:bg-white/25 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-300">ขอเสนอราคา</a>
			</div>
			<div class="mt-10 flex flex-wrap gap-3 text-[11px] text-white/80">
				<div class="px-4 py-2 rounded-xl bg-white/10 backdrop-blur ring-1 ring-white/15">⭐ 4.8/5 (12,540 รีวิว)</div>
				<div class="px-4 py-2 rounded-xl bg-white/10 backdrop-blur ring-1 ring-white/15">800+ โปรแกรม</div>
				<div class="px-4 py-2 rounded-xl bg-white/10 backdrop-blur ring-1 ring-white/15">ซัพพอร์ตเร็วเฉลี่ย 10 นาที</div>
			</div>
		</div>
		<div class="col-span-5 relative mt-14 md:mt-0 hero-media">
			<figure class="relative rounded-3xl overflow-hidden ring-2 ring-white/10 shadow-2xl shadow-black/40">
				<img id="heroMainImg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=40&fm=webp" 
						 srcset="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=40&fm=webp 600w, https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=50&fm=webp 900w, https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=55&fm=webp 1200w" 
						 sizes="(max-width:1024px) 100vw, 40vw" width="900" height="600" alt="วิวภูเขาฟูจิ ญี่ปุ่น" decoding="async" fetchpriority="high" class="w-full h-full object-cover loading" />
				<figcaption class="absolute bottom-0 left-0 right-0 p-4 text-[11px] font-medium text-white bg-gradient-to-t from-black/60 via-black/20 to-transparent">ตัวอย่างเส้นทาง: ฟูจิ • ดอกไม้ • วัฒนธรรมท้องถิ่น</figcaption>
			</figure>
			<!-- Floating mini card -->
			<div class="absolute -bottom-6 -left-4 bg-white/90 backdrop-blur rounded-2xl shadow-lg ring-1 ring-slate-200 px-5 py-4 text-xs w-56 hidden md:block">
				<p class="font-semibold text-slate-700 mb-1">ตารางเดินทางใกล้เต็ม</p>
				<ul class="space-y-1 text-slate-600">
					<li class="flex justify-between"><span>ญี่ปุ่น ซากุระ</span><span class="text-orange-600 font-medium">6 ที่</span></li>
					<li class="flex justify-between"><span>โซล ใบไม้ผลิ</span><span class="text-orange-600 font-medium">4 ที่</span></li>
					<li class="flex justify-between"><span>ฮาลองเบย์</span><span class="text-orange-600 font-medium">5 ที่</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<script>document.getElementById('heroMainImg')?.addEventListener('load',e=>e.target.classList.remove('loading'));</script>

<!-- Search + Trust (moved below to keep LCP small) -->
<section class="mx-auto max-w-7xl px-4 -mt-14 md:-mt-16 relative z-20">
	<form action="#" method="GET" class="grid gap-3 rounded-2xl bg-white/95 backdrop-blur p-5 md:p-6 shadow-lg ring-1 ring-slate-200 md:grid-cols-5 text-sm">
		<div class="md:col-span-2">
			<label for="destination" class="block font-medium mb-1">ปลายทาง</label>
			<input id="destination" name="destination" placeholder="ญี่ปุ่น, เวียดนาม ..." class="w-full rounded-lg border-slate-300 focus:border-orange-500 focus:ring-orange-500" />
		</div>
		<div>
			<label for="month" class="block font-medium mb-1">เดือน</label>
			<select id="month" name="month" class="w-full rounded-lg border-slate-300 focus:border-orange-500 focus:ring-orange-500">@foreach(range(1,12) as $m)<option value="{{$m}}">{{$m}}</option>@endforeach</select>
		</div>
		<div>
			<label for="days" class="block font-medium mb-1">วัน</label>
			<select id="days" name="days" class="w-full rounded-lg border-slate-300 focus:border-orange-500 focus:ring-orange-500"><option value="">ทั้งหมด</option><option>3</option><option>4</option><option>5</option><option>6+</option></select>
		</div>
		<div>
			<label for="budget" class="block font-medium mb-1">งบสูงสุด</label>
			<input id="budget" name="budget" type="number" placeholder="20000" class="w-full rounded-lg border-slate-300 focus:border-orange-500 focus:ring-orange-500" />
		</div>
		<div class="flex items-end">
			<button class="w-full h-11 rounded-full bg-orange-600 hover:bg-orange-700 text-white font-semibold shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">ค้นหา</button>
		</div>
		<p class="md:col-span-5 text-[11px] text-slate-400 leading-snug">เราไม่เก็บข้อมูลส่วนตัว ข้อมูลใช้สำหรับการค้นหาเท่านั้น</p>
	</form>
	<div class="mt-5 grid gap-4 sm:grid-cols-3 text-center text-xs md:text-sm">
		<div class="rounded-xl bg-white/80 backdrop-blur p-3 ring-1 ring-slate-200"><span class="font-semibold text-slate-800">4.8/5</span> <span class="text-slate-500">จาก 12,540 รีวิว</span></div>
		<div class="rounded-xl bg-white/80 backdrop-blur p-3 ring-1 ring-slate-200"><span class="font-semibold text-slate-800">800+</span> <span class="text-slate-500">โปรแกรม</span></div>
		<div class="rounded-xl bg-white/80 backdrop-blur p-3 ring-1 ring-slate-200"><span class="font-semibold text-slate-800">50k+</span> <span class="text-slate-500">ทริปที่ดูแล</span></div>
	</div>
</section>

<!-- Partners / Trust Logos -->
<section class="bg-white dark:bg-slate-900 border-y border-slate-100 dark:border-slate-800">
	<div class="mx-auto max-w-7xl px-4 py-8 flex flex-wrap items-center justify-center gap-8 opacity-70">
		@foreach(['amadeus','expedia','booking','tripadvisor','agoda'] as $p)
			<span class="h-8 flex items-center font-semibold text-slate-400 dark:text-slate-500 text-xs tracking-wide uppercase">{{ $p }}</span>
		@endforeach
	</div>
</section>


	<!-- Popular Tours -->
	<section id="popular" class="mx-auto max-w-7xl px-4 pt-14 pb-20">
		<div class="flex items-end justify-between mb-6">
			<h2 class="text-2xl font-bold text-slate-800">แพ็คเกจยอดนิยม</h2>
			<a href="#" class="text-sm font-medium text-orange-600 hover:text-orange-700">ดูทั้งหมด →</a>
		</div>
		@php
			$baseParams='auto=compress&fit=crop&q=60&fm=webp&w=600';
			$tours = [
				['title'=>'ญี่ปุ่น ฟูจิ','duration'=>'5 วัน 3 คืน','price'=>'เริ่ม 32,900','image'=>"https://images.unsplash.com/photo-1506744038136-46273834b3fb?$baseParams","availability"=>'เปิด 6 ที่'],
				['title'=>'เกาหลี โซล','duration'=>'4 วัน 3 คืน','price'=>'เริ่ม 18,500','image'=>"https://plus.unsplash.com/premium_photo-1661886323367-fc6579695eba?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8S29yZWElMkMlMjBTZW91bHxlbnwwfHwwfHx8MA%3D%3D","availability"=>'เหลือ 4 ที่'],
				['title'=>'จีน พรีเมียม','duration'=>'6 วัน 4 คืน','price'=>'เริ่ม 29,900','image'=>"https://images.unsplash.com/photo-1507904309054-5d475df55c14?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fEhvbmclMjBLb25nfGVufDB8fDB8fHww","availability"=>'รับเพิ่ม']
			];
		@endphp
		<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
			@foreach($tours as $tour)
				<x-tour-card :image="$tour['image']" :title="$tour['title']" :duration="$tour['duration']" :price="$tour['price']" :availability="$tour['availability']" />
			@endforeach
		</div>
	</section>

	<!-- Tour Categories (booking intent) -->
	<section id="categories" class="mx-auto max-w-7xl px-4 pb-24">
		<h2 class="text-2xl font-bold text-slate-800 mb-8">เลือกสไตล์ทัวร์ของคุณ</h2>
		<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm">
			@foreach([
				['ทะเล & พักผ่อน','beach','ทัวร์ทะเล ดำน้ำ พักรีสอร์ท'],
				['ธรรมชาติ & ภูเขา','mountain','เดินป่า ซากุระ ใบไม้เปลี่ยนสี'],
				['ช้อปปิ้ง & เมือง','city','ช้อปปิ้ง เอาต์เล็ท เมืองใหญ่'],
				['อาหาร & วัฒนธรรม','food','ลิ้มรสท้องถิ่น เวิร์คช็อปวัฒนธรรม']
			] as $c)
			<a href="#" class="group rounded-2xl border border-slate-200 p-5 bg-white hover:shadow-md transition flex flex-col">
				<div class="flex items-center gap-3 mb-3">
					<span class="h-9 w-9 rounded-full bg-orange-50 grid place-content-center text-orange-600 text-xs font-semibold ring-1 ring-orange-600/20">{{ strtoupper(substr($c[1],0,2)) }}</span>
					<h3 class="font-semibold text-slate-800 group-hover:text-orange-600">{{$c[0]}}</h3>
				</div>
				<p class="text-slate-500 text-xs leading-relaxed flex-1">{{$c[2]}}</p>
				<span class="mt-4 inline-flex items-center gap-1 text-orange-600 text-xs font-medium">ดูแพ็คเกจ <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 5l7 7-7 7"/></svg></span>
			</a>
			@endforeach
		</div>
	</section>

	<!-- Booking Steps (improved layout) -->
	<section id="steps" class="bg-gradient-to-b from-amber-50/40 to-white">
		<div class="mx-auto max-w-7xl px-4 py-20">
			<h2 class="text-2xl font-bold text-slate-800 text-center mb-12">ขั้นตอนการจองง่ายๆ 4 ขั้น</h2>
			<div class="grid gap-5 md:grid-cols-4">
				@foreach([
					['ส่งคำค้นหา','กรอกปลายทาง งบประมาณ หรือเลือกแพ็คเกจที่สนใจ'],
					['รับใบเสนอราคา','ทีมงานสรุปรายการ โปรแกรม และราคาโปรโมชัน'],
					['ยืนยัน & ชำระ','ชำระด้วยช่องทางที่สะดวก อัปเดตสถานะเรียลไทม์'],
					['เตรียมเดินทาง','รับเอกสารการเดินทาง eVoucher / รายละเอียดไกด์']
				] as $i=>$s)
				<div class="relative rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 p-6 flex flex-col overflow-hidden group">
					<span class="absolute -right-6 -top-6 h-20 w-20 rounded-full bg-orange-50 ring-1 ring-orange-500/10"></span>
					<div class="flex items-center gap-3 mb-3 relative">
						<span class="h-9 w-9 rounded-full bg-orange-600 text-white text-sm font-semibold grid place-content-center shadow">{{$i+1}}</span>
						<h3 class="font-semibold text-slate-800 group-hover:text-orange-600 transition">{{$s[0]}}</h3>
					</div>
					<p class="text-xs text-slate-500 leading-relaxed flex-1">{{$s[1]}}</p>
				</div>
				@endforeach
			</div>
		</div>
	</section>
<!-- removed stray closing tags from previous template experiment -->

	<!-- Upcoming Departures Table -->
	<section id="departures" class="mx-auto max-w-7xl px-4 pt-8 pb-28">
		<div class="flex items-center justify-between mb-6">
			<h2 class="text-2xl font-bold text-slate-800">รอบเดินทางใกล้เต็ม</h2>
			<a href="#" class="text-sm font-medium text-orange-600 hover:text-orange-700">ดูรอบทั้งหมด →</a>
		</div>
		<div class="overflow-x-auto rounded-2xl border border-slate-200 bg-white shadow-sm">
			<table class="min-w-full text-sm">
				<thead class="bg-slate-50 text-slate-600">
					<tr>
						<th class="px-5 py-3 text-left font-semibold w-[40%]">แพ็คเกจ</th>
						<th class="px-3 py-3 text-left font-semibold">เดินทาง</th>
						<th class="px-3 py-3 text-center font-semibold w-24">ที่ว่าง</th>
						<th class="px-3 py-3 text-right font-semibold w-28">ราคา</th>
						<th class="px-4 py-3 w-32"></th>
					</tr>
				</thead>
				<tbody class="divide-y divide-slate-100">
					@foreach([
						['ญี่ปุ่น ฟูจิ ซากุระ','15 เม.ย. 68','6','32,900'],
						['เกาหลี โซล ใบไม้ผลิ','22 เม.ย. 68','4','18,500'],
						['จีน พรีเมียม เซี่ยงไฮ้','3 พ.ค. 68','8','29,900'],
						['เวียดนาม ฮาลองเบย์','10 พ.ค. 68','5','16,900']
					] as $d)
					<tr class="hover:bg-amber-50/40 transition">
						<td class="px-5 py-3 font-medium text-slate-800">{{$d[0]}}</td>
						<td class="px-3 py-3 text-slate-500">{{$d[1]}}</td>
						<td class="px-3 py-3 text-center">
							<span class="inline-flex items-center justify-center rounded-full bg-emerald-50 text-emerald-600 text-[11px] font-semibold h-7 w-12 ring-1 ring-emerald-500/20">{{$d[2]}}</span>
						</td>
						<td class="px-3 py-3 text-right text-orange-700 font-semibold">{{$d[3]}} ฿</td>
						<td class="px-4 py-3 text-right"><a href="#" class="inline-flex items-center text-orange-600 text-xs font-medium hover:text-orange-700">ดูรายละเอียด <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 5l7 7-7 7"/></svg></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>

	<!-- Destinations -->
	<section id="destinations" class="bg-gradient-to-b from-white to-amber-50/40">
		<div class="mx-auto max-w-7xl px-4 py-16">
			<div class="flex items-end justify-between mb-8">
				<h2 class="text-2xl font-bold text-slate-800">ปลายทางยอดฮิต</h2>
				<a href="#" class="text-sm font-medium text-orange-600 hover:text-orange-700">สำรวจทั้งหมด →</a>
			</div>
			@php
				$destinations = [
					['title'=>'ญี่ปุ่น','count'=>'1745 โปรแกรม','image'=>'https://images.unsplash.com/photo-1688616128916-9c4f4a612e33?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fFRvcmlpJTIwU2hyaW5lJTJDJTIwSmFwYW58ZW58MHx8MHx8fDA%3D','alt'=>'ศาลเจ้าโทริอิ ญี่ปุ่น'],
					['title'=>'เวียดนาม','count'=>'794 โปรแกรม','image'=>'https://images.unsplash.com/photo-1528181304800-259b08848526?auto=format&fit=crop&w=600&q=70','alt'=>'ฮาลองเบย์ เวียดนาม'],
					['title'=>'จีน','count'=>'3179 โปรแกรม','image'=>'https://images.unsplash.com/photo-1518684079-3c830dcef090?auto=format&fit=crop&w=600&q=70','alt'=>'เสาหินอุทยานจางเจียเจี้ย จีน'],
					['title'=>'ฮ่องกง','count'=>'681 โปรแกรม','image'=>'https://images.unsplash.com/photo-1508009603885-50cf7c579365?auto=format&fit=crop&w=600&q=70','alt'=>'สกายไลน์ฮ่องกงยามค่ำ'],
				];
			@endphp
			<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
				@foreach($destinations as $d)
					<x-destination-card :image="$d['image']" :alt="$d['alt']" :title="$d['title']" :count="$d['count']" />
				@endforeach
			</div>
		</div>
	</section>

	<!-- Promo Banner -->
	<section id="promo" class="bg-gradient-to-r from-orange-600 to-orange-700 text-white">
		<div class="mx-auto max-w-7xl px-4 py-14 md:py-20 grid md:grid-cols-2 gap-10 items-center">
			<div>
				<h2 class="text-2xl md:text-3xl font-bold leading-tight">Flash Deal ฤดูท่องเที่ยว ลดทันที 1,500 บาท</h2>
				<p class="mt-4 text-white/90 max-w-prose">เมื่อจองและชำระภายใน 48 ชั่วโมง ใช้ได้กับแพ็คเกจที่ร่วมรายการเท่านั้น</p>
				<a href="#booking" class="mt-6 inline-flex items-center gap-2 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur px-6 py-3 text-sm font-semibold text-white ring-1 ring-inset ring-white/30">ใช้โค้ด: TRIPFLASH</a>
			</div>
			<ul class="space-y-4 text-sm" aria-label="benefits">
				<li class="flex items-start gap-3"><span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/15"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span><span>ที่นั่งจำนวนจำกัด เฉพาะเส้นทางยอดนิยม</span></li>
				<li class="flex items-start gap-3"><span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/15"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span><span>ยกเลิกฟรีภายใน 24 ชม.</span></li>
				<li class="flex items-start gap-3"><span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-white/15"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span><span>บริการผู้เชี่ยวชาญตลอดการเดินทาง</span></li>
			</ul>
		</div>
	</section>

	<!-- Why Us -->
	<section id="why" class="mx-auto max-w-7xl px-4 py-16">
		<div class="text-center max-w-2xl mx-auto">
			<h2 class="text-2xl md:text-3xl font-bold text-slate-800">ทำไมลูกค้าเลือกเรา</h2>
			<p class="mt-4 text-slate-600">โครงสร้างบริการครบวงจร คัดกรองคุณภาพคู่ค้า และระบบดูแลลูกค้าหลังการขาย</p>
		</div>
		<div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
			@foreach([
				['คัดกรองคุณภาพ','ร่วมงานเฉพาะผู้ให้บริการที่ผ่านมาตรฐานและรีวิวดี'],
				['โปร่งใส','ราคาและรายการชัดเจน ไม่มีค่าใช้จ่ายแอบแฝง'],
				['ตอบเร็ว','ทีมซัพพอร์ตเฉลี่ยตอบกลับภายใน 10 นาที'],
				['ชำระปลอดภัย','รองรับบัตร, โอน, และพร้อมเพย์ พร้อมระบบเข้ารหัส']
			] as $w)
			<div class="rounded-2xl border border-slate-200 p-6 bg-white/60 backdrop-blur-sm">
				<h3 class="font-semibold text-slate-800 mb-2">{{$w[0]}}</h3>
				<p class="text-sm text-slate-600 leading-relaxed">{{$w[1]}}</p>
			</div>
			@endforeach
		</div>
	</section>

	<!-- Booking CTA -->
	<section id="booking" class="mx-auto max-w-7xl px-4 pb-20">
		<div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-cyan-50 via-white to-sky-50 ring-1 ring-slate-200 p-10 md:p-16 flex flex-col items-center text-center">
			<h2 class="text-2xl md:text-3xl font-bold text-slate-800 max-w-2xl">พร้อมเริ่มการเดินทางครั้งใหม่แล้วหรือยัง?</h2>
			<p class="mt-4 text-slate-600 max-w-xl">ส่งคำขอให้เราช่วยออกแบบทริป หรือเลือกจากแพ็คเกจยอดนิยมแล้วจองทันที</p>
			<div class="mt-8 flex flex-col sm:flex-row gap-4">
				<a href="#" class="inline-flex items-center justify-center gap-2 rounded-full bg-orange-600 px-8 py-3 text-white text-sm font-semibold shadow hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">ขอใบเสนอราคา</a>
				<a href="#popular" class="inline-flex items-center justify-center gap-2 rounded-full bg-white px-8 py-3 text-sm font-semibold text-orange-700 ring-1 ring-slate-200 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-orange-500">ดูแพ็คเกจ</a>
			</div>
		</div>
	</section>

	<!-- Reviews -->
	<section id="reviews" class="bg-white">
		<div class="mx-auto max-w-7xl px-4 py-16">
			<div class="text-center max-w-2xl mx-auto">
				<h2 class="text-2xl md:text-3xl font-bold text-slate-800">เสียงจากลูกค้าจริง</h2>
				<p class="mt-4 text-slate-600">บางส่วนของประสบการณ์ที่น่าประทับใจ</p>
			</div>
			<div class="mt-10 grid gap-6 md:grid-cols-3">
				@php $reviews = [
					['title'=>'รีวิวทัวร์ ฮ่องกง','text'=>'ไกด์ดูแลดี บริการครบ ราคาโปรคุ้มมาก','author'=>'สุธิดา','image'=>'https://plus.unsplash.com/premium_photo-1661887277173-f996f36b8fb2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8SG9uZyUyMEtvbmd8ZW58MHx8MHx8fDA%3D','rating'=>5],
					['title'=>'รีวิวทัวร์ ญี่ปุ่น ซากุระ','text'=>'สวยทุกที่ อาหารจัดเต็ม บินตรงตรงเวลา','author'=>'ปพิชญา','image'=>'https://media.istockphoto.com/id/155356833/photo/pink-cherry-blossoms.webp?a=1&b=1&s=612x612&w=0&k=20&c=_YkO9giMDrhFN4ifm5P-aeRYDHNQ9fOi0X0In4UECes=','rating'=>5],
					['title'=>'รีวิวทัวร์ เวียดนาม','text'=>'สถานที่สวย อากาศดี ทีมงานมืออาชีพ','author'=>'รัฐศักดิ์','image'=>'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=800&q=70','rating'=>4.8],
				]; @endphp
				@foreach($reviews as $rev)
					<x-review-card :title="$rev['title']" :text="$rev['text']" :author="$rev['author']" :image="$rev['image']" :rating="$rev['rating']" />
				@endforeach
			</div>
		</div>
	</section>

	<!-- FAQ (native details for zero JS) -->
	<section id="faq" class="bg-gradient-to-b from-amber-50/40 to-white">
		<div class="mx-auto max-w-5xl px-4 py-16">
			<h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-8 text-center">คำถามที่พบบ่อย</h2>
			<div class="space-y-4">
				@foreach([
				  ['จองทัวร์ต้องชำระเงินอย่างไร?','รองรับการโอนผ่านธนาคาร บัตรเครดิต และพร้อมเพย์ ปลอดภัยด้วยการเข้ารหัส SSL'],
				  ['ยกเลิกแล้วได้เงินคืนหรือไม่?','สามารถยกเลิกภายในเวลาที่กำหนดในเงื่อนไขของแต่ละแพ็คเกจ คืนบางส่วนหรือเต็มจำนวนตามนโยบาย'],
				  ['แพ็คเกจรวมอะไรบ้าง?','ระบุไว้ชัดเจนในรายละเอียด เช่น ตั๋วเครื่องบิน ที่พัก อาหาร ไกด์ และประกันเดินทาง (ถ้ามี)'],
				] as $i => $f)
				<details class="group border border-slate-200 rounded-xl bg-white/70 backdrop-blur overflow-hidden open:shadow-sm transition">
					<summary class="cursor-pointer list-none flex items-center justify-between px-5 py-4 font-medium text-slate-800 marker:content-none">
						<span>{{$f[0]}}</span>
						<svg class="w-5 h-5 text-slate-500 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
					</summary>
					<div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100">{{$f[1]}}</div>
				</details>
				@endforeach
			</div>
		</div>
	</section>

	<!-- Newsletter -->
	<section id="subscribe" class="bg-gradient-to-r from-amber-500 via-orange-600 to-orange-700 text-white">
		<div class="mx-auto max-w-5xl px-4 py-14 md:py-16 text-center">
			<h2 class="text-2xl md:text-3xl font-bold">รับดีลพิเศษก่อนใคร</h2>
			<p class="mt-3 text-white/90 max-w-2xl mx-auto">สมัครรับข่าวสารโปรโมชันและแพ็คเกจใหม่ อัปเดตรายสัปดาห์ (ยกเลิกได้ทุกเมื่อ)</p>
			<form class="mt-8 max-w-md mx-auto flex flex-col sm:flex-row gap-3" action="#" method="POST">
				<input type="email" required placeholder="อีเมลของคุณ" class="flex-1 rounded-full border-0 px-5 py-3 text-sm text-slate-700 focus:ring-2 focus:ring-offset-2 focus:ring-white/70" />
				<button class="rounded-full bg-black/30 hover:bg-black/40 px-8 py-3 text-sm font-semibold backdrop-blur focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white/70">สมัคร</button>
			</form>
			<p class="mt-4 text-xs text-white/70">เราไม่ส่งสแปม และไม่ขายข้อมูลส่วนบุคคล</p>
		</div>
	</section>

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
			'reviewCount' => '12540'
		],
		'address' => [
			'@type' => 'PostalAddress',
			'addressCountry' => 'TH'
		],
		'sameAs' => [
			'https://www.facebook.com/',
			'https://www.instagram.com/'
		]
	];
@endphp
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>
@endsection

<!-- Removed old delayed background script; hero now uses direct media panel for clarity & aesthetics -->
