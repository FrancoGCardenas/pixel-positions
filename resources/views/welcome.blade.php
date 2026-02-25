<x-layout>
  <div class="space-y-10">

    {{-- Search bar --}}
    <section class="text-center pt-6">
      <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

      <form action="" method="GET" class="mt-6">
        <input type="text" placeholder="I'm looking for..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
      </form>
    </section>

    {{-- Top Jobs section --}}
    <section class="pt-10">
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
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
        <x-tag href="#">Tag</x-tag>
      </div>
    </section>
  
    {{-- Recent Jobs section --}}
    <section>
      {{-- Section heading --}}
      <x-section-heading>Recent Jobs</x-section-heading>

      {{-- Job cards - wide --}}
      <div class="mt-6 space-y-6">
        <x-job-card-wide></x-job-card-wide>
        <x-job-card-wide></x-job-card-wide>
        <x-job-card-wide></x-job-card-wide>
      </div>
    </section>

  </div>
</x-layout>