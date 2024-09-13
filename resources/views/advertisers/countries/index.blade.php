<div class="container mx-auto py-8">
    <h1 class="text-center text-3xl font-bold mb-6">Promote your business in multiple countries</h1>

    <!-- Filter Buttons -->
    <div class="flex justify-center space-x-4 mb-8">
        <button class="continent-btn bg-gray-200 px-4 py-2 rounded" data-continent="all">All</button>
        @foreach(array_keys($countries) as $continent)
            <button class="continent-btn bg-gray-200 px-4 py-2 rounded" data-continent="{{ strtolower($continent) }}">
                {{ $continent }}
            </button>
        @endforeach
    </div>

    <!-- Countries List -->
    <div id="countries-list">
        @foreach($countries as $continent => $countriesList)
            <div class="continent-section mb-8" data-continent="{{ strtolower($continent) }}">
                <h2 class="text-xl font-semibold mb-4">{{ $continent }}</h2>
                <div class="grid grid-cols-3 gap-4">
                    @foreach($countriesList as $country)
                        <div class="border border-gray-300 p-4 flex items-center justify-center">
                            <span class="mr-2 text-2xl">{{ $country['flag'] }}</span>
                            <span>{{ $country['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Script to Toggle Continents -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.continent-btn');
        const sections = document.querySelectorAll('.continent-section');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const continent = this.getAttribute('data-continent');

                // Show/Hide Sections
                sections.forEach(section => {
                    if (continent === 'all' || section.getAttribute('data-continent') === continent) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
