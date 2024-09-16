<header class="sticky top-0 flex w-full bg-white xl:z-[999] max-xl:z-[9999] drop-shadow-1 dark:bg-box-dark dark:drop-shadow-none min-h-[70px]">
         <!-- Navigation -->
         <div class="flex flex-1 nav-wrap md:ps-[20px] ps-[30px] pe-[30px] max-xs:ps-[15px] max-xs:pe-[15px] bg-white dark:bg-box-dark">
            <!-- Header left menu -->

            <ul class="flex items-center mb-0 list-none nav-left ps-0 gap-x-[14px] gap-y-[9px]">
               <!-- Navigation Items -->
               <li class="xl:hidden xl:[&.flex]:flex" id="topMenu-logo">
                  <div class="flex md:w-[190px] xs:w-[170px] max-xs:w-[100px] max-md:pe-[30px] max-xs:pe-[15px] border-e border-[#edf2f9] dark:border-box-dark-up logo-wrapper items-center h-[71px] dark:bg-box-dark-up">
                     <a href="index.html" class="block text-center">
                        <div class="logo-full">
                           <!-- logo -->
                           <img class="md:ps-[15px] dark:hidden" src="{{ asset('img/logo-sahabat.png') }}" alt="Logo">
                           <img class="md:ps-[15px] hidden dark:block" src="{{ asset('img/logo-sahabat.png') }}" alt="Logo">
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <a class="flex items-center justify-center sm:min-w-[40px] sm:w-[40px] sm:h-[40px] min-w-[34px] h-[34px] rounded-full bg-transparent hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark dark:hover:bg-box-dark-up group transition duration-200 ease-in-out text-[#525768] dark:text-subtitle-dark max-md:dark:hover:bg-box-dark-up sm:text-[20px] text-[19px] cursor-pointer xl:[&.hide]:hidden max-md:bg-normalBG max-md:dark:bg-box-dark-up max-md:dark:hover:text-subtitle-dark" id="slim-toggler">
                     <i class="uil uil-align-center-alt text-current [&.is-folded]:hidden flex items-center"></i>
                  </a>
               </li>
            </ul>

            <!-- Header Center menu -->

            <div class="relative ps-[30px] hexadash-top-menu hidden xl:[&.flex]:flex" id="topMenuWrapper">
               <ul class="flex flex-wrap items-center 2xl:gap-y-[15px] gap-x-[34px]">
                  <li class="has-subMenu">
                     <a href="#" class="active">Dashboard {{ Auth::user()->role}}</a>
                     <ul class="subMenu">
                        <li class="active">
                           <a href="demo-six.html">Dashboard</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-subMenu">
                     <a href="#" class="">Apps</a>
                     <ul class="subMenu">
                        <li>
                           <ul>
                              <li class="has-subMenu-left">
                                 <a href="#" class="">
                                    <span class="nav-icon uil uil-envelope"></span>
                                    <span class="menu-text">Email</span>
                                 </a>
                                 <ul class="subMenu">
                                    <li>
                                       <a href="inbox.html" class="">Inbox</a>
                                    </li>
                                    <li>
                                       <a href="email.html" class="">Read
                                          Email</a>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="chat.html" class="">
                                    <span class="nav-icon uil uil-message"></span>
                                    <span class="menu-text">Chat</span>
                                    <span class="text-white bg-success absolute -translate-y-2/4 text-[10px] font-bold min-w-[18px] h-[18px] flex items-center justify-center leading-none rounded-full end-[52px] top-2/4">3</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="calendar.html" class="">
                                    <span class="nav-icon uil uil-calender"></span>
                                    <span class="menu-text">Calendar</span>
                                 </a>
                              </li>
                              <li class="has-subMenu-left">
                                 <a href="#" class="">
                                    <span class="nav-icon uil uil-exchange"></span>
                                    <span class="menu-text">Import & export</span>
                                 </a>
                                 <ul class="subMenu">
                                    <li>
                                       <a class="" href="contact-1.html">Import</a>
                                    </li>
                                    <li>
                                       <a class="" href="contact-2.html">Export</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="has-subMenu">
                     <a href="#" class="">Features</a>
                     <ul class="subMenu">
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-chart"></span>
                              <span class="menu-text">Charts</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a class="" href="charts.html">Apex Chart</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-document-layout-left"></span>
                              <span class="menu-text">Froms</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a class="" href="form.html">Basics</a>
                              </li>
                              <li>
                                 <a class="" href="form-elements.html">Elements</a>
                              </li>
                              <li>
                                 <a class="" href="form-layouts.html">Layouts</a>
                              </li>
                              <li>
                                 <a class="" href="form-components.html">Components</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-square-shape"></span>
                              <span class="menu-text">Wizards</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a href="create-account.html" class="">Wizard
                                    1</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-icons"></span>
                              <span class="menu-text">Icons</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a href="unicon-icons.html" class="">Unicon
                                    Icons</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="editors.html" class="">
                              <span class="nav-icon uil uil-font"></span>
                              <span class="menu-text">Editors</span>
                           </a>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-map"></span>
                              <span class="menu-text">Maps</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a href="vector-map.html" class="">Vector
                                    Maps</a>
                                 <a href="google-map.html" class="">Google
                                    Maps</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-table"></span>
                              <span class="menu-text">Table</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a class="" href="charts.html">Basic table</a>
                              </li>
                              <li>
                                 <a class="" href="charts.html">Data table</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="mega-item has-subMenu">
                     <a href="#" class="">Pages</a>
                     <ul class="megaMenu-wrapper megaMenu-small">
                        <li>
                           <ul>
                              <li>
                                 <a href="change-log.html" class="">
                                    <span class="menu-text">Changelog</span>
                                    <span class="text-white bg-success absolute -translate-y-2/4 text-[10px] font-bold min-w-[18px] h-[18px] flex items-center justify-center leading-none rounded-[20px] end-[52px] top-2/4 px-[6px]">1.0.2</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="gallery.html" class="">
                                    <span class="menu-text">Gallery 1</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="pricing.html" class="">
                                    <span class="menu-text">Pricing</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="faq.html" class="">
                                    <span class="menu-text">FAQ's</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="blank.html" class="">
                                    <span class="menu-text">Blank Page</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="knowledge-base.html" class="">knowledge base</a>
                              </li>
                              <li>
                                 <a href="blog.html" class="">Blog</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul>
                              <li>
                                 <a href="blog-two.html" class="">Blog two</a>
                              </li>
                              <li>
                                 <a href="blog-three.html" class="">Blog three</a>
                              </li>
                              <li>
                                 <a href="blog-details.html" class="">Blog details</a>
                              </li>
                              <li>
                                 <a href="terms.html" class="">
                                    <span class="menu-text">Terms & Conditions</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="maintenance.html" class="">
                                    <span class="menu-text">Maintenance</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="404.html" class="">
                                    <span class="menu-text">404</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="coming-soon.html" class="">
                                    <span class="menu-text">Coming Soon</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="log-in.html" class="">
                                    <span class="menu-text">Log In</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="sign-up.html" class="">
                                    <span class="menu-text">Sign Up</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="reset.html" class="">
                                    <span class="menu-text">Forget password</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="mega-item has-subMenu">
                     <a href="#" class="">Components</a>
                     <ul class="megaMenu-wrapper megaMenu-wide">
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="alerts.html">Alert</a>
                              </li>
                              <li>
                                 <a class="" href="avatars.html">Avatar</a>
                              </li>
                              <li>
                                 <a class="" href="badges.html">Badge</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="buttons.html">Button</a>
                              </li>
                              <li>
                                 <a class="" href="cards.html">Cards</a>
                              </li>
                              <li>
                                 <a class="" href="breadcrumbs.html">Breadcrumb</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="carousel.html">Carousel</a>
                              </li>
                              <li>
                                 <a class="" href="checkbox.html">Checkbox</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="collapse.html">Collapse</a>
                              </li>
                              <li>
                                 <a class="" href="comments.html">typography</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>

            <!-- Header right menu -->

            <div class="flex items-center ms-auto py-[15px] sm:gap-x-[25px] max-sm:gap-x-[15px] gap-y-[15px] relative">
               <button type="button" class="flex xl:hidden items-center text-[22px] text-[#a0a0a0] dark:text-subtitle-dark min-h-[40px]" id="author-dropdown">
                  <i class="uil uil-ellipsis-v text-[18px]"></i>
               </button>
               <ul id="right-ellipsis-trigger" class="xl:flex hidden items-center justify-end flex-auto mb-0 list-none ps-0 sm:gap-x-[25px] max-sm:gap-x-[15px] gap-y-[15px] max-xl:absolute max-xl:z-[1000] max-xl:m-0 max-xl:rounded-lg max-xl:border-none max-xl:bg-white max-xl:bg-clip-padding max-xl:text-left max-xl:shadow-lg max-xl:dark:bg-neutral-700 max-xl:[&.active]:flex max-xl:end-0 max-xl:px-[20px] max-sm:px-[15px] max-xl:py-[10px] max-xl:top-[70px]">
                  <li>

                     <div class="relative" data-te-dropdown-ref>
                        <button type="button" id="author-dropdown" data-te-dropdown-toggle-ref aria-expanded="false" class="flex items-center me-1.5 text-body dark:text-subtitle-dark text-sm font-medium capitalize rounded-full md:me-0 group whitespace-nowrap">
                           <span class="sr-only">Open user menu</span>
                           <!-- <img class="min-w-[32px] w-8 h-8 rounded-full xl:me-2" src="{{ asset('vendor/hexa/images/avatars/thumbs.png') }}" alt="user photo"> -->
                           <span class="hidden xl:block">{{Auth::user()->name }}</span>
                           <i class="uil uil-angle-down text-light dark:text-subtitle-dark text-[18px] hidden xl:block"></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down  [&[data-te-dropdown-show]]:block" aria-labelledby="author-dropdown" data-te-dropdown-menu-ref>
                           <div class="min-w-[310px] max-sm:min-w-full pt-4 px-[15px] py-[12px] bg-white dark:bg-box-dark shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4">
                              <figure class="flex items-center text-sm rounded-[8px] bg-section dark:bg-box-dark-up py-[20px] px-[25px] mb-[12px] gap-[15px]">
                                 
                                 <figcaption>
                                    <div class="text-dark dark:text-title-dark mb-0.5 text-sm">{{ Auth::user()->name }}</div>
                                    <div class="mb-0 text-xs text-body dark:text-subtitle-dark">{{ Auth::user()->role}}</div>
                                 </figcaption>
                              </figure>
                              <ul class="m-0 pb-[10px] overflow-x-hidden overflow-y-auto scrollbar bg-transparent max-h-[230px]">

                                 <!-- <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-user"></i>
                                          Profile
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-setting"></i>
                                          Settings
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-key-skeleton"></i>
                                          Billing
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-users-alt"></i>
                                          Activity
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-bell"></i>
                                          Help
                                       </button>
                                    </div>
                                 </li> -->
                              </ul>
                              <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit" class="flex items-center justify-center text-sm font-medium bg-normalBG dark:bg-box-dark-up h-[50px] text-light hover:text-primary dark:hover:text-subtitle-dark dark:text-title-dark w-full rounded-b-6 gap-[6px]" href="logout">
                                 <i class="uil uil-sign-out-alt"></i> Keluar </button>
                              </form>
                           </div>
                        </div>
                     </div>


                  </li>
               </ul>
            </div>

         </div>
         <!-- End: Navigation -->
      </header>