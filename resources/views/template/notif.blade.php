@foreach (['success', 'warning', 'danger'] as $status)
    @if (session($status))
        <section>
        <div class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box">
            <a href="" class="close-btn" data-dismiss="alert" aria-label="close">x</a>
            <strong>{{ session($status) }}</strong>
        </div>
        </section>
    @endif
@endforeach
