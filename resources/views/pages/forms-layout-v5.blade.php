<x-app-layout title="Form Layout v5" is-header-blur="true">
  <main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
      <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
        Form Layout 5
      </h2>
      <div class="hidden h-full py-1 sm:flex">
        <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
      </div>
      <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
        <li class="flex items-center space-x-2">
          <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
            href="#">Forms</a>
          <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </li>
        <li>Form Layout 5</li>
      </ul>
    </div>

    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-12 lg:col-span-4">
        <div class="card p-4 sm:p-5">
          <div class="flex items-center space-x-4">
            <div class="avatar h-14 w-14">

              <img class="rounded-full" src="{{asset('images/200x200.png')}}" alt="avatar" />
            </div>
            <div>
              <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                Travis Fuller
              </h3>
              <p class="text-xs+">Author</p>
            </div>
          </div>
          <ul class="mt-6 space-y-1.5 font-inter font-medium">
            <li>
              <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="http://127.0.0.1:8000/forms/layout-v5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Basic</span>
              </a>
            </li>
            <li>
              <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="http://127.0.0.1:8000/forms/layout-v6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Images</span>
              </a>
            </li>
            <li>
              <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="http://127.0.0.1:8000/forms/layout-v5">
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span>Security</span>
              </a>
            </li>
            <li>
              <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="#">
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span>Apps</span>
              </a>
            </li>
            <li>
              <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all
                            hover:bg-primary
                            hover:text-white
                            focus:bg-white
                            focus:text-white 
                            dark:hover:bg-primary
                            dark:hover:text-white
                            dark:focus:bg-primary
                            dark:focus:text-navy-100" href="#">
                <svg xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span> Privacy & data </span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-span-12 lg:col-span-8">
        <div class="card">
          <div
            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
              Basic
            </h2>
            <form action="{{route('forms/layout-v5')}}" method="post" enctype="multipart/form-data">
              @method('POST') @csrf
              <div class="flex justify-center space-x-2">

                <button type="submit"
                  class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                  Save
                </button>
              </div>
          </div>
          <div class="p-4 sm:p-5">
            <div class="flex flex-col">
              <span class="text-base font-medium text-slate-600 dark:text-navy-100">Avatar</span>
              <div class="avatar mt-1.5 h-20 w-20">
                <img class="mask is-squircle" src="{{asset('images/200x200.png')}}" alt="avatar" />
                <div
                  class="absolute bottom-0 right-0 flex items-center justify-center rounded-full bg-white dark:bg-navy-700">
                  <input type="file" id="wizard-picture"
                    class="btn h-6 w-6 rounded-full border border-slate-200 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:border-navy-500 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 form-control"
                    name="image" required>

                  <!-- <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                          />
                          
                          
                        </svg> -->
                  </input>
                </div>
              </div>
            </div>

            <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Property name </span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter name" type="text" name="property" required />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Full Name </span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter full name" type="text" name="name" required />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Address </span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Address of your Property" type="text" name="address" required />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Email Address </span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter email address" type="text" name="email" />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-envelope text-base"></i>
                  </span>
                </span>
                @error('email')
                <span class="text-tiny+ text-error">{{ $message }}</span>
                @enderror
              </label>

              <label class="block">
                <span>Phone Number</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter phone number" type="text" name="phone" required />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa fa-phone"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Select Country</span>
                <span class="relative mt-1.5 flex">
                <select class="browser-default custom-select form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="country">
                <option selected>Select Country</option>
                <option value="India">India</option>
              </select> 
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Select City </span>
                <span class="relative mt-1.5 flex">
               
                <select class="browser-default custom-select form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="city">
                <option selected>Select City</option>
                <option value="Noida">Noida</option>
                <option value="New Delhi">New Delhi</option>
                <option value="Gurugram">Three</option>
              </select> 
                
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Select State </span>
                <span class="relative mt-1.5 flex">
                <select class="browser-default custom-select form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="state">
                <option selected>Select State</option>
                <option value="Noida">UP</option>
                <option value="New Delhi">Punjab</option>
                <option value="Gurugram">Bihar/option>
              </select> 
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Zip/Postal Code</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter full name" type="text" name="zip" required />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Select Property Type</span>
                <span class="relative mt-1.5 flex">
                <select class="browser-default custom-select form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="type">
                <option selected>Select Property Type</option>
                <option value="Commercial">Commercial</option>
                <option value="Residential">Residential</option>
              </select> 
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Select Property Status</span>
                <span class="relative mt-1.5 flex">
                <select class="browser-default custom-select form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="status">
                <option selected>Select Property Status</option>
                <option value="For Sale">For Sale</option>
                <option value="For Rent">For Rent</option>
              </select> 
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Property Price</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter full name" type="text" name="price" required />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label>Description
            <textarea class="form-control border border-slate-300" id="list_info" rows="4" placeholder="Enter your text here" name="description"></textarea>
            </label>
            </div>
            </form>
            @if(session('success'))
            <span class="text-tiny+ text-error my-5">{{session('success')}}</span>
            @endif
            <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
            <div>
              <h3 class="text-base font-medium text-slate-600 dark:text-navy-100">
                Linked Accounts
              </h3>
              <p class="text-xs+ text-slate-400 dark:text-navy-300">
                Lorem ipsum dolor sit amet consectetur.
              </p>
              <div class="flex items-center justify-between pt-4">
                <div class="flex items-center space-x-4">
                  <div class="h-12 w-12">
                    <img src="{{asset('images/100x100.png')}}" alt="logo" />
                  </div>
                  <p class="font-medium line-clamp-1">
                    Sign In with Google
                  </p>
                </div>
                <button
                  class="btn h-8 rounded-full border border-slate-200 px-3 text-xs+ font-medium text-primary hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-500 dark:text-accent-light dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                  Connect
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-app-layout>