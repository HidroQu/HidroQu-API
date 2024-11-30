<x-app-layout>
    <section class="hero bg-primary text-primary-content py-20 md:px-8">
        <div class="hero-content flex-col lg:flex-row-reverse">
            {{-- <div class="hidden lg:block w-full max-w-md bg-slate-300 h-64 rounded-md"></div> --}}
            <img src="{{ asset('mockup1.png') }}" alt="Mockup 1">
            <div>
                <h1 class="text-5xl font-bold">HidroQu</h1>
                <p class="py-6">
                    Smart Hydroponic Solution for Monitoring Crop Health via Leaf Imaging. Identify nutrient
                    deficiencies and optimize your hydroponic cultivation.
                </p>
                <button class="btn btn-secondary">Learn More</button>
                <button class="btn btn-success">Learn More</button>
                <button class="btn btn-neutral">Learn More</button>
            </div>
        </div>
    </section>

    <section id="about" class="bg-base-100 text-base-content py-12">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-4 lg:mb-0 lg:mr-4">
                <h3 class="text-3xl font-bold mb-4">Why HidroQu?</h3>
                <p>
                    Efficient plant health monitoring is crucial for hydroponic cultivation. HidroQu leverages advanced
                    image analysis to identify deficiencies in key nutrients, providing tailored recommendations to
                    enhance crop health and productivity.
                </p>
            </div>
            <div class="lg:w-1/2 border-2 border-dashed border-neutral h-64 w-full flex items-center justify-center">
                <p class="text-center">Image</p>
            </div>
        </div>
    </section>

    {{--    <div class="flex flex-col gap-8 p-8 bg-red-100">
            <div class="bg-primary flex gap-8 p-8">
                <div class="bg-red-100 text-base-content w-12 h-12 flex items-center uppercase font-bold justify-center">1</div>
                <div class="bg-primary text-primary-content w-12 h-12 flex items-center uppercase font-bold justify-center">pr</div>
                <div class="bg-secondary text-secondary-content w-12 h-12 flex items-center uppercase font-bold justify-center">se</div>
                <div class="bg-neutral text-neutral-content w-12 h-12 flex items-center uppercase font-bold justify-center">ne</div>
                <div class="bg-success text-success-content w-12 h-12 flex items-center uppercase font-bold justify-center">su</div>
            </div>
            <div class="bg-secondary flex gap-8 p-8">
                <div class="bg-red-100 text-base-content w-12 h-12 flex items-center uppercase font-bold justify-center">2</div>
                <div class="bg-primary text-primary-content w-12 h-12 flex items-center uppercase font-bold justify-center">pr</div>
                <div class="bg-secondary text-secondary-content w-12 h-12 flex items-center uppercase font-bold justify-center">se</div>
                <div class="bg-neutral text-neutral-content w-12 h-12 flex items-center uppercase font-bold justify-center">ne</div>
                <div class="bg-success text-success-content w-12 h-12 flex items-center uppercase font-bold justify-center">su</div>
            </div>
            <div class="bg-neutral flex gap-8 p-8">
                <div class="bg-red-100 text-base-content w-12 h-12 flex items-center uppercase font-bold justify-center">3</div>
                <div class="bg-primary text-primary-content w-12 h-12 flex items-center uppercase font-bold justify-center">pr</div>
                <div class="bg-secondary text-secondary-content w-12 h-12 flex items-center uppercase font-bold justify-center">se</div>
                <div class="bg-neutral text-neutral-content w-12 h-12 flex items-center uppercase font-bold justify-center">ne</div>
                <div class="bg-success text-success-content w-12 h-12 flex items-center uppercase font-bold justify-center">su</div>
            </div>
            <div class="bg-success flex gap-8 p-8">
                <div class="bg-red-100 text-base-content w-12 h-12 flex items-center uppercase font-bold justify-center">4</div>
                <div class="bg-primary text-primary-content w-12 h-12 flex items-center uppercase font-bold justify-center">pr</div>
                <div class="bg-secondary text-secondary-content w-12 h-12 flex items-center uppercase font-bold justify-center">se</div>
                <div class="bg-neutral text-neutral-content w-12 h-12 flex items-center uppercase font-bold justify-center">ne</div>
                <div class="bg-success text-success-content w-12 h-12 flex items-center uppercase font-bold justify-center">su</div>
            </div>
            <div class="bg-base-100 flex gap-8 p-8">
                <div class="bg-red-100 text-base-content w-12 h-12 flex items-center uppercase font-bold justify-center">5</div>
                <div class="bg-primary text-primary-content w-12 h-12 flex items-center uppercase font-bold justify-center">pr</div>
                <div class="bg-secondary text-secondary-content w-12 h-12 flex items-center uppercase font-bold justify-center">se</div>
                <div class="bg-neutral text-neutral-content w-12 h-12 flex items-center uppercase font-bold justify-center">ne</div>
                <div class="bg-success text-success-content w-12 h-12 flex items-center uppercase font-bold justify-center">su</div>
            </div>
        </div>--}}

    <section id="features" class="py-20 px-6 bg-gradient-to-br from-white to-base-100 text-center">
        <h2 class="text-3xl font-semibold mb-8 text-base-content">How HidroQu Works</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="card bg-base-100 text-base-content border-primary border-dotted border-4 hover:bg-primary hover:text-primary-content hover:-translate-y-2 transition-all duration-300">
                <div class="card-body">
                    <div class="w-full h-48 bg-slate-300 mb-4 rounded-lg"></div>
                    <h3 class="text-xl font-bold mb-2">Advanced Image Analysis</h3>
                    <p class="text-base">Utilizes high-tech image processing to analyze leaf health and detect nutrient
                        deficiencies.</p>
                </div>
            </div>
            <div
                class="card bg-base-100 text-base-content border-primary border-dotted border-4 hover:bg-primary hover:text-primary-content hover:-translate-y-2 transition-all duration-300">
                <div class="card-body">
                    <div class="w-full h-48 bg-slate-300 mb-4 rounded-lg"></div>
                    <h3 class="text-xl font-bold mb-2">Real-time Monitoring</h3>
                    <p class="text-base">Monitor your crops' health in real time with actionable insights delivered
                        instantly.</p>
                </div>
            </div>
            <div
                class="card bg-base-100 text-base-content border-primary border-dotted border-4 hover:bg-primary hover:text-primary-content hover:-translate-y-2 transition-all duration-300">
                <div class="card-body">
                    <div class="w-full h-48 bg-slate-300 mb-4 rounded-lg"></div>
                    <h3 class="text-xl font-bold mb-2">Tailored Recommendations</h3>
                    <p class="text-base">Receive personalized guidance to address specific nutrient deficiencies and
                        boost crop health.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-neutral text-neutral-content py-16">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-4xl font-bold text-center">Download HidroQu</h2>
            <p class="py-4 text-center max-w-xl">Get started with HidroQu and ensure optimal hydroponic productivity
                with our smart monitoring system.</p>
            <button class="btn btn-secondary">Download the App</button>
        </div>
    </section>
</x-app-layout>