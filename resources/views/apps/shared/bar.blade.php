<nav class="navbar navbar-expand-lg bg-secondary" style="border-radius: 6px; height: 2em;">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)" style="margin-top: 1px;">
            <i class="tf-icons navbar-icon bx bx-{{ $permiso['icon'] ?? 'user' }}"
                style="margin-bottom:3px; font-size: 15px"></i>
            {{ $permiso['title'] ?? 'N/A' }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-6">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-ex-6">

            <ul class="navbar-nav ms-lg-auto">

                @if (isset($permiso))
                    @foreach ($permiso['links'] ?? [] as $link)
                        @if (count($link['subs']))
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i
                                        class="tf-icons navbar-icon bx bx-{{ $link['icon'] }}"></i></a>
                                <div class="dropdown-menu">
                                    @foreach ($link['subs'] as $sub)
                                        <a style="line-height: 1;" class="dropdown-item"
                                            href="javascript:void(0)">{{ $sub['title'] }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);"><i
                                        class="tf-icons navbar-icon bx bx-{{ $link['icon'] }}"></i>
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif

            </ul>
        </div>
    </div>
</nav>
