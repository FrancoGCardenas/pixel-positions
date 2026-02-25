<x-panel class="flex-col text-center">

  {{-- Employer --}}
  <div class="self-start text-sm">
    Laracasts
  </div>

  {{-- Job title and salary --}}
  <div class="py-8">
    <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>
    <p class="text-sm mt-4">Full Time - From $60,000</p>
  </div>

  {{-- Tags and company logo --}}
  <div class="flex justify-between items-center mt-auto">
    <div>
      <x-tag href="#" size='small'>Backend</x-tag>
      <x-tag href="#" size='small'>Frontend</x-tag>
      <x-tag href="#" size='small'>Manager</x-tag>
    </div>
    <x-employer-logo :width="42"></x-employer-logo>
  </div>
  
</x-panel>