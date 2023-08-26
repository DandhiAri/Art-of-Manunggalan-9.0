<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ url('assets/img/logo_aom.png') }}" class="logo" alt="Art of Manunggalan Logo">
            @endif
        </a>
    </td>
</tr>
