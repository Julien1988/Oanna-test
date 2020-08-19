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
                    <td>{{ matiereName }}</td>
                </tr>
                <tr>
                    <td>Coloris</td>
                    <td>{{ colorName }}</td>
                </tr>
                <tr>
                    <td>Epaisseur</td>
                    <td>{{ epaisseurTaille }}</td>
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
                    <td>{{ dimensionTaille }}</td>
                </tr>
                <tr>
                    <td>Surface</td>
                    <td>{{ surfaceTaille }}</td>
                </tr>
                <tr>
                    <td>Longueur des chants</td>
                    <td>{{ longueurChant }}</td>
                </tr>
                <tr>
                    <td>Taque de cuisson 01</td>
                    <td>{{ taqueDeCuisson }}</td>
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
                    <td>{{ priseDeCourent }}</td>
                </tr>
                <tr>
                    <td>Autre façonnage</td>
                    <td>{{ autreFaconnage }}</td>
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
                    <td>{{ dimansion }}</td>
                </tr>
                <tr>
                    <td>Surface</td>
                    <td>{{ surface }}</td>
                </tr>
                <tr>
                    <td>Longueur des chants</td>
                    <td>{{ longueurDesChants }}T</td>
                </tr>
            </tbody>
        </table>
        <div class="asside__container">
            <h4 class="asside__container__title">Commentaire</h4>
            <p class="asside__container__text font-weight-bold">
                {{ commentaireUtilisateur }}
            </p>
        </div>
    </aside>
</template>

<script>
export default {
    props: {
        matiereName: {},
        colorName: {},
        epaisseurTaille: {},
        dimensionTaille: {},
        surfaceTaille: {},
        longueurChant: {},
        taqueDeCuisson: {},
        priseDeCourent: {},
        autreFaconnage: {},
        dimansion: {},
        surface: {},
        longueurDesChants: {},
        commentaireUtilisateur: {}
    },
    mounted() {
        console.log("Component mounted !!!");
    }
};
</script>
