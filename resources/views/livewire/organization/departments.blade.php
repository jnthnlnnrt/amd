<div class="space-y-3 sm:space-y-5">
    <!-- Page header -->
    <div class="pb-2 flex items-center justify-between border-b">
        <x-typography.h4 class="font-semibold">
            Departamentos
        </x-typography.h4>
        <x-buttons.primary type="button" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="hs-static-backdrop-modal" data-hs-overlay="#hs-static-backdrop-modal">
            <i class="fa-solid fa-plus shrink-0 size-4"></i>
            <span class="hidden md:block">Agregar departamento</span>
        </x-buttons.primary>
    </div>
    <div>
        Table
    </div>
    <livewire:partials.modals.organization.CreateDepartment />
</div>