@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section__header">
        <div class="section__header__top">
            <div class="section__header__top__container">
                <h1 class="section__header__top__container__title">Simuler votre devis</h1>
            </div>
            <a href="#" class="section__header__top__title__button">Nouveau devis</a>
        </div>
        <nav class="section__header__nav">
            <ul class="section__header__nav__list">
                <li class="section__header__nav__list__item">Type de matériau</li>
                <li class="section__header__nav__list__item">Partie du plan de travail</li>
                <li class="section__header__nav__list__item">Crédences et plinthes</li>
                <li class="section__header__nav__list__item">Découpe</li>
                <li class="section__header__nav__list__item">Coordonnées complètes</li>
            </ul>
        </nav>
    </div>
</section>
<aside class="asside">
    <h1>I m the aside</h1>
</aside>
@endsection