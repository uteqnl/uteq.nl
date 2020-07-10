@props(['id', 'size' => null, 'style' => null, 'header' => null, 'footer' => null])

<div {{ $attributes->merge(['class' => 'modal modal fade']) }}
     id="{{ $id }}"
     tabindex="-1"
     role="dialog"
     aria-labelledby="{{ $id }}Label"
     aria-hidden="true"
>
    <div class="modal-dialog @if ($size) modal-{{ $size }} @endif " role="document" style="{{ $style }}">
        <div class="modal-content">
            @if ($header)
                <div class="modal-header">
                    <h5 class="modal-title">{!! $header !!}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            {{ $header }}
            @endif


            <div class="modal-body text-dark small pb-5">
                @if (!$header)
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @endif

                {!! $slot !!}
            </div>

            @if ($footer)
                <div class="modal-footer">
                    {!! $footer !!}
                </div>
            @endif
        </div>
    </div>
</div>
