@extends('layouts.app')
@section('content')
<section class="section col-8 m-2 p-5 bg-secondary" >
    <div class="section__header">
        <div class="section__header__top d-flex justify-content-between ">
            <div class="section__header__top__container">
                <h1 class="section__header__top__container__title text-uppercase">Simuler votre devis</h1>
                <div class="section__header__top__container__lines"></div>
            </div>
            
            <a href="#" class="section__header__top__title__button border rounded text-uppercase p-2 m-2">Nouveau devis</a>
        </div>
        <nav class="section__header__nav">
            <ul class="section__header__nav__list list-inline d-flex">
                <li class="section__header__nav__list__item m-1 p-1 border rounded text-uppercase">Type de matériau</li>
                <li class="section__header__nav__list__item m-1 p-1 border rounded text-uppercase">Partie du plan de travail</li>
                <li class="section__header__nav__list__item m-1 p-1 border rounded text-uppercase">Crédences et plinthes</li>
                <li class="section__header__nav__list__item m-1 p-1 border rounded text-uppercase">Découpe</li>
                <li class="section__header__nav__list__item m-1 p-1 border rounded text-uppercase">Coordonnées complètes</li>
            </ul>
        </nav>
    </div>
    <div class="section__main bg-light">
        <div class="section__main__top">
            <h2 class="section__main__top__title text-uppercase">Liste des devis</h2>
            <p class="section__main__top__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, cumque.
            </br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt numquam necessitatibus dolor quam porro, at cupiditate voluptatibus rem iste facere.</p>
        </div>
        <div class="section__main__top__container row pt-5 d-flex justify-content-end">
            <!-- Items -->
            <div class="section__main__top__container__section d-flex bg-secondary col-5 rounded row m-4">
                <div class="section__main__top__container__section__item col-8 mb-4">
                    <div class="section__main__top__container__section__item__top mt-4">
                        <input type="radio" aria-label="Radio button for following text input">
                        <label class="ml-3" for="radio">2020-0001</label>
                    </div>
                    <div class="section__main__top__container__section__item__info d-flex">
                        <div class="section__main__top__container__section__item__info__section mr-4">
                            <p class="section__main__top__container__section__item__info__section__text">Coloris</p>
                            <span>Absolute blacksatin</span>
                        </div>
                        <div class="section__main__top__container__section__item__info__section">
                            <p class="section__main__top__container__section__item__info__section__text">Epaisseur</p>
                            <span>12mm</span>
                        </div>
                    </div>
                </div>
                <div class="section__main__top__container__section__item col-4 ">
                    <img src="./images/image-item.png" alt="" class="section__main__top__container__section__item__image position-absolute">
                    </br>
                    <span class="section__main__top__container__section__item__span position-absolute">Avorio</span>
                </div>
            </div>
            <!-- Items -->
            <div class="section__main__top__container__section d-flex bg-secondary col-5 rounded row m-4">
                <div class="section__main__top__container__section__item col-8 mb-4">
                    <div class="section__main__top__container__section__item__top mt-4">
                        <input type="radio" aria-label="Radio button for following text input">
                        <label class="ml-3" for="radio">2020-0001</label>
                    </div>
                    <div class="section__main__top__container__section__item__info d-flex">
                        <div class="section__main__top__container__section__item__info__section mr-4">
                            <p class="section__main__top__container__section__item__info__section__text">Coloris</p>
                            <span>Absolute blacksatin</span>
                        </div>
                        <div class="section__main__top__container__section__item__info__section">
                            <p class="section__main__top__container__section__item__info__section__text">Epaisseur</p>
                            <span>12mm</span>
                        </div>
                    </div>
                </div>
                <div class="section__main__top__container__section__item col-4 ">
                    <img src="./images/image-item.png" alt="" class="section__main__top__container__section__item__image position-absolute">
                    </br>
                    <span class="section__main__top__container__section__item__span position-absolute">Avorio</span>
                </div>
            </div>
            <!-- Items -->
            <div class="section__main__top__container__section d-flex bg-secondary col-5 rounded row m-4">
                <div class="section__main__top__container__section__item col-8 mb-4">
                    <div class="section__main__top__container__section__item__top mt-4">
                        <input type="radio" aria-label="Radio button for following text input">
                        <label class="ml-3" for="radio">2020-0001</label>
                    </div>
                    <div class="section__main__top__container__section__item__info d-flex">
                        <div class="section__main__top__container__section__item__info__section mr-4 ">
                            <p class="section__main__top__container__section__item__info__section__text">Coloris</p>
                            <span>Absolute blacksatin</span>
                        </div>
                        <div class="section__main__top__container__section__item__info__section">
                            <p class="section__main__top__container__section__item__info__section__text">Epaisseur</p>
                            <span>12mm</span>
                        </div>
                    </div>
                </div>
                <div class="section__main__top__container__section__item col-4 ">
                    <img src="./images/image-item.png" alt="" class="section__main__top__container__section__item__image position-absolute">
                    </br>
                    <span class="section__main__top__container__section__item__span position-absolute">Avorio</span>
                </div>
            </div>
            <!-- Items -->
            <div class="section__main__top__container__section d-flex bg-secondary col-5 rounded row m-4">
                <div class="section__main__top__container__section__item col-8 mb-4">
                    <div class="section__main__top__container__section__item__top mt-4">
                        <input type="radio" aria-label="Radio button for following text input">
                        <label class="ml-3" for="radio">2020-0001</label>
                    </div>
                    <div class="section__main__top__container__section__item__info d-flex">
                        <div class="section__main__top__container__section__item__info__section mr-4">
                            <p class="section__main__top__container__section__item__info__section__text">Coloris</p>
                            <span>Absolute blacksatin</span>
                        </div>
                        <div class="section__main__top__container__section__item__info__section">
                            <p class="section__main__top__container__section__item__info__section__text">Epaisseur</p>
                            <span>12mm</span>
                        </div>
                    </div>
                </div>
                <div class="section__main__top__container__section__item col-4 ">
                    <img src="./images/image-item.png" alt="" class="section__main__top__container__section__item__image position-absolute">
                    </br>
                    <span class="section__main__top__container__section__item__span position-absolute">Avorio</span>
                </div>
            </div>  
        </div>
                <div  class="section__main__top__container__button__section">
    
                    <a href="#" class="section__main__top__container__button text-uppercase  ">Etape suivante</a>
                </div>
    </div>
</section>
<aside class="asside col-3 m-2 p-5 bg-secondary"><h1>I m the aside</h1>
</aside>
@endsection