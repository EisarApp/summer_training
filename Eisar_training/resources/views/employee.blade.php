<html dir="rtl">

<head>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link src="https://tailwind.ink?p=12.f3f8f9daf1faafe0f57cc2e7479ed3357dc02d62a9254a871b3260101f3ff6f9fbe3f0fdc5d9fa9db5f3798eea6269e3514dd63e39b62b2788181956f9fafbedeffbdad4f8baaeefa485e38c60da7344c95733a63c2377221748fdfcfbfaeff2f6cbe6ec9ecbea6facdf4b91c93270a22652771b3549111cfdfcfafbf0edf8cfdaeea1b5eb718dde4e6bc7344ca02738741b25471114fcfbf8faf0d9f5d7b1e7ae7dda804fc55d30a8431f8232195a231339150cfbfaf4f9f0bdf1dd81dcb84fbd8e2a9e6f1580550d62400c432c0b2c1b08faf9f3f8f0b5eedf76d4bd46ac94248976116e5d0b54450a392f09271d08f2f6f3dff0e6b5e6c57acb9435ab6225903c1f7a2b1d5d2415401d0f2717eff6f5d0f0f49be6e661cbc827aca21c907c197963175d4d123f390c272afbfaf4f9f0bdf1dd81dcb84fbd8e2a9e6f1580550d62400c432c0b2c1b08fbfaf4f9f0bdf1dd81dcb84fbd8e2a9e6f1580550d62400c432c0b2c1b08"
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <input placeholder="Search"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>

            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg">
                    <table class="min-w-full leading-normal text-right">
                        <thead
                            class="border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            <tr>
                                <th class="px-5 py-4">
                                    الرقم 
                                </th>
                                <th class="px-5 py-4">
                                     اسم الموظف
                                </th>
                                <th class="px-5 py-4">
                                     الصلاحيات
                                </th>
                                <th class="px-5 py-4">
                                    المسمى الوظيفي 
                                </th>
                                <th class="px-5 py-4">
                                    القسم
                                </th>
                                <th class="px-5 py-4">
                                    الخطة
                                </th>
                                <th class="px-5 py-4">
                                    ب
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                         12345
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap"> م.هند </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        admin
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        مدرب
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        قسم التدريب والتطوير
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        الخطة  
                                    </p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{-- buttons here --}}
                                    <div class="flex space-x-2 justify-center">
                                        <div>
                                          <button type="button" class="inline-block px-4 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Primary</button>
                                          <button type="button" class="inline-block px-4 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Secondary</button>
                                          <button type="button" class="inline-block px-4 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Success</button>
                                        </div>
                                      </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>