@extends('pages.penugasan.layout.main')
@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Pengumuman: Membawa Snack coklat jerawat dan minuman band</h3>
            </div>
        </div>
    </div>
    <div class="cardBox">
        <a href="/penugasan/idcard">
            <div class="card">
                <div>
                    <div class="cardName">ID Card</div>
                </div>
                <div class="">
                    <span class="highlight">30 August 2024, 07:00 PM</span>
                </div>
            </div>
        </a>

        <a href="/penugasan/angkatan">
            <div class="card">
                <div>
                    <div class="cardName">Nama & Logo Angkatan</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/booklet">
            <div class="card">
                <div>
                    <div class="cardName">Booklet</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="book-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbangkatan">
            <div class="card">
                <div>
                    <div class="cardName">Database Angkatan</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
