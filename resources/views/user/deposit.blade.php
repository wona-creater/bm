<x-app-layout>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Deposit
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>

        </div>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 grid lg:col-span-4 lg:place-items-center">
                <div>
                    <ol class="steps is-vertical line-space [--size:2.75rem] [--line:.5rem]">
                        <li class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                            <div class="step-header mask is-hexagon bg-primary text-white dark:bg-accent">
                                <i class="fa-solid fa-layer-group text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    Step 1
                                </p>
                                <h3 class="text-base font-medium text-primary dark:text-accent-light">
                                    Copy the address, network and name
                                </h3>
                            </div>
                        </li>
                        <li class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                            <div
                                class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                                <i class="fa-solid fa-list text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    Step 2
                                </p>
                                <h3 class="text-base font-medium">Fill in your deposit details</h3>
                            </div>
                        </li>
                        <li class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                            <div
                                class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                                <i class="fa-solid fa-truck-fast text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    Step 3
                                </p>
                                <h3 class="text-base font-medium">Upload your deposit reciept</h3>
                            </div>
                        </li>
                        <li class="step space-x-4 before:bg-slate-200 dark:before:bg-navy-500">
                            <div
                                class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                                <i class="fa-solid fa-check text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    Step 4
                                </p>
                                <h3 class="text-base font-medium">Confirm</h3>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-span-12 grid lg:col-span-8">
                <div class="card">
                    <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                Deposit Here
                            </h4>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                    <form action="{{ route('deposithis') }}" method="POST" >
                        @csrf
                        <div class="space-y-4 p-4 sm:p-5">

                            @foreach ($tokens as $token)
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <label class="block">
                                        <span>Token Name</span>
                                        <input value="{{ $token->name }}"
                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Name" type="text" readonly name="name" />
                                    </label>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                    <div class="grid grid-cols-2 gap-4">
                                        <label class="block">
                                            <span>Token Network</span>
                                            <input value="{{ $token->network }}"
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Network" type="text" readonly name="network" />
                                        </label>
                                        <x-input-error :messages="$errors->get('netwrok')" class="mt-2" />

                                        <label class="block">
                                            <span>Amount</span>
                                            <input
                                                class="form-input  mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Amount" type="text" name="amount" />
                                        </label>
                                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />

                                    </div>
                                </div>

                                <label class="block">
                                    <span>Token Address</span>

                                    <div x-data="{ addressText: '' }">
                                        <div class="flex -space-x-px" x-data="{ addressText: '{{ $token->address }}' }">
                                            <!-- Input field with rounded left corners -->
                                            <input value="{{ $token->address }}" x-model="addressText"
                                                class="form-input w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Address" type="text" name="address" readonly />

                                            <!-- Copy button with rounded right corners -->
                                            <button
                                                @click="$clipboard({
                                                    content: addressText,
                                                    success: () => $notification({ text: 'Address Copied', variant: 'success' }),
                                                    error: () => $notification({ text: 'Error Copying', variant: 'error' })
                                                })"
                                                class="btn rounded-l-none bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90 px-4 py-2">
                                                Copy
                                            </button>

                                        </div>
                                    </div>
                                </label>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            @endforeach
                            <div>
                                <span>Reciept "Images"</span>
                                <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                                    <input type="file" name="image" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            <div class="flex justify-center space-x-2 pt-4">

                                <button
                                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    <span>Submit</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    </div>

</x-app-layout>
{{--  --}}
