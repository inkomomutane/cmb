{{ section:seo }}
    <title>{{ title ?? '' }}</title>
    <meta name="content" content="{{ meta_content }}" />
{{ /section:seo }}

{{ section:content }}
    {{ partial:pages/partials/header }}
    {{ partial:pages/partials/hero }}
    <section class="bg-green-50 dark:bg-gray-900">
        <div class="py-8 px-8 mx-auto max-w-screen-xl sm:py-16 lg:px-16">
            <div class="max-w-screen-md mb-8 lg:mb-16 mx-auto" data-aos="fade-up" data-aos-offset="10"
                data-os-delay="50">
                <h2
                    class="mb-4 text-3xl tracking-tight font-medium text-gray-900 dark:text-white text-center uppercase">
                    Serviços procurados</h2>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-4 md:space-y-0">
                {{ loop from="1" to="3" }}
                    <div class="bg-white p-6 hover:cursor-pointer hover:shadow hover:bg-green-500 group rounded aos-animate"
                        data-aos="fade-up" data-aos-offset="10" data-os-delay="{{ ((index + 1) * 100) }}">
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12 dark:bg-green-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-green-900 group-hover:text-white" data-aos="fade-up"
                            data-aos-offset="0" data-os-delay="200">Serviço</h3>
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-white line-clamp-3" data-aos="fade-up"
                            data-aos-offset="0" data-os-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente perferendis totam assumenda, optio explicabo earum impedit enim facere officia rerum qui exercitationem dolorem odit illum quam maxime, iste dolorum aut?</p>
                    </div>
                {{ /loop }}
            </div>
        </div>
    </section>
    <section class="bg-green-100 dark:bg-gray-900">
        <div class="py-8 px-8 mx-auto max-w-screen-xl sm:py-16 lg:px-16">
            <div class="max-w-screen-md mb-8  mx-auto" data-aos="fade-up" data-aos-offset="10" data-os-delay="50">
                <h2
                    class="mb-4 text-3xl tracking-tight font-medium text-gray-900 dark:text-white text-center uppercase">
                    Notícias</h2>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-3 lg:grid-cols-4 md:gap-4 md:space-y-0">
                {{ loop from="1" to="4" }}

                    <div class="bg-white hover:cursor-pointer hover:shadow-2xl hover:shadow-green-400/10 group  aos-animate"
                        data-aos="fade-up" data-aos-offset="10" data-os-delay="{{ ((index + 1) * 100) }}">

                            <img src="https://scontent-jnb1-1.xx.fbcdn.net/v/t39.30808-6/369096960_293264323282100_6951380157108475783_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=FWO-a4X4sH4AX-rMBQe&_nc_ht=scontent-jnb1-1.xx&oh=00_AfBD3LN_txltwa1Ziy1hxHgd34gQJZyrE8fB8NuRi6hb0w&oe=64F29A21"
                                alt="" srcset="" class="w-full h-52 object-cover">
                            <div class="p-4">
                                <h2
                                    class="inline-flex line-clamp-2 text-sm font-semibold  text-green-950 drop-shadow-sm ">
                                    Festividades do dia da Cidade da Beira</h2>
                                <div class="py-2">
                                    <p class="line-clamp-3 text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ipsam
                                        voluptate
                                        accusamus ipsa neque. Itaque quae saepe quod tempora praesentium a ut nobis
                                        soluta
                                        possimus cupiditate, voluptates asperiores, ex at.
                                    </p>
                                </div>
                                <div class="inline-flex w-full justify-between items-start">
                                    <a href="#"
                                    class="inline-flex text-sm font-semibold text-green-500  hover:underline hover:underline-offset-4 w-fit">
                                    Ler mais</a>
                                    <span class="text-xs bg-green-500 px-2 py-[2px] inline-flex  text-white font-semibold">
                                        Agosto 2023
                                    </span>
                                </div>

                            </div>
                    </div>
                {{ /loop }}
            </div>
        </div>
    </section>

     {{ partial:pages/partials/footer }}
{{ /section:content }}
