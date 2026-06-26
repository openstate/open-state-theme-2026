@if ($action_box_vraagteken || $action_box_download)
  <div class="grid grid-cols-12 md:gap-x-[16px] gap-y-[16px] mt-[48px]">
    @if ($action_box_vraagteken)
      <div class="col-span-12 md:col-span-6 bg-purple-400 text-white p-[16px] min-h-[204px] rounded-lg action-box flex flex-col group hover:bg-purple-700 hover:text-pink transition-colors">
        <h2 class="mt-0 text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem]">{!! $action_box_vraagteken !!}</h2>
        <span class="mt-auto ml-auto flex items-center justify-center size-[40px] rounded-full bg-white border-white hover:border-pink transition">
          <span class="text-purple-800 group-hover:text-pink group-hover:transition-colors iconify size-[16px] mdi--arrow-right"></span>
        </span>
      </div>
    @endif

    @if ($action_box_download)
      <div class="col-span-12 md:col-span-6 bg-purple-800 text-white p-[16px] min-h-[204px] rounded-lg action-box flex flex-col group hover:bg-purple-700 hover:text-pink transition-colors">
        <h2 class="mt-0 text-[1.25rem]/[1.625rem] md:text-[1.375rem]/[1.5rem] xl:text-[1.5rem]/[1.75rem]">{!! $action_box_download !!}</h2>
        <span class="mt-auto ml-auto flex items-center justify-center size-[40px] rounded-full bg-white border-white hover:border-pink transition">
          <span class="text-purple-800 iconify size-[16px] mdi--arrow-down group-hover:text-pink group-hover:transition-colors"></span>
        </span>
      </div>
    @endif
  </div>
@endif
