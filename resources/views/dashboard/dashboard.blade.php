@extends('dashboard.master.master')
@section('dashboard-title', 'Acht | '.'Willkommen Herr '.Auth()->user()->forname)
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard/index.css' )}}">
@endsection

@section('dashboard-body-title', 'Dashboard')
@section('dashboard-body-desc', 'Willkommen im Dashboard')

@section('dashboard-content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Seitenaufrufe Kachel -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5 class="card-title">Seitenaufrufe</h5>
                    <p class="card-text">Anzahl der Aufrufe: </p>
                </div>
            </div>
        </div>

        <!-- Artikel Statistik Kachel -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5 class="card-title">Artikel erstellt</h5>
                    <p class="card-text">Erstellte Artikel: </p>
                </div>
            </div>
        </div>

        <!-- Kategorien und Produkte Kachel -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h5 class="card-title">Erstelle eine Kategorie oder ein Produkt</h5>
                    <p class="card-text">Sie haben noch keine Kategorien oder Produkte erstellt.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <h5>Erstellen Sie Ihre erste Kategorie oder Ihr erstes Produkt!</h5>
        </div>
    </div>
</div>

@endsection

@section('script')
<!-- Optional: Lade hier JS-Skripte, falls erforderlich -->
@endsection
