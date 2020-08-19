@extends('layouts.app')
@section('content')

<section class="section col-9 ml-5 m-2 p-5 background-primary border rounded" >
    <div class="section__header">
        <div class="section__header__top d-flex justify-content-between ">
            <div class="section__header__top__container">
                <h1 class="section__header__top__container__title text-uppercase">Simuler votre devis</h1>
                <div class="section__header__top__container__lines"></div>
            </div>
            
            <a href="#" class="section__header__top__title__button border rounded text-uppercase p-2 m-2 text-dark button-new">Nouveau devis</a>
        </div>
        <nav class="section__header__nav">
            <ul class="section__header__nav__list list-inline d-flex">
                <li class="section__header__nav__list__item m-1 p-1  text-uppercase">
                    <a href="#" class="section__header__nav__list__item__link rounded p-1 text-decoration-none text-secondary">

                        Type de matériau
                    </a>
            </li>
                <li class="section__header__nav__list__item m-1 p-1  text-uppercase">
                <a href="#" class="section__header__nav__list__item__link rounded p-1 text-decoration-none text-secondary">

                    Partie du plan de travail
                </a>    
            </li>
                <li class="section__header__nav__list__item m-1 p-1  text-uppercase">
                <a href="#" class="section__header__nav__list__item__link rounded p-1 text-decoration-none text-secondary">

                    Crédences et plinthes
                </a>    
            </li>
                <li class="section__header__nav__list__item m-1 p-1  text-uppercase">
                <a href="#" class="section__header__nav__list__item__link rounded p-1 text-decoration-none text-secondary">

                    Découpe
                </a>    
            </li>
                <li class="section__header__nav__list__item m-1 p-1  text-uppercase">
                <a href="#" class="section__header__nav__list__item__link rounded p-1 text-decoration-none text-secondary">

                    Coordonnées complètes
                </a>    
            </li>
            </ul>
        </nav>
    </div>
    <div class="section__main bg-light pt-5 pb-5 pr-5 border rounded">
        <div class="section__main__top">
            <h2 class="section__main__top__title text-uppercase">Liste des devis</h2>
            <p class="section__main__top__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, cumque.
            </br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt numquam necessitatibus dolor quam porro, at cupiditate voluptatibus rem iste facere.</p>
        </div>
        <div class="section__main__top__container row pt-5 d-flex justify-content-end" id="app">
        <?php
        foreach($content as $item){
            ?>
            <devis-component  
            coloris=<?= $item["materiau"]["coloris"]["name"] ?> 
            epaisseur=<?= $item["materiau"]["epaisseur"]["name"] ?>
            imageUrl=<?= $item["materiau"]["coloris"]["image"] ?>
            >
            </devis-component>
            <?php
            
        }
        ?>


            
            </div>  
        </div>
                <div  class="section__main__top__container__button__section mt-5 ">
    
                    <a href="#" class="section__main__top__container__button text-uppercase border rounded p-2 background-primary button-next">Etape suivante</a>
                </div>
    </div>
</section>
<section class="asside col-2 m-2 pt-5 background-primary border rounded" id="app-asside">


    <aside-component></aside-component>
</section>

@endsection