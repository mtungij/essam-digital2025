<div>
  <div class="w-full p-4 pt-4 bg-yellow-300 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex items-center justify-between mb-4">
          <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Info</h5>
          <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
              View all
          </a>
     </div>
     <div class="flow-root">
          <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
              <li class="py-2 sm:py-4">
                  <div class="flex items-center">
                      <div class="flex-shrink-0">
                          <img class="w-8 h-8 rounded-full" src="{{ asset('assets/diversity.png') }}" alt="Diversity">
                      </div>
                      <div class="flex-1 min-w-0 ms-4">
                          <p class="text-sm font-medium text-gray-900 truncate uppercase dark:text-white">
                              Total Today  Orders
                          </p>
                      
                          
                      </div>
                      <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        10
                      </div>
                  </div>
              </li>
              <li class="py-2 sm:py-4">
                  <div class="flex items-center ">
                      <div class="flex-shrink-0">
                          <img class="w-8 h-8 rounded-full" src="{{asset('assets/money.png')}}" alt="money">
                      </div>
                      <div class="flex-1 min-w-0 ms-4">
                          <p class="text-sm font-medium text-gray-900 truncate uppercase dark:text-white">
                             Full Paid Orders
                          </p>
                          
                        
                      </div>
                      <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                          100
                      </div>
                  </div>
              </li>
              <li class="py-2 sm:py-4">
                  <div class="flex items-center">
                      <div class="flex-shrink-0">
                          <img class="w-8 h-8 rounded-full" src="{{asset('assets/deposit.png')}}" alt="deposit">
                      </div>
                      <div class="flex-1 min-w-0 ms-4">
                          <p class="text-sm font-medium text-gray-900 uppercase truncate dark:text-white">
                              Waliotoa Akiba Leo
                          </p>
  
                         
                         
                      </div>
                      <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                          500
                      </div>
                  </div>
              </li>
             
            
          </ul>
     </div>
  </div>
  
  
  <div class="items-center justify-between mt-3 p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-white">Today Profit</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{number_format($this->TotalAmount)}}</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
               
              </span>
              
            </p>
          </div>
          <div class="w-full" id="week-signups-chart"></div>
        </div>
  
  
  
  <div class="items-center justify-between mt-3 p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-white">Today Payment</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">100000</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
               
              </span>
              
            </p>
          </div>
          <div class="w-full" id="week-signups-chart"></div>
        </div>
  
  
        <div class="items-center justify-between mt-3 p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-white">Today Debts</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">500</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
               
              </span>
              
            </p>
          </div>
          <div class="w-full" id="week-signups-chart"></div>
        </div>
  
  
  <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
        <div class="items-center justify-between p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-bold text-gray-500 uppercase dark:text-white">Today Expenses</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">25000</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
               
              </span>
              
            </p>
          </div>
          <div class="w-full" id="new-products-chart"></div>
        </div>
        <div class="items-center justify-between p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Today Prepaid</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{number_format( $this->TodayProfit)}}</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
                
              </span>
             
            </p>
          </div>
          <div class="w-full" id="week-signups-chart"></div>
        </div>
       
      </div>
  
      <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
        <div class="items-center justify-between p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-bold text-gray-500 uppercase dark:text-white">Today Completed orders</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">800</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
               
              </span>
              
            </p>
          </div>
          <div class="w-full" id="new-products-chart"></div>
        </div>
        <div class="items-center justify-between p-4 bg-yellow-300 border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
          <div class="w-full">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total  Uncompleted orders</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">700</span>
            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
              <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                </svg>
                
              </span>
             
            </p>
          </div>
          <div class="w-full" id="week-signups-chart"></div>
        </div>
       
      </div>
  
    
  
   
  </div>
  