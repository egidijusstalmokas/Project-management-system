@include('layouts.header')
<div class="content-wrapper p-3">
    <div class="card card-outline card-info">
        <form action="{{ route('company.update', $company->id) }}" method="POST">
        @CSRF
        @method('PUT')
        <div class="card-body">
            <x-jet-validation-errors class="mb-4 text-danger" />
            @include('messages.success')
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <input type="text" name="company_name" value="{{ $company->company_name }}" placeholder="Company name" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <input type="text" name="company_code" value="{{ $company->company_code }}" placeholder="Company code" class="form-control" required>
                </div>
                <div class="col-lg-6 mb-3">
                    <input type="text" name="vat_code" value="{{ $company->vat_code }}" placeholder="VAT number" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <input type="text" name="address" value="{{ $company->address }}" placeholder="Address" class="form-control" required>
                </div>
                <div class="col-lg-4 mb-3">
                    <input type="text" name="city" value="{{ $company->city }}" placeholder="City" class="form-control" required>
                </div>
                <div class="col-lg-4 mb-3">
                    <input type="text" name="postal_code" value="{{ $company->postal_code }}" placeholder="Postal code" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <input type="text" name="country" value="{{ $company->country }}" placeholder="Country" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <input type="text" name="company_manager" value="{{ $company->company_manager }}" placeholder="Full name of company manager" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
    </div>
</div>

@include('layouts.footer')