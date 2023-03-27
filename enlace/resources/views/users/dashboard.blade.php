@extends('partials.menu-user')

@section('title')
    Panel de administración
@endsection
@section('content')
    <!-- Page Content -->
    <!-- Page Content -->
    <div class="content container-fluid pb-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="card user-card emp-card">
                    <h3 class="card-title-events">Aniversarios de trabajo </h3>
                    <div class="custom-events-card">
                        @foreach ($months as $index => $month)
                            <h4 class="pt-3" style="font-weight: 300">{{ $month }}</h4>
                            <div class="row w-75 m-0">
                                @foreach ($users as $user)
                                    @if ($user['entry_date'] && $user['anniversary_amount'] > 0 && $user['entry_date_month'] == $index + 1)
                                        <div class="col-2 p-0">
                                            <img class="events-img custom-event-image-anniversary my-2"
                                                src="{{ $user['profile_image']
                                                    ? asset('/storage/profile_images/' . $user['profile_image'])
                                                    : asset('/img/user-default.jpg/') }}"
                                                alt="User Image" id="user-anniversary-{{ $user['id'] }}"
                                                onclick="getAnniversary({{ $user['id'] }}, {{ json_encode($user) }})">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="card-body-events-card pb-0">
                        <h5 class="text-black card-body-events-card-name-anniversary"></h5>
                    </div>
                    <div class="card-footer-events-card">
                        <h5>Aniversario: <span class="text-black card-footer-events-card-date-anniversary"> </span></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card user-card emp-card">
                    <h3 class="card-title-events">Próximos cumpleaños </h3>
                    <div class="custom-events-card">
                        @foreach ($months as $index => $month)
                            <h4 class="pt-3" style="font-weight: 300">{{ $month }}</h4>
                            <div class="row w-75 m-0">
                                @foreach ($users as $user)
                                    @if ($user['birthday_month'] == $index + 1 && $user['birthday'])
                                        <div class="col-2 p-0">
                                            <img class="events-img custom-event-image-birthday my-2"
                                                src="{{ $user['profile_image']
                                                    ? asset('/storage/profile_images/' . $user['profile_image'])
                                                    : asset('/img/user-default.jpg/') }}"
                                                alt="User Image" id="user-birthday-{{ $user['id'] }}"
                                                onclick="getBirthday({{ $user['id'] }}, {{ json_encode($user) }})">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="card-body-events-card pb-0">
                        <h5 class="text-black card-body-events-card-name-birthday"></h5>
                    </div>
                    <div class="card-footer-events-card">
                        <h5>Cumpleaños: <span class="text-black card-footer-events-card-date-birthday"> </span></h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection

@section('js')
    <script>
        let menuIcon = "home";
    </script>
@endsection
