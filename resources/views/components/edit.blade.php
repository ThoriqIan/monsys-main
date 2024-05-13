 <!-- Edit Modal -->
    <div class="modal fade" id="editModal{{$forest->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$forest->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-primary text-gradient">Edit Data</h3>
                        </div>
                        <div class="card-body pb-3">
                            <form action="{{ route('DataForest.update', $forest->id) }}" method="POST">
                              @csrf
                                <!-- Update the fields below according to your data structure -->
                                <label>Tree</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="tree" class="form-control" value="{{ $forest->tree }}" aria-label="Tree" aria-describedby="tree-addon">
                                </div>
                                <label>Soil Moisture (%)</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="soil_moisture" class="form-control" value="{{ $forest->soil_moisture }}" aria-label="Soil Moisture" aria-describedby="soil_moisture-addon">
                                </div>
                                <label>Temperature (°)</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="temperature" class="form-control" value="{{ $forest->temperature }}" aria-label="Temperature" aria-describedby="temperature-addon">
                                </div>
                                <label>Humidity (mg/m³)</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="humidity" class="form-control" value="{{ $forest->humidity }}" aria-label="Humidity" aria-describedby="humidity-addon">
                                </div>
                                <label>Gas</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="gas" class="form-control" value="{{ $forest->gas }}" aria-label="Gas" aria-describedby="gas-addon">
                                </div>
                                <!-- Add other fields here -->
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Update Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</td>