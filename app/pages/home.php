@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Section Hero -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-logo">
            <img src="/public/assets/img/LogoVBO.png" alt="Logo Volley Ball Ollioulais" class="hero-logo">
        </div>
        <div class="hero-content">
            <h1>Bienvenue sur le site du<br>
            <strong>Volley Ball Ollioulais</strong></h1>
            <!-- Vous pouvez ajouter un bouton CTA ici si besoin -->
            <a href="#login" class="btn-primary">Se connecter</a>
        </div>
    </div>
</section>

<!-- Section Licences -->
<section class="card-section">
    <h2>Licences</h2>
    <p>Créez facilement votre dossier d'inscription en quelques clics et rejoignez notre équipe dynamique !<br>
    <em>Paiement en ligne et documents à retourner au club.</em></p>
    <!-- Ici, plus tard, un bouton lié à un formulaire contrôlé par le back-office -->
    <a href="#" class="btn-primary">S'inscrire en ligne</a>
</section>

<!-- Section Galerie (liée à votre future fonctionnalité) -->
<section class="card-section">
    <h2>Galerie photos</h2>
    <p>Vous pouvez maintenant directement nous partager vos photos.<br>
    <em>Nous les mettrons en ligne sur le site et nos réseaux.</em></p>
</section>

<!-- Section Parents -->
<section class="card-section">
    <h2>Parents et bénévoles</h2>
    <p>Vous êtes parents de joueur ou vous souhaitez devenir bénévole ?<br>
    <em>Découvrez les actions mise en place par le VBO.</em></p>
</section>
@endsection