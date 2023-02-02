<x-app-layout >
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
        <div class="container mx auto  sm:-mx-6 lg:-mx-8">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Daftar Kandidat</h1>
            <div class="py-5 inline-block">
                <div class="flex">
                    <button
                      type="button"
                      data-mdb-ripple="true"
                      data-mdb-ripple-color="light"
                      class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    >Tambah</button>
                  </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full">
                        <thead class="border-b bg-blue-600">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                              No
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                              Kategori
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                              Foto
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                              Nama
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Aksi
                              </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class=" bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Mark
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Otto
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              @mdo
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @mdo
                              </td>
                          </tr>
                          <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Jacob
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Thornton
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              @fat
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @fat
                              </td>
                          </tr>
                          <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Larry
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              Wild
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                              @twitter
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @twitter
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </x-slot>
   

</x-app-layout>
