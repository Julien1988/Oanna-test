<template>
    <!-- Items -->
    <div
        class="section__main__top__container__section d-flex background-primary col-5 rounded row m-4"
    >
        <div class="section__main__top__container__section__item col-8 mb-4">
            <div class="section__main__top__container__section__item__top mt-4">
                <input
                    type="radio"
                    aria-label="Radio button for following text input"
                />
                <label class="ml-3" for="radio">2020-0001</label>
            </div>
            <div
                class="section__main__top__container__section__item__info d-flex"
            >
                <div
                    class="section__main__top__container__section__item__info__section mr-4"
                >
                    <p
                        class="section__main__top__container__section__item__info__section__text"
                    >
                        Coloris
                    </p>
                    <span>{{ coloris }}</span>
                </div>
                <div
                    class="section__main__top__container__section__item__info__section"
                >
                    <p
                        class="section__main__top__container__section__item__info__section__text"
                    >
                        Epaisseur
                    </p>
                    <span> {{ epaisseur }} </span>
                </div>
            </div>
        </div>
        <div class="section__main__top__container__section__item col-4 ">
            <img
                v-bind:src="imageUrl"
                alt=""
                class="section__main__top__container__section__item__image position-absolute"
            />

            <span
                class="section__main__top__container__section__item__span position-absolute"
            >
                {{ coloris }}
            </span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        coloris: {},
        epaisseur: {},
        imageUrl: {}
    },

    mounted() {
        //console.log(json);
        console.log("Component mounted.");
    }
};
</script>
