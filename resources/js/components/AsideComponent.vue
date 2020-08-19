<template>
    <aside class="test">
        <h3
            class="asside__title text-uppercase border-bottom pb-3 font-weight-bold"
        >
            Détail de votre devis
        </h3>
        <table class="asside_table table table-borderless border-bottom">
            <tbody>
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
            <p class="asside__container__text font-weight-bold">
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>
    </aside>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted !!!");
    }
};
</script>
