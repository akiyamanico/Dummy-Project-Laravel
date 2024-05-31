@extends('template/template')

@section('title')
Halaman Home
@endsection
@section('content')
<style>
  .gradient-overlay::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 20), transparent);
    z-index: 50;
  }

  @media (prefers-color-scheme: light) {
    .gradient-overlay::before {
      background: linear-gradient(to top, rgba(255, 255, 255, 20), transparent);
    }
  }
</style>


<div class="dark:bg-black">

  <section class="text-gray-700 body-font">
    <div class="relative gradient-overlay top-0">
      
      <img src="gambar/haji-masjd-haram.jpg" class="w-full h-full object-cover">
      <div class="absolute inset-0 flex flex-col items-center justify-center z-50 x-25 object-right">
            <h2 class="text-white text-9xl pb-2 font-quicksand">Travel Haji Gabut</h2>
            <h2 class="text-white text-5xl font-quicksand">Semoga Berkah</h2>
        </div>
    </div>
    
    <div class="container p-3 mx-auto mt-5 rounded-md">

      <div class="container mx-auto flex px-5 py-12 mt-82 justify-center items-center">
        <div class="lg:flex-grow md:w-1/2  mb-16 md:mb-0 flex flex-col justify-center">

          <h1 class="title-font text-5xl mb-4  font-bold text-gray-900 text-center font-helmed dark:text-white">Lorem
            Ipsum
          </h1>
          <p class="mb-8 font-hellight dark:text-white text-2xl leading-relaxed text-center">Lorem Ipsum is simply dummy
            text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
  </section>
  <div class="container p-3 mx-auto mt-5 rounded-md">
    <div
      class="overflow-hidden rounded rounded-lg shadow-xl bg-white dark:bg-gradient-to-b from-black to-gray-900 sm:py-12">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
          <div class="lg:pr-8 lg:pt-4">
            <div class="lg:max-w-lg">
              <h2 class="text-base font-semibold leading-7 text-blue-200">Lorem ipsum</h2>
              <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-white font-helmed">A
                better workflow</p>
              <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-white font-hellight">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                blanditiis ratione.</p>
              <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-gray-900 dark:text-blue-200">
                    Having more interest in backend programming.
                  </dt>
                  <dd class="inline dark:text-gray-500 font-hellight">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis
                    ratione.</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-gray-900 dark:text-blue-200">
                    Also can do fullstack.
                  </dt>
                  <dd class="inline dark:text-gray-500 font-hellight">Anim aute id magna aliqua ad ad non deserunt sunt.
                    Qui irure qui lorem cupidatat commodo.</dd>
                </div>
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-gray-900 dark:text-blue-200">
                    And many more!
                  </dt>
                  <dd class="inline dark:text-gray-500 font-hellight">Ac tincidunt sapien vehicula erat auctor
                    pellentesque rhoncus. Et magna sit morbi lobortis.</dd>
                </div>
              </dl>
            </div>
          </div>
          <img src="gambar/tasbih.jpg" alt="Product screenshot"
            class="w-[48rem]  rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0">
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
</div>
@include('navbar')
@include('footer')
@endsection