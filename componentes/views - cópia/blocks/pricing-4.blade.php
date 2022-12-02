<section x-data="{ billing: 'Monthly', basic: {'Monthly' : '49', 'Yearly' : '500' }, pro: {'Monthly' : '89', 'Yearly' : '900' }, cycle: {'Monthly' : 'mo', 'Yearly' : 'yr' } }" class="bg-white tails-selected-element" data-tails-scripts="//unpkg.com/alpinejs" contenteditable="true">
  <div class="px-6 py-20 mx-auto bg-white max-w-7xl lg:px-8">
      <div class="mb-6 text-center md:mb-8">
          <h2 class="mb-2 text-3xl font-bold text-gray-800 md:text-4xl lg:text-5xl md:mb-4">Pricing Made Simple.</h2>
          <p class="text-lg text-gray-600 xl:text-xl">Simple pricing for companies of all sizes.</p>
      </div>

      <div class="flex justify-center mb-8 md:mb-16 lg:mb-20">
          <nav class="relative inline-flex overflow-hidden text-sm border border-gray-300 rounded-lg" data-rounded="rounded-lg">
              <div class="absolute w-1/2 h-full transition-all duration-150 ease-out bg-gradient-to-br from-indigo-600 to-indigo-700 left-0" :class="{ 'left-0' : billing == 'Monthly', 'left-1/2' : billing == 'Yearly' }" data-primary="indigo-600"></div>
              <button @click="billing='Monthly'" class="relative z-20 px-5 py-3 font-bold focus:outline-none text-white" :class="{ 'text-white' : billing == 'Monthly', 'text-gray-600 hover:text-gray-700' : billing == 'Yearly' }">
                  Monthly Plan
              </button>
              <button @click="billing='Yearly'" class="relative z-20 px-6 py-3 font-bold focus:outline-none text-gray-600 hover:text-gray-700" :class="{ 'text-white' : billing == 'Yearly', 'text-gray-600 hover:text-gray-700' : billing == 'Monthly' }">
                  Yearly Plan
              </button>
          </nav>
      </div>

      <div class="grid items-start md:grid-cols-3 gap-x-8 gap-y-8">
          <div class="overflow-hidden bg-white border-2 border-indigo-100 rounded-lg md:border-gray-100" data-primary="indigo-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
              <div class="p-5 md:p-8">
                  <div class="flex items-baseline justify-between mb-4">
                      <h4 class="text-xl font-bold lg:text-2xl">Free Plan</h4>
                      <span class="text-xl font-bold lg:text-2xl">$0</span>
                  </div>
                  <p class="mb-6 text-lg text-gray-500">Get started with our free plan.</p>
                  <a href="#" class="block px-5 py-3 font-bold text-center border rounded-lg lg:px-8 bg-gradient-to-br hover:from-indigo-500 hover:to-indigo-700 hover:text-white" data-primary="indigo-600" data-rounded="rounded-lg">Start for free</a>
              </div>
              <div class="p-5 border-t border-gray-200 md:p-8 bg-gray-50">
                  <ul class="space-y-4 text-lg text-gray-600">
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>10,000 Credits</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Email Support</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>3 Users</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Analytics &amp; Insights</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Automated Reports</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Premium Tools</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Integrations</span>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="overflow-hidden bg-white border-2 border-indigo-100 rounded-lg md:transform md:-translate-y-10 md:-mb-10 md:shadow-md md:hover:shadow-xl md:transition-all md:duration-500 md:border" data-primary="indigo-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
              <div class="p-5 md:p-8">
                  <div class="flex items-baseline justify-between mb-4">
                      <h4 class="text-xl font-bold lg:text-2xl">Pro Plan</h4>
                      <span class="text-xl font-bold lg:text-2xl">$<span x-text="pro[billing]">89</span><span class="ml-1 text-xs font-light">/ <span x-text="cycle[billing]">mo</span></span></span>
                  </div>
                  <p class="mb-6 text-lg text-gray-500">Level-up your game with a pro plan</p>
                  <a href="#" class="block px-5 py-3 font-bold text-center text-white border rounded-lg lg:px-8 bg-gradient-to-br from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-700" data-primary="indigo-600" data-rounded="rounded-lg">Start for free</a>
              </div>
              <div class="p-5 border-t border-gray-200 md:p-8 bg-gray-50">
                  <ul class="space-y-4 text-lg text-gray-600">
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>400,000 Credits</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>24/7 Customer Support</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Unlimited Users</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Analytics &amp; Insights</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Automated Reports</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Premium Tools</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Full Integrations</span>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="overflow-hidden bg-white border-2 border-indigo-100 rounded-lg md:border-gray-100" data-primary="indigo-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
              <div class="p-5 md:p-8">
                  <div class="flex items-baseline justify-between mb-4">
                      <h4 class="text-xl font-bold lg:text-2xl">Basic Plan</h4>
                      <span class="text-xl font-bold lg:text-2xl">$<span x-text="basic[billing]">49</span><span class="ml-1 text-xs font-light">/ <span x-text="cycle[billing]">mo</span></span></span>
                  </div>
                  <p class="mb-6 text-lg text-gray-500">Start integrating the basic plan</p>
                  <a href="#" class="block px-5 py-3 font-bold text-center border rounded-lg lg:px-8 bg-gradient-to-br hover:from-indigo-500 hover:to-indigo-700 hover:text-white" data-primary="indigo-600" data-rounded="rounded-lg">Start for free</a>
              </div>
              <div class="p-5 border-t border-gray-200 md:p-8 bg-gray-50">
                  <ul class="space-y-4 text-lg text-gray-600">
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>200,000 Credits</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Chat Support</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>10 Users</span>
                      </li>
                      <li class="flex items-center space-x-2">
                          <div class="w-6 h-6">
                              <svg class="text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                          </div>
                          <span>Analytics &amp; Insights</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Automated Reports</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Premium Tools</span>
                      </li>
                      <li class="flex items-center space-x-2 opacity-50">
                          <div class="w-6 h-6">
                              <svg class="text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                          </div>
                          <span>Integrations</span>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>