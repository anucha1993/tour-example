<div class="bg-white">
    <!-- Top bar with contact info -->
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center">
            <!-- Logo -->
            <a href="/" class="mr-8">
                <img src="{{ asset('images/logo.png') }}" alt="Next Trip Holiday" class="h-16">
            </a>
        </div>
        <div class="flex items-center justify-end space-x-6">
            <!-- Contact info -->
            <div class="text-right">
                <div class="flex items-center justify-end mb-1">
                    <span class="text-[#FF6B6B] font-medium">ศูนย์บริการช่วยเหลือ</span>
                    <span class="mx-2 text-[#FF6B6B] font-medium">
                        <i class="fas fa-phone-alt"></i>
                        02-136-9144
                    </span>
                </div>
                <div class="text-gray-600 text-sm">
                    Hotline : 091-091-6364 , 091-091-6463 (ตลอดเวลา)
                </div>
                <div class="text-gray-600 text-sm">
                    เปิดให้บริการ จันทร์ - เสาร์ 09.00 น.-18.00 น.
                </div>
            </div>
            <!-- Line -->
            <div class="flex items-center bg-[#00B900] rounded-full px-4 py-2 text-white">
                <img src="{{ asset('images/line-icon.png') }}" alt="Line" class="h-6 w-6 mr-2">
                <div>
                    <div class="text-sm font-medium">เราพร้อมช่วยคุณ</div>
                    <div class="font-medium">@nexttripholiday</div>
                </div>
            </div>
            <!-- Social links -->
            <div class="flex items-center space-x-2">
                <span class="text-sm text-gray-600">ติดตามเราที่ช่องทาง</span>
                <a href="#" class="text-[#3b5998]"><i class="fab fa-facebook text-2xl"></i></a>
                <a href="#" class="text-[#FF0000]"><i class="fab fa-youtube text-2xl"></i></a>
                <a href="#" class="text-[#E1306C]"><i class="fab fa-instagram text-2xl"></i></a>
                <a href="#" class="text-black"><i class="fab fa-tiktok text-2xl"></i></a>
            </div>
        </div>
    </div>

    <!-- Main navigation -->
    <div class="border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Home icon -->
                <a href="/" class="text-[#FF6B6B]">
                    <i class="fas fa-home text-xl"></i>
                </a>
                <!-- Navigation links -->
                <nav class="flex-1 flex justify-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">ทัวร์ต่างประเทศ</a>
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">ทัวร์ในประเทศ</a>
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">ทัวร์ไปรเวท</a>
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">ทัวร์ตามเทศกาล</a>
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">แพ็คเกจทัวร์</a>
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">รับจัดกรุ๊ปทัวร์</a>
                    <a href="#" class="text-gray-700 hover:text-[#FF6B6B]">รอบรองลูกค้า</a>
                </nav>
                <!-- Right side icons -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                    <div class="flex items-center text-[#FF6B6B] cursor-pointer">
                        <i class="fas fa-user mr-2"></i>
                        <span>เข้าสู่ระบบ/สมัครสมาชิก</span>
                    </div>
                    <div class="relative">
                        <i class="fas fa-heart text-gray-400 text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-[#FF6B6B] text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
