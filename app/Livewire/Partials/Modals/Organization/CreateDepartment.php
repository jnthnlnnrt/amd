<?php

namespace App\Livewire\Partials\Modals\Organization;

use Livewire\Component;

class CreateDepartment extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <div id="hs-static-backdrop-modal" class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-static-backdrop-modal-label" data-hs-overlay-keyboard="false">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                            <x-typography.h4 class="font-semibold text-gray-800">
                                Agregar departamento
                            </x-typography.h4>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <form class="space-y-6">
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div>
                                        <x-forms.label>ID</x-forms.label>
                                        <x-forms.input type="text" required/>
                                    </div>
                                    <div class="md:col-span-2">
                                        <x-forms.label>Departamento</x-forms.label>
                                        <x-forms.input type="text" required/>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end gap-x-2">
                                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-static-backdrop-modal">
                                    Close
                                    </button>
                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Save changes
                                    </button>
                                </div>

                                <button id="close-btn">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const openBtn = document.querySelector('#close-btn');

            openBtn.addEventListener('click', () => {
            HSOverlay.close('#hs-static-backdrop-modal');
            });
        </script>
        HTML;
    }
}
