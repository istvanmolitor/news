<section class="mt-10 bg-gradient-to-r from-red-700 via-red-600 to-rose-700">
  <div class="max-w-screen-xl mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-8">

      <div class="text-center lg:text-left">
        <div class="flex items-center justify-center lg:justify-start gap-3 mb-3">
          <svg class="w-8 h-8 text-red-200" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
          <h2 class="text-white text-2xl font-black">Reggeli Hírlevél</h2>
        </div>
        <p class="text-red-200 text-base max-w-md">
          Iratkozz fel, és minden reggel elsőként olvashatod a legfontosabb híreket!
          Több mint <strong class="text-white">150 000</strong> olvasó bízik bennünk.
        </p>
        <div class="flex flex-wrap items-center gap-4 mt-4 justify-center lg:justify-start text-red-200 text-sm">
          @foreach(['Naponta egyszer', 'Spam-mentes', 'Bármikor leiratkozhatsz'] as $item)
            <span class="flex items-center gap-1.5">
              <svg class="w-4 h-4 text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              {{ $item }}
            </span>
          @endforeach
        </div>
      </div>

      <div class="w-full lg:w-auto lg:min-w-96">
        <div class="flex flex-col sm:flex-row gap-3">
          <input
            type="email"
            placeholder="pelda@email.hu"
            class="flex-1 px-4 py-3 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-white shadow-lg"
          >
          <button class="bg-white text-red-600 font-bold px-6 py-3 rounded-xl hover:bg-red-50 transition-colors shadow-lg whitespace-nowrap">
            Feliratkozás →
          </button>
        </div>
        <p class="text-red-300 text-xs mt-3 text-center">
          Az Adatvédelmi nyilatkozatunkat elfogadod a feliratkozással.
        </p>
      </div>

    </div>
  </div>
</section>
