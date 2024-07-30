@foreach (['success', 'warning', 'danger'] as $status)
    @if (session($status))
        <div class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong class="small-text"> {{ session($status) }}</strong>
        </div>
    @endif
@endforeach
<style>
    .small-text {
        font-size: 70%;
        /* Sesuaikan ukuran teks sesuai kebutuhan */
    }

    .alert {
        padding: 5px 15px;
        /* Sesuaikan ukuran padding sesuai kebutuhan */
        margin-bottom: 10px;
        /* Sesuaikan ukuran margin-bottom sesuai kebutuhan */
    }

    .custom-success-box,
    .custom-warning-box,
    .custom-danger-box {
        padding: 10px;
        /* Sesuaikan ukuran padding sesuai kebutuhan */
    }

    .alert {
        transition: opacity 0.5s ease;
    }

    .alert.fade {
        opacity: 0;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.alert').forEach(function (alert) {
            setTimeout(function () {
                if (alert) {
                    alert.classList.add('fade');
                    setTimeout(function () {
                        if (alert) {
                            const closeButton = alert.querySelector('.close');
                            if (closeButton) {
                                closeButton.click();
                            }
                        }
                    }, 500); // Sesuaikan dengan durasi transisi CSS
                }
            }, 3000);
        });
    });

</script>