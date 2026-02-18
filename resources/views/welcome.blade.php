<x-layout>
  <div class="space-y-10">

    {{-- Top Jobs section --}}
    <section>
      {{-- Section heading --}}
      <x-section-heading>Top Jobs</x-section-heading>
    
      {{-- Job cards --}}
      <div class="grid lg:grid-cols-3 gap-8 mt-6">
    
        <x-job-card></x-job-card>
        <x-job-card></x-job-card>
        <x-job-card></x-job-card>
    
      </div>
    </section>
  
    {{-- Tags section --}}
    <section>
      {{-- Section heading --}}
      <x-section-heading>Tags</x-section-heading>

      {{-- Tags --}}
      <div class="mt-6 space-x-1">
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
      </div>
    </section>
  
    {{-- Recent Jobs section --}}
    <section>
      <x-section-heading>Recent Jobs</x-section-heading>
    </section>

  </div>
</x-layout>