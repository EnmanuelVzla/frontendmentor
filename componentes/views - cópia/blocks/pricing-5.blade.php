<section x-data="{ on: false, billing: 'Monthly', basic: {'Monthly' : '19', 'Yearly' : '180'}, pro: {'Monthly' : '49', 'Yearly' : '450' } }" class="relative block w-full pt-20 pb-24 overflow-hidden leading-6 text-left text-indigo-900 bg-white bg-no-repeat bg-cover tails-selected-element" data-tails-scripts="//unpkg.com/alpinejs" contenteditable="true">
  <div class="w-full px-8 mx-auto leading-6 text-left xl:px-12 max-w-7xl">
      <div class="flex flex-wrap justify-center -mx-4 text-center text-indigo-900">
          <div class="relative w-full px-4 leading-6 text-indigo-900 xl:flex-grow-0 xl:flex-shrink-0 md:flex-grow-0 md:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0">
              <h2 class="m-0 font-sans text-4xl font-bold text-center">
                  Simple Membership Pricing
              </h2>
              <div class="mt-2 mb-10 text-center text-gray-700">
                  Choose the plan that best fits your needs. No commitments, cancel anytime.
              </div>
              <div class="flex items-center justify-center space-x-3 text-center">
                  <div class="text-sm font-medium leading-6 text-indigo-900" :class="{ 'text-indigo-900': billing == 'Monthly', 'text-gray-400': billing != 'Monthly' }">
                      Monthly
                  </div>
                  <button type="button" @click="if(billing == 'Monthly'){ billing = 'Yearly'; }else{ billing = 'Monthly' }" :aria-pressed="on.toString()" aria-pressed="false" :class="{ 'bg-gray-200 focus:ring-gray-300': !on, 'bg-green-400 focus:ring-green-500': billing == 'Yearly' }" class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                      <span aria-hidden="true" :class="{ 'translate-x-5': billing == 'Yearly', 'translate-x-0': billing != 'Yearly' }" class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
                  </button>
                  <div class="text-sm font-medium leading-6 text-gray-400" :class="{ 'text-indigo-900': billing == 'Yearly', 'text-gray-400': billing != 'Yearly' }">
                      Yearly
                  </div>
              </div>
          </div>
      </div>
      <div class="relative flex block w-full max-w-4xl mx-auto mt-16 text-indigo-900 select-none">
          <!-- Start Pricing Plan -->
          <div class="relative left-0 flex flex-col block float-left w-full h-full leading-6 text-left md:flex-row">
              <div class="relative flex items-stretch w-full max-w-md px-4 mx-auto leading-6 text-left md:w-1/2">
                  <div class="absolute top-0 left-0 z-10 flex px-3 py-2 ml-8 -mt-2 text-xs font-medium tracking-wide uppercase bg-green-400 rounded-full text-green-50">
                      <svg class="w-4 h-4 mr-1 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                      </svg>Most Popular
                  </div>
                  <div class="relative pb-12 mb-16 overflow-hidden text-indigo-900 border-solid rounded-lg shadow-xl md:mb-0" data-rounded="rounded-lg" data-rounded-max="rounded-full">

                      <img src="https://cdn.devdojo.com/images/december2020/basic.jpeg" class="block w-auto -mx-px leading-6 text-left align-middle border-none">
                      <div class="px-12 mt-12 leading-6 text-left">
                          <div class="flex flex-wrap justify-between mb-5 text-xl text-indigo-900">
                              <div class="text-xl text-left">
                                  Basic Plan <span x-text="billing">Monthly</span>
                              </div>
                              <div class="text-xl text-left">
                                  $<span x-text="basic[billing]">19</span>
                              </div>
                          </div>
                          <div class="text-left text-gray-700">
                              With the basic plan you will gain access to all components and templates. You will also have access to all our tools.
                          </div>
                          <a href="#_" class="flex items-center justify-center w-full h-12 px-2 py-1 mt-8 text-base font-normal leading-normal text-center text-white no-underline bg-pink-500 border border-transparent border-solid rounded cursor-pointer select-none hover:bg-pink-600 focus:shadow-xs focus:no-underline" data-primary="pink-500" data-rounded="rounded">
                              Get Started for Free
                          </a>
                      </div>
                  </div>
              </div>
              <div class="relative flex items-stretch w-full max-w-md px-4 mx-auto leading-6 text-left md:w-1/2">
                  <div class="pb-12 mb-16 overflow-hidden text-indigo-900 rounded-lg shadow-xl md:mb-0" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                      <img src="https://cdn.devdojo.com/images/december2020/enterprise.jpeg" class="block w-auto -mx-px leading-6 text-left align-middle border-none">
                      <div class="px-12 mt-12 leading-6 text-left">
                          <div class="flex flex-wrap justify-between mb-5 text-xl text-indigo-900">
                              <div class="text-xl text-left">
                                  Pro Plan <span x-text="billing">Monthly</span>
                              </div>
                              <div class="text-xl text-left">
                                  $<span x-text="pro[billing]">49</span>
                              </div>
                          </div>
                          <div class="text-left text-gray-700">
                              With the pro plan you will have access to everything in basic and you will also receive a monthly coaching call.
                          </div>
                          <a href="#_" class="flex items-center justify-center w-full h-12 px-2 py-1 mt-8 text-base font-normal text-center text-gray-900 no-underline align-middle bg-transparent border border-gray-300 border-solid rounded cursor-pointer select-none hover:bg-gray-50 focus:shadow-xs focus:no-underline" data-rounded="rounded">
                              Get Started for Free
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Pricing Plans -->


      </div>
  </div>
  <!-- End Max Width Container -->
</section>