<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
    .card {
    height: 415px;
}
</style>
<div class="container">
    <a href="/mileage/graph"><button type="button" class="btn btn-outline-success mt-5">Check the Graph</button></a>
<div class="row mt-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('store.kmlog') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" name="date" class="form-control" id="date" aria-describedby="date">
                    </div>
                    <div class="mb-3">
                        <label for="start_kms" class="form-label">Start KM:</label>
                        <input type="number" name="start_kms" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="end_kms" class="form-label">End KM:</label>
                        <input type="number" name="end_kms" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save KM Log</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('store.bikeservice') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="service_date" class="form-label">Service Date:</label>
                        <input type="date" name="service_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kms_at_service" class="form-label">KM at Service:</label>
                        <input type="number" name="kms_at_service" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="service_remarks" class="form-label">Service Remarks:</label>
                        <textarea name="service_remarks" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Bike Service</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('store.petrolrefuel') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="refuel_date" class="form-label">Refuel Date:</label>
                        <input type="date" name="refuel_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kms_at_refuel" class="form-label">KM at Refuel:</label>
                        <input type="number" name="kms_at_refuel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="petrol_litres" class="form-label">Petrol in Litres:</label>
                        <input type="number" name="petrol_litres" class="form-control" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="petrol_price" class="form-label">Petrol Price:</label>
                        <input type="number" name="petrol_price" class="form-control" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Petrol Refuel</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>