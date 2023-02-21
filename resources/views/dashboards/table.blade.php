<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62d4d8e42a.js" crossorigin="anonymous"></script>
    <title>Tables</title>
    <meta name="description" content="">
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- tailwindcss -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar {
        background: #756300;
      }
      .cta-btn {
        color: linear-gradient(to right, #ffe55c, #ffce2e, #ffc700, #d1b000);
      }
      .upgrade-btn {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .upgrade-btn:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .active-nav-link {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .nav-item:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .account-link:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
              <i class="fa-sharp fa-solid fa-house mr-2"></i>Home
            </button>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="/dashboard" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="/dashboard/table" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Tables
            </a>
            <a href="/dashboard/form" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Forms
            </a>
            <a
            href="#"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
          >
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
          </a>
        </nav>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="/dashboard" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="/dashboard/table" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Tables
                </a>
                <a href="/dashboard/form" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Tables</h1>
                <div class="w-full mt-6">
                    <!-- CRUD -->
                    <p class="flex justify-end mb-5">
                       <a href="#"><i class="fa-solid fa-plus mr-5 text-green-600"> Add</i></a>
                    </p>
                    <!-- end of CRUD -->
                    <p class="text-xl flex items-center pb-3">
                        <i class="fas fa-list mr-3"></i> Available
                    </p>
                    
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Property Type</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Location</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Model</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">price</td>
                                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Updte</td>
                                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Delete</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                    
                                    <!-- update -->
                                    <td class="text-center py-3 px-4 text-white leading-tight uppercase rounded shadow-md hover:bg-yellow-400 hover:shadow-lg active:bg-yellow-500 active:shadow-lg transition duration-150 ease-in-out"
                                    data-bs-toggle="modal"
                                    data-bs-target="#ModalUpdate"><a href="#"><i class="fa-solid fa-pen-to-square text-blue-500"></i></td></a>

                                    <div
                                    class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                    id="exampleModalCenter"
                                    tabindex="-1"
                                    aria-labelledby="exampleFormControlInput1"
                                    aria-modal="true"
                                    role="dialog"
                                  >
                                    <div
                                      class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none"
                                    >
                                      <div
                                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
                                      >
                                        <div
                                          class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
                                        >
                                          <h5
                                            class="text-xl font-medium leading-normal text-gray-800"
                                            id="exampleModalScrollableLabel"
                                          >
                                            Update
                                          </h5>
                                          <button
                                            type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                          ></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <div
                                    class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                    id="ModalUpdate"
                                    tabindex="-1"
                                    aria-labelledby="exampleFormControlInput1"
                                    aria-modal="true"
                                    role="dialog"
                                  >
                                    <div
                                      class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none"
                                    >
                                      <div
                                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
                                      >
                                        <div
                                          class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
                                        >
                                          <h5
                                            class="text-xl font-medium leading-normal text-gray-800"
                                            id="ModalUpdateLabel"
                                          >
                                            <img src="/Capstone_01/images/logo.png" alt="" class="w-10 h-10" />
                                          </h5>
                                          <button
                                            type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                          ></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                          <form>
                                            <p class="mt-1 mb-4 pt-6 text-center font-semibold">
                                              Update Property
                                            </p>
                                            <!-- Property type -->
                                            <div class="mb-4">
                                              <input
                                                type="text"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1"
                                                placeholder="Property Type"
                                              />
                                            </div>
                                            <!-- Location -->
                                            <div class="mb-4">
                                              <input
                                                type="text"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1"
                                                placeholder="Location"
                                              />
                                            </div>
                                            <!-- Model -->
                                            <div class="mb-4">
                                              <input
                                                type="text"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1"
                                                placeholder="Model"
                                              />
                                            </div>
                                            <!-- Price -->
                                            <div class="mb-4">
                                              <select
                                                name=""
                                                id=""
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                              >
                                                <option value="">₱ 10,000</option>
                                                <option value="">₱ 15,000</option>
                                                <option value="">₱ 20,000</option>
                                                <option value="">₱ 25,000</option>
                                              </select>
                                            </div>
                                            <!-- Description -->
                                            <div class="mb-4">
                                              <input
                                                type="text"
                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1"
                                                placeholder="Description"
                                              />
                                            </div>
                                          </form>
                                        </div>
                                        <div
                                          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md"
                                        >
                                          <button
                                            type="button"
                                            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                            data-bs-dismiss="modal"
                                          >
                                            Close
                                          </button>
                                          <button
                                            type="button"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                                          >
                                            Save changes
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                    <!-- delete -->
                                    <td class="text-center py-3 px-4 text-white leading-tight uppercase rounded shadow-md hover:bg-yellow-400 hover:shadow-lg active:bg-yellow-500 active:shadow-lg transition duration-150 ease-in-out"
                                    data-modal-target="popup-modal" data-modal-toggle="popup-modal"><a href="#"><i class="fa-solid fa-trash text-red-500"></i></td></a>

                                      <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                          <div class="relative w-full h-full max-w-md md:h-auto">
                                              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                                      <span class="sr-only">Cancel</span>
                                                  </button>
                                                  <div class="p-6 text-center">
                                                      <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                                      <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                          Yes, I'm sure
                                                      </button>
                                                      <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Rented
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Property Type</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Location</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Model</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">Lian</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Smith</td>
                                    <td class="py-4 px-6 border-b border-grey-light">622322662</td>
                                    <td class="py-4 px-6 border-b border-grey-light">jonsmith@mail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>       
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Sold
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Property Type</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Location</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Model</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">Lian</td>
                                    <td class="py-4 px-6 border-b border-grey-light">Smith</td>
                                    <td class="py-4 px-6 border-b border-grey-light">622322662</td>
                                    <td class="py-4 px-6 border-b border-grey-light">jonsmith@mail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>       
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Employee

                        <!-- ADD EMPLOYEE -->

                        <td class="text-center py-3 px-4 text-white leading-tight uppercase rounded shadow-md hover:bg-yellow-400 hover:shadow-lg active:bg-yellow-500 active:shadow-lg transition duration-150 ease-in-out"
                                    data-modal-target="addemployee" data-modal-toggle="addemployee"><a href="#"><i class="fa-solid fa-trash text-red-500"></i></td></a>

                                      <div id="addemployee" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                          <div class="relative w-full h-full max-w-md md:h-auto">
                                              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addemployee">
                                                      <span class="sr-only">Cancel</span>
                                                  </button>
                                                  <div class="p-6 text-center">
                                                      <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                                      <button data-modal-hide="addemployee" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                          Yes, I'm sure
                                                      </button>
                                                      <button data-modal-hide="addemployee" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                         <!-- END OF ADD EMPLOYEE -->
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr class="">
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Rol
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Created at
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                    alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Vera Carpenter
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            Jan 21, 2020
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Active</span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="#" class="underline">WonderBoys</a>.
            </footer>
        </div>
        
    </div>

    <!-- tailwindcss -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
