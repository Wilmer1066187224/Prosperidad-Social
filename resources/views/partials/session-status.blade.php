@if(session('status'))
<div class="alert alert-info alert-dismissible fade show d-flex align-items-center justify-content-between small shadow-sm mb-3 px-3 py-2 rounded" role="alert" id="status-alert">
    <div class="d-flex align-items-center">
        <i class="fas fa-check-circle me-2 fs-5 text-success"></i>
        <span>{{ session('status') }}</span>
    </div>

    <button type="button"
        class="btn-close align-self-center"
        data-bs-dismiss="alert"
        aria-label="Cerrar">
    </button>
</div>

<script>
    setTimeout(function () {
        let alert = document.getElementById('status-alert');
        if (alert) {
            let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        }
    }, 4000);
</script>
@endif
