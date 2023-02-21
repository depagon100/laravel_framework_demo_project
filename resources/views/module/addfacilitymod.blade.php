<x-app-layout>

    <title>Add Facility</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">


                <div class="container">

                    <h3 class="text-success">FACILITY</h3>

                    <table class="table table-borderless table-hover">

                        <tr>
                            <thead>
                            <td>
                                <p>EMB ID: </p>
                            </td>
                            <th>
                                <div class="input-group" style="width:400px">
                                    <select class="form-select btn-primary">
                                        <option selected disabled>EMB (Region)</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select> &nbsp;
                                    <input type="text" class="form-control" placeholder="EMB ID No." style="width:150px">
                                </div>

                            </th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <p>Establishment: </p>
                                </td>
                                <td class="" style="text-align:center"><input type="text" class="form-control" style="width:300px"
                                                                              placeholder="Name of Establishment"></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Street: </p>
                                </td>
                                <td class="" style="text-align:center"><input type="text" class="form-control" style="width:300px"
                                                                              placeholder="Name of Street"></td>
                            </tr>


                            <tr>
                                <td>
                                    <p>Baranggay: </p>
                                </td>
                                <td class="" style="text-align:center"><input type="text" class="form-control" style="width:300px"
                                                                              placeholder="Name of Brgy."></td>
                            </tr>


                            <tr>
                                <td>
                                    <p>City/Muncipality: </p>
                                </td>
                                <td class="" style="text-align:center"><input type="text" class="form-control" style="width:300px"
                                                                              placeholder="Name of City/Muncipality"></td>
                            </tr>


                            <tr>
                                <td>
                                    <p>Province: </p>
                                </td>
                                <td class="" style="text-align:center"><input type="text" class="form-control" style="width:300px"
                                                                              placeholder="Name of Province"></td>
                            </tr>
                            </tbody>


                    </table>


                </div>


            </div>

        </div>
    </div>
</x-app-layout>
