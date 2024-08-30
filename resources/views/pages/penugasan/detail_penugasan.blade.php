<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan</title>
    @include('pages.penugasan.layout.css')

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="/penugasan/index">
                        <span class="icon">
                            <ion-icon name="finger-print-outline"></ion-icon>
                        </span>
                        <span class="title">Inisialisasi 2024</span>
                    </a>
                </li>
                <li class="{{ request()->is('penugasan*') ? 'active' : '' }}">
                    <a
                        href="/penugasan/index">
                        <span class="icon">
                            <ion-icon name="today-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                @foreach ($allTask as $taskGroup)
                    <li class="{{ request()->is('penugasan*') ? 'active' : '' }}">
                        <a
                            href="{{ route('task_group.detail', ['task_group_name' => $taskGroup->task_group_name, 'id' => $taskGroup->id]) }}">
                            <span class="icon">
                                <ion-icon name="today-outline"></ion-icon>
                            </span>
                            <span class="title">{{ $taskGroup->task_group_name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="header">
                    <label>
                        <h1> Penugasan - {{ Request::segment(2) }}</h1>
                    </label>
                </div>

                <div class="user">
                    <img src="{{ asset('inis/images/logo2.jpg') }}" alt="">
                </div>
            </div>

            <!-- === Cards === -->
            <div class="cardBox">
                @foreach ($data->subTasks as $subTask)
                    <a href="{{ route('task.detail', ['task_name' => $subTask->task_name, 'id' => $subTask->id]) }}"
                        style="text-decoration: none;">
                        <div class="card">
                                <div class="cardName">{{ $subTask->task_name }}
                                    <p><span class="highlight">{{ \Carbon\Carbon::parse($subTask->task_due)->format('l, d F Y, h:i A') }}</span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        let list = document.querySelectorAll(".navigation li");

        function activeLink() {
            list.forEach((item) => {
                item.classList.remove("hovered");
            });
            this.classList.add("hovered");
        }

        list.forEach((item) => item.addEventListener("mouseover", activeLink));

        // Menu
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function() {
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        };
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
