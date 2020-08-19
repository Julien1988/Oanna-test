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
            <devis-component></devis-component>
            <devis-component></devis-component>
            <devis-component></devis-component>
            <devis-component></devis-component>
            </div>  
        </div>
                <div  class="section__main__top__container__button__section mt-5 ">
    
                    <a href="#" class="section__main__top__container__button text-uppercase border rounded p-2 background-primary button-next">Etape suivante</a>
                </div>
    </div>
</section>
<aside class="asside col-2 m-2 pt-5 background-primary border rounded">
    <h3 class="asside__title text-uppercase border-bottom pb-3 font-weight-bold">Détail de votre devis</h3>
    <table class="asside_table table table-borderless border-bottom">
        <tbody >
            <tr>
                <td>Matière</td>
                <td>Ceramique</td>
            </tr>
            <tr>
                <td>Coloris</td>
                <td>Avorio</td>
            </tr>
            <tr>
                <td>Epaisseur</td>
                <td>12mm</td>
            </tr>
        </tbody>
    </table>
    <table class="asside_table table table-borderless border-bottom">
        <thead>
            <tr>
                <th class="pb-2" scope="col">Plan 01</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dimension</td>
                <td>2500 x 900 mm</td>
            </tr>
            <tr>
                <td>Surface</td>
                <td>2.25 M2</td>
            </tr>
            <tr>
                <td>Longueur des chants</td>
                <td>2.5 MCT</td>
            </tr>
            <tr>
                <td>Taque de cuisson 01</td>
                <td>Fleur</td>
            </tr>
            <tr>
                <td>Evier 01</td>
                <td>
                    <ul class="list-unstyled">
                        <li>Sous-encastrer</li>
                        <li>Sous-encastrer</li>
                        <li>Sous-encastrer</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Prise de courant</td>
                <td>2PC</td>
            </tr>
            <tr>
                <td>Autre façonnage</td>
                <td>DécoupeA 45°</td>
            </tr>
        </tbody>
    </table>
    <table class="asside_table table table-borderless border-bottom">
        <thead>
            <tr>
                <th class="pb-2" scope="col">Crédance 01</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dimension</td>
                <td>2500 x 900 mm</td>
            </tr>
            <tr>
                <td>Surface</td>
                <td>2.25 M2</td>
            </tr>
            <tr>
                <td>Longueur des chants</td>
                <td>2.5 MCT</td>
            </tr>
          
        </tbody>
    </table>
    <div class="asside__container">
        <h4 class="asside__container__title">Commentaire</h4>
        <p class="asside__container__text font-weight-bold">Lorem ipsum dolor sit amet consectetur.</p>
    </div>
</aside>

@endsection