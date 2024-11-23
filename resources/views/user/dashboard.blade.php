<x-app-layout>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 lg:col-span-8">
                <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
                    <div :class="$store.breakpoints.smAndUp && 'card px-5 pb-3'">
                        <div class="flex items-center justify-between sm:py-3">
                            <h3 class="text-base font-medium text-slate-800 dark:text-navy-50">
                                Statistics
                            </h3>

                            <div class="flex space-x-4 font-inter text-slate-700 dark:text-navy-100"
                                x-data="{ activeTab: '12hr' }">
                                <div
                                    class="hidden w-full justify-between space-x-4 font-inter text-slate-700 dark:text-navy-100 sm:flex">
                                    <button @click="activeTab = '1wk'" class="font-medium tracking-wide"
                                        :class="activeTab === '1wk' && 'text-primary dark:text-accent-light'">
                                        1 Wk
                                    </button>

                                    <button @click="activeTab = '5days'" class="font-medium tracking-wide"
                                        :class="activeTab === '5days' && 'text-primary dark:text-accent-light'">
                                        5 days
                                    </button>

                                    <button @click="activeTab = '1days'" class="font-medium tracking-wide"
                                        :class="activeTab === '1days' && 'text-primary dark:text-accent-light'">
                                        1 days
                                    </button>

                                    <button @click="activeTab = '12hr'" class="font-medium tracking-wide"
                                        :class="activeTab === '12hr' && 'text-primary dark:text-accent-light'">
                                        12 Hr
                                    </button>

                                    <button @click="activeTab = '1hr'" class="font-medium tracking-wide"
                                        :class="activeTab === '1hr' && 'text-primary dark:text-accent-light'">
                                        1 Hr
                                    </button>
                                </div>


                            </div>
                        </div>
                        <div>
                            <div x-init="$nextTick(() => {
                                $el._x_chart = new ApexCharts($el, pages.charts.cryptoCandlestick);
                                $el._x_chart.render()
                            });"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 sm:order-first sm:grid-cols-4 sm:gap-5 lg:gap-6">
                        <div class="rounded-lg border border-slate-150 p-3 dark:border-navy-700">
                            <div class="flex justify-between space-x-1">
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    $5,679
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-warning" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="mt-1 text-xs+ line-clamp-1">Balance</p>
                        </div>
                        <div class="rounded-lg border border-slate-150 p-3 dark:border-navy-700">
                            <div class="flex justify-between">
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    $12.6k
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-warning" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="mt-1 text-xs+ line-clamp-1">Profit</p>
                        </div>
                        <div class="rounded-lg border border-slate-150 p-3 dark:border-navy-700">
                            <div class="flex justify-between">
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    $10.3k
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-warning" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="mt-1 text-xs+ line-clamp-1">Bonus</p>
                        </div>
                        <div class="rounded-lg border border-slate-150 p-3 dark:border-navy-700">
                            <div class="flex justify-between">
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    651
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-warning" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="mt-1 text-xs+ line-clamp-1">Total</p>
                        </div>
                    </div>
                    <div class="card px-4 pb-4 sm:px-5">
                        <div class="flex items-center justify-between py-3">
                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Mining Stats
                            </h2>
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                                class="inline-flex">



                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div
                                class="flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            ID: 5988745
                                        </p>
                                        <p class="mt-0.5 text-xs text-success line-clamp-1">
                                            Up for 2 hours
                                        </p>
                                    </div>
                                </div>
                                <input checked
                                    class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                    type="checkbox" />
                            </div>
                            <div
                                class="flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            ID: 5488615
                                        </p>
                                        <p class="mt-0.5 text-xs text-success line-clamp-1">
                                            Up for 1.3 hours
                                        </p>
                                    </div>
                                </div>
                                <input checked
                                    class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                    type="checkbox" />
                            </div>
                            <div
                                class="flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            ID: 3591458
                                        </p>
                                        <p class="mt-0.5 text-xs text-warning line-clamp-1">
                                            Down for 22 minutes
                                        </p>
                                    </div>
                                </div>
                                <input
                                    class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                    type="checkbox" />
                            </div>
                            <div
                                class="flex items-center justify-between space-x-2 rounded-lg border border-slate-200 p-3 dark:border-navy-600">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-slate-300 text-slate-700 dark:bg-navy-450 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            ID: 6517997
                                        </p>
                                        <p class="mt-0.5 text-xs line-clamp-1">Power Off</p>
                                    </div>
                                </div>
                                <input
                                    class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                    type="checkbox" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 sm:gap-5 lg:grid-cols-2 lg:gap-6">
                    <div
                        class="rounded-lg bg-primary p-4 transition-shadow duration-300 hover:shadow-lg hover:shadow-primary/50 dark:bg-accent dark:shadow-accent/50 dark:hover:shadow-accent/50">
                        <div class="flex size-10 items-center justify-center rounded-lg bg-white/90">
                            <i class="fa-brands fa-btc text-xl text-primary dark:text-accent"></i>
                        </div>
                        <p class="mt-3 text-base font-medium text-white">Bitcoin</p>
                        <div class="mt-8">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                    {
                                        "symbol": "MARKETSCOM:BITCOIN",
                                        "width": "100%",
                                        "isTransparent": true,
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-warning p-4 transition-shadow duration-300 hover:shadow-lg hover:shadow-warning/50">
                        <div class="flex size-10 items-center justify-center rounded-lg bg-white/90">
                            <i class="fa-solid fa-litecoin-sign text-xl text-warning"></i>
                        </div>
                        <p class="mt-3 text-base font-medium text-white">Litecoin</p>
                        <div class="mt-8">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                    {
                                        "symbol": "COINBASE:LTCUSD",
                                        "width": "100%",
                                        "isTransparent": true,
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-info p-4 transition-shadow duration-300 hover:shadow-lg hover:shadow-info/50">
                        <div class="flex size-10 items-center justify-center rounded-lg bg-white/90">
                            <i class="fa-brands fa-ethereum text-xl text-info"></i>
                        </div>
                        <p class="mt-3 text-base font-medium text-white">Ethereum</p>
                        <div class="mt-8">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                    {
                                        "symbol": "COINBASE:ETHUSD",
                                        "width": "100%",
                                        "isTransparent": true,
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-secondary p-4 transition-shadow duration-300 hover:shadow-lg hover:shadow-secondary/50">
                        <div class="flex size-10 items-center justify-center rounded-lg bg-white/90">
                            <i class="fa-solid fa-bitcoin-sign text-xl text-secondary"></i>
                        </div>
                        <p class="mt-3 text-base font-medium text-white">
                            Bitcoin Cash
                        </p>
                        <div class="mt-8">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                    {
                                        "symbol": "KRAKEN:BCHUSD",
                                        "width": "100%",
                                        "isTransparent": true,
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>

                <div class="card mt-4 px-4 pb-4 sm:mt-5 sm:px-5 lg:mt-6">
                    <div class="flex items-center justify-between py-3">
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Exchange
                        </h2>

                    </div>
                    <div x-data="{ activeTab: 'tabReceive' }" class="tabs flex flex-col">
                        <div
                            class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-150 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                            <div class="tabs-list flex px-1.5 py-1">
                                <button @click="activeTab = 'tabReceive'"
                                    :class="activeTab === 'tabReceive' ?
                                        'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                        'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn flex-1 space-x-2 px-3 py-2 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span> Receive </span>
                                </button>
                                <button @click="activeTab = 'tabSend'"
                                    :class="activeTab === 'tabSend' ? 'bg-white shadow dark:bg-navy-500 dark:text-navy-100' :
                                        'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn flex-1 space-x-2 px-3 py-2 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="pt-4">
                            <p class="text-xs+">You send</p>
                            <div
                                class="mt-1 flex justify-between space-x-2 rounded-2xl bg-slate-150 p-1.5 dark:bg-navy-800">
                                <select
                                    class="form-select h-8 rounded-2xl border border-transparent bg-white px-4 py-0 pr-9 text-xs+ hover:border-slate-400 focus:border-primary dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                    <option>Bitcoin</option>
                                    <option>Ethereum</option>
                                    <option>Solana</option>
                                    <option>Litecoin</option>
                                </select>
                                <input
                                    class="form-input w-full bg-transparent px-2 text-right placeholder:text-slate-400/70"
                                    placeholder="Amount" type="text" />
                            </div>
                        </div>
                        <div class="pt-4">
                            <p class="text-xs+">You receive</p>
                            <div
                                class="mt-1 flex justify-between space-x-2 rounded-2xl bg-slate-150 p-1.5 dark:bg-navy-800">
                                <select
                                    class="form-select h-8 rounded-2xl border border-transparent bg-white px-4 py-0 pr-9 text-xs+ hover:border-slate-400 focus:border-primary dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                    <option>Dollar</option>
                                    <option>Ethereum</option>
                                    <option>Solana</option>
                                    <option>Litecoin</option>
                                </select>
                                <input
                                    class="form-input w-full bg-transparent px-2 text-right placeholder:text-slate-400/70"
                                    placeholder="Amount" type="text" />
                            </div>
                        </div>
                        <div class="absolute right-0 top-1/2 mt-1">
                            <button
                                class="btn mask is-hexagon size-7 bg-primary p-0 font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button
                        class="btn mt-6 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        Buy BTC
                    </button>
                </div>
            </div>
        </div>
    </main>
    </div>



</x-app-layout>
