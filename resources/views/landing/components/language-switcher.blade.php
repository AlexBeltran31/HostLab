<div class="flex items-center gap-2">
    <a href="{{ route('lang.switch', 'es') }}"
       class="text-sm font-medium {{ app()->getLocale() === 'es' ? 'text-amber-400' : 'text-gray-400 hover:text-white' }} transition">
        ES
    </a>
    <span class="text-gray-600">|</span>
    <a href="{{ route('lang.switch', 'en') }}"
       class="text-sm font-medium {{ app()->getLocale() === 'en' ? 'text-amber-400' : 'text-gray-400 hover:text-white' }} transition">
        EN
    </a>
</div>