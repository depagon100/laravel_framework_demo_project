<x-app-layout>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white m-auto ">

                    <h1 class=" mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                        SMR List
                    </h1>

                    <!--Title-->

                    <div class="m-auto flex justify-end p-2 ">
                        <a href="{{ route('module.moduleOne') }}"
                           class="px-4 py-2 mb-6 text-white no-underline rounded-full transition ease-in-out delay-150 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300">Create
                            SMR</a>
                    </div>

                    <div id="example_wrapper" class="mb-2 dataTables_wrapper no-footer mr-2">
                        <table id="example" class="stripe hover dataTable no-footer dtr-inline" style="width: 100%;"
                               role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="example"
                                    style="width: 142px;" aria-sort="ascending"
                                    aria-label="Reference No.: activate to sort column descending">Reference No.
                                </th>
                                <th data-priority="2" class="sorting" tabindex="0" aria-controls="example"
                                    style="width: 224px;"
                                    aria-label="Facility: activate to sort column ascending">Facility</th>
                                <th data-priority="3" class="sorting" tabindex="0" aria-controls="example"
                                    style="width: 100px;"
                                    aria-label="Date Created: activate to sort column ascending">Date Created</th>
                                <th data-priority="4" class="sorting" tabindex="0" aria-controls="example"
                                    style="width: 100px;"
                                    aria-label="Date Submitted: activate to sort column ascending">Date Submitted
                                </th>
                                <th data-priority="5" class="sorting" tabindex="0" aria-controls="example"
                                    style="width: 92px;"
                                    aria-label="Status: activate to sort column ascending">Status</th>
                                <th data-priority="6" class="sorting" tabindex="0" aria-controls="example"
                                    style="width: 77px;"
                                    aria-label="Action: activate to sort column ascending">Action</th>
                            </tr>

                            </thead>

                            <tbody>


                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>
                                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                <td>CEO</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>
                                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                </td>
                            </tr>



                            </tbody>

                        </table>

                    </div>
                </div>

                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white ">

                    <h1
                        class="mt-8 mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                        USER ESTABLISHMENTS
                    </h1>

                    {{--     <div class="m-auto flex justify-end p-2 ">
                        <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 mb-6 text-white no-underline
                    rounded-full transition ease-in-out delay-150 bg-indigo-400 hover:-translate-y-1 hover:scale-110
                    hover:bg-blue-500 duration-300">Add Facility</a>
                </div>--}}


                    <div id="example_wrapper" class="mb-2 dataTables_wrapper no-footer mr-2">
                        <table id="example1" class="stripe hover dataTable no-footer dtr-inline" style="width: 100%;"
                               role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 142px;" aria-sort="ascending"
                                    aria-label="Reference No.: activate to sort column descending">EMB Id.</th>
                                <th data-priority="2" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 224px;"
                                    aria-label="Facility: activate to sort column ascending">Establishment</th>
                                <th data-priority="3" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Date Created: activate to sort column ascending">Name</th>
                                <th data-priority="4" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Date Submitted: activate to sort column ascending">Street</th>
                                <th data-priority="5" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 92px;"
                                    aria-label="Status: activate to sort column ascending">Baranggay</th>
                                <th data-priority="6" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 77px;"
                                    aria-label="Action: activate to sort column ascending">City/Muncipality</th>
                                <th data-priority="7" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 77px;"
                                    aria-label="Action: activate to sort column ascending">Province</th>
                                <th data-priority="8" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 77px;"
                                    aria-label="Action: activate to sort column ascending">Date Approved</th>
                                <th data-priority="9" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 77px;"
                                    aria-label="Action: activate to sort column ascending">Status</th>
                                <th data-priority="10" class="sorting" tabindex="0" aria-controls="example"
                                    rowspan="1" colspan="1" style="width: 77px;"
                                    aria-label="Action: activate to sort column ascending">Action</th>
                            </tr>

                            </thead>

                            <tbody>


                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                                <td>dasd</td>
                                <td>dasdas</td>
                                <td>Online</td>
                                <td>
                                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                                <td>dasda</td>
                                <td>dasdas</td>
                                <td>Offline</td>
                                <td>
                                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                </td>

                            </tr>
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>dasda</td>
                                <td>dasd</td>
                                <td>Online</td>
                                <td>
                                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                                <td>asda</td>
                                <td>dasdas</td>
                                <td>Offline</td>
                                <td>
                                    <button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                </td>


                                </td>
                            </tr>
                            </tbody>

                        </table>

                    </div>

                </div>



            </div>
        </div>
    </div>
</x-app-layout>
