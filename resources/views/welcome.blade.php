@extends('layouts.app')
@section('content')
<section class="section col-8">
    <div class="section__header">
        <div class="section__header__top d-flex ">
            <div class="section__header__top__container">
                <h1 class="section__header__top__container__title">Simuler votre devis</h1>
                <div class="section__header__top__container__lines"></div>
            </div>
            
            <a href="#" class="section__header__top__title__button">Nouveau devis</a>
        </div>
        <nav class="section__header__nav">
            <ul class="section__header__nav__list list-inline d-flex">
                <li class="section__header__nav__list__item m-2 p-2 border rounded">Type de matériau</li>
                <li class="section__header__nav__list__item m-2 p-2 border rounded">Partie du plan de travail</li>
                <li class="section__header__nav__list__item m-2 p-2 border rounded">Crédences et plinthes</li>
                <li class="section__header__nav__list__item m-2 p-2 border rounded">Découpe</li>
                <li class="section__header__nav__list__item m-2 p-2 border rounded">Coordonnées complètes</li>
            </ul>
        </nav>
    </div>
    <div class="section__main">
        <div class="section__main__top">
            <h2 class="section__main__top__title">Liste des devis</h2>
            <p class="section__main__top__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, cumque.
            </br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt numquam necessitatibus dolor quam porro, at cupiditate voluptatibus rem iste facere.</p>
        </div>
        <div class="section__main__top__container">
            <div class="section__main__top__container__item">
                <div class="section__main__top__container__item__top">
                    <input type="radio" aria-label="Radio button for following text input">
                    <label class="ml-3" for="radio">2020-0001</label>
                </div>
                <div class="section__main__top__container__item__info d-flex">
                    <div class="section__main__top__container__item__info__section">
                        <p>Coloris</p>
                        <span>Absolute blacksatin</span>
                    </div>
                    <div class="section__main__top__container__item__info__section">
                        <p>Epaisseur</p>
                        <span>12mm</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<aside class="asside col-4">
    <h1>I m the aside</h1>
</aside>
@endsection