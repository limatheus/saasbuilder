<div>
    @section('content')

        <div class="min-h-screen bg-gray-900 flex flex-col items-center justify-center">
            <h1 class="text-3xl lg:text-4xl text-white font-bold mb-3">
                {{tenant()->domains()->first()->domain}}
            </h1><p class="text-white text-lg mb-8">This is your multi-tenant application.</p>
        </div>
    @endsection

</div>
